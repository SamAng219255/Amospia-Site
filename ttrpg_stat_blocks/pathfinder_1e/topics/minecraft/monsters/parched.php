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
		'Parched',// name
		false,// alt name
		'A skeletal figure lifts itself unnaturally from the desert sands. Scraps of papery desiccated skin and fraying bandages cling to its form.',// lore text
		3,// CR
		false,// MR
		false,// Custom XP
		'human parched',// Race
		[
			'fighter' => 5
		],// Class
		'NE',// Alignment
		'Medium',// Size
		'undead',// Type
		4,// Misc Initiative Mod
		false,// Mythic Initiative
		'darkvision 60ft.',// Senses
		0,// Misc Perception Mod
		'',// Aura
		[
			'natural' => 2
		],// Misc AC bonuses
		[[1,8],[5,10]],// Number of hit dice, Hit dice size, <additional hp bonus>, <hp notes (fast healing/regen/etc)>
		[
			[
				'good' => [false,true],
				'mod' => 0
			],
			[
				'good' => [false,false],
				'mod' => 0
			],
			[
				'good' => [true,false],
				'mod' => 0
			]
		],// Fortitude/Reflex/Will save good/bad and misc bonuses
		'bravery +1; bb/DR/bb 5/bludgeoning; bb/Immune/bb undead traits',// Defensive Abilities
		'weariness',// Weaknesses
		'30 ft.',// Speed
		[
			[
				'type' => 'Melee',
				'list' => [
					[
						'name' => '2 claws',
						'mod' => 0,
						'stat' => 'str',
						'damage' => '1d4+2 plus wearying strike'
					]
				]
			],
			[
				'type' => 'Ranged',
				'list' => [
					[
						'name' => 'mwk composite longbow',
						'mod' => 2,
						'stat' => 'dex',
						'damage' => '1d8+3/x3 plus wearying strike'
					]
				]
			]
		],// Attacks
		5,// Reach
		'weapon training (bows +1)',// Special Attacks
		[],// Spell-like Abilities
		[],// Spell Casting
		'',// Spell Casting Note
		[
			'str' => 14,
			'dex' => 21,
			'con' => 'cha',
			'int' => 0,
			'wis' => 8,
			'cha' => 10
		],// Stats
		[0.75,1],// BAB (1=full, 0.75=3/4 or medium, 0.5=half or slow)
		0,//CMB misc bonus and special cases
		0,//CMD misc bonus and special cases
		[
			'Improved Initiative ss/B/ss'
		],// Feats
		[],// Skills
		[],// Languages
		'armor training 1',// Special Qualities
		'any',// Environment
		'any',// Organization
		'none',// Treasure
		[
			[
				'name' => 'Weary',
				'type' => 'Ex',
				'desc' => 'A parched\'s body retains the intense exhaustion that dictated their final moments. They are always considered staggered.'
			],
			[
				'name' => 'Wearying Strike',
				'type' => 'Su',
				'desc' => 'Creatures struck by a parched\'s attacks must make a DC 13 Will save or else become fatigued. This can progress to exhausted as normal.'
			]
		],// Special Abilities
		'',// Description
		[
			'Gear' => [
				'masterwork composite longbow (+2 Str) with 100 arrows'
			]
		]
	);
	require $startDir.'pageEnd.php';
?>