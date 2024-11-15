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
		'Plains Narmen',// Name
		10,// Race Points
		'Plains narmen are a sub-race that specialize in horeback archery.',// Desc
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
			'con' => -2
		],// Ability Mofifiers
		'Plains narmen are agile experts of survival that prefer to keep threats at a distance than to bear the brunt of attacks.',// Ability Description
		[
			'bb/Medium/bb: Narmen are Medium creatures and have no bonuses or penalties due to their size.',
			'bb/Humanoid/bb: Narmen are humanoids with the alial and narman subtypes.',
			'bb/Normal Speed/bb: Narmen have a base speed of 30 feet.',
			'bb/Darkvision/bb: Narmen can see in the dark up to 60 feet.',
			'bb/Lightbringer/bb: Narmen are immune to light based blind and dazzle and cast spells with the light descriptor at +1 caster level. They gain ii/light/ii as a spell-like ability at will.',
			'bb/Natural Attack/bb: Narmen have a gore attack that deals 1d6 piercing damage.',
			'bb/Expert Rider/bb: Plains narmen receive a +4 racial bonus on Ride checks and always treat Ride and Handle Animal as being class skills.',
			'bb/Weapon Familiarity/bb: Plains narmen are proficient in bows and longswords.',
			'bb/Illuminant Archer/bb: Once per day, a plains narmen can enspell a touched bow for 1 minute per level. Arrows fired from the enspelled bow shed light as torches and creatures struck by them must make a Will save, DC 10 plus half the narman\'s level plus their Charisma modifier, or else glow as ii/faerie fire/ii. The arrows continue to shed light for 1 round per level after being fired.',
			'bb/Languages/bb: Narmen begin play speaking Common and Narman. Narmen with high Intelligence scores can choose from the following languages: Abyssal, Aquan, Aztec, Celestial, Donovian, Draconic, Elven, Idgyptian, Infernal, Mayan, Undercommon, and Vandalusian.'
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
					'A plains narman\'s alial object takes the form of the tusk which protrudes from their mouth called an alidens. When removed, this tusk can be used as a one-handed melee weapon that deals 1d6 points of piercing damage and requires exotic weapon proficiency. The tusk receives its weapon properties as well, though an alial object only has the creature\'s weapon properties if it was part of the creature upon their death.',
					'bb/Weapon Properties/bb ii/+1 Bane-Animals/ii',
					'A plains narman\'s alidens can be incorporated onto a bow, usually affixed to the outer edge of the bow between the arms. When so incorporated, it gives the bow the ii/conserving/ii property as well.',
					'bb/Spell Modifiers/bb An alial wand can be merged with a bow as ii/weaponwand/ii using the number of hit dice of the owner as the caster level and their Charisma modifier to determine the DC.',
					sTable(
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