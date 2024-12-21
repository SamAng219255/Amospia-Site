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
		'Gorloc',
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
			'str' => 2,
			'con' => 2,
			'int' => -2
		],
		'',
		[
			'bb/Monstrous Humanoid/bb: Gorlocs are monstrous humanoid creatures with the aquatic, amphibious, and murloc subtypes.',
			'bb/Medium/bb: Gorlocs are Medium creatures and have no bonuses or penalties due to their size.',
			'bb/Normal Speed/bb: Gorlocs have a base speed of 30 feet and a swim speed of 30 feet which gives the normal +8 racial bonus to Swim checks that a swim speed normally grants.',
			'bb/Darkvision/bb: Gorlocs can see perfectly in darkness up to 60 feet away though they can only see in black and white in the dark.',
			'bb/Amphibious/bb: Gorlocs can breathe both in air and in water.',
			'bb/Bite/bb: Gorlocs receive a bite attack. This is a primary natural attack that deals 1d6 points of bludgeoning, piercing, and slashing damage.',
			'bb/Jumping/bb: Gorlocs receive a +2 racial bonus on Acrobatics checks to jump.',
			'bb/Languages/bb: Gorlocs begin play speaking Nerglish. Gorlocs with high Intelligence scores can choose from Common, Draconic, Kalu\'ak, and Orcish.'
		],
		false
	);
	require $startDir.'pageEnd.php';
?>