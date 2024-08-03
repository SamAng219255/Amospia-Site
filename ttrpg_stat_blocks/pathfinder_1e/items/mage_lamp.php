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
		'Mage Lamp',
		'Evocation',
		5,
		'none',
		675,
		'—',
		[
			'A ii/mage lamp/ii is a shining orb of blue-white light as bright as a hooded lantern. A ii/mage lamp/ii has no weight nor any solid components and hangs in the air where it is created. A ii/mage lamp/ii can only be moved by use of ii/mage hand/ii or other such telekinesis spells.'
		],
		false,
		'bb/Requirements/bb Craft Wondrous Items, ii/dancing lights/ii; bb/Cost/bb 650 gp'
	);
	require $startDir.'pageEnd.php';
?>