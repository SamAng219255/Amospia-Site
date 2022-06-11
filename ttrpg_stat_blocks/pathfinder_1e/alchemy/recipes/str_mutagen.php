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
		'Bull\'s Strength Mutagen',// Name
		'Imbibed (Mutagen)',// Form (Sub-Form(s))
		[],// Descriptors
		2,// Level
		'3 minutes/level',// Duration
		'none',// Saving Throw
		[
			'The drinker of this mutagen grows stronger in exchange for reduced intelligence. They gain a +4 alchemical bonus to strength and a -2 penalty to intelligence.'
		] // Description
	);
	require $startDir.'pageEnd.php';
?>