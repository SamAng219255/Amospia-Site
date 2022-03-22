<?php 
	$startDir='';
	for($i=0; $i<10; $i++) {
		if(file_exists($startDir.'pageStart.php')) {
			require $startDir.'pageStart.php';
			break;
		}
		else {
			$startDir='../'.$startDir;
		}
	}
	block(
		'Shock Alchemical Oil',
		'item',
		quick_array([
			'bb/Price/bb 50 gp; bb/Weight/bb 1/2 lb.'
		]),
		false,
		[
			[
				'title' => 'Description',
				'spaced' => true,
				'texts' => quick_array([
					'This oil is stored as two substance that are applied one after the other on the weapon, which generate a powerful electric charge, dealing an additional 1d6 electric damage on a successful hit. This damage does not stack with the ii/shock/ii weapon quality.'
				])
			],
			[
				'title' => 'Construction',
				'spaced' => true,
				'texts' => quick_array([
					'bb/Craft (Alchemy)/bb DC WIP'
				])
			]
		]
	);
	require $startDir.'pageEnd.php';
?>