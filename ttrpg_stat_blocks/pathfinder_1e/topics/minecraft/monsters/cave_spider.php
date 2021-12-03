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
<title>Cave Spider</title>
<?php
	monsterBlockAuto(
		'Cave Spider',// name
		false,// alt name
		'A large spider covered in deep blue-green hair silently crawls out of the darkness along its web, its eyes glow red as its envenomed fangs click together in anticipation.',// lore text
		4,// CR
		false,// MR
		false,// Custom XP
		'',// Race
		[],// Class
		'N',// Alignment
		'Small',// Size
		'vermin (arthropod)',// Type
		0,// Misc Initiative Mod
		false,// Mythic Initiative
		'darkvision 60 ft., tremorsense 60 ft.',// Senses
		4,// Misc Perception Mod
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
						'stat' => 'dex',
						'damage' => '1d6+6 plus poison'
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
			'str' => 10,
			'dex' => 18,
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
				'bonus' => 12
			]
		],// Skills
		[],// Languages
		'nimble strikes, web walk',// Special Qualities
		'any (caves, particularly abandoned artificial caves)',// Environment
		'solitary, colony (2-16)',// Organization
		'none',// Treasure
		[
			[
				'name' => 'Nimble Strikes',
				'type' => 'Ex',
				'desc' => 'A cave spider uses their dexterity in place of their strength on attack and damage rolls with their natural weapons.'
			],
			[
				'name' => 'Poison',
				'type' => 'Ex',
				'desc' => 'Bite—injury; save Fort DC 19; frequency 1/round for 6 rounds; effect 1d6 non-lethal damage and staggered; cure 2 saves. Save DC is Con-based with a +5 racial bonus.'
			],
			[
				'name' => 'Web Walk',
				'type' => 'Ex',
				'desc' => 'Cave spiders\' hairs are costed in a layer that prevent webs from sticking to them. Cave spiders are immune to the web ability and can pass through sheets of web without getting trapped and can ignore other types of webbing such as the ii/web/ii spell.'
			]
		],// Special Abilities
		$desc=''// Description
	);
	require $startDir.'pageEnd.php';
?>