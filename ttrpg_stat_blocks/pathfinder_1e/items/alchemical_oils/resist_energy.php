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
		'Energy Resistance Alchemical Oil',
		'item',
		quick_array([
			'bb/Price/bb 200 gp, 50 gp (Lesser), 450 gp (Improved), 800 gp (Greater); bb/Weight/bb 1/2 lb.'
		]),
		false,
		[
			[
				'title' => 'Description',
				'spaced' => true,
				'texts' => quick_array([
					'This oil protects the armor and, by extension, its wearer from a specific type of energy (either acid, cold, electricity, fire, or sonic) granting the armor resistance 10 and its wearer a +2 bonus on saves vs that type of energy. It can also be applied to a shield or other object to grant it resistance 5, though it grants no bonus to its bearer. Lesser oil grants the item resistance 5 and a +1 bonus on saves to the creature wearing the armor. Improved oil grants the item resistance 15 and a +3 bonus on saves to the creature wearing the armor. Greater oil grants the item resistance 20 and a +4 bonus on saves to the creature wearing the armor.'
				])
			],
			[
				'title' => 'Construction',
				'spaced' => true,
				'texts' => quick_array([
					'bb/Craft (Alchemy)/bb DC 23, 21 (Lesser), 27 (Improved), 21 (Greater)'
				])
			]
		]
	);
	require $startDir.'pageEnd.php';
?>