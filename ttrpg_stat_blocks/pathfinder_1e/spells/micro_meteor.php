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
		'Micro Meteor',// Name
		'Transmutation',// School
		[],// Descriptors
		[
			'antipaladin' => 1,
			'bloodrager' => 1,
			'cleric' => 1,
			'druid' => 1,
			'inquisitor' => 1,
			'magus' => 1,
			'oracle' => 1,
			'paladin' => 1,
			'shaman' => 1,
			'sorcerer' => 1,
			'wizard' => 1
		],// Levels
		[
			'V' => 1,
			'S' => 1,
			'DF' => 1
		],// Components
		'1 standard action',// Casting Time
		'Touch',// Range
		'up to three pebbles touched',// Target
		false,// Effect
		false,// Area
		'30 minutes or until discharged',// Duration
		'Will negates (harmless, object)',// Save
		'yes (harmless, object)',// SR
		[
			'You enchant as many as three pebbles, which can be no larger than sling bullets, so that they will transmute into small meteors when thrown or slung. If hurled, they have a range increment of 20 feet. If slung, treat them as sling bullets (range increment 50 feet). The spell gives them a +1 enhancement bonus on attack and damage rolls. The user of the stones makes a normal ranged attack. Each stone that hits deals 1d6+1 points of damage plus the the user\'s strength bonus (including the spell’s enhancement bonus).'
		]// Description
	);
	require $startDir.'pageEnd.php';
?>