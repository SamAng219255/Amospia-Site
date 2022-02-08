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
	magicItemBlockAuto(
		"Goodberry Sprig",
		"Conjuration",
		1,
		"none",
		720,
		"—",
		"This sprig of what appears to be holly without the berries can be commanded once per day to grow goodberries as per the spell.",
		false,
		"bb/Requirements/bb Craft Wondrous Item, ii/goodberry/ii; bb/Cost/bb 360 gp"
	);
	require $startDir.'pageEnd.php';
?>