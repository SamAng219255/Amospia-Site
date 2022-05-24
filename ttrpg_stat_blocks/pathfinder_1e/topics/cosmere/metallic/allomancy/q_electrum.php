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
	allomancy(
		'Quintenium/Electrum', // Metal
		false, // User
		[
			'Quadrant' => 'Temporal',
			'Internal/External' => 'Internal',
			'Pushing/Pulling' => 'Pushing'
		], // Categories
		'1 round',
		[
			'While burning quintenium/electrum, the misting and all other nearby creatures can see an image of the misting as they will be at an unknown point in the future chosen by the GM. The vision is located in front of the misting facing them and is usually relevant to the misting\'s current situation. This future is not guaranteed but rather is a likely future given the current course of events.',
			'This is distant-future sight and therefore makes the misting\'s timeline distant-future divergent.'
		], // Description
		[
			'Creatures see a vision of an event in the misting\'s future instead of a single image.'
		], // Flare
		[
			10 => [
				'effect' => 'Has a chance equal to their number of points of savantism to be able to choose a specific time in their future to see.',
				'draw' => ''
			]
		]
	);
	require $startDir.'pageEnd.php';
?>