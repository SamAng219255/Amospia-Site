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
		'Camel Husk',// name
		false,// alt name
		'The shambling dessicated corpse of a camel lumbers aimlessly in the desert sands, hardly noticing your presence.',// lore text
		'1/2',// CR
		false,// MR
		false,// Custom XP
		'camel husk',// Race
		[],// Class
		'NE',// Alignment
		'Large',// Size
		'undead',// Type
		0,// Misc Initiative Mod
		false,// Mythic Initiative
		'low-light vision, scent',// Senses
		0,// Misc Perception Mod
		'',// Aura
		[
			'natural' => 4
		],// Misc AC bonuses
		[2,8],// Number of hit dice, Hit dice size, <additional hp bonus>, <hp notes (fast healing/regen/etc)>
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
		'bb/DR/bb 5/slashing; bb/Immune/bb undead traits',// Defensive Abilities
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
						'damage' => '1d8+6'
					]
				]
			]
		],// Attacks
		5,// Reach
		'dessicating touch',// Special Attacks
		[],// Spell-like Abilities
		[],// Spell Casting
		'',// Spell Casting Note
		[
			'str' => 20,
			'dex' => 14,
			'con' => 'cha',
			'int' => 0,
			'wis' => 11,
			'cha' => 10
		],// Stats
		0.75,// BAB (1=full, 0.75=3/4 or medium, 0.5=half or slow)
		0,//CMB misc bonus and special cases
		[
			'trip' => +4
		],//CMD misc bonus and special cases
		[
			'Toughness ss/B/ss'
		],// Feats
		[],// Skills
		[],// Languages
		'staggered',// Special Qualities
		'any',// Environment
		'any',// Organization
		'none',// Treasure
		[
			[
				'name' => 'Desiccating Touch',
				'type' => 'Su',
				'desc' => 'Any creature hit by one of a husk\'s natural attacks must make a DC 11 Fortitude save. If the creature fails the save it becomes fatigued and grows hungry and thirsty, requiring half again the normal amount of food and water for that day. If the creature fails the save against the attack a second time, the additional food and water requirement stacks, adding half again as much food and water as normal needed for each failure. Creatures of the water or aquatic subtypes take 1d6 untyped damage from this ability regardless of the save. A husk can also deliver the effects of their desiccating touch by making a melee touch attack as a standard action.'
			],
			[
				'name' => 'Staggered',
				'type' => 'Ex',
				'desc' => 'Husks have poor reflexes and can only perform a single move action or standard action each round. A husk can move up to its speed and attack in the same round as a charge action.'
			]
		],// Special Abilities
		'',// Description
		[]
	);
	require $startDir.'pageEnd.php';
?>