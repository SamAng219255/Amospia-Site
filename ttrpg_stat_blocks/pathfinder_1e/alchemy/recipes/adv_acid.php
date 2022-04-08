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
	advAlchemySimpleBlock(
		'Concentrated Acid',// Name
		'Bomb',// Form
		[
			'acid'
		],// Descriptors
		3,// Level
		'instantaneous',// Duration
		'Reflex Half or Negates; see text',// Saving Throw
		'This flask contains a strong acid that is specifically formulated to to corrode even the toughest surfaces. The target takes 1d6 points of acid damage per alchemy level (maximum 10d6), with a reflex save for half. Creatures within 5 feet of the initial target take half as much of the original damage as splash damage, with a reflex save to negate.
		This damage ignores a number of points of hardness and resistance equal to your alchemy level. Targets that are immune to acid cannot apply their immunity to a number of points of the damage equal your alchemy level.' // Description
	);
	require $startDir.'pageEnd.php';
?>