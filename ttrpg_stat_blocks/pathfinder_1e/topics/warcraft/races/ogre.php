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
		'Ogre',
		12,
		'bb/Table: Random Height and Weight/bb'.sTable(
			[
				'Gender',
				'Base Height',
				'Height Modifier'
			],
			[
				[
					'Male',
					'6\'',
					'+1d12×3 + 1d12×2 + 1d12 in.<br>(6\' 6" - 12\')'
				],
				[
					'Female',
					'10\'',
					'+1d12×3 + 1d12 in.<br>(6\' 4" - 10\')'
				]
			],
			true,
			false
		),
		'Ogres are massive and rotund humanoids whose height varies dramatically. Ogres have a single bony horn on top of their heads.
		Some ogres have two-heads. These heads share control of their body but do not share thoughts and often argue over courses of action. Two-headed ogres will have one of their heads which has only a single eye.',
		'',
		'',
		'',
		'',
		'',
		'',
		[
			'str' => 4,
			'wis' => -2,
			'cha' => -2,
			'int' => -4
		],
		'',
		[
			'bb/Humanoid/bb: Ogres are humanoid creatures with the giant and ogre subtypes.',
			'bb/Large/bb: Ogres are Large creatures and gain a -1 size penalty to their AC, a -1 size penalty on attack rolls, a +1 size bonus on combat maneuver checks and to their Combat Maneuver Defense, and a -4 size penalty on Stealth checks. bb/Ogres also receive a +2 size bonus to Strength and -2 size penalty to Dexterity./bb These are permanent and stack with the ogre\'s other racial ability score adjustments but are lost while polymorphed. Ogres occupy a 10-foot area.',
			'bb/Slow and Steady/bb: Ogres have a base speed of 20 feet and speed is never modified by armor or encumbrance.',
			'bb/Reckless Might/bb: Ogres receive Power Attack as a bonus feat at first level.',
			'bb/Titanic Origins/bb: Ogres with the arcane bloodline or an elemental bloodline treat their Charisma score as being 2 points higher for all spells and class abilities from the class that gave the bloodline. Ogres with the earth elemental bloodline treat their Charisma score as being 4 points higher instead.',
			'bb/Languages/bb: Ogres begin play speaking Ogre and Orcish. Ogres with high Intelligence scores can choose from Common, Draenei, and Ravenspeech.'
		],
		false,
		[
			[
				'Alternate Racial Traits',
				[
					'bb/Magi/bb',
					'/mm/Some ogre\'s have clearer minds than their brothers and make particularly excellent arcanists. These ogre\'s are disproportionately two-headed compared to their more dim-witted kin.',
					'/mm/You ability score adjustments become +2 Strength, +2 to a single mental ability score (Intelligence, Wisdom, or Charisma) chosen at character creation, and -2 to a single mental ability score. If you have a bonus to Intelligence, your penalty is to Charisma; if you have a bonus to Wisdom, your penalty is to Intelligence and; if you have a bonus to Charisma, your penalty is to Wisdom.',
					'/mm/This replaces ability score adjustments.'
				]
			]
		]
	);
	require $startDir.'pageEnd.php';
?>