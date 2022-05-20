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
		'Aluminum', // Metal
		'Aluminum Gnat', // User
		[
			'Quadrant' => 'Enhancement',
			'Internal/External' => 'Internal',
			'Pushing/Pulling' => 'Pulling'
		], // Categories
		'1 round',
		[
			'Upon burning aluminum, an aluminum gnat loses their entire internal store of investiture. They also become immune to actions that require infusing them with investiture.'
		], // Description
		[
			'Flaring aluminum provides no additional effect.'
		], // Flare
		[
			10 => [
				'effect' => 'The aluminum gnat can make an extra will save against any ongoing magical effects affecting them that requires a Will save and a DC 30 check against any other ongoing magical effects affecting them. On a success, the effect is dispelled.',
				'draw' => ''
			],
			20 => [
				'effect' => 'They receive a +5 bonus to their Will save dispel ongoing effects.',
				'draw' => ''
			],
			40 => [
				'effect' => 'They receive a +5 bonus to their Will save dispel ongoing effects.',
				'draw' => ''
			],
			60 => [
				'effect' => 'They receive a +5 bonus to their Will save dispel ongoing effects.',
				'draw' => ''
			],
			80 => [
				'effect' => 'They receive a +5 bonus to their Will save dispel ongoing effects.',
				'draw' => ''
			],
			100 => [
				'effect' => 'They receive a +5 bonus to their Will save dispel ongoing effects.',
				'draw' => ''
			]
		]
	);
	require $startDir.'pageEnd.php';
?>