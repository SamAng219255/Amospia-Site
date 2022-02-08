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
	monsterBlockAuto(
		'Plague Child Priest of Niva',// name
		'Nivan Adept',// alt name
		'This indiviual has the build of a sickly child and is wrapped nearly head to toe in bandages with faintly glowing runes on them.',// lore text
		'1/2',// CR
		false,// MR
		false,// Custom XP
		'Nivan',// Race
		[
			'adept' => 1
		],// Class
		'N',// Alignment
		'Small',// Size
		'humanoid',// Type
		0,// Misc Initiative Mod
		false,// Mythic Initiative
		false,// Senses
		0,// Misc Perception Mod
		'disease cloud (5 ft., DC 15)',// Aura
		[],// Misc AC bonuses
		[1,6],// Number of hit dice, Hit dice size, <additional hp bonus>, <hp notes (fast healing/regen/etc)>
		[
			[
				'good' => false,
				'mod' => 2
			],
			[
				'good' => false,
				'mod' => 0
			],
			[
				'good' => true,
				'mod' => 0
			]
		],// Fortitude/Reflex/Will save good/bad and misc bonuses
		'bb/Immune/bb disease, poison',// Defensive Abilities
		'light blindness',// Weaknesses
		'20 ft.',// Speed
		[],// Attacks
		5,// Reach
		'diseased (DC 20)',// Special Attacks
		[],// Spell-like Abilities
		[
			[
				'class' => 'Adept',
				'prep' => true,
				'level' => 1,
				'stat' => 'wis',
				'conc' => 0,
				'spells' => [
					0 => [
						'perday' => 'at-will',
						'list' => [
							'guidance',
							'light',
							'mending'
						]
					],
					1 => [
						'list' => [
							'preserve',
							'scarify'
						]
					]
				]
			]
		],// Spell Casting
		'',// Spell Casting Note
		[
			'str' => 5,
			'dex' => 11,
			'con' => 20,
			'int' => 10,
			'wis' => 18,
			'cha' => 9
		],// Stats
		0.5,// BAB (1=full, 0.75=3/4 or medium, 0.5=half or slow)
		0,//CMB misc bonus and special cases
		0,//CMD misc bonus and special cases
		[
			'Great Fortitude*',
			'note' => 'Feats marked with * are already included in the creature\'s statistics.'
		],// Feats
		[
			[
				'skill' => 'Heal',
				'stat' => 'wis',
				'bonus' => 4
			],
			[
				'skill' => 'Spellcraft',
				'stat' => 'int',
				'bonus' => 4
			]
		],// Skills
		[
			'Nivan'
		],// Languages
		'',// Special Qualities
		'any (Niva\'s Loss)',// Environment
		'solitary, pair',// Organization
		'NPC gear',// Treasure
		[
			[
				'name' => 'Disease Integration',
				'type' => 'Ex',
				'desc' => 'Plague Children are treated as having a countless number of diseases. Each disease that is successfully removed by a spell or other effect deals 1d4 con damage which cannot be healed by normal means. If the effect requires a check or other roll for each disease, continue making checks until one fails at which point the following checks are automatic failures. If the effect removes all diseases, it instantly kills the Plague Child instead.
				Unlike ordinary ability damage this damage is not restored at a rate of 1 point per day and can not be healed by spells and effects that remove ability damage. Rather, it can be healed at a rate of 1 point per week, resetting if further damage is taken this way, and 1d4 points can be healed of it through spells that truly disease their targets such as ii/contagion/ii. Disease like effects, asymptomatic diseases, and effects which end with the duration of the spell do not count.'
			],
			[
				'name' => 'Disease Cloud',
				'type' => 'Ex',
				'desc' => 'Each round, all creatures within 5\' of a Plague Child must succeed at a fortitude save with a DC equal to 10 plus the plague child\'s number hit dice plus the their con modifier (normally 15). If a creature fails, roll on the table below to determine which disease they have contracted. This effect otherwise behaves as a non-magical contagion spell.'.sTable(
					[
						'd%',
						'Disease'
					],
					[
						[
							'01-07',
							'Athrakitis'
						],
						[
							'08-17',
							'Blister Phage'
						],
						[
							'18-28',
							'Bubonic Plague'
						],
						[
							'29-42',
							'Cackle Fever'
						],
						[
							'43-62',
							'Leprosy'
						],
						[
							'63-76',
							'Red Ache'
						],
						[
							'77-90',
							'Shakes'
						],
						[
							'90-100',
							'Tuberculosis'
						]
					],
					true,
					false
				)
			],
			[
				'name' => 'Diseased',
				'type' => 'Ex',
				'desc' => 'Plague Children carry many highly contagious diseases that can be spread quite easily. With any successful melee touch attack, they can can attempt to transmit one of their diseases. This behaves like their Disease Cloud ability except the DC is treated as being 5 higher.'
			],
			[
				'name' => 'Hideous Appearance',
				'type' => 'Ex',
				'desc' => 'Due to hundreds of generations of disease, Plague Children\'s skin are coated in scars, tumours, boils, and varying malformities that make them appear absolutely repulsive. Plague Children suffer a -10 penalty on all charisma based checks except intimidate checks against any living creature that can clearly see them that is not a Plague Child.'
			]
		],// Special Abilities
		$desc='',// Description
		[
			'Gear' => [
				'wooden holy symbol of Niva',
				'ii/ aa/bandages|bandages of quarantine/aa /ii (only if they were permitted to leave the island or greet outsiders dropping their CR by 1 step)'
			]
		]
	);
	require $startDir.'pageEnd.php';
?>