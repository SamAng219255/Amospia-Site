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
		'Frost Oil',// Name
		false,
		[
			'cold'
		],// Descriptors
		1,// Level
		'1 full round action',// Activation Time
		'1 hour',// Duration
		'none',// Saving Throw
		[
			'This oil is stored as two substances that are applied one after the other on the weapon, which quickly cool to sub-freezing temperatures attracting a rime of frost, dealing an additional 1d6 cold damage on a successful hit. This damage does not stack with the ii/frost/ii weapon quality, or other effects that don\'t stack with it.'
		] // Description
	);
	require $startDir.'pageEnd.php';
?>