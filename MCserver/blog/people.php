<?php require 'pageSetup.php'; ?>
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
				$stylequery="SELECT `username`,`forecolor`,`backcolor`,`nation`,`character`,`prefix`,`suffix`,`permissions`,`skin` FROM `mcstuff`.`users` WHERE `permissions`>0;";
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
	background-image: url("'.$row[8].'");
}';
				}
				echo '<style>'.$styles.'
</style>';
			?>
		</div>
	</div></div>
</body>
</html>