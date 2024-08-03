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
		'Beacon of Protection',
		'Abjuration',
		3,
		'none',
		'8,000 gp (+1), 32,000 gp (+2), 72,000 gp (+3), 128,000 gp (+4), 200,000 gp (+5)',
		'—',
		[
			'This beacon often takes the form of a small, stylized shield. While active, up to four creatures within 30 feet receive a deflection bonus to their AC. Whenever you activate or maintain the beacon, you may choose which creatures receive this bonus.',
			'A ii/beacon of protection/ii can only be activated by a creature capable of casting divine spells and wielding a shield whose total shield bonus to AC, including enhancement bonuses, is at least the bonus granted by the beacon.'
		],
		false,
		'bb/Requirements/bb Craft Wondrous Items, ii/desecrate/ii; bb/Cost/bb 4,000 gp (+1), 16,000 gp (+2), 36,000 gp (+3), 64,000 gp (+4), 100,000 gp (+5)'
	);
	require $startDir.'pageEnd.php';
?>