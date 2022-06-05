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
	table(
		[
			'Name',
			'CR',
			'Type',
			'Environment'
		],
		[
			[
				'Koloss',
				'link' => 'monsters/koloss.php',
				'TODO',
				'humanoid',
				'any'
			],
			[
				'Lifeless',
				'link' => 'monsters/lifeless.php',
				'TODO',
				'construct',
				'any'
			],
			[
				'Stone Lifeless',
				'link' => 'monsters/stone_lifeless.php',
				'TODO',
				'construct',
				'any'
			],
			[
				'True Spren',
				'link' => 'monsters/stone_lifeless.php',
				'TODO',
				'outsider',
				'Roshar in the Cognitive Realm'
			],
			[
				'Kandra',
				'link' => 'monsters/kandra.php',
				'TODO',
				'aberration',
				'Scadrial'
			],
			[
				'Mistwraith',
				'link' => 'monsters/kandra.php',
				'TODO',
				'aberration',
				'Scadrial'
			],
			[
				'Shanay-im',
				'link' => 'monsters/shanay_im.php',
				'15',
				'humanoid',
				'any (Roshar, Braize)'
			],
			[
				'Shetel-im',
				'link' => 'monsters/shetel_im.php',
				'15',
				'humanoid',
				'any (Roshar, Braize)'
			],
			[
				'Magnified Ones',
				'link' => 'monsters/magnified_ones.php',
				'15',
				'humanoid',
				'any (Roshar, Braize)'
			],
			[
				'Mavset-im',
				'link' => 'monsters/mavset_im.php',
				'15',
				'humanoid',
				'any (Roshar, Braize)'
			],
			[
				'Fannahn-im',
				'link' => 'monsters/fannahn_im.php',
				'15',
				'humanoid',
				'any (Roshar, Braize)'
			],
			[
				'Nex-im',
				'link' => 'monsters/nex_im.php',
				'15',
				'humanoid',
				'any (Roshar, Braize)'
			],
			[
				'Makay-im',
				'link' => 'monsters/makay_im.php',
				'15',
				'humanoid',
				'any (Roshar, Braize)'
			]
		]
	);
	require $startDir.'pageEnd.php';
?>