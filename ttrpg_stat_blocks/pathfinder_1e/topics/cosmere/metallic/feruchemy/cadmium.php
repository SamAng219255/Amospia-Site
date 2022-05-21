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
	feruchemy(
		'Cadmium', // Metal
		'Gasper', // User
		[
			'Quadrant' => 'Hybrid'
		], // Categories
		'1 round',
		[
			'Gaspers can store breath. This allows them to continue to receive the effects of breathing even if there is no air to breathe, so long as they have sufficient breath stored in their metalminds. Storing breath is an uncomfortable process, preventing the gasper from receiving benefit from their breathing.'
		], // Description
		[
			'columns' => [
				'Effects'
			],
			'rows' => [
				[
					'-8', // IncrSrch
					'The gasper is equivalently holding their breath.' 
				],
				[
					'-4', // IncrSrch
					'The gasper is staggered.' 
				],
				[
					'0', // IncrSrch
					'' 
				],
				[
					'4', // IncrSrch
					'The gasper can hold their breath twice as long.' 
				],
				[
					'8', // IncrSrch
					'The gasper does not need to breathe.' 
				]
			]
		], // Increments
		[
			10 => [
				'effect' => 'The gasper is immune to fatigue.',
				'draw' => 'The gasper can only hold their breath for half as long.'
			],
			30 => [
				'effect' => 'The gasper can hustle for 2 hours without penalty.',
				'draw' => 'The gasper cannot hustle or run and cannot hold their breath.'
			],
			60 => [
				'effect' => 'The gasper can hustle for 4 hours without penalty.',
				'draw' => 'The gasper is always considered staggered.'
			],
			100 => [
				'effect' => 'The gasper can hustle for 8 hours without penalty.',
				'draw' => 'The gasper is constantly treated as though in an area of slow suffocation, taking 1d6 points of nonlethal damage every 15 minutes.'
			]
		]
	);
	require $startDir.'pageEnd.php';
?>