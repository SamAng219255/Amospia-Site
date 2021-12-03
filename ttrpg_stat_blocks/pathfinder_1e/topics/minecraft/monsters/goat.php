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
<title>Goat</title>
<?php
	monsterBlockAuto(
		'Mountain Goat',// name
		'Goat',// alt name
		'This otherwise largely passive white furred herd animal has no qualms about charging random passersby with their horns and throwing them from the mountain sides on which they live.',// lore text
		1,// CR
		false,// MR
		false,// Custom XP
		'',// Race
		[],// Class
		'N',// Alignment
		'Medium',// Size
		'animal',// Type
		0,// Misc Initiative Mod
		false,// Mythic Initiative
		'low-light vision',// Senses
		0,// Misc Perception Mod
		'',// Aura
		[
			'natural' => 1
		],// Misc AC bonuses
		[2,8],// Number of hit dice, Hit dice size, <additional hp bonus>, <hp notes (fast healing/regen/etc)>
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
		'30 ft.',// Speed
		[
			[
				'type' => 'Melee',
				'list' => [
					[
						'name' => 'gore',
						'mod' => -1,
						'stat' => 'str',
						'damage' => '1d4+5 plus push'
					]
				]
			]
		],// Attacks
		5,// Reach
		'push (gore, 20 feet)',// Special Attacks
		[],// Spell-like Abilities
		[],// Spell Casting
		'',// Spell Casting Note
		[
			'str' => 14,
			'dex' => 13,
			'con' => 14,
			'int' => 2,
			'wis' => 11,
			'cha' => 5
		],// Stats
		0.75,// BAB (1=full, 0.75=3/4 or medium, 0.5=half or slow)
		[
			'push' => 4
		],//CMB misc bonus and special cases
		[
			'trip' => 4
		],//CMD misc bonus and special cases
		[
			'Nimble Moves',
			'Power Attack*',
			'note' => 'Feats marked with * are already included in the creature\'s statistics.'
		],// Feats
		[
			[
				'skill' => 'Acrobatics',
				'stat' => 'dex',
				'bonus' => [
					'base' => 8
				]
			],
			[
				'skill' => 'Climb',
				'stat' => 'dex',
				'bonus' => 4
			],
			[
				'skill' => 'Survival',
				'stat' => 'wis',
				'bonus' => [
					'base' => 0,
					'to find food' => 4
				]
			]
		],// Skills
		[],// Languages
		'',// Special Qualities
		'cold or temperate hills or mountains',// Environment
		'solitary, pair, or herd (3-12)',// Organization
		'none',// Treasure
		[],// Special Abilities
		$desc=''// Description
	);
	require $startDir.'pageEnd.php';
?>