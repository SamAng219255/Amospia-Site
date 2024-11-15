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
		'Kundrak',// name
		'Lapis Lazuli Dragon',// alt name
		'This monstrous three headed dragon stands over 50 feet tall, its ultramarine scales shine with veins of gold and an almost invisible blue-white field shimmers around it forming thousands of semi-real plates arrayed into a set of armor. Atop each of its heads sits hundreds of horns most of which shine gold and are arrayed into a crown.',// lore text
		'?? (30+)',// CR
		10,// MR
		13107200,// Custom XP
		'',// Race
		[],// Class
		'NG',// Alignment
		'Colossal',// Size
		'dragon (mythic, shapechanger)',// Type
		4,// Misc Initiative Mod
		true,
		'ii/greater arcane sight/ii, ii/detect scrying/ii, dragon senses, perpetual vigilance, ii/true seeing/ii',// Senses
		45,// Misc Perception Mod
		'frightful presence (360 ft., DC 45)',// Aura
		[
			'armor' => 15,
			'deflection' => 5,
			'natural' => 37+10
		],// Misc AC bonuses
		[42,12,10*10,"; fast healing 30"],// Number of hit dice, Hit dice size, <additional hp bonus>, <hp notes (fast healing/regen/etc)>
		[
			[
				'good' => true,
				'mod' => 5
			],
			[
				'good' => true,
				'mod' => 5
			],
			[
				'good' => true,
				'mod' => 5
			]
		],// Fortitude/Reflex/Will save good/bad and misc bonuses
		'arcane barrier, ii/freedom of movement/ii, pure destiny; bb/DR/bb 30/epic; bb/Immune/bb sleep, paralysis, negative energy effects including negative levels and ability drain, mind affecting effects, cold iron, magic',// Defensive Abilities
		'',// Weaknesses
		'90 ft., climb 60 ft., fly 300 ft. (perfect), swim 30ft.',// Speed
		[
			[
				'type' => 'Melee',
				'list' => [
					[
						'name' => '3 bites',
						'mod' => 5,
						'stat' => 'str',
						'damage' => '4d8+36/19-20 plus arcane weapons'
					],
					[
						'name' => '2 claws',
						'mod' => 5,
						'stat' => 'str',
						'damage' => '4d6+26/19-20 plus arcane weapons'
					],
					[
						'name' => 'tail slap',
						'mod' => 5,
						'stat' => 'str',
						'damage' => '4d6+36/19-20 plus arcane weapons'
					],
					[
						'name' => '2 wings',
						'mod' => 5,
						'stat' => 'str',
						'damage' => '2d8+15/19-20 plus arcane weapons'
					]
				]
			]
		],// Attacks
		30,// Reach
		'breath weapon (3x 140-ft. lines or 70-ft. cones, 24d8 half-force/half-divine damage, DC 46), crush (large, 4d8+31, DC 46), mythic power (12/day, surge +1d12), tail sweep (medium, 2d8+36, DC 46), spellstrike',// Special Attacks
		[
			'level' => 42,
			'conc' => 0,
			'spells' => [
				[
					'perday' => 'constant',
					'list' => [
						'greater arcane sight',
						'detect scrying',
						'prestidigitation',
						'read magic',
						'true seeing'
					]
				],
				[
					'perday' => 'at-will',
					'list' => [
						'dimension doorss/M/ss',
						'gate',
						'greater invisibility',
						'scales of deflection'
					]
				],
				[
					'perday' => 3,
					'list' => [
						'permanency',
						'true resurrection',
						'wish'
					]
				]
			]
		],// Spell-like Abilities
		[
			[
				'class' => 'Arcanist',
				'prep' => true,
				'level' => 42,
				'stat' => 'int',
				'conc' => 0,
				'spells' => [
					0 => [
						'perday' => 'at-will',
						'list' => [
							'acid splash',
							'arcane mark',
							'dancing lights',
							'jolt',
							'light',
							'mage hand',
							'mending',
							'ray of frost',
							'spark'
						]
					],
					1 => [
						'perday' => 9,
						'list' => [
							'feather fallss/Y/ss',
							'magic missiless/M/ss',
							'protection from evilss/Y/ss',
							'shocking graspss/M/ss',
							'true strikess/M/ss'
						]
					],
					2 => [
						'perday' => 8,
						'list' => [
							'frigid touch',
							[
								'name' => 'glitterdust',
								'dc' => true
							],
							'mirror imagess/Y/ss',
							'resist energyss/M/ss',
							'see invisibility'
						]
					],
					3 => [
						'perday' => 8,
						'list' => [
							[
								'name' => 'fireballss/M/ss',
								'dc' => true
							],
							'hastess/Y/ss',
							'magic circle against evil',
							'protection from energy',
							'stolen light'
						]
					],
					4 => [
						'perday' => 8,
						'list' => [
							'dimensional anchor',
							'dream shield',
							'remove curse',
							[
								'name' => 'scrying',
								'dc' => true
							],
							'stone shapess/Y/ss'
						]
					],
					5 => [
						'perday' => 8,
						'list' => [
							[
								'name' => 'cloudkillss/Y/ss',
								'dc' => true
							],
							[
								'name' => 'icy prison',
								'dc' => true
							],
							'sendingss/Y/ss',
							'wall of forcess/M/ss',
							'wall of stoness/Y/ss'
						]
					],
					6 => [
						'perday' => 7,
						'list' => [
							[
								'name' => 'chain lightningss/M/ss',
								'dc' => true
							],
							[

								'name' => 'chains of light',
								'dc' => true
							],
							[
								'name' => 'disintegratess/M/ss',
								'dc' => true
							],
							'greater dispel magicss/Y/ss',
							'geas'
						]
					],
					7 => [
						'perday' => 7,
						'list' => [
							'control weatherss/Y/ss',
							'deflection',
							[
								'name' => 'finger of deathss/M/ss',
								'dc' => true
							],
							[
								'name' => 'polymorph any object',
								'dc' => true
							],
							'greater teleport'
						]
					],
					8 => [
						'perday' => 7,
						'list' => [
							'dimensional lockss/Y/ss',
							'mazess/Y/ss',
							'mind blank',
							'moment of prescience',
							'prismatic wall'
						]
					],
					9 => [
						'perday' => 7,
						'list' => [
							'interplanetary teleport',
							[
								'name' => 'mass icy prison',
								'dc' => true
							],
							'mage\'s disjunctionss/Y/ss',
							[
								'name' => 'meteor swarmss/M/ss',
								'dc' => true
							],
							'time stopss/Y/ss'
						]
					]
				]
			]
		],// Spell Casting
		'M Mythic Spell; Y Has a mythic version',// Spell Casting Note
		[
			'str' => 55,
			'dex' => 23,
			'con' => 41,
			'int' => 50,
			'wis' => 39,
			'cha' => 39
		],// Stats
		1,// BAB (1=full, 0.75=3/4 or medium, 0.5=half or slow)
		0,//CMB misc bonus and special cases
		[
			'trip' => 4
		],//CMD misc bonus and special cases
		[
			'Ascendant Spell',
			'Brew Potion',
			'Combat Casting',
			'Craft Magic Arms and Armor',
			'Craft Wondrous Item',
			'Dimensional Agility',
			'Dimensional Assault',
			'Dimensional Dervish',
			'Elemental Spell',
			'Empower Spell',
			'Eschew Materials',
			'Extra Mythic Powerss/M/ss',
			'Extra Path Abilityss/M/ss',
			'Forge Ring',
			'Hover',
			'Improved Initiativess/M/ss',
			'Intensified Spell',
			'Maximize Spell',
			'Multiattack',
			'Mythic Crafterss/M/ss',
			'Piercing Spell',
			'Quicken Spell',
			'Vital Strikess/M/ss',
			'Widen Spell'
		],// Feats
		[
			[
				'skill' => 'Acrobatics',
				'stat' => 'dex',
				'bonus' => 42
			],
			[
				'skill' => 'Appraise',
				'stat' => 'int',
				'bonus' => 45
			],
			[
				'skill' => 'Climb',
				'stat' => 'str',
				'bonus' => 45
			],
			[
				'skill' => 'Craft (Alchemy)',
				'stat' => 'int',
				'bonus' => 45
			],
			[
				'skill' => 'Craft (Armor)',
				'stat' => 'int',
				'bonus' => 45
			],
			[
				'skill' => 'Craft (Bows)',
				'stat' => 'int',
				'bonus' => 45
			],
			[
				'skill' => 'Craft (Weapons)',
				'stat' => 'int',
				'bonus' => 45
			],
			[
				'skill' => 'Diplomacy',
				'stat' => 'cha',
				'bonus' => 45
			],
			[
				'skill' => 'Disguise',
				'stat' => 'cha',
				'bonus' => 42
			],
			[
				'skill' => 'Fly',
				'stat' => 'dex',
				'bonus' => 45
			],
			[
				'skill' => 'Knowledge (Arcana)',
				'stat' => 'int',
				'bonus' => 45
			],
			[
				'skill' => 'Knowledge (Dungeoneering)',
				'stat' => 'int',
				'bonus' => 45
			],
			[
				'skill' => 'Knowledge (History)',
				'stat' => 'int',
				'bonus' => 45
			],
			[
				'skill' => 'Knowledge (Nature)',
				'stat' => 'int',
				'bonus' => 45
			],
			[
				'skill' => 'Knowledge (Planes)',
				'stat' => 'int',
				'bonus' => 45
			],
			[
				'skill' => 'Knowledge (Religion)',
				'stat' => 'int',
				'bonus' => 45
			],
			[
				'skill' => 'Linguistics',
				'stat' => 'int',
				'bonus' => 45
			],
			[
				'skill' => 'Sense Motive',
				'stat' => 'wis',
				'bonus' => 45
			],
			[
				'skill' => 'Spellcraft',
				'stat' => 'int',
				'bonus' => 45
			],
			[
				'skill' => 'Survival',
				'stat' => 'wis',
				'bonus' => 45
			],
			[
				'skill' => 'Swim',
				'stat' => 'str',
				'bonus' => 45
			],
			[
				'skill' => 'Use Magic Device',
				'stat' => 'cha',
				'bonus' => 45
			]
		],// Skills
		[
			'aboleth, abyssal, aklo, aquan, auran, azlanti, celestial, common, cyclops, draconic, dwarven, elven, ignan, infernal, osirion, pre-creation, protean, serpent, sphinx, sylvan, terran, thassilonian; tongues'
		],// Languages
		'arcane well, arcanist exploits, change shape, magus arcana, metamagic perfection, selective disjunction, spell combat, spell recall',// Special Qualities
		'Deep Space (Hall of Stars)',// Environment
		'solitary',// Organization
		'triple (+5 keen ghost-touch holy greatsword / ii/luck blade/ii with 7 ii/wishes/ii, +5 endless ammunition ghost-touch holy ii/starbow/ii, ii/band of lazuli and iron/ii (+5), ii/book of endless pages/ii with all arcane spells)',// Treasure
		[
			[
				'name' => 'Arcane Barrier',
				'type' => 'Sp',
				'desc' => 'Kundrak is surrounded in a protective barrier of force that grants protection as though wearing +6 heavy fortification full plate without conferring any penalties. This effect also negates ii/magic missile/ii and similar effects aimed at Kundrak as well as saving Kundrak from the whims of pure poor luck. Natural 20 attack rolls against Kundrak are not treated as guranteed hits unless the attacking creature misses by 5 or less and natural 1 rolls on saves are not treated as automatic fails unless he beat the DC by 5 or less. If Kundrak is subject to an effect that would instantly kill him, either directly, such as ii/power word kill/ii or a coup de grace, or indirectly, such as a vorpal weapon, Kundrak may make a fortitude save equal to 5 plus 1 for every 12 points of damage he has taken. If he succeeds the save he is unaffected. If he fails he suffers 10 points of constitution damage.'
			],
			[
				'name' => 'Arcane Weapons',
				'type' => 'Ex',
				'desc' => 'All of Kundrak\'s natural weapons are treated as cold iron and adamantine and as though they were enchanted with a +5 weapon enhancement bonus and the keen, ghost-touch, and holy weapon qualities. All attacks with his natural weapons ignore the first 30 points of hardness instead of ignoring hardness under 20. Kundrak can also add 1d6 points of acid, cold, electricity, fore, or sonic damage to attacks These effects apply to all attacks made with his natural weapons, including his tail sweep but not his breath weapon or crush attack.'
			],
			[
				'name' => 'Arcane Well',
				'type' => 'Su',
				'desc' => 'Kundrak has an innate well of energy that functions similar to an arcanist\'s arcane reservoir and a magus\'s arcane pool. This well has a number of points equal to his number of hit dice plus his intelligence modifier, normally 62. Kundrak can expend 1 point from this well as a swift action to grant any combination of an enhancement bonus and weapon properties to a held weapon or natural weapon for 1 hour so long as the resulting weapon has at least a +1 enhancement bonus and the total equivalent bonus is less than or equal to +10. Kundrak can also spend 1 point from this well as a free action while casting a spell to increase the caster level by 2 or the DC by 5.'
			],
			[
				'name' => 'Arcanist Exploits',
				'type' => 'Ex',
				'desc' => 'Kundrak has access to the following arcanist exploits using his intelligence modifier in place of his charisma modifier: burning flame, counterspell, greater counterspell, energy shield, flame arc, quick study, redirect spell, spell tinkerer, spell thief, weather sage, and wild stride. The DC for these exploits is equal to 10 + 1/2 Kundrak\'s hit dice + his intelligence modifier, usually 66.'
			],
			[
				'name' => 'Change Shape',
				'type' => 'Su',
				'desc' => 'Kundrak can assume the appearance of a specific single human form of the same sex. Kundrak always takes this specific form when he uses this ability. When Kundrak is in his human form, he cannot use his natural weapons or special attacks except spellstrike, but gains a +10 racial bonus on Disguise checks made to appear human. This ability otherwise functions as alter self, except that Kundrak does not adjust his ability scores, and the effect lasts until he returns to his true form as a standard action. When he returns to his true form any equipment held or worn merges into his form as a polymorph effect. While changing form is a supernatural ability, if he is in a region of antimagic or a similar effect, he does not return to his true form. Assume he is holding a +5 keen ghost-touch holy greatsword with the properties of a ii/luck blade/ii with 7 ii/wishes/ii and carrying on his person a +5 endless ammunition ghost-touch holy ii/starbow/ii in his human form. Kundrak is proficient in these weapons.'
			],
			[
				'name' => 'Immunity to Magic',
				'type' => 'Ex',
				'desc' => 'Kundrak is immune to any spell or spell-like ability that allows spell resistance. Kundrak is aware of every spell or spell-like ability that would be negated by this effect and can choose to allow it to bypass his immunity.'
			],
			[
				'name' => 'Magus Arcana',
				'type' => 'Ex',
				'desc' => 'Kundrak has access to the following magus arcana: close range, disruptive, hasted assault, intuitive protection, lingering pain, reach spell, reflection.'
			],
			[
				'name' => 'Metamagic Perfection',
				'type' => 'Ex',
				'desc' => 'Kundrak is able to apply up to any three metamagic feats he knows to a spell without increasing the spell level or the casting time.'
			],
			[
				'name' => 'Mythic Path Abilities',
				'type' => 'Ex',
				'desc' => 'Kundrak has the following mythic path abilities: 2x component freedom, divine source (good, magic (arcane, rites), scalykind (dragon), travel (portal)), maximized critical, mythic craft, mythic sustenance, pure destiny, sanctum'
			],
			[
				'name' => 'Perpetual Vigilance',
				'type' => 'Ex',
				'desc' => 'Between his three heads and eons of training, Kundrak cannot be caught off guard. Kundrak is never treated as being flat-footed and cannot be flanked.'
			],
			[
				'name' => 'Selective Disjunction',
				'type' => 'Ex',
				'desc' => 'As a standard action, Kundrak can name up to 16 magic effects, such as a spell or supernatural ability, or sources of magic, such as casters or magic items. These effects or all effects produced by these sources are negated within 30 feet of Kundrak as by ii/aroden\'s spellbane/ii except it is able to negate effects from artifacts and deities.'
			],
			[
				'name' => 'Spell Combat',
				'type' => 'Ex',
				'desc' => 'Kundrak has learned to cast spells and wield his weapons at the same time. This functions much like two-weapon fighting, but the off-hand weapon is a spell that is being cast. To use this ability, Kundrak must have one hand free (even if the spell being cast does not have somatic components), while wielding a light or one-handed melee weapon in the other hand or while having access to his natural attacks. As a full-round action, he can make all of his attacks with his weapon at a –2 penalty and can also cast any spell with a casting time of 1 standard action (any attack roll made as part of this spell also takes this penalty). This spell is always cast defensively and Kundrak automatically succeeds at the check. Kundrak can choose to cast the spell first or make the weapon attacks first, but if he has more than one attack, he cannot cast the spell between weapon attacks.'
			],
			[
				'name' => 'Spell Recall',
				'type' => 'Su',
				'desc' => 'With a swift action Kundrak can recall any single spell that he has already prepared and cast that day by expending a number of points from his arcane well equal to 1/2 the spell\'s level (minimum 1). The spell is prepared again, just as if it had not been cast. Furthermore, instead of recalling a used spell, as a swift action Kundrak can prepare a spell of the same level that he has in his spellbook. He does so by expending a number of points from his arcane well equal to the spell\'s level (minimum 1). Kundrak cannot apply metamagic feats that increase the spell\'s level to a spell prepared in this way. Kundrak does not need to reference his spellbook to prepare a spell in this way.'
			],
			[
				'name' => 'Spellstrike',
				'type' => 'Su',
				'desc' => 'Whenever Kundrak casts a spell with a range of “touch”, he can deliver the spell through any weapon he is wielding or one of his natural weapons as part of a melee attack. Instead of the free melee touch attack normally allowed to deliver the spell, Kundrak can make one free melee attack with his weapon (at his highest base attack bonus) as part of casting this spell. If successful, this melee attack deals its normal damage as well as the effects of the spell. If Kundrak makes this attack in concert with spell combat, this melee attack takes all the penalties accrued by spell combat melee attacks. This attack uses the weapon\'s critical range (20, 19–20, or 18–20 and modified by the keen weapon property or similar effects), but the spell effect only deals ×2 damage on a successful critical hit, while the weapon damage uses its own critical modifier.'
			]
		],// Special Abilities
		$desc=''// Description
	);
	require $startDir.'pageEnd.php';
?>