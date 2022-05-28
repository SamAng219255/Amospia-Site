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
		'Regrowth', // name
		'Progression', // surge
		'touch', // range
		'one creature', // target=false
		false, // effect=false
		false, // area=false
		10, // cost
		'1 minute', // interval
		false, // dismiss
		[
			'Touched creature gains regeneration 5 except that it does not prevent it from dying. It takes 2d10 rounds to regrow severed body members. The surgebinder must remain in physical contact with the target for the entire duration or else the effect ends. The cost may be increased to 25 to double the rate of healing.'
		]  // desc
	);
	require $startDir.'pageEnd.php';
?>