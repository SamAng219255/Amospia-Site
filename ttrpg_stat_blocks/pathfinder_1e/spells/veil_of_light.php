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
		'Veil of Light',// Name
		'Evocation',// School
		[
			'light'
		],// Descriptors
		[
			'antipaladin' => 4,
			'arcanist' => 5,
			'bard' => 5,
			'cleric' => 5,
			'inquisitor' => 5,
			'mesmerist' => 4,
			'oracle' => 5,
			'paladin' => 4,
			'shaman' => 5,
			'skald' => 5,
			'sorcerer' => 5,
			'warpriest' => 5,
			'wizard' => 5 
		],// Levels
		[
			'V' => 1,
			'S' => 1,
			'M' => 2,
			'MNote' => 'a pinch of white sand'
		],// Components
		'1 standard action',// Casting Time
		'Medium',// Range
		'one creature/3 levels, no two of which can be more than 30 ft. apart',// Target
		false,// Effect
		false,// Area
		'1 round/level (D)',// Duration
		'Will negates',// Save
		'yes',// SR
		[
			'With an incantation and a gesture of your hand over your eyes, you cause a veil of light to descend upon the targets of this spell. The subjects treat the light level as two steps higher than normal for the duration of this spell for the purposes of restricting vision and the effects of light blindness and light sensitivity. Darkness becomes normal light and dim light becomes bright light. Areas of normal light and bright light become aa/blinding_light|blindingly bright/aa.'
		]// Description
	);
	require $startDir.'pageEnd.php';
?>