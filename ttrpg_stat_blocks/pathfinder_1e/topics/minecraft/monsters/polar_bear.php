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
<title>Polar Bear</title>
<?php
	monsterBlockAuto(
		'Polar Bear',// name
		false,// alt name
		'This large bear is completely white save for small black eyes and black lips hiding huge, glistening teeth.',// lore text
		4,// CR
		false,// MR
		false,// Custom XP
		'',// Race
		[],// Class
		'N',// Alignment
		'Large',// Size
		'animal',// Type
		0,// Misc Initiative Mod
		false,// Mythic Initiative
		'low-light vision, scent',// Senses
		0,// Misc Perception Mod
		'',// Aura
		[
			'natural' => 8
		],// Misc AC bonuses
		[4,8],// Number of hit dice, Hit dice size, <additional hp bonus>, <hp notes (fast healing/regen/etc)>
		[
			[
				'good' => true,
				'mod' => 0
			],
			[
				'good' => true,
				'mod' => 0
			],
			[
				'good' => false,
				'mod' => 0
			]
		],// Fortitude/Reflex/Will save good/bad and misc bonuses
		'',// Defensive Abilities
		'',// Weaknesses
		'40 ft., swim 20 ft.',// Speed
		[
			[
				'type' => 'Melee',
				'list' => [
					[
						'name' => 'bite',
						'mod' => 0,
						'stat' => 'str',
						'damage' => '1d8+6'
					],
					[
						'name' => '2 claws',
						'mod' => 0,
						'stat' => 'str',
						'damage' => '1d6+6 plus grab'
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
			'str' => 23,
			'dex' => 15,
			'con' => 21,
			'int' => 2,
			'wis' => 16,
			'cha' => 10
		],// Stats
		0.75,// BAB (1=full, 0.75=3/4 or medium, 0.5=half or slow)
		[
			'grapple' => 4
		],//CMB misc bonus and special cases
		[
			'trip' => 4
		],//CMD misc bonus and special cases
		[
			'Endurance',
			'Skill Focus (Survival)'
		],// Feats
		[
			[
				'skill' => 'Perception',
				'stat' => 'wis',
				'bonus' => 5
			],
			[
				'skill' => 'Survival',
				'stat' => 'wis',
				'bonus' => 4
			],
			[
				'skill' => 'Swim',
				'stat' => 'str',
				'bonus' => 12
			]
		],// Skills
		[],// Languages
		'',// Special Qualities
		'arctic tundra',// Environment
		'solitary, pair, or pack (3–12)',// Organization
		'none',// Treasure
		[],// Special Abilities
		$desc=''// Description
	);
	require $startDir.'pageEnd.php';
?>