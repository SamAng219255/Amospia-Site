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
		'Quintenium/Brass', // Metal
		false, // User
		[
			'Quadrant' => 'Physical'
		], // Categories
		'1 minute',
		[
			'A feruchemist can store resistance to energy in quintenium/brass. While storing, the feruchemist loses some of their resistance to an energy type (acid, cold, electricity, fire, or sonic) or becomes weak to that type. While tapping, the feruchemist becomes more resistance to the energy type. Each metalmind can only store resistance to one type of energy.'
		], // Description
		[
			'columns' => [
				'Energy Resistance',
				'Weakness'
			],
			'rows' => [
				[
					'-16', // IncrSrch
					'',
					'Weakness'
				],
				[
					'(-4)', // IncrSrch
					'-1',
					''
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