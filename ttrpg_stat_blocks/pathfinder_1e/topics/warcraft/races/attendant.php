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
		'Attendant',
		11,
		'',
		'',
		'',
		'',
		'',
		'',
		'',
		'',
		[
			'int' => 2,
			'wis' => 2
		],
		'',
		[
			'bb/Native Outsider/bb: Attendants are outsiders with the native subtype.',
			'bb/Medium/bb: Attendants are Medium creatures and have no bonuses or penalties due to their size.',
			'bb/Normal Speed/bb: Attendants have a base speed of 30 feet.',
			'bb/Darkvision/bb: Attendants can see perfectly in darkness up to 60 feet away though they can only see in black and white in the dark.',
			'bb/Duty Bound/bb: Attendants gain a +2 racial bonus on all WIll saving throws.',
			'bb/Skill Focus/bb: Attendants gain a +1 racial bonus on Knowledge (religion) and a +2 bonus on Knowledge (planes) checks related to the Shadowlands. These skills are always considered class skills for attendants.',
			'bb/Languages/bb: Attendants begin play speaking Eredar. Attendants with high Intelligence scores may know any language (other than secret languages).'
		],
		false
	);
	require $startDir.'pageEnd.php';
?>