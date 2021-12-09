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
<title>Weapons</title>
<?php
	table(
		[
			'Name',
			'Cost',
			'Prof',
			'Hands',
			'Dmg (S)',
			'Dmg (M)',
			'Critical',
			'Range',
			'Weight',
			'Type',
			'Special'
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
				'',
				''
			]
		]
	);
	require $startDir.'pageEnd.php';
?>