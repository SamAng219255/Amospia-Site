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
		'Bandages of Quarantine',
		'Abjuration',
		3,
		'body',
		3000,
		'—',
		'These bandages have various prayers and holy words written on them in softly glowing golden runes and cover the wearer from head to toe. The wearer is unable to spread any diseases they carry to other creatures.',
		false,
		'bb/Requirements/bb Craft Wondrous Item, ii/remove disease/ii; bb/Cost/bb 1,500 gp'
	);
	require $startDir.'pageEnd.php';
?>