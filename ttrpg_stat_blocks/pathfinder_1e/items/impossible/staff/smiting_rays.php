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
		'Smiting Rays',	#name
		'Evocation',	#school
		10,	#lvl
		[
			'This staff is made from smooth adamantine with a massive cut diamond affixed to the top.',
			'By expending a charge from the staff, the following spell can be cast:'
		],	#staffDescPt1
		false,	#subschool
		['force'],	#descriptors
		[
			'M' => 0,
			'S' => 1,
			'V' => 1
		],	#components
		'1 standard action',	#time
		'Long',	#range
		false,	#target
		'one or more rays',	#effect
		false,	#area
		'instantaneous',	#duration
		'none',	#save
		'no',	#sr
		[
			'You cast one or more rays that spring from the diamond at the end of the staff at targets you designate. This spell deals 3d6 points of force damage per level. You divide these dice among any number of rays in any way you desire before rolling them so long as each ray deals at least 1d6 points of damage and each ray deals a whole number of dice worth of damage.'
		],	#spellDesc
		['Charging a ii/staff of smiting rays/ii requires expending 2 9th level spell slots.']	#staffDescPt2
	);
	require $startDir.'pageEnd.php';
?>