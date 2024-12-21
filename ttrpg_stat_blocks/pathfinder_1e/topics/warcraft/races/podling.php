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
		'Podling',
		10,
		'',
		'',
		'',
		'',
		'',
		'',
		'',
		'',
		[
			'str' => 2,
			'cha' => 2,
			'int' => -4
		],
		'',
		[
			'bb/Plant/bb: Podlings are plant creatures. Plants are immune to all mind-affecting effects (charms, compulsions, morale effects, patterns, and phantasms), paralysis, poison, polymorph, sleep effects, and stunning. Plants breathe and eat, but do not sleep, unless they want to gain some beneficial effect from this activity. This means that a plant creature can sleep in order to regain spells, but sleep is not required to survive or stay in good health.',
			'bb/Small/bb: Podlings are Small creatures and gain a +1 size bonus to their AC, a +1 size bonus on attack rolls, a –1 penalty on combat maneuver checks and to their Combat Maneuver Defense, and a +4 size bonus on Stealth checks.',
			'bb/Normal Speed/bb: Podlings have a base speed of 30 feet.',
			'bb/Low-Light Vision/bb: Podlings can see twice as far in conditions of dim light.',
			'bb/Flammable/bb: Podlings have vulnerability to fire and take an additional half again as much fire damage from all sources.',
			'bb/Survivalists/bb: Fungarians gain a +2 racial bonus on Survival checks.',
			'bb/Swarming/bb: Up to two podlings can share the same square at the same time. If two podlings that are occupying the same square attack the same foe, they are considered to be flanking that foe as if they were in two opposite squares.',
			'bb/Languages/bb: Podlings begin play speaking Podling. Podlings with high Intelligence scores can choose from Botani, Common, Draenei, and Orcish.'
		],
		false
	);
	require $startDir.'pageEnd.php';
?>