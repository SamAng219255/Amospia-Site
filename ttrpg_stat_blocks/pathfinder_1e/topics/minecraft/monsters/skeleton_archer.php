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
<title>Skeletal Horse Archer</title>
<?php
	monsterBlockAuto(
		'Skeletal Horse Archer',// name
		false,// alt name
		'This skeleton seems to hold his helmeted head high as he nocks an arrow from the back of his similarly skeletal mount.',// lore text
		3,// CR
		false,// MR
		false,// Custom XP
		'Human skeleton',// Race
		[
			'fighter' => 5
		],// Class
		'NE',// Alignment
		'Medium',// Size
		'undead',// Type
		4,// Misc Initiative Mod
		false,// Mythic Initiative
		'darkvision 60ft.',// Senses
		0,// Misc Perception Mod
		'',// Aura
		[
			'dodge' => 1,
			'natural' => 2
		],// Misc AC bonuses
		[5,10],// Number of hit dice, Hit dice size, <additional hp bonus>, <hp notes (fast healing/regen/etc)>
		[
			[
				'good' => true,
				'mod' => 1
			],
			[
				'good' => false,
				'mod' => 1
			],
			[
				'good' => false,
				'mod' => 1
			]
		],// Fortitude/Reflex/Will save good/bad and misc bonuses
		'bravery +1; bb/DR/bb 5/bludgeoning; bb/Immune/bb undead traits',// Defensive Abilities
		'',// Weaknesses
		'30 ft.',// Speed
		[
			[
				'type' => 'Melee',
				'list' => [
					[
						'name' => '2 claws',
						'mod' => 0,
						'stat' => 'str',
						'damage' => '1d4+2'
					]
				]
			],
			[
				'type' => 'Ranged',
				'list' => [
					[
						'name' => 'mwk composite longbow',
						'mod' => 2,
						'stat' => 'dex',
						'iterative' => 0,
						'damage' => '1d8+3/x3'
					]
				]
			]
		],// Attacks
		5,// Reach
		'weapon training (bows +1)',// Special Attacks
		[],// Spell-like Abilities
		[],// Spell Casting
		'',// Spell Casting Note
		[
			'str' => 14,
			'dex' => 21,
			'con' => 'cha',
			'int' => 12,
			'wis' => 8,
			'cha' => 15
		],// Stats
		1,// BAB (1=full, 0.75=3/4 or medium, 0.5=half or slow)
		0,//CMB misc bonus and special cases
		0,//CMD misc bonus and special cases
		[
			'Dodge*',
			'Improved Initiative* ss/B/ss',
			'Mobility',
			'Mounted Archery',
			'Imporved Mounted Archery',
			'Mounted Combat',
			'Point-Blank Shot',
			'Rapid Shot',
			'note' => 'Feats marked with * are already included in the creature\'s statistics.'
		],// Feats
		[
			[
				'skill' => 'Craft (bows or saddles)',
				'stat' => 'int',
				'bonus' => 5
			],
			[
				'skill' => 'Handle Animal',
				'stat' => 'cha',
				'bonus' => 5
			],
			[
				'skill' => 'Knowledge (geography)',
				'stat' => 'int',
				'bonus' => 5
			],
			[
				'skill' => 'Perception',
				'stat' => 'wis',
				'bonus' => 8
			],
			[
				'skill' => 'Ride',
				'stat' => 'dex',
				'bonus' => 5
			]
		],// Skills
		[
			'Necril'
		],// Languages
		'armor training 1',// Special Qualities
		'any',// Environment
		'Solitary (1 Archer, 1 Horse), Pair (2 Archers, 2 Horses), Party (4 Archers, 4 Horses)',// Organization
		'NPC gear',// Treasure
		[],// Special Abilities
		'',// Description
		[
			'Combat Gear' => [
				'ii/+1 arrows/ii x25',
				'ii/ as/potions_mc|Potion of Harming| potion of harming II /as /ii',
				'ii/ as/potions_mc|Potion of Harming| potion of harming I /as /ii x3'
			],
			'Gear' => [
				'masterwork composite longbow (+2 Str) with 100 arrows',
				'ii/cloak of resistance +1/ii',
				'180 gp worth of ancient coinage'
			]
		]
	);
	monsterBlockAuto(
		'Skeletal Archer Mount',// name
		'Skeletal Horse',// alt name
		'',// lore text
		2,// CR
		false,// MR
		false,// Custom XP
		'',// Race
		[],// Class
		'NE',// Alignment
		'Large',// Size
		'undead',// Type
		4,// Misc Initiative Mod
		false,// Mythic Initiative
		'low-light vision, scent',// Senses
		0,// Misc Perception Mod
		'',// Aura
		[
			'natural' => 4,
			'armor' => 4
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
		'one true master; bb/DR/bb 5/bludgeoning; bb/Immune/bb undead traits',// Defensive Abilities
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
			'maxDex' => 5,
			'con' => 'cha',
			'int' => 05,
			'wis' => 17,
			'cha' => 21
		],// Stats
		1,// BAB (1=full, 0.75=3/4 or medium, 0.5=half or slow)
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
		'one true master',// Special Qualities
		'any',// Environment
		'any',// Organization
		'none (barding and saddle)',// Treasure
		[
			[
				'name' => 'One True Master',
				'type' => 'Ex',
				'desc' => 'Like most skeletal horses, this skeletal horse will only obey the orders of a creature it recognizes as its master. However this horse has a stronger connection to its master than most. This skeletal horse can telepathically communicate with its master so long they are within 30 feet of each other whether or not they share a language. If the horse and its master are within 30 feet of each other at the start of an encounter, both creatures roll initiative separately and treat the highest result as their single result. The horse\'s master receives a +5 bonus to Ride checks made in connection with this horse. This horse is also treated as having SR equal to 11 plus its master\'s number of hit dice against spells that attempt to control or command the horse and is immune to such effects if the rider is within 30 feet.'
			]
		],// Special Abilities
		$desc='Skeletal horses are mean creatures that, while mostly retaining their animalistic nature, are more intelligent than regular horses and are known to respect power in the form of combat ability. A skeletal horse will generally only allow a creaure to ride it if they have defeated the horse\'s previous rider.',// Description
		[
			'Gear' => [
				'masterwork chain shirt barding',
				'military saddle'
			]
		]
	);
	require $startDir.'pageEnd.php';
?>