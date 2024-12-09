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
		'Orc',
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
			'str' => 2,
			'con' => 2,
			'int' => -2
		],
		'',
		[
			'bb/Humanoid/bb: Orcs are humanoid creatures with the orc subtype.',
			'bb/Medium/bb: Orcs are Medium creatures and have no bonuses or penalties due to their size.',
			'bb/Normal Speed/bb: Orcs have a base speed of 30 feet.',
			'bb/Blood Fury/bb: Once per day, whenever an orc takes damage, they fly into a frenzy for 1 minute, gaining a +2 racial bonus to Constitution and Strength, but a –2 penalty to AC.',
			'bb/Hardiness/bb: Effects that cause an orc to be staggered or stunned have their duration reduced by 1 round plus an additional round at 5th, 10th, 15th, and 20th levels to a minimum of 1 round.',
			'bb/Command/bb: An orc\'s animal companion, eidolon, familiar, phantom, cohort, followers, and similar subordinates receive a +1 morale bonus to attack and damage rolls while they are within 60 feet of the orc.',
			'bb/Weapon Familiarity/bb: Orcs are proficient with greataxes, and orcish weapons.',
			'bb/Languages/bb: Orcs begin play speaking Orcish. Orcs with high Intelligence scores can choose from Common, Goblin, Gutterspeak, Shalassian, Taur-ahe, Thalassian, and Zandali.'
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