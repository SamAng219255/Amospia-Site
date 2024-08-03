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
	magicItemBlockAuto(
		'Blasting Wand',
		'Evocation',
		1,
		'none',
		1800,
		'—',
		[
			'Unlike a normal wand, this wand can be used by any creature without issue and doesn\'t cast a specific spell but rather fires a single missile of destructive energy that deals 1d8 physical damage. This damage is affected by damage reduction but treats it as being half.',
			'This wand is a ranged weapon that only requires one hand and attacks made with it are ranged weapon attacks for all purposes. It has a range increment of 25 feet.',
			'Using this wand, however, requires ammunition in the form of ii/spellbolts/ii. In order to use a ii/blasting wand/ii, it must be attuned to a ii/spellbolt/ii of at least 1st level which will provide the spell energy necessary to generate and fire the missile. Attuning a ii/blasting wand/ii to a spellbolt requires a standard action and provokes an attack of opportunity. A ii/blasting wand/ii can only be attuned to one ii/spellbolt/ii at a time.'
		],
		false,
		'bb/Requirements/bb Craft Wand, ii/magic missile/ii; bb/Cost/bb 900 gp'
	);
	require $startDir.'pageEnd.php';
?>