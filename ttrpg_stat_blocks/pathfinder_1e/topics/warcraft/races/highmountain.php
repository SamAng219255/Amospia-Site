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
		'Highmountain Tauren',
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
			'dex' => -4,
			'con' => 2,
			'int' => -2,
			'wis' => 2
		],
		'',
		[
			'bb/Humanoid/bb: Highmountain tauren are humanoid creatures with the tauren subtype.',
			'bb/Medium/bb: Highmountain tauren are Medium creatures and have no bonuses or penalties due to their size.',
			'bb/Normal Speed/bb: Highmountain tauren have a base speed of 30 feet.',
			'bb/Bull Rush/bb: Highmountain tauren gain Improved Overrun as a bonus feat.',
			'bb/Horns/bb: Highmountain tauren gain a gore natural attack that is a primary attack that deals 1d6 points of piercing damage. When used as part of a full-sttack action with manufactured weapon attacks, all natural weapons are rteated as secondary weapons.'
			'bb/Mountaineer/bb: Highmountain tauren are immune to altitude sickness, do not lose their Dexterity bonus to AC when making Climb checks or Acrobatics checks to cross narrow or slippery surfaces, and gain a +2 racial bonus on Acrobatics checks to cross narrow or slippery surfaces.',
			'bb/Pride of Ironhorn/bb: Highmountain tauren receive a +2 racial bonus to Profession (miner) checks.',
			'bb/Rugged Tenacity/bb: Highmountain tauren gain a +1 natural armor bonus to their Armor Class.',
			'bb/Waste Not Want Not/bb: Highmountain tauren receive a +2 racial bonus on Survival checks made to hunt and forage for food.',
			'bb/Languages/bb: Highmountain tauren begin play speaking Orcish and Taur-ahe. Highmountain tauren with high Intelligence scores can choose from Common, Goblin, Gutterspeak, Shalassian, Thalassian, and Zandali.'
		],
		false
	);
	require $startDir.'pageEnd.php';
?>