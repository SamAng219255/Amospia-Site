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
		'Gnoll',
		6,
		'bb/Table: Random Height and Weight/bb'.sTable(
			[
				'Base Height',
				'Height Modifier'
			],
			[
				[
					'4\'',
					'+2d6 in.<br>(4\' 1" - 5\')'
				]
			],
			true,
			false
		),
		'',
		'',
		'',
		'',
		'',
		'',
		'',
		[
			'str' => 2,
			'con' => 2,
			'int' => -4
		],
		'',
		[
			'bb/Monstrous Humanoid/bb: Gnolls are monstrous humanoid creatures with the gnoll subtype.',
			'bb/Medium/bb: Gnolls are Medium creatures and have no bonuses or penalties due to their size.',
			'bb/Normal Speed/bb: Gnolls have a base speed of 30 feet.',
			'bb/Darkvision/bb: Gnolls can see perfectly in darkness up to 60 feet away though they can only see in black and white in the dark.',
			'bb/Jumper/bb: Gnolls are always considered to have a running start when making Acrobatics checks to jump.',
			'bb/Sprinter/bb: Gnolls gain a +10 foot racial bonus to their speed when using the charge, run, or withdraw actions.',
			'bb/Languages/bb: Gnolls begin play speaking Gnoll. Gnolls with high Intelligence scores can choose from Common, Orcish, Kalimag.'
		],
		false
	);
	require $startDir.'pageEnd.php';
?>