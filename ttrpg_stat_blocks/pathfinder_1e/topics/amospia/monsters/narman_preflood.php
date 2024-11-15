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
		'Pre-Flood Narmen',// name
		false,// alt name
		'Before you stands a tall, regal figure radiating strength and grace, their fair skin is adorned with glowing runes that shimmer sporadically in vibrant hues. Their prismatic hair flows with pastel tones, shifting and sparkling with each movement.',// lore text
		18,// CR
		0,// MR
		false,// Custom XP (CR 18)
		'pre-flood narman',// Race
		[
			'Paladin' => 16
		],// Classes
		[
			'alignment' => 'LG',
			'altruism' => 1,
			'humility' => -1,
			'purity' => 2,
			'honesty' => 1,
			'loyalty' => 1,
			'law' => 1,
			'individualism' => -1,
			'knowledge' => 0,
			'work' => 0
		],// Alignment
		'Medium',// Size
		'humanoid (narman)',// Type
		0,// Misc Initiative Mod
		false,// Mythic Initiative
		'low-light vision, darkvision 120 ft., blindsense 30 ft., detect evil',// Senses
		0,// Misc Perception Mod
		'paladin auras (10 ft.)',// Aura
		[
			'armor' => 16
		],// Misc AC bonuses
		[16,10,0,'; fast healing 10'],// Number of hit dice, Hit dice size, <additional hp bonus>, <hp notes (fast healing/regen/etc)>
		[
			[
				'good' => true,
				'mod' => 11
			],
			[
				'good' => false,
				'mod' => 11
			],
			[
				'good' => true,
				'mod' => 11
			]
		],// Fortitude/Reflex/Will save good/bad and misc bonuses
		'fortification (87%); bb/DR/bb 10/epic and evil; bb/Immune/bb blindness, charm, dazzle, disease, fear, petrification; bb/Resistance/bb acid 10, cold 10, electricity 10; bb/SR/bb 29',// Defensive Abilities
		'',// Weaknesses
		'40 ft., fly 60 ft. (good)',// Speed
		[
			[
				'type' => 'Melee',
				'list' => [
					[
						'name' => 'Sword',
						'mod' => +3,
						'stat' => 'str',
						'damage' => '2d6+7 plus holy blade'
					]
				]
			]
		],// Attacks
		5,// Reach
		'',// Special Attacks
		[
			'level' => 16,
			'conc' => 27,
			'spells' => [
				[
					'perday' => 'at-will',
					'list' => [
						'detect evil',
						'detect magic',
						'light',
						'purify food and drink',
						'read magic'
					]
				],
				[
					'perday' => 1,
					'list' => [
						'bless',
						'cure light wounds',
						'cure moderate wounds',
						'ironskin',
						'lesser restoration',
						'planar adaptation',
						'prayer',
						[
							'name' => 'protection from evil',
							'dc' => true,
							'level' => 1
						],
						'recharge innate magic',
						'searing ray'
					]
				]
			]
		],// Spell-like Abilities
		[
			[
				'class' => 'Paladin',
				'prep' => true,
				'level' => 13,
				'stat' => 'cha',
				'conc' => 24,
				'spells' => [
					4 => [
						'list' => [
							'greater angelic aspect'
						]
					],
					3 => [
						'list' => [
							[
								'name' => 'archon\'s aura',
								'dc' => true
							],
							[
								'name' => 'damnation',
								'dc' => true
							]
						]
					],
					2 => [
						'list' => [
							'effortless armor',
							[
								'name' => 'litany of righteousness',
								'dc' => true
							],
							[
								'name' => 'righteous condemnation',
								'dc' => true
							]
						]
					],
					1 => [
						'list' => [
							[
								'name' => 'challenge evil',
								'dc' => true
							],
							'liberating command',
							[
								'name' => 'veil of heaven',
								'dc' => true
							]
						]
					]
				]
			]
		],// Spell Casting
		'',// Spell Casting Note
		[
			'str' => 40,
			'dex' => 26,
			'con' => 34,
			'int' => 28,
			'wis' => 30,
			'cha' => 32
		],// Stats
		1,// BAB (1=full, 0.75=3/4 or medium, 0.5=half or slow)
		0,// CMB misc bonus and special cases
		0,// CMD misc bonus and special cases
		[
			'Ascendant Spellss/B/ss',
			'Power Attack',
			'Toughness',
			'+6 more'
		],// Feats
		[
			[
				'skill' => 'Craft (any one)',
				'stat' => 'wis',
				'bonus' => 19
			],
			[
				'skill' => 'Diplomacy',
				'stat' => 'cha',
				'bonus' => 19
			],
			[
				'skill' => 'Fly',
				'stat' => 'dex',
				'bonus' => 23
			],
			[
				'skill' => 'Heal',
				'stat' => 'wis',
				'bonus' => 19
			],
			[
				'skill' => 'Knowledge (dungeoneering)',
				'stat' => 'int',
				'bonus' => 16
			],
			[
				'skill' => 'Knowledge (planes)',
				'stat' => 'int',
				'bonus' => 18
			],
			[
				'skill' => 'Knowledge (religion)',
				'stat' => 'int',
				'bonus' => 19
			],
			[
				'skill' => 'Perception',
				'stat' => 'wis',
				'bonus' => 16
			],
			[
				'skill' => 'Ride',
				'stat' => 'dex',
				'bonus' => 19
			],
			[
				'skill' => 'Sense Motive',
				'stat' => 'wis',
				'bonus' => 19
			],
			[
				'skill' => 'Spellcraft',
				'stat' => 'int',
				'bonus' => 19
			]
		],// Skills
		[
			'Aboleth, Abyssal, Andina, Celestial, Infernal, Knom'
		],// Languages
		'Divine Birthright, Lightbound Crusader',// Special Qualities
		'Any',// Environment
		'solitary',// Organization
		'NPC Gear',// Treasure
		[
			[
				'name' => 'Channel Positive Energy',
				'type' => 'Su',
				'desc' => 'The paladin has the supernatural ability to channel positive energy like a cleric. Using this ability consumes two uses of their lay on hands ability. The paladin uses their level as their effective cleric level when channeling positive energy. This is a Charisma-based ability.'
			],
			[
				'name' => 'Detect Evil',
				'type' => 'Sp',
				'desc' => 'At will, a paladin can use ii/detect evil/ii, as the spell. A paladin can, as a move action, concentrate on a single item or individual within 60 feet and determine if it is evil, learning the strength of its aura as if having studied it for 3 rounds. While focusing on one individual or object, the paladin does not detect evil in any other object or individual within range.'
			],
			[
				'name' => 'Divine Birthright',
				'type' => 'Su',
				'desc' => 'Using the mystical glowing runes that cover the skin, Narmen are able to use amounts of magic normally only accessible to trained spellcasters. Choose 3 0-level cleric spells, these can be cast at-will. Choose 4 1st level spells, 3 2nd level spells, 2 3rd level spells, and 1 4th level spell from the cleric spell list, these can each be cast once per day. The same spell can be chosen multiple times giving multiple castings of it. Spells with the Evil descriptor can not be chosen. Additionally, Narmen can cast ii/light/ii at-will. A successful DC 20 Spellcraft check or a ii/read magic/ii spell allows you to read the runes and determine which spells are available to that individual.'
			],
			[
				'name' => 'Divine Bond',
				'type' => 'Sp',
				'desc' => [
					'The paladin possesses a divine bond that allows the paladin to enhance their weapon as a standard action by calling upon the aid of a celestial spirit for 1 minute per paladin level (16 minutes). When called, the spirit causes the weapon to shed light as a torch. This spirit grants the weapon a +4 enhancement bonus. These bonuses can be added to the weapon, stacking with existing weapon bonuses to a maximum of +5, or they can be used to add any of the following weapon properties: axiomatic, brilliant energy, defending, disruption, flaming, flaming burst, holy, keen, merciful, and speed. Adding these properties consumes an amount of bonus equal to the property\'s cost. These bonuses are added to any properties the weapon already has, but duplicate abilities do not stack. The bonus and properties granted by the spirit are determined when the spirit is called and cannot be changed until the spirit is called again. The celestial spirit imparts no bonuses if the weapon is held by anyone other than the paladin but resumes giving bonuses if returned to the paladin. These bonuses apply to only one end of a double weapon. The paladin can use this ability three times per day at 5th level.',
					'If a weapon bonded with a celestial spirit is destroyed, the paladin loses the use of this ability for 30 days. During this 30-day period, the paladin takes a -1 penalty on attack and weapon damage rolls.'
				]
			],
			[
				'name' => 'Holy Blade',
				'type' => 'Su',
				'desc' => 'Most narman saints wield ii/+5 bane-evil-outsiders holy igniting rune inscribed gold greatswords/ii. These blades grant a total bonus to hit of +7. The weapon\'s damage is 2d6+7 slashing plus 1½×1d6 fire which increases to 2d6+7+1½×2d6 slashing plus 1½×1d6 fire against evil creatures and 2d6+7+1 1⁄2×4d6 plus 1½×1d6 fire slashing against outsiders with the evil subtype. Additionally, all attacks made by the saint are treated as being good aligned.'
			],
			[
				'name' => 'Lay On Hands',
				'type' => 'Su',
				'desc' => [
					'The paladin can heal wounds (their own or those of others) by touch. Each day they can use this ability a number of times equal to 1/2 her paladin level plus her Charisma modifier (19/day). With one use of this ability, a paladin can heal 1d6 hit points of damage for every two paladin levels she possesses (8d6). Using this ability is a standard action, unless the paladin targets themself, in which case it is a swift action. Despite the name of this ability, a paladin only needs one free hand to use this ability.',
					'Alternatively, the paladin can use this healing power to deal damage to undead creatures, dealing 1d6 points of damage for every two levels the paladin possesses (8d6). Using lay on hands in this way requires a successful melee touch attack and doesn\'t provoke an attack of opportunity. Undead do not receive a saving throw against this damage.'
				]
			],
			[
				'name' => 'Lightbound Crusader',
				'type' => 'Ex',
				'desc' => 'Pre-flood narmen gain a +1 insight bonus on attack rolls and to AC against evil outsiders and a +2 racial bonus to identify evil outsiders or items or effects evil outsiders create with Knowledge (planes) or Spellcraft; they can use these skills untrained for this purpose. Pre-flood narmen are also innately connected to the power of light allowing them to cast spells with the good descriptor at +1 caster level and spells with the light descriptor at +2 caster level.'
			],
			[
				'name' => 'Mercy',
				'type' => 'Su',
				'desc' => 'Targets of the paladin\'s lay on hands ability can immediately attempt a new saving throw to disbelieve any ongoing illusions that they failed to disbelieve within the last minute, any magical effects that are reducing one of the target\'s ability scores (paladin\'s choice) are dispelled, they are healed of 1d4 points of ability damage to a single ability score of the paladin\'s choosing, they are no longer confused, and are subject to ii/remove curse/ii (using the paladin\'s level, 16, as the caster level). A mercy can remove a condition caused by a curse, disease, or poison without curing the affliction. Such conditions return after 1 hour unless the mercy actually removes the affliction that causes the condition.'
			],
			[
				'name' => 'Paladin Auras',
				'type' => 'Su',
				'desc' => [
					'Each ally within 10 feet of the paladin gains a +4 morale bonus on saving throws against fear or charm effects and any attacks against an enemy within this range is treated as good aligned. Additionally, the paladin can expend two uses of their smite evil ability to grant the ability to smite evil to all allies within 10 feet, using the paladin\'s bonuses. Allies must use this smite evil ability by the start of the paladin\'s next turn and the bonuses last for 1 minute. Using this ability is a free action. Evil creatures gain no benefit from this ability.',
					'This ability functions only while the paladin is conscious, not if they are unconscious or dead.'
				]
			],
			[
				'name' => 'Smite Evil',
				'type' => 'Su',
				'desc' => [
					'Six times per day, the paladin can call out to the powers of good to aid them in their struggle against evil. As a swift action, the paladin chooses one target within sight to smite. If this target is evil, the paladin adds their Charisma bonus (+11) to their attack rolls and adds their paladin level (+16) to all damage rolls made against the target of their smite. If the target of smite evil is an outsider with the evil subtype, an evil-aligned dragon, or an undead creature, the bonus to damage on the first successful attack increases to 2 points of damage per level the paladin possesses (+32). Regardless of the target, smite evil attacks automatically bypass any DR the creature might possess.',
					'In addition, while smite evil is in effect, the paladin gains a deflection bonus equal to her Charisma modifier (+11) to her AC against attacks made by the target of the smite. If the paladin targets a creature that is not evil, the smite is wasted with no effect.',
					'The smite evil effect remains until the target of the smite is dead or the next time the paladin rests and regains her uses of this ability.'
				]
			]
		],// Special Abilities
		$desc='',// Description
		$gear=[
			'Combat Gear' => [
				'ii/+5 bane-evil-outsiders holy igniting rune inscribed gold greatsword/ii'
			],
			'Gear' => [
				'ii/+5 heavy fortification rune inscribed gold full plate/ii'
			]
		]
	);
	require $startDir.'pageEnd.php';
?>