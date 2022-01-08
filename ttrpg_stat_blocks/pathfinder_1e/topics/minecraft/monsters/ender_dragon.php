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
<title>Ender Dragon</title>
<?php
	monsterBlockAuto(
		'Ender Dragon',// name
		false,// alt name
		'Wisps of a cloud of strange, glowing, purple acid decend from the edges of the fanged maw of this black-scaled dragon.',// lore text
		18,// CR
		false,// MR
		false,// Custom XP
		'',// Race
		[],// Class
		'NE',// Alignment
		'Gargantuan',// Size
		'dragon (extraplanar)',// Type
		4,// Misc Initiative Mod
		false,// Mythic Initiative
		'dragon senses',// Senses
		0,// Misc Perception Mod
		'frightful presense (300 ft., DC 22), space control (1 mile)',// Aura
		[
			'natural' => 30
		],// Misc AC bonuses
		[22,12],// Number of hit dice, Hit dice size, <additional hp bonus>, <hp notes (fast healing/regen/etc)>
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
				'good' => true,
				'mod' => 0
			]
		],// Fortitude/Reflex/Will save good/bad and misc bonuses
		'ender crystals, rebirth cycle; bb/DR/bb 15/magic; bb/Immune/bb acid, paralysis, sleep; bb/SR/bb 29',// Defensive Abilities
		'',// Weaknesses
		'60 ft., fly 250 ft. (clumsy)',// Speed
		[
			[

				'type' => 'Melee',
				'list' => [
					[
						'name' => 'bite',
						'mod' => 0,
						'stat' => 'str',
						'damage' => '4d6+16/19-20'
					],
					[
						'name' => '2 claws',
						'mod' => 0,
						'stat' => 'str',
						'damage' => '2d8+11/19-20'
					],
					[
						'name' => '2 wings',
						'mod' => -2,
						'stat' => 'str',
						'damage' => '2d6+5/19-20'
					],
					[
						'name' => 'tail slap',
						'mod' => -2,
						'stat' => 'str',
						'damage' => '2d8+16/19-20'
					],
				]
			]
		],// Attacks
		'15 ft. (20 ft. with bite)',// Reach
		'breath weapon (60-ft. cone, DC 28, 20d6 acid, usable every 1d4 rounds), crush (Medium creatures, DC 28, 4d6+16), miasmic projectile, ramming swoop (DC 31), tail sweep (Small creatures, 2d6+16, DC 28)',// Special Attacks
		[],// Spell-like Abilities
		[],// Spell Casting
		'',// Spell Casting Note
		[
			'str' => 33,
			'dex' => 10,
			'con' => 25,
			'int' => 18,
			'wis' => 21,
			'cha' => 18
		],// Stats
		1,// BAB (1=full, 0.75=3/4 or medium, 0.5=half or slow)
		0,//CMB misc bonus and special cases
		0,//CMD misc bonus and special cases
		[
			'Alertness*',
			'Critical Focus',
			'Hover',
			'Improved Critical* (bite)',
			'Improved Critical* (claws)',
			'Improved Critical* (wings)',
			'Improved Critical* (tail)',
			'Improved Initiative*',
			'Multiattack*',
			'Wingover',
			'note' => 'Feats marked with * are already included in the creature\'s statistics.'
		],// Feats
		[
			[
				'skill' => 'Climb',
				'stat' => 'str',
				'bonus' => 22
			],
			[
				'skill' => 'Fly',
				'stat' => 'dex',
				'bonus' => 11
			],
			[
				'skill' => 'Intimidate',
				'stat' => 'cha',
				'bonus' => 25
			],
			[
				'skill' => 'Knowledge (arcana)',
				'stat' => 'int',
				'bonus' => 25
			],
			[
				'skill' => 'Knowledge (dungeoneering)',
				'stat' => 'int',
				'bonus' => 25
			],
			[
				'skill' => 'Knowledge (planes)',
				'stat' => 'int',
				'bonus' => 25
			],
			[
				'skill' => 'Perception',
				'stat' => 'wis',
				'bonus' => 29
			],
			[
				'skill' => 'Sense Motive',
				'stat' => 'wis',
				'bonus' => 29
			],
			[
				'skill' => 'Spellcraft',
				'stat' => 'int',
				'bonus' => 25
			],
			[
				'skill' => 'Survival',
				'stat' => 'wis',
				'bonus' => 25
			]
		],// Skills
		[
			'draconic'
		],// Languages
		'alchemical breath',// Special Qualities
		'the central island in the End',// Environment
		'Solitary',// Organization
		'none',// Treasure
		[
			[
				'name' => 'Ender Crystals',
				'type' => 'Su',
				'desc' => 'Atop each of the 10 obsidian pillars arrayed in a circle around the exit portal sits an ender crystal. These volatile artifacts restore the life-force of the dragon granting the dragon fast healing equal to 20 times the number of intact crystals. If a crystal receives at least 1 point of damage, it explodes dealing fire damage to every creature within 40 feet with a DC 25 Reflex save to reduce the damage by half. If a creature fails the save they are also thrown back from the crystal. Creatures within 5 feet take 140 damage and are thrown 15 feet plus 10 feet per 5 by which they fail their save, creatures 10 or 15 feet away take 70 damage and are thrown 10 feet plus 10 feet per 5 by which they fail their save, creatures 20 or 25 feet away take 35 damage and are thrown 10 feet plus 5 feet per 5 by which they fail their save, and creatures 30 to 40 feet away take 15 damage and are thrown 5 feet plus 5 feet per 5 by which they fail their save. The crystals are inanimate objects of medium size and therefore have a DC of 5 but this may increase due to range penalties from distance and cover penalties from the edge of the pillar. Each pillar is 125 feet tall plus 1d10 times 15 feet. The top of each pillar is circle which is 15 feet across plus 1d6 times 10 feet with a crystal at the center. Each pillar 45 feet across or less has a 50% chance to also possess a 15-foot cage of iron bars that surround and protect the crystal, granting the crystal a +10 bonus to AC against ranged attacks and preventing melee attacks against the crystal.'
			],
			[
				'name' => 'Miasmic Projectile',
				'type' => 'Su',
				'desc' => 'The Ender Dragon can choose to concentrate its breath weapon into a spherical projectile that can be fired at a location up to 120 feet away. On impact the projectile creates a 20-foot radius cloud of the dragon\'s purple, acidic gas breath weapon. Any creature in the area when the projectile hits takes acid damage equal to the damage of the dragon\'s breath weapon (normally 20d6) and can make a Reflex save with the same DC (normally 28). Any creature that ends their turn in the mist automatically takes acid damage equal to the dragon\'s breath weapon without a save. Any creature that passes through the mist, not including their starting square, but does not end in the mist takes acid damage equal to the dragon\'s breath weapon and can make a Reflex save with the same DC as the dragon\'s breath weapon. If the creature only passed through 5 feet of the mist they receive a +5 bonus to their save. This mist lasts for 3d6 rounds but every time a creature takes damage from ending their turn in the mist or passing through the mist the duration is reduced by 1 round. If the duration is reduced to zero, the mist ends.'
			],
			[
				'name' => 'Ramming Swoop',
				'type' => 'Ex',
				'desc' => 'As a full-round action while flying, the Ender Dragon can attempt to overrun any creature that is at least one size category smaller than itself, dealing damage to the creature on the way.  This qorks jut like the trample universal monster ability except that the targets take damage equal to the damage from one the dragon\'s wings attacks (normally 2d6+5) and the dragon can choose two of the targets to take a larger amount of damage, one of which also takes damage equal to the dragon\'s bite damage (normally 4d6+16) and the other equal to the dragon\'s tail slap damage (normally 2d8+16). The two targets can be the same creature. Additionally, any targets that did not forgo their attack of opportunity and succeeded at their Reflex save are subject to a bull rush maneuver from the dragon in the direction the dragon was travelling. Roll one combat maneuver check for the dragon and compare it to every effected creature\'s CMD to determine which creatures are effected. Targets of this bull rush are pushed back twice as far as normal and are thrown 5 feet in the air for every 10 feet they are moved horizontally.'
			],
			[
				'name' => 'Rebirth Cycle',
				'type' => 'Su',
				'desc' => 'When the dragon dies, its corpse lifts into the air while cracks form, streaming light from inside. The dragon\'s body is ultimately destroyed and, once it is, the exit portal opens allowing exit of the plane and an ii/ aa/end_gateway| end gateway /aa /ii forms 480 feet in a random direction from the center of the island. Additionally, an egg manifests on pillar in the center of the portal. This egg is indestructible and any attempt to touch the egg or otherwise interact with the egg results in it teleporting to elsewhere on the island. After 100 years this eggs bursts open in a flash of light unveiling a fully adult reincarnation of the dragon. At which point the exit portal is once again sealed, the obsidian pillars are restored of any damage, and a new set of ender crystals are formed atop the pillars.'
			],
			[
				'name' => 'Space Control',
				'type' => 'Su',
				'desc' => 'So long as the dragon lives, no other creature within 1 mile is capable of flying 5 feet or higher off the ground as the dragon\'s aura forces them to the ground.'
			],
			[
				'name' => 'Alchemical Breath',
				'type' => 'Ex',
				'desc' => 'The Ender Dragon\'s fog-like breath weapon can be scavenged by alchemists and used to cheaply manufacture lingering potions. If a character is holding a suitable container, such as a flask for acid, they can make a Craft (alchemy) check as a immediate action while in the area of effect of the dragon\'s breath weapon or as a standard action while in the area of mist from a miasmic projectile to collect some of the dragon\'s breath weapon. The DC is same as the Reflex DC to take half damage from the breath weapon. If the this action is performed as a standard action, the character receives a +5 bonus to their check.'
			]
		],// Special Abilities
		$desc=''// Description
	);
	require $startDir.'pageEnd.php';
?>