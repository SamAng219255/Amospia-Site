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
		'Inari Hana',// name
		'Kitsune Ninja 7',// alt name
		' ',// lore text
		'7',// CR
		false,// MR
		false,// Custom XP
		'Kitsune',// Race
		[
			'ninja' => 7
		],// Class
		'N',// Alignment
		'Medium',// Size
		'humanoid (kitsune, shapechanger)',// Type
		0,// Misc Initiative Mod
		false,// Mythic Initiative
		'low-light vision',// Senses
		0,// Misc Perception Mod
		false,// Aura
		[
			'armor' => +1
		],// Misc AC bonuses
		[7,8],// Number of hit dice, Hit dice size, <additional hp bonus>, <hp notes (fast healing/regen/etc)>
		[
			[
				'good' => false,
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
		'bb/DR/bb 3/— vs small piercing projectiles',// Defensive Abilities
		false,// Weaknesses
		'30 ft.',// Speed
		[
			[
				'type' => 'Melee',
				'list' => [
					[
						'name' => 'kunai',
						'mod' => +1,
						'stat' => 'dex',
						'damage' => '1d4 B or P'
					]
				]
			],
			[
				'type' => 'Melee',
				'list' => [
					[
						'name' => 'wakizashi',
						'mod' => 0,
						'stat' => 'dex',
						'damage' => '1d6 P or S, 18-20/x2'
					]
				]
			],
			[
				'type' => 'Ranged',
				'list' => [
					[
						'name' => 'kunai',
						'mod' => +1,
						'stat' => 'dex',
						'damage' => '1d4 B or P'
					]
				]
			]
		],// Attacks
		5,// Reach
		'sneak attack (+4d6)',// Special Attacks
		[],// Spell-like Abilities
		[],// Spell Casting
		'',// Spell Casting Note
		[
			'str' => 10,
			'dex' => 18,
			'con' => 10,
			'int' => 14,
			'wis' => 8,
			'cha' => 15
		],// Stats
		0.75,// BAB (1=full, 0.75=3/4 or medium, 0.5=half or slow)
		0,//CMB misc bonus and special cases
		0,//CMD misc bonus and special cases
		[
			'Fox Shape',
			'Craft Magic Arms and Armor',
			'Magnum Opus (Craft [weapons])',
			'Master Craftsman',
			'Weapon Finesse'
		],// Feats
		[
			[
				'skill' => 'Acrobatics',
				'stat' => 'dex',
				'bonus' => 3 + 7 + 2
			],
			[
				'skill' => 'Bluff',
				'stat' => 'cha',
				'bonus' => 3 + 7
			],
			[
				'skill' => 'Climb',
				'stat' => 'str',
				'bonus' => 3 + 7
			],
			[
				'skill' => 'Craft (weapons)',
				'stat' => 'int',
				'bonus' => 3 + 7 + 4
			],
			[
				'skill' => 'Diplomacy',
				'stat' => 'cha',
				'bonus' => 3 + 7
			],
			[
				'skill' => 'Disable Device',
				'stat' => 'dex',
				'bonus' => 3 + 7
			],
			[
				'skill' => 'Disguise',
				'stat' => 'cha',
				'bonus' => 3 + 7
			],
			[
				'skill' => 'Escape Artist',
				'stat' => 'dex',
				'bonus' => 3 + 7
			],
			[
				'skill' => 'Knowledge (local)',
				'stat' => 'int',
				'bonus' => 3 + 7
			],
			[
				'skill' => 'Perception',
				'stat' => 'wis',
				'bonus' => 3 + 7
			],
			[
				'skill' => 'Stealth',
				'stat' => 'dex',
				'bonus' => 3 + 7
			],
			'racial' => [
				'Acrobatics' => +2
			]
		],// Skills
		[
			'Celestial',
			'Common',
			'Elven',
			'Sylvan'
		],// Languages
		'change shape, ki pool, poison use, no trace (+2)',// Special Qualities
		'',// Environment
		'',// Organization
		'NPC gear',// Treasure
		[
			[
				'name' => 'Change Shape',
				'type' => 'Sp',
				'desc' => 'Inari can assume the appearance of a single specific feminine human form. Inari always takes this specific form when she uses this ability. Inari gains a +10 racial bonus on Disguise checks made to appear human while in this form. Changing shape is a standard action. This ability otherwise functions as ii/alter self/ii, except that Inari does not adjust her ability scores and can remain in this form indefinitely.'
			],
			[
				'name' => 'Ki Pool',
				'type' => 'Su',
				'desc' => [
					'Inari possesses a pool of ki points, supernatural energy she can use to accomplish amazing feats. Inari has 5 points in her ki pool. As long as she has at least 1 point in her ki pool, she treats any Acrobatics skill check made to jump as if she had a running start.',
					'By spending 1 point from her ki pool, Inari can make one additional attack at her highest attack bonus, but she can do so only when making a full attack. In addition, she can spend 1 point to increase her speed by 20 feet for 1 round. Inari can also spend 1 point from her ki pool to give herself a +4 insight bonus on Stealth checks for 1 round. Finally, Inari can spend 1 point from her ki pool to disappear for 1 round per level. This ability functions as ii/invisibility/ii. Each of these powers is activated as a swift action.'
				]
			]
		],// Special Abilities
		$desc='',// Description
		[
			'Gear' => [
				'ii/+1 returning kunai/ii',
				'quilted cloth armor',
				'ii/amazing tools of manufacture/ii'
			]
		]
	);
	require $startDir.'pageEnd.php';
?>