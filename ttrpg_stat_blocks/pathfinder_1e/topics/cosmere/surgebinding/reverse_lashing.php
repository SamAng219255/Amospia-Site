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
		'Reverse Lashing', // name
		'Adhesion and Gravitation; special', // surge
		'Touch', // range
		'one object', // target=false
		false, // effect=false
		false, // area=false
		10, // cost
		'1 minute', // interval
		true, // dismiss
		[
			'Using the surges of adhesion and gravitation together, a windrunner can cause a 1 foot diameter region on a touched object to attract nearby objects. The touched object begins to attract nearby objects, drawing them in. Usually it will attempt to draw in all nearby objects, but it is possible to choose an item which is the only object affected. For every 2 levels over first, the surgebinder can choose an additional item to be drawn towards the region on the target. Contact must be maintained with the target for the entire duration of effect.',
			'Affected objects within 30 feet are pulled towards the region. Loose items move towards the region with a speed of 5 feet per round. Items which are secured are pulled as though with a DC 20 strength check. Airborne objects are more affected and have less friction preventing their movement and move at a speed of 15 feet per round towards the region. Projectiles passing within 20 feet are diverted to the nearest attracting region.'
		]  // desc
	);
	require $startDir.'pageEnd.php';
?>