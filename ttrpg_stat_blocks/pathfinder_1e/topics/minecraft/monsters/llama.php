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
<title>Dire Llama</title>
<?php
	monsterBlockAuto(
		'Dire Llama',// name
		'Llama',// alt name
		'This shaggy, hoofed quadruped sports an elongated neck and large, crooked teeth.',// lore text
		5,// CR
		false,// MR
		false,// Custom XP
		'',// Race
		[],// Class
		'N',// Alignment
		'Large',// Size
		'animal',// Type
		0,// Misc Initiative Mod
		false,// Mythic Initiative
		'low-light vision',// Senses
		0,// Misc Perception Mod
		'',// Aura
		[
			'natural' => 4
		],// Misc AC bonuses
		[7,8,7],// Number of hit dice, Hit dice size, <additional hp bonus>, <hp notes (fast healing/regen/etc)>
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
		'40 ft.',// Speed
		[
			[
				'type' => 'Melee',
				'list' => [
					[
						'name' => 'bite',
						'mod' => 0,
						'stat' => 'str',
						'damage' => '1d8+4'
					],
					[
						'name' => '2 hoofs',
						'mod' => -5,
						'stat' => 'str',
						'damage' => '1d6+2'
					]
				]
			]
		],// Attacks
		10,// Reach
		'spit (+8 ranged touch)',// Special Attacks
		[],// Spell-like Abilities
		[],// Spell Casting
		'',// Spell Casting Note
		[
			'str' => 18,
			'dex' => 19,
			'con' => 17,
			'int' => 2,
			'wis' => 12,
			'cha' => 9
		],// Stats
		0.75,// BAB (1=full, 0.75=3/4 or medium, 0.5=half or slow)
		0,//CMB misc bonus and special cases
		[
			'trip' => 4
		],//CMD misc bonus and special cases
		[
			'Endurance',
			'Skill Focus (Acrobatics)',
			'Skill Focus (Perception)',
			'Toughness'
		],// Feats
		[
			[
				'skill' => 'Acrobatics',
				'stat' => 'dex',
				'bonus' => [
					'base' => 13,
					'to cross narrow surfaces or uneven ground' => 4
				]
			],
			[
				'skill' => 'Perception',
				'stat' => 'wis',
				'bonus' => 3
			]
		],// Skills
		[],// Languages
		'',// Special Qualities
		'cold or temperate hills or mountains',// Environment
		'solitary, pair, or herd (3–15)',// Organization
		'none',// Treasure
		[
			[
				'name' => 'Spit',
				'type' => 'Ex',
				'desc' => 'A llama can regurgitate the contents of its stomach, spitting the foul material at a single target within 30 feet. The target must succeed at a DC 12 Fortitude save or be sickened for 1d4 rounds. The save DC is Constitution-based. The llama receives a +4 racial bonus to hit with this attack.'
			]
		],// Special Abilities
		$desc=''// Description
	);
	require $startDir.'pageEnd.php';
?>