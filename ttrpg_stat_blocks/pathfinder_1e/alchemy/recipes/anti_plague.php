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
		'Anti-Plague',// Name
		'Imbibed',
		[
			'healing'
		],// Descriptors
		3,// Level
		'instantaneous',// Duration
		'Fortitude negates (harmless)',// Saving Throw
		[
			'This syrup taste foul and seems to burn on your tongue and down your throat, but can cure all diseases from which you suffering. For each disease you must make an alchemy level check (1d20 + alchemy level) against the DC of each disease affecting the target. Success means that the disease is cured. The medicine also kills some hazards and parasites, including green slime and others.',
			'Since the recipe\'s duration is instantaneous, it does not prevent reinfection after a new exposure to the same disease at a later date.'
		] // Description
	);
	require $startDir.'pageEnd.php';
?>