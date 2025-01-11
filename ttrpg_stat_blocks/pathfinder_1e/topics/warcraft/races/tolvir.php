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
		'Tol\'vir',
		18,
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
			'con' => 2,
			'int' => -2
		],
		'(See Large.)',
		[
			'bb/Monstrous Humanoid/bb: Tol\'vir are monstrous humanoid creatures with the tol\'vir subtype.',
			'bb/Large/bb: Tol\'vir are Large creatures and gain a -1 size penalty to their AC, a -1 size penalty on attack rolls, a +1 size bonus on combat maneuver checks and to their Combat Maneuver Defense, and a -4 size penalty on Stealth checks. bb/Tol\'vir also receive a +2 size bonus to Strength and -2 size penalty to Dexterity./bb These are permanent and stack with the tol\'vir\'s other racial ability score adjustments but are lost while polymorphed. Tol\'vir occupy a 10-foot area.',
			'bb/Fast Speed/bb: Tol\'vir have a base speed of 40 feet.',
			'bb/Darkvision/bb: Tol\'vir can see perfectly in darkness up to 60 feet away though they can only see in black and white in the dark.',
			'bb/Claws/bb: Tol\'vir receive two claw attacks. These are primary natural attacks that deal 1d4 points of slashing damage.',
			'bb/Desert Dweller/bb: Tol\'vir receive a +4 racial bonus on Constitution checks and Fortitude saves to avoid fatigue and exhaustion, as well as any other ill effects from running, forced marches, starvation, thirst, and hot or cold environments.',
			'bb/Quadruped/bb: Tol\'vir possess four legs and two arms, granting them a +4 racial bonus to CMD against trip attempts. In addition, tol\'vir use weapons and armor as if they were Medium (instead of Large).',
			'bb/Stalker/bb: Perception and Stealth are always class skills for tol\'vir.',
			'bb/Languages/bb: Tol\'vir begin play speaking Tol\'vir. Tol\'vir with high Intelligence scores can choose from Common, Kalimag, Orcish, and Titan.'
		],
		false
	);
	require $startDir.'pageEnd.php';
?>