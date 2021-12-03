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
<title>Snow Golem</title>
<?php
	monsterBlockAuto(
		'Snow Golem',// name
		false,// alt name
		'This animated snowman has a pumpkin for a head.',// lore text
		'1/3',// CR
		false,// MR
		false,// Custom XP
		'',// Race
		[],// Class
		'N',// Alignment
		'Medium',// Size
		'construct',// Type
		0,// Misc Initiative Mod
		false,// Mythic Initiative
		'darkvision 60 ft., low-light vision',// Senses
		0,// Misc Perception Mod
		'',// Aura
		[],// Misc AC bonuses
		[1,10,20],// Number of hit dice, Hit dice size, <additional hp bonus>, <hp notes (fast healing/regen/etc)>
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
		'bb/Immune/bb construct traits, cold, magic',// Defensive Abilities
		'vulnerability to fire, vulnerability to heat, vulnerability to water',// Weaknesses
		'20 ft.',// Speed
		[
			[
				'type' => 'Ranged',
				'list' => [
					[
						'name' => 'snowball',
						'mod' => 0,
						'stat' => 'dex',
						'damage' => '1-2 nonlethal cold'
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
			'str' => 7,
			'dex' => 16,
			'con' => 'non',
			'int' => 0,
			'wis' => 2,
			'cha' => 2
		],// Stats
		1,// BAB (1=full, 0.75=3/4 or medium, 0.5=half or slow)
		0,//CMB misc bonus and special cases
		0,//CMD misc bonus and special cases
		[
			'Point-Blank Shot ss/B/ss',
			'Precise Shot ss/B/ss'
		],// Feats
		[],// Skills
		[],// Languages
		'',// Special Qualities
		'any (Snowy)',// Environment
		'solitary, pair, squad (3-8)',// Organization
		'none',// Treasure
		[
			[
				'name' => 'Heat Vulnerability',
				'type' => 'Ex',
				'desc' => 'Snow golems are not immune to effects from hot conditions and automatically fail any asociated fortitude saves. In addition, damage taken from hot conditions is treated as lethal fire damage.'
			],
			[
				'name' => 'Immunity to Magic',
				'type' => 'Ex',
				'desc' => 'A snow golem is immune to spells or spell-like abilities that allow spell resistance. Certain spells and effects function differently against it, as noted below.
					• Spells that deal fire damage function normally against a snow golem except they deal half damage.
					• Spells that deal cold damage heal the snow golem instead by half the spell\'s damage.'
			],
			[
				'name' => 'Snowball',
				'type' => 'Su',
				'desc' => 'Snow golems can conjure and throw snowballs. These snowballs are generally harmless. If a creature who is weak to cold or water is struck by a snowball, they instead take 1d4 cold damage.'
			],
			[
				'name' => 'Snow Trail',
				'type' => 'Su',
				'desc' => 'So long as snow golems are in an area less than 90°, they leave a trail of snow in any square they enter approximately 5 inches deep. This snow melts at the normal rate after the golem leaves the space, but does not turn to water. Instead it evaporates away leaving nothing behind. Any non-construct creature not adapted to cold enviroments and not wearing sturdy boots treats this snow as difficult terrain.'
			],
			[
				'name' => 'Water Vulnerability',
				'type' => 'Ex',
				'desc' => 'Snow golems take 1d6 points of damage each round they are in contact with water and splashing them with water deals 1d4 points of damage. Snow golems take 10d6 points of damage each round instead if they are fully submerged in water.'
			]
		],// Special Abilities
		$desc=''// Description
	);
	require $startDir.'pageEnd.php';
?>