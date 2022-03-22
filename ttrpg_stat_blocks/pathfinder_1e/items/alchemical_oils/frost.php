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
		'Frost Alchemical Oil',
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
					'This oil is stored as two substances that are applied one after the other on the weapon, which quickly cool to sub-freezing temperatures attracting a rime of frost, dealing an additional 1d6 cold damage on a successful hit. This damage does not stack with the ii/frost/ii weapon quality. If this oil is instead applied to a set of armor, it gives it the ii/frosted/ii armor quality.'
				])
			],
			[
				'title' => 'Construction',
				'spaced' => true,
				'texts' => quick_array([
					'bb/Craft (Alchemy)/bb DC 28'
				])
			]
		]
	);
	require $startDir.'pageEnd.php';
?>