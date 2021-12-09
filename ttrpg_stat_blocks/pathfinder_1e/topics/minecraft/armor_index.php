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
<title>Armor</title>
<?php
	table(
		[
			'Name',
			'Cost',
			'Prof',
			'Armor Bonus',
			'Max Dex Bonus',
			'Armor Check Penalty',
			'Arcane Spell Failure Chance',
			'Speed (30 ft.)',
			'Speed (20 ft.)',
			'Weight'
		],
		[
			[
				'',
				'link' => '',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				''
			]
		]
	);
	require $startDir.'pageEnd.php';
?>