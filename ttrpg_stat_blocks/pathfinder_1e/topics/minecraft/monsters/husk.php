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
<title>Husk</title>
<?php
	monsterBlockAuto(
		'Husk',// name
		false,// alt name
		'A shambling, desiccated, corpse lumbers in your direction.',// lore text
		2,// CR
		false,// MR
		false,// Custom XP
		'zombified human',// Race
		[
			'warrior' => 3
		],// Class
		'NE',// Alignment
		'Medium',// Size
		'undead',// Type
		0,// Misc Initiative Mod
		false,// Mythic Initiative
		'darkvision 60ft.',// Senses
		0,// Misc Perception Mod
		'',// Aura
		[
			'armor' => 3,
			'natural' => 2
		],// Misc AC bonuses
		[3,10,3],// Number of hit dice, Hit dice size, <additional hp bonus>, <hp notes (fast healing/regen/etc)>
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
		'20 ft.',// Speed
		[
			[
				'type' => 'Melee',
				'list' => [
					[
						'name' => 'bite',
						'mod' => 0,
						'stat' => 'str',
						'damage' => '1d6+4 plus desiccating touch'
					]
				]
			]
		],// Attacks
		5,// Reach
		'desiccating touch',// Special Attacks
		[],// Spell-like Abilities
		[],// Spell Casting
		'',// Spell Casting Note
		[
			'str' => 17,
			'dex' => 9,
			'con' => 'cha',
			'int' => 0,
			'wis' => 10,
			'cha' => 12
		],// Stats
		1,// BAB (1=full, 0.75=3/4 or medium, 0.5=half or slow)
		0,//CMB misc bonus and special cases
		0,//CMD misc bonus and special cases
		[
			'Toughness ss/B/ss'
		],// Feats
		[],// Skills
		[],// Languages
		'staggered',// Special Qualities
		'any',// Environment
		'any',// Organization
		'none (broken chainmail)',// Treasure
		[
			[
				'name' => 'Desiccating Touch',
				'type' => 'Su',
				'desc' => 'Any creature hit by one of a husk\'s natural attacks must make a fortitude save with a DC equal to 10 plus half the husk\'s HD plus the husk\'s charisma modifier. If the creature fails the save it becomes fatigued and grows hungry and thirsty, requiring half again the normal amount of food and water for that day. If the creature fails the save against the attack a second time, the additional food and water requirement stacks, adding half again as much food and water as normal needed for each failure. Creatures of the water or aquatic subtypes take 1d6 desiccating damage from this ability regardless of the save. A husk can also deliver the effects of their desiccating touch by making a melee touch attack as a standard action.'
			],
			[
				'name' => 'Staggered',
				'type' => 'Ex',
				'desc' => 'Husks have poor reflexes and can only perform a single move action or standard action each round. A zombie can move up to its speed and attack in the same round as a charge action.'
			]
		],// Special Abilities
		''// Description
	);
	require $startDir.'pageEnd.php';
?>