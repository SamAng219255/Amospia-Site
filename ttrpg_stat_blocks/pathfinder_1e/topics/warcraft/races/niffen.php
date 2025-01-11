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
		'Niffen',
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
			'con' => 2,
			'wis' => 2,
			'cha' => -2
		],
		'',
		[
			'bb/Humanoid/bb: Niffen are humanoid creatures with the niffen subtype.',
			'bb/Small/bb: Niffen are Small creatures and gain a +1 size bonus to their AC, a +1 size bonus on attack rolls, a –1 penalty on combat maneuver checks and to their Combat Maneuver Defense, and a +4 size bonus on Stealth checks.',
			'bb/Slow Speed/bb: Niffen have a base speed of 20 feet.',
			'bb/Scent/bb: Niffen gain the scent ability. Niffen also gain a +2 racial bonus on Perception checks to notice or locate objects within range of their scent ability.',
			'bb/Burrow/bb: Niffen gain a burrow speed of 20 feet.',
			'bb/Claws/bb: Niffen receive two claw attacks. These are primary natural attacks that deal 1d4 points of slashing damage.',
			'bb/Skill Bonus/bb: Niffen gain a +1 racial bonus on Knowledge (dungeoneering) and Survival checks made underground.',
			'bb/Languages/bb: Niffen begin play speaking Niffen. Niffen with high Intelligence scores can choose from Common, Drogbar, Orcish.'
		],
		false
	);
	require $startDir.'pageEnd.php';
?>