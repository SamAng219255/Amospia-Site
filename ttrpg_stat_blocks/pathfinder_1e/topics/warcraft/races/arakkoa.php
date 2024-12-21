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
		'Arakkoa',
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
			'dex' => 2,
			'int' => 2,
			'con' => -2
		],
		'',
		[
			'bb/Humanoid/bb: Arakkoa are humanoid creatures with the arakkoa subtype.',
			'bb/Medium/bb: Arakkoa are Medium creatures and have no bonuses or penalties due to their size.',
			'bb/Normal Speed/bb: Arakkoa have a base speed of 30 feet.',
			'bb/Gifted Linguist/bb: Arakkoa gain a +4 racial bonus on Linguistics checks, and they learn one additional language every time they put a rank in the Linguistics skill.',
			'bb/Shadow-Touched/bb: Arakkoa are treated as one level higher when determining the effects of any shadow or darkness based spells or effects they cast (including spell-like and supernatural abilities). Arakkoa also gain the following spell-like ability:',
			'Constant—ii/pass without trace/ii',
			'bb/Sky Sentinel/bb: Arakkoa gain a +1 racial bonus on attack rolls, a +2 dodge bonus to AC, and a +2 bonus on Perception checks against flying creatures. In addition, enemies on higher ground gain no attack roll bonus against arakkoa.',
			'bb/Languages/bb: Arakkoa begin play speaking Ravenspeech. Arakkoa with high Intelligence scores may know any language (other than secret languages).'
		],
		false
	);
	require $startDir.'pageEnd.php';
?>