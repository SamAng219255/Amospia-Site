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
		'Aluminum', // Metal
		'Trueself', // User
		[
			'Quadrant' => 'Spiritual'
		], // Categories
		'1 minute',
		[
			'A trueself is able to store their spiritual identity. This manifests in some confusing ways. Firstly and most simply, while storing identity, the trueself\'s identity will be hidden granting a bonus on Disguise and Bluff checks to hide their identity as they lose their accents and mannerisms. Additionally, magic isn\'t able to get read on their identity either. This results in a bonus to Use Magic Device checks made to emulate a quality, a reduction in the strength of relevant alignment auras, and an overall inability to detect properties of their identity via magic when fully storing (increment of -4). Tapping identity has the opposite effects, making a trueself easier to identify, granting penalties where storing grants bonuses and vice versa.',
			'This also messes up the system via which metalminds are secured, as each metalmind uses the feruchemist\'s identity to "lock" and "unlock" a store of investiture within a metalmind. This means that a trueself who is fully storing identity will create unkeyed metalminds while storing that can be used by anyone with the proper feruchemical ability.'
		], // Description
		[
			'columns' => [
				'Bonus to Disguise and Bluff',
				'Bonus to UMD',
				'Alignment Aura Strength'
			],
			'rows' => [
				[
					'-4', // IncrSrch
					'+20',
					'Auto-Success',
					'-4 Categories' 
				],
				[
					'-3', // IncrSrch
					'+15',
					'+20',
					'-3 Categories' 
				],
				[
					'-2', // IncrSrch
					'+10',
					'+10',
					'-2 Categories' 
				],
				[
					'-1', // IncrSrch
					'+5',
					'+5',
					'-1 Category' 
				],
				[
					'0', // IncrSrch
					'+0',
					'+0',
					'+0 HD' 
				],
				[
					'1', // IncrSrch
					'-5',
					'-5',
					'+1 HD' 
				],
				[
					'2', // IncrSrch
					'-10',
					'-10',
					'+2 HD' 
				],
				[
					'3', // IncrSrch
					'-15',
					'-20',
					'+3 HD' 
				],
				[
					'4', // IncrSrch
					'-20',
					'-30',
					'+4 HD' 
				],
				[
					'8', // IncrSrch
					'-40',
					'-50',
					'+8 HD' 
				],
				[
					'12', // IncrSrch
					'-60',
					'-70',
					'+12 HD' 
				]
			]
		], // Increments
		[
			10 => [
				'effect' => 'Grants access to the following increment (Increment 4; Bonus to Diplomacy and Bluff -80; Bonus to UMD -100; Alignment Aura Strength +16 HD) WIP, may be changed',
				'draw' => ''
			],
			50 => [
				'effect' => 'Grants access to the following increment (Increment 5; Bonus to Diplomacy and Bluff -100; Bonus to UMD -130; Alignment Aura Strength +20 HD) WIP, may be changed',
				'draw' => ''
			],
			100 => [
				'effect' => 'Grants access to the following increment (Increment 6; Bonus to Diplomacy and Bluff -120; Bonus to UMD -170; Alignment Aura Strength +24 HD) WIP, may be changed',
				'draw' => ''
			]
		]
	);
	require $startDir.'pageEnd.php';
?>