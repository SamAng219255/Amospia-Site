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
	blockSF(
		'Weapon Special Properties',
		'properties',
		[
			'Some weapons possess inherent special properties. A weapon’s special properties are listed in the Special column entry in its corresponding weapons table. Details of these special weapon properties appear below.'
		],
		false,
		[
			[
				'title' => 'Mystic',
				'spaced' => false,
				'texts' => quick_array([
					'A weapon with this special property is a magic item, using magic instead of technology in its design. It counts as a magical weapon and gains the analog weapon special property. It consumes ammunition and battery charges normally.'
				])
			]
		]
	);
	require $startDir.'pageEnd.php';
?>