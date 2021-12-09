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
<title>Miscellaneous</title>
<?php
	table(
		[
			'Name',
			'Type',
			'Cost',
			'Weight'
		],
		[
			[
				'',
				'link' => '',
				'',
				'',
				''
			]
		]
	);
	require $startDir.'pageEnd.php';
?>