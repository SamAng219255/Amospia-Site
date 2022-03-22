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
		'Mirror Polish Alchemical Oil',
		'item',
		quick_array([
			'bb/Price/bb 300 gp, 5,000 gp (arcane); bb/Weight/bb 1/2 lb.'
		]),
		false,
		[
			[
				'title' => 'Description',
				'spaced' => true,
				'texts' => quick_array([
					'This oil leaves a mirror like shine on a metallic surface granting a set of armor or  shield the benefits of the mirrored armor quality.',
					'Arcane mirror polish oil is additionally able to reflect incoming spells as ii/spell turning/ii except that the maximum duration is extended to the normal duration of the oil. If the ii/spell turning/ii effect is expended, it can no longer reflect spells but it still retains its other properties.'
				])
			],
			[
				'title' => 'Construction',
				'spaced' => true,
				'texts' => quick_array([
					'bb/Craft (Alchemy)/bb DC 28, 33 (Arcane)'
				])
			]
		]
	);
	require $startDir.'pageEnd.php';
?>