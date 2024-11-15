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
		'Strong-Tusk Narman',// Name
		11,// Race Points
		'Strong-tusk narmen are those that have learned the ways of the Swords of Strength and blended it with their own abilities.',// Desc
		'',// Physical Desc
		'',// Society
		'',// Relations
		'',// Alignment and Religion
		'',// Adventurers
		'WIP',// Male Names
		'WIP',// Female Names
		[
		],// Ability Mofifiers
		'Strong-tusk narmen do not receive any ability score modifiers from their class. (see strength blades)',// Ability Description
		[
			'bb/Medium/bb: Andinar are Medium creatures and have no bonuses or penalties due to their size.',
			'bb/Humanoid/bb: Andinar are humanoids with the alial and narman subtypes.',
			'bb/Normal Speed/bb: Andinar have a base speed of 30 feet and a swim speed of 30 feet.',
			'bb/Darkvision/bb: Andinar can see in the dark up to 60 feet.',
			'bb/Extra Long Breath/bb: Narmen are used to spending long periods of time underwater despite breathing air and are thus magically adapted to not only hold their breath for exceptionally long periods of time but also are able to speak while underwater. Narmen are able to hold their breath for 15 rounds for each point of constitution they possess before risking drowning or suffocation. They can also cast spells with verbal components, say command words, and speak while underwater without issue. ',
			'bb/Natural Attack/bb: Narmen have a gore attack that deals 1d6 piercing damage.',
			'bb/Swordtrained/bb: Strong-tusk narmen are automatically proficient in all sword-like weapons.',
			'bb/Languages/bb: Andinar begin play speaking Common, Narman, and Rethran. Andinar with high Intelligence scores can choose from the following languages: Aklo, Aztec, Celestial, Donovian, Elven, Idgyptian, Infernal, Mayan, Undercommon, and Vandalusian.'
		],// Racial Traits
		false// Subraces
	);
	block(
		'Strength Blades',
		'desc',
		quick_array([
			'Strong-tusk narmen wield unique weapons known as strength blades that can be enhanced with rune songs that are etched into length of the blade.',
			'Each blade is tuned to the creature who forges it and etches the primary rune into it and its properties can only be accessed by that creature. This is done as part of a trial of self discovery wherein they must etch their rune into the blade before returning to complete it. Afterwards they can etch this rune into another blade to make it their strength blade though this causes the previous rune to burn away and be destroyed. Any bladed weapon can be made into a strength blade. If the weapon is a double weapon, onlt one side functions as a strength blade.',
			'As long as they carry their blade, they receive its benefits. The primary rune grants a +2 racial bonus to a single ability score (no other racial bonuses). This choice is permanent and applies to every weapon their rune is applied to. The only way to change this rune is to spend 1 month (4 weeks) on a new trip of self discovery wherein they remain on their own for the entire duration. At the end of this time they create a new rune for themself (their old rune becomes inactive and non-magical) and they may retrain a single level in any class as though choosing it at first level and, if they retrain a level in their favored class to another class, their favored class changes to the new class.',
			'Rune songs are gained by completing 1 of 20 racial story feats. Each blade can contain up to 5 rune songs, though each day the it\'s owner can only activate 1 rune song plus an additional rune song for every 5 levels they possess. Any other rune songs are inactive. Adding, removing, or changing any number of rune songs on a blade takes 1 hour and can only be completed by its owner.'
		])
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
					'A strong-tusk narman\'s alial object takes the form of the tusk which protrudes from their mouth called an alidens. When removed, this tusk can be used as a one-handed melee weapon that deals 1d6 points of piercing damage and requires exotic weapon proficiency. The tusk receives its weapon properties as well, though an alial object only has the creature\'s weapon properties if it was part of the creature upon their death.',
					'bb/Weapon Properties/bb ii/+2/ii',
					'bb/Spell Modifiers/bb '.sTable(
						[
							'CL/DC Modifier',
							'Spells'
						],
						[
							[
								'+1',
								'Evocation spells'
							],
							[
								'-1',
								'Illusion spells'
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
	blockStack(
		'Rune Songs',
		'racial-feats',
		[
			[
				'block' => true,
				'name' => 'Holy Blade',
				'type' => 'feat',
				'texts' => quick_array([
					'bb/Prerequisites/bb strength blade, divine spellcasting, the ability to deal channel positive energy to damage undead using a spell or class feature such as cure light wounds, the channel energy cleric feature, or the lay on hands paladin feature',
					'bb/Benefit/bb Your strength blade functions as a divine focus and holy symbol for your spells and class abilities.',
					'bb/Goal/bb Help slay 30 significant foes using positive energy damage.',
					'bb/Completion Benefit/bb Once per round when you strike a foe that is harmed by positive energy, you can use a spell or class ability that allows you to channel positive energy to damage your target as a swift action. Only the struck creature is affected even if the spell or ability normally targets an area, though if it normally targets an area and allows a save, the struck creature does not receive a save.'
				]),
				'spaced' => true
			],
			[
				'block' => true,
				'name' => 'Mage Blade',
				'type' => 'feat',
				'texts' => quick_array([
					'bb/Prerequisites/bb strength blade, spellcasting',
					'bb/Benefit/bb Your hand holding your strength blade can be used to perform any necessary somatic components as though it were free.',
					'bb/Goal/bb You must successfully cast a total of 40 spells with a range of touch that require an attack roll on any significant foe.',
					'bb/Completion Benefit/bb When casting a spell with a range of touch, you can opt to place the charge on your strength blade. You may make any associated attack roll as part of the spell using your bonus with your strength blade. This does not add the weapon\'s damage. If you make a successful attack with the weapon while the charge is still on the blade, it discharges against the target of your attack.'
				]),
				'spaced' => true
			]
		],
		true
	);
	require $startDir.'pageEnd.php';
?>