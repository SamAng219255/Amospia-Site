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
		'Noqual Alchemical Oil',
		'item',
		quick_array([
			'bb/Price/bb 13 gp (weapon), 300 gp (armor); bb/Weight/bb 1/2 lb.'
		]),
		false,
		[
			[
				'title' => 'Description',
				'spaced' => true,
				'texts' => quick_array([
					'This oil contains powdered noqual which is alchemically alloyed into the weapon or armor\'s surface causing it to gain the effects of a noqual object.'
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