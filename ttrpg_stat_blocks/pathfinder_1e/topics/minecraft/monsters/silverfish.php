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
<title>Silverfish</title>
<?php
	monsterBlockAuto(
		'Greater Silverfish',// name
		'Silverfish',// alt name
		'This large gray insect is shaped similar to a fat maggot but has a hard shell composed of segmented plates with many hair-like structures growing off of them.',// lore text
		'1/2',// CR
		false,// MR
		false,// Custom XP
		'',// Race
		[],// Class
		'N',// Alignment
		'Tiny',// Size
		'vermin (arthropod)',// Type
		0,// Misc Initiative Mod
		false,// Mythic Initiative
		'darkvision 60 ft., tremorsense 15 ft.',// Senses
		0,// Misc Perception Mod
		'',// Aura
		[],// Misc AC bonuses
		[1,8],// Number of hit dice, Hit dice size, <additional hp bonus>, <hp notes (fast healing/regen/etc)>
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
		'',// Defensive Abilities
		'',// Weaknesses
		'30 ft., burrow 30 ft.',// Speed
		[
			[
				'type' => 'Melee',
				'list' => [
					[
						'name' => 'bite',
						'mod' => 0,
						'stat' => 'str',
						'damage' => '1d3+1'
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
			'str' => 13,
			'dex' => 9,
			'con' => 22,
			'int' => 0,
			'wis' => 8,
			'cha' => 2
		],// Stats
		0.75,// BAB (1=full, 0.75=3/4 or medium, 0.5=half or slow)
		0,//CMB misc bonus and special cases
		[
			'trip' => 8
		],//CMD misc bonus and special cases
		[],// Feats
		[],// Skills
		[],// Languages
		'',// Special Qualities
		'any',// Environment
		'solitary',// Organization
		'none',// Treasure
		[],// Special Abilities
		$desc=''// Description
	);
	require $startDir.'pageEnd.php';
?>