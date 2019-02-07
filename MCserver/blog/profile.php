<?php require 'pageSetup.php'; ?>
<?php 
	if(!$loggedin){echo  '<meta http-equiv="refresh" content="0; URL=./login.php">';}
?>
<body onload="setupNoPosts()">
	<style>#profile{cursor: initial;}</style>
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
						$.get("getSkin.php?new",function(data) {
							if(data.updated) {
								updateskinstatus.innerHTML="Your skin has been updated.";
								profileIcon.style="background-image: url("+data.skin+"), url("+data.skin+");";
							}
							else {
								updateskinstatus.innerHTML="I'm sorry. The server was not able to access your skin.";
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