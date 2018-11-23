<html>
	<head>
		<meta name="google-site-verification" content="3bii4_HwGrsu32YgfDY5iQldwDtKiesjJYtWzAtz8sc" />
		<meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0">
		<meta name="apple-mobile-web-app-capable" content="yes" />
		<title>Amospia</title>
		<link rel="stylesheet" type="text/css" href="theme.css">
		<link href="./img/icon.png" rel="shortcut icon">
		<script src="./chat/jquery.js"></script>
	</head>
	<body>
		<div id="navigation">
			<a href="./"><div id="title">Amospia</div></a>
			<div class="navButton">
				<a href="?target=.%2Fmisc%2F">Misc.</a>
				<div class="dropdown">
					<a href="?target=.%2Fmisc%2FCalculator%2F"><div>Calculator</div></a>
					<a href="./misc/rgb/"><div>RGB Sliders</div></a>
					<a href="./misc/palette/"><div>Random Palette Generator</div></a>
					<a href="./misc/Alchahemistry/"><div>Alchahemistry (WIP)</div></a>
				</div>
			</div>
			<div class="navButton"><a href="./MCserver/">Minecraft</a></div>
			<div class="navButton">
				<a href="?target=.%2Fgames%2F">Games</a>
				<div class="dropdown">
					<a href="./games/aGreatAdventure/"><div>A Great Adventure</div></a>
					<a href="./games/Alchahemistry/Home/"><div>Alchahemistry</div></a>
					<a href="?target=.%2Fgames%2FDropBlock%2F"><div>DropBlock</div></a>
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
		<div id="mobilenavigation">
			<a href="./"><div id="title">Amospia</div></a>
			<div class="navButton"><a href="./chat/">Chat Room</a></div>
			<div class="navButton">
				<a onclick="showMenu('simulations')">Simulations</a>
			</div>
			<div class="navButton">
				<a onclick="showMenu('games')">Games</a>
			</div>
			<div class="navButton"><a href="./MCserver/">Minecraft</a></div>
			<div class="navButton">
				<a onclick="showMenu('misc')">Misc.</a>
			</div>
			<script>
				function showMenu(targetMenu) {
					$("#"+targetMenu+"Menu.mobilemenu").addClass("shown");
				}
				function hideMenu(targetMenu) {
					$("#"+targetMenu+"Menu.mobilemenu").removeClass("shown");
				}
			</script>
		</div>
		<div class="mobilemenu" id="simulationsMenu">
			<p>Navigation Sub-Menu: Simulations</p>
			<p onclick="hideMenu('simulations')">Close</p>
			<a href="?target=.%2Fsimulations%2F"><div>Simulations Description</div></a>
			<a href="?target=.%2Fsimulations%2FGame_of_Life%2F"><div>Game of Life</div></a>
			<a href="?target=.%2Fsimulations%2FGravity%2F"><div>Gravity</div></a>
		</div>
		<div class="mobilemenu" id="gamesMenu">
			<p>Navigation Sub-Menu: Games</p>
			<p onclick="hideMenu('games')">Close</p>
			<a href="?target=.%2Fgames%2F"><div>Games Description</div></a>
			<a href="./games/aGreatAdventure/"><div>A Great Adventure</div></a>
			<a href="./games/Alchahemistry/Home/"><div>Alchahemistry</div></a>
			<a href="?target=.%2Fgames%2FDropBlock%2F"><div>DropBlock</div></a>
		</div>
		<div class="mobilemenu" id="miscMenu">
			<p>Navigation Sub-Menu: Misc.</p>
			<p onclick="hideMenu('misc')">Close</p>
			<a href="?target=.%2Fmisc%2F"><div>Misc. Description</div></a>
			<a href="?target=.%2Fmisc%2FCalculator%2F"><div>Calculator</div></a>
			<a href="./misc/rgb/"><div>RGB Sliders</div></a>
			<a href="./misc/palette/"><div>Random Palette Generator</div></a>
			<a href="./misc/Alchahemistry/"><div>Alchahemistry (WIP)</div></a>
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