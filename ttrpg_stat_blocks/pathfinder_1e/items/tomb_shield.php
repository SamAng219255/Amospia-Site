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
		'Tomb Shield',
		'Necromancy',
		5,
		'none',
		18000,
		45,
		[
			'This enchanted tombstone functions as a ii/+1 ghost touch tower shield/ii. A ii/tomb shield/ii also treats its bonus to AC as being 2 higher against undead, grants resistance 5 to positive or negative energy damage, and grants a +2 bonus to saves against energy drain or death effects.'
		],
		false,
		'bb/Requirements/bb Craft Wondrous Items, ii/consecrate/ii; bb/Cost/bb 9,000 gp'
	);
	require $startDir.'pageEnd.php';
?>