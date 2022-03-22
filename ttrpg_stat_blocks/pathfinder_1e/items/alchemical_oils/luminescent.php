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
		'Luminescent Alchemical Oil',
		'item',
		quick_array([
			'bb/Price/bb 25 gp, 750 gp (greater); bb/Weight/bb 1/2 lb.'
		]),
		false,
		[
			[
				'title' => 'Description',
				'spaced' => true,
				'texts' => quick_array([
					'This oil is stored as two substances that are applied one after the other onto the weapon, armor, or other similarly sized or smaller object, which glow and generate normal light in a 20-foot radius and increasing the light level for an additional 20 feet by one step, up to normal light (darkness becomes dim light, and dim light becomes normal light).',
					'Greater luminescent oil glows brighter, generating bright light in a 60-foot radius and increasing the light level for an additional 60 feet by one step, up to bright light (darkness becomes dim light, dim light becomes normal light, and normal light becomes bright light). When placed on a weapon it grants it a non magical ii/glorious/ii weapon quality.',
					'Both normal and greater luminescent oil can be modified, doubling its cost, to either emit light that can only be seen by creatures with darkvision or to emit a seemingly supernatural darkness that darkens an area of half the radius by the same amount. (Darkening to dim light instead of brightening to normal, darkening to darkness instead of brightening to bright light, and lowering by one step instead of increasing by one step.)'
				])
			],
			[
				'title' => 'Construction',
				'spaced' => true,
				'texts' => quick_array([
					'bb/Craft (Alchemy)/bb DC 15, 25 (Greater)'
				])
			]
		]
	);
	require $startDir.'pageEnd.php';
?>