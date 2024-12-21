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
		'High Arakkoa',
		15,
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
			'con' => -2
		],
		'',
		[
			'bb/Humanoid/bb: High arakkoa are humanoid creatures with the arakkoa subtype.',
			'bb/Medium/bb: High arakkoa are Medium creatures and have no bonuses or penalties due to their size.',
			'bb/Normal Speed/bb: High arakkoa have a base speed of 30 feet and a fly speed of 40 feet with average maneuverability.',
			'bb/Gifted Linguist/bb: High arakkoa gain a +4 racial bonus on Linguistics checks, and they learn one additional language every time they put a rank in the Linguistics skill.',
			'bb/Trained Casters/bb: High arakkoa gain a +1 racial bonus on Knowledge (arcana) and Spellcraft checks and gain a +2 racial bonus on concentration checks made to cast arcane spells defensively.',
			'bb/Wing Strike/bb: High arakkoa gain two wing natural attacks which are secondary natural attacks that deal 1d4 points of bludgeoning damage. Since their wings are part of their arms, they cannot make an attack with a wing in the same full-attack action as they use a weapon held in that hand.',
			'bb/Languages/bb: High arakkoa begin play speaking Apexis. High arakkoa with high Intelligence scores may know any language (other than secret languages).'
		],
		false
	);
	require $startDir.'pageEnd.php';
?>