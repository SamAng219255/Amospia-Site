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
		<canvas height=640 width=1152 id="mcmap" onkeydown="move(event)" onclick="highlight(event)"></canvas>
		<canvas height=640 width=1152 id="overlay"></canvas>
		<canvas height=640 width=1152 id="points"></canvas>
		<div id="tileStorage"><img id="default-img" src="img/stone.png"></div>
		<div id="infoTxt">Use the <b>Arrow Keys</b> to move the map or press <b>Shift</b> to jump to a location and press <b>Enter</b> to toggle pins.<br>Click on a pin to show information on that location.</div>
	</div>
	<div id="jumpMenu">
		<div>
			<div onkeydown="jumpCoordFunc(event)" id="jumpCoordForm">
				<label for="jumpCoordX">X: </label>
				<input type="number" placeholder="x" id="jumpCoordX" step="1">
				&nbsp;&nbsp;
				<label for="jumpCoordZ">Z: </label>
				<input type="number" placeholder="z" id="jumpCoordZ" step="1">
			</div>
			<div class="divider"><span>OR</span></div>
			<div onkeydown="jumpPinFunc(event)" id="jumpPinForm">
				<label for="jumpPin">Pin Name: </label>
				<input type="text" placeholder="Pin Name" id="jumpPin">
			</div>
		</div>
	</div>
	<script>setup();</script>
</body>
</html>