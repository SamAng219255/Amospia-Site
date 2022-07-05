<?php 
	$startDir='';
	for($i=0; $i<10; $i++) {
		if(file_exists($startDir.'pageStart.php')) {
			require $startDir.'pageStart.php';
			break;
		}
		else {
			$startDir='../'.$startDir;
		}
	}
	block(
		'Universal Monster Rules',
		'umr',
		[
			'The following rules are standard and are referenced (but not repeated) in monster stat blocks. Each rule includes a format guide for how it appears in a monster\'s listing and its location in the stat block.'
		],
		true,
		[
			[
				'title' => 'Energy Overload (Su)',
				'spaced' => true,
				'texts' => quick_array([
					'This attack happens automatically when a melee or ranged attack hits. Each successful energy overload bestows one or more unstable bonus levels (the creature\'s description specifies how many). If the creature confirms a critical hit with an attack that includes energy overload, it inflicts twice the listed number of unstable bonus levels. Unless otherwise specified in the creature\'s description, an overloading creature gains 5 temporary hit points for each unstable bonus level it inflicts on an opponent. These temporary hit points last for a maximum of 1 hour. Unstable bonus levels remain until 24 hours have passed or until they are removed with a spell such as ii/restoration/ii. If a unstable bonus level is not removed before 24 hours have passed, the affected creature must attempt a Fortitude save (DC = 10 + 1/2 overloading creature\'s racial HD + overloading creature\'s Charisma modifier; the exact DC is given in the creature\'s descriptive text). On a success, the unstable bonus level goes away with no harm to the creature. On a failure, the unstable bonus level becomes a permanent negative level. A separate saving throw is required for each unstable bonus level.',
					'For each unstable bonus level a creature has, it receives a cumulative +1 bonus on all ability checks, attack rolls, combat maneuver checks, Combat Maneuver Defense, saving throws, and skill checks. In addition, the creature receives 5 temporary hit points for each unstable bonus level it possesses. These temporary hit points last for a maximum of 24 hours. The creature is also treated as one level higher for the purpose of level-dependent variables (such as spellcasting) for each unstable bonus level possessed. Spellcasters do not gain any additional prepared spells or slots as a result of unstable bonus levels. Whenever a creature with unstable bonus levels takes damage, they take an extra 20 points of damage for each unstable bonus level they possess. This damage ignores all resistance and immunities and is untyped.',
					'If a creature\'s unstable bonus levels equal or exceed its total Hit Dice, it explodes in a burst of energy. The creature is instantly slain and all nearby creatures take damage based on how far away they are located. Creatures within a 30-foot-spread take 5 points of damage for each unstable bonus level the original creature possessed; creatures within a 20-foot-spread instead take 8 points of damage for each unstable bonus level the original creature possessed; and creatures within a 10-foot-spread instead take 10 points of damage for each unstable bonus level the original creature possessed. This damage may trigger other creatures with unstable bonus levels to take additional damage.',
					'Creatures that are immune the negative levels are also immune to unstable bonus levels, unless they are undead or gain their immunity from similarity to undead. Creatures with negative energy affinity, or a similar ability or property, and are healed by negative energy and harmed by positive energy, who receive unstable bonus levels take penalties as though they had received an equal number of negative levels. Additionally, such creatures may receive the effects of unstable bonus levels when they receive negative levels, if they are not immune.',
					'ii/Format/ii: energy overload (2 levels, DC 18)',
					'ii/Location/ii: Special Attacks and individual attacks.'
				])
			],
			[
				'title' => 'Energy Suffusion (Ex)',
				'spaced' => true,
				'texts' => quick_array([
					'The creature suffuses its target with overwelming energy at the end of its turn if it grapples a foe. This process makes the skin almost boil or bubble at the same time covering the area with scar tissue and tumors, resulting in Constitution damage. If a creature dies from this ability, their body bursts into bright white flames.',
					'ii/Format/ii: energy suffusion (1d2 Con)',
					'ii/Location/ii: Special Attacks.'
				])
			]
		]
	);
	require $startDir.'pageEnd.php';
?>