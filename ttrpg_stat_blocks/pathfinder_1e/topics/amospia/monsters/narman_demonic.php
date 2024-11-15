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
	monsterBlockAuto(
		'Demonic Narmen',// name
		false,// alt name
		'A towering narman looms before you, its coal-black skin marked by glowing purple scars resembling arcane runes. A single tusk juts from its mouth, and a third eye glimmers on its forehead. With large, leathery wings unfurled, it radiates an unsettling aura of ancient power.',// lore text
		12,// CR
		false,// MR
		false,// Custom XP
		'Narman',// Race
		['Sorcerer'],// Class
		[
			'alignment' => 'CE',
			'altruism' => -1,
			'humility' => -2,
			'purity' => -1,
			'honesty' => -1,
			'loyalty' => -1,
			'law' => -1,
			'individualism' => 1,
			'knowledge' => 1,
			'work' => -1
		],// Alignment
		'Medium',// Size
		'outsider (alial, chaotic, demon, evil, narman)',// Type
		0,// Misc Initiative Mod
		false,// Mythic Initiative
		'darkvision 60 ft., see in darkness, detect magic',// Senses
		0,// Misc Perception Mod
		'',// Aura
		[
			'natural' => 10
		],// Misc AC bonuses
		[15,10,0,'; fast healing 1'],// Number of hit dice, Hit dice size, <additional hp bonus>, <hp notes (fast healing/regen/etc)>
		[
			[
				'good' => false,// Fortitude
				'mod' => 4
			],
			[
				'good' => true,// Reflex
				'mod' => 7
			],
			[
				'good' => false,// Will
				'mod' => 0
			]
		],// Fortitude/Reflex/Will save good/bad and misc bonuses
		'dark affinity, bb/Immune/bb electricity, poison; bb/Resistance/bb acid 10, cold 10, fire 10',// Defensive Abilities
		'',// Weaknesses
		'30 ft., fly 30 ft. (clumsy)',// Speed
		[
			[
				'type' => 'Melee',
				'list' => [
					[
						'name' => 'claw',
						'mod' => 0,
						'stat' => 'str',
						'damage' => '1d6+4 plus 1d6 fire',
						'iterative' => 1
					],
					[
						'name' => 'gore',
						'mod' => 0,
						'stat' => 'str',
						'damage' => '1d6+4 plus 1d6 fire',
						'iterative' => 0
					]
				]
			]
		],// Attacks
		5,// Reach
		'abyssal weapons',// Special Attacks
		[
			'level' => 15,
			'conc' => 0,
			'spells' => [
				[
					'perday' => 'constant',
					'list' => [
						'detect magic',
						'infernal healing'
					]
				],
				[
					'perday' => 'at-will',
					'list' => [
						'bleed',
						'chill touch'
					]
				],
				[
					'perday' => 1,
					'list' => [
						'detect poison',
						'touch of fatigue',
						[
							'name' => 'summon',
							'note' => '2 void demons'
						]
					]
				]
			]
		],// Spell-like Abilities
		[
			[
				'class' => 'Sorcerer',
				'prep' => false,
				'level' => 15,
				'stat' => 'cha',
				'conc' => 28,
				'spells' => [
					0 => [
						'perday' => 'at-will',
						'list' => [
							'acid splash',
							'disrupt undead',
							'ghost sound',
							'mage hand',
							'penumbra',
							'read magic',
							'touch of fatigue',
							'sotto voice',
							'spark'
						]
					],
					1 => [
						'perday' => '6/day',
						'list' => [
							'charm person',
							'chill touch',
							'protection from good',
							'magic missile',
							'ray of enfeeblement'
						]
					],
					2 => [
						'perday' => '6/day',
						'list' => [
							'blindness / deafness',
							'defoliate',
							'invisibility',
							'scorching ray',
							'searching shadows'
						]
					],
					3 => [
						'perday' => '6/day',
						'list' => [
							'call the void',
							'deathwine',
							'fireball',
							'ray of exhaustion'
						]
					],
					4 => [
						'perday' => '6/day',
						'list' => [
							'bestow curse',
							'death knell aura',
							'enervation',
							'phantasmal killer'
						]
					],
					5 => [
						'perday' => '6/day',
						'list' => [
							'cloudkill',
							'shadow familiar',
							'sheep',
							'wracking ray +2'
						]
					],
					6 => [
						'perday' => '6/day',
						'list' => [
							'disintegrate',
							'hellfire ray',
							'major curse'
						]
					],
					7 => [
						'perday' => '4/day',
						'list' => [
							'finger of death',
							'greater scrying',
							'greater teleport',
							'plane shift'
						]
					]
				]
			]
		],// Spell Casting
		false,// Spell Casting Note
		[
			'str' => 18,
			'dex' => 24,
			'con' => 14,
			'int' => 16,
			'wis' => 8,
			'cha' => 36
		],// Stats
		1,// BAB (1=full, 0.75=3/4 or medium, 0.5=half or slow)
		0,// CMB misc bonus and special cases
		0,// CMD misc bonus and special cases
		[
			'Weapon Focus (ray)' // Feats
		],
		[
			[
				'skill' => 'Bluff',
				'stat' => 'cha',
				'bonus' => 18
			],
			[
				'skill' => 'Fly',
				'stat' => 'dex',
				'bonus' => 10
			],
			[
				'skill' => 'Intimidate',
				'stat' => 'cha',
				'bonus' => 18
			],
			[
				'skill' => 'Knowledge (arcana)',
				'stat' => 'int',
				'bonus' => 18
			],
			[
				'skill' => 'Knowledge (dungeoneering)',
				'stat' => 'int',
				'bonus' => 18
			],
			[
				'skill' => 'Knowledge (planes)',
				'stat' => 'int',
				'bonus' => 18
			],
			[
				'skill' => 'Spellcraft',
				'stat' => 'int',
				'bonus' => 18
			],
			[
				'skill' => 'Use Magic Device',
				'stat' => 'cha',
				'bonus' => 18
			]
		],// Skills
		'Abyssal, Aklo, Celestial, Draconic, Infernal, Narman; telepathy (100 ft.)',// Languages
		'Dark Magic',// Special Qualities
		'',// Environment
		'',// Organization
		'NPC gear',// Treasure
		[
			[
				'name' => 'Abyssal Weapons',
				'type' => 'Su',
				'desc' => 'A demonic narman\'s natural weapons, as well as any other weapons they wield, are treated as being magic, evil, and chaotic for the purposes of overcoming damage reduction. They also deal an additional 1d6 points of fire damage on a successful hit.'
			],
			[
				'name' => 'Dark Affinity',
				'type' => 'Ex',
				'desc' => 'A demonic narman is harmed by positive energy and healed by negative energy like an undead. They are also immune to energy drain and negative levels.'
			],
			[
				'name' => 'Dark Magic',
				'type' => 'Ex',
				'desc' => 'Demonic narmen add 1 to the DC of all spells and spell-like abilities they cast of the necromancy school. Demonic narmen with the abyssal or infernal bloodlines can use bloodline powers from those bloodlines as though they were one level higher. This does not grant access to powers they would otherwise not have access to.'
			]
		],// Special Abilities
		$desc=''// Description
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
					'A demonic narman\'s alial object takes the form of the tusk which protrudes from their mouth called an alidens. When removed, this tusk can be used as a one-handed melee weapon that deals 1d6 points of piercing damage and requires exotic weapon proficiency. The tusk receives its weapon properties as well, though an alial object only has the creature\'s weapon properties if it was part of the creature upon their death. In addition, the alial object can be activated using a command word to cause it to radiate darkness from its tip as ii/darkness/ii. The command word is the command form of the word for "to make darker" in the narman\'s native language. (Ex. "darken" in english)',
					'bb/Weapon Properties/bb ii/+1 Bane-Good-Outsiders Unholy/ii',
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
	require $startDir.'pageEnd.php';
?>