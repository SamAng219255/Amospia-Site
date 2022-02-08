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
		'Shroud of Darkness',// Name
		'Evocation',// School
		[
			'darkness'
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
			'MNote' => 'a pinch of black sand'
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
			'With a dark incantation and a gesture of your hand over your eyes, you cause a shroud of darkness to descend upon the targets of this spell. The subjects treat the light level as two steps lower than normal for the duration of this spell with the exception that creatures with ii/shadow vision/ii or a similar ability are not able to see better than they could otherwise. Bright light becomes dim light, normal light becomes darkness, and areas of dim light and darkness become supernaturally dark (as darkness, but even creatures with darkvision cannot see).'
		]// Description
	);
	require $startDir.'pageEnd.php';
?>