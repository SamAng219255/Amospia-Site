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
		'Touch', // range
		'up to 1 10-ft. cube of stone per level', // target=false
		false, // effect=false
		false, // area=false
		'18', // cost
		'1 round', // interval
		true, // dismiss
		[
			'As the surgebinder infuses the stone with stormlight, the region of stone begins to vibrate. The surgebinder can communicate with the stone so long as they remain in contact using a form of advanced empathic communication that verges on telepathy. While it is impossible to convey any form of wording or verbiage; feelings, ideas, and concepts can be communicated, though some parts are on occasion fuzzy or otherwise unclear. The stone will readily move or take any shape that either the surgebinder can properly communicate, or that the stone is familiar with, and the stone can take various forms as part of communicating with the surgebinder.',
			'The forms taken can be as detailed as is known to either the surgebinder or the stone. Creating a complicated object such as a tool, a weapon, or armor requires the surgebinder to succeed at an appropriate Craft check.',
			'The surgebinder can also request the stone to move and create shapes such as forming a wall as is conjured by ii/wall of stone/ii, to move out of the way forming a passage as per ii/carve passage/ii, or simply moved around as per ii/expeditious excavation/ii except that all abilities apply only to solid stone and can affect a region of stone up to 1 10-ft. cube of stone per level of the surgebinder.'
		]  // desc
	);
	require $startDir.'pageEnd.php';
?>