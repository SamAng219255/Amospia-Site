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
		'Bogged',// name
		false,// alt name
		'Rising from the detritus and muck of the swamp comes a skeletal figure covered in scraps of decaying mummified flesh.',// lore text
		3,// CR
		false,// MR
		false,// Custom XP
		'human bogged skeleton',// Race
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
		[6,10],// Number of hit dice, Hit dice size, <additional hp bonus>, <hp notes (fast healing/regen/etc)>
		[
			[
				'good' => true,
				'mod' => 0
			],
			[
				'good' => false,
				'mod' => 0
			],
			[
				'good' => false,
				'mod' => 0
			]
		],// Fortitude/Reflex/Will save good/bad and misc bonuses
		'bravery +1; bb/DR/bb 5/bludgeoning; bb/Immune/bb undead traits',// Defensive Abilities
		'bogged, sunlight flammability',// Weaknesses
		'30 ft.',// Speed
		[
			[
				'type' => 'Melee',
				'list' => [
					[
						'name' => '2 claws',
						'mod' => 0,
						'stat' => 'str',
						'damage' => '1d4+2 plus poison'
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
						'damage' => '1d8+3/x3 plus poison'
					]
				]
			]
		],// Attacks
		5,// Reach
		'poison, weapon training (bows +1)',// Special Attacks
		[],// Spell-like Abilities
		[],// Spell Casting
		'',// Spell Casting Note
		[
			'str' => 14,
			'dex' => 21,
			'con' => 'cha',
			'int' => 0,
			'wis' => 8,
			'cha' => 8
		],// Stats
		1,// BAB (1=full, 0.75=3/4 or medium, 0.5=half or slow)
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
				'name' => 'Bogged',
				'type' => 'Ex',
				'desc' => 'A bogged is covered with fungus, algae, moss, mud, and other swamp detritus that slows its movements. They are always considered staggered.'
			],
			[
				'name' => 'Noxious Muck',
				'desc' => 'injury; save Fort DC 10 + ½ the bogged\'s number of hit dice + their Charisma modifier, frequency 1/round for 6 rounds, effect 1d4 damage and 1d3 Dex damage, cure 2 consecutive saves'
			],
			[
				'name' => 'Sunlight Flammability',
				'type' => 'Ex',
				'desc' => 'When exposed to direct sunlight, skeletons burst into flame and take 1 point of fire damage per hit dice every round until they die. At which point their body burns to ash and is completely destroyed. If the skeleton gets out of the sunlight before it dies, it is still on fire and will continue to take 1d6 points of fire damage, to a maximum of its number of hit dice, each round until it is extinguished. Skeletons count as being vulnerable to sunlight and bright light for the purpose of being affected by spells and abilities.'
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