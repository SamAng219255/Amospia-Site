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
		'Andinar',// Name
		12,// Race Points
		'Andinar are half narman and half enderfolk.',// Desc
		'Andinar resemble tall muscular elves with coal-black skin and glowing green cat-like eyes. An andinar\'s body is covered in glowing purple runes and wisps and black and purple energy drift off of them. Andinar have an average height of seven and a half feet.',// Physical Desc
		'',// Society
		'',// Relations
		'',// Alignment and Religion
		'',// Adventurers
		'WIP',// Male Names
		'WIP',// Female Names
		[
			'str' => 2,
			'cha' => 2,
			'wis' => -2
		],// Ability Mofifiers
		'Andinars are strong with potent natural magics though their minds are clouded somewhat by the dark energies they wield.',// Ability Description
		[
			'bb/Medium/bb: Andinar are Medium creatures and have no bonuses or penalties due to their size.',
			'bb/Abberation/bb: Andinar are aberrations with the alial, enderfolk, and narman subtypes.',
			'bb/Normal Speed/bb: Andinar have a base speed of 30 feet.',
			'bb/Darkvision/bb: Andinar can see in the dark up to 60 feet.',
			'bb/Ender Step/bb: Andinar may teleport up to 10 feet in any direction to a location within line of sight as a 5-foot step.',
			'bb/Mental Resistance/bb: Andinar gain a +2 racial bonus on Will saves against enchantment (charm) and enchantment (compulsion). If they fail the save, andinar receive another save 1 round later to prematurely end the effect (assuming the spell or spell-like ability has a duration greater than 1 round). This second save is made at the same DC as the first. If the andinar has a similar ability from another source (such as a rogue\'s slippery mind class feature), it can only use one of these abilities per round, but can try the other on the second round if the first reroll ability fails.',
			'bb/Evasive Teleport/bb: Andinar can teleport short distances to avoid incoming attacks. This grants a +4 dodge bonus to AC and, if they have a Dexterity of at least 13, they gain Deflect Arrows as a bonus feat though they teleport out of the way of the projectile instead. This feat can only be used as a prerequisite for other feats if they also have the Improved Unarmed Strike feat.',
			'bb/Water Vulnerability/bb: Andinar take 1d6 points of damage each round they are in contact with water and splashing them with water deals 1d4 points of damage. Andinar take 10d6 points of damage each round instead if they are fully submerged in water.',
			'bb/Teleportation Affinity/bb: Andinar receive a +1 racial bonus to their caster level for casting spells of the teleportation subschool and are treated as 1 level higher when using class abilities that teleport themself, other creatures, or objects.',
			'bb/Languages/bb: Andinar begin play speaking Common, Narman, and Ender. Andinar with high Intelligence scores can choose from the following languages: Aklo, Aztec, Celestial, Donovian, Draconic, Elven, Idgyptian, Infernal, Mayan, Undercommon, and Vandalusian.'
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
					'An andinar\'s alial object takes the form of their jawbone.',
					'bb/Weapon Properties/bb ii/+1 Called/ii',
					'bb/Spell Modifiers/bb '.sTable(
						[
							'CL/DC Modifier',
							'Spells'
						],
						[
							[
								'+2',
								'teleportation spells'
							],
							[
								'+1',
								'calling, darkness, and summoning spells'
							],
							[
								'-1',
								'creation and light spells'
							],
							[
								'-2',
								'water spells'
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
	racialFeats('andinar', [
		[
			'name' => 'Ender Agility',
			'desc' => '',
			'prereq' => 'Dex 15, BAB +7',
			'benefit' => 'You and your weapons pass in and out of the void while making attacks making it difficult to predict your movements and dodge your attacks. The first time each round that you make an attack against a creature that isn\'t flat-footed, they must make a successful Sense Motive check against a DC of 15 plus your level plus your Charisma modifier or else they are treated as being flat-footed against you until the start of your next turn.',
			'special' => false
		]
	]);
	require $startDir.'pageEnd.php';
?>