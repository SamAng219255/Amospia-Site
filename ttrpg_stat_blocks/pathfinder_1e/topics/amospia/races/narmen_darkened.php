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
		"Darkened Narmen",// Name
		19,// Race Points
		"Darkened narmen are those descendant from the orginal New World sect of Narmens who, following the end of their long isolation, determined to outright reject Zovilla and delve into the forbidden magics. These individuals found a patron, named N'morahlw'nafh, in their pursuit who granted them demonic powers.
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
		"Taller than humans, elves, or orcs, Narmen stand at an average of 7 feet tall with a build similar to an elf who has spent too much time sitting at their desk. Narmen have coal black skin with a network of scars that vaguely resemble arcane runes, a remnant of their ancient powers. Due to their arcane modification, Narmen have lack all hair and possess a single long tusk jutting straight out of their mouth which they are quite familiar with not running into things, much to the perplexing of other races.
		The runes on a a darkened narmen's skin, that are only scars on their brethren, glow with a dim purple light. Their bodies have become more fit and nimble. A third eye has appeared on their foreheads that can see magical energies and allows access to certain powerful scrying rituals.",// Physical Desc
		"Most darkened narmen are members of the New World sect of the First Amospian Empire. The New World sect retains the rigid hierarchy of the other sects of narmen though while in other sects the hierarchy is formed from legal precedent and the memebers follow their betters out of loyalty, narmen of the New World sect obey out of fear, with the stronger forcing the weaker to obey.",// Society
		"Darkened narmen are feared and/or hated by most others though the darkened narmen pay them little heed. Content to work amongst themselves in growing their powers.",// Relations
		"Darkened narmen tend toward the evil and chaotic sides of the chart in comparison to the other types of narmen though there are plenty of exceptions and while they are radical in comparison, the most common alignment of them is true neutral. Most darkened narmen pay at least some respect to N'morahlw'nafh, the void god who granted them this form.",// Alignment and Religion
		"",// Adventurers
		"WIP",// Male Names
		"WIP",// Female Names
		[
			"dex" => 2,
			"wis" => -2,
			"cha" => 2
		],// Ability Mofifiers
		"Darkened Narmen have a strong personality and move with supernatural grace but their patron has stunted their ability to foresee his schemes and resist commands.",// Ability Description
		[
			"bb/Medium/bb: Darkened Narmen are Medium creatures and have no bonuses or penalties due to their size.",
			"bb/Outsider/bb: Darkened Narmen are outsiders with the alial, native, and narman subtypes.",
			"bb/Normal Speed/bb: Darkened Narmen have a base speed of 30 feet.",
			"bb/Darkvision/bb: Narmen can see in the dark up to 60 feet.",
			"bb/Natural Attack/bb: Darkened Narmen have a gore attack that deals 1d6 piercing damage.",
			"bb/Fiendish Resistance/bb: Darkened Narmen have cold, electricity, and fire resistance 5.",
			"bb/Fiendish Blood/bb: Darkened Narmen with the abyssal or infernal bloodlines can use bloodline powers from those bloodlines as though they were one level higher. This does not grant access to powers they would otherwise not have access to.",
			"bb/Fell Magic/bb: Darkened Narmen add 1 to the DC of all spells and spell-like abilities they cast of the necromancy school.",
			"bb/See In Darkness/bb: Darkened Narmen can see perfectly in darkness of any kind including supernatural darkness.",
			"bb/Spell-like Abilities/bb: Darkened Narmen can cast ii/bleed/ii, ii/chill touch/ii, ii/detect poison/ii, and ii/touch of fatigue/ii each once per day and have ii/detect magic/ii as a constant spell-like effect.",
			"bb/Languages/bb: Darkened Narmen begin play speaking Narman and either Abyssal or Infernal. Darkened Narmen with high Intelligence scores can choose from the following languages: Abyssal, Aklo, Aquan, Aztec, Celestial, Common, Donovian, Elven, Idgyptian, Infernal, Mayan, Undercommon, and Vandalusian."
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
					'A darkened narman\'s alial object takes the form of the tusk which protrudes from their mouth called an alidens. When removed, this tusk can be used as a one-handed melee weapon that deals 1d6 points of piercing damage and requires exotic weapon proficiency. The tusk receives its weapon properties as well, though an alial object only has the creature\'s weapon properties if it was part of the creature upon their death.',
					'bb/Weapon Properties/bb ii/+1 Bane-Good-Outsiders/ii',
					'bb/Spell Modifiers/bb '.sTable(
						[
							'CL/DC Modifier',
							'Spells'
						],
						[
							[
								'+2',
								'darkness spells'
							],
							[
								'+1',
								'evil spells'
							],
							[
								'-1',
								'good spells'
							],
							[
								'-2',
								'light spells'
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
?>
<a target="_blank" href="https://www.worldanvil.com/w/amospia-pharaohcrab/a/darkened-narmen-species"><p>World Anvil</p></a>
<?php require $startDir.'pageEnd.php'; ?>