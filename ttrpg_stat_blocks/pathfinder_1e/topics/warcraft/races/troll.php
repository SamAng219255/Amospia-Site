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
		'Troll',
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
			'dex' => 2,
			'wis' => 2,
			'int' => -4
		],
		'',
		[
			'bb/Humanoid/bb: Trolls are humanoid creatures with the troll subtype.',
			'bb/Medium/bb: Trolls are Medium creatures and have no bonuses or penalties due to their size.',
			'bb/Normal Speed/bb: Trolls have a base speed of 30 feet.',
			'bb/Berserking/bb: Trolls gain the following extraordinary ability: If the hit points of a troll fall below 0 but they are not yet dead, they can continue to fight. If they do, they are staggered, and lose 1 hit point each round. They still die when their hit points reach a negative amount equal to their Constitution score.',
			'bb/Regeneration/bb: Trolls have fast healing 1 except their fast healing cannot heal them above a number of hit points equal to their number of levels.',
			'bb/Beast Slaying/bb: Trolls receive a +1 bonus on attack rolls against animals and magical beasts.',
			'bb/Da Voodoo Shuffle/bb: Trolls can cast freedom of movement once per day as a spell-like ability.',
			'bb/Dead Eye/bb: Trolls are proficient with spears and blow guns.',
			'bb/Languages/bb: Trolls begin play speaking Orcish and Zandali. Trolls with high Intelligence scores can choose from Common, Goblin, Gutterspeak, Shalassian, Taur-ahe, and Thalassian.'
		],
		false
	);
	require $startDir.'pageEnd.php';
?>