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
<title>Zoglin</title>
<?php
	monsterBlockAuto(
		'Zoglin',// name
		false,// alt name
		'This large, rotting boar leans forward, revealing several more patches of rotting flesh down its back, before charging and swinging its gory tusks.',// lore text
		5,// CR
		false,// MR
		false,// Custom XP
		'',// Race
		[],// Class
		'NE',// Alignment
		'Large',// Size
		'undead (extraplanar)',// Type
		0,// Misc Initiative Mod
		false,// Mythic Initiative
		'low-light vision',// Senses
		0,// Misc Perception Mod
		'',// Aura
		[
			'natural' => 13
		],// Misc AC bonuses
		[8,8,8],// Number of hit dice, Hit dice size, <additional hp bonus>, <hp notes (fast healing/regen/etc)>
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
		'ferocity; bb/DR/bb 5/slashing; bb/Immune/bb fire, undead traits',// Defensive Abilities
		'',// Weaknesses
		'30 ft.',// Speed
		[
			[
				'type' => 'Melee',
				'list' => [
					[
						'name' => 'slam',
						'mod' => -1,
						'stat' => 'str',
						'damage' => '1d8+7 plus push'
					],
					[
						'name' => 'gore',
						'mod' => -1,
						'stat' => 'str',
						'damage' => '1d8+7 plus push'
					]
				]
			]
		],// Attacks
		10,// Reach
		'blood rage, powerful charge (gore, 2d8+11), push (slam or gore, 10 feet), sure-footed charge',// Special Attacks
		[],// Spell-like Abilities
		[],// Spell Casting
		'',// Spell Casting Note
		[
			'str' => 25,
			'dex' => 6,
			'con' => 'cha',
			'int' => 2,
			'wis' => 14,
			'cha' => 12
		],// Stats
		0.75,// BAB (1=full, 0.75=3/4 or medium, 0.5=half or slow)
		0,//CMB misc bonus and special cases
		[
			'trip' => 4
		],//CMD misc bonus and special cases
		[
			'Toughness'
		],// Feats
		[],// Skills
		[],// Languages
		'',// Special Qualities
		'The Nether',// Environment
		'any',// Organization
		'none',// Treasure
		[
			[
				'name' => 'Blood Rage',
				'type' => 'Ex',
				'desc' => 'When a hoglin takes damage in combat, it can fly into a rage as a free action on its next turn.
				It gains a +2 bonus to Strength and Charima, and it takes a –2 penalty to its AC. The rage lasts as long as the battle or 1 minute, whichever is less. It cannot end its rage voluntarily.'
			],
			[
				'name' => 'Sure-Footed Charge',
				'type' => 'Ex',
				'desc' => 'Hoglins are accustomed to barrelling through the rugged terrain of the nether and are able to ignore difficult terrain while charging, running, or withdrawing. They can also charge through squares that contain allies.'
			]
		],// Special Abilities
		$desc=''// Description
	);
	require $startDir.'pageEnd.php';
?>