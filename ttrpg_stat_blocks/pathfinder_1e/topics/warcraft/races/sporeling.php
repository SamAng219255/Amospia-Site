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
		'Sporeling',
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
			'con' => 2,
			'wis' => 2,
			'str' => -4
		],
		'',
		[
			'bb/Plant/bb: Sporelings are plant creatures. Plants are immune to all mind-affecting effects (charms, compulsions, morale effects, patterns, and phantasms), paralysis, poison, polymorph, sleep effects, and stunning. Plants breathe and eat, but do not sleep, unless they want to gain some beneficial effect from this activity. This means that a plant creature can sleep in order to regain spells, but sleep is not required to survive or stay in good health.',
			'bb/Small/bb: Sporelings are Small creatures and gain a +1 size bonus to their AC, a +1 size bonus on attack rolls, a –1 penalty on combat maneuver checks and to their Combat Maneuver Defense, and a +4 size bonus on Stealth checks.',
			'bb/Normal Speed/bb: Sporelings have a base speed of 30 feet.',
			'bb/Low-Light Vision/bb: Sporelings can see twice as far in conditions of dim light.',
			'bb/Flammable/bb: Sporelings have vulnerability to fire and take an additional half again as much fire damage from all sources.',
			'bb/Spore Burst/bb: Sporelings can cast ii/spore burst/ii as a spell-like ability once per day using their total number of hit dice in place of their caster level.',
			'bb/Languages/bb: Sporelings begin play speaking Sporeling. Sporelings with high Intelligence scores can choose from Common, Draenei, Orcish, and Podling.'
		],
		false
	);
	require $startDir.'pageEnd.php';
?>