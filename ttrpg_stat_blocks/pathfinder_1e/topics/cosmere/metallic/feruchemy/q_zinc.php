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
		'Quintenium/Zinc', // Metal
		false, // User
		[
			'Quadrant' => 'Physical'
		], // Categories
		'1 minute',
		[
			'A feruchemist can store visibility in quintenium/zinc. While storing, the feruchemist becomes less opaque and harder to see, receiving a bonus to Stealth and increasing the DC to see them by the same amount. While storing visibility at the maximum increment, they become entirely invisible. While tapping, the feruchemist becomes striking apparent and easier to see, forcing them to take a penalty to Stealth and reducing the DC to see them by the same amount. The bonus or penalty doubles while the feruchemist is standing still.'
		], // Description
		[
			'columns' => [
				'Stealth Bonus/Penalty'
			],
			'rows' => [
				[
					'-4', // IncrSrch
					'+20'
				],
				[
					'-3', // IncrSrch
					'+15'
				],
				[
					'-2', // IncrSrch
					'+10'
				],
				[
					'-1', // IncrSrch
					'+5'
				],
				[
					'0', // IncrSrch
					'+0'
				],
				[
					'2', // IncrSrch
					'-10'
				],
				[
					'4', // IncrSrch
					'-20'
				],
				[
					'6', // IncrSrch
					'-30'
				],
				[
					'8', // IncrSrch
					'-40'
				]
			]
		], // Increments
		[
			10 => [
				'effect' => 'WIP',
				'draw' => ''
			],
			30 => [
				'effect' => 'WIP',
				'draw' => ''
			],
			60 => [
				'effect' => 'WIP',
				'draw' => ''
			],
			100 => [
				'effect' => 'WIP',
				'draw' => ''
			]
		]
	);
	require $startDir.'pageEnd.php';
?>