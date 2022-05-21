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
		'Zinc', // Metal
		'Sparker', // User
		[
			'Quadrant' => 'Cognitive'
		], // Categories
		'1 minute',
		[
			'Sparkers can store mental speed making them dimwitted and slow while storing and clever while tapping. This results in a multiplicative bonus or penalty to intelligence.'
		], // Description
		[
			'columns' => [
				'Intelligence Bonus'
			],
			'rows' => [
				[
					'-6',
					'-75%' 
				],
				[
					'-4',
					'-50%' 
				],
				[
					'-2',
					'-25%' 
				],
				[
					'0',
					'+0%' 
				],
				[
					'4',
					'+50%' 
				],
				[
					'8',
					'+100%' 
				],
				[
					'12',
					'+150%' 
				],
				[
					'16',
					'+200%' 
				]
			]
		], // Increments
		[
			10 => [
				'effect' => 'The sparker receives a +2 bonus to intelligence.',
				'draw' => 'The sparker takes a -2 penalty intelligence.'
			],
			30 => [
				'effect' => 'The sparker receives a +2 bonus to intelligence.',
				'draw' => 'The sparker takes a -2 penalty intelligence.'
			],
			60 => [
				'effect' => 'The sparker receives a +2 bonus to intelligence.',
				'draw' => 'The sparker takes a -2 penalty intelligence.'
			],
			100 => [
				'effect' => 'The sparker receives a +2 bonus to intelligence.',
				'draw' => 'The sparker takes a -2 penalty intelligence.'
			]
		]
	);
	require $startDir.'pageEnd.php';
?>