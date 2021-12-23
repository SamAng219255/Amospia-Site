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
<title>Witch</title>
<?php
	monsterBlockAuto(
		'Witch',// name
		false,// alt name
		'This wizened woman looks at you with a stare that could sour milk as she stirs an unknown brew in a large pot.',// lore text
		7,// CR
		false,// MR
		false,// Custom XP
		'Illager',// Race
		[
			'charged alchemist' => 8
		],// Class
		'NE',// Alignment
		'Medium',// Size
		'humanoid (illager)',// Type
		4,// Misc Initiative Mod
		false,// Mythic Initiative
		'darkvision 60 ft.',// Senses
		0,// Misc Perception Mod
		'',// Aura
		[
			'armor' => 5
		],// Misc AC bonuses
		[8,8,8],// Number of hit dice, Hit dice size, <additional hp bonus>, <hp notes (fast healing/regen/etc)>
		[
			[
				'good' => true,
				'mod' => 1
			],
			[
				'good' => true,
				'mod' => 3
			],
			[
				'good' => false,
				'mod' => 1
			],
			'+6 vs. poison'
		],// Fortitude/Reflex/Will save good/bad and misc bonuses
		'bb/SR/bb 14',// Defensive Abilities
		'',// Weaknesses
		'30 ft.',// Speed
		[
			[
				'type' => 'Melee',
				'list' => [
					[
						'name' => 'ii/sharpness I dagger/ii',
						'mod' => 1,
						'stat' => 'str',
						'damage' => '1d4/19-20'
					]
				]
			],
			[
				'type' => 'Melee',
				'list' => [
					[
						'name' => 'mwk dagger',
						'mod' => 1,
						'stat' => 'str',
						'damage' => '1d4-1/19-20'
					]
				]
			],
			[
				'type' => 'Ranged',
				'list' => [
					[
						'name' => 'ii/sharpness I dagger/ii',
						'mod' => 1,
						'stat' => 'dex',
						'damage' => '1d4+1/19-20'
					]
				]
			],
			[
				'type' => 'Ranged',
				'list' => [
					[
						'name' => 'mwk dagger',
						'mod' => 1,
						'stat' => 'dex',
						'damage' => '1d4/19-20'
					]
				]
			],
			[
				'type' => 'Ranged',
				'list' => [
					[
						'name' => 'mwk light crossbow',
						'mod' => 0,
						'stat' => 'dex',
						'damage' => '1d8/19-20'
					]
				]
			]
		],// Attacks
		5,// Reach
		'charged bomb 10/day (4d6+4 negative energy; DC 18)',// Special Attacks
		[],// Spell-like Abilities
		[
			[
				'class' => 'Alchemist',
				'spellForm' => 'Extracts',
				'prep' => true,
				'level' => 8,
				'stat' => 'int',
				'conc' => 0,
				'spells' => [
					1 => [
						'perday' => 9,
						'list' => [
							'jump',
							[
								'name' => 'cure light wounds',
								'count' => 2
							],
							'shield'
						]
					],
					2 => [
						'perday' => 8,
						'list' => [
							'cure moderate wounds',
							'darkvision',
							'invisibility',
							'resist energy'
						]
					],
					3 => [
						'perday' => 8,
						'list' => [
							'cure serious wounds'
						]
					]
				]
			]
		],// Spell Casting
		'',// Spell Casting Note
		[
			'str' => 8,
			'dex' => 15,
			'con' => 14,
			'int' => 18,
			'wis' => 10,
			'cha' => 13
		],// Stats
		1,// BAB (1=full, 0.75=3/4 or medium, 0.5=half or slow)
		0,//CMB misc bonus and special cases
		0,//CMD misc bonus and special cases
		[
			'Brew Potion',
			'Improved Initiative*',
			'Lightning Reflexes*',
			'Point-Blank Shot',
			'Throw Anything*',
			'Toughness*',
			'Weapon Focus (bombs)*',
			'note' => 'Feats marked with * are already included in the creature\'s statistics.'
		],// Feats
		[
			[
				'skill' => 'Craft (alchemy)',
				'stat' => 'int',
				'bonus' => 11
			],
			[
				'skill' => 'Knowledge (arcana)',
				'stat' => 'int',
				'bonus' => 11
			],
			[
				'skill' => 'Knowledge (dungeoneering)',
				'stat' => 'int',
				'bonus' => 8
			],
			[
				'skill' => 'Knowledge (nature)',
				'stat' => 'int',
				'bonus' => 11
			],
			[
				'skill' => 'Perception',
				'stat' => 'wis',
				'bonus' => 11
			],
			[
				'skill' => 'Spellcraft',
				'stat' => 'int',
				'bonus' => 11
			],
			[
				'skill' => 'Survival',
				'stat' => 'int',
				'bonus' => 11
			]
		],// Skills
		[
			'Abyssal',
			'Common',
			'Illager',
			'Infernal',
			'Knom'
		],// Languages
		'alchemy (alchemy crafting +8, identify potions), charged mutagens, discoveries (charged slowness bomb, charged poison bomb, charged weakness bomb, charged healing bombs), poison use, swift alchemy, swift poisoning',// Special Qualities
		'any (Swamps)',// Environment
		'any',// Organization
		'NPC gear',// Treasure
		[
			[
				'name' => 'Charged Bombs',
				'type' => 'Su',
				'desc' => 'A charged alchemist is able to swiftly mix various substances and infuse them with the charge that runs through their body creating a mixture that resembles a <a href="../items/potions.php" target="_blank">splash potion</a>. By default, these splash potions mimic ii/<a href="../items/potions.php#block-Potion-of-Harming" target="_blank">potions of harming</a>/ii. These potions are treated as having a level of half the charged alchemist\'s number of levels (normally 4). If a sufficiently high enough level of the potion does not exist, threat any level dependant variables of the potion as being the desired level and otherise treat the potion as being at its highest level. These potions other are treated as alchemist bombs and are considered alchemist bomb weapons for purposes such as being selected for feats such as Point-Blank Shot and Weapon Focus. The save DC against these potions equal to 10 + 1/2 the alchemist\'s level + the alchemist\'s Intelligence modifier.
				The charged alchemist also gains access to four additional discoveries.
				ii/Charged Poison Bomb/ii: The alchemist can choose to throw a poison bomb that mimics a ii/<a href="../items/potions.php#block-Potion-of-Poison" target="_blank">splash potion of poison</a>/ii instead of their regular bomb.
				ii/Charged Weakness Bomb/ii: The alchemist can choose to throw a weakening bomb that mimics a ii/<a href="../items/potions.php#block-Potion-of-Weakness" target="_blank">splash potion of weakness</a>/ii instead of their regular bomb. This potion is treated as having a level equal to 1/4 the alchemist\'s level (normally 2).
				ii/Charged Slowness Bomb/ii: The alchemist can choose to throw a slowing bomb that mimics a ii/<a href="../items/potions.php#block-Potion-of-Slowness" target="_blank">splash potion of slowness</a>/ii instead of their regular bomb.
				ii/Charged Healing Bombs/ii: The alchemist can choose to throw healing bombs that mimic either a ii/<a href="../items/potions.php#block-Potion-of-Regeneration" target="_blank">splash potion of regeneration</a>/ii or a ii/<a href="../items/potions.php#block-Potion-of-Healing" target="_blank">splash potion of healing</a>/ii instead of their regular bomb.'//+2 to hit w/ bombs
			],
			[
				'name' => 'Charged Mutagens',
				'type' => 'Su',
				'desc' => 'Instead of their normal effects, mutagens created by charged alchemists grant the drinker the effects of a ii/<a href="../items/potions.php#block-Potion-of-Energy—Resistance" target="_blank">potion of energy resistance</a>/ii, ii/<a href="../items/potions.php#block-Potion-of-Leaping" target="_blank">potion of leaping</a>/ii, ii/<a href="../items/potions.php#block-Potion-of-Regeneration" target="_blank">potion of regeneration</a>/ii, ii/<a href="../items/potions.php#block-Potion-of-Strength" target="_blank">potion of strength</a>/ii, or ii/<a href="../items/potions.php#block-Potion-of-Swiftness" target="_blank">potion of swiftness</a>/ii. When granting the effects of an energy resistance or regeneration potion, the level is treated as being half the alchemist\'s level. For any other mutagen potions treat their level as being 2.'
			]
		],// Special Abilities
		$desc='',// Description
		[
			'Combat Gear' => [
				'acid x5',
				'alchemist\'s fire x5',
				'ii/ as/potions_mc|Potion of Healing| potion of healing II /as /ii x2',
				'ii/ as/potions_mc|Potion of Slow Falling| potion of slow falling /as /ii'
			],
			'Gear' => [
				'a formula book (contains all prepared extracts as well as the following: 1st—ii/disguise self/ii, ii/starsight/ii, ii/polypurpose panacea/ii; 3rd—ii/water breathing/ii)',
				'ii/ as/enchants_mc|Sharpness| sharpness I /as sharpness I /as dagger/ii',
				'masterwork dagger',
				'masterwork light crossbow with 20 bolts',
				'ii/ as/enchants_mc|Protection| protection I /as protection I /as chain shirt/ii',
				'ii/cloak of resistance/ii (+1)',
				'ii/aa/goodberry_sprig|goodberry sprig/aa/ii',
				'ii/elixir of vision/ii x2',
				'portable alchemist\'s lab',
				'mundane gear and herbs worth 500 gp'
			]
		]
	);
	require $startDir.'pageEnd.php';
?>