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
		'Arcane Arm',	#name
		'Conjuration',	#school
		10,	#lvl
		[
			'This staff appears to be made of shining steel with a head decorated with the hilt of a sword as though sheathed in the staff. When used as a quarterstaff to make melee attacks, it is treated as being masterwork and therefore grants a +1 enhancement bonus on attack rolls.',
			'By expending a charge from the staff, the following spell can be cast:'
		],	#staffDescPt1
		'Creation',	#subschool
		[],	#descriptors
		[
			'M' => 0,
			'S' => 1,
			'V' => 1
		],	#components
		'1 standard action',	#time
		'0 ft.',	#range
		false,	#target
		'1 melee weapon',	#effect
		false,	#area
		'1 min/level',	#duration
		'none',	#save
		'no',	#sr
		['This spell conjures a melee weapon that appears in your hands, sequestering the staff away in a personal pocket of the Ethereal Plane until the spell ends and it reappears in your hands once again replacing the conjured weapon. The conjured weapon can take the form of any magic or mundane weapon made of any possible weapon material so long as the total price of the weapon would be no more than 110,000 gp plus the standard cost of the weapon itself.',
		'The weapon is always sized appropriately for you, adjusting size as needed, and you are considered proficient with this weapon. The conjured weapon has a typical hardness and number of hit points for a weapon of its type. If the conjured weapon leaves your hand at any time, the spell ends at the beginning of your next turn.',
		'Additionally, if you have a prepared spell of 6th level or lower with a range of touch or an available spell slot of 6th level or lower that can be used to cast a spell with a range of touch, you can expend the prepared spell or spell slot to add 50 charges of the spell to the conjured weapon. These charges can be spent as a swift action that does not provoke an attack of opportunity to automatically cast the spell on the next creature struck by the conjured weapon.'
		],	#spellDesc
		['Charging a ii/staff of arcane arm/ii requires expending 2 9th level spell slots.']	#staffDescPt2
	);
	require $startDir.'pageEnd.php';
?>