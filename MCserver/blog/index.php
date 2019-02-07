<?php require 'pageSetup.php'; ?>
<?php
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
?>
<body onload="setup()">
	<style id="userstyles"></style>
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