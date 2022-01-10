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
?>
<title>Monsters Index</title>
<?php
	table(
		[
			'Name',
			'CR',
			'Type',
			'Environment'
		],
		[
			[
				'Sleaj',
				'link' => 'monsters/sleaj.php',
				'1/2',
				'ooze',
				'any (caves)'
			],
			[
				'Kundrak',
				'link' => 'monsters/lazuli_dragon.php',
				'?? (35+)',
				'dragon',
				'Deep Space (Hall of Stars)'
			],
			[
				'Dread Skull Animus',
				'link' => 'monsters/dread_skull_animus.php',
				'varies',
				'undead',
				'any'
			]
		]
	);
	require $startDir.'pageEnd.php';
?>