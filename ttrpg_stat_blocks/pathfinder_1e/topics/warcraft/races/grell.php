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
		'Grell',
		8,
		'',
		'',
		'',
		'',
		'',
		'',
		'',
		'',
		[
			'dex' => 4,
			'str' => -2,
			'int' => -2
		],
		'',
		[
			'bb/Fey/bb: Grell are fey creatures.',
			'bb/Small/bb: Grell are Small creatures and gain a +1 size bonus to their AC, a +1 size bonus on attack rolls, a –1 penalty on combat maneuver checks and to their Combat Maneuver Defense, and a +4 size bonus on Stealth checks.',
			'bb/Normal Speed/bb: Grell have a base speed of 30 feet.',
			'bb/Low-Light Vision/bb: Grell can see twice as far in conditions of dim light.',
			'bb/Agility/bb: Grell gain a +2 racial bonus to Acrobatics checks.',
			'bb/Quick/bb: Grell receive Run as a bonus feat and a +2 racial bonus on initiative checks.',
			'bb/Languages/bb: Grell begin play speaking Grell. Grell with high Intelligence scores may can choose from Common, Darnassian, Goblin, Orcish.'
		],
		false
	);
	require $startDir.'pageEnd.php';
?>