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
		'Quintenium/Chromium', // Metal
		false, // User
		[
			'Quadrant' => 'Physical'
		], // Categories
		'1 minute',
		[
			'A feruchemist can store natural armor in quintenium/chromium. While storing, the feruchemist\'s skin grows softer and less protective reducing natural armor of softening such they take additional damage. This damage is untyped physical damage and is taken whenever the feruchemist takes at 1 point of physical damage. While tapping, the feruchemist\'s skin hardens and toughens forming protective layers granting an untyped bonus to natural armor.'
		], // Description
		[
			'columns' => [
				'Natural Armor',
				'Additional Damage'
			],
			'rows' => [
				[
					'(-4)', // IncrSrch
					'-1',
					''
				],
				[
					'-4', // IncrSrch
					'',
					'4'
				],
				[
					'-3', // IncrSrch
					'',
					'3'
				],
				[
					'-2', // IncrSrch
					'',
					'2'
				],
				[
					'-1', // IncrSrch
					'',
					'1'
				],
				[
					'0', // IncrSrch
					'+0',
					''
				],
				[
					'(+4)', // IncrSrch
					'+1',
					''
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