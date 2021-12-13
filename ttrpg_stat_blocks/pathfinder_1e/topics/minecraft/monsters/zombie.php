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
<title>Zombie</title>
<?php
	monsterBlockAuto(
		'Zombie',// name
		false,// alt name
		'A shambling corpse lumbers in your direction.',// lore text
		2,// CR
		false,// MR
		false,// Custom XP
		'zombified human',// Race
		[
			'warrior' => 3
		],// Class
		'NE',// Alignment
		'Medium',// Size
		'undead',// Type
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
		'sunlight flammability',// Weaknesses
		'20 ft.',// Speed
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
		'fire spreader',// Special Attacks
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
		[],// Skills
		[],// Languages
		'staggered',// Special Qualities
		'any',// Environment
		'any',// Organization
		'none (broken chainmail)',// Treasure
		[
			[
				'name' => 'Fire Spreader',
				'type' => 'Ex',
				'desc' => 'If a zombie is on fire for any reason, including due to sunlight flammability, all of the zombie\'s natural attacks deal 1d6 fire damage. There is also a 33% chance that that any creature struck by the zombie\'s natural attacks will automatically catch on fire taking 1d6 points of fire damage each round for 2d4 rounds.'
			],
			[
				'name' => 'Staggered',
				'type' => 'Ex',
				'desc' => 'Zombies have poor reflexes and can only perform a single move action or standard action each round. A zombie can move up to its speed and attack in the same round as a charge action.'
			],
			[
				'name' => 'Sunlight Flammability',
				'type' => 'Ex',
				'desc' => 'When exposed to direct sunlight, skeletons burst into flame and take 1 point of fire damage per hit dice every round until they die. At which point their body burns to ash and is completely destroyed. If the skeleton gets out of the sunlight before it dies, it is still on fire and will continue to take 1d6 points of fire damage, to a maximum of its number of hit dice, each round until it is extinguished. Skeletons count as being vulnerable to sunlight and bright light for the purpose of being affected by spells and abilities.'
			]
		],// Special Abilities
		''// Description
	);
	require $startDir.'pageEnd.php';
?>