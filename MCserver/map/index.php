<html>
<head>
	<link rel="stylesheet" type="text/css" href="./theme.css">
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