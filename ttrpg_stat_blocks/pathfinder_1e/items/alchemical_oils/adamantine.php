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
		'Adamantine Alchemical Oil',
		'item',
		quick_array([
			'bb/Price/bb 75 gp (weapon), 375 gp (armor); bb/Weight/bb 1/2 lb.'
		]),
		false,
		[
			[
				'title' => 'Description',
				'spaced' => true,
				'texts' => quick_array([
					'This oil uses powdered adamantine to harden the surface of the metal and grant it the hardness and properties of adamantine.'
				])
			],
			[
				'title' => 'Construction',
				'spaced' => true,
				'texts' => quick_array([
					'bb/Craft (Alchemy)/bb DC 25'
				])
			]
		]
	);
	require $startDir.'pageEnd.php';
?>