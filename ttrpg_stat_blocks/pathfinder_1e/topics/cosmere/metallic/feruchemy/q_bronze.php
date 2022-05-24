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
		'Quintenium/Bronze', // Metal
		false, // User
		[
			'Quadrant' => 'Cognitive'
		], // Categories
		'1 hour',
		[
			'A feruchemist can store focus in quintenium/bronze. While storing, the feruchemist has a difficult time remaining focused and receives multiplicative penalty to their Will save and a penalty to concentration checks. While fully storing focus, the feruchemist automatically fails any concentration checks. While tapping, the feruchemist can focus more easily, receiving a multiplicative bonus to their Will save and a bonus to concentration checks.'
		], // Description
		[
			'columns' => [
				'Will Bonus/Penalty',
				'Concentration Bonus/Penalty'
			],
			'rows' => [
				[
					'-4', // IncrSrch
					'-100%',
					'Automatic Failure'
				],
				[
					'-3', // IncrSrch
					'-75%',
					'-20'
				],
				[
					'-2', // IncrSrch
					'-50%',
					'-10'
				],
				[
					'-1', // IncrSrch
					'-25%',
					'-5'
				],
				[
					'0', // IncrSrch
					'+0%',
					'+0'
				],
				[
					'+2', // IncrSrch
					'+50%',
					'+10'
				],
				[
					'+4', // IncrSrch
					'+100%',
					'+20'
				],
				[
					'+6', // IncrSrch
					'+150%',
					'+30'
				],
				[
					'+8', // IncrSrch
					'+200%',
					'+40'
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