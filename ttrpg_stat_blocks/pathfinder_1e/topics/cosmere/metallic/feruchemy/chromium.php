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
		'Chromium', // Metal
		'Spinner', // User
		[
			'Quadrant' => 'Spiritual'
		], // Categories
		'1 round',
		[
			'Spinners store fortune, becoming unlucky whilst storing and lucky while tapping. While storing fortune, a spinner must roll twice and take the lower result on the first d20 rolls each round. They must roll a number of such "unlucky" d20 rolls every round as listed in the Unlucky Rolls column on the table. A spinner tapping fortune receives an additional pool of d20s each round that they may add to any d20 roll, up to a listed maximum, taking the highest of the group.'
		], // Description
		[
			'columns' => [
				'Unlucky Rolls',
				'Lucky d20 Pool Size',
				'Max Additional d20s per roll'
			],
			'rows' => [
				[
					'-24', // IncrSrch
					'3',
					'—',
					'—' 
				],
				[
					'-16', // IncrSrch
					'2',
					'—',
					'—' 
				],
				[
					'-8', // IncrSrch
					'1',
					'—',
					'—' 
				],
				[
					'0', // IncrSrch
					'—',
					'—',
					'—' 
				],
				[
					'8', // IncrSrch
					'—',
					'1',
					'1' 
				],
				[
					'16', // IncrSrch
					'—',
					'2',
					'1' 
				],
				[
					'24', // IncrSrch
					'—',
					'3',
					'2' 
				],
				[
					'32', // IncrSrch
					'—',
					'4',
					'2' 
				],
				[
					'140', // IncrSrch
					'—',
					'6',
					'2' 
				]
			]
		], // Increments
		[
			10 => [
				'effect' => 'The spinner receives as +2 luck bonus to AC, attacks, checks, and saves.',
				'draw' => 'The spinner takes a -2 penalty to AC, attacks, checks, and saves.'
			],
			30 => [
				'effect' => 'The spinner receives as +2 luck bonus to AC, attacks, checks, and saves.',
				'draw' => 'The spinner takes a -2 penalty to AC, attacks, checks, and saves.'
			],
			60 => [
				'effect' => 'The spinner receives as +2 luck bonus to AC, attacks, checks, and saves.',
				'draw' => 'The spinner takes a -2 penalty to AC, attacks, checks, and saves.'
			],
			100 => [
				'effect' => 'The spinner receives as +2 luck bonus to AC, attacks, checks, and saves.',
				'draw' => 'The spinner takes a -2 penalty to AC, attacks, checks, and saves.'
			]
		]
	);
	require $startDir.'pageEnd.php';
?>