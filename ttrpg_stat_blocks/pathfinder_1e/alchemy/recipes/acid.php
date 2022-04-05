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
		'Advanced Acid',// Name
		'Bomb',// Form
		[
			'acid'
		],// Descriptors
		1,// Level
		'instantaneous',// Duration
		'Half or Negates; see text',// Saving Throw
		'This flask contains a strong acid that spills onto anything nearby when broken. The target takes 1d6 points of acid damage per alchemy level (maximum 5d6), with a reflex save for half. Creatures within 5 feet of the initial target take half as much of the original damage as splash damage, with a reflex save to negate.' // Description
	);
	require $startDir.'pageEnd.php';
?>