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
		'Runebound Guardian',// name
		false,// alt name
		'This rune-covered stone statue, that resembles a tall wide-shouldered muscular elf wearing knightly armor, stands at attention, ready to draw their blade and serve their masters.',// lore text
		10,// CR
		false,// MR
		false,// Custom XP
		'',// Race
		[],// Class
		'N',// Alignment
		'Medium',// Size
		'construct',// Type
		4,// Misc Initiative Mod
		false,// Mythic Initiative
		'darkvision 60 ft., low-light vision',// Senses
		0,// Misc Perception Mod
		'',// Aura
		[
			'armor' => 13
		],// Misc AC bonuses
		[13,10,20],// Number of hit dice, Hit dice size, <additional hp bonus>, <hp notes (fast healing/regen/etc)>
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
		'moderate fortification (50%), reactionary pulse; bb/DR/bb 10/adamantine; bb/Immune/bb construct traits; bb/SR/bb 24',// Defensive Abilities
		'',// Weaknesses
		'20 ft.',// Speed
		[
			[
				'type' => 'Melee',
				'list' => [
					[
						'name' => '+5 Greatsword',
						'mod' => 3,
						'stat' => 'str',
						'damage' => '2d6+24/17-20',
						'iterative' => 0
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
			'str' => 20,
			'dex' => 12,
			'con' => 'non',
			'int' => 14,
			'wis' => 10,
			'cha' => 1
		],// Stats
		1,// BAB (1=full, 0.75=3/4 or medium, 0.5=half or slow)
		0,//CMB misc bonus and special cases
		0,//CMD misc bonus and special cases
		[
			'Cleave',
			'Cleaving Finish',
			'Improved Initiative*',
			'Great Cleave',
			'Greater Weapon Focus*',
			'Power Attack*',
			'Weapon Focus* (Greatsword)',
			'note' => '/rr/Feats marked with * are already included in the creature\'s statistics.'
		],// Feats
		[
			[
				'skill' => 'Acrobatics',
				'stat' => 'dex',
				'bonus' => 7
			],
			[
				'skill' => 'Climb',
				'stat' => 'str',
				'bonus' => 7
			],
			[
				'skill' => 'Percpetion',
				'stat' => 'wis',
				'bonus' => 13
			],
			[
				'skill' => 'Stealth',
				'stat' => 'dex',
				'bonus' => 7
			]
		],// Skills
		[
			'Common',
			'Idgyptian',
			'Narman' 
		],// Languages
		're-animatable, tight formation',// Special Qualities
		'any',// Environment
		'solitary, pair, escort (3–4), or squad (5–16)',// Organization
		'none (ii/+4 fortification (moderate) stoneplate/ii, ii/+5 keen fortuitous greatsword/ii)',// Treasure
		[
			[
				'name' => 'Re-Animatable',
				'type' => 'Ex',
				'desc' => 'Casting ii/animate objects/ii on the Runebound Guardian restores the construct to full hit points, removes all negative status effects, and automatically dispels all mind-affecting and slowing spells on the guardian.
				If the guardian has been destroyed and ii/make whole/ii is cast on the remains by a caster of at least 10th level, they will be fully restored, though still at 0 hit points, at which point ii/animate objects/ii can be used to restore it to full points.'
			],
			[
				'name' => 'Reactionary Pulse',
				'type' => 'Su',
				'desc' => 'If a runebound guardian take at least 1 point of damage, their runes release a pulse of disruptive energy that deals 6d6 points of damage to all creatures within 10 feet, with a fortitude save for half.'
			],
			[
				'name' => 'Tight Formation',
				'type' => 'Ex',
				'desc' => 'Despite being medium, a pair or runebound guardians are able to fit into one square without squeezing by falling into a tight formation. While in this formation, their CMD is treated as being 10 higher and, if both the duardians in the square attack the same target, are treated as flanking that target as though they were on opposite sides of them.'
			]
		],// Special Abilities
		$desc=''// Description
	);
	require $startDir.'pageEnd.php';
?>