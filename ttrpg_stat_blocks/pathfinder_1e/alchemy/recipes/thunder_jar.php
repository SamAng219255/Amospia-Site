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
		'Thunder Jar',// Name
		'Bomb',// Form
		[
			'sonic'
		],// Descriptors
		3,// Level
		'instantaneous',// Duration
		'Reflex Partial or Negates; see text',// Saving Throw
		'This clay jar has several chemicals designed to create a massive pressure wave when exposed to air. The target takes 1d6 points of sonic damage per alchemy level (maximum 10d6), with a reflex save for half. Creatures within 5 feet of the initial target take half as much of the original damage as splash damage, with a reflex save to negate.
		Any creature that fails their save, including the original target, is deafened for a number of rounds equal to your alchemy level.' // Description
	);
	require $startDir.'pageEnd.php';
?>