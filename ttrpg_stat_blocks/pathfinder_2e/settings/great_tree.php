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
		'Geldrine',
		'setting',
		quick_array([
			'Geldrine is the name of a mighty tree whose branches and trunk make up their own plane. Here can be found several races and pantheons including the Piccilli and their goddess Fluut.'
		])
	);
	require $startDir.'pageEnd.php';
?>