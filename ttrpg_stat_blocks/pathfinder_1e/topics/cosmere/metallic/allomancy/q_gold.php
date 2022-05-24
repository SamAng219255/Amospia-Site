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
	allomancy(
		'Quintenium/Gold', // Metal
		false, // User
		[
			'Quadrant' => 'Temporal',
			'Internal/External' => 'Internal',
			'Pushing/Pulling' => 'Pulling'
		], // Categories
		'1 minute',
		[
			'While burning quintenium/gold, all creatures can see the misting\'s recent past as a series of afterimages following the misting. So long as the misting is not denied their dexterity to their AC, these images can be used to force attackers to take a 10% miss chance when attacking the misting. These images also reveal where the misting was and what actions they took the previous turn.'
		], // Description
		[
			'The images become more frequent and last longer. The miss chance increases to 35% and these images reveal where the misting was and what actions they took the previous two turns.'
		], // Flare
		[
			10 => [
				'effect' => 'The misting can sense the presence of the shadows allowing them to know their relative position without seeing them.',
				'draw' => ''
			],
			20 => [
				'effect' => 'The miss chance increases to 14% or 38% when flaring.',
				'draw' => ''
			],
			40 => [
				'effect' => 'The miss chance increases to 18% or 41% when flaring.',
				'draw' => ''
			],
			60 => [
				'effect' => 'The miss chance increases to 22% or 44% when flaring.',
				'draw' => ''
			],
			80 => [
				'effect' => 'The miss chance increases to 26% or 47% when flaring.',
				'draw' => ''
			],
			100 => [
				'effect' => 'The miss chance increases to 30% or 50% when flaring.',
				'draw' => ''
			]
		]
	);
	require $startDir.'pageEnd.php';
?>