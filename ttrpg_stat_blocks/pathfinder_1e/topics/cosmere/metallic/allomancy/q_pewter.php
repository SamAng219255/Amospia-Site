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
		'Quintenium/Pewter', // Metal
		false, // User
		[
			'Quadrant' => 'Physical',
			'Internal/External' => 'Internal',
			'Pushing/Pulling' => 'Pushing'
		], // Categories
		'1 minute',
		[
			'While burning quintenium/pewter, the misting can spend a standard action to assume a form as ii/polymorph/ii except that it lasts as long as they continue burning quintenium/steel or until they assume another form as a standard action.'
		], // Description
		[
			'The misting can assume a form as ii/greater polymorph/ii. If the misting stops flaring, the effects switch to that of ii/polymorph/ii'
		], // Flare
		[
			10 => [
				'effect' => 'The misting receives a +2 enhancement bonus to their natural armor.',
				'draw' => ''
			],
			30 => [
				'effect' => 'The misting receives a +2 enhancement bonus to their natural armor.',
				'draw' => ''
			],
			60 => [
				'effect' => 'The misting receives a +2 enhancement bonus to their natural armor.',
				'draw' => ''
			],
			100 => [
				'effect' => 'The misting receives a +2 enhancement bonus to their natural armor.',
				'draw' => ''
			]
		]
	);
	require $startDir.'pageEnd.php';
?>