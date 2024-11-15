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
		'Anvil Narmen',// Name
		13,// Race Points
		'Anvil narmen are a sub-race from the Adamantite Anvil.',// Desc
		'Taller than humans, elves, or orcs, Narmen stand at an average of 7 feet tall with a build similar to an elf who has spent too much time sitting at their desk. Narmen have coal black skin with a network of grey scars that vaguely resemble arcane runes, a remnant of their ancient powers. Due to their arcane modification, Narmen have lack all hair and possess a single long tusk jutting straight out of their mouth which they are quite familiar with not running into things, much to the perplexing of other races.
		Anvil narmen have a protective chitinous plating on their forearms.',// Physical Desc
		'',// Society
		'',// Relations
		'',// Alignment and Religion
		'',// Adventurers
		'WIP',// Male Names
		'WIP',// Female Names
		[
			'str' => 2,
			'int' => -2,
			'cha' => 2
		],// Ability Mofifiers
		'Anvil narmen are well trained fighters but often don\'t spend any time on more scholarly pursuits.',// Ability Description
		[
			'bb/Medium/bb: Narmen are Medium creatures and have no bonuses or penalties due to their size.',
			'bb/Humanoid/bb: Narmen are humanoids with the alial and narman subtypes.',
			'bb/Normal Speed/bb: Narmen have a base speed of 30 feet and a swim speed of 30 feet.',
			'bb/Darkvision/bb: Narmen can see in the dark up to 60 feet.',
			'bb/Extra Long Breath/bb: Narmen are used to spending long periods of time underwater despite breathing air and are thus magically adapted to not only hold their breath for exceptionally long periods of time but also are able to speak while underwater. Narmen are able to hold their breath for 15 rounds for each point of constitution they possess before risking drowning or suffocation. They can also cast spells with verbal components, say command words, and speak while underwater without issue. ',
			'bb/Lightbringer/bb: Narmen are immune to light based blind and dazzle and cast spells with the light descriptor at +1 caster level. They gain ii/light/ii as a spell-like ability at will.',
			'bb/Natural Attack/bb: Narmen have a gore attack that deals 1d6 piercing damage.',
			'bb/Alishild/bb: Anvil narmen gain a +2 shield bonus from the chitinous plating on their forearms.',
			'bb/Languages/bb: Narmen begin play speaking Common and Narman. Narmen with high Intelligence scores can choose from the following languages: Abyssal, Aquan, Aztec, Celestial, Donovian, Draconic, Elven, Idgyptian, Infernal, Mayan, Undercommon, and Vandalusian.'
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
					'An anvil narman\'s alial object takes the form of a highly resistant chitinous plating on their off-hand forearm. It loosens upon death and can be worn to grant a +2 shield bonus in addition to any attached fore plate. An alishild counts as a shield for the purposes of proficiency though non-anvil narmen are not as skilled with them, decreasing the base bonus to +1. This bonus does not stack with the wearer\'s own alishild.',
					'bb/Weapon Properties/bb ii/+1 Defending/ii',
					'bb/Spell Modifiers/bb Conjured weapons receive a +1 enhancement bonus. This bonus increases by +1 for every 5 levels the anvil narman possessed in any class, to a maximum of +5 at 20 levels.',
					sTable(
						[
							'CL/DC Modifier',
							'Spells'
						],
						[
							[
								'+1',
								'Abjuration and lawful spells'
							],
							[
								'-1',
								'Illusion, chaotic, and ruse spells'
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
		'Racial Equipment',
		'racial-equipment',
		[
			[
				'block' => true,
				'name' => 'Fore Plating',
				'type' => 'item',
				'texts' => quick_array([
					'These specially designed curved plates are designed to fit on to the chitinous alishild of an anvil narman\'s forearm, enhancing the amount of defense it can provide. These plates come in light and heavy forms in both wood and steel and otherwise have the same statistics as a shield except that any shield bonus the plating provides is added to that of the alishild. Fore plating can be made out of special materials and magically enhanced like a shield.'
				]),
				'spaced' => true
			]
		],
		true
	);
	require $startDir.'pageEnd.php';
?>