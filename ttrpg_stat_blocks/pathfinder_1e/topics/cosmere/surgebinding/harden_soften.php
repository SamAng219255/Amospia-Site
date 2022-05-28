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
		'Harden/Soften', // name
		'Tension', // surge
		'Touch', // range
		'one object', // target=false
		false, // effect=false
		false, // area=false
		'10; see text', // cost
		'1 minute', // interval
		true, // dismiss
		[
			'The surgebinder can change the internal tension of a touched object making it either harder and more brittle or softer and more flexible. The hardness of the object is either lowered or raised by 5. If the hardness of a set of armor is lowered, it is treated as one step lighter, both the armor bonus and the armor check penalty are lowered by 3, the maximum dexterity bonus is increased by 3, and the arcane spell failure chance is decreased by 15%. Conversely, if the hardness of a set of armor is increased, it is treated as one step heavier, both the armor bonus and the armor check penalty are increased by 3, the maximum dexterity bonus is lowered by 3, and the arcane spell failure chance is increased by 15%.',
			'Using this ability on object up to Medium size costs 10 points of investiture. Targetting a larger sized object increases the cost to 20, for a Large object; 35, for a Huge object; 55, for a Gargantuan object; and 80, for a Colossal object.',
			'Up to 3 applications of this ability are able to be placed on the same item as a single action and the effects stack, with stormlight efficiency affecting each application separately.'
		]  // desc
	);
	require $startDir.'pageEnd.php';
?>