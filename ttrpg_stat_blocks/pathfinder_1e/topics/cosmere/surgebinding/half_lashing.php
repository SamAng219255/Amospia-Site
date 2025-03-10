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
		'Half Lashing', // name
		'Gravitation', // surge
		'Heavenly Ones, Skybreakers, Windrunners', // access
		'Touch', // range
		'self or a single creature or object touched', // target=false
		false, // effect=false
		false, // area=false
		5, // cost
		'1 minute', // interval
		true, // dismiss
		[
			'You touch an object, redirecting half the force of gravity upward to counteract the remaining half, making the object or creature float about weightless. This can be used to help move heavy objects, but heavier objects still require more force to get moving or to stop than lighter ones, moving similarly to a rolling ball of the same weight but able to move upward and downward as well.'
		]  // desc
	);
	require $startDir.'pageEnd.php';
?>