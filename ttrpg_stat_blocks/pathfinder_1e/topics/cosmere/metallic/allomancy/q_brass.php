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
		'Quintenium/Brass', // Metal
		false, // User
		[
			'Quadrant' => 'Physical',
			'Internal/External' => 'External',
			'Pushing/Pulling' => 'Pushing'
		], // Categories
		'2 rounds',
		[
			'While burning quintenium/brass, as a standard action, the misting may conjure an item as per ii/major creation/ii except that the item cannot be made of rare metals, the item appears in the hands of the misting, and that it lasts as long as they continue burning quintenium/brass or until they create another item as a standard action.'
		], // Description
		[
			'While flaring quintenium/brass, the item conjured by the allomancer can be composed of any material. If the allomancer stops flaring the metal while the current item is composed of a material that is impossible without flaring, the item winks out immediately.'
		], // Flare
		[
			10 => [
				'effect' => 'The allomancer can create items as a move action.',
				'draw' => ''
			],
			20 => [
				'effect' => 'The allomancer receives a +4 bonus to Craft checks made to create complex objects with allomantic quintenium/brass.',
				'draw' => ''
			],
			40 => [
				'effect' => 'The allomancer receives a +4 bonus to Craft checks made to create complex objects with allomantic quintenium/brass.',
				'draw' => ''
			],
			60 => [
				'effect' => 'The allomancer receives a +4 bonus to Craft checks made to create complex objects with allomantic quintenium/brass.',
				'draw' => ''
			],
			80 => [
				'effect' => 'The allomancer receives a +4 bonus to Craft checks made to create complex objects with allomantic quintenium/brass.',
				'draw' => ''
			],
			100 => [
				'effect' => 'The allomancer receives a +4 bonus to Craft checks made to create complex objects with allomantic quintenium/brass and they can create items as a swift action.',
				'draw' => ''
			]
		]
	);
	require $startDir.'pageEnd.php';
?>