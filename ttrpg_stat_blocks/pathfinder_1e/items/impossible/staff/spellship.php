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
		'Spellship',	#name
		'Transmutation',	#school
		10,	#lvl
		[
			'This sturdy wooden staff seems to be coated in a layer of waterproofing tar and is wrapped around by several ropes. The head of the staff is decorated with a silver anchor.',
			'By expending a charge from the staff, the following spell can be cast:'
		],	#staffDescPt1
		false,	#subschool
		[],	#descriptors
		[
			'F' => 1,
			'FNote' => 'a detailed and ornate miniature ship in a bottle made with a drop of your blood that costs 225,000 gp',
			'S' => 1,
			'V' => 1
		],	#components
		'1 full-round action',	#time
		'Medium',	#range
		false,	#target
		'one magically animated ship',	#effect
		false,	#area
		'1 hour/level',	#duration
		'none',	#save
		'no',	#sr
		[
			'Your focus becomes a full-sized ii/spellship/ii, which is a Colossal water vehicle up to 130 feet long and 20 feet wide. This ship can sail in water but can also sail on a sea of magic allowing it to sail through the sky. Both the starboard and port sides of the ship are armed with a bank of 20 stationary ii/arcane cannons/ii that function as the spell except you do not need to maintain line-of-sight to the cannon, they have a range increment of 100 ft., and are treated as direct-fire siege firearms.',
			'A ii/spellship/ii has a maximum speed of 200ft. and an acceleration of 50 ft. It has a hardness of 20, AC of 2, and 1,600 hit points. You are able to drive and operate every part of the ship entirely by youself with minimum effort from anywhere aboard the ship and the ship is propelled entirely by the magic of this spell. Driving checks use either Profession (sailor) or Spellcraft.',
			'Any damage sustained by your ii/spellship/ii similarly damages the focus.'
		],	#spellDesc
		['Charging a ii/staff of spellship/ii requires expending 2 9th level spell slots.']	#staffDescPt2
	);
	require $startDir.'pageEnd.php';
?>