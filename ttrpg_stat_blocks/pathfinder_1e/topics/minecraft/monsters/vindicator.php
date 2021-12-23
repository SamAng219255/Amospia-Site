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
<title>Vindicator</title>
<?php
	monsterBlockAuto(
		'Vindicator',// name
		false,// alt name
		'This gray skinned humanoid stares you down as he raises his axe and charges towards you.',// lore text
		7,// CR
		false,// MR
		false,// Custom XP
		'Illager',// Race
		[
			'fighter' => 8
		],// Class
		'NE',// Alignment
		'Medium',// Size
		'humanoid (illager)',// Type
		0,// Misc Initiative Mod
		false,// Mythic Initiative
		'',// Senses
		0,// Misc Perception Mod
		'',// Aura
		[
			'armor' => 10,
			'dodge' => 1
		],// Misc AC bonuses
		[8,10,8],// Number of hit dice, Hit dice size, <additional hp bonus>, <hp notes (fast healing/regen/etc)>
		[
			[
				'good' => true,
				'mod' => 3
			],
			[
				'good' => false,
				'mod' => 1
			],
			[
				'good' => false,
				'mod' => 2
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
			'dex' => 14,
			'maxDex' => 3,
			'con' => 16,
			'int' => 10,
			'wis' => 8,
			'cha' => 12
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
			'Great Fortitude*',
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
				'skill' => 'Intimidate',
				'stat' => 'cha',
				'bonus' => 11
			],
			[
				'skill' => 'Perception',
				'stat' => 'wis',
				'bonus' => 8
			]
		],// Skills
		[
			'Illager'
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
				'ii/ as/potions_mc|Potion of Regeneration| potion of regeneration III /as /ii',
				'ii/ as/potions_mc|Potion of Swiftness| potions of swiftness II /as /ii'
			],
			'Gear' => [
				'ii/ as/enchants_mc|Sharpness| sharpness I /as greataxe/ii',
				'ii/ as/enchants_mc|Protection| protection I /as full plate/ii',
				'ii/+1 protean cloak/ii (Will)',
				'ii/ aa/ compass|redstone compass /aa /ii (tuned to a ii/ aa/lodestone| netherite lodestone /aa /ii in the mansion)',
				'100 gp mundane equipment',
				'a collection of emeralds in three sizes together worth approximately 400 gp'
			]
		]
	);
	require $startDir.'pageEnd.php';
?>