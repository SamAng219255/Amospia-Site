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
		'Wash',// Name
		'Transmutation',// School
		[
			'water'
		],// Descriptors
		[
			'adept' => 0,
			'bard' => 0,
			'cleric' => 0,
			'magus' => 0,
			'medium' => 0,
			'mesmerist' => 0,
			'occultist' => 0,
			'oracle' => 0,
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
			'S' => 1
		],// Components
		'1 minute',// Casting Time
		'Close',// Range
		'one or more creatures or objects',// Target
		false,// Effect
		false,// Area
		'Instantaneous',// Duration
		'Reflex negates (harmless)',// Save
		'yes (harmless)',// SR
		[
			'The targets are magically made clean as though they had received a thorough wash and scrub with soap and water. Objects potentially sensitive to the process of getting cleaned as such are unharmed by this spell.',
			'This spell targets either 1 Medium creature per level or one 5-foot-cube of unattended objects per level. When targeting creatures count creatures smaller than Medium as half as many creatures for each size category below Medium and creatures larger than Medium as being twice as many creatures for each category above Medium.'
		]// Description
	);
	require $startDir.'pageEnd.php';
?>