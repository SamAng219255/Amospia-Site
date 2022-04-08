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
		'Advanced Alchemist Fire',// Name
		'Bomb',// Form
		[
			'fire'
		],// Descriptors
		3,// Level
		'instantaneous',// Duration
		'Reflex Partial or Negates; see text',// Saving Throw
		'Advanced alchemist\'s fire is a mix of several volatile liquids that ignite when exposed to air and then stick to creatures, burning them again on subsequent rounds. The target takes 1d6 points of fire damage per alchemy level (maximum 10d6), with a reflex save for half. Creatures within 5 feet of the initial target take half as much of the original damage as splash damage, with a reflex save to negate.
		Any creature that fails their save, including the original target, has some of the flask\'s contents stick to them. At the beginning of their next turn and each subsequent turn they take 1d6 points of fire damage per 2 alchemy levels and receive another save against the original DC. If they make the save they successful remove the flask\'s contents taking only half the damage and they no longer take damage from it on subsequent turns. After a number of turns equal to half the alchemy level, rounded down, the contents of the flask stop burning and affected creatures no longer take damage on subsequent rounds. Covering affected creatures in water does not put out the fire but it does grant a +5 circumstance bonus to their next save.' // Description
	);
	require $startDir.'pageEnd.php';
?>