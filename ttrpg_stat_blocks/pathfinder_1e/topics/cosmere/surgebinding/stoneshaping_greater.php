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
		'Stoneshaping, Greater', // name
		'Cohesion', // surge
		'Stonewards, Willshapers', // access
		'Touch', // range
		'up to 1 10-ft. cube of stone per level', // target=false
		false, // effect=false
		false, // area=false
		'18', // cost
		'1 round', // interval
		true, // dismiss
		[
			'The surgebinder can infuse stone with light and shape it to their will. This can allow creating large shapes, such as forming a wall as is conjured by ii/wall of stone/ii, to move out of the way forming a passage as per ii/carve passage/ii, or simply moved around as per ii/expeditious excavation/ii, or small shapes such bowls or stone tools. Creating a complicated or detailed shape requires that the surgebinder succeed at an appropriate Craft skill check.',
			'All effects of greater stoneshaping affect any matter that wasn\'t once living and isn\'t invested and are limited to the listed area.',
			'Singer surgebinders connect to the stone while shaping it and can communicate as they did in ancient days. The singer surgebinder can communicate with the stone so long as they remain in contact using a form of advanced empathic communication that verges on telepathy. While it is impossible to convey any form of wording or verbiage; feelings, ideas, and concepts can be communicated, though some parts are on occasion fuzzy or otherwise unclear. The stone can only communicate what it knows which is usually very little though it has a good memory, able to recall any information it did receive. The stone is aware of creatures and objects within 5 feet though only their shapes and whether they were living or nonliving, nothing else. Singer surgebinders can also request the stone to form shapes based on the stone\'s knowledge, potentially revealing more detailed information that it would otherwise be able to convey.'
		]  // desc
	);
	require $startDir.'pageEnd.php';
?>