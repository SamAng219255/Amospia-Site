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
		'Frozen Hell',	#name
		'Evocation',	#school
		11,	#lvl
		[
			'This staff assisted to be made of an unknown pure black metal with lines of sapphire stone depicting rows of icicles. The head is decorated with a pair of black demonic bat-like wings wrapped around a large teardrop shaped sapphire that shines a white-blue light as the spell ii/light/ii.',
			'By expending a charge from the staff, the following spell can be cast:'
		],	#staffDescPt1
		false,	#subschool
		['cold'],	#descriptors
		[
			'M' => 1,
			'MNote' => 'a handful of salt',
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
			'The temperature in the area rapidly cools so cold that even Hell itself would freeze over. The temperature is reduced to -50° F at which deals 1d6 points of lethal damage per minute (no save). In addition, a character must make a Fortitude save (DC 15, +1 per previous check) or take 1d4 points of nonlethal damage.',
			'A character who takes any damage from cold or exposure is beset by frostbite or hypothermia (treat them as fatigued). These penalties end when the character recovers the nonlethal damage they took from the cold and exposure.',
			'In addition a dense ice storm forms and any external area is filled with flying ice that deals 5d8 damage to exposed creatures, objects and structures. Half of this damage is cold damage while the other half is treated as piercing, slashing, and bludgeoning. This ice also obscures all sight, including darkvision, beyond 5 feet. A creature within 5 feet has concealment (attacks have a 20% miss chance). Creatures farther away have total concealment (50% miss chance, and the attacker can\'t use sight to locate the target).',
			'Water also rapidly freezes to a depth of 1 foot for each round it is exposed.'
		],	#spellDesc
		['Charging a ii/staff of frozen hell/ii requires expending 4 9th level spell slots.']	#staffDescPt2
	);
	require $startDir.'pageEnd.php';
?>