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
		'Pewter', // Metal
		'Brute', // User
		[
			'Quadrant' => 'Physical'
		], // Categories
		'1 round',
		[
			'Brutes can store physical strength and muscle mass in pewter. When a brute stores strength they receive a multiplicative penalty to strength and have a visibly decreased muscle mass often becoming scrawny. Conversely, while tapping strength, brutes receive a multiplicative bonus to strength and have a visibly increased muscle mass often becoming quite bulky. Due to the changes in body dimensions, brutes often wear loose or resizing clothing and resizing metalminds.'
		], // Description
		[
			'columns' => [
				'Strength Bonus'
			],
			'rows' => [
				[
					'-12',
					'-75%' 
				],
				[
					'-8',
					'-50%' 
				],
				[
					'-4',
					'-25%' 
				],
				[
					'0',
					'+0%' 
				],
				[
					'8',
					'+50%' 
				],
				[
					'16',
					'+100%' 
				],
				[
					'24',
					'+150%' 
				],
				[
					'32',
					'+200%' 
				]
			]
		], // Increments
		[
			10 => [
				'effect' => 'The brute receives a +2 bonus to strength.',
				'draw' => 'The brute takes a -2 penalty strength.'
			],
			30 => [
				'effect' => 'The brute receives a +2 bonus to strength.',
				'draw' => 'The brute takes a -2 penalty strength.'
			],
			60 => [
				'effect' => 'The brute receives a +2 bonus to strength.',
				'draw' => 'The brute takes a -2 penalty strength.'
			],
			100 => [
				'effect' => 'The brute receives a +2 bonus to strength.',
				'draw' => 'The brute takes a -2 penalty strength.'
			]
		]
	);
	require $startDir.'pageEnd.php';
?>