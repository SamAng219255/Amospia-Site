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
		'Evacuate', // name
		'Transportation', // surge
		'Husked Ones', // access
		'Personal', // range
		'self', // target=false
		false, // effect=false
		false, // area=false
		'40', // cost
		'none; instantaneous', // interval
		false, // dismiss
		[
			'The surgebinder can evacuate their body, taking a form similar to a spren, before forming a new body a short distance away. The surgebinder takes the form of a ribbon of light and can travel up to 60 feet before forming an entire new body, identical to their original. The surgebinder can travel in any direction while in the form of a ribbon of light and can fit through any gap that a Tiny sized creaure could. This movement provokes attacks of opportunities but the ribbon of light is intangible and grants a +4 dodge bonus to AC. Only the surgebinder\'s body is transported. Any equipment or item held or worn are left behind on their old body. The surgebinder\'s old body is left where they were located and becomes a hollow husk before rapidly dissolving into dust with their gear collapsing to the ground.'
		]  // desc
	);
	require $startDir.'pageEnd.php';
?>