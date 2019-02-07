<?php require 'pageSetup.php'; ?>
<?php
	if(isset($_SESSION['username']) && $permissions>0 && isset($_POST['editting'])) {
		$postquery="SELECT `id`,`username` FROM `mcstuff`.`posts` WHERE `id`='".$_POST['id']."';";
		if(mysqli_fetch_row(mysqli_query($conn,$postquery))[1]==$_SESSION['username']) {
			$tags=',';
			preg_match_all('/\B#[a-zA-Z0-9]+\b/', $_POST['content'], $matches);
			$matchCount=count($matches[0]);
			for($i=0; $i<$matchCount; $i++) {
					
				$testtag=trim(substr($matches[0][$i],1));
				if($testtag!='') {
					$tags.=$testtag.',';
				}
			}
			$sql="UPDATE `mcstuff`.`posts` SET `topic`='".$_POST['topic']."',`tags`='".$tags."',`content`='".mysqli_real_escape_string($conn,$_POST['content'])."' WHERE `id`='".$_POST['id']."';";
			mysqli_query($conn,$sql);
		}
		echo '<meta http-equiv="refresh" content="0; URL=./">';
	}
?>
<body onload="setupNoPosts(); setTime()">
	<script>
		function setTime() {
			var fullTime=postedTime.split(" ");
			var sentTime=fullTime[0];
			var time=new Date();
			var yr=time.getFullYear()+"";
			var mon=(time.getMonth()+1)+"";
			var day=time.getDate()+"";
			if(mon.length<2) {
				mon=0+mon;
			}
			if(day.length<2) {
				day=0+day;
			}
			var date=yr+"-"+mon+"-"+day;
			if(date==fullTime[0]) {
				sentTime=fullTime[1];
			}
			var t=postedTime.split(/[- :]/);
			var d=Date.UTC(t[0], t[1]-1, t[2], t[3], t[4], t[5]);
			$(".time")[0].innerHTML=sentTime+", "+getTimeOnServer(d).yr;
		}
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
		<?php
			if(is_numeric($_GET['id'])) {
				$postquery="SELECT `id`,`username`,`topic`,`tags`,`content`,`time` FROM `mcstuff`.`posts` WHERE `id`='".$_GET['id']."';";
				$postqueryresult=mysqli_query($conn,$postquery);
				$row=mysqli_fetch_row($postqueryresult);
				$oldid=$row[0];
				$oldusername=$row[1];
				$oldtopic=$row[2];
				$oldtags=$row[3];
				$oldcontent=$row[4];
				$oldtime=$row[5];
				if($oldusername!=$_SESSION['username']) {
					echo '<meta http-equiv="refresh" content="0; URL=./">';
				}
				echo '<script>postedTime="'.$oldtime.'"</script>';
			}
			else {
				echo '<meta http-equiv="refresh" content="0; URL=./">';
			}

		?>
		<div id="postoptions">
			<form method="POST">
				<?php echo '<input type="hidden" name="id" value="'.$oldid.'">'; ?>
				<div class="card" user="'+data.posts[i].username+'">
					<div class="postmeta">
						<div class="h"><?php echo $_SESSION['username']; ?></div>
						<div class="topic">
							<select name="topic">
								<?php $topicCount=count($topics); for($i=0; $i<$topicCount; $i++) {echo '<option value="'.$topics[$i].'" '.($oldtopic==$topics[$i]?'selected="selected"':'').'>'.$topics[$i].'</option>';} ?>
							</select>
							<small>(Click to change.)</small>
						</div>
						<div class="time">12:00:00</div>
					</div>
					<div class="stuffing"><textarea placeholder="Type Here." id="texttyping" name="content" required><?php echo $oldcontent; ?></textarea></div>
				</div>
				<input type="submit" name="editting" value="Save">
			</form>
		</div>
	</div></div>
</body>
</html>