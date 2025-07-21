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
		'Light Line',// Name
		'Conjuration (creation)',// School
		[
			'light'
		],// Descriptors
		[
			'adept' => 0,
			'bard' => 0,
			'magus' => 0,
			'medium' => 0,
			'mesmerist' => 0,
			'occultist' => 0,
			'psychic' => 0,
			'shaman' => 0,
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
			'MNote' => 'a single fiber of bamboo'
		],// Components
		'1 standard action',// Casting Time
		'0 feet',// Range
		false,// Target
		'a rope of solid light',// Effect
		false,// Area
		'1 minute/level',// Duration
		'none',// Save
		'yes; see text',// SR
		[
			'This spell conjures a cord made of softly glowing golden light. This light is not bright enough to offer illumination but can be seen itself, even in otherwise complete darkness. This cord functions as an ordinary silk rope. ',
			'You can choose the length of rope when conjuring it, to a maximum length of 20 feet plus 10 per caster level. When casting this spell, you can also choose to add periodic knots to the rope to make it easier to climb, though this halves the rope\'s maximum length.',
			'If a creature with spell resistance attempts to grip the rope or if the rope is held firmly against them, such as in an attempt to bind them, the caster must make a caster level check against the creature\'s spell resistance or else the rope dissolves at their touch. Parts of the rope they do not touch remain solid but anywhere they touch fades away and is destroyed.'
		]// Description
	);
	require $startDir.'pageEnd.php';
?>