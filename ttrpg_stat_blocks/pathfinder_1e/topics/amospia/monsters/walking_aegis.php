<?php 
	$startDir='';
	for($i=0; $i<5; $i++) {
		if(file_exists($startDir.'pageStart.php')) {
			require $startDir.'pageStart.php';
			break;
		}
		else {
			$startDir='../'.$startDir;
		}
	}
	monsterBlockAuto(
		'Golem, Walking Aegis',// name
		'Walking Aegis',// alt name
		'Description goes here.',// lore text
		20,// CR
		false,// MR
		false,// Custom XP
		'',// Race
		[],// Class
		'N',// Alignment
		'Large',// Size
		'construct',// Type
		4,// Misc Initiative Mod
		false,// Mythic Initiative
		'darkvision 60 ft., low-light vision',// Senses
		0,// Misc Perception Mod
		'shared defenses 60 ft., shield ally 30 ft.',// Aura
		[
			'natural' => 33,
			'shield' => 15,
			'dodge' => 1
		],// Misc AC bonuses
		[32,10,210,'; fast healing 10'],// Number of hit dice, Hit dice size, <additional hp bonus>, <hp notes (fast healing/regen/etc)>
		[
			[
				'good' => false,
				'mod' => 0
			],
			[
				'good' => false,
				'mod' => 0
			],
			[
				'good' => false,
				'mod' => 0
			]
		],// Fortitude/Reflex/Will save good/bad and misc bonuses
		'indestructible, heavy fortification (75%); bb/DR/bb 30/epic and adamantine; bb/Hardness/bb 28; bb/Immune/bb construct traits, magic; bb/Resist/bb acid 30, cold 30, electricity 30, fire 30',// Defensive Abilities
		'',// Weaknesses
		'20 ft.',// Speed
		[
			[
				'type' => 'Melee',
				'list' => [
					[
						'name' => 'slam',
						'mod' => -9,
						'stat' => 'str',
						'damage' => '1d8+45'
					],
					[
						'name' => 'shield bash',
						'mod' => -9,
						'stat' => 'str',
						'damage' => '1d10+15'
					]
				]
			]
		],// Attacks
		10,// Reach
		'',// Special Attacks
		[
			'level' => 32,
			'conc' => 0,
			'spells' => [
				[
					'perday' => 'constant',
					'list' => [
						[
							'name' => 'compel hostility',
							'level' => 9,
							'dcMod' => 2,
							'dc' => true,
							'note' => 'Heightened to 9th'
						]
					]
				],
				[
					'perday' => 'at-will',
					'list' => [
						'pettep\'s raise stone'
					]
				],
				[
					'perday' => 3,
					'list' => [
						'shield',
						[
							'name' => 'shield other',
							'level' => 2,
							'dc' => true
						]
					]
				],
				[
					'perday' => 1,
					'list' => [
						[
							'name' => 'prismatic wall',
							'level' => 8,
							'dc' => true
						],
						[
							'name' => 'spell immunity',
							'level' => 4,
							'dc' => true
						]
					]
				]
			]
		],// Spell-like Abilities
		[],// Spell Casting
		'',// Spell Casting Note
		[
			'str' => 34,
			'dex' => 14,
			'con' => 'non',
			'int' => 15,
			'wis' => 25,
			'cha' => 10
		],// Stats
		1,// BAB (1=full, 0.75=3/4 or medium, 0.5=half or slow)
		0,//CMB misc bonus and special cases
		0,//CMD misc bonus and special cases
		[
			'Antagonize',
			'Bodyguard',
			'Combat Reflexes',
			'Covering Defense',
			'Dodge',
			'Improved Initiative',
			'Improved Shield Bash',
			'In Harm’s Way',
			'Missile Shield',
			'Saving Shield',
			'Shield Focus',
			'Stand Still',
			'Spell Focus (enchantment)',
			'Greater Spell Focus (enchantment)',
			'Saving Aegis',
			''
		],// Feats
		[
			[
				'skill' => 'Climb',
				'stat' => 'str',
				'bonus' => 8
			],
			[
				'skill' => 'Intimidate',
				'stat' => 'cha',
				'bonus' => 32
			],
			[
				'skill' => 'Knowledge (local)',
				'stat' => 'int',
				'bonus' => 8
			],
			[
				'skill' => 'Knowledge (planes)',
				'stat' => 'int',
				'bonus' => 8
			],
			[
				'skill' => 'Knowledge (religion) ',
				'stat' => 'int',
				'bonus' => 8
			],
			[
				'skill' => 'Perception',
				'stat' => 'wis',
				'bonus' => 32
			],
			[
				'skill' => 'Sense Motive',
				'stat' => 'wis',
				'bonus' => 32
			]
		],// Skills
		[
			'Abyssal',
			'Aklo',
			'Celestial',
			'Common',
			'Dwarven',
			'Elf',
			'Infernal',
			'Narman',
			'Sylvan' 
		],// Languages
		'',// Special Qualities
		'any',// Environment
		'solitary, army (4-40)',// Organization
		'none (Large +10 Heavy Fortification Dark Prismarine Tower Shield)',// Treasure
		[
			[
				'name' => 'Immunity to Magic',
				'type' => 'Ex',
				'desc' => 'A walking aegis is immune to any spell or spell-like ability that allows spell resistance, except as noted below.
					• A ii/transmute rock to mud/ii spell slows a walking aegis (as the slow spell) for 2d6 rounds, with no saving throw, while ii/transmute mud to rock/ii heals all of its lost hit points.
					• A ii/stone to flesh/ii spell does not actually change the golem’s structure but negates its damage reduction, hardness, energy resistance, and immunity to magic for 1 full round.'
			],
			[
				'name' => 'Indestructible',
				'type' => 'Ex',
				'desc' => 'A walking aegis is nearly impossible to destroy. Even if reduced below 0 hit points, its fast healing continues to restore hit points, though the golem is helpless unless above 0 hit points. It can only be permanently destroyed if reduced to negative hit points and then decapitated using an adamantite vorpal weapon—alternatively, miracle or wish can be used to slay it while it is at negative hit points.'
			],
			[
				'name' => 'Last Shield',
				'type' => 'Su',
				'desc' => 'If the walking aegis is destroyed, all allies within 60 feet receive a +40 untyped bonus to their ac for 1d4+1 rounds and 100 temporary hit points which last until the next time the ally rests.'
			],
			[
				'name' => 'Saving Aegis',
				'type' => 'Unique Feat',
				'desc' => 'A walking aegis can use Saving Shield without spending an action a number of times per round equal to its Dexterity modifier and, when using Saving Shield, it can add its entire shield bonus to their ally\'s AC.'
			],
			[
				'name' => 'Shared Defenses',
				'type' => 'Su',
				'desc' => 'If any allied creature within 60 feet has an armor bonus higher than the armor bonus of the walking aegis, the golem\'s armor bonus increases to match. Additionally, all allies within 60 feet with an armor bonus of less than the walking aegis\' armor bonus gain the bonus of the walking aegis instead of their own as long as they remain within 60 feet of the golem. This effectively grants all subjects within 60 feet the highest armor bonus of the group. Add natural armor to armor before applying this ability.'
			],
			[
				'name' => 'Shield Ally',
				'type' => 'Su',
				'desc' => 'If any ally within 30 feet would take damage sufficient to kill them or to drop them below 1 hit point, the walking aegis takes half of the damage rounded down that would be dealt instead of the target before resistance, immunities, damage reduction, or hardness is applied. This damage is subject to the resistance, immunities, damage reduction, and hardness of the walking aegis. If multiple walking aegises are within 30 feet of such a target, the damage is evenly divided among the golems and target.'
			],
			[
				'name' => 'Wall of Force',
				'type' => 'Su',
				'desc' => 'A walking aegis can create a 40 ft tall and 100 ft wide wall of force as a standard action similar to the spell ii/wall of force/ii except that the effect has no duration and lasts until it is destroyed, dismissed, or the golem dies or is dropped below 0 hit points. Additionally the wall must pass through the golem and the golem can not leave or be moved from its position as long as the wall remains in effect. The wall has hardness 30 and 400 hit points.'
			]
		],// Special Abilities
		$desc=''// Description
	);
	require $startDir.'pageEnd.php';
?>