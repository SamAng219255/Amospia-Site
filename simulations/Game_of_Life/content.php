<div display="none">
	<script src="simulations/Game_of_Life/cont_Game_of_Life.js"></script>
	<script src="simulations/Game_of_Life/organization_and_grammar.js"></script>
	<script>fooBack=[[],[],false]; fooCount=0; grid=true; notRunning=true; loadable=false;</script>
	<style>
		#content * {
			white-space: inherit;
		}
		#center {
			overflow: scroll;
		}
		#mapBox {
			background-color: #ffffff;
			width: 1024px;
			height: 1024px;
		}
		#outerMapBox {
			overflow-y: hidden;
			overflow-x: scroll;
			height: 1024px;
			max-width: 1024px;
			width: 100%;
			border-width: 2px;
			border-style: solid;
			margin: auto;
		}
	</style>
</div>
<div id="stuff">
	<div id="buttons">
		<script>
			function start() {
				if(notRunning) {
					fooBack[0]=foo;
					fooBack[2]=true;
					fooCount=0;
					notRunning=false;
					bar=setInterval(lifer,1000*document.getElementById("box1").value)
				}
				if(loadable) {
					loadable=false;
					var element = document.getElementById("downloadButton");
					element.parentNode.removeChild(element);
				}
			}
		</script>										
		<button type="button" onclick="start()">Start</button>
		<input type="number" id="box1" placeholder="Interval" value="0.25"></input>
		<button type="button" onclick="clearInterval(bar); notRunning=true;">Stop</button>
		<script>
			function noise() {
				for(var i=0; i<1024/UCAsize; i++) {for(var j=0; j<1024/UCAsize; j++){ if(Math.random()<document.getElementById("box2").value) {foo[i][j]=true}}} showLife(foo);
			}
		</script>
		<button type="button" onclick="noise()">Noise</button>
		<input type="number" id="box2" placeholder="Added Density" value="0.3125"></input>
		<script>
			function clearMat() {
				fooBack[1]=foo;
				fooBack[2]=false;
				foo=emptyProto();
				showLife(foo);
			}
		</script>
		<button type="button" onclick="clearMat()">Clear</button>
		<script>
			function reset() {
				if(fooBack[2]) {
					fooBack[1]=foo;
					foo=fooBack[0];
				}
				else {
					var fooTemp=foo;
					foo=fooBack[1];
					fooBack[1]=fooTemp;
				}
				fooBack[2]=false;
				showLife(foo);
			}
		</script>
		<button type="button" onclick="reset()">Reset</button>
		<button onclick="UCAsize=document.getElementById('sizeBox').value; setGrid(Math.floor(1024/UCAsize)); showLife(foo)">Change Cell Size</button>
		<input type="number" id="sizeBox" placeholder="Cell Size" value=16></input>
		<button onclick="prepareDownload()">Prepare Download</button>
		<p id="fooCounterDiv">Rounds: 0</p>
	</div>
	<div id="outerMapBox">
		<canvas id="mapBox" width="1024" height="1024"></canvas>
		<script>canvasSetup()</script>
	</div>
	<script>
		setGrid(Math.floor(1024/UCAsize));
	</script>
</div>