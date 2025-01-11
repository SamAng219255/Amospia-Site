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
		'Night Elf',
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
			'str' => -2,
			'dex' => 2,
			'wis' => 2
		],
		'Night elves are known for their lithe agility and keen insight, though their physical prowess is less pronounced compared to other races.',
		[
			'bb/Humanoid/bb: Night elves are humanoid creatures with the elf subtype.',
			'bb/Medium/bb: Night elves are Medium creatures and have no bonuses or penalties due to their size.',
			'bb/Fast Speed/bb: Night elves have a base speed of 35 feet.',
			'bb/Low-Light Vision/bb: Night elves can see twice as far in conditions of dim light.',
			'bb/Shadowmeld/bb: Attacks made against night elves while they are within areas of dim light have a 50% miss chance instead of the normal 20% miss chance. This trait does not grant total concealment; it just increases the miss chance. This is a supernatural ability.',
			'bb/Elusiveness/bb: Night elves gain Skill Focus (Stealth) as a bonus feat at 1st level.',
			'bb/Quickness/bb: Night elves gain a +1 dodge bonus to armor class.',
			'bb/Touch of Elune/bb: Night elves receive a +2 racial bonus to initiative checks at night and a +2 bonus to attack rolls to confirm critical hits during the day.',
			'bb/Weapon Familiarity/bb: Night elves are proficient with bows and elven weapons.',
			'bb/Languages/bb: Night elves begin play speaking Common and Darnassian. Night elves with high Intelligence scores can choose from Gnomish, Draenei, Dwarven, Orcish, Pandaren, and Thalassian.'
		],
		false,
		[
			[
				'Alternate Racial Traits',
				[
					'bb/Child of Night/bb',
					'/mm/You gain the following supernatural ability: Once per day, you can change your appearance to look as if you were little more than a 4-foot-tall area of shadow. Your physical form still exists and you are not incorporeal—only your appearance changes. This racial trait works like invisibility, except the effect only lasts 1 round per level (maximum 5 rounds).',
					'/mm/This replaces elusiveness and quickness.'
				]
			]
		]
	);
	require $startDir.'pageEnd.php';
?>