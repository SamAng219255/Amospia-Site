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
	advAlchemyActivatedBlock(
		'Fog Bottle',// Name
		false,
		[],// Descriptors
		2,// Level
		'1 standard action',//Activation Time
		'10 min./level',// Duration
		'none',// Saving Throw
		'Opening the bottle lifts the attached barrier and allows the two chemicals inside to mix, filling the surrounding area with a dense fog of harmless powder. This powder is generally white but additives can be mixed in during its creation to turn the fog any color the practicer desires. The powder fills a 20-foot radius around the point the bottle was opened and obscures all sight, including darkvision, beyond 5 feet. A creature within 5 feet has concealment (attacks have a 20% miss chance). Creatures farther away have total concealment (50% miss chance, and the attacker can’t use sight to locate the target).
		A moderate wind (11+ mph) disperses the fog in 4 rounds; a strong wind (21+ mph) disperses the fog in 1 round.' // Description
	);
	require $startDir.'pageEnd.php';
?>