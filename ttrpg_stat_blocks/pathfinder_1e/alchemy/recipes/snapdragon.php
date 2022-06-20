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
	advAlchemyRocketBlock(
		'Snapdragon Firework',// Name
		false,
		[
			'fire',
			'firework',
			'light'
		],// Descriptors
		0,// Level
		'1 standard action',// Ignition Time
		'—',// Range Increment
		'Long',// Max Range
		'instantaneous',// Duration
		'Reflex half and negates; see text',// Saving Throw
		[
			'Unlike most rockets, a ii/snapdragon firework/ii travels in a winding, zig-zag path to the target. Creatures in the target square take 1d4 points of and are dazzled for 1 round. A successful Reflex save halves the damage taken and negates the dazzled effect.',
			'The winding path of the rocket allows it to easily avoid most obstacles. You do not need to roll in order to land in the target square, but, if the rocket must travel through a space less than 2-1/2 feet across or stray more than 5 feet from a straight line to avoid cover, the rocket instead bounces of the cover in a random direction.'
		] // Description
	);
	require $startDir.'pageEnd.php';
?>