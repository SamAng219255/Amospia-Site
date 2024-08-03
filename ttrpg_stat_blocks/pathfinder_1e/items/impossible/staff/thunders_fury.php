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
		'Thunder\'s Fury',	#name
		'Evocation',	#school
		11,	#lvl
		[
			'This silver staff has veins of quartz running up and down its length. The head of the staff is topped with a large quartz crystal with a small bolt of lightning continuously arcing down its length and shedding ii/light/ii as per the spell.',
			'By expending a charge from the staff, the following spell can be cast:'
		],	#staffDescPt1
		false,	#subschool
		['air', 'electricity'],	#descriptors
		[
			'M' => 2,
			'MNote' => 'a chunk of amber and piece of iron',
			'S' => 1,
			'V' => 1
		],	#components
		'1 minute',	#time
		'1 mile/level',	#range
		false,	#target
		false,	#effect
		'1 mile radius and 2 mile high cylinder',	#area
		'concentration up to 10 minutes',	#duration
		'Reflex half',	#save
		'no',	#sr
		[
			'Storm clouds cover the area as wind and lightning pummel the region. The wind in the area increases to hurricane force winds with the wind in each square blowing a random direction each round. These winds render ranged attacks impossible, and siege weapons take a –8 penalty on attack rolls. Large or smaller creatures must succeed at a DC 15 Strength check or they are unable to move forward against the strength of the wind. Medium or smaller creatures on the ground must succeed at a DC 15 Strength check or they are knocked prone and roll 1d6x10 feet, taking 1d6 points of nonlethal damage per 10 feet. Flying creatures must succeed at a DC 25 Fly check or they are blown back 2d8×10 feet and take 4d6 points of nonlethal damage due to battering and buffeting. Each round, creatures, objects, and structures in the area have a 50% chance to find themselves in the path of wild lightning bolts that snake every which way without reason. Creatures, objects, and structures hit by a bolt take 10d8 electricity damage.',
			'In addition, the ruckus caused by the storm makes it impossible to hear creatures more than 5 feet away.'
		],	#spellDesc
		['Charging a ii/staff of thunder\'s fury/ii requires expending 4 9th level spell slots.']	#staffDescPt2
	);
	require $startDir.'pageEnd.php';
?>