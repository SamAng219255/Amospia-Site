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
	feruchemy(
		'Gold', // Metal
		'Bloodmaker', // User
		[
			'Quadrant' => 'Hybrid'
		], // Categories
		'1 round',
		[
			'Bloodmakers can store health. While storing, bloodmakers are sickly and weak, possessing a weakened immune system and ability to recover. While tapping, bloodmakers can recover from wounds quickly. While storing health, bloodmakers receive penalties to constitution and receive reduced healing from the heal skill and from natural healing. If a creature storing health has fast healing or regeneration, it is reduced before the normal penalties are applied. Bloodmakers with fast healing may store their fast healing ability without taking penalties to their constitution. While a bloodmaker is tapping health, they receive bonuses to constitution, receive increased healing from the heal skill and from natural healing, and may receive fast healing. If a creature tapping health has regeneration they receive bonuses to their regeneration instead of gaining fast healing.'
		], // Description
		[
			'columns' => [
				'Constitution',
				'Healing Modifier',
				'Fast Healing'
			],
			'rows' => [
				[
					'(-8)', // IncrSrch
					'',
					'',
					'-1' 
				],
				[
					'-3', // IncrSrch
					'-4',
					'-75%',
					'' 
				],
				[
					'-2', // IncrSrch
					'-3',
					'-50%',
					'' 
				],
				[
					'-1', // IncrSrch
					'-2',
					'-25%',
					'' 
				],
				[
					'0', // IncrSrch
					'+0',
					'+0%',
					'' 
				],
				[
					'4', // IncrSrch
					'+5',
					'+100%',
					'' 
				],
				[
					'8', // IncrSrch
					'+10',
					'+200%',
					'+1' 
				],
				[
					'16', // IncrSrch
					'+15',
					'+400%',
					'+2' 
				],
				[
					'24', // IncrSrch
					'+15',
					'+500%',
					'+3' 
				],
				[
					'32', // IncrSrch
					'+20',
					'+500%',
					'+4' 
				],
				[
					'40', // IncrSrch
					'+20',
					'+500%',
					'+5' 
				]
			]
		], // Increments
		[
			10 => [
				'effect' => 'Grants access to the following increment: (Increment (+4); Constitution +0; Healing Modifier +0%; Fast Healing +1)',
				'draw' => 'The bloodmaker takes a -6 penalty to their constitution score.'
			],
			30 => [
				'effect' => 'The bloodmaker is immune to poison and disease.',
				'draw' => 'The bloodmaker does not gain health from resting.'
			],
			60 => [
				'effect' => 'The bloodmaker automatically passes Fortitude saves.',
				'draw' => 'The bloodmaker automatically fails Fortitude saves.'
			],
			100 => [
				'effect' => 'Any Fast Healing granted becomes Regeneration with no weakness.',
				'draw' => 'The bloodmaker\'s constitution is reduced to 1.'
			]
		]
	);
	require $startDir.'pageEnd.php';
?>