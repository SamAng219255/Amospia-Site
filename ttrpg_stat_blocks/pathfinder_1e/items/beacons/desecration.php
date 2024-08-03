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
		'Beacon of Desecration',
		'Evocation',
		3,
		'none',
		17000,
		'—',
		[
			'This beacon often takes the form of a unholy symbol. While active, the area around you is affected as though the target of a ii/desecrate/ii spell centered on you.',
			'A ii/beacon of desecration/ii can only be activated by a creature capable of casting ii/desecrate/ii.'
		],
		false,
		'bb/Requirements/bb Craft Wondrous Items, ii/desecrate/ii; bb/Cost/bb 8,500 gp'
	);
	require $startDir.'pageEnd.php';
?>