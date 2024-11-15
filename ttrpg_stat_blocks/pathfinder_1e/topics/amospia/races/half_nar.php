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
		'Half-Nar',// Name
		9,// Race Points
		'',// Desc
		'Their builds lay somewhere between a human and a narman. Their tusks shorten to being more decoration than useful. They appear largely human. They grow hair that only grows to half the normal length for a human and that varies from platinum to dirty blonde. Their skin is generally pale but nothing terribly unnatural among humans. They almost always have emerald green eyes.',// Physical Desc
		'',// Society
		'',// Relations
		'',// Alignment and Religion
		'',// Adventurers
		'WIP',// Male Names
		'WIP',// Female Names
		[
			'any' => 2
		],// Ability Modifiers
		'Half-nar characters get a +2 bonus to one ability score of their choice at creation to represent their varied nature.',// Ability Description
		[
			'bb/Medium/bb: Half-nar are Medium creatures and have no bonuses or penalties due to their size.',
			'bb/Humanoid/bb: Half-nar are humanoids with the alial, human, and narman subtypes.',
			'bb/Normal Speed/bb: Half-nar have a base speed of 30 feet.',
			'bb/Darkvision/bb: Half-nar can see in the dark up to 60 feet.',
			'bb/Lightbringer/bb: Half-nar are immune to light based blind and dazzle and cast spells with the light descriptor at +1 caster level. They gain ii/light/ii as a spell-like ability at will.',
			'bb/Skilled/bb: Half-nar gain an additional skill rank at 1st level and one additional skill rank whenever they gain a level.',
			'bb/Languages/bb: Half-nar begin play speaking Common and Narman. Half-nar with high Intelligence scores can choose any languages they want (except secret languages, such as Druidic).'
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
					'A half-nar\'s alial object takes the form of the tusk which protrudes from their mouth called an alidens. When removed, this tusk can be used as a one-handed melee weapon that deals 1d4 points of piercing damage and requires exotic weapon proficiency. The tusk receives its weapon properties as well, though an alial object only has the creature\'s weapon properties if it was part of the creature upon their death.',
					'bb/Weapon Properties/bb ii/+1 Transformative/ii',
					'The weapon always shines as though the target of a ii/light/ii spell.',
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