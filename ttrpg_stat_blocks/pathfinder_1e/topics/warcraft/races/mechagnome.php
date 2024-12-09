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
		'Mechagnome',
		11,
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
		'Mechagnomes are quick and sharp-minded, though their small size makes them less physically imposing.',
		[
			'bb/Humanoid/bb: Mechagnomes are humanoid creatures with the gnome and half-contruct subtypes.',
			'bb/Mechanical/bb: Mechagnomes gain a +2 racial bonus against disease, mind-affecting, poison, exhaustion, and fatigue. Mechagnomes cannot be raised or resurrected. Mechagnomes do not need to breathe, eat, or sleep but can do so to gain some benefit, such as drinking a potion or resting to restore spells.',
			'bb/Small/bb: Mechagnomes are Small creatures and gain a +1 size bonus to their AC, a +1 size bonus on attack rolls, a –1 penalty on combat maneuver checks and to their Combat Maneuver Defense, and a +4 size bonus on Stealth checks.',
			'bb/Slow Speed/bb: Mechagnomes have a base speed of 20 feet.',
			'bb/Emergency Failsafe/bb: Mechagnomes have fast healing 1 except their fast healing cannot heal them above a number of hit points equal to their number of levels.',
			'bb/Hyper Organic Light Originator/bb: Mechagnomes gain following spell-like ability:',
			'1/day—ii/mirror image/ii',
			'bb/Mastercraft/bb: Mechagnomes have numerous tools built into their hands. They are treated as having any hand-held tools necessary to perform any Craft skill they have ranks in.',
			'bb/Skeleton Pinkie/bb: Hidden in their mechanical fingers, mechagnomes also have a single basic skeleton key with a +10 bonus. This bonus increases by +5 at 5th level and every 5 levels thereafter.',
			'bb/Languages/bb: Mechagnomes begin play speaking Common and Gnomish. Mechagnomes with high Intelligence scores can choose from Darnassian, Draenei, Dwarven, Orcish, Pandaren, Thalassian.'
		],
		false
	);
	require $startDir.'pageEnd.php';
?>