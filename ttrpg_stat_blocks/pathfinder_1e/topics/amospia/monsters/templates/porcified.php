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
		'Porcified (CR +0)',
		'template',
		quick_array([
			'Acquired/Inherited Template Acquired',
			'Simple Template No',
			'Usable with Summons No',
			'',
			'Porcifying is the process of forcibly naturalizing another race into piglin society using a brutal boot camp of sorts that includes wrestling hoglins, intensive crossbow training, and hard labor in the mines all while being subjected to extreme heat and small amounts of withering magic extracted from wither skeleton skulls taken as trophies in addition to mental retraining that makes them act and think like piglins and ending with painfully implanting artificial tusks.',
			'"Porcified" is an inherited template that can be added to any intelligent mortal creature, referred to hereafter as the base creature.',
			'bb/Challenge Rating/bb: The challenge rating of a porcified creature rarely changes from that of the base creature.',
			'bb/Saves/bb: A porcified creature takes a -5 penalty to all Will saves from the intense mental retraining they experience. This penalty increases to -10 against Compulsion effects.',
			'bb/Abilities/bb: A porcified creature\'s Strength increases by 2 unless their already grants a bonus to Strength.',
			'bb/Languages/bb: A porcified creature gains Piglin as a known language.',
			'bb/Proficiencies/bb: A porcified creature is proficient with all crossbows and all piglin racial weapons. They treat their strength score as being 3 higher for the purpose of being able to wield piglin forged gold weapons.',
			'bb/Special Qualities/bb: A porcified creature gains the Nether Endurance special quality:',
			'ii/Nether Endurance/ii (Ex): You gain a +4 racial bonus on Con checks and Fort saves vs fatigue and exhaustion or running, forced marches, starvation, thirst, and hot or cold environments.'
		]),
		true
	);
	require $startDir.'pageEnd.php';
?>