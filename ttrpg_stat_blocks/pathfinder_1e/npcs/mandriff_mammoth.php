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
		'Mandriff, Elephant Guard',// name
		false,// alt name
		'This enormous, elephant-headed warrior stands regal and majestic before the gates.',// lore text
		12,// CR
		false,// MR
		false,// Custom XP
		'Mandriff (Elephant)',// Race
		[
			'warrior' => 10
		],// Class
		'N',// Alignment
		'Huge',// Size
		'monstrous humanoid',// Type
		0,// Misc Initiative Mod
		false,// Mythic Initiative
		'darkvision 60\', scent',// Senses
		0,// Misc Perception Mod
		'',// Aura
		[

			'armor' => 10,
			'natural' => 9
		],// Misc AC bonuses
		[10,10,10],// Number of hit dice, Hit dice size, <additional hp bonus>, <hp notes (fast healing/regen/etc)>
		[
			[
				'good' => true,
				'mod' => 2
			],
			[
				'good' => false,
				'mod' => 0
			],
			[
				'good' => false,
				'mod' => 2
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
						'name' => 'gore',
						'mod' => -5,
						'stat' => 'str',
						'damage' => '2d6+10'
					],
					[
						'name' => 'greatsword',
						'mod' => 1,
						'stat' => 'str',
						'damage' => '3d6+16',
						'iterative' => 0
					]
				]
			],
			[
				'type' => 'Melee',
				'list' => [
					[
						'name' => 'gore',
						'mod' => 0,
						'stat' => 'str',
						'damage' => '2d6+15'
					]
				]
			]
		],// Attacks
		10,// Reach
		'trample (1d8+15, DC 25)',// Special Attacks
		[],// Spell-like Abilities
		[],// Spell Casting
		'',// Spell Casting Note
		[
			'str' => 30,
			'dex' => 10,
			'con' => 28,
			'int' => 10,
			'wis' => 18,
			'cha' => 12 
		],// Stats
		1,// BAB (1=full, 0.75=3/4 or medium, 0.5=half or slow)
		[
			'bull rush' => 2
		],//CMB misc bonus and special cases
		[
			'bull rush' => 2,
			'trip' => 4
		],//CMD misc bonus and special cases
		[
			'Endurance',
			'Great Fortitude*',
			'Improved Bull Rush*',
			'Iron Will*',
			'Tougness*',
			'note' => 'Feats marked with * are already included in the creature\'s statistics.'
		],// Feats
		[
			[
				'skill' => 'Survival',
				'stat' => 'wis',
				'bonus' => 9
			],
			[
				'skill' => 'Perception',
				'stat' => 'wis',
				'bonus' => 9
			]
		],// Skills
		[],// Languages
		'',// Special Qualities
		'any',// Environment
		'solitary, pair, patrol (3–5), or squad (6–10)',// Organization
		'NPC gear',// Treasure
		[],// Special Abilities
		$desc='',// Description
		[
			'Combat Gear' => [
				'ii/potions of cure moderate wounds/ii (3)'

			],
			'Other Gear' => [
				'large +1 full plate',
				'large +1 greatsword',
			]
		]
	);
	require $startDir.'pageEnd.php';
?>