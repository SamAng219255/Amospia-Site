<?php 
	$startDir='';
	for($i=0; $i<20; $i++) {
		if(file_exists($startDir.'pageStart.php')) {
			require $startDir.'pageStart.php';
			break;
		}
		else {
			$startDir='../'.$startDir;
		}
	}
	raceBlockAuto(
		'Pandaren',
		10,
		'',
		'',
		'',
		'',
		'',
		'',
		'',
		'',
		[
			'con' => 2,
			'wis' => 2,
			'dex' => -2
		],
		'',
		[
			'bb/Humanoid/bb: Pandaren are humanoid creatures with the pandaren subtype.',
			'bb/Medium/bb: Pandaren are Medium creatures and have no bonuses or penalties due to their size.',
			'bb/Normal Speed/bb: Pandaren have a base speed of 30 feet.',
			'bb/Bouncy/bb: Pandaren take half the normal amount of damage from falling and it is entirely nonlethal damage.',
			'bb/Epicurean/bb: Pandaren can consume twice as much food as normally necessary to receive a +1 morale bonus to attack rolls, skill checks, and saving throws for 24 hours.',
			'bb/Gourmand/bb: Pandaren receive a +2 racial bonus to skill checks to prepare food.',
			'bb/Inner Peace/bb: Pandaren receive a +2 racial bonus on concentration checks.',
			'bb/Quaking Palm/bb: Pandaren gain Improved Unarmed Strike as a bonus feat at 1st level. At 8th level, they also gain Stunning Fist as a bonus feat.',
			'bb/Languages/bb: Pandaren begin play speaking pandaren. Pandaren with high Intelligence scores can choose from Common, Hozen, Mogu, and Orcish.'
		],
		false,
		[
			[
				'Alternate Racial Traits',
				[
					'bb/Stability/bb',
					'/mm/You receive a +4 racial bonus to your CMD when resisting bull rush or trip attempts while standing on the ground.',
					'/mm/This replaces hardiness.'
				]
			]
		]
	);
	require $startDir.'pageEnd.php';
?>