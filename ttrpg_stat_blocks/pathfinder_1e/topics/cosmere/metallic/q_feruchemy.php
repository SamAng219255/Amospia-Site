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
		quick_array([
			'Unfortunately, the quintenium alloy feruchemical effects have been a source of quite a bit of frustration and several of the metals are so far entirely undecided and many are lacking savantism effects. If you intend to use these rules I suggest you either ignore the missing portions. Though, if you\'re up for a challenge, GMs could try to improvise the missing portions. Some of missing portions are ue to a lack of creativity as to what to put there while others it is unclear how to balance it.'
		]),
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
				'Stores Sound Volume',
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
				'Stores Visibility',
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
				'link' => 'feruchemy/quintenium.php',
				'WIP',
				'WIP'
			]
		]
	);
	require $startDir.'pageEnd.php';
?>