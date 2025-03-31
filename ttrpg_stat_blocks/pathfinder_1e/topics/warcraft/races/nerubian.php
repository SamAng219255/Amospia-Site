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
		'Nerubian',
		13,
		'Though several castes of nerubians exist, the natural "trueborn" form is most common.',
		'',
		'',
		'',
		'',
		'',
		'',
		'',
		[
			'dex' => 2,
			'int' => 2,
			'cha' => -2
		],
		'',
		[
			'bb/Humanoid/bb: Nerubians are Aberrations with the aqir subtype.',
			'bb/Medium/bb: Nerubians are Medium creatures and have no bonuses or penalties due to their size.',
			'bb/Fast Speed/bb: Nerubians have a base speed of 40 feet and climb speed of 20. Nerubians receive the +8 racial bonus to Climb checks that a climb speed normally grants.',
			'bb/Darkvision/bb: Nerubians can see perfectly in darkness up to 60 feet away though they can only see in black and white in the dark.',
			'bb/Six-Legged/bb: Nerubians have six legs which grant them a +8 racial bonus against trip attempts.',
			'bb/Natural Engineers/bb: Nerubians gain a +1 racial bonus on Disable Device and Knowledge (engineering) checks.',
			'bb/Venomous/bb: Nerubians gain the following extraordinary ability: A number of times per day equal to its Constitution modifier (minimum 1/day), a nerubian can envenom a weapon that it wields from glands near its mouth. Applying venom in this way is a swift action.',
			'ii/Nerubian Venom/ii: Injury; save Fort DC 10 + 1/2 the user\'s Hit Dice + their Constitution modifier; frequency 1/round for 6 rounds; effect 1 Con; cure 1 save.',
			'bb/Web/bb: Nerubians gain the web universal monster rule.',
			'bb/Languages/bb: Nerubians begin play speaking Nerubian. Nerubians with high Intelligence scores can choose from Common, Orcish, Shath\'Yar, and the language of death.'
		],
		false
	);
	require $startDir.'pageEnd.php';
?>