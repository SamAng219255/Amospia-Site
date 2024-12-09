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
		'Worgen',
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
			'dex' => 2,
			'int' => -4
		],
		'',
		[
			'bb/Monstrous Humanoid/bb: Worgen are monstrous humanoids creatures with the human and worgen subtypes.',
			'bb/Medium/bb: Worgen are Medium creatures and have no bonuses or penalties due to their size.',
			'bb/Running Wild/bb: Worgen have a base speed of 40 feet.',
			'bb/Darkvision/bb: Worgen can see perfectly in darkness up to 60 feet away though they can only see in black and white in the dark.',
			'bb/Viciousness/bb: Worgen gain a +2 bonus on attack rolls to confirm a critical hit.',
			'bb/Flayer/bb: Worgen gain a +2 bonus to checks to forage for leather and animal hides and to skin and prepare them for use and to Profession (tanner) checks.',
			'bb/Claws/bb: Worgen receive two claw attacks. These are primary natural attacks that deal 1d4 points of slashing damage.',
			'bb/Two Forms/bb: Worgen gain the following supernatural ability: A worgen can assume the appearance of a human. This form is static and cannot be changed each time it takes this form. The worgen gains a +10 racial bonus on Disguise checks made to appear as a human. Changing their shape is a standard action. The worgen loses their racial bonuses to Strength and Dexterity while in human form. This trait otherwise functions as ii/alter self/ii, save that the worgen does not adjust its ability scores further.',
			'bb/Languages/bb: Worgen begin play speaking Common. Worgen with high Intelligence scores can choose from Darnassian, Draenei, Dwarven, Gnomish, Thalassian, Orcish, and Pandaren.'
		],
		false,
		[
			[
				'Worgen of Other Races, Reincarnate, and Polymorph',
				[
					'By default, all worgen are humans who received the worgen curse from Gilneas. Despite this, any race is capable of contracting the curse and a GM may allow a player to play a worgen of a different base race. This changes the form they turn into to being their new base race and replaces the human subtype with the subtype of their base race. Worgen count as a member of their base race for all purposes. If their base race is not Medium, change the worgen\'s size to match. When they assume the form of their base race, worgen the physical ability modifiers of that race. If the race allows you to choose an ability to give a bonus to, they receive no bonus.',
					'If a worgen is reincarnated as a different race, use the rules for worgen of a different race instead of changing their racial abilities.',
					'If a worgen changes form from a polymorph or similar effect, they can always revert to their worgen form as a standard action. If the effect normally prevents changing forms, they are treated as though they had the shapechanger subtype. Permanent transformations cause the worgen to assume that form instead of a human form.'
				]
			]
		]
	);
	require $startDir.'pageEnd.php';
?>