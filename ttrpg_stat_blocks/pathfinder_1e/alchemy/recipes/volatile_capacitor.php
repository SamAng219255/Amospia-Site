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
	advAlchemySimpleBlock(
		'Volatile Capacitor',// Name
		'Bomb',// Form
		[
			'electricity'
		],// Descriptors
		1,// Level
		'instantaneous',// Duration
		'Reflex Half or Negates; see text',// Saving Throw
		'This flask contains a suspended metal rod that holds a massive electrical charge that eletrocutes nearby objects when the seal is broken. The target takes 1d6 points of electricity damage per alchemy level (maximum 5d6), with a reflex save for half. Creatures within 5 feet of the initial target take half as much of the original damage as splash damage, with a reflex save to negate.' // Description
	);
	require $startDir.'pageEnd.php';
?>