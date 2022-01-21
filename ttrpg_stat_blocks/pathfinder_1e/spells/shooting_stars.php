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
		'Shooting Stars',// Name
		'Transmutation',// School
		[],// Descriptors
		[
			'antipaladin' => 3,
			'bloodrager' => 3,
			'cleric' => 4,
			'druid' => 4,
			'inquisitor' => 3,
			'magus' => 3,
			'oracle' => 4,
			'paladin' => 3,
			'shaman' => 4,
			'sorcerer' => 3,
			'wizard' => 3 
		],// Levels
		[
			'V' => 1,
			'S' => 1,
			'DF' => 1
		],// Components
		'1 standard action',// Casting Time
		'Touch',// Range
		'up to three stones per caster level touched',// Target
		false,// Effect
		false,// Area
		'30 minutes per caster level or until discharged',// Duration
		'Will negates (harmless, object)',// Save
		'yes (harmless, object)',// SR
		[
			'This spell functions like ii/ aa/meteor1|micro meteor/aa /ii, except that it can be used on any stones small enough to comfortably fit in the user\'s hand and it gives the stones an enhancement bonus on attack and damage rolls of +1 per four caster levels (maximum +5). This bonus does not allow the stones to bypass damage reduction aside from magic. When casting this spell you can choose to reduce the enhancement bonus added by 1 or 2 to give the stone the ii/flaming/ii or ii/flaming burst/ii qualities respectively, so long as the resulting stones have at least a +1 enhancement bonus.',
			'You may also choose, when casting this spell, to enchant the stone such that they transmute into comets instead. In which case the enhancement bonus can be reduced to give the stones the ii/frost/ii or ii/icy burst/ii qualities instead with the same restrictions and costs.'
		]// Description
	);
	require $startDir.'pageEnd.php';
?>