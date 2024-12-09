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
	raceBlockAuto(
		'Gnome',
		9,
		'',
		'',
		'',
		'',
		'',
		'',
		'',
		'',
		[
			'str' => -2,
			'dex' => 2,
			'int' => 2
		],
		'Gnomes are quick and sharp-minded, though their small size makes them less physically imposing.',
		[
			'bb/Humanoid/bb: Gnomes are humanoid creatures with the gnome subtype.',
			'bb/Small/bb: Gnomes are Small creatures and gain a +1 size bonus to their AC, a +1 size bonus on attack rolls, a –1 penalty on combat maneuver checks and to their Combat Maneuver Defense, and a +4 size bonus on Stealth checks.',
			'bb/Slow Speed/bb: Gnomes have a base speed of 20 feet.',
			'bb/Escape Artist/bb: Gnomes receive a +2 racial bonus to Escape Artist checks.',
			'bb/Expansive Mind/bb: Gnomes treat all of their ability scores as being 4 higher for the purpose of determining bonus spells per day.',
			'bb/Arcane Resistance/bb: Gnomes gain spell resistance equal to 6 + their character level.',
			'bb/Engineering Specialization/bb: Gnomes receive a +2 racial bonus to Craft checks to create mechanical items and to Knowledge (engineering) checks.',
			'bb/Nimble Fingers/bb: Gnomes receive a +2 racial bonus to initiative checks. ',
			'bb/Languages/bb: Gnomes begin play speaking Common and Gnomish. Gnomes with high Intelligence scores can choose from Darnassian, Draenei, Dwarven, Orcish, Pandaren, Thalassian.'
		],
		false
	);
	require $startDir.'pageEnd.php';
?>