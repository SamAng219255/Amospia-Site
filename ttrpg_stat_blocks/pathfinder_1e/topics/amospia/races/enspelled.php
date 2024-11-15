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
		'Enspelled Narman',// Name
		9,// Race Points
		'Enspelled are a generic narman sub-race without a specific origin. Their purpose is to allow the racial spellcasting ability on a lower race point race. At the GM\'s discretion, an enspelled may be played as an unusual member of another narman race and some abilities may be added to facilitate that, adjusting the race point total as necessary. Generally, it is suggested to add abilities from the other sub-race\'s description to bring the race point totals to the same number unless intentionally playing as a more or less powerful version of the sub-race.',// Desc
		'',// Physical Desc
		'',// Society
		'',// Relations
		'',// Alignment and Religion
		'',// Adventurers
		'WIP',// Male Names
		'WIP',// Female Names
		[
			'dex' => 2,
			'int' => 2,
			'str' => -2
		],// Ability Modifiers
		'',// Ability Description
		[
			'bb/Medium/bb: Enspelled are Medium creatures and have no bonuses or penalties due to their size.',
			'bb/Humanoid/bb: Enspelled are humanoids with the alial and narman subtypes.',
			'bb/Normal Speed/bb: Enspelled have a base speed of 30 feet.',
			'bb/Lightbringer/bb: Enspelled are immune to light based blind and dazzle and cast spells with the light descriptor at +1 caster level.',
			'bb/Utility Cantrips/bb: Enspelled gain 4 0-level wizard spell slots chosen at character creation. These slots are in addition to any slots gained from class levels, function as the wizard spellcasting feature, and are affected by opposition schools. If the enspelled does not possess any levels in wizard, they must choose two opposition schools as well. They can prepare ii/create water/ii, ii/light/ii, ii/prestidigitation/ii, and ii/read magic/ii from memory in any spell slots that have these spells on their list and use a spellbook.',
			'bb/Languages/bb: Enspelled begin play speaking Narman. Enspelled with high Intelligence scores can choose from the following languages: Abyssal, Aquan, Aztec, Celestial, Common, Donovian, Elven, Idgyptian, Infernal, Mayan, Undercommon, and Vandalusian.'
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
					'An enspelled\'s alial object takes the form of a signet ring they receive at birth and is magically fitted to their size as they age. This ring is known as a lesser alianul.',
					'bb/Weapon Properties/bb ii/+1/ii (Weapon sheds ii/light/ii as the spell.)',
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