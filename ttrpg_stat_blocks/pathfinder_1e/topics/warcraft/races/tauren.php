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
		'Tauren',
		9,
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
			'dex' => -4,
			'con' => 2,
			'int' => -2,
			'wis' => 2
		],
		'',
		[
			'bb/Humanoid/bb: Tauren are humanoid creatures with the tauren subtype.',
			'bb/Medium/bb: Tauren are Medium creatures and have no bonuses or penalties due to their size.',
			'bb/Normal Speed/bb: Tauren have a base speed of 30 feet.',
			'bb/War Stomp/bb: Once per day as a standard action, a tauren can perform a war stomp that staggers all creatures within 5 feet for 1 round. This is an extraordinary ability.',
			'bb/Endurance/bb: Tauren receive Endurance as a bonus feat at first level.',
			'bb/Brawn/bb: Tauren deal an additional amount of damage equal to half of their Strength modifier on a successful critical hit with a melee attack.',
			'bb/Cultivation/bb: Tauren receive a +2 bonus to skill checks to forage or collect herbs or alchemical supplies and to Profession (herbalist) checks.',
			'bb/Languages/bb: Tauren begin play speaking Orcish and Taur-ahe. Tauren with high Intelligence scores can choose from Common, Goblin, Gutterspeak, Shalassian, Thalassian, and Zandali.'
		],
		false,
		[
			[
				'Alternate Racial Traits',
				[
					'bb/Relentless/bb',
					'/mm/These tauren gain a +2 bonus on combat maneuver checks made to bull rush or overrun an opponent. This bonus only applies while both the tauren and their opponent are standing on the ground. They also receive a +4 racial bonus to their CMD when resisting bull rush or trip attempts while standing on the ground.',
					'/mm/This replaces brawn.',
					'bb/One With The Land/bb',
					'/mm/You gain a +2 bonus on Survival to get along in the wild.',
					'/mm/This replaces Cultivation.'
				]
			]
		]
	);
	require $startDir.'pageEnd.php';
?>