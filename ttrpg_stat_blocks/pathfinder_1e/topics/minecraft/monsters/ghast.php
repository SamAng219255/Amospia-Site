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
<title>Ghast</title>
<?php
	monsterBlockAuto(
		'Ghast',// name
		false,// alt name
		'This large, pale, and bulbous entity floats aimlessly, a dozen or so tendrils hang down and sway forward and back. Its tear stained eyes are closed and an occasional eerie whimper can be heard escaping it that travels unnaturally far.',// lore text
		4,// CR
		false,// MR
		false,// Custom XP
		'Human',// Race
		[
			'petitioner' => ''
		],// Class
		'NE',// Alignment
		'Large',// Size
		'outsider (extraplanar)',// Type
		0,// Misc Initiative Mod
		false,// Mythic Initiative
		'darkvision 60 ft.',// Senses
		0,// Misc Perception Mod
		'',// Aura
		[
			'dodge' => 1,
			'natural' => 4
		],// Misc AC bonuses
		[5,10,5],// Number of hit dice, Hit dice size, <additional hp bonus>, <hp notes (fast healing/regen/etc)>
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
		'bb/Immune/bb mind-affecting effects',// Defensive Abilities
		'',// Weaknesses
		'fly 30 ft.',// Speed
		[
			[
				'type' => 'Melee',
				'list' => [
					[
						'name' => 'slam',
						'mod' => 0,
						'stat' => 'dex',
						'damage' => '1d6+4'
					]
				]
			]
		],// Attacks
		10,// Reach
		'ghast ball',// Special Attacks
		[],// Spell-like Abilities
		[],// Spell Casting
		'',// Spell Casting Note
		[
			'str' => 18,
			'dex' => 16,
			'con' => 15,
			'int' => 10,
			'wis' => 8,
			'cha' => 14
		],// Stats
		0.75,// BAB (1=full, 0.75=3/4 or medium, 0.5=half or slow)
		0,//CMB misc bonus and special cases
		[
			'notes' => 'can\'t be tripped'
		],//CMD misc bonus and special cases
		[
			'Dodge',
			'Toughness',
			'Point-Blank Shot'
		],// Feats
		[
			[
				'skill' => 'Bluff',
				'stat' => 'cha',
				'bonus' => 8
			],
			[
				'skill' => 'Fly',
				'stat' => 'dex',
				'bonus' => 8
			],
			[
				'skill' => 'Intimidate',
				'stat' => 'cha',
				'bonus' => 5
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
				'stat' => 'wis',
				'bonus' => 8
			]
		],// Skills
		[
			'Common',
			'Necril'
		],// Languages
		'',// Special Qualities
		'The Nether',// Environment
		'solitary',// Organization
		'none',// Treasure
		[
			[
				'name' => 'Ghast Ball',
				'type' => 'Ex',
				'desc' => 'The ghast blows an exploding ball of fire at a creature as a ranged touch attack with a wail as its red eyes open. Regardless of whether the attack hit, the target creature may make a DC 15 reflex save to deflect this ball of fire. If the creature fails the save the projectile impacts dealling 4d6 points of fire damage to all creatures within 5 feet. Affected creatures may make a DC 15 reflex save to halve the damage. If the attack roll hit the target takes an additional 1d6 points of damage regardless of the save. If the creature made the original reflex save to deflect the ghast ball, the creature may make a ranged touch attack with a range increment of 15 feet with the ghast ball with a -10 penalty to hit. On a miss, the ghast ball is launched in a random direction striking the first thing it encounters. The ghast ball can be redirected an unlimited number of times until it hits something. If the ghast ball hits the ghast that fired it, the ghast is immediately killed.'
			]
		],// Special Abilities
		$desc=''// Description
	);
	require $startDir.'pageEnd.php';
?>