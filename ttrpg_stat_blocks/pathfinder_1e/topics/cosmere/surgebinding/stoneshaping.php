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
	surgeBlock(
		'Stoneshaping', // name
		'Cohesion', // surge
		'Personal', // range
		'self', // target=false
		false, // effect=false
		false, // area=false
		'10', // cost
		'1 minute', // interval
		true, // dismiss
		[
			'Stone becomes as soft as potter\'s clay in the hands of the surgebinder and can be shaped as such so long as the surgebinder remains in contact. Though the stone becomes soft only to manipulations by the surgebinder, remaining completely solid to other creatures or objects.'
		]  // desc
	);
	require $startDir.'pageEnd.php';
?>