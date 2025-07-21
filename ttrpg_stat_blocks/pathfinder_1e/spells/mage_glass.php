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
		'Mage Glass',// Name
		'Divination',// School
		[],// Descriptors
		[
			'adept' => 0,
			'alchemist' => 1,
			'bard' => 0,
			'investigator' => 1,
			'magus' => 0,
			'medium' => 0,
			'mesmerist' => 0,
			'occultist' => 0,
			'psychic' => 0,
			'ranger' => 1,
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
		],// Components
		'1 standard action',// Casting Time
		'personal',// Range
		'self',// Target
		false,// Effect
		false,// Area
		'1 round/level',// Duration
		'none',// Save
		'no ',// SR
		[
			'You gain the ability to focus your sight to see small things and things that are far away. When focusing on seeing small details, you gain a +2 circumstance bonus to Appraise checks. When focusing on distant objects, you can see twice as far away as normal, taking a -1 penalty on Perception skill checks per 20 feet of distance to the target, if the target is visible, instead of per 10 feet.',
			'These effects do not stack with the effects of other magnifying objects.'
		]// Description
	);
	require $startDir.'pageEnd.php';
?>