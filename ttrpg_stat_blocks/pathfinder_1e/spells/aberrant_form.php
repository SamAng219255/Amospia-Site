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
		'Aberrant Form I',// Name
		'Transmutation',// School
		[
			'polymorph'
		],// Descriptors
		[
			'alchemist' => 3,
			'arcanist' => 3,
			'bloodrager' => 3,
			'magus' => 3,
			'sorcerer' => 3,
			'wizard' => 3
		],// Levels
		[
			'V' => 1,
			'S' => 1,
			'M' => 1,
			'MNote' => 'a piece of the creature whose form you plan to assume'
		],// Components
		'1 standard action',// Casting Time
		'Personal',// Range
		'you',// Target
		false,// Effect
		false,// Area
		'1 min./level (D)',// Duration
		'none',// Save
		'no',// SR
		[
			'When you cast this spell, you can assume the form of any Small or Medium creature of the aberration type. If the form you assume has any of the following abilities, you gain the listed ability: climb 30 feet, fly 30 feet (average maneuverability), swim 30 feet, darkvision 60 feet, low-light vision, scent, and telepathy.',
			'ii/Small aberration/ii: If the form you take is that of a Small aberration, you gain a +2 size bonus to your Dexterity and a +1 natural armor bonus.',
			'ii/Medium aberration/ii: If the form you take is that of a Medium aberration, you gain a +2 size bonus to your Strength and a +2 natural armor bonus.'
		]// Description
	);
	spellBlockAuto(
		'Aberrant Form II',// Name
		'Transmutation',// School
		[
			'polymorph'
		],// Descriptors
		[
			'alchemist' => 4,
			'arcanist' => 4,
			'bloodrager' => 4,
			'magus' => 4,
			'sorcerer' => 4,
			'wizard' => 4
		],// Levels
		[
			'V' => 1,
			'S' => 1,
			'M' => 1,
			'MNote' => 'a piece of the creature whose form you plan to assume'
		],// Components
		'1 standard action',// Casting Time
		'Personal',// Range
		'you',// Target
		false,// Effect
		false,// Area
		'1 min./level (D)',// Duration
		'none',// Save
		'no',// SR
		[
			'This spell functions as aberrrant form I, except that it also allows you to assume the form of a Tiny or Large creature of the aberration type. If the form you assume has any of the following abilities, you gain the listed ability: climb 60 feet, fly 60 feet (good maneuverability), swim 60 feet, darkvision 60 feet, deaf, low-light vision, scent, telepathy, disease, engulf, grab, mimic object, no breath, pounce, sound mimicry, strangle, and trip.',
			'ii/Tiny aberration/ii: If the form you take is that of a Tiny aberration, you gain a +4 size bonus to your Dexterity, a -2 penalty to your Strength, and a +1 natural armor bonus.',
			'ii/Large aberration/ii: If the form you take is that of a Large aberration, you gain a +4 size bonus to your Strength, a -2 penalty to your Dexterity, and a +4 natural armor bonus.'
		]// Description
	);
	spellBlockAuto(
		'Aberrant Form III',// Name
		'Transmutation',// School
		[
			'polymorph'
		],// Descriptors
		[
			'alchemist' => 5,
			'arcanist' => 5,
			'bloodrager' => 5,
			'magus' => 5,
			'sorcerer' => 5,
			'wizard' => 5
		],// Levels
		[
			'V' => 1,
			'S' => 1,
			'M' => 1,
			'MNote' => 'a piece of the creature whose form you plan to assume'
		],// Components
		'1 standard action',// Casting Time
		'Personal',// Range
		'you',// Target
		false,// Effect
		false,// Area
		'1 min./level (D)',// Duration
		'none',// Save
		'no',// SR
		[
			'This spell functions as aberrrant form II, except that it also allows you to assume the form of a Diminutive or Huge creature of the aberration type. If the form you assume has any of the following abilities, you gain the listed ability: burrow 30 feet, climb 90 feet, fly 90 feet (good maneuverability), swim 90 feet, all-around vision, blindsense 30 feet, darkvision 60 feet, deaf, low-light vision, scent, telepathy, disease, amorphous, constrict, engulf, ferocity, grab, jet, mimic object, no breath, paralytic tentacles, poison, pounce, quickness, rake, sound mimicry, strangle, swallow whole, trample, trip, and web.',
			'ii/Diminutive aberration/ii: If the form you take is that of a Diminutive aberration, you gain a +6 size bonus to your Dexterity, a -4 penalty to your Strength, and a +1 natural armor bonus.',
			'ii/Huge aberration/ii: If the form you take is that of a Huge aberration, you gain a +6 size bonus to your Strength, a -4 penalty to your Dexterity, and a +6 natural armor bonus.'
		]// Description
	);
	spellBlockAuto(
		'Aberrant Form IV',// Name
		'Transmutation',// School
		[
			'polymorph'
		],// Descriptors
		[
			'alchemist' => 6,
			'arcanist' => 6,
			'bloodrager' => 6,
			'magus' => 6,
			'sorcerer' => 6,
			'wizard' => 6
		],// Levels
		[
			'V' => 1,
			'S' => 1,
			'M' => 1,
			'MNote' => 'a piece of the creature whose form you plan to assume'
		],// Components
		'1 standard action',// Casting Time
		'Personal',// Range
		'you',// Target
		false,// Effect
		false,// Area
		'1 min./level (D)',// Duration
		'none',// Save
		'no',// SR
		[
			'This spell functions as aberrrant form III except it allows you to use more abilities.. If the form you assume has any of the following abilities, you gain the listed ability: burrow 60 feet, climb 90 feet, fly 120 feet (good maneuverability), swim 120 feet, all-around vision, blindsense 60 feet, darkvision 90 feet, deaf, low-light vision, scent, tremorsense 60 feet, telepathy, disease, amorphous, breath weapon, constrict, engulf, ferocity, grab, jet, mimic object, mucus cloud, no breath, paralytic tentacles, poison, pounce, quickness, rake, rend, roar, slime, sound mimicry, spikes, strangle, swallow whole, trample, trip, and web. If the creature has immunity or resistance to any elements, you gain resistance 20 to those elements. If the creature has vulnerability to an element, you gain that vulnerability. If the creature whose form you assume is immune to mind-affecting effects, you also gain this immunity. '
		]// Description
	);
	require $startDir.'pageEnd.php';
?>