<?php 
	$startDir='';
	for($i=0; $i<20; $i++) {
		if(file_exists($startDir.'pageStart.php')) {
			require $startDir.'pageStart.php';
			break;
		}
		else {
			$startDir='../'.$startDir;
		}
	}
	block(
		'Feruchemy',
		'desc',
		[],
		false
	);
	table(
		[
			'Metal',
			'Effect',
			'Quadrant'
		],
		[
			[
				'Quintenium/Iron',
				'link' => 'feruchemy/q_iron.php',
				'Stores Size',
				'Physical'
			],
			[
				'Quintenium/Steel',
				'link' => 'feruchemy/q_steel.php',
				'Stores Flexibility',
				'Physical'
			],
			[
				'Quintenium/Tin',
				'link' => 'feruchemy/q_tin.php',
				'Stores Sound Senses',
				'Physical'
			],
			[
				'Quintenium/Pewter',
				'link' => 'feruchemy/q_pewter.php',
				'Stores Substance',
				'Physical'
			],
			[
				'Quintenium/Zinc',
				'link' => 'feruchemy/q_zinc.php',
				'Stores Appearance',
				'Physical'
			],
			[
				'Quintenium/Brass',
				'link' => 'feruchemy/q_brass.php',
				'Stores Energy Resistance',
				'Physical'
			],
			[
				'Quintenium/Copper',
				'link' => 'feruchemy/q_copper.php',
				'Stores Skill',
				'Cognitive'
			],
			[
				'Quintenium/Bronze',
				'link' => 'feruchemy/q_bronze.php',
				'Stores Focus',
				'Cognitive'
			],
			[
				'Quintenium/Cadmium',
				'link' => 'feruchemy/q_cadmium.php',
				'WIP',
				'WIP'
			],
			[
				'Quintenium/Bendalloy',
				'link' => 'feruchemy/q_bendalloy.php',
				'WIP',
				'WIP'
			],
			[
				'Quintenium/Gold',
				'link' => 'feruchemy/q_gold.php',
				'WIP',
				'WIP'
			],
			[
				'Quintenium/Electrum',
				'link' => 'feruchemy/q_electrum.php',
				'WIP',
				'WIP'
			],
			[
				'Quintenium/Chromium',
				'link' => 'feruchemy/q_chromium.php',
				'Stores Natural Armor',
				'Physical'
			],
			[
				'Quintenium/Nicrosil',
				'link' => 'feruchemy/q_nicrosil.php',
				'Stores Caster Level',
				'Spiritual'
			],
			[
				'Quintenium/Aluminum',
				'link' => 'feruchemy/q_aluminum.php',
				'Stores Morality (Maybe, WIP)',
				'Cognitive'
			],
			[
				'Quintenium/Duralumin',
				'link' => 'feruchemy/q_duralumin.php',
				'Stores Social Adeptness/Comfort',
				'Cognitive'
			],
			[
				'Quintenium',
				'link' => 'feruchemy/q_atium.php',
				'WIP',
				'WIP'
			]
		]
	);
	require $startDir.'pageEnd.php';
?>