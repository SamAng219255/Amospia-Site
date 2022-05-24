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
		'Quintenium/Copper', // Metal
		false, // User
		[
			'Quadrant' => 'Cognitive'
		], // Categories
		'1 hour',
		[
			'A feruchemist can store skills in quintenium/copper.',
			'While storing, the feruchemist is treated as having fewer ranks in a given skill or a lower Base Attack Bonus (BAB), to a minimum of 0. Ranks in a Knowledge skill cannot be stored in quintenium/copper. Regardless of the number of ranks they are treated as having, if the feruchemist normally has at least 1 rank in a skill, they are still treated as being trained in that skill.',
			'While tapping, the feruchemist is treated as having more ranks in a given skill or a higher (BAB), to a maximum of twice their normal. If a feruchemist without ranks in a skill taps a number of ranks from an unkeyed metalmind, they do not become trained in that skill.',
			'Each metalmind can only store a ranks from a single skill and cannot store both skill ranks and BAB.'
		], // Description
		[
			'columns' => [
				'Skill/BAB Bonus/Penalty'
			],
			'rows' => [
				[
					'(-4)', // IncrSrch
					'-1'
				],
				[
					'0', // IncrSrch
					'+0'
				],
				[
					'(+4)', // IncrSrch
					'+1'
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