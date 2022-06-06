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
	advAlchemyAppliedBlock(
		'Corrosive Oil',// Name
		false,
		[
			'acid'
		],// Descriptors
		1,// Level
		'1 full round action',// Activation Time
		'1 hour',// Duration
		'none',// Saving Throw
		[
			'This oil is stored as two substances that are applied one after the other on the weapon, which simultaneously makes the surface highly corrosive while forming a protective layer so that the weapon is unaffected, dealing an additional 1d6 acid damage on a successful hit. This damage does not stack with the ii/corrosive/ii weapon quality, or other effects that don\'t stack with it.'
		] // Description
	);
	require $startDir.'pageEnd.php';
?>