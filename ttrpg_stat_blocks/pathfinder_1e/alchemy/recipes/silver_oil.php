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
		'Silver Oil',// Name
		false,
		[],// Descriptors
		0,// Level
		'1 full round action',// Activation Time
		'1 hour plus 1 hour/4 levels',// Duration
		'none',// Saving Throw
		[
			'This oil, when applied, alchemically alloys silver into the weapon\'s surface allowing it to overcome DR/silver.'
		], // Description
		'5 gp worth of silver'
	);
	require $startDir.'pageEnd.php';
?>