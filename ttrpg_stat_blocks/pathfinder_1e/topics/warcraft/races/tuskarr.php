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
		'Kalu\'ak',
		11,
		'Called Tuskarr by outsiders, Kalu\'ak are a race of walrus-like people native to the colder coastlines of the world.',
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
			'dex' => -2
		],
		'',
		[
			'bb/Humanoid/bb: Kalu\'ak are humanoid creatures with the kalu\'ak subtype.',
			'bb/Medium/bb: Kalu\'ak are Medium creatures and have no bonuses or penalties due to their size.',
			'bb/Slow and Steady/bb: Kalu\'ak have a base speed of 20 feet and speed is never modified by armor or encumbrance.',
			'bb/Buoyant/bb: Kalu\'ak gain a +4 racial bonus on Swim checks and can always take 10 while swimming.',
			'bb/Cold Weather Adaptation/bb: Kalu\'ak take no nonlethal or lethal damage from cold weather or cold water and gain resistance 5 to cold.',
			'bb/Rugged Fisherman/bb: Kalu\'ak gain a +2 racial bonus on Profession (fisherman) checks and on Survival checks made at sea or along the coast.',
			'bb/Languages/bb: Kalu\'ak begin play speaking Tuskarr. Kalu\'ak with high Intelligence scores can choose from Common, Draconic, Orcish, and Vrykul.'
		],
		false
	);
	require $startDir.'pageEnd.php';
?>