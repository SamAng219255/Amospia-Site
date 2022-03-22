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
		'Annort Alchemical Oil',
		'item',
		quick_array([
			'bb/Price/bb 25 gp (weapon), 375 gp (armor); bb/Weight/bb 1/2 lb.'
		]),
		false,
		[
			[
				'title' => 'Description',
				'spaced' => true,
				'texts' => quick_array([
					'This oil contains powdered as/special_materials|Annort|annort/as, an alchemically engineered metal that burns the forms of undead, which is alchemically alloyed into the weapon or armor\'s surface causing it to gain the effects of a annort object.'
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