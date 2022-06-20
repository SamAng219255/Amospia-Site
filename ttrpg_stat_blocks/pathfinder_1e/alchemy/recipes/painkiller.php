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
		'Analgesic Syrup',// Name
		'Imbibed',
		[],// Descriptors
		0,// Level
		'1 hour',// Duration
		'Fortitude negates (harmless)',// Saving Throw
		[
			'You do not feel minor aches and pains, such as from arthritis, a cold, or a hangover, for 1 hour. For the duration, you gain a +2 resistance bonus against pain-related spells.'
		] // Description
	);
	require $startDir.'pageEnd.php';
?>