<?php 
	$startDir='';
	for($i=0; $i<5; $i++) {
		if(file_exists($startDir.'pageStart.php')) {
			require $startDir.'pageStart.php';
			break;
		}
		else {
			$startDir='../'.$startDir;
		}
	}
	spellBlockAuto(
		'Draconic Ascension',// Name
		'Transmutation (Transmogrification)',// School
		[],// Descriptors
		[
			'arcanist' => 10,
			'skald' => 10,
			'sorcerer' => 10,
			'wizard' => 10
		],// Levels
		[
			'V' => 1,
			'S' => 1,
			'M' => 1,
			'MNote' => 'a gemstone whose color matches that of the dragon you become worth at least 250,000 gp'
		],// Components
		'24 hours',// Casting Time
		'personal',// Range
		'self',// Target
		false,// Effect
		false,// Area
		'instantaneous',// Duration
		'none',// Save
		'no',// SR
		[
			'You unleash ultimate magic and transform yourself into a dragon. You become an old metallic, chromatic, imperial, primal, outer, or esoteric dragon of your choice with the following exceptions.',
			'Instead of receiving the scores of the dragon whose form you take, your mental scores are increased by +8, your Strength increases by +18, your Dexterity decreases by -6, and your Constitution increases by +10. You do not receive any racial hit dice or levels in sorcerer from being a dragon.',
			'You also gain a supernatural ability to polymorph yourself back to your original form at will until dismissed. While in your original form, you lose the adjustments to your physical ability scores.'
		]// Description
	);
	require $startDir.'pageEnd.php';
?>