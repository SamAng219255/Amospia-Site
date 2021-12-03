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
<title>Ravager</title>
<?php
	monsterBlockAuto(
		'Ravager',// name
		false,// alt name
		'This creature appears most similar to an armored bison with a pair a front facing horns and a face that is all too similar to it illager handlers.',// lore text
		10,// CR
		false,// MR
		false,// Custom XP
		'',// Race
		[],// Class
		'NE',// Alignment
		'Large',// Size
		'magical beast',// Type
		4,// Misc Initiative Mod
		false,// Mythic Initiative
		'low-light vision, darkvision 60 ft., scent',// Senses
		0,// Misc Perception Mod
		'',// Aura
		[
			'armor' => 12,
			'natural' => 4
		],// Misc AC bonuses
		[13,10],// Number of hit dice, Hit dice size, <additional hp bonus>, <hp notes (fast healing/regen/etc)>
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
		'ferocity, heavy fortification',// Defensive Abilities
		'',// Weaknesses
		'40 ft.',// Speed
		[
			[
				'type' => 'Melee',
				'list' => [
					[
						'name' => 'bite',
						'mod' => -4,
						'stat' => 'str',
						'damage' => '1d8+19'
					],
					[
						'name' => 'gore',
						'mod' => -4,
						'stat' => 'str',
						'damage' => '1d8+19'
					],
					[
						'name' => 'slam',
						'mod' => -4,
						'stat' => 'str',
						'damage' => '1d6+19 plus push'
					]
				]
			]
		],// Attacks
		10,// Reach
		'push (slam, 15 feet), roar, trample (1d8+16, DC 27)',// Special Attacks
		[],// Spell-like Abilities
		[],// Spell Casting
		'',// Spell Casting Note
		[
			'str' => 33,
			'dex' => 8,
			'con' => 20,
			'int' => 5,
			'wis' => 8,
			'cha' => 16
		],// Stats
		1,// BAB (1=full, 0.75=3/4 or medium, 0.5=half or slow)
		[
			'bull rush' => 4
		],//CMB misc bonus and special cases
		[
			'bull rush' => 2,
			'trip' => 4
		],//CMD misc bonus and special cases
		[
			'Cornugon Smash',
			'Greater Bull Rush*',
			'Improved Bull Rush*',
			'Improved Initiative*',
			'Intimidating Prowess*',
			'Power Attack*',
			'Scent of Fear',
			'note' => '/rr/Feats marked with * are already included in the creature\'s statistics.'
		],// Feats
		[
			[
				'skill' => 'Intimidate',
				'stat' => 'cha',
				'bonus' => 13+11
			]
		],// Skills
		[
			'Illager'
		],// Languages
		'ravaging wake',// Special Qualities
		'any',// Environment
		'solitary, pair, pack (3-4)',// Organization
		'standard (+3 heavy fortification full plate barding, exotic military saddle, bit and bridle)',// Treasure
		[
			[
				'name' => 'Ravaging Wake',
				'type' => 'Ex',
				'desc' => 'Ravagers are particularly skilled at trampling and destroying crops and other plants. Ravagers crush any plant life in their squares removing difficult terrain from plants and ending effects such as ii/entangle/ii in those squares.'
			],
			[
				'name' => 'Roar',
				'type' => 'Ex',
				'desc' => 'Ravagers can unleash a mighty roar as a standard action. All creatures in a 60 foot cone in front of the ravager take 13d6 points of sonic damage, are thrown 15 feet away from the ravager, and knocked prone. Affected creatures can make a DC 19 fortitude save. This save is charisma based. If they succeed, they take half damage, are thrown back 5 feet and are not prone. Ravagers must wait 1d4 rounds before they can use their roar again.'
			]
		],// Special Abilities
		$desc=''// Description
	);
	require $startDir.'pageEnd.php';
?>