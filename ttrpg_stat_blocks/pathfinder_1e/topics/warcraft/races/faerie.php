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
		'Faerie',
		12,
		'',
		'',
		'',
		'',
		'',
		'',
		'',
		'',
		[
			'dex' => 2,
			'cha' => 2,
			'con' => -2
		],
		'',
		[
			'bb/Fey/bb: Faeries are fey creatures with the night fae subtype.',
			'bb/Small/bb: Faeries are Small creatures and gain a +1 size bonus to their AC, a +1 size bonus on attack rolls, a –1 penalty on combat maneuver checks and to their Combat Maneuver Defense, and a +4 size bonus on Stealth checks.',
			'bb/Slow Speed/bb: Faeries have a base speed of 20 feet and a fly speed of 30 feet with clumsy maneuverability.',
			'bb/Low-Light Vision/bb: Faeries can see twice as far in conditions of dim light.',
			'bb/Moonsight/bb: Faeries gain the following supernatural ability: Faeries can concentrate as a full-round action to detect hidden things within 30 feet including mundane methods of disguise or concealment as well as both glamers and transmutations that disguise or conceal. This does not reveal the true identity of the hidden things or where they are but does reveal which square they occupy. Faeries also get an automatic Perception check with a +4 bonus to notice the presence of hidden things within 30 feet, even if a check would normally not be allowed. This check only reveals whether or not a hidden thing exists but no more information.',
			'bb/Prestidigitation/bb: Faeries gain ii/prestidigitation/ii as a constant spell-like ability.',
			'bb/Languages/bb: Faeries begin play speaking Shadowspeak. Faeries with high Intelligence scores may know any language (other than secret languages).'
		],
		false
	);
	require $startDir.'pageEnd.php';
?>