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
<title>Stray</title>
<?php
	monsterBlockAuto(
		'Stray',// name
		false,// alt name
		'The pile of bones suddenly stirs, rising up to take on a human shape. Its long, bony fingers reach out to claw at the living.',// lore text
		4,// CR
		false,// MR
		false,// Custom XP
		'human stray',// Race
		[
			'fighter' => 5
		],// Class
		'NE',// Alignment
		'Medium',// Size
		'undead (cold)',// Type
		0,// Misc Initiative Mod
		false,// Mythic Initiative
		'darkvision 60ft.',// Senses
		0,// Misc Perception Mod
		'',// Aura
		[
			'natural' => 2
		],// Misc AC bonuses
		[[1,8,0],[5,10,0]],// Number of hit dice, Hit dice size, <additional hp bonus>, <hp notes (fast healing/regen/etc)>
		[
			[
				'good' => [false,true],
				'mod' => 0
			],
			[
				'good' => [false,false],
				'mod' => 0
			],
			[
				'good' => [true,false],
				'mod' => 0
			]
		],// Fortitude/Reflex/Will save good/bad and misc bonuses
		'bravery +1; bb/DR/bb 5/bludgeoning; bb/Immune/bb cold, undead traits',// Defensive Abilities
		'sunlight flammability, vulnerability to fire',// Weaknesses
		'30 ft.',// Speed
		[
			[
				'type' => 'Melee',
				'list' => [
					[
						'name' => '2 claws',
						'mod' => 0,
						'stat' => 'str',
						'damage' => '1d4+2 plus 1d4 cold and freezing strike'
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
						'damage' => '1d8+3/x3 plus 1d6 cold and icy missile'
					]
				]
			]
		],// Attacks
		5,// Reach
		'freezing strike (DC 14), icy missile (DC 14), weapon training (bows +1)',// Special Attacks
		[],// Spell-like Abilities
		[],// Spell Casting
		'',// Spell Casting Note
		[
			'str' => 14,
			'dex' => 21,
			'con' => 'cha',
			'int' => 0,
			'wis' => 8,
			'cha' => 10
		],// Stats
		[0.75,1],// BAB (1=full, 0.75=3/4 or medium, 0.5=half or slow)
		0,//CMB misc bonus and special cases
		0,//CMD misc bonus and special cases
		[
			'Improved Initiative ss/B/ss'
		],// Feats
		[],// Skills
		[],// Languages
		'armor training 1',// Special Qualities
		'any (cold places)',// Environment
		'any',// Organization
		'none',// Treasure
		[
			[
				'name' => 'Freezing Strike',
				'type' => 'Su',
				'desc' => 'All melee attacks by the stray deal an additional 1d4 points of cold damage. If the target takes at least 1 point of cold damage from the Stray\'s melee attack it is subjected to the effects of the icy prison spell with a DC of 14.'
			],
			[
				'name' => 'Icy Missile',
				'type' => 'Su',
				'desc' => 'All ranged attacks by the stray deal an additional 1d6 points of cold damage. If the target takes at least 1 point of cold damage from the Stray\'s ranged attack it is subjected to the effects of the slow spell with a DC of 14.'
			],
			[
				'name' => 'Sunlight Flammability',
				'type' => 'Ex',
				'desc' => 'When exposed to direct sunlight, skeletons burst into flame and take 1 point of fire damage per hit dice every round until they die. At which point their body burns to ash and is completely destroyed. If the skeleton gets out of the sunlight before it dies, it is still on fire and will continue to take 1d6 points of fire damage, to a maximum of its number of hit dice, each round until it is extinguished. Skeletons count as being vulnerable to sunlight and bright light for the purpose of being affected by spells and abilities.'
			]
		],// Special Abilities
		'',// Description
		[
			'Gear' => [
				'masterwork composite longbow (+2 Str) with 100 arrows'
			]
		]
	);
	require $startDir.'pageEnd.php';
?>