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
<title>Piglin, Swordsman</title>
<?php
	monsterBlockAuto(
		'Piglin, Swordsman',// name
		'Piglin',// alt name
		'This large porcine humanoid looks at you quizzically, a large golden sword hanging at his side.',// lore text
		5,// CR
		false,// MR
		false,// Custom XP
		'Piglin',// Race
		[
			'fighter' => 5
		],// Class
		'CN',// Alignment
		'Medium',// Size
		'monstrous humanoid (extraplanar)',// Type
		4,// Misc Initiative Mod
		false,// Mythic Initiative
		'darkvision 60 ft., scent',// Senses
		0,// Misc Perception Mod
		'',// Aura
		[
			'armor' => 9,
			'dodge' => 1
		],// Misc AC bonuses
		[5,10,5],// Number of hit dice, Hit dice size, <additional hp bonus>, <hp notes (fast healing/regen/etc)>
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
		'bravery +1',// Defensive Abilities
		'',// Weaknesses
		'20 ft.',// Speed
		[
			[
				'type' => 'Melee',
				'list' => [
					[
						'name' => 'ii/sharpness I greatsword/ii',
						'mod' => 1,
						'stat' => 'str',
						'damage' => '2d6+16'
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
			'str' => 18,
			'dex' => 13,
			'maxDex' => 1,
			'con' => 12,
			'int' => 10,
			'wis' => 14,
			'cha' => 8
		],// Stats
		1,// BAB (1=full, 0.75=3/4 or medium, 0.5=half or slow)
		0,//CMB misc bonus and special cases
		0,//CMD misc bonus and special cases
		[
			'Cleave',
			'Dodge*',
			'Great Cleave',
			'Improved Initiative*',
			'Power Attack*',
			'Toughness*',
			'Weapon Focus* (Greatsword)',
			'Weapon Specialization* (Greatsword)',
			'note' => 'Feats marked with * are already included in the creature\'s statistics.'
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
				'bonus' => 8
			]
		],// Skills
		[
			'Piglin'
		],// Languages
		'armor training 1, greed',// Special Qualities
		'the Nether (crimson forests and bastion remnants)',// Environment
		'any',// Organization
		'NPC gear',// Treasure
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
			'Combat Gear' => [
				'ii/<a href="../items/potions.php#block-Potion-of-Regeneration" target="_blank">potion of regeneration II</a>/ii',
				'ii/<a href="../items/potions.php#block-Potion-of-Swiftness" target="_blank">potions of swiftness I</a>/ii (2)',
				'ii/<a href="../items/potions.php#block-Potion-of-Leaping" target="_blank">potion of leaping I</a>/ii'
			],
			'Gear' => [
				'ii/<a href="../enchants.php#block-Sharpness" target="_blank">sharpness I</a> <a href="../materials.php#block-Piglin-Forged-Gold" target="_blank">piglin forged gold</a> greatsword/ii',
				'ii/<a href="../enchants.php#block-Protection" target="_blank">protection I</a> stone lamellar/ii',
				'100 gp mundane equipment',
				'100 gp of golden jewelry'
			]
		]
	);
	require $startDir.'pageEnd.php';
?>