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
		'Bronze', // Metal
		'Sentry', // User
		[
			'Quadrant' => 'Cognitive'
		], // Categories
		'1 hour',
		[
			'Sentries are able to store wakefulness in a metalmind. While storing wakefulness, sentries become drowsy and tired. While tapping wakefulness, sentries are able to remain alert despite a lack of sleep. Sentries are capable of continuing to store wakefulness while sleeping but only time spent sleeping beyond what their body demands is able to fill the metalmind. Storing and tapping wakefulness will give or remove conditions related to exhaustion and will give penalties or bonuses vs sleep effects. The increments chart refers to fatigue in steps. These go from no conditions, to fatigued, to exhausted, to asleep.'
		], // Description
		[
			'columns' => [
				'Bonus vs Sleep Effects',
				'Conditions'
			],
			'rows' => [
				[
					'-6', // IncrSrch
					'Automatic Failure',
					'Unconscious (asleep)' 
				],
				[
					'-4', // IncrSrch
					'-5',
					'Increase fatigue by two steps' 
				],
				[
					'-2', // IncrSrch
					'-1',
					'Increase fatigue by one step' 
				],
				[
					'0', // IncrSrch
					'+0',
					'' 
				],
				[
					'2', // IncrSrch
					'+1',
					'Decrease fatigue by one step' 
				],
				[
					'4', // IncrSrch
					'+5',
					'Decrease fatigue by two steps' 
				],
				[
					'6', // IncrSrch
					'Immune',
					'Immune to sleep effects' 
				]
			]
		], // Increments
		[
			10 => [
				'effect' => 'The sentry only needs 6 hours of rest.',
				'draw' => 'The sentry must sleep twice as long to remove fatigue.'
			],
			50 => [
				'effect' => 'The sentry only needs 4 hours of rest.',
				'draw' => 'The sentry has the fatigued condition and it cannot be removed by any means.'
			],
			100 => [
				'effect' => 'The sentry only needs 2 hours of rest.',
				'draw' => 'The sentry has the fatigued condition and it cannot be removed by any means.'
			]
		]
	);
	require $startDir.'pageEnd.php';
?>