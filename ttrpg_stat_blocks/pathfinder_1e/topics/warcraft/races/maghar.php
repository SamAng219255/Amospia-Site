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
		'Mag\'har Orc',
		11,
		'',
		'',
		'',
		'',
		'',
		'',
		'',
		'',
		[
			'str' => 2,
			'con' => 2,
			'int' => -2
		],
		'',
		[
			'bb/Humanoid/bb: Mag\'har orcs are humanoid creatures with the orc subtype.',
			'bb/Medium/bb: Mag\'har orcs are Medium creatures and have no bonuses or penalties due to their size.',
			'bb/Normal Speed/bb: Mag\'har orcs have a base speed of 30 feet.',
			'bb/Ancestral Call/bb: A mag\'har orc gains the following spell-like ability:',
			'1/day—ii/blessing of fervor/ii',
			'bb/Open Skies/bb: Mag\'har orcs gain a +2 racial bonus on Ride checks.',
			'bb/Savage Blood/bb: Effects that cause an orc to be staggered or stunned have their duration reduced by 1 round plus an additional round at 5th, 10th, 15th, and 20th levels to a minimum of 1 round.',
			'bb/Sympathetic Vigor/bb: A mag\'har orc\'s animal companion, eidolon, familiar, phantom, cohort, followers, and similar subordinates receive a +2 morale bonus to Constitution while they are within 60 feet of the mag\'har orc.',
			'bb/Languages/bb: Mag\'har orcs begin play speaking Orcish. Mag\'har orcs with high Intelligence scores can choose from Common, Goblin, Gutterspeak, Shalassian, Taur-ahe, Thalassian, and Zandali.'
		],
		false,
		[
			[
				'Alternate Racial Traits',
				[
					'bb/Stability/bb',
					'/mm/You receive a +4 racial bonus to your CMD when resisting bull rush or trip attempts while standing on the ground.',
					'/mm/This replaces savage blood.'
				]
			]
		]
	);
	require $startDir.'pageEnd.php';
?>