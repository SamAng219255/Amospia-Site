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
		'Freezing Bomb',// Name
		'Bomb',// Form
		[
			'cold'
		],// Descriptors
		3,// Level
		'instantaneous',// Duration
		'Reflex Partial or Negates; see text',// Saving Throw
		'This flask contains a substance designed to rapidly cool when exposed to air freezing nearby creatures and slowing them down. The target takes 1d6 points of cold damage per alchemy level (maximum 10d6), with a reflex save for half. Creatures within 5 feet of the initial target take half as much of the original damage as splash damage, with a reflex save to negate.
		Any creature that fails their save, including the original target, is staggered for a number of rounds equal to your alchemy level. If the target takes at least 1 point of fire damage during that time, whether or not it gets through any applicable resistances, immunity, or hardness, they receive an additional save with a +5 circumstance bonus to end their staggered condition early.' // Description
	);
	require $startDir.'pageEnd.php';
?>