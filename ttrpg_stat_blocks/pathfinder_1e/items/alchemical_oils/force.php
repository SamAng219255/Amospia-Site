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
		'Force Alchemical Oil',
		'item',
		quick_array([
			'bb/Price/bb 175 gp; bb/Weight/bb 1/2 lb.'
		]),
		false,
		[
			[
				'title' => 'Description',
				'spaced' => true,
				'texts' => quick_array([
					'This oil is stored as two substances that are applied one after the other on the weapon, which generate a thin barrier of force that extends into the ethereal, granting the benefits of the ii/ghost touch/ii weapon or armor quality.'
				])
			],
			[
				'title' => 'Construction',
				'spaced' => true,
				'texts' => quick_array([
					'bb/Craft (Alchemy)/bb DC 29'
				])
			]
		]
	);
	require $startDir.'pageEnd.php';
?>