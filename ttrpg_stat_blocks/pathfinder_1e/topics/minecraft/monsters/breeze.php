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
		'Breeze',// name
		false,// alt name
		'This living whirlwind is composed of swirling storm clouds and around a pair of glowing yellow eyes.',// lore text
		7,// CR
		false,// MR
		false,// Custom XP
		'',// Race
		[],// Class
		'N',// Alignment
		'Medium',// Size
		'outsider (elemental, air)',// Type
		4,// Misc Initiative Mod
		false,// Mythic Initiative
		'darkvision 60 ft.',// Senses
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
		'deflecting winds; bb/Immune/bb ai, elemental traits',// Defensive Abilities
		'',// Weaknesses
		'30 ft.',// Speed
		[
			[
				'type' => 'Melee',
				'list' => [
					[
						'name' => 'slam',
						'mod' => 0,
						'stat' => 'str',
						'damage' => '3d6+1'
					]
				]
			]
		],// Attacks
		5,// Reach
		'breeze charge (+12, 8d6 bludgeoning)',// Special Attacks
		[],// Spell-like Abilities
		[],// Spell Casting
		'',// Spell Casting Note
		[
			'str' => 12,
			'dex' => 16,
			'con' => 18,
			'int' => 2,
			'wis' => 12,
			'cha' => 18
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
				'skill' => 'Acrobatics',
				'stat' => 'dex',
				'bonus' => 20
			],
			[
				'skill' => 'Perception',
				'stat' => 'wis',
				'bonus' => 12
			],
			'racial' => [
				'Acrobatics' => 8
			]
		],// Skills
		[],// Languages
		'aerobatic leap',// Special Qualities
		'any',// Environment
		'solitary, gale (2-8)',// Organization
		'none',// Treasure
		[
			[
				'name' => 'Aerobatic Leap',
				'type' => 'Ex',
				'desc' => 'As a move action, a breeze can coil their winds like a spring and propel themselves long distances. They make an Acrobatics check as normal but they take no penalties from not having a running start, the DCs are halved, and the breeze\'s jump is not limited by their movement speed. A breeze cannot make multiple aerobatic leaps in one round.'
			],
			[
				'name' => 'Breeze Charge',
				'type' => 'Ex',
				'desc' => 'As a standard action, a breeze can fire a blast of compressed air that erupts on contact, blowing nearby creatures away. The breeze can target a creature or a square within 250 feet with this ability. If they target a creature, they must make a ranged touch against the creature. On a successful attack, the creature takes 8d6 bludgeoning damage and is blown 40 feet away from the breeze. Regardless of whether the attack hit or if the breeze targeted a square, all creatures within 30 feet must make a DC 18 Reflex saving throw or else be blown 2d3 × 5 feet away from the target square. Any creatures in the target square, other than the initial target, are blown in a random direction instead. This DC is Charisma-based.'
			],
			[
				'name' => 'Deflecting Winds',
				'type' => 'Ex',
				'desc' => 'A breeze\'s windy form deflects incoming arrows and other such attacks. A breeze takes no damage from projectiles and thrown weapons which are launched a distance equal to the attack\'s range increment in a random direction.',
				'Choose a square at random of the specified distance from the breeze and draw a line between it and the breeze. For each creature whose square intersects the line starting with those closest to the breeze, roll a 50% chance. On a successful roll, the creature receives a DC 15 Reflex saving throw, on a failed save, they take damage as though they were the target of the attack. Once a creature takes damage from this ability, the projectile or thrown weapon stops there. If no creatures take damage from this ability, it falls to the ground in the chosen square. If the line passes through a wall or similar barrier, the projectile strikes the barrier and stops there.'
			]
		],// Special Abilities
		$desc=''// Description
	);
	require $startDir.'pageEnd.php';
?>