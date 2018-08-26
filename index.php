<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Amospia</title>
		<link rel="stylesheet" type="text/css" href="theme.css">
		<link href="./img/icon.png" rel="shortcut icon">
	</head>
	<body>
		<div id="navigation">
			<a href="./"><div id="title">Amospia</div></a>
			<div class="navButton">
				<a href="?target=.%2Fmisc%2F">Misc.</a>
				<div class="dropdown">
					<a href="?target=.%2Fmisc%2FCalculator%2F"><div>Calculator</div></a>
					<a href="?target=.%2Fmisc%2Frgb"><div>RGB Sliders</div></a>
					<a href="./misc/Alchahemistry/"><div>Alchahemistry (WIP)</div></a>
				</div>
			</div>
			<div class="navButton"><a href="./MCserver/">Minecraft</a></div>
			<div class="navButton">
				<a href="?target=.%2Fgames%2F">Games</a>
				<div class="dropdown">
					<a href="./games/aGreatAdventure/"><div>A Great Adventure</div></a>
					<a href="./games/Alchahemistry/home/"><div>Alchahemistry</div></a>
				</div>
			</div>
			<div class="navButton">
				<a href="?target=.%2Fsimulations%2F">Simulations</a>
				<div class="dropdown">
					<a href="?target=.%2Fsimulations%2FGame_of_Life%2F"><div>Game of Life</div></a>
					<a href="?target=.%2Fsimulations%2FGravity%2F"><div>Gravity</div></a>
				</div>
			</div>
			<div class="navButton"><a href="./chat/">Chat Room</a></div>
		</div>
		<div id="content">
			<?php
				if(isset($_GET['target'])) {
					require $_GET['target'].'content.php';
				}
				else {
					require 'content.php';
				}
			?>
		</div>
	</body>
</html>