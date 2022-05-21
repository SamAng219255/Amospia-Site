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
		'Electrum', // Metal
		'Pinnacle', // User
		[
			'Quadrant' => 'Hybrid'
		], // Categories
		'1 hour',
		[
			'Pinnacles can store determination. While a pinnacle is storing determination, they become depressed and receive a penalty to attack rolls, skill checks, damage rolls, and saves. While a pinnacle is tapping determination, they become manic and receive a morale bonus to attack rolls, skill checks, damage rolls, and saves.'
		], // Description
		[
			'columns' => [
				'Morale Bonus/Penalty'
			],
			'rows' => [
				[
					'-20', // IncrSrch
					'-5' 
				],
				[
					'-16', // IncrSrch
					'-4' 
				],
				[
					'-12', // IncrSrch
					'-3' 
				],
				[
					'-8', // IncrSrch
					'-2' 
				],
				[
					'-4', // IncrSrch
					'-1' 
				],
				[
					'0', // IncrSrch
					'+0' 
				],
				[
					'4', // IncrSrch
					'+1' 
				],
				[
					'8', // IncrSrch
					'+2' 
				],
				[
					'12', // IncrSrch
					'+3' 
				],
				[
					'16', // IncrSrch
					'+4' 
				],
				[
					'20', // IncrSrch
					'+5' 
				]
			]
		], // Increments
		[
			10 => [
				'effect' => 'Cannot delay turn and must take at at least 1 move or standard action each turn.',
				'draw' => ''
			],
			20 => [
				'effect' => 'All morale bonuses possessed by the pinnacle increase by 1.',
				'draw' => 'All morale bonuses possessed by the pinnacle are reduced by 1.'
			],
			40 => [
				'effect' => 'All morale bonuses possessed by the pinnacle increase by 1.',
				'draw' => 'All morale bonuses possessed by the pinnacle are reduced by 1.'
			],
			60 => [
				'effect' => 'All morale bonuses possessed by the pinnacle increase by 1.',
				'draw' => 'All morale bonuses possessed by the pinnacle are reduced by 1.'
			],
			80 => [
				'effect' => 'All morale bonuses possessed by the pinnacle increase by 1.',
				'draw' => 'All morale bonuses possessed by the pinnacle are reduced by 1.'
			],
			100 => [
				'effect' => 'All morale bonuses possessed by the pinnacle increase by 1.',
				'draw' => 'All morale bonuses possessed by the pinnacle are reduced by 1.'
			]
		]
	);
	require $startDir.'pageEnd.php';
?>