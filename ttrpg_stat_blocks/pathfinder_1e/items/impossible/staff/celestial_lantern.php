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
		'Celestial Lantern',	#name
		'Conjuration',	#school
		10,	#lvl
		[
			'The top of this silver staff holds a miniature silver lantern from which magically shines light as a standard hooded lantern.',
			'By expending a charge from the staff, the following spell can be cast:'
		],	#staffDescPt1
		'Creation',	#subschool
		['light'],	#descriptors
		[
			'F' => 0,
			'S' => 1,
			'V' => 1
		],	#components
		'1 standard action',	#time
		'Medium',	#range
		false,	#target
		'a floating magic lantern',	#effect
		false,	#area
		'20 minutes/level (D)',	#duration
		'none',	#save
		'no',	#sr
		[
			'This spell conjures a floating lantern that holds several light-giving celestial bodies. Namely a sun, a moon, and 4 stars. For each level you possess over level 21 you may add an additional star to the lantern. This lantern floats around in your square near your head. It cannot be destroyed or moved but it can be dispelled by a successful ii/greater dispel magic/ii spell or an effect of equivalent or greater strength.',
			'The contained celestial bodies provide the following effects:',
			'ii/Solar Glow/ii: The contained sun illuminates a 60-foot radius burst with bright light that is treated as natural sunlight in every way including helping plants to grow and harming light sensitive creatures such as some undead.',
			'ii/Lunar Ray/ii: The contained moon illuminates a 90-foot cone-shaped burst with normal light that is treated as moon light for all purposes including the transformation of some lycanthropes. Additionally, the true nature of creatures and objects within this light can be seen as by ii/true seeing/ii. You can decide which way this cone faces when you cast this spell and at the start of your turn each round thereafter.',
			'ii/Guiding Stars/ii: Each star illuminates a 120-foot line with dim light. You may decide the path of this line when you cast the spell and at the start of your turn each round thereafter. When determining this line, you may choose a direction or target square to draw the line to or you may name a creature or object within 120 feet that the line extends in the direction of. Any visual obstructions within this line do not block sight but are still otherwise visible. If you choose to have the line drawn to a creature or object, it follows its target until directed otherwise or until the target moves beyond the range of the line.',
			'Any darkness effects of 10th level or lower that overlap the area of illumination of any of these celestial bodies are automatically dispelled.'
		],	#spellDesc
		['Charging a ii/staff of celestial lantern/ii requires expending 2 9th level spell slots.']	#staffDescPt2
	);
	require $startDir.'pageEnd.php';
?>