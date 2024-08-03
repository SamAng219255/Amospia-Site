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
		'Force Field',	#name
		'Abjuration',	#school
		10,	#lvl
		[
			'This seemingly glass staff is topped with a similarly glass orb and appears overall rather plain. It bears an enchantment on it that makes it useful in defending one\'s self however. While holding the staff it guides your movements to be able to use the staff not only to guard yourself by also nearby allies granting a +2 bonus to AC to yourself and allies within your reach.',
			'By expending a charge from the staff, the following spell can be cast:'
		],	#staffDescPt1
		false,	#subschool
		['force'],	#descriptors
		[
			'M' => 1,
			'MNote' => 'a small glass marble',
			'S' => 1,
			'V' => 1
		],	#components
		'1 standard action',	#time
		'Close',	#range
		'one willing creature within range',	#target
		false,	#effect
		false,	#area
		'1 round/level',	#duration
		'none',	#save
		'no',	#sr
		[
			'This spell, sometimes jokingly called "bubble", causes all incoming attacks, actions, and effects to be blocked as they reach you as though they encountered a ii/wall of force/ii. As this barrier fits tightly to your body and equipment, attacks must still hit your AC and you still receive a Reflex save to avoid effects but on a successful hit or a failed or partial save they strike the barrier instead. This barrier is immune to lesser magic and is unaffected by spells that allow spell resistance as well as dispelling or suppression spells and effects of lower than 9th level or 18th caster level respectively.',
			'Despite this barrier, your attacks, actions, spells, and other abilities are entirely unaffected.',
			'Additionally, if you are conscious, you may allow an ability to cross into the barrier, such as to allow a beneficial or healing spell through. This is a purely mental act that does not require an action and is done at the time the action you wish to allow is performed.',
			'This barrier otherwise has the same statistics and properties as a ii/wall of force/ii.'
		],	#spellDesc
		['Charging a ii/staff of force field/ii requires expending 2 9th level spell slots.']	#staffDescPt2
	);
	require $startDir.'pageEnd.php';
?>