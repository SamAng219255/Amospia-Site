<?php 
	$startDir='';
	for($i=0; $i<20; $i++) {
		if(file_exists($startDir.'pageStart.php')) {
			require $startDir.'pageStart.php';
			break;
		}
		else {
			$startDir='../'.$startDir;
		}
	}
	surgeBlock(
		'Decay', // name
		'Division', // surge
		'touch', // range
		'a single creature or object touched', // target=false
		false, // effect=false
		false, // area=false
		10, // cost
		'none; instantaneous', // interval
		false, // dismiss
		[
			'Touched creature or object crumbles, burns, or otherwise breaks down. It takes 2d4 points of untyped energy damage that ignores hardness.',
			'This ability requires direct contact with the target object or creature. This requires a successful melee (non-touch) attack against the target, ignoring natural armor. If the surgebinder is targeting a creature and the result of their attack would fail to hit their AC without natural armor but would hit their AC without their armor bonus as well, it is counted as a successful touch against their armor instead. Similarly, if it would not hit their AC without their armor bonus and natural armor but would hit them without their shield bonus as well, it is counted as a successful touch against their shield. If these bonuses are granted by magical items other than armor or shields, they are not hit.',
			'This ability can be used in place of an attack in a full attack action.'
		]  // desc
	);
	require $startDir.'pageEnd.php';
?>