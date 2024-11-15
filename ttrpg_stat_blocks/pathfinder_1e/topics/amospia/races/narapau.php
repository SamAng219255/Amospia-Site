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
		'Narapau',// Name
		11,// Race Points
		'Narapau are the result of porcified narmen.',// Desc
		'Their skin becomes a dark pure brown and their builds resemble piglins. They grow snouts and their own pig-like tusks in place of their long-straight one. Their heads also widen and take on a similar shape to that of the piglins and they grow occasional stiff dark hairs on top of their heads but their ears do not change. Their fingers and toes fatten to resemble their piglin brothers\' but they retain their human-like nails instead of the piglins\' hoofed fingers and toes.',// Physical Desc
		'',// Society
		'',// Relations
		'',// Alignment and Religion
		'',// Adventurers
		'WIP',// Male Names
		'WIP',// Female Names
		[
			'any' => 2
		],// Ability Mofifiers
		'Narapau are incredibly strong and skilled at staying alive but are surprisingly frail despite their dangerous lifestyle.',// Ability Description
		[
			'bb/Medium/bb: Narapau are Medium creatures and have no bonuses or penalties due to their size.',
			'bb/Monstrous Humanoid/bb: Narapau are monstrous humanoids with the alial and piglin subtypes.',
			'bb/Normal Speed/bb: Narapau have a base speed of 30 feet.',
			'bb/Battle Hardened/bb: Narapau gain a +1 racial bonus to their CMD.',
			'bb/Anguished Endurance/bb: Narapau gain a +4 racial bonus on Constitution checks and Fortitude saves to avoid fatigue and exhaustion, as well as any other ill effects from running, forced marches, starvation, thirst, and hot or cold environments.',
			'bb/Weapon Familiarity/bb: Narapau are proficient with all crossbows and all piglin racial weapons. Narapau also treat their strength score as being 3 higher for the purpose of being able to wield piglin forged gold weapons.',
			'bb/Natural Attack/bb: Narmen have a gore attack that deals 1d6 piercing damage.',
			'bb/Languages/bb: Narapau begin play speaking Piglin. Narapau with high Intelligence scores can choose from the following languages: Common, Idgyptian, Narman, and Orcish.'
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
					'A narapau\'s alial object is called an alicurudens and takes the form of the left of their two large boar-like tusks.',
					'bb/Weapon Properties/bb ii/+1 Bane-Undead Training (Power Attack)/ii',
					'bb/Spell Modifiers/bb ii/Summon monster/ii and ii/summon nature\'s ally/ii only summon pig-like animals such as pigs, boars, and hoglins instead of their normal lists.',
					'Sample Lists:<dl>
						<dt>ii/Summon Monster I/ii</dt>
						<dd>1d2 Pigs</dd>
						<dt>ii/Summon Monster II/ii</dt>
						<dd>Wild Pig</dd>
						<dt>ii/Summon Monster III/ii</dt>
						<dd>Boar</dd>
						<dt>ii/Summon Monster IV/ii</dt>
						<dd>Bristle Boar</dd>
						<dd>Dire Boar</dd>
						<dt>ii/Summon Monster V/ii</dt>
						<dd>Hoglin</dd>
						<dt>ii/Summon Monster VI/ii</dt>
						<dd>Steam Hog</dd>
						<dt>ii/Summon Monster VII/ii</dt>
						<dd>Razorback Goliath</dd>
						<dt>ii/Summon Monster VIII/ii</dt>
						<dd>Abyssal Razorback</dd>
						<dt>ii/Summon Monster IX/ii</dt>
						<dd>Deep Swine</dd>
					</dl>',
					sTable(
						[
							'CL/DC Modifier',
							'Spells'
						],
						[
							[
								'+2',
								'spells that conjure weapons'
							],
							[
								'-1',
								'Necromancy spells'
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