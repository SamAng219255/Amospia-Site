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
		'Draught of Cold Proof',// Name
		'Imbibed',
		[],// Descriptors
		2,// Level
		'10 minutes/level',// Duration
		'Fortitude negate (harmless)',// Saving Throw
		[
			'For the duration of the effect, the imbiber\'s skin becomes firm and highly insulated and grants them cold resistance 10. At 7th level the resistance increases to 20 and at 11th level it increases to 30.'
		] // Description
	);
	require $startDir.'pageEnd.php';
?>