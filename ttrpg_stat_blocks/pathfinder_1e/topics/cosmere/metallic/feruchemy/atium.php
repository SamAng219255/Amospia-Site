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
		'Atium', // Metal
		false, // User
		[
			'Quadrant' => 'Hybrid'
		], // Categories
		'1 day',
		[
			'Atium is a god metal and therefore, with few exceptions, only a full feruchemist can store an attribute in it. Atium can be used to store youth. While storing youth, a feruchemist quickly grows older and receives the physical stat changes associated with their new age but not the mental stat changes. A feruchemist cannot die from old age by storing too much youth at once. Conversely, while tapping youth, a feruchemist quickly grows younger, acquiring the physical stat changes but not the mental stat changes. This cannot prevent them from dying of old age. While not tapping or storing, a feruchemist returns to their normal age.'
		], // Description
		[
			'columns' => [
				'Change in Age'
			],
			'rows' => [
				[
					'(-4)', // IncrSrch
					'+250 years' 
				],
				[
					'(-0.4)', // IncrSrch
					'+25 years' 
				],
				[
					'(-0.08)', // IncrSrch
					'+5 years' 
				],
				[
					'(-0.016)', // IncrSrch
					'+1 year' 
				],
				[
					'0', // IncrSrch
					'no change' 
				],
				[
					'(+0.016)', // IncrSrch
					'-1 year' 
				],
				[
					'(+0.08)', // IncrSrch
					'-5 years' 
				],
				[
					'(+0.4)', // IncrSrch
					'-25 years' 
				],
				[
					'(+4)', // IncrSrch
					'-250 years' 
				]
			]
		], // Increments
		[
			'special' => 'Effect while Using applies when tapping or storing and Drawback applies only when doing neither with the exception of the drawback applied at 50 points of savantism. At 50 points of savantism, an fereuchemical atium savant ages twice as fast regardless of whether they are currently tapping or storing youth.',
			10 => [
				'effect' => 'Tapping youth can prevent death from old age while storing can cause it.',
				'draw' => 'Penalties taken by the feruchemist due to old age are doubled.'
			],
			50 => [
				'effect' => 'Penalties taken by the feruchemist due to age by 1',
				'draw' => 'The feruchemist ages twice as fast.'
			],
			100 => [
				'effect' => 'Penalties taken by the feruchemist due to age by 1',
				'draw' => 'Penalties taken by the feruchemist due to old age are doubled.'
			]
		]
	);
	require $startDir.'pageEnd.php';
?>