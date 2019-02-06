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
			$permissions=intval($row[2]);
			$forecolor=$row[3];
			$backcolor=$row[4];
			$loggedin=true;
		}
		if(isset($_POST['posting'])) {
			$tags=',';
			preg_match_all('/\B#[a-zA-Z0-9]+\b/', $_POST['content'], $matches);
			$matchCount=count($matches[0]);
			for($i=0; $i<$matchCount; $i++) {
					
				$testtag=trim(substr($matches[0][$i],1));
				if($testtag!='') {
					$tags.=$testtag.',';
				}
			}
			$sql="INSERT INTO `mcstuff`.`posts` (`id`,`username`,`topic`,`tags`,`content`) VALUES ('0','".$_SESSION['username']."','".$_POST['topic']."','".$tags."','".mysqli_real_escape_string($conn,$_POST['content'])."');";
			mysqli_query($conn,$sql);
		}
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
	<script>
		function setTime() {
			var time=new Date();
			var hr=time.getHours()+"";
			var min=time.getMinutes()+"";
			var sec=time.getSeconds()+"";
			if(hr.length<2) {
				hr=0+hr;
			}
			if(min.length<2) {
				min=0+min;
			}
			if(sec.length<2) {
				sec=0+sec;
			}
			$(".time")[0].innerHTML=hr+":"+min+":"+sec+", "+getTimeOnServer().yr;
		}
		setInterval(setTime,500);
	</script>
	<?php
		if($loggedin) {
			echo '<style>.card{background-color:#'.$backcolor.'; color:#'.$forecolor.';}</style>';
		}
	?>
	<?php if($loggedin) {echo '<script>username="'.$_SESSION['username'].'"; loggedin=true;</script>';} else {echo '<script>loggedin=false;</script>';} ?>
	<?php
		if(!$loggedin){echo  '<meta http-equiv="refresh" content="0; URL=./login.php">';}
		elseif($permissions<1){echo  '<meta http-equiv="refresh" content="0; URL=./">';}
	?>
	<style>
		input[type=submit] {
			margin-left: 1rem;
		}
	</style>
</head>
<body onload="setupNoPosts(); setTime()">
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
			</div>
		</div>
		<div id="postoptions">
			<form method="POST">
				<div class="card" user="'+data.posts[i].username+'">
					<div class="postmeta">
						<div class="h"><?php echo $_SESSION['username']; ?></div>
						<div class="topic">
							<small>Topic:</small>
							<select name="topic">
								<?php $topicCount=count($topics); for($i=0; $i<$topicCount; $i++) {echo '<option value="'.$topics[$i].'">'.$topics[$i].'</option>';} ?>
							</select>
							<small>(Click to change.)</small>
						</div>
						<div class="time">12:00:00</div>
					</div>
					<div class="stuffing"><textarea placeholder="Type Here." id="texttyping" name="content" required></textarea></div>
				</div>
				<input type="submit" name="posting" value="Post">
			</form>
		</div>
	</div></div>
</body>
</html>