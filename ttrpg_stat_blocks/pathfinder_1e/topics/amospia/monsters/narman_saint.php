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
		'Narman Saint',// name
		false,// alt name
		'A towering figure stands before you, its muscular frame covered in pale skin adorned with glowing golden runes. Long, flowing golden hair cascades down its back, and massive golden wings stretch out majestically behind it.',// lore text
		12,// CR
		false,// MR
		false,// Custom XP
		'Narman',// Race
		[],// Class
		[
			'alignment' => 'LG',
			'altruism' => 1,
			'humility' => 1,
			'purity' => 2,
			'honesty' => 1,
			'loyalty' => 1,
			'law' => 1,
			'individualism' => -1,
			'knowledge' => 1,
			'work' => 1
		],// Alignment
		'Medium',// Size
		'outsider (alial, angel, good, lawful, narman)',// Type
		4,// Misc Initiative Mod
		false,// Mythic Initiative
		'darkvision 60 ft., low-light vision',// Senses
		0,// Misc Perception Mod
		'protective aura (20 ft.)',// Aura
		[
			'armor' => 12,
			'shield' => 5
		],// Misc AC bonuses
		[15,10],// Number of hit dice, Hit dice size, <additional hp bonus>, <hp notes (fast healing/regen/etc)>
		[
			[
				'good' => false,// Fortitude
				'mod' => 0,
				'cases' => [
					'poison' => 4
				]
			],
			[
				'good' => true,// Reflex
				'mod' => 0
			],
			[
				'good' => true,// Will
				'mod' => 8
			]
		],// Fortitude/Reflex/Will save good/bad and misc bonuses
		'bb/Immune/bb acid, blindness, cold, dazzle, petrification; bb/Resistance/bb electricity 10, fire 10; bb/SR/bb 18',// Defensive Abilities
		'',// Weaknesses
		'30 ft., fly 30 ft. (average)',// Speed
		[
			[
				'type' => 'Melee',
				'list' => [
					[
						'name' => 'sword',
						'mod' => 3,
						'stat' => 'str',
						'damage' => '2d6+18 plus holy blade',
						'iterative' => 0
					]
				]
			]
		],// Attacks
		5,// Reach
		'',// Special Attacks
		[
			'level' => 15,
			'conc' => 0,
			'spells' => [
				[
					'perday' => 'at-will',
					'list' => [
							'detect magic',
							'light',
							'read magic',
							'detect fiendish presence' 
						]
				],
				[
					'perday' => 1,
					'list' => [
							'bless',
							'cure light wounds',
							'cure moderate wounds',
							'lesser restoration',
							'protection from evil'
						]
				]
			]
		],// Spell-like Abilities
		[],// Spell Casting
		false,// Spell Casting Note
		[
			'str' => 25,
			'dex' => 12,
			'con' => 20,
			'int' => 8,
			'wis' => 18,
			'cha' => 18
		],// Stats
		1,// BAB (1=full, 0.75=3/4 or medium, 0.5=half or slow)
		0,//CMB misc bonus and special cases
		0,//CMD misc bonus and special cases
		[
			'ToDo'
		],// Feats
		[
			[
				'skill' => 'Diplomacy',
				'stat' => 'cha',
				'bonus' => 18
			],
			[
				'skill' => 'Fly',
				'stat' => 'dex',
				'bonus' => 18
			],
			[
				'skill' => 'Knowledge (planes)',
				'stat' => 'int',
				'bonus' => 20
			],
			[
				'skill' => 'Knowledge (religion)',
				'stat' => 'int',
				'bonus' => 18
			],
			[
				'skill' => 'Sense Motive',
				'stat' => 'wis',
				'bonus' => 18
			]
		],// Skills
		'Aztec, Celestial, Common, Idgyptian, Narman, Vandalusian; truespeech',// Languages
		'divine birthright, lightbound crusader',// Special Qualities
		'',// Environment
		'',// Organization
		'NPC gear',// Treasure
		[
			[
				'name' => 'Divine Birthright',
				'type' => 'Sp',
				'desc' => 'Using the mystical glowing runes that cover the skin, Narmen are able to use amounts of magic normally only accessible to trained spellcasters. Choose 3 0-level cleric spells that, these can be cast at-will. Choose 3 1st level spells and 2 2nd level spells from the cleric spell list, these can each be cast once per day. The same spell can be chosen multiple times giving multiple castings of it. Spells with the Evil descriptor can not be chosen. Additionally, Narmen can cast light at-will. A successful DC 20 Spellcraft check or a read magic spell allows you to read the runes and determine which spells are available to that individual.'
			],
			[
				'name' => 'Holy Blade',
				'type' => false,
				'desc' => 'Most narman saints wield ii/+2 bane-evil-outsiders glorious holy rune inscribed gold aliden split-blade sword/iis that are imbued with 8 sparks of lightstone. These blades grant a total bonus to hit of +3 which increases to +6 against outsiders with the evil subtype. The weapon\'s damage is 2d6+3 slashing which increases to 2d6+3+1 1⁄2×(2d6) slashing against evil creatures and 2d6+6+1 1⁄2×(4d6) slashing against outsiders with the evil subtype. Creatures attacked by these swords are also dazzled for one round and are blinded for 1 round on a critical hit. These weapons receive their holy property from their aliden properties in addition to the incorporated sparks which allows it to persist even if the sparks are expended. Expending more than 2 sparks from the weapon removes the glorious property negating the dazzled and blindness effects.'
			],
			[
				'name' => 'Lightbound Crusader',
				'type' => 'Ex',
				'desc' => 'Narman saints gain a +1 insight bonus on attack rolls and to AC against evil outsiders and a +2 racial bonus to identify evil outsiders or items or effects evil outsiders create with Knowledge (planes) or Spellcraft; they can use these skills untrained for this purpose. Narman saints are also innately connected to the power of light allowing them to cast spells with the good descriptor at +1 caster level and spells with the light descriptor at +2 caster level.'
			]
		],// Special Abilities
		$desc='',// Description
		$gear=[
			'Combat Gear' => [
				'ii/+2 bane-evil-outsiders glorious holy rune inscribed gold aliden split-blade sword/ii with 8 sparks of ii/lightstone/ii',
				'ii/+2 radiant righteous rune inscribed gold full plate/ii with 10 sparks of ii/lightstone/ii',
				'ii/+2 rune inscribed gold heavy shield/ii',
				'14 sparks of ii/lightstone/ii' 
			]
		]
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
					'A narman saint\'s alial object takes the form of the short tusk which protrudes from their mouth called an alidens. The alial object can also be commanded to shine from its tip as the spell ii/light/ii. The command word is the command form of the word for "to make brighter" in the owner\'s native language. (Ex. "brighten" in english)',
					'bb/Weapon Properties/bb ii/+1 Bane-Evil-Outsiders Unholy/ii',
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
	require $startDir.'pageEnd.php';
?>