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
		'Soul Speed Boots',// Name
		'Necromancy',// School
		5,// CL
		'feet',// Slot
		3000,// Price
		1,// Weight
		'A rather situational and almost perverse enchantment, ii/soul speed boots/ii take energy from the concentrated and corrupted souls found in soul sand and soul soil in the Nether to increase the wearer\'s speed. You no longer treat soul sand as difficult terrain and your speed is increased 50% while on soul sand or soul soil.',// Desc
		false,// Destruction
		'bb/Requirements/bb Craft Wondrous Item, ii/death knell/ii; bb/Cost/bb 1,500 gp'// Construction
	);
	require $startDir.'pageEnd.php';
?>