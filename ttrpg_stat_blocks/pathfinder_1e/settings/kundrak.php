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
	block(
		'Kundrak',
		'setting',
		quick_array([
			'Kundrak is an ancient dragon from before this reality who crossed over with Pharasma from the previous reality and aided her in fending off the Outer Gods from destroying the budding universe and who continues to do so to this day. He possesses a great hall located on a rogue planet floating in the space between the galaxies containing Golarion, Androffa, and Earth. If is here that he collects knowledge and weaponry that he wields in his endless war against the Outer Gods and their minions.'
		])
	);
	require $startDir.'pageEnd.php';
?>