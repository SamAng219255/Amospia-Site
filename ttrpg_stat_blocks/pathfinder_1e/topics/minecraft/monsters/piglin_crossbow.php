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
<title>Piglin, Crossbow</title>
<?php
	monsterBlockAuto(
		'Piglin, Crossbow',// name
		'Piglin',// alt name
		'This large porcine humanoid looks at you quizzically, a large crossbow hangs from a loop on his belt.',// lore text
		4,// CR
		false,// MR
		false,// Custom XP
		'Piglin',// Race
		[
			'fighter' => 5
		],// Class
		'CN',// Alignment
		'Medium',// Size
		'monstrous humanoid (extraplanar)',// Type
		0,// Misc Initiative Mod
		false,// Mythic Initiative
		'darkvision 60 ft., scent',// Senses
		0,// Misc Perception Mod
		'',// Aura
		[
			'armor' => 5
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
		'30 ft.',// Speed
		[
			[
				'type' => 'Melee',
				'list' => [
					[
						'name' => 'heavy crossbow',
						'mod' => 0,
						'stat' => 'dex',
						'damage' => '2d10+5'
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
			'dex' => 15,
			'maxDex' => 4,
			'con' => 12,
			'int' => 12,
			'wis' => 12,
			'cha' => 8
		],// Stats
		1,// BAB (1=full, 0.75=3/4 or medium, 0.5=half or slow)
		0,//CMB misc bonus and special cases
		0,//CMD misc bonus and special cases
		[
			'Deadly Aim*',
			'Point-Blank Shot',
			'Rapid Reload',
			'Toughness*',
			'Vital Strike*',
			'Weapon Focus* (Heavy Crossbow)',
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
				'ii/ as/potions_mc|Potion of Regeneration| potion of regeneration II /as /ii',
				'ii/ as/potions_mc|Potion of Swiftness| potions of swiftness I /as /ii (2)',
				'ii/ as/potions_mc|Potion of Leaping| potion of leaping I /as /ii'
			],
			'Gear' => [
				'heavy crossbow with 100 bolts',
				'ii/+1 as/special_materials_mc|Netherite| netherite /as bolts/ii (10)',
				'ii/ as/enchants_mc|Protection| protection I /as hide armor/ii',
				'100 gp mundane equipment',
				'100 gp of golden jewelry'
			]
		]
	);
	require $startDir.'pageEnd.php';
?>