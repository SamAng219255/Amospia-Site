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
		'Swift Sneak Boots',// Name
		'Transmutation',// School
		3,// CL
		'feet',// Slot
		2500,// Price
		1,// Weight
		'ii/Swift sneak boots/ii are enchanted to make it easier to move quickly while maintaining stealth. While wearing these boots, you may move at your full speed using the Stealth skill without penalty.',// Desc
		false,// Destruction
		'bb/Requirements/bb Craft Wondrous Item, ii/longstrider/ii; bb/Cost/bb 1,250 gp'// Construction
	);
	require $startDir.'pageEnd.php';
?>