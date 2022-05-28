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
		'touch or long (400 ft. + 40 ft./level); see text', // range
		'one plants per two levels; see text', // target=false
		false, // effect=false
		'varies; see text', // area=false
		32, // cost
		'none; instantaneous', // interval
		false, // dismiss
		[
			'The touched plants suddenly gain up to 2 years worth of growth as chosen by the surgebinder. If these plants are grown to a state where they would bear fruit or seeds, the fruit is small and inedible and the seeds are not viable. This ability has an instantaneous duration and does not cost additional investiture beyond the initial cost upon using the ability.',
			'At 10th level, the surgebinder can instead use this ability to produce the Overgrowth effect of the ii/plant growth/ii spell.'
		]  // desc
	);
	require $startDir.'pageEnd.php';
?>