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
		'Kobold',
		7,
		'bb/Table: Random Height and Weight/bb'.sTable(
			[
				'Gender',
				'Base Height',
				'Height Modifier',
				'Base Weight',
				'Weight Modifier'
			],
			[
				[
					'Male',
					'3\' 4"',
					'+1d8 in.<br>(3\' 5" - 4\')',
					'141 lbs.',
					'+(1d8x2 lbs.)<br>(143 - 157 lbs.)'
				],
				[
					'Female',
					'3\' 4"',
					'+1d8 in.<br>(3\' 5" - 4\')',
					'141 lbs.',
					'+(1d8x2 lbs.)<br>(143 - 157 lbs.)'
				]
			],
			true,
			false
		),
		'',
		'',
		'',
		'',
		'',
		'',
		'',
		[
			'dex' => 2,
			'str' => -2,
			'cha' => -2,
			'int' => -4
		],
		'',
		[
			'bb/Humanoid/bb: Kobolds are humanoid creatures with the kobold subtype.',
			'bb/Small/bb: Kobolds are Small creatures and gain a +1 size bonus to their AC, a +1 size bonus on attack rolls, a –1 penalty on combat maneuver checks and to their Combat Maneuver Defense, and a +4 size bonus on Stealth checks.',
			'bb/Slow Speed/bb: Kobolds have a base speed of 20 feet.',
			'bb/Low-Light Vision/bb: Kobolds can see twice as far in conditions of dim light.',
			'bb/Cave Dweller/bb: Kobolds gain a +1 bonus on Knowledge (dungeoneering) and Survival checks made underground.',
			'bb/Expert Miner/bb: Kobolds gain a +2 bonus to Profession (miner) checks.',
			'bb/Jumpy/bb: Kobolds gain a +1 racial bonus on all saving throws.',
			'bb/Mine Fighting/bb: Kobolds are proficient with using pickaxes as weapons and gain a +1 racial bonus on attack rolls against vermin native to underground places.',
			'bb/Swarming/bb: Kobolds are used to living and fighting communally with other kobolds. Up to two kobolds can share the same square at the same time. If two kobolds that are occupying the same square attack the same foe, they are considered to be flanking that foe as if they were in two opposite squares.',
			'bb/Underground Stalker/bb: Kobolds can move unhindered through difficult terrain while underground. In addition, kobolds with a Dexterity score of 13 or higher gain Nimble Moves as a bonus feat.',
			'bb/Languages/bb: Kobolds begin play speaking Common. Kobolds with high Intelligence scores can choose from Dwarven, Goblin, Kalimag, and Orcish.'
		],
		false
	);
	blockStack(
		'Racial Equipment',
		'racial_equipment',
		[
			[
				'block' => true,
				'name' => 'Kobold Candle',
				'type' => 'item',
				'texts' => quick_array([
					'bb/Price/bb 1 sp; bb/Weight/bb —'
				]),
				'spaced' => true,
				'sections' => [
					[
						'title' => 'Description',
						'spaced' => true,
						'texts' => quick_array([
							'Kobolds have a long history of illuminating the darkness through the use of their candles. As such, they have heavily refined their candles to be able to burn much brighter and much longer. Kobold candles shed normal light in a 15-foot radius and increase the light level by one step for an additional 15 feet beyond that area (darkness becomes dim light and dim light becomes normal light). A kobold candle does not increase the light level in normal light or bright light. A kobold candle burns for 6 hours.',
							'Kobold candles are designed to be difficult to extinguish and are treated as though they were protected by being in a lamp or lantern.',
							'Kobold candles are usually carried using helmet candles though kobolds can adjust other helmets to be able to carry a kobold candle in the same way by spending 1 gp of materials and 1 hour working.'
						])
					]
				]
			]
		]
	);
	require $startDir.'pageEnd.php';
?>