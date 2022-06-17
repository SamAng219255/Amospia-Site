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
		'Weak Acid Flask',// Name
		'Bomb',// Form (Sub-Form(s))
		[
			'acid'
		],// Descriptors
		0,// Level
		'instantaneous',// Duration
		'Reflex half or negates; see text',// Saving Throw
		[
			'This flask contains a weaker acid that burns nearby objects when thrown. The target takes 1d4 points of acid damage with a Reflex save for half. Creatures within 5 feet of the flask take 1 point of acid damage with a Reflex to negate.'
		] // Description
	);
	require $startDir.'pageEnd.php';
?>