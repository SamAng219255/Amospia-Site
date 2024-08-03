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
		'Blasting Staff',
		'Evocation',
		9,
		'none',
		2700,
		'—',
		[
			'Unlike a normal staff, this staff can be used by any creature without issue and doesn\'t cast a specific spell but rather fires a single missile of destructive energy that deals 1d12 physical damage. This damage is affected by damage reduction but treats it as being half.',
			'This staff is a ranged weapon that requires two hands to use and attacks made with it are ranged weapon attacks for all purposes. It has a range increment of 50 feet.',
			'Using this staff, however, requires ammunition in the form of ii/spellbolts/ii. In order to use a ii/blasting staff/ii, it must be attuned to a ii/spellbolt/ii of at least 3rd level which will provide the spell energy necessary to generate and fire the missile. Attuning a ii/blasting staff/ii to a ii/spellbolt/ii requires a full-round action and provokes an attack of opportunity. A ii/blasting staff/ii can only be attuned to one ii/spellbolt/ii at a time.'
		],
		false,
		'bb/Requirements/bb Craft Wand, ii/magic missile/ii; bb/Cost/bb 1,350 gp'
	);
	require $startDir.'pageEnd.php';
?>