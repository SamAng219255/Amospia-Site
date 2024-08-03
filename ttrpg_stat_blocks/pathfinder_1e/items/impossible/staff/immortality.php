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
		'Immortality',	#name
		'Transmutation',	#school
		10,	#lvl
		[
			'This staff is made of a darkly stained wood. The head of this staff holds a circular clock face that always keeps perfect time according to the time in the material plane.',
			'By expending a charge from the staff, the following spell can be cast:'
		],	#staffDescPt1
		false,	#subschool
		[],	#descriptors
		[
			'M' => 0,
			'S' => 1,
			'V' => 1
		],	#components
		'1 hour',	#time
		'personal',	#range
		'self',	#target
		false,	#effect
		false,	#area
		'1 year',	#duration
		'none',	#save
		'no',	#sr
		[
			'Casting this spell removes all penalties for being middle aged, old aged, or venerable aged for the duration and prevents dying from old age. It also changes your appearance to as though you were in your prime if you would otherwise appear older.',
			'This spell is immune to ii/dispel magic/ii but can be removed by ii/greater dispel magic/ii. If this spell ends for any reason, all of the effects of aging return. If you are older than your maximum age when this spell ends, you immediately die and turn to dust.'
		],	#spellDesc
		['Charging a ii/staff of immortality/ii requires expending 2 9th level spell slots.']	#staffDescPt2
	);
	require $startDir.'pageEnd.php';
?>