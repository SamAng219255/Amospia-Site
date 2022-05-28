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
		'Basic Lashing', // name
		'Gravitation', // surge
		'Touch', // range
		'self or a single creature or object touched', // target=false
		false, // effect=false
		false, // area=false
		5, // cost
		'1 minute', // interval
		true, // dismiss
		[
			'You touch an object and change the direction it is pulled by gravity. The target begins falling a direction determined by you, ignoring normal gravity, and continues falling this direction until the effect runs out of investiture or is dismissed.',
			'The first round the target is under this effect and is not supported by a surface in the new direction, they fall 150 feet* in that direction. On subsequent rounds, they fall 300 feet* in that direction. If the target creature hits an object within the first round of being affected, they must make a DC 25 Reflex save or be knocked prone on that new surface. When targetting yourself, you receive a +14 circumstance bonus to the save. Hitting an object while falling is otherwise treated using the normal falling rules. After hitting a surface, the target is able to stand and traverse the surfaces of the matching orientation as easily as walking on the ground.',
			'Multiple applications of this ability can be applied simultaneously, multiplying the cost and resulting rate of movement.',
			'* Alternatively, the GM could use the standard falling rate of Golarion (480 feet on the first round and 680 on subsequent rounds) or that of Roshar (370 feet on the first round and 570 on subsequent rounds.)'
		]  // desc
	);
	require $startDir.'pageEnd.php';
?>