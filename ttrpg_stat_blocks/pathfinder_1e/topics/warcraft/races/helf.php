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
		'High Elf',
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
			'str' => -2,
			'dex' => 2,
			'int' => 2
		],
		'',
		[
			'bb/Humanoid/bb: High elves are humanoid creatures with the elf subtype.',
			'bb/Medium/bb: High elves are Medium creatures and have no bonuses or penalties due to their size.',
			'bb/Fast Speed/bb: High elves have a base speed of 35 feet.',
			'bb/Arcane Acuity/bb: Blood elves gain a +2 bonus on attack rolls to confirm a critical hit with a spell or magic weapon.',
			'bb/Arcane Affinity/bb: Blood elves gain a +2 bonus to Spellcraft checks.',
			'bb/Arcane Resistance/bb: Blood elves gain spell resistance equal to 11 + their character level.',
			'bb/Quickness/bb: High elves gain a +1 dodge bonus to armor class.',
			'bb/Languages/bb: High elves begin play speaking Common and Thalassian. High elves with high Intelligence scores can choose from Darnassian, Gnomish, Draenei, Dwarven, Orcish, Pandaren, and Shalassian.'
		],
		false
	);
	require $startDir.'pageEnd.php';
?>