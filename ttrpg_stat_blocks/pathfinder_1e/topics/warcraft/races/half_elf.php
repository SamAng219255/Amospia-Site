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
		'Half-Human/High Elf',
		9,
		'Usually simply referred to as half-elves, half-human/high elves are the children of humans and high elves and their descendants. Only few half-elves are known about but it is said they possess prodigious talent for the arcane.',
		'',
		'',
		'',
		'',
		'',
		'',
		'',
		[
			'str' => -2,
			'dex' => 2,
			'int' => 2
		],
		'',
		[
			'bb/Humanoid/bb: Half-elves are humanoid creatures with the elf and human subtypes.',
			'bb/Medium/bb: Half-elves are Medium creatures and have no bonuses or penalties due to their size.',
			'bb/Fast Speed/bb: Half-elves have a base speed of 35 feet.',
			'bb/Arcane Affinity/bb: Half-elves gain a +2 bonus to Spellcraft checks.',
			'bb/Perception/bb: Half-elves gain a +2 racial bonus to Perception checks.',
			'bb/Quickness/bb: Half-elves gain a +1 dodge bonus to armor class.',
			'bb/Survival Instincts/bb: Half-elves gain a +1 racial bonus on all saving throws.',
			'bb/Weapon Specialization/bb: Half-elves are proficient with bows and greatswords.',
			'bb/Languages/bb: Half-elves begin play speaking Common and Thalassian. Half-elves with high Intelligence scores can choose from Darnassian, Draenei, Dwarven, Gnomish, Orcish, and Pandaren.'
		],
		false
	);
	require $startDir.'pageEnd.php';
?>