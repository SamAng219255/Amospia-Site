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
	advAlchemyActivatedBlock(
		'Deafening Cell',// Name
		'Cell',
		[],// Descriptors
		2,// Level
		'1 standard action',// Activation Time
		'instantaneous',// Duration
		'Fortitude negates',// Saving Throw
		[
			'This airtight papery disk can be pressed, activating a small contained clicker, making the faces puff outward. A moment later the object bursts with an incredible bang that can permanently deafen a creature too close to it. Creatures targetted by the cell who made their save are instead deafened for 2d4 rounds.'
		] // Description
	);
	require $startDir.'pageEnd.php';
?>