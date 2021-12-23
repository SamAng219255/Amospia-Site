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
<title>Skeletal Horse</title>
<?php
	monsterBlockAuto(
		'Skeletal Horse',// name
		false,// alt name
		'',// lore text
		2,// CR
		false,// MR
		false,// Custom XP
		'',// Race
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
		'bb/DR/bb 5/bludgeoning; bb/Immune/bb undead traits',// Defensive Abilities
		'',// Weaknesses
		'50 ft.',// Speed
		[
			[
				'type' => 'Melee',
				'list' => [
					[
						'name' => 'bite',
						'mod' => 0,
						'stat' => 'str',
						'damage' => '1d4+5'
					],
					[
						'name' => '2 hooves',
						'mod' => -5,
						'stat' => 'str',
						'damage' => '1d6+2'
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
			'dex' => 20,
			'con' => 'cha',
			'int' => 04,
			'wis' => 17,
			'cha' => 11
		],// Stats
		0.75,// BAB (1=full, 0.75=3/4 or medium, 0.5=half or slow)
		0,//CMB misc bonus and special cases
		[
			'trip' => 4
		],//CMD misc bonus and special cases
		[
			'Endurance',
			'Improved Initiative ss/B/ss',
			'Run ss/B/ss'
		],// Feats
		[
			[
				'skill' => 'Perception',
				'stat' => 'dex',
				'bonus' => 5
			]
		],// Skills
		[
			'Necril'
		],// Languages
		'',// Special Qualities
		'any',// Environment
		'any',// Organization
		'none',// Treasure
		[],// Special Abilities
		$desc='Skeletal horses are mean creatures that, while mostly retaining their animalistic nature, are more intelligent than regular horses and are known to respect power in the form of combat ability. A skeletal horse will generally only allow a creaure to ride it if they have defeated the horse\'s previous rider.'// Description
	);
	require $startDir.'pageEnd.php';
?>