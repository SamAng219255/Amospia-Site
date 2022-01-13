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
		'The Tangled Grove',
		'setting',
		quick_array([
			'The Tangled Grove is a grove of intelligent plant races that live in harmony though isolate themselves from what they call the "animal races". On one of their borders can be found an encroaching horde of undead.'
		])
	);
	require $startDir.'pageEnd.php';
?>