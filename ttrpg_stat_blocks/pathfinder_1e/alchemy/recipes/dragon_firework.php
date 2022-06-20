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
	advAlchemyRocketBlock(
		'Dragon Firework',// Name
		false,
		[
			'fire',
			'firework'
		],// Descriptors
		2,// Level
		'1 standard action',// Ignition Time
		60,// Range Increment
		240,// Max Range
		'instantaneous',// Duration
		'Reflex half',// Saving Throw
		[
			'This wooden tube is generally wrapped in red paper with decirative wings and patterns added. When lit, it streaks off in gout of flame that deals 1d6 points of fire damage per alchemy level (maximum 5d6) to all creatures in a line along its path.'
		] // Description
	);
	require $startDir.'pageEnd.php';
?>