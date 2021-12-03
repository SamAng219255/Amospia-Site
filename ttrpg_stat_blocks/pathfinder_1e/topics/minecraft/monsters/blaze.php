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
<title>Blaze</title>
<?php
	monsterBlockAuto(
		'Blaze',// name
		false,// alt name
		'This swirling tornado of flame and smoke has a structure resembling a head with two, almost human-like, brown eyes.',// lore text
		7,// CR
		false,// MR
		false,// Custom XP
		'',// Race
		[],// Class
		'N',// Alignment
		'Medium',// Size
		'outsider (elemental, extraplanar, fire)',// Type
		4,// Misc Initiative Mod
		false,// Mythic Initiative
		'darkvision 60 ft., smokesight',// Senses
		12,// Misc Perception Mod
		'',// Aura
		[
			'dodge' => 1,
			'natural' => 6
		],// Misc AC bonuses
		[9,10],// Number of hit dice, Hit dice size, <additional hp bonus>, <hp notes (fast healing/regen/etc)>
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
		'bb/Immune/bb elemental traits, fire',// Defensive Abilities
		'vulnerability to cold, water vulnerability',// Weaknesses
		'fly 30 ft. (perfect)',// Speed
		[
			[
				'type' => 'Melee',
				'list' => [
					[
						'name' => 'slam',
						'mod' => 0,
						'stat' => 'str',
						'damage' => '1d4+1 plus 2d6 fire'
					]
				]
			],
			[
				'type' => 'Ranged',
				'list' => [
					[
						'name' => '3 fire blasts',
						'mod' => 0,
						'stat' => 'dex',
						'damage' => '3d6 fire'
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
			'str' => 12,
			'dex' => 16,
			'con' => 18,
			'int' => 2,
			'wis' => 12,
			'cha' => 2
		],// Stats
		1,// BAB (1=full, 0.75=3/4 or medium, 0.5=half or slow)
		0,//CMB misc bonus and special cases
		[
			'notes' => 'cannot be tripped'
		],//CMD misc bonus and special cases
		[
			'Dodge',
			'Far Shot',
			'Improved Initiative',
			'Mobility',
			'Point-Blank Shot'
		],// Feats
		[
			[
				'skill' => 'Fly',
				'stat' => 'dex',
				'bonus' => 20
			],
			[
				'skill' => 'Perception',
				'stat' => 'wis',
				'bonus' => 12
			]
		],// Skills
		[],// Languages
		'',// Special Qualities
		'any (The Nether)',// Environment
		'solitary, conflagration (2-8)',// Organization
		'none',// Treasure
		[
			[
				'name' => 'Fire Blasts',
				'type' => 'Ex',
				'desc' => 'As a standard action, blaze can launch 3 blasts of flame at targets that deal 3d6 points of fire damage. These are ranged touch attacks with a range increment of 25 feet. On a successful hit the target is also set on fire.'
			],
			[
				'name' => 'Smokesight',
				'type' => 'Ex',
				'desc' => 'Blaze can see through fire, smoke, and ash without penalty, ignoring any cover or concealment bonuses from fire, smoke, and ash. This does not allow the blaze to see anything the blaze could not otherwise see (for example, invisible creatures are still invisible).'
			],
			[
				'name' => 'Water Vulnerability',
				'type' => 'Ex',
				'desc' => 'Blaze take 1d6 points of damage each round they are in contact with water and splashing them with water deals 1d4 points of damage. Blaze take 10d6 points of damage each round instead if they are fully submerged in water.'
			]
		],// Special Abilities
		$desc=''// Description
	);
	require $startDir.'pageEnd.php';
?>