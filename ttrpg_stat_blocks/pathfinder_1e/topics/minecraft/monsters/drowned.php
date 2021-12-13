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
<title>Drowned</title>
<?php
	monsterBlockAuto(
		'Drowned',// name
		false,// alt name
		'A sodden corpse swims ungainly towards you. A strange blue glow emanates from its eyes and from various rotting wounds.',// lore text
		2,// CR
		false,// MR
		false,// Custom XP
		'zombified human',// Race
		[
			'warrior' => 3
		],// Class
		'NE',// Alignment
		'Medium',// Size
		'undead (aquatic)',// Type
		0,// Misc Initiative Mod
		false,// Mythic Initiative
		'darkvision 60ft.',// Senses
		0,// Misc Perception Mod
		'',// Aura
		[
			'armor' => 3,
			'natural' => 2
		],// Misc AC bonuses
		[3,10,3],// Number of hit dice, Hit dice size, <additional hp bonus>, <hp notes (fast healing/regen/etc)>
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
		'bb/DR/bb 5/slashing; bb/Immune/bb undead traits',// Defensive Abilities
		'',// Weaknesses
		'20 ft., swim 40 ft.',// Speed
		[
			[
				'type' => 'Melee',
				'list' => [
					[
						'name' => 'slam',
						'mod' => 0,
						'stat' => 'str',
						'damage' => '1d6+4'
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
			'str' => 17,
			'dex' => 9,
			'con' => 'cha',
			'int' => 0,
			'wis' => 10,
			'cha' => 12
		],// Stats
		1,// BAB (1=full, 0.75=3/4 or medium, 0.5=half or slow)
		0,//CMB misc bonus and special cases
		0,//CMD misc bonus and special cases
		[
			'Toughness ss/B/ss'
		],// Feats
		[
			[
				'skill' => 'Swim',
				'stat' => 'str',
				'bonus' => -2
			]
		],// Skills
		[],// Languages
		'staggered, trident mastery',// Special Qualities
		'any',// Environment
		'any',// Organization
		'none (broken chainmail)',// Treasure
		[
			[
				'name' => 'Staggered',
				'type' => 'Ex',
				'desc' => 'Drowned have poor reflexes and can only perform a single move action or standard action each round. A zombie can move up to its speed and attack in the same round as a charge action.'
			],
			[
				'name' => 'Trident Mastery',
				'type' => 'Ex',
				'desc' => 'Drowned treat a trident as having a range increment of 20 feet when underwater, even though throwing weapons underwater is normally ineffective for most combatants.'
			]
		],// Special Abilities
		''// Description
	);
	echo '<br><br>';
	monsterBlockAuto(
		'Drowned, Trident Thrower',// name
		'Drowned',// alt name
		'A sodden corpse swims ungainly towards you. A strange blue glow emanates from its eyes and from various rotting wounds.',// lore text
		2,// CR
		false,// MR
		false,// Custom XP
		'zombified human',// Race
		[
			'warrior' => 3
		],// Class
		'NE',// Alignment
		'Medium',// Size
		'undead (aquatic)',// Type
		0,// Misc Initiative Mod
		false,// Mythic Initiative
		'darkvision 60ft.',// Senses
		0,// Misc Perception Mod
		'',// Aura
		[
			'armor' => 3,
			'natural' => 2
		],// Misc AC bonuses
		[3,10,3],// Number of hit dice, Hit dice size, <additional hp bonus>, <hp notes (fast healing/regen/etc)>
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
		'bb/DR/bb 5/slashing; bb/Immune/bb undead traits',// Defensive Abilities
		'',// Weaknesses
		'20 ft., swim 40 ft.',// Speed
		[
			[
				'type' => 'Melee',
				'list' => [
					[
						'name' => 'slam',
						'mod' => 0,
						'stat' => 'str',
						'damage' => '1d6+4'
					]
				]
			],
			[
				'type' => 'Melee',
				'list' => [
					[
						'name' => 'trident',
						'mod' => 0,
						'stat' => 'str',
						'damage' => '1d8+4'
					]
				]
			],
			[
				'type' => 'Ranged',
				'list' => [
					[
						'name' => 'trident',
						'mod' => 0,
						'stat' => 'str',
						'damage' => '1d8+3'
					]
				]
			],
		],// Attacks
		5,// Reach
		'',// Special Attacks
		[],// Spell-like Abilities
		[],// Spell Casting
		'',// Spell Casting Note
		[
			'str' => 17,
			'dex' => 9,
			'con' => 'cha',
			'int' => 0,
			'wis' => 10,
			'cha' => 12
		],// Stats
		1,// BAB (1=full, 0.75=3/4 or medium, 0.5=half or slow)
		0,//CMB misc bonus and special cases
		0,//CMD misc bonus and special cases
		[
			'Toughness ss/B/ss'
		],// Feats
		[
			[
				'skill' => 'Swim',
				'stat' => 'str',
				'bonus' => -2
			]
		],// Skills
		[],// Languages
		'staggered, trident mastery',// Special Qualities
		'any',// Environment
		'any',// Organization
		'none (broken chainmail, trident)',// Treasure
		[
			[
				'name' => 'Staggered',
				'type' => 'Ex',
				'desc' => 'Drowned have poor reflexes and can only perform a single move action or standard action each round. A zombie can move up to its speed and attack in the same round as a charge action.'
			],
			[
				'name' => 'Trident Mastery',
				'type' => 'Ex',
				'desc' => 'Drowned treat a trident as having a range increment of 20 feet when underwater, even though throwing weapons underwater is normally ineffective for most combatants.'
			]
		],// Special Abilities
		''// Description
	);
	require $startDir.'pageEnd.php';
?>