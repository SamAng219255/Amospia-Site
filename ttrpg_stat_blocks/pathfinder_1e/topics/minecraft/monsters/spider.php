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
<title>Spider</title>
<?php
	monsterBlockAuto(
		'Spider',// name
		false,// alt name
		'This black hairy spider has a set of glowing red eyes.',// lore text
		2,// CR
		false,// MR
		false,// Custom XP
		'',// Race
		[],// Class
		'N',// Alignment
		'Large',// Size
		'vermin (arthropod)',// Type
		0,// Misc Initiative Mod
		false,// Mythic Initiative
		'darkvision 60 ft., tremorsense 60 ft.',// Senses
		4,// Misc Perception Mod
		'',// Aura
		[],// Misc AC bonuses
		[3,8],// Number of hit dice, Hit dice size, <additional hp bonus>, <hp notes (fast healing/regen/etc)>
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
		'bb/Immune/bb mind-affecting effects, poison',// Defensive Abilities
		'',// Weaknesses
		'40 ft., climb 40 ft.',// Speed
		[
			[
				'type' => 'Melee',
				'list' => [
					[
						'name' => 'bite',
						'mod' => 0,
						'stat' => 'str',
						'damage' => '1d8+6'
					]
				]
			]
		],// Attacks
		5,// Reach
		'pounce, web (+7 ranged, DC 14, 5 hp)',// Special Attacks
		[],// Spell-like Abilities
		[],// Spell Casting
		'',// Spell Casting Note
		[
			'str' => 18,
			'dex' => 8,
			'con' => 14,
			'int' => 0,
			'wis' => 10,
			'cha' => 2
		],// Stats
		0.75,// BAB (1=full, 0.75=3/4 or medium, 0.5=half or slow)
		0,//CMB misc bonus and special cases
		[
			'trip' => 12
		],//CMD misc bonus and special cases
		[],// Feats
		[
			[
				'skill' => 'Climb',
				'stat' => 'str',
				'bonus' => 16
			],
			[
				'skill' => 'Perception',
				'stat' => 'wis',
				'bonus' => 4
			],
			[
				'skill' => 'Stealth',
				'stat' => 'dex',
				'bonus' => 4
			]
		],// Skills
		[],// Languages
		'web walk',// Special Qualities
		'any (caves)',// Environment
		'solitary, pack (2-4)',// Organization
		'none',// Treasure
		[
			[
				'name' => 'Web Walk',
				'type' => 'Ex',
				'desc' => 'Spiders\' hairs are costed in a layer that prevent webs from sticking to them. Cave spiders are immune to the web ability and can pass through sheets of web without getting trapped and can ignore other types of webbing such as the ii/web/ii spell.'
			]
		],// Special Abilities
		$desc=''// Description
	);
	block(
		'Variant Spiders',
		'variants',
		[
			'Some packs of spiders may have abilities not possessed by most others. Generally, the entire pack will have the ability but sometimes packs mingle and mixed packs form.'
		],
		false,
		[
			[
				'title' => 'Speed (CR +1)',
				'spaced' => false,
				'texts' => quick_array('Spiders with speed are the most common and have their base and climb speeds increased to 60 ft and can make two attacks with their bites per round though only add 1 times their strength not 1-1/2.')
			],
			[
				'title' => 'Strength (CR +1)',
				'spaced' => false,
				'texts' => quick_array('Spiders with extra strength have their strength increased to 26 increasing their natural attack to bite +10 (1d8+12), their CMB to +11, and their CMD to 20 (32 vs. trip).')
			],
			[
				'title' => 'Regeneration (CR +1)',
				'spaced' => false,
				'texts' => quick_array('Spiders with regeneration gain regeneration 5 (fire, acid).')
			],
			[
				'title' => 'Invisibility (CR +1)',
				'spaced' => false,
				'texts' => quick_array('Spiders with invisibility gain the ability to become nearly transparent allowing them to hide and stay hidden even while visible with a +10 bonus. Such spiders innately know how to best use this ability gaining the benefits of the spring attack feat and increase their racial bonus to stealth from 4 to 8. These spider generally fight by making a spring attack and hiding while moving away.')
			]
		]
	);
	require $startDir.'pageEnd.php';
?>