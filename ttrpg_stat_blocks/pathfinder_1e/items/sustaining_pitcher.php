<?php 
	$startDir='';
	for($i=0; $i<5; $i++) {
		if(file_exists($startDir.'pageStart.php')) {
			require $startDir.'pageStart.php';
			break;
		}
		else {
			$startDir='../'.$startDir;
		}
	}
	magicItemBlockAuto(
		'Sustaining Pitcher',
		'Conjuration',
		7,
		'none',
		86000,
		'—',
		'Pouring from this pitcher can produce any non-magical liquid of the user\'s choice that is suitable for consumption. Examples include water, oil, honey, milk, vinegar, fruit juice, or syrup. This liquid lasts for 1 hour if not consumed. Additionally, three times per day on command, the liquid poured out gains the properties of a potion of cure critical wounds.',
		false,
		'bb/Requirements/bb Craft Wondrous Item, ii/bountiful banquet/ii; bb/Cost/bb 43,000 gp'
	);
	require $startDir.'pageEnd.php';
?>