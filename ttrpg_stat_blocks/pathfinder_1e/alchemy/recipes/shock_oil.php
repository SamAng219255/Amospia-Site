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
		'Shock Oil',// Name
		false,
		[
			'electricity'
		],// Descriptors
		1,// Level
		'1 full round action',// Activation Time
		'1 hour',// Duration
		'none',// Saving Throw
		[
			'This oil is stored as two substance that are applied one after the other on the weapon, which generate a powerful electric charge, dealing an additional 1d6 electric damage on a successful hit. This damage does not stack with the ii/shock/ii weapon quality, or other effects that don\'t stack with it.'
		] // Description
	);
	require $startDir.'pageEnd.php';
?>