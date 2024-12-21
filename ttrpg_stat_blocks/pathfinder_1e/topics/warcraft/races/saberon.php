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
		'Saberon',
		14,
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
			'int' => -2
		],
		'',
		[
			'bb/Monstrous Humanoid/bb: Saberon are monstrous humanoid creatures with the saberon subtype.',
			'bb/Medium/bb: Saberon are Medium creatures and have no bonuses or penalties due to their size.',
			'bb/Normal Speed/bb: Saberon have a base speed of 30 feet.',
			'bb/Darkvision/bb: Saberon can see perfectly in darkness up to 60 feet away though they can only see in black and white in the dark.',
			'bb/Claws/bb: Saberon receive two claw attacks. These are primary natural attacks that deal 1d6 points of slashing damage.',
			'bb/Survival Expert/bb: Saberon gain a +2 racial bonus on Survival checks.',
			'bb/Swift as Shadows/bb: Saberon reduce the penalty for using Stealth while moving at full speed by 5, and reduce the Stealth check penalty for sniping by 10.',
			'bb/Languages/bb: Saberon begin play speaking Common and Darnassian. Saberon with high Intelligence scores can choose from Eredun, Grell, Orcish, and Thalassian.'
		],
		false
	);
	require $startDir.'pageEnd.php';
?>