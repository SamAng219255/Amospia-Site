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
<title>Zombified Piglin</title>
<?php
	monsterBlockAuto(
		'Zombified Piglin',// name
		false,// alt name
		'This large, rotting, porcine humanoid stares obliviously into space, a large golden sword held tightly in his hands.',// lore text
		5,// CR
		false,// MR
		false,// Custom XP
		'Zombified piglin',// Race
		[
			'fighter' => 5
		],// Class
		'N',// Alignment
		'Medium',// Size
		'undead (extraplanar)',// Type
		0,// Misc Initiative Mod
		false,// Mythic Initiative
		'darkvision 60 ft., scent',// Senses
		0,// Misc Perception Mod
		'',// Aura
		[
			'armor' => 8,
			'natural' => 2
		],// Misc AC bonuses
		[[1,8,1],[5,10,5]],// Number of hit dice, Hit dice size, <additional hp bonus>, <hp notes (fast healing/regen/etc)>
		[
			[
				'good' => [false,true],
				'mod' => 0
			],
			[
				'good' => [false,false],
				'mod' => 0
			],
			[
				'good' => [true,false],
				'mod' => 0
			]
		],// Fortitude/Reflex/Will save good/bad and misc bonuses
		'bravery +1; bb/DR/bb 5/slashing; bb/Immune/bb fire, undead traits',// Defensive Abilities
		'',// Weaknesses
		'15 ft.',// Speed
		[
			[
				'type' => 'Melee',
				'list' => [
					[
						'name' => 'ii/sharpness I greatsword/ii',
						'mod' => 1,
						'stat' => 'str',
						'damage' => '2d6+8'
					]
				]
			],
			[
				'type' => 'Melee',
				'list' => [
					[
						'name' => 'slam',
						'mod' => 0,
						'stat' => 'str',
						'damage' => '1d6+7'
					]
				]
			]
		],// Attacks
		5,// Reach
		'hatred, weapon training (swords +1)',// Special Attacks
		[],// Spell-like Abilities
		[],// Spell Casting
		'',// Spell Casting Note
		[
			'str' => 20,
			'dex' => 11,
			'maxDex' => 0,
			'con' => 'cha',
			'int' => 10,
			'wis' => 14,
			'cha' => 12
		],// Stats
		[0.75,1],// BAB (1=full, 0.75=3/4 or medium, 0.5=half or slow)
		0,//CMB misc bonus and special cases
		0,//CMD misc bonus and special cases
		[
			'Toughness ss/B/ss'
		],// Feats
		[],// Skills
		[],// Languages
		'armor training 1, greed',// Special Qualities
		'the Nether',// Environment
		'any',// Organization
		'none (ii/<a href="../enchants.php#block-Sharpness" target="_blank">sharpness I</a> <a href="../materials.php#block-Piglin-Forged-Gold" target="_blank">piglin forged gold</a> greatsword/ii, Lamellar (stone))',// Treasure
		[
			[
				'name' => 'Greed',
				'type' => 'Ex',
				'desc' => 'Piglins receive a +2 racial bonus on appraise checks to determine the price of non-magical goods containing precious metals or gemstones.'
			],
			[
				'name' => 'Hatred',
				'type' => 'Ex',
				'desc' => 'Piglins have a long standing fear and hatred of the many undead that call the Nether their home and have learned to fight back. Piglins have a +1 racial bonus on attack rolls against undead.'
			]
		],// Special Abilities
		$desc='',// Description
		[
			'Gear' => [
				'ii/<a href="../enchants.php#block-Sharpness" target="_blank">sharpness I</a> <a href="../materials.php#block-Piglin-Forged-Gold" target="_blank">piglin forged gold</a> greatsword/ii, Lamellar (stone)'
			]
		]
	);
	require $startDir.'pageEnd.php';
?>