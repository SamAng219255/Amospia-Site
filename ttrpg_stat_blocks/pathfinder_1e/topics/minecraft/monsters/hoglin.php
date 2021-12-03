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
<title>Hoglin</title>
<?php
	monsterBlockAuto(
		'Hoglin',// name
		false,// alt name
		'This large boar leans forward, revealing the row of dark bristles down its back, before charging and swinging its sharp tusks.',// lore text
		5,// CR
		false,// MR
		false,// Custom XP
		'',// Race
		[],// Class
		'N',// Alignment
		'Large',// Size
		'animal (extraplanar)',// Type
		4,// Misc Initiative Mod
		false,// Mythic Initiative
		'low-light vision',// Senses
		0,// Misc Perception Mod
		'',// Aura
		[
			'natural' => 10
		],// Misc AC bonuses
		[7,8],// Number of hit dice, Hit dice size, <additional hp bonus>, <hp notes (fast healing/regen/etc)>
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
		'ferocity',// Defensive Abilities
		'',// Weaknesses
		'40 ft.',// Speed
		[
			[
				'type' => 'Melee',
				'list' => [
					[
						'name' => 'slam',
						'mod' => -1,
						'stat' => 'str',
						'damage' => '1d6+8 plus push'
					],
					[
						'name' => 'gore',
						'mod' => -1,
						'stat' => 'str',
						'damage' => '1d8+8 plus push'
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
			'str' => 23,
			'dex' => 8,
			'con' => 14,
			'int' => 2,
			'wis' => 14,
			'cha' => 2
		],// Stats
		0.75,// BAB (1=full, 0.75=3/4 or medium, 0.5=half or slow)
		[
			'bull rush' => 8,
			'overrun' => 2
		],//CMB misc bonus and special cases
		[
			'overrun' => 6,
			'trip' => 4
		],//CMD misc bonus and special cases
		[
			'Charge Through',
			'Improved Initiative*',
			'Improved Overrun*',
			'Power Attack*',
			'note' => 'Feats marked with * are already included in the creature\'s statistics.'
		],// Feats
		[
			[
				'skill' => 'Survival',
				'stat' => 'wis',
				'bonus' => 7
			]
		],// Skills
		[],// Languages
		'',// Special Qualities
		'The Nether (Crimson Forests)',// Environment
		'solitary, pair, pack (3-4), herd (4-8)',// Organization
		'none',// Treasure
		[
			[
				'name' => 'Blood Rage',
				'type' => 'Ex',
				'desc' => 'When a hoglin takes damage in combat, it can fly into a rage as a free action on its next turn.
				It gains a +2 bonus to Strength and Constitution, and it takes a –2 penalty to its AC. The rage lasts as long as the battle or 1 minute, whichever is less. It cannot end its rage voluntarily.'
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