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
<title>Wolf</title>
<?php
	monsterBlockAuto(
		'Wolf',// name
		false,// alt name
		'This powerful canine watches its prey with piercing red eyes, darting its tongue across sharp white teeth.',// lore text
		2,// CR
		false,// MR
		false,// Custom XP
		'',// Race
		[],// Class
		'N',// Alignment
		'Medium',// Size
		'animal',// Type
		0,// Misc Initiative Mod
		false,// Mythic Initiative
		'low-light vision, scent',// Senses
		0,// Misc Perception Mod
		'',// Aura
		[
			'natural' => 4
		],// Misc AC bonuses
		[3,8],// Number of hit dice, Hit dice size, <additional hp bonus>, <hp notes (fast healing/regen/etc)>
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
		'',// Defensive Abilities
		'',// Weaknesses
		'50 ft.',// Speed
		[
			[
				'type' => 'Melee',
				'list' => [
					[
						'name' => 'bite',
						'mod' => 0,
						'stat' => 'str',
						'damage' => '1d6+4 plus trip'
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
			'str' => 17,
			'dex' => 15,
			'con' => 15,
			'int' => 2,
			'wis' => 12,
			'cha' => 6
		],// Stats
		0.75,// BAB (1=full, 0.75=3/4 or medium, 0.5=half or slow)
		0,//CMB misc bonus and special cases
		[
			'trip' => 4
		],//CMD misc bonus and special cases
		[
			'Run',
			'Skill Focus (Perception)'
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
				'bonus' => [
					'base' => 2,
					'scent tracking' => 4
				]
			]
		],// Skills
		[],// Languages
		'',// Special Qualities
		'cold or temperate forests',// Environment
		'solitary, pair, or pack (3–12)',// Organization
		'none',// Treasure
		[],// Special Abilities
		$desc=''// Description
	);
	require $startDir.'pageEnd.php';
?>