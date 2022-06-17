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
		'Alkali Flask',// Name
		'Bomb',// Form (Sub-Form(s))
		[
			'acid'
		],// Descriptors
		2,// Level
		'instantaneous',// Duration
		'Reflex half or negates; see text',// Saving Throw
		[
			'This flask contains a strongly alkaline substance that, in addition to alchemically burning most substances similar to acid, counteracts the acidic nature of most oozes.',
			'The target takes 1d6 points of acid damage per alchemy level (maximum 5d6), with a reflex save for half. Creatures within 5 feet of the initial target take half as much of the original damage as splash damage, with a reflex save to negate.',
			'Oozes take twice as much damage from this recipe and the damage ignores any acid resistance or immunity they may have.'
		] // Description
	);
	require $startDir.'pageEnd.php';
?>