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
		'Cold Iron Oil',// Name
		false,
		[],// Descriptors
		1,// Level
		'1 full round action',// Activation Time
		'1 hour',// Duration
		'none',// Saving Throw
		[
			'This oil, when applied, alchemically alloys cold iron into the weapon\'s surface allowing it to overcome DR/cold iron.'
		], // Description
		'20 gp worth of cold iron'
	);
	require $startDir.'pageEnd.php';
?>