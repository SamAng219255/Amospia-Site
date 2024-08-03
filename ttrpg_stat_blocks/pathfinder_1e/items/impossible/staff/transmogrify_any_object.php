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
		'Transmogrify Any Object',	#name
		'Transmutation',	#school
		10,	#lvl
		[
			'This staff is carved from several pieces of bone and ivory which are wrapped in and held together with many different strips of fine leather all of which are each taken from different animals.',
			'By expending a charge from the staff, the following spell can be cast:'
		],	#staffDescPt1
		'Transmogrification',	#subschool
		[],	#descriptors
		[
			'M' => 2,
			'MNote' => 'mercury, gum arabic, and smoke',
			'S' => 1,
			'V' => 1
		],	#components
		'1 standard action',	#time
		'Close',	#range
		'one creature, or one nonmagical object of up to 100 cu. ft./level',	#target
		false,	#effect
		false,	#area
		'see text',	#duration
		'Fortitude negates (object); see text',	#save
		'yes (object)',	#sr
		[
			'This spell functions as ii/polymorph any object/ii except that it is a transmogrification effect instead of a polymorph effect and that it can transform the target into any creature or object though, when granting a form that has CR higher than 20, its statistics are reduced to CR 20 unless the target\'s original form has a CR over 20 in which case its statistics are reduced to the original form\'s CR.'
		],	#spellDesc
		['Charging a ii/staff of transmogrify any object/ii requires expending 2 9th level spell slots.']	#staffDescPt2
	);
	require $startDir.'pageEnd.php';
?>