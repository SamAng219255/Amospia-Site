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
		"Kunthin",// Name
		10,// Race Points
		"Kunthin are the evolution of basic narmen from Kunthij who ceased being narmen.
		bb/Table: Random Starting Ages/bb".sTable(
			[
				'Adulthood',
				'Intuitive',
				'Self-Taught',
				'Trained'
			],
			[
				[
					'15 years',
					'+1d4 years<br>(16 - 19 years)',
					'+1d6 years<br>(16 - 21 years)',
					'+2d6 years<br>(17 - 27 years)',
				]
			],
			true,
			false
		).'bb/Table: Aging/bb'.sTable(
			[
				'Middle Age',
				'Old',
				'Venerable',
				'Maximum Age'
			],
			[
				[
					'35 years',
					'53 years',
					'70 years',
					'70 + 3d20 years',
				]
			],
			true,
			false
		).'bb/Table: Random Height and Weight/bb'.sTable(
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
					'5\' 11"',
					'+2d12 in.<br>(6\' 1" - 7\' 11")',
					'100 lbs.',
					'+(2d12x3 lbs.)<br>(106 - 172 lbs.)'
				],
				[
					'Female',
					'5\' 5"',
					'+2d12 in.<br>(5\' 7" - 7\' 5")',
					'90 lbs.',
					'+(2d12x3 lbs.)<br>(96 - 162 lbs.)'
				]
			],
			true,
			false
		),// Desc
		"Kunthins largely resemble particularly dark skinned humans with thin, straight, white hair. They have lost their rune scars and their tusks.",// Physical Desc
		"Kunthin society is heavily influenced by druidic beliefs and has an emphasis on equality.",// Society
		"Kunthins are seen by most races as an unusual ethnnicity of humans.",// Relations
		"Most kunthins are true neutral and follow the green faith.",// Alignment and Religion
		"",// Adventurers
		"WIP",// Male Names
		"WIP",// Female Names
		[
			"any" => 2
		],// Ability Modifiers
		"Kunthins are a highly varied and versatile race.",// Ability Description
		[
			"bb/Medium/bb: Kunthins are Medium creatures and have no bonuses or penalties due to their size.",
			"bb/Humanoid/bb: Kunthins are humanoids with the kunthin subtype.",
			"bb/Normal Speed/bb: Kunthins have a base speed of 30 feet.",
			"bb/Low-Light Vision/bb: Kunthins can see twice as far in region of dim light.",
			"bb/Bonus Feat/bb: Kunthins select one extra feat at 1st level.",
			"bb/Focused Study/bb: At 1st, 8th, and 16th level, kunthins gain Skill Focus in a skill of their choice as a bonus feat, in addition to their other bonus feat.",
			"bb/Languages/bb: Kunthins begin play speaking narman. Kunthins with high Intelligence scores can choose any languages they want (except secret languages, such as Druidic)."
		],// Racial Traits
		false// Subraces
	);
	block(
		'Favored Class Bonus',
		'favored-class-bonus',
		quick_array(
			[
				'Instead of receiving an additional skill rank or hit point whenever they gain a level in a favored class, kunthins have the option of choosing from a number of other bonuses, depending upon their favored class.',
				'The following options are available to all kunthins who have the listed favored class.',
				'Druid: Gain +1/2 of an additional spell known.',
				'Any class with a spellbook: Gain +1/2 of an additional cantrip slot.'
			]
		),
		true
	);
	require $startDir.'pageEnd.php';
?>