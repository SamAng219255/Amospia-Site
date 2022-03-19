<?php 
	$startDir='';
	for($i=0; $i<5; $i++) {
		if(file_exists($startDir.'pageStart.php')) {
			require $startDir.'pageStart.php';
			break;
		}
		else {
			$startDir='../'.$startDir;
		}
	}
	block(
		'Prepared Soul Soil',
		'item',
		quick_array([
			'bb/Price/bb 75 gp; bb/Weight/bb 1lb.'
		]),
		false,
		[
			[
				'title' => 'Description',
				'spaced' => false,
				'texts' => quick_array([
					'This small pouch of necromantically preserved soul soil from the Nether can be added to mundane or magical fires to infuse them with the souls it carries, trading a dimmer light for a hotter flame. This soil can be used as a power component when casting spells that produce fire to augment magical fires but it can also be added to mundane fires. If the soil is added to a flame such as a torch or oil lamp, the flame turns a cyan/blue/white color. The radius of any light from the flame is reduced to half but damage from coming in contact with the flame is doubled. Unlike the eternal blue fires that can be found in soul sand valleys, this handful of preserved soil loses its potency after 1 hour at which point the fire returns to normal. 1 dose of soul is sufficient to augment 1 5-foot cube of fire.'
				])
			],
			[
				'title' => 'Power Component',
				'spaced' => false,
				'texts' => quick_array([
					'bb/Doses/bb 1 per level of the spell; bb/Spells/bb Spells that create fire of any kind.',
					'bb/Effect/bb The radius of any light produced by the spell is reduced to half, any variable fire damage is rolled twice and added together, and any constant fire damage is doubled. The fire also turns a cyan/blue/white color.'
				])
			]
		]
	);
	require $startDir.'pageEnd.php';
?>