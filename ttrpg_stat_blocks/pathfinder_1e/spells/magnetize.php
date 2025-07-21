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
		'Magnetize',// Name
		'Transmutation',// School
		[
			'electricity'
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
			'M' => 2,
			'MNote' => 'a small piece of magnetite'
		],// Components
		'1 standard action',// Casting Time
		'touch',// Range
		'one Tiny or smaller piece of ferrous material',// Target
		false,// Effect
		false,// Area
		'1 round/level',// Duration
		'Fortitude negates (object, harmless)',// Save
		'yes (object, harmless)',// SR
		[
			'You infuse the touch object with a magnetic charge. For the duration of the spell, it is treated as a magnet. It can lift up to 3-pounds of weight.',
			'In this sense, ferrous material refers to materials like iron, mithral, and adamantine which are attached to both ends of a magnet as though they were magnetic.'
		]// Description
	);
	require $startDir.'pageEnd.php';
?>