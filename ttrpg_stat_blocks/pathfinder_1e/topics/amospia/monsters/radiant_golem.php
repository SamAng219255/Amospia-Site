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
		'Radiant Golem',// name
		false,// alt name
		'This massive golem looks like an elegant suit of shining golden armor and is covered in elaborate designs incorporating numerous pieces of religious iconography depicting many important victories by Zovilla\'s armies.',// lore text
		15,// CR
		false,// MR
		false,// Custom XP
		'',// Race
		[],// Class
		'N',// Alignment
		'Large',// Size
		'construct',// Type
		0,// Misc Initiative Mod
		false,// Mythic Initiative
		'darkvision 60 ft., low-light vision, ii/see alignment/ii (all evil), ii/detect demons/ii, ii/detect undead/ii',// Senses
		0,// Misc Perception Mod
		'',// Aura
		[
			'natural' => 25
		],// Misc AC bonuses
		[20,10,30,'; fast healing 10'],// Number of hit dice, Hit dice size, <additional hp bonus>, <hp notes (fast healing/regen/etc)>
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
		'bb/DR/bb 10/adamantine and evil; bb/Hardness/bb 25; bb/Resist/bb acid 10, cold 10, electricity 10; bb/Immune/bb construct traits, magic',// Defensive Abilities
		'',// Weaknesses
		'20 ft.',// Speed
		[
			[
				'type' => 'Melee',
				'list' => [
					[
						'name' => '+5 Warhammer',
						'mod' => 5,
						'stat' => 'str',
						'damage' => '20d6+15/x3 plus 2d6 damage vs evil creatures and good'
					]
				]
			]
		],// Attacks
		10,// Reach
		'',// Special Attacks
		[
			'level' => 20,
			'conc' => 0,
			'spells' => [
				[
					'perday' => 'constant',
					'list' => [
						[
							'name' => 'compel hostility',
							'level' => 1,
							'dc' => true
						],
						'detect demons',
						'detect undead',
						[
							'name' => 'see alignment',
							'note' => 'all evil'
						]
					]
				],
				[
					'perday' => 'at-will',
					'list' => [
						'sanctify corpse',
						[
							'name' => 'knight\'s calling',
							'level' => 1,
							'dc' => true
						]
					]
				],
				[
					'perday' => 3,
					'list' => [
						[
							'name' => 'discern lies',
							'level' => 4,
							'dc' => true
						],
						'prayer'
					]
				],
				[
					'perday' => 1,
					'list' => [
						[
							'name' => 'chains of light',
							'level' => 6,
							'dc' => true
						],
						[
							'name' => 'restoration',
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
			'str' => 25,
			'dex' => 6,
			'con' => 'non',
			'int' => 'non',
			'wis' => 16,
			'cha' => 32
		],// Stats
		1,// BAB (1=full, 0.75=3/4 or medium, 0.5=half or slow)
		0,//CMB misc bonus and special cases
		0,//CMD misc bonus and special cases
		[],// Feats
		[],// Skills
		[],// Languages
		'',// Special Qualities
		'any',// Environment
		'solitary, pair, escort (3–4), or squad (5–16)',// Organization
		'none (Large +5 Holy Arkonite Warhammer)',// Treasure
		[],// Special Abilities
		$desc=''// Description
	);
	require $startDir.'pageEnd.php';
?>