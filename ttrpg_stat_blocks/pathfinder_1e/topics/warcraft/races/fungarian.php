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
		'Fungarian / Fungret',
		10,
		'This stat block represents both the fungarians found on Azeroth and the fungrets found in Maldraxxus.',
		'',
		'',
		'',
		'',
		'',
		'',
		'',
		[
			'str' => 2,
			'wis' => 2,
			'int' => -2
		],
		'',
		[
			'bb/Monstrous Humanoid/bb: Fungarians are monstrous humanoid creatures.',
			'bb/Fungal/bb: Fungarians have the fungal subtype which grant some of the properties of plant creatures. Fungal creatures gain a +2 racial bonus on saving throws against mind-affecting effects, polymorph, and sleep effects. For effects targeting creatures by type, fungal creatures count as both their own typing (Monstrous Humanoid) and as plants (treat them as plants for effects that specifically mention plant creatures otherwise treat them as their native typing).',
			'bb/Small/bb: Fungarians are Small creatures and gain a +1 size bonus to their AC, a +1 size bonus on attack rolls, a –1 penalty on combat maneuver checks and to their Combat Maneuver Defense, and a +4 size bonus on Stealth checks.',
			'bb/Normal Speed/bb: Fungarians have a base speed of 30 feet.',
			'bb/Darkvision/bb: Fungarians can see perfectly in darkness up to 30 feet away though they can only see in black and white in the dark.',
			'bb/Low-Light Vision/bb: Fungarians can see twice as far in conditions of dim light.',
			'bb/Spore Burst/bb: Fungarians can cast ii/spore burst/ii as a spell-like ability once per day using their total number of hit dice in place of their caster level.',
			'bb/Survivalists/bb: Fungarians gain a +2 racial bonus on Survival checks.',
			'bb/Languages/bb: Fungarians begin play speaking Fungarian. Fungarians with high Intelligence scores can choose from Common, Nerubian, Orcish, and Zandali. (Fungrets, native to Maldraxxus replace Nerubian with Shadowspeak.)'
		],
		false
	);
	require $startDir.'pageEnd.php';
?>