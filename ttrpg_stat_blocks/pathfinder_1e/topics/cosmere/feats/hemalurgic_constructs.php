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
	block(
		'Craft Hemalurgic Construct',
		'feat',
		quick_array([
			'ii/Your growing knowledge of hemalurgy has taught you how to twist a creature\'s form into a powerful monstrosity./ii',
			'bb/Prerequisites/bb: At least 5 ranks in Knowledge (hemalurgy)',
			'bb/Benefit/bb: You gain the knowledge of how to use hemalurgic linchpins and how to create hemalurgic constructs. For every 5 ranks in Knowledge (hemalurgy) you know, you can learn to create 1 type of specific hemalurgic construct for which you can use all of the required spikes.'
		]),
		true
	);
	require $startDir.'pageEnd.php';
?>