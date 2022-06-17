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
		'Weak Alchemical Fire',// Name
		'Bomb',// Form (Sub-Form(s))
		[
			'fire'
		],// Descriptors
		0,// Level
		'instantaneous',// Duration
		'Reflex half or negates; see text',// Saving Throw
		[
			'This flask contains a flammable compound that burns nearby objects when thrown. The target takes 1d4 points of fire damage with a Reflex save for half. Creatures within 5 feet of the flask take 1 point of fire damage with a Reflex to negate.'
		] // Description
	);
	require $startDir.'pageEnd.php';
?>