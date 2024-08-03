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
		'Angel-Fire',	#name
		'Evocation',	#school
		11,	#lvl
		[
			'This elegant staff appears to be made of some of an, almost shining, pure white stone with depictions of flames made with inlays of gold that rise up from the bottom. The head of the staff is composed of six wings that are seemingly made from pure gold with a ii/continual flame/ii rising up between them.',
			'By expending a charge from the staff, the following spell can be cast:'
		],	#staffDescPt1
		false,	#subschool
		['fire'],	#descriptors
		[
			'M' => 2,
			'MNote' => 'a piece of brimstone',
			'S' => 1,
			'V' => 1
		],	#components
		'1 minute',	#time
		'1 mile/level',	#range
		false,	#target
		false,	#effect
		'1 mile radius land area',	#area
		'concentration up to 10 minutes',	#duration
		'Reflex half',	#save
		'no',	#sr
		['Fire and brimstone fall from the sky within the area. Everything exposed to the sky in the area takes 5d8 points of damage immediately and every following round at the start of your turn. Half of this damage is fire damage but the other half results directly from divine power and is not affected by resistance or immunity. This damage also deals full damage to inanimate objects, treats the hardness of artificial structures as being halved, and deals twice as much damage to flammable objects such as wood or cloth and deals half again as much damage to materials with a low melting point such as lead, gold, copper, silver, and bronze as it causes them to burn or melt accordingly. Creatures in the area receive a Reflex save to reduce the damage by half. Inanimate objects and creatures that fail the save are set on fire if they take at least 1 point of damage from the spell and each exposed square is filled with fire each round.'],	#spellDesc
		['Charging a ii/staff of angel-fire/ii requires expending 4 9th level spell slots.']	#staffDescPt2
	);
	require $startDir.'pageEnd.php';
?>