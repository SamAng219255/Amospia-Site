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
		'Vorkai',
		15,
		'',
		'',
		'',
		'',
		'',
		'',
		'',
		'',
		[
			'str' => 4,
			'wis' => 2,
			'dex' => -2
		],
		'',
		[
			'bb/Fey/bb: Vorkai are fey creatures with the night fae subtype.',
			'bb/Medium/bb: Vorkai are Medium creatures and have no bonuses or penalties due to their size.',
			'bb/Fast Speed/bb: Vorkai have a base speed of 40 feet.',
			'bb/Low-Light Vision/bb: Vorkai can see twice as far in conditions of dim light.',
			'bb/Damage Reduction/bb: Vorkai gain DR 5/cold iron.',
			'bb/Natural Connection/bb: Vorkai gain a +2 racial bonus on Knowledge (nature) checks.',
			'bb/Quadruped/bb: Vorkai possess four legs and two arms, granting them a +4 racial bonus to CMD against trip attempts.',
			'bb/Sprinter/bb: Vorkai gain a +10 foot racial bonus to their speed when using the charge, run, or withdraw actions.',
			'bb/Languages/bb: Vorkai begin play speaking Shadowspeak. Vorkai with high Intelligence scores may know any language (other than secret languages).'
		],
		false
	);
	require $startDir.'pageEnd.php';
?>