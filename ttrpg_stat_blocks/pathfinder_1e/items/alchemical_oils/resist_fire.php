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
		'Fire Resistance Alchemical Oil',
		'item',
		quick_array([
			'bb/Price/bb 150 gp, 300 gp (Greater); bb/Weight/bb 1/2 lb.'
		]),
		false,
		[
			[
				'title' => 'Description',
				'spaced' => true,
				'texts' => quick_array([
					'This oil protects the armor and its wearer from fire granting the armor and its wearer fire resistance 5. It can also be applied to a shield or other object to grant it (but not it\'s bearer) fire resistance 5. Greater fire resistance oil grants fire resistance 10 instead.'
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