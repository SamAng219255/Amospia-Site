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
		'Repair', // name
		'Adhesion, Tension', // surge
		'Bondsmiths', // access
		'touch', // range
		'A damaged or destroyed object.', // target=false
		false, // effect=false
		false, // area=false
		10, // cost
		'none; instantaneous', // interval
		true, // dismiss
		[
			'The surgebinder can combine the surges of adhesion and tension to return damaged pieces to their places and broken objects. The sourgebinder can touch the pieces and cuase them to snap back into place as though never damaged. Damaged objects are restored to full hit points while destroyed objects are restored to half their maximum hitpoints and have the broken condition. Using this ability a second time causes the object to become fully restored.',
			'Using this ability on object up to Medium size costs 10 points of investiture. Targetting a larger sized object increases the cost to 20, for a Large object; 35, for a Huge object; 55, for a Gargantuan object; and 80, for a Colossal object.'
		]  // desc
	);
	require $startDir.'pageEnd.php';
?>