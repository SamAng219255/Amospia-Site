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
		"Enlightened Narmen",// Name
		19,// Race Points
		"Enlightened narmen are those descendant from the orginal Return sect of Narmens who, following the end of their long isolation, determined to return to their goddess Zovilla and once again earn her blessings. These individuals have been blessed for their persistence and have regained the smallest portion of their ancient glory.
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
		"Taller than humans, elves, or orcs, enlightened narmen stand at an average of 7 feet tall with a build similar to a muscular elf. Enlightened narmen have, almost white, pale skin with golden, softly glowing runes across their skin. Enlightened narmen have regrown their hair and possess long, flowing, golden locks. The tusk, that was zcquired by the narmen as a side-effect of their arcane adaptation to the depth of the sea, is dramatically shorter on an enlightened narmen than on most, being only half the length.",// Physical Desc
		"Most enlightened narmen are members of the Return sect of the First Amospian Empire. The Return sect functions as a theocracy with Zovilla's highest priests at its head. Every member knows their place and completes their assigned duties without hesitation.",// Society
		"Enlightened are often looked up to by some of the other narmen generally for their devotion and privilege though if for no other reason than vain envy of their golden locks of hair. Healers often travel to grand cathedral-fortress cities of the enlightened narmen to train and hone their art. Enlightened narmen, in turn, often travel outside of their grand cities to visit the cities of other races and provide aid, generally in the form of healing, as well as to spread the word of Zovilla. Other races tend to find these wandering priests a bit stuck up though quite helpful.",// Relations
		"Enlightened narmen are almost exclusively good aligned and the large majority are lawful. Almost all enlightened narmen pay respects in some form or another to the goddess Zovilla.",// Alignment and Religion
		"",// Adventurers
		"WIP",// Male Names
		"WIP",// Female Names
		[
			"str" => 2,
			"int" => -2,
			"cha" => 2
		],// Ability Mofifiers
		"Enlightened Narmen have a strong personality and have had a portion of their strength returned to them though they have shunned secular puruits and their knowledge is lacking.",// Ability Description
		[
			"bb/Medium/bb: Enlightened Narmen are Medium creatures and have no bonuses or penalties due to their size.",
			"bb/Outsider/bb: Enlightened Narmen are outsiders with the native subtype.",
			"bb/Normal Speed/bb: Enlightened Narmen have a base speed of 30 feet and a swim speed of 30 feet.",
			"bb/Darkvision/bb: Narmen can see in the dark up to 60 feet.",
			"bb/Extra Long Breath/bb: Narmen are used to spending long periods of time underwater despite breathing air and are thus magically adapted to not only hold their breath for exceptionally long periods of time but also are able to speak while underwater. Narmen are able to hold their breath for 15 rounds for each point of constitution they possess before risking drowning or suffocation. They can also cast spells with verbal components, say command words, and speak while underwater without issue. ",
			"bb/Lightbringer/bb: Narmen are immune to light based blind and dazzle and cast spells with the light descriptor at +2 caster levels.",
			"bb/Natural Attack/bb: Enlightened Narmen have a gore attack that deals 1d4 piercing damage.",
			"bb/Heavenborn/bb: Enlightened Narmen have a +2 to knowledge planes and cast spells with the good descriptor at +1 caster level.",
			"bb/Celestial Resistance/bb: Enlightened Narmen have acid, cold, electricity resistance 5.",
			"bb/Exalted Spell Resistance/bb: Enlightened Narmen have spell resistance equal to 6 plus their level versus spells and spell-like abilities with the evil descriptor and those cast by evil outsiders.",
			"bb/Languages/bb: Enlightened Narmen begin play speaking Narman and Celestial. Enlightened Narmen with high Intelligence scores can choose from the following languages: Abyssal, Aklo, Aquan, Aztec, Common, Donovian, Elven, Idgyptian, Infernal, Mayan, Undercommon, and Vandalusian."
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
					'An enlightened narman\'s alial object takes the form of the tusk which protrudes from their mouth called an alidens. When removed, this tusk can be used as a one-handed melee weapon that deals 1d4 points of piercing damage and requires exotic weapon proficiency. The tusk receives its weapon properties as well, though an alial object only has the creature\'s weapon properties if it was part of the creature upon their death.',
					'bb/Weapon Properties/bb ii/+1 Bane-Evil-Outsiders/ii',
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
								'good spells'
							],
							[
								'-1',
								'evil spells'
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
?>
<a target="_blank" href="https://www.worldanvil.com/w/amospia-pharaohcrab/a/enlightened-narmen-species"><p>World Anvil</p></a>
<?php require $startDir.'pageEnd.php'; ?>