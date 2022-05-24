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
		'Quintenium/Nicrosil', // Metal
		false, // User
		[
			'Quadrant' => 'Spiritual'
		], // Categories
		'1 round',
		[
			'A feruchemist can store their casting ability, in the form of their caster level, in quintenium/nicrosil. While storing, the feruchemist\'s ability to manifest magic weakens, reducing their effective caster level for all dependant abilities. While tapping, the feruchemist\'s ability to manifest magic strengthens, increasing their effective caster level for all dependant abilities.'
		], // Description
		[
			'columns' => [
				'Caster Level'
			],
			'rows' => [
				[
					'-8',
					'-100%' 
				],
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
					'+0' 
				],
				[
					'2',
					'+1' 
				],
				[
					'4',
					'+2' 
				],
				[
					'6',
					'+3' 
				],
				[
					'8',
					'+4' 
				],
				[
					'12',
					'+5' 
				],
				[
					'16',
					'+6' 
				],
				[
					'24',
					'+7' 
				]
			]
		], // Increments
		[
			10 => [
				'effect' => 'Grants access to the following increment (Increment 32; Caster Level +8)',
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