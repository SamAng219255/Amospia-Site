<?php
	session_start();
	if ((isset($_SESSION['last_active']) && (time() - $_SESSION['last_active'] > 1800)) || (!isset($_SESSION['last_active']) && isset($_SESSION['loggedin']))) {
		session_unset();
		session_destroy();
	}
	if(isset($_POST['logout'])) {
		session_unset();
		session_destroy();
	}
	$_SESSION['last_active']=time();
	$loggedin=false;
	if(isset($_SESSION['username'])) {
		require 'db.php';
		$query="SELECT `username`,`uuid`,`permissions`,`forecolor`,`backcolor` FROM `mcstuff`.`users` WHERE `username`='".$_SESSION['username']."';";
		if($queryresult=mysqli_query($conn,$query)) {
			$row=mysqli_fetch_row($queryresult);
			$uuid=$row[1];
			$_SESSION['permissions']=$permissions=intval($row[2]);
			$forecolor=$row[3];
			$backcolor=$row[4];
			$loggedin=true;
		}
	}
	if(isset($_GET['topic']) && trim($_GET['topic'])!='') {
		$_SESSION['topic']=$_GET['topic'];
	}
	else {
		unset($_SESSION['topic']);
	}
	if(isset($_GET['tag']) && trim($_GET['tag'])!='') {
		$_SESSION['tag']=$_GET['tag'];
	}
	else {
		unset($_SESSION['tag']);
	}
	if(isset($_GET['poster']) && trim($_GET['poster'])!='') {
		$_SESSION['poster']=$_GET['poster'];
	}
	else {
		unset($_SESSION['poster']);
	}
	$topics=array('General','Announcements','War','Trade','Alliances','Politics','History','Meta');
	if($loggedin && $permissions>0) {
		array_push($topics,'Admin');
	}
?>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>AmospiaCraft</title>
	<link rel="stylesheet" type="text/css" href="./theme.css">
	<link href="./img/sign.png" rel="shortcut icon">
	<script src="../../jquery.js"></script>
	<script src="../getTimeOnServer.js"></script>
	<script src="loadposts.js"></script>
	<style id="userstyles"></style>
	<?php if($loggedin) {echo '<script>username="'.$_SESSION['username'].'"; loggedin=true;</script>';} else {echo '<script>loggedin=false;</script>';} ?>
</head>
<body onload="setup()">
	<div id="wrapper"><div id="wrapper2">
		<div id="stars1"></div>
		<div id="stars2"></div>
		<div id="stars3"></div>
		<div id="navigation">
			<div id="topics">
				<a href="./">
					<span>All</span>
				</a>
				<span id="topicchoice">
					<span>Topics</span>
					<div class="dropdown dropdown-left">
						<?php $topicCount=count($topics); for($i=0; $i<$topicCount; $i++) {echo '<a href="./?topic='.$topics[$i].'">'.$topics[$i].'</a>';} ?>
					</div>
				</span>
				<span id="tagchoice">
					<span>Tags</span>
					<div class="dropdown dropdown-left">
						<input id="tagSearch" placeholder="Enter Tag">
						<button id="tagSearchButton">Search</button>
					</div>
				</span>
				<a href="./people.php">
					<span>People</span>
				</a>
			</div>
			<div id="options">
				<div id="profile">
					<div class="lighten"></div>
					<div class="dropdown">
						<?php
							if($loggedin) {
								echo '<a href="profile.php">Profile</a>';
								echo '<a><form method="POST"><input name="logout" type="submit" value="Log Out"></form></a>';
							}
							else {
								echo '<a href="login.php">Log In</a>';
							}
						?>
					</div>
				</div>
				<?php if($loggedin && $permissions>0) {echo '<div id="postbutton"><a href="post.php"><div class="lighten"></div></a></div>';}?>
			</div>
		</div>
		<div id="text">
		</div>
	</div></div>
</body>
</html>