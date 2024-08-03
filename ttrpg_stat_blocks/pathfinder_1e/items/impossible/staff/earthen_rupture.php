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
		'Earthen Rupture',	#name
		'Evocation',	#school
		11,	#lvl
		[
			'This copper colored staff has crack-like shapes along its sides made of emerald. It\'s top is ornamented with a shape like the head of a small sledge hammer with large emeralds embedded in the flat sides that shine ii/light/ii as per the spell.',
			'By expending a charge from the staff, the following spell can be cast:'
		],	#staffDescPt1
		false,	#subschool
		['acid', 'earth'],	#descriptors
		[
			'M' => 1,
			'MNote' => 'a small vial of acid',
			'S' => 1,
			'V' => 1
		],	#components
		'1 minute',	#time
		'1 mile/level',	#range
		'1 mile radius area of earth terrain',	#target
		false,	#effect
		false,	#area
		'concentration up to 10 minutes',	#duration
		'none, see text',	#save
		'no',	#sr
		[
			'This spell causes the ground to quake and rupture. The ground quakes as the spell earthquake, but it also forms greater fissures that snake throughout the region dividing it into individual regions regardless of the terrain. Each round these divided portions shift and move around.',
			'Roll 1d20 and 1d12 for each region when this spell is cast. Over the course of the spell, the region moves up or down a distance equal to 5 times 10 less than the 1d20 roll, treating positive results as upward movement and negative results as downward movement. If the 1d12 roll landed on a number from 1-8, the ground also tilts over the course of the spell in a direction depending on the number rolled, treating 1 north and then moving counterclockwise with 2 being northwest and so on. On a 9-12 the ground does not tilt. If the ground does tilt, the angle it tilts at is (1d4 × 10) + 1d10 + 10°.',
			'Each of these great fissures also collapse the ground on top of them into 5-feet-wide 200-feet-deep chasms that do not seal up after the end of the spell and all of the fissures spew great globs of acid that deal 5d8 points of damage to creatures and objects in the area with a save for half.'
		],	#spellDesc
		['Charging a ii/staff of earthen rupture/ii requires expending 4 9th level spell slots.']	#staffDescPt2
	);
	require $startDir.'pageEnd.php';
?>