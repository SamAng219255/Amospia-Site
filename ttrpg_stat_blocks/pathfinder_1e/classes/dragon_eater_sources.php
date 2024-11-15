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
	block(
		'Draconic Sources',
		'desc',
		[
			''
		],
		true
	);
	require $startDir.'pageEnd.php';
?>