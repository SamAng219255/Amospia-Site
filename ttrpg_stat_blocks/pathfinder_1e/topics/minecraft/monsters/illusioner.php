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
<title>Illusioner</title>
<?php
	monsterBlockAuto(
		'Illusioner',// name
		false,// alt name
		'This illager wears light blue robes with brightly colored patterns across their surface.',// lore text
		8,// CR
		false,// MR
		false,// Custom XP
		'Illager',// Race
		[
			'wizard' => 9
		],// Class
		'NE',// Alignment
		'Medium',// Size
		'humanoid (illager)',// Type
		0,// Misc Initiative Mod
		false,// Mythic Initiative
		'',// Senses
		0,// Misc Perception Mod
		'',// Aura
		[
			'armor' => 4,
			'deflection' => 1
		],// Misc AC bonuses
		[9,6,9],// Number of hit dice, Hit dice size, <additional hp bonus>, <hp notes (fast healing/regen/etc)>
		[
			[
				'good' => false,
				'mod' => 1
			],
			[
				'good' => false,
				'mod' => 1
			],
			[
				'good' => true,
				'mod' => 1
			]
		],// Fortitude/Reflex/Will save good/bad and misc bonuses
		'',// Defensive Abilities
		'',// Weaknesses
		'30 ft.',// Speed
		[
			[
				'type' => 'Melee',
				'list' => [
					[
						'name' => 'ii/+1 light crossbow/ii',
						'mod' => 1,
						'iterative' => 0,
						'stat' => 'dex',
						'damage' => '1d8+1'
					]
				]
			]
		],// Attacks
		5,// Reach
		'blinding ray, hatred',// Special Attacks
		[],// Spell-like Abilities
		[
			[
				'class' => 'Wizard',
				'prep' => true,
				'level' => 9,
				'stat' => 'int',
				'conc' => 0,
				'spells' => [
					0 => [
						'list' => [
							'dancing lights',
							'detect magic',
							[
								'name' => 'ghost sound',
								'dc' => true,
								'dcMod' => 3
							],
							'mage hand'
						]
					],
					1 => [
						'list' => [
							[
								'name' => 'color spray',
								'count' => 2,
								'dc' => true,
								'dcMod' => 3
							],
							[
								'name' => 'silent image',
								'dc' => true,
								'dcMod' => 3
							],
							[
								'name' => 'mage armor',
								'dc' => true,
								'dcMod' => 1,
								'note' => 'generally assume this spell is already cast'
							],
							[
								'name' => 'ventriloquism',
								'dc' => true,
								'dcMod' => 3
							]
						]
					],
					2 => [
						'list' => [
							[
								'name' => 'blur',
								'dc' => true,
								'dcMod' => 3
							],
							[
								'name' => 'glitterdust',
								'dc' => true,
								'dcMod' => 1
							],
							[
								'name' => 'hypnotic pattern',
								'dc' => true,
								'dcMod' => 3
							],
							[
								'name' => 'mirror image',
								'count' => 2
							]
						]
					],
					3 => [
						'list' => [
							'dispel magic',
							'displacement',
							[
								'name' => 'major image',
								'dc' => true,
								'dcMod' => 3
							],
							[
								'name' => 'haste',
								'dc' => true,
								'dcMod' => 1
							]
						]
					],
					4 => [
						'list' => [
							[
								'name' => 'complex hallucination',
								'dc' => true,
								'dcMod' => 3
							],
							[
								'name' => 'greater invisibility',
								'dc' => true,
								'dcMod' => 3
							],
							[
								'name' => 'phantasmal killer',
								'count' => 2,
								'dc' => true,
								'dcMod' => 3
							]
						]
					],
					5 => [
						'list' => [
							[
								'name' => 'illusory fog',
								'dc' => true,
								'dcMod' => 3
							]
						]
					]
				]
			]
		],// Spell Casting
		'bb/Opposition Schools/bb abjuration, necromancy',// Spell Casting Note
		[
			'str' => 8,
			'dex' => 14,
			'con' => 12,
			'int' => 18,
			'wis' => 10,
			'cha' => 14
		],// Stats
		0.5,// BAB (1=full, 0.75=3/4 or medium, 0.5=half or slow)
		0,//CMB misc bonus and special cases
		0,//CMD misc bonus and special cases
		[
			'Combat Casting',
			'Craft Wondrous Item',
			'Rapid Reload',
			'Scribe Scroll',
			'Shadow Gambit',
			'Spell Focus (Illusion)*',
			'Greater Spell Focus (Illusion)*',
			'Toughness',
			'note' => 'Feats marked with * are already included in the creature\'s statistics.'
		],// Feats
		[
			[
				'skill' => 'Bluff',
				'stat' => 'cha',
				'bonus' => 9
			],
			[
				'skill' => 'Disguise',
				'stat' => 'cha',
				'bonus' => 9
			],
			[
				'skill' => 'Knowledge (arcana)',
				'stat' => 'int',
				'bonus' => 12
			],
			[
				'skill' => 'Percpetion',
				'stat' => 'dex',
				'bonus' => 9
			],
			[
				'skill' => 'Sleight of Hand',
				'stat' => 'dex',
				'bonus' => 9
			],
			[
				'skill' => 'Spellcraft',
				'stat' => 'int',
				'bonus' => 12
			]
		],// Skills
		[
			'Abyssal',
			'Common',
			'Illager',
			'Infernal'
		],// Languages
		'arcane bond (ii/+1/+1 casting light crossbow/ii), extended illusions, invisibility field',// Special Qualities
		'any',// Environment
		'any',// Organization
		'NPC gear',// Treasure
		[
			[
				'name' => 'Extended Illusions',
				'type' => 'Su',
				'desc' => 'Any illusion spell the illusioner casts with a duration of "concentration" lasts a number of additional rounds equal to 1/2 their wizard level after they stop maintaining concentration (normally +4 rounds).'
			],
			[
				'name' => 'Blinding Ray',
				'type' => 'Sp',
				'desc' => 'As a standard action the illusioner can fire a shimmering ray at any foe within 30 feet as a ranged touch attack. The ray causes creatures to be blinded for 1 round. Creatures with more Hit Dice than the illusioner\'s wizard level (9) are dazzled for 1 round instead. The illusioner can use this ability a number of times per day equal to 3 + their Intelligence modifier (normally 7).'
			],
			[
				'name' => 'Hatred',
				'type' => 'Ex',
				'desc' => 'While Illagers hate all other races, the illagers have a particular hatred for their human and knom cousins. Illagers have a +1 racial bonus on attack rolls against humans and knom.'
			],
			[
				'name' => 'Invisibility Field',
				'type' => 'Sp',
				'desc' => 'The illusioner can make themself invisible as a swift action for a number of rounds per day equal to their wizard level (normally 9). These rounds do not need to be consecutive. This otherwise functions as ii/greater invisibility/ii.'
			]
		],// Special Abilities
		$desc='',// Description
		[
			'Combat Gear' => [
				'ii/ as/potions_mc|Potion of Healing| potion of healing II /as /ii x2',
				'ii/ as/potions_mc|Potion of Regeneration| potion of regeneration II /as /ii',
				'ii/scroll of mirror image/ii'
			],
			'Gear' => [
				'ii/+1/+1 as/casting_foci|Casting Weapon| casting /as light crossbow/ii',
				'ii/ring of protection +1/ii',
				'ii/cloak of resistance +1/ii',
				'spellbook',
				'100 gp of mundane equipment',
				'a collection of emeralds in three sizes together worth approximately 600 gp'
			]
		]
	);
	require $startDir.'pageEnd.php';
?>