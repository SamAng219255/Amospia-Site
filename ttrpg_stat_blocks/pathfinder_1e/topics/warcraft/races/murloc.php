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
		'Murloc',
		9,
		'bb/Table: Random Height and Weight/bb'.sTable(
			[
				'Gender',
				'Base Height',
				'Height Modifier',
				'Base Weight',
				'Weight Modifier'
			],
			[
				[
					'Male',
					'3\' 5"',
					'+1d12 in.<br>(3\' 6" - 4\' 5")',
					'67 lbs.',
					'+(1d12x2 lbs.)<br>(68 - 79 lbs.)'
				],
				[
					'Female',
					'3\' 5"',
					'+1d12 in.<br>(3\' 6" - 4\' 5")',
					'67 lbs.',
					'+(1d12x2 lbs.)<br>(68 - 79 lbs.)'
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
			'cha' => 2,
			'wis' => -2
		],
		'',
		[
			'bb/Monstrous Humanoid/bb: Murlocs are monstrous humanoid creatures with the aquatic, amphibious, and murloc subtypes.',
			'bb/Medium/bb: Murlocs are Medium creatures and have no bonuses or penalties due to their size.',
			'bb/Normal Speed/bb: Murlocs have a base speed of 30 feet and a swim speed of 30 feet which gives the normal +8 racial bonus to Swim checks that a swim speed normally grants.',
			'bb/Darkvision/bb: Murlocs can see perfectly in darkness up to 60 feet away though they can only see in black and white in the dark.',
			'bb/Amphibious/bb: Murlocs can breathe both in air and in water.',
			'bb/Net Experts/bb: All murlocs are proficient with nets and receive a +2 racial bonus to craft or repair nets. They also begin with a single net in addition to their starting wealth.',
			'bb/Languages/bb: Murlocs begin play speaking Nerglish. Murlocs with high Intelligence scores can choose from Common, Kalimag (Aquan), Orcish, and Nazja.'
		],
		false
	);
	require $startDir.'pageEnd.php';
?>