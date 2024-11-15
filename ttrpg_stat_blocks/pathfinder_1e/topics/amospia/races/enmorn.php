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
		"Enmorn",// Name
		10,// Race Points
		"Enmorn are the evolution of darkened narmen who ceased being narmen.
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
					'+1d4 years<br>(16 - 19 years)',
					'+1d6 years<br>(16 - 21 years)',
					'+2d6 years<br>(17 - 27 years)',
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
					'53 years',
					'70 years',
					'70 + 3d20 years',
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
		"They resemble hairless humans with an extra eye in the middle of their forehead whose skin ranges from neutral gray to black. Their natural rune scars are lost but they cut profane runes into their bodies that leave new rune scars.",// Physical Desc
		"Enmorn mostly live dull lives of near poverty within the city-state of N'mor. Anything goes for the most part but no one dares disrespect the witches who run N'mor or N'morahlw'nafh, the original patron deity of the city.",// Society
		"Enmorn rarely interact with other races but are generally feared due to their appearance.",// Relations
		"Enmorn tend towards the chaotic and evil sides of the alignment chart but most are true neutral. Many belong to the witches' and/or N'morahlw'nafh's cults.",// Alignment and Religion
		"",// Adventurers
		"WIP",// Male Names
		"WIP",// Female Names
		[
			"any" => 2
		],// Ability Mofifiers
		"Enmorn are a highly varied and versatile race.",// Ability Description
		[
			"bb/Medium/bb: Enmorn are Medium creatures and have no bonuses or penalties due to their size.",
			"bb/Humanoid/bb: Enmorn are humanoids with the alial and enmorn subtypes.",
			"bb/Normal Speed/bb: Enmorn have a base speed of 30 feet.",
			"bb/Fiendish Blood/bb: Enmorn with the abyssal or infernal bloodlines can use bloodline powers from those bloodlines as though they were one level higher. This does not grant access to powers they would otherwise not have access to.",
			"bb/See In Darkness/bb: Enmorn can see perfectly in darkness of any kind including supernatural darkness.",
			"bb/Spell-like Abilities/bb: Enmorn can cast ii/blood money/ii as a spell-like ability at-will and have ii/detect magic/ii as a constant spell-like effect.",
			"bb/Languages/bb: Enmorn begin play speaking Narman and either Abyssal or Infernal. Enmorn with high Intelligence scores can choose from the following languages: Abyssal, Aklo, Aquan, Aztec, Celestial, Common, Donovian, Elven, Idgyptian, Infernal, Mayan, Undercommon, and Vandalusian."
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
					'An enmorn\'s alial object takes the form of a gemstone formed as their third eye absorbs the energies of the profane runes they carve into their skin and crystallizes upon their death.',
					'bb/Weapon Properties/bb ii/+1 Bane-Lawful-Outsiders/ii',
					'bb/Spell Modifiers/bb '.sTable(
						[
							'CL/DC Modifier',
							'Spells'
						],
						[
							[
								'+1',
								'chatic, darkness, and evil spells'
							],
							[
								'-1',
								'good, lawful, and light spells'
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