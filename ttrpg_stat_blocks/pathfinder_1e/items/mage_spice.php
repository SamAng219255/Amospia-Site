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
		'Mage Spice',
		'Transmutation',
		1,
		'none',
		25,
		'—',
		'These magical spices automatically improve the flavor of anything they are placed in or on to make it delicious to any creature who consumes it.',
		false,
		'bb/Requirements/bb Craft Wondrous Item, ii/prestidigitation/ii; bb/Cost/bb 12 gp'
	);
	require $startDir.'pageEnd.php';
?>