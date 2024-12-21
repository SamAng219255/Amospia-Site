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
		'Wolvar',
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
			'str' => 4,
			'wis' => 2,
			'int' => -4
		],
		'',
		[
			'bb/Monstrous Humanoid/bb: Wolvar are monstrous humanoid creatures with the wolvar subtype.',
			'bb/Medium/bb: Wolvar are Medium creatures and have no bonuses or penalties due to their size.',
			'bb/Fast Speed/bb: Wolvar have a base speed of 40 feet.',
			'bb/Darkvision/bb: Wolvar can see perfectly in darkness up to 60 feet away though they can only see in black and white in the dark.',
			'bb/Claws/bb: Wolvar receive two claw attacks. These are primary natural attacks that deal 1d4 slashing damage.',
			'bb/Natural Armor/bb: Wolvar gain a +1 natural armor bonus to their AC.',
			'bb/Languages/bb: Wolvar begin play speaking Wolvar. Wolvar with high Intelligence scores can choose from Common, Draconic, Kalu\'ak, and Orcish.'
		],
		false
	);
	require $startDir.'pageEnd.php';
?>