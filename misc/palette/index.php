<html>
<head>
	<?php
		function random() {
			return mt_rand() / mt_getrandmax();
		}
		$colorStr=['FF5C00', 'FF8000', 'FF9400', 'FFA800', 'FFC900', 'FFE100', 'FFFF00', 'E9FF00', 'D3FF00', 'A7FF00', '00FF00', '00FF80', '00FFC0', '00FFFF', '00B4FF', '0078FF', '0000FF', '5300FF', '8000FF', 'A000FF', 'C000FF', 'FF00FF', 'FF00D0', 'FF00A0', 'FF0080', 'FF0063', 'FF0000'];
		$colorArr=[];
		for($i=0; $i<count($colorStr); $i++) {
			$colour=[$colorStr[$i][0].$colorStr[$i][1],$colorStr[$i][2].$colorStr[$i][3],$colorStr[$i][4].$colorStr[$i][5]];
			for($j=0; $j<3; $j++) {
				$colour[$j]=hexdec($colour[$j]);
			}
			array_push($colorArr,$colour);
		}
		$LN2=log(2);
		$LNLN2=log($LN2);

		function genColor($hue,$sat,$val) {
			$where=$hue*count($GLOBALS['colorArr']);
			$ind=floor($where);
			$prog=$where-$ind;
			$color=[0,0,0];
			$maxColor=0;
			for($i=0; $i<3; $i++) {
				$color[$i]=($GLOBALS['colorArr'][$ind%count($GLOBALS['colorArr'])][$i]*$prog)+($GLOBALS['colorArr'][($ind+1)%count($GLOBALS['colorArr'])][$i]*(1-$prog));
				$color[$i]=$color[$i]/256;
				$maxColor=max($maxColor,$color[$i]);
			}
			$strColor="";
			for($i=0; $i<3; $i++) {
				$color[$i]=1-((1-$color[$i])*$sat);
				$color[$i]*=$val/$maxColor;
				$color[$i]=floor($color[$i]*256)%256;
				$thisStrColor=dechex($color[$i]);
				if(strlen($thisStrColor)<2) {
					$thisStrColor="0".$thisStrColor;
				}
				$strColor.=$thisStrColor;
			}
			return $strColor;
		}
		function genRandColor() {
			$hue=random();
			$val=pow(random(),0.5);
			$sat=pow(random(),0.5);
			$colorOut=genColor($hue,$sat,$val);
			return $colorOut;
		}
	?>
	<style>
		body {
			background-color: #000000;
			margin: 0px;
		}
		.colorBar {
			height: 100%;
			width: 25%;
			float: left;
		}
		.colorBar>span {
			bottom: 12.5%;
			font-size: 3em;
			opacity: 0.5;
			width: 25%;
			position: absolute;
			text-align: center;
		}
		.colorBar.bright>span {
			color: #000000;
		}
		.colorBar.dark>span {
			color: #ffffff;
		}
	</style>
	<title>Random Palette Generator</title>
	<link href="img/icon.png" rel="shortcut icon">
	<script src="script.js"></script>
</head>
<body onload="setup()">
	<?php
		for($i=0; $i<4; $i++) {
			$thisColor=genRandColor();
			$highest=max(hexdec($thisColor[0].$thisColor[1]),hexdec($thisColor[2].$thisColor[3]),hexdec($thisColor[4].$thisColor[5]));
			$bright='bright';
			if($highest<128) {
				$bright='dark';
			}
			echo '<div class="colorBar '.$bright.'" id="bar-'.$i.'" style="background-color: #'.$thisColor.';"><span>#'.$thisColor.'</span></div>';
		}
	?>
</body>
</html>