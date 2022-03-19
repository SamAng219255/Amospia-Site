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
		'Luring Fishing Rod',// Name
		'Enchantment',// School
		1,// CL
		'none',// Slot
		'400 gp (+2), 1,600 gp (+4), 3,600 gp (+6), 6,400 (+8), 10,000 (+10)',// Price
		2400,// Weight
		'This fishing rod has been special enchanted to lure fish towards it. You receive an enhancement bonus to skill checks to forage for food near a body of water containing fish and to profession (fisherman) checks to earn money.',// Desc
		false,// Destruction
		'bb/Requirements/bb Craft Wondrous Item, ii/charm animal/ii; bb/Cost/bb 200 gp (+2), 800 gp (+4), 1,800 gp (+6), 3,200 (+8), 5,000 (+10)'// Construction
	);
	require $startDir.'pageEnd.php';
?>