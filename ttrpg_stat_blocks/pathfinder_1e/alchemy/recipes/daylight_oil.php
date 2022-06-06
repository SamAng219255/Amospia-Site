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
	advAlchemyAppliedBlock(
		'Daylight Oil',// Name
		false,
		[
			'light'
		],// Descriptors
		3,// Level
		'1 standard action',// Activation Time
		'10 minute/level',// Duration
		'none',// Saving Throw
		[
			'This mixture is applied in two parts that together cause the surface where it\'s been applied to shine like the sun, shedding bright light in a 60-foot radius, and increasing the light level for an additional 60 feet by one step (darkness becomes dim light, dim light becomes normal light, and normal light becomes bright light). Despite its name, this spell is not the equivalent of daylight for the purposes of creatures that are damaged or destroyed by such light.',
			'A single dose can cover upto a a 5-foot square.'
		] // Description
	);
	require $startDir.'pageEnd.php';
?>