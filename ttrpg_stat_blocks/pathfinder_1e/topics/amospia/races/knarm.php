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
		'Knarm',// Name
		8,// Race Points
		'',// Desc
		'',// Physical Desc
		'',// Society
		'',// Relations
		'',// Alignment and Religion
		'',// Adventurers
		'WIP',// Male Names
		'WIP',// Female Names
		[
			'dex' => 2,
			'wis' => 2,
			'str' => -2
		],// Ability Modifiers
		'Knarm are descendant from a wise and nimble people but they inherit the physical weakness that plagues the narmen.',// Ability Description
		[
			'bb/Medium/bb: Knarm are Medium creatures and have no bonuses or penalties due to their size.',
			'bb/Humanoid/bb: Knarm are humanoids with the alial, knom, and narman subtypes.',
			'bb/Normal Speed/bb: Knarm have a base speed of 30 feet.',
			'bb/Focused Study/bb: At 1st, 8th, and 16th level, knarm gain Skill Focus in a skill of their choice as a bonus feat.',
			'bb/Craftsman/bb: Knarm receive a +2 racial bonus to a single Profession or Craft skill chosen at character creation.',
			'bb/Lightbringer/bb: Knarm are immune to light based blind and dazzle and cast spells with the light descriptor at +1 caster level. They gain ii/light/ii as a spell-like ability at will.',
			'bb/Skilled/bb: Knarm gain an additional skill rank at 1st level and one additional skill rank whenever they gain a level.',
			'bb/Languages/bb: Knarm begin play speaking Knom and Narman. Knarm with high Intelligence scores can choose from the following languages: Common, Idgyptian, Orcish, and Piglin.'
		],// Racial Traits
		false// Subraces
	);
	block(
		'Alial Object',
		'alial-object',
		[
			'Alial races have (generally suppressed) magical energy that infuses a specific part of their body. Though this energy may be present in the object before the creature\'s death, alial objects are non-magical until after the creature\'s death and only acquire their abilities if they are still part of the creature when they die. This body part must be hard like bone or a gemstone. This object can otherwise take many different forms.',
			'Alial objects contain a significantly strong impression of the owner\'s identity. Whether or not the creature is deceased, alial objects can be used as a focus for any spell that requires identifying a creature, such as scrying, to perfectly identify the owner. The owner also receives no saves against such spells.',
			'Alial objects can also be incorporated into specific type of magic items, granting bonuses but potentially changing their effect. Alial objects do not impart their weapon properties or spell modifiers unless stated otherwise or incorporated into an item that uses them.'
		],
		true,
		[
			[
				'title' => 'Description',
				'spaced' => true,
				'texts' => quick_array([
					'A knarm\'s alial object takes the form of an additional bony plate located on their foreheads beneath the skin called an alifrons.',
					'bb/Weapon Properties/bb ii/+1/ii',
					'bb/Spell Modifiers/bb '.sTable(
						[
							'CL/DC Modifier',
							'Spells'
						],
						[
							[
								'+1',
								'light spells'
							],
							[
								'-1',
								'darkness spells'
							]
						],
						true,
						false,
						false,
						true
					)
				])
			]
		]
	);
	require $startDir.'pageEnd.php';
?>