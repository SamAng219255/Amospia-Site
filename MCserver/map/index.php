<html>
<head>
	<style>
		@font-face{
			font-family: "pixel";
			src: url('pixel.ttf');
		}
		@font-face{
			font-family: "big_pixel";
			src: url('big_pixel.ttf');
		}
		body {
			background-image: url("../img/bedrock.png");
			background-size: 8em;
			background-color: #404040;
			image-rendering: pixelated;
			image-rendering: crisp-edges;/*One or the other will work, hopefully.*/
			font-family: pixel;
		}
		#mapcontainer {
			margin: auto;
			width: 640px;
			height: 640px;
			position: relative;
			border-style: solid;
			border-width: 4px;
			margin-bottom: 3em;
		}
		#mapcontainer>canvas {
			position: absolute;
		}
		#mcmap {
			background-image: url("../img/stone.png");
			background-size: 8em;
			background-color: #808080;
			image-rendering: pixelated;
			image-rendering: crisp-edges;/*One or the other will work, hopefully.*/
		}
		#tileStorage {
			display: none;
		}
		#infoTxt {
			height: 2em;
			width: 100%;
			position: absolute;
			bottom: -2.5em;
			text-align: center;
			background-color: #404040;
			color: #ffffff;
		}
	</style>
	<script src="../../chat/jquery.js"></script>
	<script src="tiling.js"></script>
	<title>Map - AmospiaCraft</title>
	<link href="../img/icon.png" rel="shortcut icon">
</head>
<body>
	<div id="mapcontainer">
		<canvas height=640 width=640 id="mcmap" onkeydown="move(event)"></canvas>
		<canvas height=640 width=640 id="overlay" onclick="highlight(event)"></canvas>
		<div id="tileStorage"><img id="default-img" src="img/default.png"></div>
		<div id="infoTxt">Use the <b>Arrow Keys</b> to move the map.</div>
	</div>
	<script>setup();</script>
</body>
</html>