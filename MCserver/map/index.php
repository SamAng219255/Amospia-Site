<html>
<head>
	<link rel="stylesheet" type="text/css" href="./theme.css">
	<script src="../../chat/jquery.js"></script>
	<script src="tiling.js"></script>
	<title>Map - AmospiaCraft</title>
	<link href="../img/icon.png" rel="shortcut icon">
</head>
<body onkeydown="return move(event)" onload="setup();">
	<canvas height=640 width=1152 id="mcmap" onclick="highlight(event)"></canvas>
	<div id="tileStorage"><img id="default-img" src="img/stone.png"></div>
	<div id="infoTxt"></div>
	<div id="jumpMenu">
		<div onclick="closeJumpMenu()"></div>
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
	<div id="instr">
		<div>
			<p>Controls:</p>
			<ul>
				<li>Use the <b>Arrow Keys</b> to move the map or press <b>Shift</b> to jump to a location.</li>
				<li>Use the <b>Scroll Wheel</b> to zoom the map in or out.</li>
				<li>Press <b>Enter</b> to toggle pin visibility.</li>
				<li><b>Click</b> on a pin or map square to show information about that location.</li>
				<li>Press <b>Tab</b> to toggle this menu.</li>
			</ul>
		</div>
	</div>
</body>
</html>