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
		'Furbolg',
		9,
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
			'int' => -2
		],
		'',
		[
			'bb/Monstrous Humanoid/bb: Furbolgs are monstrous humanoid creatures with the furbolg subtype.',
			'bb/Medium/bb: Furbolgs are Medium creatures and have no bonuses or penalties due to their size.',
			'bb/Normal Speed/bb: Furbolgs have a base speed of 30 feet.',
			'bb/Darkvision/bb: Furbolgs can see perfectly in darkness up to 60 feet away though they can only see in black and white in the dark.',
			'bb/Claws/bb: Furbolgs receive two claw attacks. These are primary natural attacks that deal 1d4 slashing damage.',
			'bb/Natural Armor/bb: Furbolgs gain a +1 natural armor bonus to their AC.',
			'bb/Nature Expert/bb: Furbolgs gain a +1 racial bonus to Knowledge (nature) and Survival checks.',
			'bb/Languages/bb: Furbolgs begin play speaking Kalu\'ak. Furbolgs with high Intelligence scores can choose from Common, Darnassian, Orcish, and Taur-ahe.'
		],
		false
	);
	require $startDir.'pageEnd.php';
?>