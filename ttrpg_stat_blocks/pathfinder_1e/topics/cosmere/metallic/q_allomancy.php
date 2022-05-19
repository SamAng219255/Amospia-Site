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
		'Allomancy',
		'title',
		[],
		false
	);
	table(
		[
			'Metal',
			'Effect',
			'Pushing/Pulling',
			'Internal/External',
			'Quadrant'
		],
		[
			[
				'Quintenium/Iron',
				'link' => 'allomancy/q_iron.php',
				'Creates Necromantic Energy',
				'Pulling',
				'External',
				'Physical'
			],
			[
				'Quintenium/Steel',
				'link' => 'allomancy/q_steel.php',
				'Creates Elemental Energy',
				'Pushing',
				'External',
				'Physical'
			],
			[
				'Quintenium/Tin',
				'link' => 'allomancy/q_tin.php',
				'Can Polymorph You',
				'Pulling',
				'Internal',
				'Physical'
			],
			[
				'Quintenium/Pewter',
				'link' => 'allomancy/q_pewter.php',
				'Can Create Objects',
				'Pushing',
				'Internal',
				'Physical'
			],
			[
				'Quintenium/Zinc',
				'link' => 'allomancy/q_zinc.php',
				'Protects You',
				'Pulling',
				'External',
				'Mental'
			],
			[
				'Quintenium/Brass',
				'link' => 'allomancy/q_brass.php',
				'Charms Creatures',
				'Pushing',
				'External',
				'Mental'
			],
			[
				'Quintenium/Copper',
				'link' => 'allomancy/q_copper.php',
				'Turns You Invisible',
				'Pulling',
				'Internal',
				'Mental'
			],
			[
				'Quintenium/Bronze',
				'link' => 'allomancy/q_bronze.php',
				'Can See Invisible Objects',
				'Pushing',
				'Internal',
				'Mental'
			],
			[
				'Quintenium/Cadmium',
				'link' => 'allomancy/q_cadmium.php',
				'Slows Nearby Creature',
				'Pulling',
				'External',
				'Temporal'
			],
			[
				'Quintenium/Bendalloy',
				'link' => 'allomancy/q_bendalloy.php',
				'Hastens Nearby Creatures',
				'Pushing',
				'External',
				'Temporal'
			],
			[
				'Quintenium/Gold',
				'link' => 'allomancy/q_gold.php',
				'Reveals Your Past to Those Nearby',
				'Pulling',
				'Internal',
				'Temporal'
			],
			[
				'Quintenium/Electrum',
				'link' => 'allomancy/q_electrum.php',
				'Reveals Your Future Self to Those Nearby',
				'Pushing',
				'Internal',
				'Temporal'
			],
			[
				'Quintenium/Chromium',
				'link' => 'allomancy/q_chromium.php',
				'Dispels Magic from Target',
				'Pulling',
				'External',
				'Enhancement'
			],
			[
				'Quintenium/Nicrosil',
				'link' => 'allomancy/q_nicrosil.php',
				'Empowers Magic of Targt',
				'Pushing',
				'External',
				'Enhancement'
			],
			[
				'Quintenium/Aluminum',
				'link' => 'allomancy/q_aluminum.php',
				'Dispels Magic on You',
				'Pulling',
				'Internal',
				'Enhancement'
			],
			[
				'Quintenium/Duralumin',
				'link' => 'allomancy/q_duralumin.php',
				'Empowers Your Magic',
				'Pushing',
				'Internal',
				'Enhancement'
			],
			[
				'Quintenium',
				'link' => 'allomancy/quintenium.php',
				'Turns You Into an Outsider or Grants You a Soul',
				'Pushing',
				'Internal',
				'Enhancement'
			]
		]
	);
	require $startDir.'pageEnd.php';
?>