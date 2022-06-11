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
		'Eagle\'s Splendor Mutagen',// Name
		'Imbibed (Mutagen)',// Form (Sub-Form(s))
		[],// Descriptors
		2,// Level
		'3 minutes/level',// Duration
		'none',// Saving Throw
		[
			'The drinker of this mutagen grows more charismatic in exchange for reduced constitution. They gain a +4 alchemical bonus to charisma and a -2 penalty to constitution.'
		] // Description
	);
	require $startDir.'pageEnd.php';
?>