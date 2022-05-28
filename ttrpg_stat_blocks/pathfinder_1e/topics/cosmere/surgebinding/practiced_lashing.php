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
		'Practiced Lashings', // name
		'Gravitation', // surge
		'Personal', // range
		'self', // target=false
		false, // effect=false
		false, // area=false
		10, // cost
		'10 minutes', // interval
		true, // dismiss
		[
			'The surgebinder gains a gravitic flight speed of 60 feet with average maneuverability (5 feet turn).',
			'In order for the surgebinder to run while in tactical or local movement, or to hustle while in overland movement, they must expend an additional 10 points of investiture that is separately reduced by stormlight efficiency. After expending the additional stormlight they can continue to hustle or run as such for the remainder of the interval. Running while in overland movement requires first spending the prior amount then spending an additional 20 points that is reduced by stormlight efficiency twice.',
			'Bringing additional creatures multiplies all of the investiture costs associated with this ability after it is affected by stormlight efficiency.'
		]  // desc
	);
	require $startDir.'pageEnd.php';
?>