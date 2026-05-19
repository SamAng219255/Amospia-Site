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
		'Steward',
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
			'int' => 2
		],
		'',
		[
			'bb/Monstrous Humanoid/bb: Stewards are monstrous humanoids.',
			'bb/Small/bb: Stewards are Small creatures and gain a +1 size bonus to their AC, a +1 size bonus on attack rolls, a –1 penalty on combat maneuver checks and to their Combat Maneuver Defense, and a +4 size bonus on Stealth checks.',
			'bb/Normal Speed/bb: Stewards have a base speed of 30 feet.',
			'bb/Darkvision/bb: Stewards can see perfectly in darkness up to 60 feet away though they can only see in black and white in the dark.',
			'bb/Skill Bonus/bb: Stewards gain a +2 racial bonus on Craft skill checks.',
			'bb/Helpful/bb: Stewards may always take a 10 on attack rolls and skill checks to aid another, even if they are distracted, and they grant +4 bonus to their ally\'s skill check, attack roll, or AC instead of the normal +2.',
			'bb/Languages/bb: Stewards begin play speaking Common and Shadowspeak. Stewards with high Intelligence scores may know any language (other than secret languages).'
		],
		false
	);
	require $startDir.'pageEnd.php';
?>