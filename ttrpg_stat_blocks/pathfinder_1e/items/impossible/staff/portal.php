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
		'Portal',	#name
		'Conjuration',	#school
		10,	#lvl
		[
			'This darkwood staff has several bands of wrought iron wrapped around it. Above the tip, is a small window through which some unknown distant land can be seen that fades to a new random place every few minutes. This window only allows you to see the place. Creatures, objects, and effects cannot pass through it.',
			'By expending a charge from the staff, the following spell can be cast:'
		],	#staffDescPt1
		'Teleportation',	#subschool
		[],	#descriptors
		[
			'M' => 0,
			'S' => 1,
			'V' => 1
		],	#components
		'1 standard action',	#time
		'Medium',	#range
		false,	#target
		'hoop or doorway',	#effect
		false,	#area
		'concentration (up to 1 round/level)',	#duration
		'none',	#save
		'no',	#sr
		[
			'This spell creates a portal between two locations in space. The portal takes the form of either a round hoop or a doorway that is either completely rectangular or has an arch in the top. In either case it is between 5 and 20 feet across in either direction (caster\'s choice) oriented in the direction you desire when it comes into existence (typically vertical and facing you). It is a two-dimensional window looking at the place you specified when casting the spell, and anyone or anything that moves through is shunted instantly to the other side. A portal has a front and a back. Creatures moving through the portal from the front are transported to the other plane; creatures moving through it from the back are not.',
			'Traveling through the portal functions as either greater teleport or interplanetary teleport as decided when casting the spell.',
			'You may hold the portal open only for a brief time (no more than 1 round per caster level), and you must concentrate on doing so, or else the connection is severed.'
		],	#spellDesc
		['Charging a ii/staff of portal/ii requires expending 2 9th level spell slots.']	#staffDescPt2
	);
	require $startDir.'pageEnd.php';
?>