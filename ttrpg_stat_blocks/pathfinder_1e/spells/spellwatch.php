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
		'Spellwatch',// Name
		'Transmutation',// School
		[
			'time'
		],// Descriptors
		[
			'adept' => 0,
			'bard' => 0,
			'investigator' => 1,
			'magus' => 0,
			'medium' => 0,
			'mesmerist' => 0,
			'occultist' => 0,
			'psychic' => 0,
			'skald' => 0,
			'sorcerer' => 0,
			'spiritualist' => 0,
			'summoner' => 0,
			'summoner (unchained)' => 0,
			'witch' => 0,
			'wizard' => 0 
		],// Levels
		[
			'V' => 1,
			'S' => 1,
			'M' => 1,
			'MNote' => 'a pinch of sand'
		],// Components
		'1 standard action',// Casting Time
		'personal',// Range
		'self',// Target
		false,// Effect
		false,// Area
		'instantaneous or up to 1 hour/level (D), see text',// Duration
		'Fortitude negates (object, harmless)',// Save
		'yes (object, harmless)',// SR
		[
			'This spell can perform one of three abilities to help the caster track time.',
			'The first option causes the caster to immediately know the exact time, giving information about the time of day, the time of year, and the current year. This version of the spell has an Instantaneous duration.',
			'The second option sets a timer that mentally notifies the caster after a set amount of time has elapsed, up to the duration of the spell. This notifies the caster of the completion of the timer and the timer\'s duration, but no other information. The caster can also take a move action to know the remaining time until tye timer has elapsed. This version of the spell lasts for 1 hour/level or until discharged.',
			'The third option marks the current time and allows the caster to take an immediate action to note the exact time between that action and the initial casting. While the spell is active, the caster can also take a move action to know the current amount of time since the spell was cast. This version of the spell lasts for 1 hour/level or until discharged.',
			'A caster can be under multiple instances of this spell at once. If so, take a move action to note the time grants the caster the remaining and elapsed times from all active instances of the spell.'
		]// Description
	);
	require $startDir.'pageEnd.php';
?>