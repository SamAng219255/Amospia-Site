
<div style="display: none">
	<script src="misc/Calculator/Utilities.js"></script>
	<script src="misc/Calculator/ContDisplay.js"></script>
	<script src="misc/Calculator/MathFuncs.js"></script>
	<script src="misc/Calculator/parseMath.js"></script>
	<style>
		#content * {
			white-space: normal;
		}
		#Graph {
			background-color: #FFFFFF;
			width: 500px;
			height: 500px;
			margin: auto;
			display: block;
		}
		#controlPane {
			margin: 0;
			width: 500px;
			margin: auto;
			position: relative;
			overflow-x: hidden; 
			overflow-y: scroll;
		}
		#controlPane>:nth-child(1) {
			float: left;
		}
		#controlPane>:nth-child(2) {
			float: right;
		}
		.rangeBox {
			width: 40px;
		}
	</style>
</div>
<div id="body">
	<canvas id="Graph" width=500 height=500></canvas>
	<script>canvasSetup()</script>
	<div id="controlPane">
		<div>
			<div id="funcs">
				<div>Javascript Math Function:</div>
				<div>a(x)=<input type="text" id="JsMFunc1" placeholder="Function 1"></input></div>
				<div>b(x)=<input type="text" id="JsMFunc2" placeholder="Function 2"></input></div>
				<div>c(x)=<input type="text" id="JsMFunc3" placeholder="Function 3"></input></div>
				<div>d(x)=<input type="text" id="JsMFunc4" placeholder="Function 4"></input></div>
			</div>
			<div>
				<div>Window:</div>
				[<input type="number" id="rangeA1" class="rangeBox"></input>,<input type="number" id="rangeA2" class="rangeBox"></input>],[<input type="number" id="rangeB1" class="rangeBox"></input>,<input type="number" id="rangeB2" class="rangeBox"></input>]
			</div>
			<div>
				<input type="button" onclick="graphButton()" value="Graph"></input>
			</div>
		</div>
		<div>
			<div>
				<div>Precision:</div>
				<input style="width: 150px" value=500 Placeholder="Default/Suggested is 500" id="Precise"></input>
			</div>
			<div>
				<div>Graph Mode:</div>
				<select id="graphMode" onchange="switchTranslate()">
					<option value="default">Function</option>
					<option value="Parametric">Parametric</option>
				</select>
			</div>
			<div>
				<div>Click Detection:</div>
				<select id="detectType">
					<option value="default">Default</option>
					<option value="near">Nearest</option>
				</select>
			</div>
			<div>
				<div>Find:</div>
				<select id="roundType">
					<option value="none">None</option>
					<option value="zero">Zero</option>
					<option value="intersect">Intersection</option>
				</select>
			</div>
			<div>
				<div>On:</div>
				<select id="funcLetter">
					<option value="a">function a(x)</option>
					<option value="b">function b(x)</option>
					<option value="c">function c(x)</option>
					<option value="d">function d(x)</option>
				</select>
			</div>
		</div>
	</div>
</div>