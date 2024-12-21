<?php 
	$startDir='';
	for($i=0; $i<20; $i++) {
		if(file_exists($startDir.'pageStart.php')) {
			require $startDir.'pageStart.php';
			break;
		}
		else {
			$startDir='../'.$startDir;
		}
	}
	raceBlockAuto(
		'Sylvar',
		10,
		'',
		'',
		'',
		'',
		'',
		'',
		'',
		'',
		[
			'str' => 2,
			'wis' => 2,
			'con' => -2
		],
		'',
		[
			'bb/Fey/bb: Sylvari are fey creatures with the night fae subtype.',
			'bb/Medium/bb: Sylvari are Medium creatures and have no bonuses or penalties due to their size.',
			'bb/Normal Speed/bb: Sylvari have a base speed of 30 feet.',
			'bb/Low-Light Vision/bb: Sylvari can see twice as far in conditions of dim light.',
			'bb/Antlers/bb: Sylvari have a gore natural attack that is a primary natural attack that deals 1d6 points of piercing damage.',
			'bb/Ardenweald Craftsman/bb: Sylvari gain a +2 racial bonus to Craft and Knowledge (nature) checks and Craft and Knowledge (nature) are always considered class skills for Sylvari.',
			'bb/Sprinter/bb: Sylvari gain a +10 foot racial bonus to their speed when using the charge, run, or withdraw actions.',
			'bb/Languages/bb: Sylvari begin play speaking Shadowspeak. Sylvari with high Intelligence scores may know any language (other than secret languages).'
		],
		false
	);
	require $startDir.'pageEnd.php';
?>