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
		'Quintenium/Gold', // Metal
		false, // User
		[
			'Quadrant' => 'WIP'
		], // Categories
		'WIP',// Burn Rate
		[
			'WIP'
		], // Description
		[
			'columns' => [
				'WIP'
			],
			'rows' => [
				[
					'WIP', // IncrSrch
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