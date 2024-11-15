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
		'Halfnar',// Name
		8,// Race Points
		'',// Desc
		'Their builds lean more to their halfing heritage. Their tusks shorten to being more decoration than useful. Their hair is generally strawberry blonde. Their skin is usually on the pale side.',// Physical Desc
		'',// Society
		'',// Relations
		'',// Alignment and Religion
		'',// Adventurers
		'WIP',// Male Names
		'WIP',// Female Names
		[
			'dex' => 2,
			'cha' => 2,
			'str' => -2
		],// Ability Modifiers
		'Halfnars are nimble and strong-willed, but their small statures make them weaker than other races.',// Ability Description
		[
			'bb/Small/bb: Halfnars are Small creatures and gain a +1 size bonus to their AC, a +1 size bonus on attack rolls, a –1 penalty on combat maneuver checks and to their Combat Maneuver Defense, and a +4 size bonus on Stealth checks.',
			'bb/Humanoid/bb: Halfnars are humanoids with the alial, halfling, and narman subtypes.',
			'bb/Normal Speed/bb: Halfnars have a base speed of 20 feet.',
			'bb/Darkvision/bb: Halfnars can see in the dark up to 60 feet.',
			'bb/Fearless/bb: Halfnars receive a +2 racial bonus on all saving throws against fear. This bonus stacks with the bonus granted by halfling luck.',
			'bb/Halfling Luck/bb: Halfnars receive a +1 racial bonus on all saving throws.',
			'bb/Keen Senses/bb: Halfnars receive a +2 racial bonus on Perception checks.',
			'bb/Weapon Familiarity/bb: Halfnars are proficient with slings and treat any weapon with the word "halfling" in its name as a martial weapon.',
			'bb/Lightbringer/bb: Halfnars are immune to light based blind and dazzle and cast spells with the light descriptor at +1 caster level. They gain ii/light/ii as a spell-like ability at will.',
			'bb/Skilled/bb: Halfnars gain an additional skill rank at 1st level and one additional skill rank whenever they gain a level.',
			'bb/Languages/bb: Halfnars begin play speaking Common, Halfling, and Narman. Halfnars with high Intelligence scores can choose from the following languages: Dwarven, Elven, Gnome, and Goblin.'
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
					'A half-nar\'s alial object takes the form of the tusk which protrudes from their mouth called an alidens. When removed, this tusk can be used as a one-handed melee weapon that deals 1d3 points of piercing damage and requires exotic weapon proficiency. The tusk receives its weapon properties as well, though an alial object only has the creature\'s weapon properties if it was part of the creature upon their death.',
					'bb/Weapon Properties/bb ii/+1 Impact/ii',
					'The weapon always shines as though the target of a ii/light/ii spell.',
					'bb/Spell Modifiers/bb '.sTable(
						[
							'CL/DC Modifier',
							'Spells'
						],
						[
							[
								'+1',
								'light spells and ii/reduce person/ii'
							],
							[
								'-1',
								'darkness spells and ii/enlarge person/ii'
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