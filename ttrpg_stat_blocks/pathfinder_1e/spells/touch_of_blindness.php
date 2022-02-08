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
	spellBlockAuto(
		'Touch of Blindness',// Name
		'Necromancy',// School
		[
			'darkness',
			'shadow'
		],// Descriptors
		[
			'antipaladin' => 1,
			'arcanist' => 1,
			'bard' => 1,
			'cleric' => 1,
			'oracle' => 1,
			'paladin' => 1,
			'shaman' => 1,
			'skald' => 1,
			'sorcerer' => 1,
			'warpriest' => 1,
			'witch' => 1,
			'wizard' => 1 
		],// Levels
		[
			'V' => 1
		],// Components
		'1 standard action',// Casting Time
		'Touch',// Range
		'creature or creatures touched (up to one/level)',// Target
		false,// Effect
		false,// Area
		'1 round/level (see text)',// Duration
		'Fortitude negates',// Save
		'yes',// SR
		[
			'A touch from your hand, which is engulfed in darkness, disrupts a creature’s vision by coating its eyes in supernatural darkness. Each touch causes the target to become blinded for 1 round unless it makes a successful Fortitude saving throw. You can use this melee touch attack up to one time per caster level. Any touch attack not used after 1 round per caster level is lost.',
			'If the caster has the shadow vision ability, this spell instead coats the target\'s eyes with aa/blinding_light|blinding light/aa, replacing the darkness descriptor with the light descriptor. Using a successful DC 10 spellcraft check it is possible to switch between whether it uses supernatural darkness or blinding light, gaining and losing the corresponding descriptors. If the caster fails the check, the spell uses their native method. Additionally, the caster may choose to vary the method between targets requiring a DC 20 spellcraft check. If this check fails the spell fails and is lost with no effect. This choice is made when the spell is cast.'
		]// Description
	);
	require $startDir.'pageEnd.php';
?>