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
<title>Vex</title>
<?php
	monsterBlockAuto(
		'Vex',// name
		false,// alt name
		'The malevolent grin of this small pale spirit sends chills down your spine. It has a humanoid torso, head and, arms but fades to trailing mist below that. It possesses a pair of ragged wings though they seem to have little influence on its actual locomotion.',// lore text
		4,// CR
		false,// MR
		false,// Custom XP
		'',// Race
		[],// Class
		'NE',// Alignment
		'Tiny',// Size
		'outsider (extraplanar, incorporeal)',// Type
		0,// Misc Initiative Mod
		false,// Mythic Initiative
		'darkvision 60 ft., soulsense 60 ft.',// Senses
		0,// Misc Perception Mod
		'',// Aura
		[
			'deflection' => 2
		],// Misc AC bonuses
		[5,10],// Number of hit dice, Hit dice size, <additional hp bonus>, <hp notes (fast healing/regen/etc)>
		[
			[
				'good' => false,
				'mod' => 0
			],
			[
				'good' => true,
				'mod' => 0
			],
			[
				'good' => true,
				'mod' => 0
			]
		],// Fortitude/Reflex/Will save good/bad and misc bonuses
		'incorporeal',// Defensive Abilities
		'',// Weaknesses
		'fly 30 ft. (perfect)',// Speed
		[
			[
				'type' => 'Melee',
				'list' => [
					[
						'name' => 'spectral blade',
						'mod' => -2,
						'stat' => 'dex',
						'damage' => '1d8+10'
					]
				]
			]
		],// Attacks
		0,// Reach
		'',// Special Attacks
		[],// Spell-like Abilities
		[],// Spell Casting
		'',// Spell Casting Note
		[
			'str' => 'dex',
			'dex' => 16,
			'con' => 16,
			'int' => 10,
			'wis' => 10,
			'cha' => 15
		],// Stats
		1,// BAB (1=full, 0.75=3/4 or medium, 0.5=half or slow)
		0,//CMB misc bonus and special cases
		0,//CMD misc bonus and special cases
		[
			'Combat Reflexes',
			'Flyby Attack',
			'Power Attack*',
			'note' => 'Feats marked with * are already included in the creature\'s statistics.'
		],// Feats
		[
			[
				'skill' => 'Bluff',
				'stat' => 'dex',
				'bonus' => 8
			],
			[
				'skill' => 'Fly',
				'stat' => 'dex',
				'bonus' => 8
			],
			[
				'skill' => 'Knowledge (planes)',
				'stat' => 'int',
				'bonus' => 8
			],
			[
				'skill' => 'Perception',
				'stat' => 'wis',
				'bonus' => 8
			],
			[
				'skill' => 'Sense Motive',
				'stat' => 'Wis',
				'bonus' => 8
			],
			[
				'skill' => 'Stealth',
				'stat' => 'dex',
				'bonus' => 8
			]
		],// Skills
		[
			'Illager'
		],// Languages
		'',// Special Qualities
		'any',// Environment
		'solitary, flight (3)',// Organization
		'none',// Treasure
		[
			[
				'name' => 'Soulsense',
				'type' => 'Ex',
				'desc' => 'Vex sense the presence of nearby souls and can discern between them. This sense allows the vex to see any creature with a soul as with blindsense except that it extends through barriers allowing the vex to see the position of a creature through a wall or other obstruction.'
			],
			[
				'name' => 'Spectral Blade',
				'type' => 'Su',
				'desc' => 'Vex are able to manifest a blade from their essence that can be used to strike at corporeal creatures. This blade is wielded in two hands and deals 1d8 points of slashing damage and can interact with both corporeal and incorporeal matter though it only interacts with matter possessing a sufficient animated force. This blade can damage living, undead, and constructed creatures but passes through non-creature plants, rocks, and armor. Attacks with this blade ignore armor and shield bonuses (including any enhancement bonuses to that armor) as well as bonuses to AC from cover as the blade simply passes through it.'
			]
		],// Special Abilities
		$desc=''// Description
	);
	require $startDir.'pageEnd.php';
?>