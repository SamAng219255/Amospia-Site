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
		'Beacon of Prayer',
		'Enchantment',
		5,
		'none',
		30000,
		'—',
		[
			'This beacon often takes the form of prayer beads, other prayer devices, or books of scripture or prayer. While active, allies within a 40-foot-radius burst gain a +1 luck bonus on attack rolls, weapon damage rolls, saves, and skill checks, while enemies in the area take a -1 penalty on such rolls. This affects all allies and enemies in the area as long as they remain in the area.',
			'A ii/beacon of prayer/ii can only be activated by a creature capable of casting ii/prayer/ii.'
		],
		false,
		'bb/Requirements/bb Craft Wondrous Items, ii/prayer/ii; bb/Cost/bb 15,000 gp'
	);
	require $startDir.'pageEnd.php';
?>