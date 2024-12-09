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
		'Zandalari Troll',
		12,
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
			'bb/Humanoid/bb: Zandalari trolls are humanoid creatures with the troll subtype.',
			'bb/Medium/bb: Zandalari trolls are Medium creatures and have no bonuses or penalties due to their size.',
			'bb/Normal Speed/bb: Zandalari trolls have a base speed of 30 feet.',
			'bb/City of Gold/bb: Zandalari trolls gain a +2 bonus on Appraise checks to determine the price of non-magical goods that contain precious metals or gemstones and on Perception checks to locate hidden valuables.',
			'bb/Embrace of the Loa/bb: Zandalari trolls are tightly tied to their Loa. Each troll can spend an hour in the morning venerating a specific Loa. This time can overlap with similar activities to regain spells. Zandalari trolls that have a class or ability tied to the following of a specific Loa lose that ability if they venerate a different Loa. Spending time venerating a Loa as such grants a zandalari troll the benefits of a single domain or subdomain of that Loa plus an additional effect listed in the Loa\'s description.',
			'bb/Pterrordax Swoop/bb: Once per day as a spell-like ability, zandalari trolls can summon a pterrordax to safely lower them to the ground. This otherwise functions as ii/feather fall/ii.',
			'bb/Regeneratin\'/bb: Zandalari trolls have fast healing 1 except their fast healing cannot heal them above a number of hit points equal to their number of levels. Once per day, a zandalari troll can spend 10 minutes resting to heal all damage they\'ve taken.',
			'bb/Languages/bb: Zandalari trolls begin play speaking Orcish and Zandali. Zandalari trolls with high Intelligence scores can choose from Common, Goblin, Gutterspeak, Shalassian, Taur-ahe, and Thalassian.'
		],
		false
	);
	require $startDir.'pageEnd.php';
?>