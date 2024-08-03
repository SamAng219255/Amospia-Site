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
		'Demigod\'s Armor',	#name
		'Conjuration',	#school
		10,	#lvl
		[
			'This staff appears to be made out of many plates of mithral or adamantine depending on the preference of the creator. The top of this staff is then ornamented with a small helmet of the same material.',
			'By expending a charge from the staff, the following spell can be cast:'
		],	#staffDescPt1
		'Creation',	#subschool
		['force'],	#descriptors
		[
			'S' => 1,
			'V' => 1
		],	#components
		'1 standard action',	#time
		'0 ft.',	#range
		false,	#target
		'a set of magic armor',	#effect
		false,	#area
		'1 hour/level (D)',	#duration
		'none, see text',	#save
		'no',	#sr
		[
			'This spell conjures a set of magical armor around you, covering (and generally rendering moot) any existing armor worn. This armor provides a +10 armor bonus and a +5 enhancement bonus to AC which is treated as a force effect and applies against incorporeal attacks. It does not have a maximum Dexterity, armor check penalty or arcane spell failure chance. This armor also grants DR 20/—; resist acid, cold, electricity, fire, and sonic 20; immunity to critical hits; and spell resistance equal to 16 plus your caster level.',
			'While the exact appearance of this armor can vary wildly, it is always incredibly impressive and generally intimidating. All enemies within sight within 120 feet with a number of hit dice no more than 10 + your caster level must make a Will save or else become frightened. If they have a number of hit dice no more than your caster level - 5, they are automatically panicked instead.'
		],	#spellDesc
		['Charging a ii/staff of demigod\'s armor/ii requires expending 2 9th level spell slots.']	#staffDescPt2
	);
	require $startDir.'pageEnd.php';
?>