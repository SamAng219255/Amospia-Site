<?php 
	$startDir='';
	for($i=0; $i<10; $i++) {
		if(file_exists($startDir.'pageStart.php')) {
			require $startDir.'pageStart.php';
			break;
		}
		else {
			$startDir='../'.$startDir;
		}
	}
?>
<title>Pillager</title>
<?php
	monsterBlockAuto(
		'Pillager',// name
		false,// alt name
		'This gray skinned humanoid stares you down as he levels his crossbow in your direction.',// lore text
		6,// CR
		false,// MR
		false,// Custom XP
		'Illager',// Race
		[
			'fighter' => 7
		],// Class
		'NE',// Alignment
		'Medium',// Size
		'humanoid (illager)',// Type
		4,// Misc Initiative Mod
		false,// Mythic Initiative
		false,// Senses
		0,// Misc Perception Mod
		'',// Aura
		[
			'armor' => 8,
			'dodge' => 1
		],// Misc AC bonuses
		[7,10],// Number of hit dice, Hit dice size, <additional hp bonus>, <hp notes (fast healing/regen/etc)>
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
				'mod' => 1
			]
		],// Fortitude/Reflex/Will save good/bad and misc bonuses
		'bravery +2; bb/SR/bb 13',// Defensive Abilities
		'',// Weaknesses
		'30 ft.',// Speed
		[
			[
				'type' => 'Melee',
				'list' => [
					[
						'name' => '+1 heavy crossbow',
						'mod' => 1,
						'iterative' => 0,
						'stat' => 'dex',
						'damage' => '1d10+6'
					]
				]
			]
		],// Attacks
		5,// Reach
		'hatred, weapon training (crossbows +1)',// Special Attacks
		[],// Spell-like Abilities
		[],// Spell Casting
		'',// Spell Casting Note
		[
			'str' => 13,
			'dex' => 17,
			'maxDex' => 3,
			'con' => 16,
			'int' => 12,
			'wis' => 10,
			'cha' => 8
		],// Stats
		1,// BAB (1=full, 0.75=3/4 or medium, 0.5=half or slow)
		0,//CMB misc bonus and special cases
		0,//CMD misc bonus and special cases
		[
			'Crossbow Mastery',
			'Deadly Aim*',
			'Dodge',
			'Improved Initiative*',
			'Point-Blank Shot',
			'Precise Shot',
			'Rapid Reload (Heavy Crossbow)',
			'Rapid Shot',
			'Weapon Focus* (Heavy Crossbow)',
			'note' => 'Feats marked with * are already included in the creature\'s statistics.'
		],// Feats
		[
			[
				'skill' => 'Perception',
				'stat' => 'wis',
				'bonus' => 7
			],
			[
				'skill' => 'Survival',
				'stat' => 'wis',
				'bonus' => 10
			]
		],// Skills
		[
			'Illager',
			'Orcish'
		],// Languages
		'armor training 2',// Special Qualities
		'any (Illager Mansions)',// Environment
		'any',// Organization
		'NPC gear',// Treasure
		[
			[
				'name' => 'Hatred',
				'type' => 'Ex',
				'desc' => 'While Illagers hate all other races, the illagers have a particular hatred for their human and knom cousins. Illagers have a +1 racial bonus on attack rolls against humans and knom.'
			]
		],// Special Abilities
		$desc='',// Description
		[
			'Combat Gear' => [
				'ii/<a href="../items/potions.php#block-Potion-of-Night-Vision" target="_blank">potion of night vision I</a>/ii',
				'ii/<a href="../items/potions.php#block-Potion-of-Regeneration" target="_blank">potion of regeneration II</a>/ii',
				'ii/<a href="../items/potions.php#block-Potion-of-Swiftness" target="_blank">potions of swiftness II</a>/ii (2)',
				'ii/<a href="../items/potions.php#block-Potion-of-Poison" target="_blank">splash potions of poison I</a>/ii (3)',
				'adamantine bolts (5)',
				'alchemical silver bolts (20)',
				'cold iron bolts (20)'
			],
			'Gear' => [
				'ii/<a href="../enchants.php#block-Power" target="_blank">power I</a> heavy crossbow/ii with 100 bolts',
				'ii/<a href="../enchants.php#block-Protection" target="_blank">protection I</a> banded mail/ii',
				'ii/+1 protean cloak/ii (Will)',
				'ii/feather token (bird)/ii',
				'ii/<a href="../items/lure_rod.php" target="_blank">luring fishing rod (+2)</a>/ii',
				'100 gp mundane equipment',
				'a collection of emeralds in three sizes together worth approximately 100 gp'
			]
		]
	);
?>
<?php require $startDir.'pageEnd.php';?>