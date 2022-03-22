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
		'Slick Alchemical Oil',
		'item',
		quick_array([
			'bb/Price/bb 50 gp, 200 gp (Improved), 450 gp (Greater); bb/Weight/bb 1/2 lb.'
		]),
		false,
		[
			[
				'title' => 'Description',
				'spaced' => true,
				'texts' => quick_array([
					'This oil makes the surface of the armor incredibly slippery granting the benefits of the ii/slick/ii armor quality, granting a +5 bonus on Escape Artist checks. This oil also comes in improved and greater forms, granting a +10 and +15 bonus respectively. This oil can also be applied to other objects of up to about 5 pounds or 1 5-foot square making it slippery as though it has been targeted by the ii/grease/ii spell except that it lasts as long as the oil would otherwise have.'
				])
			],
			[
				'title' => 'Construction',
				'spaced' => true,
				'texts' => quick_array([
					'bb/Craft (Alchemy)/bb DC 24, 30 (Improved), 35 (Greater)'
				])
			]
		]
	);
	require $startDir.'pageEnd.php';
?>