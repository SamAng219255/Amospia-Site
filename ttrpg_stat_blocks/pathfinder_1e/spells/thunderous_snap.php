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
		'Thunderous Snap',// Name
		'Evocation',// School
		[
			'sonic'
		],// Descriptors
		[
			'bard' => 9,
			'bloodrager' => 9,
			'cleric' => 9,
			'magus' => 9,
			'occultist' => 9,
			'oracle' => 9,
			'psychic' => 9,
			'sorcerer' => 9,
			'wizard' => 9 
		],// Levels
		[
			'S' => 1
		],// Components
		'1 standard action',// Casting Time
		'Medium',// Range
		'one object or creature per caster level',// Target
		false,// Effect
		false,// Area
		'instantaneous',// Duration
		'Fortitude half (object) or partial',// Save
		'yes (object)',// SR
		[
			'You snap your fingers and let out a targeted sonic burst that causes a the targeted object to break apart, with a greater effect on brittle objects.',
			'This spell functions as ii/ as/snap|Snap, Greater|snap, greater/as /ii except that it targets one object or creature per caster level and that against targets with at least 1 point of hardness, the spell deals a number of d12 points of damage equal to the target\'s hardness without a maximum number.',
			'This spell can target multiple regions on the same creature as separate targets each requiring a separate save for each including multiple of the same type of region though you cannot target the same limb, jaw, or finger multiple times with the same casting.'
		]// Description
	);
	require $startDir.'pageEnd.php';
?>