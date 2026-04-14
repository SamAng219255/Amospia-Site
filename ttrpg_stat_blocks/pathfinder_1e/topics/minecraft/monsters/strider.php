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
		'Strider',// name
		false,// alt name
		'This strange creature has a bulbous body and a pair of long legs that dip into the lava and are coated in splatters of hardened rock.',// lore text
		'1/3',// CR
		false,// MR
		false,// Custom XP
		'',// Race
		[],// Class
		'N',// Alignment
		'Medium',// Size
		'animal (extraplanar)',// Type
		0,// Misc Initiative Mod
		false,// Mythic Initiative
		'low-light vision',// Senses
		0,// Misc Perception Mod
		'',// Aura
		[
			'natural' => 4
		],// Misc AC bonuses
		[1,8],// Number of hit dice, Hit dice size, <additional hp bonus>, <hp notes (fast healing/regen/etc)>
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
		'bb/Immune/bb fire',// Defensive Abilities
		'heat reliance, vulnerability to cold, water vulnerability',// Weaknesses
		'40 ft.',// Speed
		[
			[
				'type' => 'Melee',
				'list' => [
					[
						'name' => 'slam',
						'mod' => 0,
						'stat' => 'str',
						'damage' => '1d4+1'
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
			'str' => 13,
			'dex' => 10,
			'con' => 15,
			'int' => 1,
			'wis' => 14,
			'cha' => 12
		],// Stats
		0.75,// BAB (1=full, 0.75=3/4 or medium, 0.5=half or slow)
		0,//CMB misc bonus and special cases
		0,//CMD misc bonus and special cases
		[
			''
		],// Feats
		[
			[
				'skill' => 'Survival',
				'stat' => 'wis',
				'bonus' => 1
			]
		],// Skills
		[],// Languages
		'lava striding',// Special Qualities
		'any',// Environment
		'solitary',// Organization
		'none',// Treasure
		[
			[
				'name' => 'Heat Reliance',
				'type' => 'Ex',
				'desc' => 'Striders not in contact with lava or an equivalent heat source can only move at half their normal speed and are staggered.'
			],
			[
				'name' => 'Lava Striding',
				'type' => 'Ex',
				'desc' => 'Striders are able to walk across the surface of a body of lava without issue. Striders have incredible strength and bouyancy while walking across lava and can be ridden by a creature of their same size while doing so.'
			],
			[
				'name' => 'Water Vulnerability',
				'type' => 'Ex',
				'desc' => 'Striders take 1d6 points of damage each round they are in contact with water and splashing them with water deals 1d4 points of damage. Striders take 10d6 points of damage each round instead if they are fully submerged in water.'
			]
		],// Special Abilities
		$desc=[
			'Striders are almost certainly the least hostile denizens of The Nether and walk across the plane\'s lava oceans without care in search of fungus to eat. Striders are cold blooded and adapted to the extreme temperatures on the surface of the lava oceans and thus require exceptionally high ambient temperatures to avoid becoming too cold.',
			'Striders have long heat resistant hairs hanging from either side of their bodies that are believed to serve similar functions to a cat\'s whiskers. These hairs are occasioanlly shed and are incredibly think and strong. Local piglin tribes often collect these shed hairs to use as crossbow strings.'
		]// Description
	);
	require $startDir.'pageEnd.php';
?>