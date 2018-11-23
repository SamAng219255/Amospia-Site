<html>
<head>
	<?php
		function random() {
			return mt_rand() / mt_getrandmax();
		}
		$colorStr=["FF0063","FF0080","FF00A0","FF00D0","FF00FF","C000FF","A000FF","8000FF","5300FF","0000FF","0078FF","00B4FF","00FFFF","00FFC0","00FF80","00FF00","A7FF00","D3FF00","E9FF00","FFFF00","FFE100","FFC900","FFA800","FF9400","FF8000","FF5C00","FF0000"];
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
				$color[$i]=pow($color[$i]/256,pow(2,$sat));
				$maxColor=max($maxColor,$color[$i]);
			}
			$strColor="";
			for($i=0; $i<3; $i++) {
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
			$sat=($GLOBALS['LNLN2']-log(random()))/$GLOBALS['LN2'];
			if(random()>0.5) {
				$sat*=-1;
			}
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
</head>
<body>
	<?php
		for($i=0; $i<4; $i++) {
			$thisColor=genRandColor();
			$highest=max(hexdec($thisColor[0].$thisColor[1]),hexdec($thisColor[2].$thisColor[3]),hexdec($thisColor[4].$thisColor[5]));
			$bright='bright';
			if($highest<128) {
				$bright='dark';
			}
			echo '<div class="colorBar '.$bright.'" style="background-color: #'.$thisColor.';"><span>#'.$thisColor.'</span></div>';
		}
	?>
</body>
</html>