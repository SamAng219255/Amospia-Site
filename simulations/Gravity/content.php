<div display="none">
	<script src="simulations/Gravity/Gravity.js"></script>
	<style>
		#viewPort {
			background-color: #000000;
			margin: auto;
			width: 500px;
			height: 500px;
		}
		#controlPanel {
			background-color: #888888;
			width: 400;
			height: 500;
			float: left;
			position: relative;
			overflow-x: hidden; 
			overflow-y: scroll;
		}
		#controllers {
			padding: 10px;
		}
		#log {
			background-color: #CCCCCC;
			height: 10em; 
			width: auto;
			overflow: scroll;
			position: relative;
			color: black;
		}
		.bars {
			height: 100%;
			width: 33.33%;
			float: left;
		}
		#content * {
			white-space: inherit;
		}
		#stillHold {
			display: inline;
			border-style: solid;
		}
	</style>
</div>
<div display="width:100%">
	<div id="controllers">
		<input type="text" placeholder="name" id="orbiterName">
		<input type="number" placeholder="mass" id="mass">
		<input type="number" placeholder="radius" id="radius">
		<input type="number" placeholder="x position" id="xPos">
		<input type="number" placeholder="y position" id="yPos">
		<input type="number" placeholder="x velocity" id="xVel">
		<input type="number" placeholder="y velocity" id="yVel">
		<input type="text" placeholder="color" id="color">
		<div id="stillHold"><input type="checkbox" id="still">Static.</div>
		<br>
		<input type="button" value="Create Object" onclick="createOrbiter()">
		<input type="button" value="Remove Object" onclick="removeOrbiterKey()">
		<br>
		<input type="button" value="Start" onclick="startOrbits()"><input type="button" value="Stop" onclick="stopOrbits()">
		<input type="button" value="Zoom Out" onclick="zoomOut()"><input type="button" value="Zoom In" onclick="zoomIn()">
		<input type="text" placeholder="save" style="width: 100px;" id="output">
		<input type="button" value="save" style="width: 100px;" onclick="outputGrav()">
		<input type="text" placeholder="load" style="width: 100px;" id="input">
		<input type="button" value="load" style="width: 100px;" onclick="inputGrav()">
	</div>
	<canvas id="viewPort" width="500" height="500" onkeydown="return keyPressed(event)"></canvas>
	<div id="log">
		
	</div>
	<div>
	<h3>Example Saves:</h3>
	<p>(Paste into the "load" box and click load.)</p>
	<dl>
		<dt>Sun, Planet, and Moon system.</dt>
		<dd>{Earth:{color:"#00FF88",mass:81,radius:20,xPos:880,yPos:0,xVel:0,yVel:240},Sun:{color:"#FFFF88",mass:6561,radius:240,xPos:0,yPos:0,xVel:0,yVel:-3},Moon:{color:"#FFFFFF",mass:1,radius:5,xPos:910,yPos:0,xVel:0,yVel:400}}</dd>
		<dt>Sun and two planets system.</dt>
		<dd>{Sun:{mass:162,color:"#FFFF88",radius:40,xPos:0,yPos:0,xVel:-0.25,yVel:-3.5},Earth:{mass:4,color:"#00FF88",radius:10,xPos:100,yPos:0,xVel:0,yVel:120},Mars:{mass:1,color:"#880000",radius:5,xPos:350,yPos:0,xVel:0,yVel:60}}</dd>
	</dl>
	<script>draw()</script>
</div>