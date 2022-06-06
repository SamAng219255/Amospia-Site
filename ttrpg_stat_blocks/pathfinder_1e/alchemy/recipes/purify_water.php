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
	advAlchemyCreationBlock(
		'Water Purifying Salts',// Name
		false,
		[],// Descriptors
		0,// Level
		[
			'When added to water, these salts purify it making diseased, poisonous, or otherwise contaminated water pure and suitable for drinking. This salt does not prevent subsequent contamination. These salts have no effect on magic potions. If consumed directly, these salts produce mild nausea for a couple hours, though not enough to dramatically affect the creature\'s attention, creating no more penalties than -1 penalty to concentration checks. Each dose of salt can purify approximately 8 gallons of water.'
		] // Description
	);
	require $startDir.'pageEnd.php';
?>