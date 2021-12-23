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
?>
<title>Template</title>
<?php
	monsterBlockAuto(
		'Name',// name
		false,// alt name
		'Description',// lore text
		10,// CR
		false,// MR
		false,// Custom XP
		'',// Race
		[],// Class
		'N',// Alignment
		'Medium',// Size
		'type (subtype)',// Type
		0,// Misc Initiative Mod
		false,// Mythic Initiative
		'darkvision 60 ft.',// Senses
		0,// Misc Perception Mod
		'',// Aura
		[
			'armor' => 4
		],// Misc AC bonuses
		[12,8],// Number of hit dice, Hit dice size, <additional hp bonus>, <hp notes (fast healing/regen/etc)>
		[
			[
				'good' => true,
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
		'',// Defensive Abilities
		'',// Weaknesses
		'30 ft.',// Speed
		[
			[
				'type' => 'Melee',
				'list' => [
					[
						'name' => 'bite',
						'mod' => 0,
						'stat' => 'str',
						'damage' => '1d6+0'
					]
				]
			]
		],// Attacks
		5,// Reach
		'',// Special Attacks
		[
			'level' => 12,
			'conc' => 0,
			'spells' => [
				[
					'perday' => 'constant',
					'list' => [
						'1',
						'2',
						'3'
					]
				],
				[
					'perday' => 'at-will',
					'list' => [
						'1',
						'2',
						'3'
					]
				],
				[
					'perday' => 3,
					'list' => [
						'1',
						'2',
						'3'
					]
				]
			]
		],// Spell-like Abilities
		[
			[
				'class' => 'Arcanist',
				'prep' => true,
				'level' => 12,
				'stat' => 'int',
				'conc' => 0,
				'spells' => [
					0 => [
						'perday' => 'at-will',
						'list' => [
							'1',
							'2',
							'3',
							'4'
						]
					],
					1 => [
						'perday' => 9,
						'list' => [
							'1',
							'2',
							'3',
							'4'
						]
					],
					2 => [
						'perday' => 8,
						'list' => [
							'1',
							'2',
							'3',
							'4'
						]
					],
					3 => [
						'perday' => 8,
						'list' => [
							'1',
							'2',
							'3',
							'4'
						]
					]
				]
			]
		],// Spell Casting
		'',// Spell Casting Note
		[
			'str' => 10,
			'dex' => 10,
			'con' => 10,
			'int' => 10,
			'wis' => 10,
			'cha' => 10
		],// Stats
		1,// BAB (1=full, 0.75=3/4 or medium, 0.5=half or slow)
		0,//CMB misc bonus and special cases
		0,//CMD misc bonus and special cases
		[
			'Feat'
		],// Feats
		[
			[
				'skill' => 'Acrobatics',
				'stat' => 'dex',
				'bonus' => 12
			]
		],// Skills
		[
			'common'
		],// Languages
		'',// Special Qualities
		'any',// Environment
		'any',// Organization
		'NPC gear',// Treasure
		[
			[
				'name' => 'Name',
				'type' => 'Ex',
				'desc' => 'desc'
			]
		],// Special Abilities
		$desc='',// Description
		[
			'Combat Gear' => [
				'ii/ as/potions_mc|Potion of Regeneration| potion of regeneration III /as /ii',
				'ii/ as/potions_mc|Potion of Swiftness| potions of swiftness II /as /ii'
			],
			'Gear' => [
				'ii/ as/enchants_mc|Sharpness| sharpness I /as greataxe/ii',
				'ii/ as/enchants_mc|Protection| protection I /as full plate/ii',
				'ii/ +1 protean cloak /ii (Will)',
				'ii/ aa/ compass|redstone compass /aa /ii (tuned to a ii/ aa/lodestone| netherite lodestone /aa /ii in the mansion)',
				'100 gp mundane equipment',
				'a collection of emeralds worth approximately 400 gp'
			]
		]
	);
	require $startDir.'pageEnd.php';
?>