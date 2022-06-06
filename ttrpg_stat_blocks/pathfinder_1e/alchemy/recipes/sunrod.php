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
		'Sunrod',// Name
		false,
		[
			'light'
		],// Descriptors
		0,// Level
		'1 standard action',// Activation Time
		'6 hours',// Duration
		'none',// Saving Throw
		[
			'This recipe yields a 1-foot-long, gold-tipped, iron rod whose tip glows brightly when struck. It sheds normal light in a 30-foot radius and increases the light level by one step for an additional 30 feet beyond that area (darkness becomes dim light and dim light becomes normal light). A sunrod does not increase the light level in normal light or bright light. It glows for 6 hours, after which the gold tip is burned out and worthless.'
		] // Description
	);
	require $startDir.'pageEnd.php';
?>