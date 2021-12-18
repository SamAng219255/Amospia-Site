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
?>
<title>Blindness, Lesser</title>
<?php
	spellBlockAuto(
		'Blindness, Lesser',// Name
		'necromancy',// School
		[
			'curse'
		],// Descriptors
		[
			'antipaladin' => 1,
			'bard' => 1,
			'bloodrager' => 1,
			'cleric' => 2,
			'oracle' => 2,
			'psychic' => 1,
			'shaman' => 2,
			'sorcerer' => 1,
			'witch' => 1,
			'wizard' => 1
		],// Levels
		[
			'V' => 1
		],// Components
		'1 standard action',// Casting Time
		'Medium',// Range
		'1 living creature',// Target
		false,// Effect
		false,// Area
		'1 round/level',// Duration
		'Fortitude negates',// Save
		true,// SR
		[
			'You call upon the powers of unlife to render the subject temporarily blinded.',
			'Until this effect ends, the target cannot see and cannot use or benefit from any ability requiring or involving any form of sight unless it explicitly functions for otherwise blind creatures. The target is also rendered immune to gaze attacks, visual effects, illusions, and other attack forms that rely on sight. As this is a curse effect, this effect cannot be dispelled as normal but a ii/remove blindess/ii, ii/remove curse/ii, ii/limited wish/ii, ii/wish/ii, or ii/miracle/ii spell can end the effect early.',
			'ii/Blindness, lesser/ii can be countered and dispelled by ii/remove blindess/ii.'
		]// Description
	);
	require $startDir.'pageEnd.php';
?>