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
		'Dictation',// Name
		'Transmutation',// School
		[],// Descriptors
		[
			'adept' => 0,
			'antipaladin' => 1,
			'bard' => 0,
			'cleric' => 0,
			'druid' => 0,
			'hunter' => 1,
			'inquisitor' => 0,
			'investigator' => 1,
			'magus' => 0,
			'medium' => 0,
			'mesmerist' => 0,
			'occultist' => 0,
			'oracle' => 0,
			'paladin' => 1,
			'psychic' => 0,
			'ranger' => 1,
			'skald' => 0,
			'sorcerer' => 0,
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
		'touch',// Range
		'1 nonmagical writing implement',// Target
		false,// Effect
		false,// Area
		'1 hour (D)',// Duration
		'Fortitude negates (object, harmless)',// Save
		'yes (object, harmless)',// SR
		[
			'The target begins writing your words as you speak them. When instructed, it will pause or resume its transcription or scratch out portions as directed. If the tool normally requires ink or other such substances, it still requires it as normal but will automatically refill itself from available sources within 5 feet.'
		]// Description
	);
	require $startDir.'pageEnd.php';
?>