<html>
	<head>
	<meta charset="utf-8"/>
		<style>
		body {

		}
		</style>
		<script>
			fromBox=false;
			fullColour=[128,128,128];
			function recolour(e) {
				var color=document.getElementById("color").value;
				document.getElementById("body").style.backgroundColor="#"+color;
				var colour=[,,];
				color=color.split("");
				for(var i=0; i<3; i++) {
					colour[i]=(color[(2*i)]+color[(2*i+1)]);
					colour[i]=parseInt(colour[i],16);
				}
				document.getElementById("R").value=colour[0];
				document.getElementById("G").value=colour[1];
				document.getElementById("B").value=colour[2];
				document.getElementById("r").value=document.getElementById("R").value.toString();
				document.getElementById("g").value=document.getElementById("G").value.toString();
				document.getElementById("b").value=document.getElementById("B").value.toString();
				for(var i=0; i<3; i++) {
					fullColour[i]=colour[i];
				}
				var greatest=-1;
				if(fullColour[0]>=fullColour[1] && fullColour[0]>=fullColour[2]) {
					greatest=0;
				}
				else if(fullColour[1]>=fullColour[0] && fullColour[1]>=fullColour[2]) {
					greatest=1;
				}
				else if(fullColour[2]>=fullColour[0] && fullColour[2]>=fullColour[1]) {
					greatest=2;
				}
				document.getElementById("bright").value=fullColour[greatest];
				document.getElementById("brightBox").value=document.getElementById("bright").value.toString();
				TextVisibler();
			}
			function tricolour() {
				var colour=[,,];
				colour[0]=parseInt(document.getElementById("R").value);
				colour[1]=parseInt(document.getElementById("G").value);
				colour[2]=parseInt(document.getElementById("B").value);
				for(var i=0; i<3; i++) {
					fullColour[i]=colour[i];
				}
				for(var i=0; i<3; i++) {
					if(colour[i]<16) {
						colour[i]=("0"+(colour[i].toString(16))).toUpperCase();
					}
					else {
						colour[i]=colour[i].toString(16).toUpperCase();
					}
				}
				document.getElementById("body").style.backgroundColor="#"+colour[0]+colour[1]+colour[2];
				document.getElementById("color").value=(colour[0]+colour[1]+colour[2]);
				var greatest=-1;
				if(fullColour[0]>=fullColour[1] && fullColour[0]>=fullColour[2]) {
					greatest=0;
				}
				else if(fullColour[1]>=fullColour[0] && fullColour[1]>=fullColour[2]) {
					greatest=1;
				}
				else if(fullColour[2]>=fullColour[0] && fullColour[2]>=fullColour[1]) {
					greatest=2;
				}
				document.getElementById("bright").value=fullColour[greatest];
				document.getElementById("brightBox").value=document.getElementById("bright").value.toString();
				TextVisibler();
			}
			function slid(clr) {
				tricolour();
				if(0==clr) {
					document.getElementById("r").value=document.getElementById("R").value.toString();
				}
				else if(1==clr) {
					document.getElementById("g").value=document.getElementById("G").value.toString();
				}
				else if(2==clr) {
					document.getElementById("b").value=document.getElementById("B").value.toString();
				}
			}
			function boxed(e,clr) {
				if(0==clr) {
					document.getElementById("R").value=parseInt(document.getElementById("r").value);
				}
				else if(1==clr) {
					document.getElementById("G").value=parseInt(document.getElementById("g").value);
				}
				else if(2==clr) {
					document.getElementById("B").value=parseInt(document.getElementById("b").value);
				}
				tricolour()
			}
			function britMod() {
				if(!fromBox) {
					document.getElementById("brightBox").value=document.getElementById("bright").value.toString();
				}
				var greatest=-1;
				if(fullColour[0]>=fullColour[1] && fullColour[0]>=fullColour[2]) {
					greatest=0;
				}
				else if(fullColour[1]>=fullColour[0] && fullColour[1]>=fullColour[2]) {
					greatest=1;
				}
				else if(fullColour[2]>=fullColour[0] && fullColour[2]>=fullColour[1]) {
					greatest=2;
				}
				if(fullColour[greatest]>0) {
					var mod=document.getElementById("bright").value/fullColour[greatest];
					for(var i=0; i<3; i++) {
						fullColour[i]=Math.round(mod*fullColour[i]);
					}
				}
				else {
					fullColour=[document.getElementById("bright").value,document.getElementById("bright").value,document.getElementById("bright").value];
				}
				document.getElementById("R").value=fullColour[0];
				document.getElementById("G").value=fullColour[1];
				document.getElementById("B").value=fullColour[2];
				document.getElementById("r").value=document.getElementById("R").value.toString();
				document.getElementById("g").value=document.getElementById("G").value.toString();
				document.getElementById("b").value=document.getElementById("B").value.toString();
				var colour=[,,];
				for(var i=0; i<3; i++) {
					colour[i]=fullColour[i];
				}
				for(var i=0; i<3; i++) {
					if(colour[i]<16) {
						colour[i]=("0"+(colour[i].toString(16))).toUpperCase();
					}
					else {
						colour[i]=colour[i].toString(16).toUpperCase();
					}
				}
				document.getElementById("body").style.backgroundColor="#"+colour[0]+colour[1]+colour[2];
				document.getElementById("color").value=(colour[0]+colour[1]+colour[2]);
				TextVisibler();
			}
			function britBoxMod(e) {
				if(e.which==13||e.keyCode==13) {
					document.getElementById("bright").value=parseInt(document.getElementById("brightBox").value);
					fromBox=true;
					britMod();
					fromBox=false;
				}
			}
			function TextVisibler() {
				if(document.getElementById("bright").value>=128) {
					document.getElementById("body").style.color="#000000";
					document.getElementById("entNote").style.color="#404040";
					document.getElementById("line").style["border-color"]="#000000";
				}
				else {
					document.getElementById("body").style.color="#FFFFFF";
					document.getElementById("entNote").style.color="#D0D0D0";
					document.getElementById("line").style["border-color"]="#FFFFFF";
				}
			}
		</script>
	</head>
	<body id="body" style="background-color: #808080;">
		<p><input type="text" id="color" placeholder="Full Hex" onchange="return recolour(event)" value="808080"></input></p>
		<div>
			<p>R<input type="range" min=0 max=255 id="R" onchange="slid(0)"></input><input type="text" id="r" onchange="return boxed(event,0)" value="128"></input></p>
			<p>G<input type="range" min=0 max=255 id="G" onchange="slid(1)"></input><input type="text" id="g" onchange="return boxed(event,1)" value="128"></input></p>
			<p>B<input type="range" min=0 max=255 id="B" onchange="slid(2)"></input><input type="text" id="b" onchange="return boxed(event,2)" value="128"></input></p>
		</div>
		<hr id="line">
		<div>
			<p>Brightness <note id="entNote" style="font-size: 12.5px; color: #404040;">(Press 'Enter' to submit from box.)</note></p>
			<p><input type="range" min=1 max=255 id="bright" onchange="britMod()"></input><input type="text" id="brightBox" onkeypress="return britBoxMod(event)" value="128"></input></p>
		</div>
		<?php if(isset($_GET['color'])) {echo '<script>document.getElementById("color").value="'.$_GET['color'].'"; recolour()</script>';} ?>
	</body>
</html>
