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
		'Malatium', // Metal
		false, // User
		[
			'Quadrant' => 'Temporal',
			'Internal/External' => 'Internal',
			'Pushing/Pulling' => 'Pulling'
		], // Categories
		'1 round',
		[
			'Malatium is an alloy of a god metal and therefore, with few exceptions, can only be burned by a mistborn. Specifically, malatium is an alloy of atium and gold. While burning malatium, a mistborn can see the past of whoever they are looking at. Each round the mistborn can choose to focus on another individual either seeing their past or a potential version of them had they made different choices in the past. This decision can be random or made by the GM. This image is usually relevant to the target\'s current situation.'
		], // Description
		[
			'The mistborn can see a vision of an event in the target\'s past instead of a single image of them.'
		], // Flare
		[
			10 => [
				'effect' => 'The mistborn has a chance equal to their number of points of savantism to be able to choose a specific time in the past to see or to see change originating from and has an equal chance to be able to choose whether they see either the target\'s past self or a potential version of target.',
				'draw' => ''
			]
		]
	);
	require $startDir.'pageEnd.php';
?>