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
		'Brass', // Metal
		'Firesoul', // User
		[
			'Quadrant' => 'Cognitive'
		], // Categories
		'1 hour',
		[
			'Firesouls can store warmth, raising and lower the apparent temperature of their surroundings. Additionally, firesouls are not harmed by the additional heating or cooling provided by this ability. While tapping heat, the temperature at which the firesoul begins to take penalties from heat is increased by the same amount as the increase in temperature. Similarly, while storing heat, the temperature at which the firesoul begins to take penalties from cold is decreased by the same amount as the decrease in temperature.'
		], // Description
		[
			'columns' => [
				'Temperature Difference'
			],
			'rows' => [
				[
					'-12', // Incr
					'-120°' 
				],
				[
					'-8', // Incr
					'-80°' 
				],
				[
					'-4', // Incr
					'-40°' 
				],
				[
					'-2', // Incr
					'-20°' 
				],
				[
					'-1', // Incr
					'-10°' 
				],
				[
					'0', // Incr
					'0°' 
				],
				[
					'1', // Incr
					'+10°' 
				],
				[
					'2', // Incr
					'+20°' 
				],
				[
					'4', // Incr
					'+40°' 
				],
				[
					'8', // Incr
					'+80°' 
				],
				[
					'12', // Incr
					'+120°' 
				]
			]
		], // Increments
		[
			'special' => 'Effect while using applies only when tapping or storing at least 4 or -4 and the drawback applies only when not tapping or storing brass.',
			10 => [
				'effect' => 'The firesoul receives fire ,while storing, or cold, while tapping, resistance 5.',
				'draw' => 'The firesoul treats cold or hot environments as 10 degrees more severe.'
			],
			30 => [
				'effect' => 'Skin contact with the firesoul deals 1d4 cold, while storing, or fire, while tapping, damage to the creature that touched the the firesoul.',
				'draw' => 'The firesoul treats cold or hot environments as 20 degrees more severe.'
			],
			60 => [
				'effect' => 'The firesoul receives fire, while storing, or cold, while tapping, resistance 10.',
				'draw' => 'The firesoul treats cold or hot environments as 40 degrees more severe.'
			],
			100 => [
				'effect' => 'Skin contact with the firesoul deals 1d6 cold, while storing, or fire, while tapping, damage to the creature that touched the the firesoul.',
				'draw' => 'The firesoul treats cold or hot environments as 80 degrees more severe.'
			]
		]
	);
	require $startDir.'pageEnd.php';
?>