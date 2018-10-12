<html>
<head>
	<style>
		#mcmap {
			background-color: #808080;
			margin: auto;
			width: 640px;
			height: 640px;
		}
		#tileStorage {
			display: none;
		}
	</style>
	<script src="../../chat/jquery.js"></script>
	<script src="tiling.js"></script>
</head>
<body>
	<canvas height=640 width=640 id="mcmap" onkeydown="move(event)"></canvas>
	<div id="tileStorage"><img id="default-img" src="img/default.png"></div>
	<script>setup();</script>
</body>
</html>