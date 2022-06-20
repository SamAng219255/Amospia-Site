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
	advAlchemyActivatedBlock(
		'Flame Fountain',// Name
		false,
		[
			'fire',
			'firework'
		],// Descriptors
		1,// Level
		'1 move action',// Activation Time
		'5 rounds/level',// Duration
		'none',// Saving Throw
		[
			'This hollow metal or wooden tube contains slow-burning powder. When you light the fuse, it creates a 3-foot-long, blazing fountain of red-hot fiery sparks. You wield this fountain of sparks as if it were a heavy mace. Attacks with the fountain are melee touch attacks. The fountain deals 1d8 points of fire damage (your Strength modifier does not apply to the damage). ',
			'The fountain sheds light as a torch and can ignite combustible materials such as parchment, straw, dry sticks, and cloth.'
		] // Description
	);
	require $startDir.'pageEnd.php';
?>