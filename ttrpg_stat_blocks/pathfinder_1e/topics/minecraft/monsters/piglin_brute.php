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
<title>Piglin, Brute</title>
<?php
	monsterBlockAuto(
		'Piglin, Brute',// name
		'Piglin',// alt name
		'This large porcine humanoid comes charging toward you, a large, golden, single-bladed, bearded axe raised in the air.',// lore text
		7,// CR
		false,// MR
		false,// Custom XP
		'Piglin',// Race
		[
			'fighter' => 8
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
			'armor' => 9,
			'dodge' => 1
		],// Misc AC bonuses
		[8,10,8],// Number of hit dice, Hit dice size, <additional hp bonus>, <hp notes (fast healing/regen/etc)>
		[
			[
				'good' => true,
				'mod' => 1
			],
			[
				'good' => false,
				'mod' => 1
			],
			[
				'good' => false,
				'mod' => 1
			]
		],// Fortitude/Reflex/Will save good/bad and misc bonuses
		'bravery +2',// Defensive Abilities
		'',// Weaknesses
		'30 ft.',// Speed
		[
			[
				'type' => 'Melee',
				'list' => [
					[
						'name' => 'ii/sharpness I greataxe/ii',
						'mod' => 0,
						'stat' => 'str',
						'damage' => '1d12+18/19-20x3',
						'iterative' => 0
					]
				]
			]
		],// Attacks
		5,// Reach
		'hatred, weapon training (axes +1)',// Special Attacks
		[],// Spell-like Abilities
		[],// Spell Casting
		'',// Spell Casting Note
		[
			'str' => 18,
			'dex' => 13,
			'maxDex' => 2,
			'con' => 12,
			'int' => 10,
			'wis' => 14,
			'cha' => 8
		],// Stats
		1,// BAB (1=full, 0.75=3/4 or medium, 0.5=half or slow)
		[
			'sunder' => 2
		],//CMB misc bonus and special cases
		[
			'sunder' => 2
		],//CMD misc bonus and special cases
		[
			'Cleave',
			'Dodge*',
			'Great Cleave',
			'Improved Critical* (Greataxe)',
			'Improved Sunder',
			'Power Attack*',
			'Toughness*',
			'Weapon Focus* (Greataxe)',
			'Weapon Specialization* (Greataxe)',
			'note' => 'Feats marked with * are already included in the creature\'s statistics.'
		],// Feats
		[
			[
				'skill' => 'Perception',
				'stat' => 'wis',
				'bonus' => 8
			],
			[
				'skill' => 'Survival',
				'stat' => 'wis',
				'bonus' => 11
			]
		],// Skills
		[
			'Piglin'
		],// Languages
		'armor training 2, greed',// Special Qualities
		'the Nether (bastion remnants)',// Environment
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
				'ii/ as/potions_mc|Potion of Healing| potion of healing II /as /ii',
				'ii/ as/potions_mc|Potion of Strength| potion of strength I /as /ii',
				'ii/ as/potions_mc|Potion of Swiftness| potions of swiftness I /as /ii (2)',
				'ii/ as/potions_mc|Potion of Leaping| potion of leaping I /as /ii'
			],
			'Gear' => [
				'ii/ as/enchants_mc|Sharpness| sharpness I /as as/special_materials_mc|Piglin Forged Gold| piglin forged gold /as greataxes/ii (2)',
				'ii/ as/enchants_mc|Protection| protection I /as stone lamellar/ii',
				'ii/cloak of resistance/ii (+1)',
				'ii/muleback cords/ii',
				'250 gp in mundane equipment',
				'250 gp in gold jewelry'
			]
		]
	);
	require $startDir.'pageEnd.php';
?>