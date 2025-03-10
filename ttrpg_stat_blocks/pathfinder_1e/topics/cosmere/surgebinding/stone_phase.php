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
		'Stone Phase', // name
		'Cohesion', // surge
		'Deepest Ones', // access
		'Personal', // range
		'self', // target=false
		false, // effect=false
		false, // area=false
		'10', // cost
		'10 minutes', // interval
		true, // dismiss
		[
			'The surgebinder reshapes the stone around their body allowing them to move through solid stone. The surgebinder can move through most solid matter but cannot pass through once living material such as wood. They move at their fastest speed through the material and can move in any direction, including up and down. Material filled with living matter, such as roots, requires spending twice as much movement to get through and to treated as difficult terrain.',
			'The surgebinder can place themselves partway into the ground or another surface while using this surge. While doing so, they are immune to trip and forced movement and receive partial cover from the surface.',
			'This surge does not grant the surgebinder the ability to breathe or see while inside solid matter though most surgebinders can use light to sustain themselves.'
		]  // desc
	);
	require $startDir.'pageEnd.php';
?>