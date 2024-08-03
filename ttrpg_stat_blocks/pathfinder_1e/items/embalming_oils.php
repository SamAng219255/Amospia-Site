<?php 
	$startDir='';
	for($i=0; $i<5; $i++) {
		if(file_exists($startDir.'pageStart.php')) {
			require $startDir.'pageStart.php';
			break;
		}
		else {
			$startDir='../'.$startDir;
		}
	}
	magicItemBlockAuto(
		'Blessed Embalming Oils',
		'Transmutation',
		3,
		'none',
		18000,
		'—',
		'A corpse treated with these oils will not decay and further days after being treated do not count against the time limit for spells such as ii/raise dead/ii. In addition, the creature cannot be raised into undeath. If the creature has already been turned into an undead, these oils have no effect outside of preserving the body.',
		false,
		'bb/Requirements/bb Craft Wondrous Item, ii/gentle repose/ii, ii/consecrate/ii; bb/Cost/bb 9,000 gp'
	);
	require $startDir.'pageEnd.php';
?>