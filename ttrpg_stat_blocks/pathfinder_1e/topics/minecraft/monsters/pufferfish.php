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
<title>Pufferfish</title>
<?php
	monsterBlockAuto(
		'Pufferfish',// name
		false,// alt name
		'This bright yellow fish blows up like balloon as you approach, its surface is covered in spines.',// lore text
		1,// CR
		false,// MR
		false,// Custom XP
		'',// Race
		[],// Class
		'N',// Alignment
		'Tiny',// Size
		'animal (aquatic)',// Type
		0,// Misc Initiative Mod
		false,// Mythic Initiative
		'low-light vision',// Senses
		0,// Misc Perception Mod
		'',// Aura
		[],// Misc AC bonuses
		[2,8,3],// Number of hit dice, Hit dice size, <additional hp bonus>, <hp notes (fast healing/regen/etc)>
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
		'spines',// Defensive Abilities
		'',// Weaknesses
		'swim 40 ft.',// Speed
		[
			[
				'type' => 'Melee',
				'list' => [
					[
						'name' => 'slam',
						'mod' => 0,
						'stat' => 'str',
						'damage' => '1d2-5 plus poison'
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
			'str' => 2,
			'dex' => 14,
			'con' => 9,
			'int' => 2,
			'wis' => 13,
			'cha' => 3
		],// Stats
		0.75,// BAB (1=full, 0.75=3/4 or medium, 0.5=half or slow)
		0,//CMB misc bonus and special cases
		0,//CMD misc bonus and special cases
		[
			'toughness'
		],// Feats
		[
			[
				'skill' => 'Swim',
				'stat' => 'str',
				'bonus' => 5
			]
		],// Skills
		[],// Languages
		'',// Special Qualities
		'warm oceans',// Environment
		'solitary, pair, school (3-8)',// Organization
		'none',// Treasure
		[
			[
				'name' => 'Poison',
				'type' => 'Ex',
				'desc' => 'Spines—injury; save Fort DC 12; frequency 1/round for 6 rounds; effect 1d6 nonlethal poison damage; cure 2 saves. Save DC is Con-based with a +3 racial bonus.'
			],
			[
				'name' => 'Spines',
				'type' => 'Ex',
				'desc' => 'Any creature within 5 feet of a pufferfish at the end of their turn must make a DC 9 reflex save or be subject to the pufferdishe\'s poison. If the creature is on the same square as the pufferfish, this DC increases 12. Any creature making a natural attack or combat maneuver, without using a weapon, against a pufferfish is automatically subjected to the poison.'
			]
		],// Special Abilities
		$desc=''// Description
	);
	require $startDir.'pageEnd.php';
?>