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
<title>Wither</title>
<?php
	monsterBlockAuto(
		'Wither',// name
		false,// alt name
		'This blackened, ominous undead has three skeletal heads atop an enlarged ribcage where the front half of each rib has been broken off. The entities spine hangs below its ribs and trails behind like a tail as it moves.',// lore text
		21,// CR
		false,// MR
		false,// Custom XP
		'',// Race
		[],// Class
		'CE',// Alignment
		'Large',// Size
		'undead',// Type
		4,// Misc Initiative Mod
		false,// Mythic Initiative
		'darkvision 60 ft., lifesense 1 mile',// Senses
		0,// Misc Perception Mod
		'frightful presense (120 ft., DC 33)',// Aura
		[
			'dodge' => 1,
			'natural' => 20
		],// Misc AC bonuses
		[32,10,0,'; fast healing 10'],// Number of hit dice, Hit dice size, <additional hp bonus>, <hp notes (fast healing/regen/etc)>
		[
			[
				'good' => false,
				'mod' => 2
			],
			[
				'good' => false,
				'mod' => 2
			],
			[
				'good' => true,
				'mod' => 2
			]
		],// Fortitude/Reflex/Will save good/bad and misc bonuses
		'projectile shield; bb/Immune/bb cold, fire, undead traits, withering; bb/SR/bb 32',// Defensive Abilities
		'',// Weaknesses
		'60 ft., fly 120 ft. (perfect)',// Speed
		[
			[
				'type' => 'Melee',
				'list' => [
					[
						'name' => 'slam',
						'mod' => 0,
						'stat' => 'str',
						'damage' => '1d8+6'
					]
				]
			]
		],// Attacks
		5,// Reach
		'3 wither skulls (+31; DC 33)',// Special Attacks
		[],// Spell-like Abilities
		[],// Spell Casting
		'',// Spell Casting Note
		[
			'str' => 18,
			'dex' => 24,
			'con' => 'cha',
			'int' => 8,
			'wis' => 8,
			'cha' => 24
		],// Stats
		0.75,// BAB (1=full, 0.75=3/4 or medium, 0.5=half or slow)
		0,//CMB misc bonus and special cases
		0,//CMD misc bonus and special cases
		[
			'Combat Reflexes',
			'Death from Above',
			'Dodge*',
			'Far Shot',
			'Great Fortitude*',
			'Hover',
			'Impact Critical Shot',
			'Improved Initiative*',
			'Iron Will*',
			'Just out of Reach',
			'Lightning Relfexes*',
			'Mobility',
			'Point-Blank Shot',
			'Precise Shot',
			'Signature Skill (Intimidate)',
			'Wingover',
			'note' => 'Feats marked with * are already included in the creature\'s statistics.'
		],// Feats
		[
			[
				'skill' => 'Fly',
				'stat' => 'dex',
				'bonus' => 41
			],
			[
				'skill' => 'Intimidate',
				'stat' => 'cha',
				'bonus' => 35
			],
			[
				'skill' => 'Percpetion',
				'stat' => 'wis',
				'bonus' => 35
			]
		],// Skills
		[
			'Necril'
		],// Languages
		'entropic blast, feast of death',// Special Qualities
		'any',// Environment
		'any',// Organization
		'none (ii/nether star/ii)',// Treasure
		[
			[
				'name' => 'Entropic Blast',
				'type' => 'Ex',
				'desc' => 'As a standard action, the Wither can release a wave of entropy that causes nearby objects to crumble away. All inanimate, unattended material within 15 feet crumbles, burns, dissolves away leaving nothing behind.'
			],
			[
				'name' => 'Feast of Death',
				'type' => 'Su',
				'desc' => 'Any creature that dies or drops to -1 or fewer hit points from one of the Wither\'s attacks or abilities is instantly slain if not already dead, heals the Wither by 80 points, and grants the Wither a +2 enhancement bonus to streangth and dexterity for 10 minutes per HD of the creature that stacks with other uses of this ability. Creatures that are not yet dead can make a DC 23 Will save to prevent this effect the effect but it applies again each round after at the begining of the creature\'s turn until they die or are healed to 0 or greater hit points. 
				The body of every creature affected by ii/feast of death/ii crumbles and dissolves away as a strange flower grows up from whatever surface their corpse rests on. This flower appears to be a singular rose stem sticking straight up with a couple leaves, several thorns, a large black rose blossoming at the top. The rose has an AC of 10 and 5 hit points. This rose contains dark energies that lash out and any creature that ends their turn in, or passes through, a square containing a wither rose is inflicted by ii/withering/ii for 1 round taking 1d3 physical stat damage or 1 charisma damage. Creatures that only pass through a square with a wither rose and don\'t end their movement in one can make a DC 28 Reflex to avoid the ii/withering/ii effect. A wither rose can be safely collected with a DC 42 survival check, otherwise the creature attempting the check receives withering from the rose. If the check fails by 5 or more the rose is destroyed. A safely collected wither rose does not wither nearby creatures but can be replanted, at which point it properties resume after 1 minute, or it can crafted into ii/decaying powder/ii with a successful Craft (alchemy) check to create the poison. ii/Decaying powder/ii is treated as poison with a DC of 26, a frequency of 1/round for 6 rounds, and a cure of 1 save except that it requires a Will save instead of a Fortitude save, it can affect creatures otherwise immune to poison, and its effect is the same as the flower\'s ii/withering/ii.'
			],
			[
				'name' => 'Projectile Shield',
				'type' => 'Su',
				'desc' => 'As a swift action, the Wither can activate a barrier around itself that make it immune to projectiles and that lasts until the Wither disbles it as another swift action. While the Wither has this barrier active however the Wither cannot fly while the barrier is active though it still doesn\'t take any damage from falling.'
			],
			[
				'name' => 'Wither Skull',
				'type' => 'Su',
				'desc' => 'The Wither can make up to 3 ranged touch attacks, with range increments of 120 feet, as a standard action or as part of a full attack action. These attacks fire blasts of necrotic energies in the shape of one of the Wither\'s skulls. On a hit the target takes 5d6 points of damage that results directly from unholy power and ignores all resistance and immunity and every creaure within 5 of the target, except for the Wither, takes 5d6 points of force damage as the skull explodes. Creatures hit by the force damage can make a DC 33 Reflex save to reduce the damage by half. The original target must also make a DC 33 Will save or be inflicted by ii/withering/ii for a number of rounds equal to twice the Wither\'s charisma modifier (normally 14). These DCs are charisma based. If the Wither rolled a critical hit on its attack roll; the projectile turns blue, the target takes three times as much unholy damage, the DCs increase by 5, and the force damage ignores all hardness.
				ii/Withering/ii: ii/Withering/ii is a curse effect inflicted by wither skeletons and the Wither that drains the life of the creature. Every round, a creature with ii/withering/ii takes 1d4 points of strength, dexterity, and constitution damage. A creature that dies from constitution damage due to ii/withering/ii cannot be raised by most means as though they died to a death effect. Any ability damage from ii/withering/ii that is not restored within 24 hours becomes ability drain. Undead afflicted with ii/withering/ii take 1d2 points of charisma damage each round instead. ii/Wish/ii, ii/remove curse/ii, and similar spells that can dispel curses can end the ii/withering/ii effect. If the spell is cast within 24 hours of the ii/withering/ii effect after it has ended it instead removes all ability damage from the ii/withering/ii effect.'
			]
		],// Special Abilities
		$desc=''// Description
	);
	require $startDir.'pageEnd.php';
?>