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
		'Energy Resistance Oil',// Name
		false,
		[],// Descriptors
		2,// Level
		'1 full round action',// Activation Time
		'10 minutes/level',// Duration
		'none',// Saving Throw
		[
			'When applied, this oil creates a protective layer grants the object energy resistance 10 to a specific energy type (either acid, cold, electricity, fire, or sonic) that is determined when the oil is being made. The value of the energy resistance granted increases to 20 points at 7th level and to 30 points at 11th level.',
			'ii/Energy resistance oil/ii interacts poorly with a creature\'s skin and is unable to provide protection. If the oil is applied to their armor, however, it grants a +2 save bonus against damage of the chosen type to the wearer. This bonus increases to +4 at 7th level and to +6 at 11th level.'
		] // Description
	);
	require $startDir.'pageEnd.php';
?>