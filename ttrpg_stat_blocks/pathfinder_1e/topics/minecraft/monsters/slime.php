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
<title>Green Cube</title>
<?php
	monsterBlockAuto(
		'Green Cube',// name
		'Slime',// alt name
		'This creature appears as a large, shiny, translucent, green cube. As you watch, the cube compresses itself downward before leapping into the air.',// lore text
		3,// CR
		false,// MR
		false,// Custom XP
		'',// Race
		[],// Class
		'N',// Alignment
		'Large',// Size
		'ooze',// Type
		4,// Misc Initiative Mod
		false,// Mythic Initiative
		'blindsight 60 ft.',// Senses
		0,// Misc Perception Mod
		'',// Aura
		[
			'natural' => 10
		],// Misc AC bonuses
		[4,8],// Number of hit dice, Hit dice size, <additional hp bonus>, <hp notes (fast healing/regen/etc)>
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
		'split (piercing and slashing, 1 hp); bb/Immune/bb acid, ooze traits',// Defensive Abilities
		'',// Weaknesses
		'swim 10 ft.',// Speed
		[
			[
				'type' => 'Melee',
				'list' => [
					[
						'name' => 'slam',
						'mod' => 0,
						'stat' => 'str',
						'damage' => '1d6+6 plus 1d6 acid'
					]
				]
			]
		],// Attacks
		10,// Reach
		'',// Special Attacks
		[],// Spell-like Abilities
		[],// Spell Casting
		'',// Spell Casting Note
		[
			'str' => 18,
			'dex' => 16,
			'con' => 17,
			'int' => 0,
			'wis' => 14,
			'cha' => 2
		],// Stats
		0.75,// BAB (1=full, 0.75=3/4 or medium, 0.5=half or slow)
		0,//CMB misc bonus and special cases
		[
			'notes' => 'can\'t be tripped'
		],//CMD misc bonus and special cases
		[],// Feats
		[],// Skills
		[],// Languages
		'bouncy',// Special Qualities
		'deep cave systems and swamps',// Environment
		'solitary, flow (3-5)',// Organization
		'standard',// Treasure
		[
			[
				'name' => 'Bouncy',
				'type' => 'Ex',
				'desc' => 'Green cubes are incapable of sliding themselves along the ground and instead bound from place to place. Green cubes have no upper limit to how far they can jump, are always treated as though they had a running start, and treat the DC to make a jump as half the distance to be crossed (if horizontal) or equal to the height to be reached (if vertical). Additionally, green cubes do not have to declare how far they are jumping before they make the jump. Instead, green cubes roll their acrobatics check and can travel any distance whose DC is less than or equal to the result rolled. Green cubes treat their total acrobatics modifier for jumping as +5.
				Green cubes take no damage from falling.'
			]
		],// Special Abilities
		$desc=''// Description
	);
	block(
		'Different Size Green Cubes',
		'variants',
		[
			'Not all green cubes are the same size but they generally fit into one of four categories.'
		],
		false,
		[
			[
				'title' => 'Big (CR 3)',
				'spaced' => false,
				'texts' => quick_array('Large sized green cubes use the stat block given above with no changes.')
			],
			[
				'title' => 'Medium (CR 1)',
				'spaced' => false,
				'texts' => quick_array('Medium sized green cubes have only 2d8 hit dice, 2 natural armor, have a strength score of 12, and their slam attack deals 1d4+1 plus 1d6 acid.')
			],
			[
				'title' => 'Small (CR 1/2)',
				'spaced' => false,
				'texts' => quick_array('Small sized green cubes have only 1d8 hit dice, no natural armor, have a strength score of 12, and their slam attack deals 1d3+1 plus 1 acid.')
			],
			[
				'title' => 'Tiny (CR 1/2)',
				'spaced' => false,
				'texts' => quick_array('Tiny sized green cubes have only 1d8 hit dice, no natural armor, have a strength score of 6, and their slam attack deals 1d2-2.')
			]
		]
	);
	require $startDir.'pageEnd.php';
?>