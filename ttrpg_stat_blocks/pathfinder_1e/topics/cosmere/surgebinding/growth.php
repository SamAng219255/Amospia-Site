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
		'Growth', // name
		'Progression', // surge
		'Edgedancers, Truthwatchers', // access
		'touch or long (400 ft. + 80 ft./ideal); see text', // range
		'one plant per ideal; see text', // target=false
		false, // effect=false
		'varies; see text', // area=false
		32, // cost
		'none; instantaneous', // interval
		false, // dismiss
		[
			'The touched plants suddenly gain up to 2 years worth of growth as chosen by the surgebinder. The surgebinder can control this growth, causing the plants to grow as they desire but they cannot grow in impossible ways. If these plants are grown to a state where they would bear fruit or seeds, the fruit is small and inedible and the seeds are not viable.',
			'After obtaining the next ideal after unlocking this surge, a radiant surgebinder can also use this ability to produce the Overgrowth effect of the ii/plant growth/ii spell instead of its normal effects.'
		]  // desc
	);
	require $startDir.'pageEnd.php';
?>