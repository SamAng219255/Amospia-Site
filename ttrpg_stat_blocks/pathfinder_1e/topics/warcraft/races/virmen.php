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
		'Virmen',
		14,
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
			'wis' => 2,
			'int' => -4
		],
		'',
		[
			'bb/Monstrous Humanoid/bb: Virmen are monstrous humanoid creatures with the virmen subtype.',
			'bb/Small/bb: Virmen are Small creatures and gain a +1 size bonus to their AC, a +1 size bonus on attack rolls, a –1 penalty on combat maneuver checks and to their Combat Maneuver Defense, and a +4 size bonus on Stealth checks.',
			'bb/Normal Speed/bb: Virmen have a base speed of 30 feet.',
			'bb/Darkvision/bb: Virmen can see perfectly in darkness up to 60 feet away though they can only see in black and white in the dark.',
			'bb/Incredible Bite Force/bb: Virmen have a bite natural attack that is a primary natural attack and deals 1d3 points of bludgeoning, piercing, and slashing damage. Virmen can also use their sharp teeth and powerful jaws to chew through just about anything, even solid steel. Every full-round action of chewing, a virmen can chew a hole that deals 20 points of damage to an inanimate object.',
			'bb/Jumper/bb: Virmen are always considered to have a running start when making Acrobatics checks to jump.',
			'bb/Scavenger/bb: Virmen gain a +2 racial bonus on Appraise and Perception checks to find hidden objects (including traps and secret doors), determine whether food is spoiled, or identify a potion by taste.',
			'bb/Languages/bb: Virmen begin play speaking Pandaren. Virmen with high Intelligence scores can choose from Common, Hozen, Orcish, and Mogu. Virmen can only speak in a broken form of any language they know unless they are trained in Linguistics.'
		],
		false
	);
	require $startDir.'pageEnd.php';
?>