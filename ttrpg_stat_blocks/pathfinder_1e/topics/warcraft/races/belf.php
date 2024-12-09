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
		'Blood Elf',
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
			'dex' => 2,
			'int' => 2,
			'str' => -2
		],
		'',
		[
			'bb/Humanoid/bb: Blood elves are humanoid creatures with the elf subtype.',
			'bb/Medium/bb: Blood elves are Medium creatures and have no bonuses or penalties due to their size.',
			'bb/Normal Speed/bb: Blood elves have a base speed of 30 feet.',
			'bb/Arcane Acuity/bb: Blood elves gain a +2 bonus on attack rolls to confirm a critical hit with a spell or magic weapons.',
			'bb/Arcane Affinity/bb: Blood elves gain a +2 bonus to Spellcraft checks.',
			'bb/Arcane Resistance/bb: Blood elves gain spell resistance equal to 11 + their character level.',
			'bb/Arcane Torrent/bb: Blood elves can cast ii/dispel magic/ii as a spell-like ability once per day.',
			'bb/Languages/bb: Blood elves begin play speaking Orcish and Thalassian. Blood elves with high Intelligence scores can choose from Common, Goblin, Gutterspeak, Shalassian, Taur-ahe, and Zandali.'
		],
		false
	);
	require $startDir.'pageEnd.php';
?>