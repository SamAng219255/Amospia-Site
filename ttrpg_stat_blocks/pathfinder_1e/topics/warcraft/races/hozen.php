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
		'Hozen',
		10,
		'',
		'',
		'',
		'',
		'',
		'',
		'',
		'',
		[
			'dex' => 4,
			'int' => -2,
			'wis' => -2,
			'cha' => -2
		],
		'',
		[
			'bb/Humanoid/bb: Hozen are humanoid creatures with the hozen subtype.',
			'bb/Medium/bb: Hozen are Medium creatures and have no bonuses or penalties due to their size.',
			'bb/Normal Speed/bb: Hozen have a base speed of 30 feet and a climb speed of 20 feet. Hozen also gain the +8 racial bonus on Climb checks that a climb speed normally grants.',
			'bb/Acrobatic/bb: Hozen gain a +2 racial bonus on Acrobatics checks.',
			'bb/Hatred/bb: Hozen gain a +1 racial bonus on attack rolls against jinyu.',
			'bb/Nimble Faller/bb: Hozen land on their feet even when they take lethal damage from a fall. Furthermore, they gain a +1 bonus to their CMD against trip attempts.',
			'bb/Prehensile Tail/bb: Hozen have a long, flexible tail that can be used to carry objects. They cannot wield weapons with their tails, but they can retrieve small, stowed objects carried on their persons as a swift action.',
			'bb/Languages/bb: Hozen begin play speaking Hozen and Orcish. Hozen with high Intelligence scores can choose from Common, Goblin, Mogu, Pandaren, Taur-ahe, and Zandali.'
		],
		false
	);
	require $startDir.'pageEnd.php';
?>