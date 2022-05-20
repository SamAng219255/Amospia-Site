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
		'Chromium', // Metal
		'Leecher', // User
		[
			'Quadrant' => 'Enhancement',
			'Internal/External' => 'External',
			'Pushing/Pulling' => 'Pulling'
		], // Categories
		'1 round',
		[
			'While burning chromium, the leecher can make a melee touch attack. On a successful touch the target loses 64 points of investiture. They cannot use this on themself.'
		], // Description
		[
			'While flaring chromium, the target loses twice as many points of investiture.'
		], // Flare
		[
			10 => [
				'effect' => 'The target can make an extra will save against any ongoing magical effects affecting them that requires a Will save and a DC 30 check against any other ongoing magical effects affecting them. On a success, the effect is dispelled.',
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