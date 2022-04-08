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
		'Overcharged Capacitor',// Name
		'Bomb',// Form
		[
			'electricity'
		],// Descriptors
		3,// Level
		'instantaneous',// Duration
		'Reflex Partial or Negates; see text',// Saving Throw
		'This flask contains a suspended metal rod that holds a massive electrical charge that eletrocutes nearby objects when the seal is broken. The target takes 1d6 points of electricity damage per alchemy level (maximum 10d6), with a reflex save for half. Creatures within 5 feet of the initial target take half as much of the original damage as splash damage, with a reflex save to negate.
		If the original target fails their save, they are stunned for a number of rounds equal to half your alchemy level, maxmimum 5 rounds.' // Description
	);
	require $startDir.'pageEnd.php';
?>