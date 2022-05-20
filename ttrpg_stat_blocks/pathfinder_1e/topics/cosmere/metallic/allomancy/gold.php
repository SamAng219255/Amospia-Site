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
		'Gold', // Metal
		'Augur', // User
		[
			'Quadrant' => 'Temporal',
			'Internal/External' => 'Internal',
			'Pushing/Pulling' => 'Pulling'
		], // Categories
		'1 round',
		[
			'While burning gold the augur will either see a past version of themself or they will see a potential version of themself had they made different choices in the past. This decision can be random or made by the GM. This image is usually relevant to the Augur\'s current situation.'
		], // Description
		[
			'Can see a vision of an event in their past instead of a single image of themself.'
		], // Flare
		[
			10 => [
				'effect' => 'The augur a chance equal to their number of points of savantism to be able to choose a specific time in their past to see or to see change originating from and an equal chance to be able to choose whether they see either their past self or a potential version of themself.',
				'draw' => ''
			]
		]
	);
	require $startDir.'pageEnd.php';
?>