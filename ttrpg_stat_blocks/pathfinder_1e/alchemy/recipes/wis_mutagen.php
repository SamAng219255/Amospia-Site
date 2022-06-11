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
		'Owl\'s Wisdom Mutagen',// Name
		'Imbibed (Mutagen)',// Form (Sub-Form(s))
		[],// Descriptors
		2,// Level
		'3 minutes/level',// Duration
		'none',// Saving Throw
		[
			'The drinker of this mutagen grows wiser in exchange for reduced dexterity. They gain a +4 alchemical bonus to wisdom and a -2 penalty to dexterity.'
		] // Description
	);
	require $startDir.'pageEnd.php';
?>