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
	impossibleStaffBlockAuto(
		'True Death',	#name
		'Necromancy',	#school
		10,	#lvl
		[
			'This staff is a pure impenetrable black with a blackened raven\'s skull mounted on its end. Creatures with 10 or fewer hit dice within 30 feet of the staff must make a DC 25 Will save or else become panicked. Regardless of the outcome of the save, it remains in effect for 24 hours before a new save is required to attempt to approach the staff.',
			'By expending a charge from the staff, the following spell can be cast:'
		],	#staffDescPt1
		false,	#subschool
		['death'],	#descriptors
		[
			'M' => 2,
			'MNote' => 'a small hourglass filled with grave dust',
			'S' => 1,
			'V' => 1
		],	#components
		'1 standard action',	#time
		'Medium',	#range
		'one or more creatures within 120 feet of each other',	#target
		false,	#effect
		false,	#area
		'instantaneous',	#duration
		'Fortitude or Will negates, see text',	#save
		'yes',	#sr
		[
			'ii/True death/ii instantly slays the target creatures. The spell slays 1d8 HD worth of target creatures per caster level (maximum 25d8). Creatures with the fewest HD are affected first; among creatures with equal HD, those who are closest to you are affected first. HD that are not sufficient to affect a creature are wasted. Against undead creatures or other creature types immune to death effects, this spell is treated as not having the death descriptor.'
		],	#spellDesc
		['Charging a ii/staff of true death/ii requires expending 2 9th level spell slots.']	#staffDescPt2
	);
	require $startDir.'pageEnd.php';
?>