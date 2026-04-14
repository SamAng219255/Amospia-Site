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
		'Nautilus',// name
		false,// alt name
		'This mollusk is mostly covered by a large curled shell with red banding. Rust red tendrils extend behind them, waving in squid-like motions as it moves.',// lore text
		2,// CR
		false,// MR
		false,// Custom XP
		'',// Race
		[],// Class
		'N',// Alignment
		'Large',// Size
		'animal (aquatic)',// Type
		4,// Misc Initiative Mod
		false,// Mythic Initiative
		'low-light vision',// Senses
		0,// Misc Perception Mod
		'breath of the nautilus (5 ft.)',// Aura
		[
			'natural' => +5
		],// Misc AC bonuses
		[3,8,3],// Number of hit dice, Hit dice size, <additional hp bonus>, <hp notes (fast healing/regen/etc)>
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
		'bb/Immune/bb poison',// Defensive Abilities
		'',// Weaknesses
		'swim 40 ft.',// Speed
		[
			[
				'type' => 'Melee',
				'list' => [
					[
						'name' => 'slam',
						'mod' => 0,
						'stat' => 'str',
						'damage' => '1d6+4'
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
			'str' => 18,
			'dex' => 10,
			'con' => 13,
			'int' => 2,
			'wis' => 13,
			'cha' => 10
		],// Stats
		0.75,// BAB (1=full, 0.75=3/4 or medium, 0.5=half or slow)
		0,//CMB misc bonus and special cases
		0,//CMD misc bonus and special cases
		[
			'Improved Initiative',
			'Toughness'
		],// Feats
		[
			[
				'skill' => 'Swim',
				'stat' => 'str',
				'bonus' => 14
			]
		],// Skills
		[],// Languages
		'',// Special Qualities
		'Ocean',// Environment
		'solitary',// Organization
		'none',// Treasure
		[
			[
				'name' => 'Breath of the Nautilus',
				'type' => 'Su',
				'desc' => 'Nautili fill the surrounding water with a magical-alchemical mixture that allows air breathing creatures to respirate without issue.'
			]
		],// Special Abilities
		[
			'Nautili are common aquatic mounts, used by both land- and sea-dwellers.',
			'Nautili primarily eat pufferfish. As a byproduct of the pufferfish they eat, nautili fill the water around them with a minor water breathing potion. This disperses rapidly and doesn\'t spread far, but can allow a rider to travel great distances underwater, even if they can\'t normally breathe underwater.'
		]// Description
	);
	require $startDir.'pageEnd.php';
?>