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
		'Light Oil',// Name
		[
			'light'
		],// Descriptors
		0,// Level
		'1 standard action',// Activation Time
		'10 minute/level',// Duration
		'none',// Saving Throw
		[
			'This mixture is applied in two parts that together cause the surface where it\'s been applied to shine like a torch, shedding normal light in a 20-foot radius, and increasing the light level for an additional 20 feet by one step, up to normal light (darkness becomes dim light, and dim light becomes normal light). In an area of normal or bright light, this illumination has no additional effect.',
			'A single dose can cover upto a a 5-foot square.'
		] // Description
	);
	require $startDir.'pageEnd.php';
?>