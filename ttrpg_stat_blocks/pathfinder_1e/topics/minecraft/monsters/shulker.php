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
<title>Shulker</title>
<?php
	monsterBlockAuto(
		'Shulker',// name
		false,// alt name
		'This creature has a cube shaped shell divided into a top and bottom half divided by a ring perfectly meshing rectangular teeth. As it opens, the top half spins and levitates into the air revealing a sphereical floating in the center.',// lore text
		3,// CR
		false,// MR
		false,// Custom XP
		'',// Race
		[],// Class
		'N',// Alignment
		'Medium',// Size
		'construct (extraplanar)',// Type
		0,// Misc Initiative Mod
		false,// Mythic Initiative
		'darkvision 60 ft., low-light vision, blindsense 60 ft.',// Senses
		0,// Misc Perception Mod
		'',// Aura
		[
			'natural' => 5
		],// Misc AC bonuses
		[4,10,20],// Number of hit dice, Hit dice size, <additional hp bonus>, <hp notes (fast healing/regen/etc)>
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
		'solid shell; bb/Immune/bb construct traits',// Defensive Abilities
		'',// Weaknesses
		'0 ft.',// Speed
		[],// Attacks
		0,// Reach
		'shulker bullet',// Special Attacks
		[
			'level' => 4,
			'conc' => 0,
			'spells' => [
				[
					'perday' => 'at-will',
					'list' => [
						'dimension door'
					]
				]
			]
		],// Spell-like Abilities
		[],// Spell Casting
		'',// Spell Casting Note
		[
			'str' => 'non',
			'dex' => 'non',
			'con' => 'non',
			'int' => 0,
			'wis' => 1,
			'cha' => 18
		],// Stats
		1,// BAB (1=full, 0.75=3/4 or medium, 0.5=half or slow)
		0,//CMB misc bonus and special cases
		[
			'notes' => 'can\'t be tripped'
		],//CMD misc bonus and special cases
		[],// Feats
		[],// Skills
		[],// Languages
		'',// Special Qualities
		'any (The End)',// Environment
		'solitary, pair, squad (3-8)',// Organization
		'none',// Treasure
		[
			[
				'name' => 'Shulker Bullet',
				'type' => 'Su',
				'desc' => 'A shulker can fire a slow moving, but tracking, bullet of magic that lifts opponents into the air. A shulker can fire this bullet at any creature it knows where is, such as with its blindsense, the target creature can make a reflex save to block the incoming bullet with a held item or dive behind an object to stop it. If the target makes the save the attack is negated. If the target fails the attack they take 1d6 points of force damage and begin to float. For the next 1d4 rounds, the character rises 10 feet at the beginning of their turn. If they are blocked (as by a ceiling) they stop moving unless the obstruction is removed but they continue floating just below. At the beginning of the targets next turn after the last turn they were floating for, they fall. If the target is struck again while still in the air, the remaining duration changes to the new one if it is longer.'
			],
			[
				'name' => 'Solid Shell',
				'type' => 'Ex',
				'desc' => 'Shulkers\' shells are firmly attached to the surface they are on. Shulkers have no move speed and cannot be tripped or moved. Shulkers can teleport and be teleported. Shulkers\' shells are also exceptionally tough. While a shulker\'s shell is closed it has hardness 40. Closing or opening its shell is a free action. Shulker cannot use any senses other than its blindsense and can\'t use its shulker bullet ability while its shell is closed.'
			]
		],// Special Abilities
		$desc=''// Description
	);
	require $startDir.'pageEnd.php';
?>