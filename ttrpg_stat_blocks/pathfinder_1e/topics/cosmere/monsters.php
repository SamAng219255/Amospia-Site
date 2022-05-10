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
			]
		]
	);
	require $startDir.'pageEnd.php';
?>