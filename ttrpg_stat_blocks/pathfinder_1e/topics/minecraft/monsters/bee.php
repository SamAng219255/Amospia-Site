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
<title>Dire Bee</title>
<?php
	monsterBlockAuto(
		'Dire Bee',// name
		'Bee',// alt name
		'This massive bumblebee lazily floats along in search of flowers.',// lore text
		4,// CR
		false,// MR
		false,// Custom XP
		'',// Race
		[],// Class
		'N',// Alignment
		'Tiny',// Size
		'vermin (arthropod)',// Type
		0,// Misc Initiative Mod
		false,// Mythic Initiative
		'darkvision 60 ft.',// Senses
		0,// Misc Perception Mod
		'',// Aura
		[],// Misc AC bonuses
		[5,8],// Number of hit dice, Hit dice size, <additional hp bonus>, <hp notes (fast healing/regen/etc)>
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
		'barbed stinger',// Weaknesses
		'10 ft., fly 30 ft.',// Speed
		[
			[
				'type' => 'Melee',
				'list' => [
					[
						'name' => 'sting',
						'mod' => 0,
						'stat' => 'dex',
						'damage' => '1d2+3 plus poison'
					]
				]
			]
		],// Attacks
		0,// Reach
		'barbed stinger',// Special Attacks
		[],// Spell-like Abilities
		[],// Spell Casting
		'',// Spell Casting Note
		[
			'str' => 14,
			'dex' => 21,
			'con' => 17,
			'int' => 0,
			'wis' => 10,
			'cha' => 5
		],// Stats
		0.75,// BAB (1=full, 0.75=3/4 or medium, 0.5=half or slow)
		0,//CMB misc bonus and special cases
		[
			'trip' => 8
		],//CMD misc bonus and special cases
		[
			'Weapon Finesse ss/B/ss'
		],// Feats
		[],// Skills
		[],// Languages
		'',// Special Qualities
		'temperate plains',// Environment
		'solitary, pair, colony (3-16)',// Organization
		'none',// Treasure
		[
			[
				'name' => 'Barbed Stinger',
				'type' => 'Ex',
				'desc' => 'When a dire bee stings a creature, its barbed stinger becomes lodged in the creature and rips out of the dire bee. After the dire loses its stinger it can no longer make its sting attack and takes 2d6 bleed damage every round. If the bee receives an amount of healing while bleeding equal its maximum health (normally 37), the bee stops bleeding but cannot use its sting attack without the aid of a spell or ability that can regrow body parts. After the stinger comes out into a creature, the poison is applied again every round for 6d4 rounds on the creature\'s turn or until it is removed as a standard action with a relfex save with a DC of 15 plus the poison damage taken by the creature on their turn.'
			],
			[
				'name' => 'Poison',
				'type' => 'Ex',
				'desc' => 'Sting—injury; save Fort DC 15; frequency 1/round for 6 rounds; effect 1d6 poison damage; cure 2 saves. Save DC is Con-based with a +2 racial bonus.'
			]
		],// Special Abilities
		$desc=''// Description
	);
	require $startDir.'pageEnd.php';
?>