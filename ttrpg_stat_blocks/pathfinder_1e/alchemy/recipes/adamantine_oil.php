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
		'Adamantine Oil',// Name
		false,
		[],// Descriptors
		2,// Level
		'1 full round action',// Activation Time
		'1 hour',// Duration
		'none',// Saving Throw
		[
			'This oil, when applied, alchemically alloys adamantine into the weapon\'s surface allowing it to overcome DR/adamantine and ignore hardness less than 20. It can also be applied to any metal object increasing its hardness to 20.'
		], // Description
		'1/3 lb. of adamantine worth 100 gp'
	);
	require $startDir.'pageEnd.php';
?>