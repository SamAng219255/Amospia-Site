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
	<?php if($loggedin) {echo '<script>username="'.$_SESSION['username'].'"; loggedin=true;</script>';} else {echo '<script>loggedin=false;</script>';}
		if(!$loggedin){echo  '<meta http-equiv="refresh" content="0; URL=./login.php">';}
	?>
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
				<div id="profile"></div>
				<?php if($loggedin && $permissions>0) {echo '<div id="postbutton"><a href="post.php"><div class="lighten"></div></a></div>';}?>
			</div>
		</div>
		<div id="settings">
			<div id="settingscontainer">
				<input type="button" id="updateskin" value="Update Skin"><br>
				<span id="updateskinstatus"></span>
				<script>
					document.getElementById("updateskin").addEventListener("click",function(){
						updateskinstatus=document.getElementById("updateskinstatus");
						updateskinstatus.innerHTML="Updating Skin.";
						setTimeout(function(){
							if(updateskinstatus.innerHTML=="Updating Skin.") {
								updateskinstatus.innerHTML="Updating Skin. (This may take a while.)";
							}
						},5000);
						$.get("getSkin.php",function(data) {
							if((/^\.\/(skins|img)\/[a-zA-Z0-9_]+\.png$/).test(data)) {
								if(data!="./img/steve.png") {
									updateskinstatus.innerHTML="Your skin has been updated.";
									profileIcon.style="background-image: url("+data+"), url("+data+");";
								}
								else {
									updateskinstatus.innerHTML="I'm sorry. The server was not able to access your skin.";
								}
							}
							else {
								updateskinstatus.innerHTML="An error has occured.";
							}
						})
					})
				</script>
				<?php if($loggedin){ require 'settings.php'; } ?>
				<form method="POST"><input name="logout" type="submit" value="Log Out"></form>
			</div>
		</div>
	</div></div>
</body>
</html>