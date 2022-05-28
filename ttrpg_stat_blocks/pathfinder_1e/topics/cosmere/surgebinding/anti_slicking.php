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
		'Anti-Slicking', // name
		'Abrasion', // surge
		'personal', // range
		'self', // target=false
		false, // effect=false
		false, // area=false
		10, // cost
		'1 minute', // interval
		true, // dismiss
		[
			'The surgebinder actively increases their own friction and that of the surfaces they touch to increase their ability to climb and cross difficult surfaces. The surgebinder automatically succeeds at any Climb check they could otherwise attempt as well as Acrobatics checks made to Cross Narrow Surfaces or Uneven Ground.'
		]  // desc
	);
	require $startDir.'pageEnd.php';
?>