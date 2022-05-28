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
		'Elsecalling', // name
		'Transportation', // surge
		'Personal', // range
		'self, and up to seven willing creatures joining hands', // target=false
		false, // effect=false
		false, // area=false
		'20 or 40, see text', // cost
		'none; instantaneous', // interval
		false, // dismiss
		[
			'The surgebinder moves themself to another plane of existence or alternate dimension coexistent with the plane they are on. If several willing persons link hands in a circle with the surgebinder, as many as seven additional individuals can be affected by the elsecalling at the same time. When elsecalling, the targets always land in the location coexistent with their starting location. Travel from the Material Plane, and similar planes, is far simpler than travel from other planes. When traveling from the Material Plane, or similar planes, elsecalling costs 20 points of investiture, whereas travel from any other plane costs 40 points of investiture.'
		]  // desc
	);
	require $startDir.'pageEnd.php';
?>