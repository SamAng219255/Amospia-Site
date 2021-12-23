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
<title>Zombified Horse</title>
<?php
	monsterBlockAuto(
		'Zombified Horse',// name
		false,// alt name
		'',// lore text
		2,// CR
		false,// MR
		false,// Custom XP
		'',// Race
		[],// Class
		'NE',// Alignment
		'Large',// Size
		'undead',// Type
		0,// Misc Initiative Mod
		false,// Mythic Initiative
		'low-light vision, scent',// Senses
		0,// Misc Perception Mod
		'',// Aura
		[
			'natural' => 5
		],// Misc AC bonuses
		[2,8,3],// Number of hit dice, Hit dice size, <additional hp bonus>, <hp notes (fast healing/regen/etc)>
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
				'good' => true,
				'mod' => 0
			]
		],// Fortitude/Reflex/Will save good/bad and misc bonuses
		'bb/DR/bb 5/slashing; bb/Immune/bb undead traits',// Defensive Abilities
		'',// Weaknesses
		'40 ft.',// Speed
		[
			[
				'type' => 'Melee',
				'list' => [
					[
						'name' => 'bite',
						'mod' => 0,
						'stat' => 'str',
						'damage' => '1d4+6'
					],
					[
						'name' => '2 hooves',
						'mod' => -5,
						'stat' => 'str',
						'damage' => '1d6+3'
					]
				]
			]
		],// Attacks
		5,// Reach
		'',// Special Attacks
		[],// Spell-like Abilities
		[],// Spell Casting
		'',// Spell Casting Note
		[
			'str' => 22,
			'dex' => 16,
			'con' => 'cha',
			'int' => 0,
			'wis' => 17,
			'cha' => 11
		],// Stats
		0.75,// BAB (1=full, 0.75=3/4 or medium, 0.5=half or slow)
		0,//CMB misc bonus and special cases
		[
			'trip' => 4
		],//CMD misc bonus and special cases
		[
			'Run ss/B/ss',
			'Toughness ss/B/ss'
		],// Feats
		[],// Skills
		[],// Languages
		'staggered',// Special Qualities
		'any',// Environment
		'any',// Organization
		'none',// Treasure
		[
			[
				'name' => 'Staggered',
				'type' => 'Ex',
				'desc' => 'Zombies have poor reflexes and can only perform a single move action or standard action each round. A zombie can move up to its speed and attack in the same round as a charge action.'
			]
		],// Special Abilities
		$desc=''// Description
	);
	require $startDir.'pageEnd.php';
?>