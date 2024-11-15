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
		"Zovill Narmen",// Name
		24,// Race Points
		"The descendants of enlightened narmen who were gifted by the capital, unleashing a portion of their ancient magics.
		bb/Table: Random Starting Ages/bb".sTable(
			[
				'Adulthood',
				'Intuitive',
				'Self-Taught',
				'Trained'
			],
			[
				[
					'15 years',
					'+1d6 years<br>(16 - 21 years)',
					'+2d6 years<br>(17 - 27 years)',
					'+3d6 years<br>(18 - 33 years)',
				]
			],
			true,
			false
		).'bb/Table: Aging/bb'.sTable(
			[
				'Middle Age',
				'Old',
				'Venerable',
				'Maximum Age'
			],
			[
				[
					'35 years',
					'93 years',
					'350 years',
					'350 + 4d100 years',
				]
			],
			true,
			false
		).'bb/Table: Random Height and Weight/bb'.sTable(
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
					'5\' 11"',
					'+2d12 in.<br>(6\' 1" - 7\' 11")',
					'100 lbs.',
					'+(2d12x3 lbs.)<br>(106 - 172 lbs.)'
				],
				[
					'Female',
					'5\' 5"',
					'+2d12 in.<br>(5\' 7" - 7\' 5")',
					'90 lbs.',
					'+(2d12x3 lbs.)<br>(96 - 162 lbs.)'
				]
			],
			true,
			false
		),// Desc
		"Taller than humans, elves, or orcs, zovill narmen stand at an average of 7 feet tall with a build similar to a muscular elf. Zovill narmen have, almost white, pale skin with golden, softly glowing runes across their skin. Zovill narmen have regrown their hair and possess long, flowing, golden locks. Zovill narmen lack the tusk possessed by their other narman cousins.",// Physical Desc
		"Most zovill narmen live in Zovillzberg, which has recently converted to a complex bureaucracy which is mind-numbing to outsiders yet the locals will tell you is perfectly reasonable.",// Society
		"Zovill narmen often keep to themselves though their city has become a hub of activity for the region with many races going in and out. This populace is generally treated fairly though the complexity of the laws sometimes trips up non-natives.",// Relations
		"Zovill narmen are almost exclusively lawful aligned and most pay respects in some form to Zovilla.",// Alignment and Religion
		"",// Adventurers
		"WIP",// Male Names
		"WIP",// Female Names
		[
			"str" => 2,
			"dex" => -2,
			"int" => 2
		],// Ability Mofifiers
		"Zovill narmen have had a portion of their ancient might returned to them and are well studied but are often slow to react.",// Ability Description
		[
			"bb/Medium/bb: Zovill Narmen are Medium creatures and have no bonuses or penalties due to their size.",
			"bb/Outsider/bb: Zovill Narmen are outsiders with the alial, native, and narman subtypes.",
			"bb/Normal Speed/bb: Zovill Narmen have a base speed of 30 feet and a swim speed of 30 feet.",
			"bb/Darkvision/bb: Narmen can see in the dark up to 60 feet.",
			"bb/Extra Long Breath/bb: Narmen are used to spending long periods of time underwater despite breathing air and are thus magically adapted to not only hold their breath for exceptionally long periods of time but also are able to speak while underwater. Narmen are able to hold their breath for 15 rounds for each point of constitution they possess before risking drowning or suffocation. They can also cast spells with verbal components, say command words, and speak while underwater without issue. ",
			"bb/Lightbringer/bb: Narmen are immune to light based blind and dazzle and cast spells with the light descriptor at +2 caster levels.",
			"bb/Natural Attack/bb: Zovill Narmen have a gore attack that deals 1d4 piercing damage.",
			"bb/Heavenborn/bb: Zovill Narmen have a +2 to knowledge planes and cast spells with the good descriptor at +1 caster level.",
			"bb/Celestial Resistance/bb: Zovill Narmen have acid, cold, electricity resistance 5.",
			"bb/Exalted Spell Resistance/bb: Zovill Narmen have spell resistance equal to 6 plus their level versus spells and spell-like abilities with the evil descriptor and those cast by evil outsiders.",
			"bb/Luminous Font/bb: Zovill narmen gain 3 spell-like abilities chosen at first level from the orisons and 1st level spells of the cleric spell list. Chosen orisons can be cast at-will while 1st level spells can be cast once per day.",
			"bb/Languages/bb: Zovill Narmen begin play speaking Narman and Celestial. Zovill Narmen with high Intelligence scores can choose from the following languages: Abyssal, Aklo, Aquan, Aztec, Common, Donovian, Elven, Idgyptian, Infernal, Mayan, Undercommon, and Vandalusian."
		],// Racial Traits
		false// Subraces
	);
	block(
		'Alial Object',
		'alial-object',
		[
			'Alial races have (generally suppressed) magical energy that infuses a specific part of their body. Though this energy may be present in the object before the creature\'s death, alial objects are non-magical until after the creature\'s death and only acquire their abilities if they are still part of the creature when they die. This body part must be hard like bone or a gemstone. This object can otherwise take many different forms.',
			'Alial objects contain a significantly strong impression of the owner\'s identity. Whether or not the creature is deceased, alial objects can be used as a focus for any spell that requires identifying a creature, such as scrying, to perfectly identify the owner. The owner also receives no saves against such spells.',
			'Alial objects can also be incorporated into specific type of magic items, granting bonuses but potentially changing their effect. Alial objects do not impart their weapon properties or spell modifiers unless stated otherwise or incorporated into an item that uses them.'
		],
		true,
		[
			[
				'title' => 'Description',
				'spaced' => true,
				'texts' => quick_array([
					'An Zovill narman\'s alial object takes the form of an extra tooth which is located between their front two teeth on the top row.',
					'bb/Weapon Properties/bb ii/+1 Bane-Lawful-Outsiders/ii',
					'bb/Spell Modifiers/bb '.sTable(
						[
							'CL/DC Modifier',
							'Spells'
						],
						[
							[
								'+2',
								'light spells'
							],
							[
								'+1',
								'good and lawful spells'
							],
							[
								'-1',
								'evil and chaotic spells'
							],
							[
								'-2',
								'darkness spells'
							]
						],
						true,
						false,
						false,
						true
					)
				])
			]
		]
	);
	require $startDir.'pageEnd.php';
?>