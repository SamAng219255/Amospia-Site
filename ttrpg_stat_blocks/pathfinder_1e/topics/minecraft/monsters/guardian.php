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
<title>Guardian</title>
<?php
	monsterBlockAuto(
		'Guardian',// name
		false,// alt name
		'The front of this creature is dominated by a single massive eye. Cyan scales cover its surface leading to a powerful tail. Bright orange spikes extend outward from the body of the creature in every direction dissuading would be attackers.',// lore text
		4,// CR
		false,// MR
		false,// Custom XP
		'',// Race
		[],// Class
		'N',// Alignment
		'Medium',// Size
		'aberration (aquatic)',// Type
		0,// Misc Initiative Mod
		false,// Mythic Initiative
		'darkvision 120 ft., truesight',// Senses
		0,// Misc Perception Mod
		'',// Aura
		[
			'dodge' => 1,
			'natural' => 3
		],// Misc AC bonuses
		[5,8],// Number of hit dice, Hit dice size, <additional hp bonus>, <hp notes (fast healing/regen/etc)>
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
				'good' => true,
				'mod' => 0
			]
		],// Fortitude/Reflex/Will save good/bad and misc bonuses
		'spikes',// Defensive Abilities
		'',// Weaknesses
		'swim 60 ft.',// Speed
		[
			[
				'type' => 'Melee',
				'list' => [
					[
						'name' => 'slam',
						'mod' => 0,
						'stat' => 'str',
						'damage' => '1d4+1'
					]
				]
			]
		],// Attacks
		5,// Reach
		'eye beam',// Special Attacks
		[
			'level' => 4,
			'conc' => 0,
			'spells' => [
				[
					'perday' => 'constant',
					'list' => [
						'true sight'
					]
				]
			]
		],// Spell-like Abilities
		[],// Spell Casting
		'',// Spell Casting Note
		[
			'str' => 13,
			'dex' => 16,
			'con' => 18,
			'int' => 2,
			'wis' => 14,
			'cha' => 2
		],// Stats
		0.75,// BAB (1=full, 0.75=3/4 or medium, 0.5=half or slow)
		0,//CMB misc bonus and special cases
		[
			'notes' => 'cannot be tripped'
		],//CMD misc bonus and special cases
		[
			'Dodge',
			'Mobility',
			'Point-Blank Shot'
		],// Feats
		[
			[
				'skill' => 'Swim',
				'stat' => 'str',
				'bonus' => 16
			]
		],// Skills
		[],// Languages
		'amphibious',// Special Qualities
		'Ocean (Ocean Monuments)',// Environment
		'solitary, scouting party (2-4), squadron (5-16)',// Organization
		'none',// Treasure
		[
			[
				'name' => 'Eye Beam',
				'type' => 'Su',
				'desc' => 'Guardians can project a ray from their eye that can target a creature up to 140 feet away as a ranged touch attack. The guardian has a +6 bonus to hit with this ray. On a successful hit it deals 5d6 points of damage. This ray take a moment to charge up before dealing damage. A creature targetted by a guardian\'s eye ray can make a DC 15 reflex to move 5 feet. If their new position is not in line of sight from the guardian the ability fails and the target takes no damage.'
			],
			[
				'name' => 'Spikes',
				'type' => 'Ex',
				'desc' => 'Guardians are covered in brightly covered spikes that retract when they move. Anytime a creature makes a melee attack without a reach weapon against a guardian they must make a DC 20 reflex save or take 1d6 points of piercing damage. If the creature attacked with a natural weapon they automatically fail the save. Any creature in a grapple with a guardian also takes the same damage each round. Guardians do not benefit from this ability while they are moving.'
			]
		],// Special Abilities
		$desc=''// Description
	);
	echo '<br>';
	monsterBlockAuto(
		'Elder Guardian',// name
		'Guardian',// alt name
		'The front of this large creature is dominated by a single massive eye. Pale scales cover its surface leading to a powerful tail. Faded blue spikes extend outward from the body of the creature in every direction dissuading would be attackers.',// lore text
		8,// CR
		false,// MR
		false,// Custom XP
		'',// Race
		[],// Class
		'N',// Alignment
		'Large',// Size
		'aberration (aquatic)',// Type
		4,// Misc Initiative Mod
		false,// Mythic Initiative
		'darkvision 120 ft., truesight',// Senses
		15,// Misc Perception Mod
		'aura of fatigue',// Aura
		[
			'dodge' => 1,
			'natural' => 9
		],// Misc AC bonuses
		[12,8],// Number of hit dice, Hit dice size, <additional hp bonus>, <hp notes (fast healing/regen/etc)>
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
				'good' => true,
				'mod' => 0
			]
		],// Fortitude/Reflex/Will save good/bad and misc bonuses
		'spikes',// Defensive Abilities
		'',// Weaknesses
		'swim 60 ft.',// Speed
		[
			[
				'type' => 'Melee',
				'list' => [
					[
						'name' => 'slam',
						'mod' => 0,
						'stat' => 'str',
						'damage' => '1d6+5 plus 1d6 piercing'
					],
					[
						'name' => 'tail slap',
						'mod' => -5,
						'stat' => 'str',
						'damage' => '1d8+2'
					]
				]
			]
		],// Attacks
		10,// Reach
		'eye beam',// Special Attacks
		[
			'level' => 8,
			'conc' => 0,
			'spells' => [
				[
					'perday' => 'constant',
					'list' => [
						'true sight'
					]
				]
			]
		],// Spell-like Abilities
		[],// Spell Casting
		'',// Spell Casting Note
		[
			'str' => 21,
			'dex' => 14,
			'con' => 18,
			'int' => 10,
			'wis' => 16,
			'cha' => 12
		],// Stats
		0.75,// BAB (1=full, 0.75=3/4 or medium, 0.5=half or slow)
		0,//CMB misc bonus and special cases
		[
			'notes' => 'cannot be tripped'
		],//CMD misc bonus and special cases
		[
			'Dodge',
			'Improved Initiative',
			'Mobility',
			'Point-Blank Shot',
			'Precise Shot',
			'Weapon Focus (ray)'
		],// Feats
		[
			[
				'skill' => 'Knowledge (dungeoneering)',
				'stat' => 'int',
				'bonus' => 15
			],
			[
				'skill' => 'Perception',
				'stat' => 'wis',
				'bonus' => 15
			],
			[
				'skill' => 'Spellcraft',
				'stat' => 'int',
				'bonus' => 15
			],
			[
				'skill' => 'Swim',
				'stat' => 'str',
				'bonus' => 23
			]
		],// Skills
		[],// Languages
		'amphibious',// Special Qualities
		'Ocean (Ocean Monuments)',// Environment
		'solitary, council (3)',// Organization
		'incidental',// Treasure
		[
			[
				'name' => 'Aura of Fatigue',
				'type' => 'Su',
				'desc' => 'Elder guardians emit an aura that tires would be theives of the temples they guard. Any creature other than a guardian within 120 feet of an elder guardian becomes fatigued and slowed as the ii/slow/ii spell. Additionally, all affected creatures are weakened reducing their carrying capacity by half and making any melee attack (including sundering) against an object with hardness deal no damage.'
			],
			[
				'name' => 'Eye Beam',
				'type' => 'Su',
				'desc' => 'Guardians can project a ray from their eye that can target a creature up to 720 feet away as a ranged touch attack. The guardian has a +12 bonus to hit with this ray. On a successful hit it deals 10d6 points of damage. This ray take a moment to charge up before dealing damage. A creature targetted by a guardian\'s eye ray can make a DC 18 reflex to move 5 feet. If their new position is not in line of sight from the guardian the ability fails and the target takes no damage.'
			],
			[
				'name' => 'Spikes',
				'type' => 'Ex',
				'desc' => 'Guardians are covered in brightly covered spikes that retract when they move. Anytime a creature makes a melee attack without a reach weapon against a guardian they must make a DC 23 reflex save or take 2d6 points of piercing damage. If the creature attacked with a natural weapon they automatically fail the save. Any creature in a grapple with a guardian also takes the same damage each round. Guardians do not benefit from this ability while they are moving.'
			]
		],// Special Abilities
		$desc=''// Description
	);
	require $startDir.'pageEnd.php';
?>