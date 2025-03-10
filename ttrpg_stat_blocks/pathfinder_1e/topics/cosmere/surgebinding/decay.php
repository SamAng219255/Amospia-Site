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
		'Decay', // name
		'Division', // surge
		'Devastating Ones, Dustbringers, Skybreakers', // access
		'touch', // range
		'a single creature or object touched', // target=false
		false, // effect=false
		false, // area=false
		10, // cost
		'none; instantaneous', // interval
		false, // dismiss
		[
			'Touched creature or object crumbles, burns, or otherwise breaks down. Against medium or smaller objects, the target gains the broken condition. If the target is larger, double the cost for every size category above Medium. If insufficient light is used, only a portion of the object is broken based on the amount of light spent. If the target is already broken, it is destroyed instead. Against creatures, it deals 60 points of damage. Radiant surgebinders add an additional 20 points of damage for each ideal they obtain after unlocking this surge.',
			'After obtaining the next ideal, a radiant surgebinder can choose use this ability to do any amount of damage less than the listed amount and can shape the destroyed section as easily as drawing or sculpting the design.',
			'This ability can be used in place of an attack in a full attack action.'
		]  // desc
	);
	require $startDir.'pageEnd.php';
?>