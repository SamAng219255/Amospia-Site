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
	spellBlockAuto(
		'Snap',// Name
		'Evocation',// School
		[
			'sonic'
		],// Descriptors
		[
			'bard' => 3,
			'bloodrager' => 3,
			'cleric' => 3,
			'magus' => 3,
			'occultist' => 3,
			'oracle' => 3,
			'psychic' => 3,
			'sorcerer' => 3,
			'wizard' => 3 
		],// Levels
		[
			'S' => 1
		],// Components
		'1 standard action',// Casting Time
		'Close',// Range
		'one object or creature',// Target
		false,// Effect
		false,// Area
		'instantaneous',// Duration
		'Fortitude half (object) or partial',// Save
		'yes (object)',// SR
		[
			'You snap your fingers and let out a targeted sonic burst that causes a the targeted object to break apart, with a greater effect on brittle objects.',
			'This spell functions as ii/<a href="#block-Snap,-Lesser">snap, lesser</a>/ii except that against targets with at least 1 point of hardness, the spell deals a number of d8 points of damage equal to the target\'s hardness to a maximum of your caster level.',
			'Additionally, when targeting a creature with a skeleton, exoskeleton, or similar structure, you can target a region of this structure to break it in that area having a specific effect and may increase or decrease the spell\'s save DC. If the target makes their save, they take 1 point of strength and constitution damage. The GM may also rules that affected targets take additional penalties. Regardless of the effect, the effect will heal in 14d6 days, however, any effect that restores damage to a physical ability score at a rate faster than the standard 1 point per day can be used instead to reduce the required number of days by the same amount. Additionally, regeneration, the ii/regenerate/ii spell, or similar abilities that can restore lost limbs heal the damage in half the time to reattach a lost limb.',
			'ii/Arm/ii (DC -2): That arm cannot be used and the target takes a -4 penalty to CMB for each arm lost.',
			'ii/Leg/ii (DC -4): That leg cannot be used and the target takes a -4 penalty to CMD for each leg lost. If the target has lost at least half its legs and has only two or less legs remaining, their base speed is reduced to 5 feet. If they lose all of their legs, they are prone and can only move by pulling themselves with their arms.',
			'ii/Finger/ii (DC +4): Any spell the target casts requiring a somatic component has a chance to fail equal to 10% for each finger lost, or a corresponding percentage equal to 100% divided by the target\'s normal number of fingers.',
			'ii/Jaw/ii (DC +0): Any spell the target casts that requires a verbal component has a 50% chance to fail. If the target has multiple jaws that can be used to speak and cast spells, they only take this penalty once all of their jaws have been broken.'
		]// Description
	);
	spellBlockAuto(
		'Snap, Lesser',// Name
		'Evocation',// School
		[
			'sonic'
		],// Descriptors
		[
			'bard' => 0,
			'bloodrager' => 0,
			'cleric' => 0,
			'magus' => 0,
			'occultist' => 0,
			'oracle' => 0,
			'psychic' => 0,
			'sorcerer' => 0,
			'wizard' => 0 
		],// Levels
		[
			'S' => 1
		],// Components
		'1 standard action',// Casting Time
		'Close',// Range
		'one object or creature',// Target
		false,// Effect
		false,// Area
		'instantaneous',// Duration
		'Fortitude half (object)',// Save
		'yes (object)',// SR
		[
			'You snap your fingers and let out a targeted sonic burst that causes a the targeted object to break apart, with a greater effect on brittle objects.',
			'The target takes 1 point of damage that ignores hardness. If the object has at least 1 point of hardness, the damage is instead equal to its hardness to a maximum of your caster level, with a fortitude save for half. This spell can target attended objects.'
		]// Description
	);
	spellBlockAuto(
		'Snap, Greater',// Name
		'Evocation',// School
		[
			'sonic'
		],// Descriptors
		[
			'bard' => 6,
			'bloodrager' => 6,
			'cleric' => 6,
			'magus' => 6,
			'occultist' => 6,
			'oracle' => 6,
			'psychic' => 6,
			'sorcerer' => 6,
			'wizard' => 6 
		],// Levels
		[
			'S' => 1
		],// Components
		'1 standard action',// Casting Time
		'Close',// Range
		'one object or creature',// Target
		false,// Effect
		false,// Area
		'instantaneous',// Duration
		'Fortitude half (object) or partial',// Save
		'yes (object)',// SR
		[
			'You snap your fingers and let out a targeted sonic burst that causes a the targeted object to break apart, with a greater effect on brittle objects.',
			'This spell functions as ii/<a href="#block-Snap">snap</a>/ii except that against targets with at least 1 point of hardness, the spell deals a number of d12 points of damage equal to the target\'s hardness to a maximum of your caster level and when targeting a region of a creature\'s skeleton, exoskeleton, or similar structure, you completely shatter the bone or exoskeleton. This region does not heal into a usable form without the aid of significant medical ability. The GM may decide exactly what that entails but it should take at least 8 hours of uninterrupted work requiring multiple difficult Heal checks as the surgeon pieces the bone back together and secures the pieces in place. Alternatively, magic and effects that can restore lost limbs can repair the damage like reattaching a lost limb.'
		]// Description
	);
	require $startDir.'pageEnd.php';
?>