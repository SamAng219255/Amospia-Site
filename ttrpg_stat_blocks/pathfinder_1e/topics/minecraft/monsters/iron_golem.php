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
<title>Iron Guard</title>
<?php
	monsterBlockAuto(
		'Iron Guard',// name
		'Iron Golem',// alt name
		'This construct has a humanoid build with wide shoulders. A small green vine hangs from its shoulder having grown there during the golems\'s long vigil.',// lore text
		10,// CR
		false,// MR
		false,// Custom XP
		'',// Race
		[],// Class
		'N',// Alignment
		'Large',// Size
		'construct',// Type
		0,// Misc Initiative Mod
		false,// Mythic Initiative
		'darkvision 60 ft., low-light vision',// Senses
		0,// Misc Perception Mod
		'',// Aura
		[
			'natural' => 16
		],// Misc AC bonuses
		[13,10,30],// Number of hit dice, Hit dice size, <additional hp bonus>, <hp notes (fast healing/regen/etc)>
		[
			[
				'good' => false,
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
		'sturdy construction; bb/DR/bb 15/adamantine; bb/Immune/bb construct traits, magic',// Defensive Abilities
		'',// Weaknesses
		'20 ft.',// Speed
		[
			[
				'type' => 'Melee',
				'list' => [
					[
						'name' => 'slam',
						'mod' => -4,
						'stat' => 'str',
						'damage' => '1d8+25 plus throw'
					]
				]
			]
		],// Attacks
		10,// Reach
		'throw',// Special Attacks
		[],// Spell-like Abilities
		[],// Spell Casting
		'',// Spell Casting Note
		[
			'str' => 28,
			'dex' => 8,
			'con' => 'non',
			'int' => 2,
			'wis' => 2,
			'cha' => 2
		],// Stats
		1,// BAB (1=full, 0.75=3/4 or medium, 0.5=half or slow)
		0,//CMB misc bonus and special cases
		0,//CMD misc bonus and special cases
		[
			'Cleave',
			'Combat Reflexes',
			'Furious Focus',
			'Great Cleave',
			'Improved Natural Attack*',
			'Power Attack*',
			'Wild Flanking',
			'note' => '/rr/Feats marked with * are already included in the creature\'s statistics.'
		],// Feats
		[
			[
				'skill' => 'Perception',
				'stat' => 'wis',
				'bonus' => 13
			]
		],// Skills
		[],// Languages
		'',// Special Qualities
		'any',// Environment
		'solitary, pair, squad (3-8)',// Organization
		'none',// Treasure
		[
			[
				'name' => 'Immunity to Magic',
				'type' => 'Ex',
				'desc' => 'An iron guard is immune to spells or spell-like abilities that allow spell resistance. Certain spells and effects function differently against it, as noted below.
					• Spells that cause plants to grow restore 1d6 points of damage to the golem per level of the spell.
					• An iron guard is affected normally by rust attacks, such as those of a rust monster or a rusting grasp spell.'
			],
			[
				'name' => 'Sturdy Construction',
				'type' => 'Ex',
				'desc' => 'Iron guards are built to take a beating and to lift heavy weights. Iron guards can lift the normal amount for their strength and are unaffected by penalties from encumbrance. Iron guards also do not take any damage from falling and are never prone after falling.'
			],
			[
				'name' => 'Throw',
				'type' => 'Ex',
				'desc' => 'When an iron golem makes a slam attack with its arms, it may make a special combat maneuver as a free action. If the golem\'s result beats the target of the slam\'s CMD, the target is thrown 20 feat into the air. This height increases by 5 for every 5 by which the golem beat the target\'s CMD.'
			]
		],// Special Abilities
		$desc=''// Description
	);
	require $startDir.'pageEnd.php';
?>