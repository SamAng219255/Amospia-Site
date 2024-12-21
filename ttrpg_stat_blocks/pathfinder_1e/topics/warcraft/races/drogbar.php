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
		'Drogbar',
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
			'str' => 2,
			'wis' => 2,
			'cha' => -2
		],
		'',
		[
			'bb/Humanoid/bb: Drogbar are humanoid creatures with the drogbar subtype.',
			'bb/Medium/bb: Drogbar are Medium creatures and have no bonuses or penalties due to their size.',
			'bb/Normal Speed/bb: Drogbar have a base speed of 30 feet.',
			'bb/Darkvision/bb: Drogbar can see perfectly in darkness up to 120 feet away though they can only see in black and white in the dark.',
			'bb/Cave Dweller/bb: Drogbar gain a +1 bonus on Knowledge (dungeoneering) and Survival checks made underground.',
			'bb/Relentless/bb: Drogbar gain a +2 bonus on combat maneuver checks made to bull rush or overrun an opponent. This bonus only applies while both the member of this race and its opponent are standing on the ground.',
			'bb/Stability/bb: Drogbar receive a +4 racial bonus to their CMD when resisting bull rush or trip attempts while standing on the ground.',
			'bb/Stoneseer/bb: Drogbar add +1 to the caster level of any spells with the earth descriptor they cast. Drogbar also gain the following spell-like abilities (the caster level is equal to the user\'s character level):',
			'/mm/Constant—ii/nondetection/ii',
			'/mm/1/day—ii/magic stone/ii, ii/stone shape/ii, ii/stone tell/ii',
			'bb/Languages/bb: Drogbar begin play speaking Drogbar. Drogbar with high Intelligence scores can choose from Common, Draconic, Orcish, and Zandali.'
		],
		false
	);
	require $startDir.'pageEnd.php';
?>