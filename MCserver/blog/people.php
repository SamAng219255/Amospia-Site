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
	require 'db.php';
	if(isset($_SESSION['username'])) {
		$query="SELECT `username`,`uuid`,`permissions`,`forecolor`,`backcolor`,`nation`,`character`,`prefix`,`suffix` FROM `mcstuff`.`users` WHERE `username`='".$_SESSION['username']."';";
		if($queryresult=mysqli_query($conn,$query)) {
			$row=mysqli_fetch_row($queryresult);
			$uuid=$row[1];
			$permissions=intval($row[2]);
			$forecolor=$row[3];
			$backcolor=$row[4];
			$nation=$row[5];
			$character=$row[6];
			$prefix=$row[7];
			$suffix=$row[8];
			$loggedin=true;
		}
	}
	$topics=array('General','Announcements','War','Trade','Alliances','Politics','History','Meta');
	if($loggedin && $permissions>0) {
		array_push($topics,'Admin');
	}
	require 'model.php';
?>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>AmospiaCraft</title>
	<link rel="stylesheet" type="text/css" href="./theme.css">
	<link rel="stylesheet" type="text/css" href="./model.css">
	<link href="./img/sign.png" rel="shortcut icon">
	<script src="../../jquery.js"></script>
	<script src="../getTimeOnServer.js"></script>
	<script src="loadposts.js"></script>
	<?php if($loggedin) {echo '<script>username="'.$_SESSION['username'].'"; loggedin=true;</script>';} else {echo '<script>loggedin=false;</script>';}?>
	<style>#profile{cursor: initial;}</style>
</head>
<body onload="setupNoPosts()">
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
		<div id="people">
			<?php
				$styles='';
				$stylequery="SELECT `username`,`forecolor`,`backcolor`,`nation`,`character`,`prefix`,`suffix`,`permissions` FROM `mcstuff`.`users` WHERE `permissions`>0;";
				$stylequeryresult=mysqli_query($conn,$stylequery);
				for($i=0; $i<$stylequeryresult->num_rows; $i++) {
					$row=mysqli_fetch_row($stylequeryresult);
					echo '<div class="card" user="'.$row[0].'"><table><tr><td rowspan="2"><div class="image">';
					addModel($row[0]);
					echo '</div></td><td><div class="postmeta"><div class="h">'.$row[0].'</div></div></td></tr><tr><td><div class="stuffing">';
					echo '<span>Character: '.$row[5].' '.$row[4].' '.$row[6].'</span><br><span>Nation: '.$row[3].'</span><br><a href="./?poster='.$row[0].'">Click here to see their posts.</a>';
					echo '</div></td></tr></div>';
					$styles.='
.card[user='.$row[0].'] {
	color: #'.$row[1].';
	background-color: #'.$row[2].';
}
.model[user='.$row[0].'] .face {
	background-image: url("./skins/'.$row[0].'.png");
}';
				}
				echo '<style>'.$styles.'
</style>';
			?>
		</div>
	</div></div>
</body>
</html>