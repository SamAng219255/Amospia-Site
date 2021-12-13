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
<title>Wither Skeleton</title>
<?php
	monsterBlockAuto(
		'Wither Skeleton',// name
		false,// alt name
		'This tall charred skeleton looks at you with hollow eyes that somehow project a burning malice that would scare demons.',// lore text
		5,// CR
		false,// MR
		false,// Custom XP
		'wither skeleton human',// Race
		[
			'fighter' => 5
		],// Class
		'NE',// Alignment
		'Medium',// Size
		'undead (extraplanar)',// Type
		0,// Misc Initiative Mod
		false,// Mythic Initiative
		'darkvision 60ft.',// Senses
		0,// Misc Perception Mod
		'',// Aura
		[
			'armor' => 4,
			'dodge' => 1,
			'natural' => 2,
		],// Misc AC bonuses
		[[2,8,0],[5,10,0]],// Number of hit dice, Hit dice size, <additional hp bonus>, <hp notes (fast healing/regen/etc)>
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
		'bb/DR/bb 5/bludgeoning; bb/Immune/bb fire, undead traits',// Defensive Abilities
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
						'damage' => '1d4+2 plus withering strike'
					]
				]
			],
			[
				'type' => 'Melee',
				'list' => [
					[
						'name' => 'ii/sharpness I greatsword/ii',
						'mod' => 1,
						'stat' => 'str',
						'damage' => '2d6+12/19-20 plus withering strike'
					]
				]
			],
			[
				'type' => 'Melee',
				'list' => [
					[
						'name' => 'composite longbow',
						'mod' => 1,
						'stat' => 'str',
						'damage' => '1d8+3/x3 plus 4d6 fire and unholy and hellfire missile'
					]
				]
			]
		],// Attacks
		5,// Reach
		'withering strike (DC 15), hellfire missile, weapon training (swords +1)',// Special Attacks
		[],// Spell-like Abilities
		[],// Spell Casting
		'',// Spell Casting Note
		[
			'str' => 17,
			'dex' => 15,
			'con' => 'cha',
			'int' => 10,
			'wis' => 12,
			'cha' => 16
		],// Stats
		[0.75,1],// BAB (1=full, 0.75=3/4 or medium, 0.5=half or slow)
		0,//CMB misc bonus and special cases
		0,//CMD misc bonus and special cases
		[
			'Cleave',
			'Combat Reflexes',
			'Dodge*',
			'Great Cleave',
			'Improved Initiative* ss/B/ss',
			'Power Attack*',
			'Vital Strike',
			'Weapon Focus* (Greatsword)',
			'Weapon Specialization* (Greatsword)',
			'note' => 'Feats marked with * are already included in the creature\'s statistics.'
		],// Feats
		[
			[
				'skill' => 'Intimidate',
				'stat' => 'cha',
				'bonus' => 10
			],
			[
				'skill' => 'Knowledge (religion)',
				'stat' => 'int',
				'bonus' => 10
			],
			[
				'skill' => 'Perception',
				'stat' => 'wis',
				'bonus' => 10
			],
			[
				'skill' => 'Use Magic Device',
				'stat' => 'cha',
				'bonus' => 2
			]
		],// Skills
		[],// Languages
		'armor training 1',// Special Qualities
		'the Nether (nether fortresses)',// Environment
		'any',// Organization
		'NPC gear',// Treasure
		[
			[
				'name' => 'Withering Strike',
				'type' => 'Su',
				'desc' => 'Anytime a wither skeleton succeeds in dealing damage with a melee attack the target must make a DC 15 will save. The DC is charisma based. If the creature fails, is inflicted with ii/withering/ii for a number of rounds equal to the wither skeleton\'s charisma modifier. ii/Withering/ii is a curse effect inflicted by wither skeletons and the wither that drains the life of the creature. Every round, a creature with ii/withering/ii takes 1d3 points of strength, dexterity, and constitution damage. A creature that dies from constitution damage due to ii/withering/ii cannot be raised by most means as though they died to a death effect. Any ability damage from withering that is not restored within 24 hours becomes ability drain. Undead afflicted with ii/withering/ii take 1 point of charisma damage each round instead. ii/Wish/ii, ii/remove curse/ii, and similar spells that can dispel curses can end the ii/withering/ii effect. If the spell is cast within 24 hours of the ii/withering/ii effect after it has ended it instead removes all ability damage from the ii/withering/ii effect.'
			],
			[
				'name' => 'Hellfire Missile',
				'type' => 'Su',
				'desc' => 'All projectiles fired by a wither skeleton burst into flame and deal an additional 4d6 points of damage. Half of this extra damage is fire while the other half results directly from unholy power and ignores all resistance and immunity. Additionally, any creature that takes at least 1 point of fire damage from this ability is automatically lit of fire.'
			]
		],// Special Abilities
		'',// Description
		[
			'Combat Gear' => [
				'<a href="../items/potions.php#block-Potion-of-Harming" target="_blank">ii/potions of harming, level II/ii</a> (2)'
			],
			'Gear' => [
				'composite longbow (+3 Str) with 100 arrows, <a href="../enchants.php#block-Sharpness" target="_blank">ii/sharpness I greatsword/ii</a>, masterwork chain coat, 170 gp'
			]
		]
	);
	require $startDir.'pageEnd.php';
?>