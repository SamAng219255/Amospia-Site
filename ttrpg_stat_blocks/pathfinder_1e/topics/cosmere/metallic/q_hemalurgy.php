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
	block(
		'Hemalurgy',
		'info',
		[],
		false,
		[
			[
				'title' => 'Stolen Spellcasting',
				'spaced' => true,
				'texts' => quick_array([
					'Many of the Quintenium Alloy spikes have the ability to steal innate spellcasting. This includes spell-like abilities, and spellcasting granted by means related to the caster\'s nature such as that possessed by a sorcerer, psychic, or oracle. In the latter case, the recipient either gains slots or is able to prepare spells as would be normal for a member of the victim\'s class. This ability can only be used to cast spells of the school specified and that were on the list of spells known by the victim and the recipient receives a number of slots or can prepare a number of spells of various levels matching that which the victim could. The recipient is treated as having a caster level equal to the victim\'s for determining the effects of the spells. When stealing spell-like abilities, the recipient can use them as often as the victim could have. Spell-like abilities that do not replicate a spell and that do not otherwise belong to a school of magic can be treated as though they were a part of the school that best matches the ability. Use existing spells as examples to help determine their school.'
				])
			]
		]
	);
	block(
		'Metals',
		'desc',
		[],
		false,
		[
			[
				'title' => 'Quintenium/Iron',
				'spaced' => true,
				'texts' => quick_array([
					'Steals the victim\'s innate ability to cast spells or spell-like abilities of the necromancy school.',
					'The victim loses access to the spells that were stolen.'
				])
			],
			[
				'title' => 'Quintenium/Steel',
				'spaced' => true,
				'texts' => quick_array([
					'Steals the victim\'s innate ability to cast spells or spell-like abilities of the evocation school.',
					'The victim loses access to the spells that were stolen.'
				])
			],
			[
				'title' => 'Quintenium/Tin',
				'spaced' => true,
				'texts' => quick_array([
					'Steals the victim\'s innate ability to cast spells or spell-like abilities of the abjuration school.',
					'The victim loses access to the spells that were stolen.'
				])
			],
			[
				'title' => 'Quintenium/Pewter',
				'spaced' => true,
				'texts' => quick_array([
					'Steals the victim\'s innate ability to cast spells or spell-like abilities of the transmutation school.',
					'The victim loses access to the spells that were stolen.'
				])
			],
			[
				'title' => 'Quintenium/Zinc',
				'spaced' => true,
				'texts' => quick_array([
					'Steals the victim\'s innate ability to cast spells or spell-like abilities of the enchantment school.',
					'The victim loses access to the spells that were stolen.'
				])
			],
			[
				'title' => 'Quintenium/Brass',
				'spaced' => true,
				'texts' => quick_array([
					'Steals the victim\'s innate ability to cast spells or spell-like abilities of the conjuration school.',
					'The victim loses access to the spells that were stolen.'
				])
			],
			[
				'title' => 'Quintenium/Copper',
				'spaced' => true,
				'texts' => quick_array([
					'Steals the victim\'s innate ability to cast spells or spell-like abilities of the illusion school.',
					'The victim loses access to the spells that were stolen.'
				])
			],
			[
				'title' => 'Quintenium/Bronze',
				'spaced' => true,
				'texts' => quick_array([
					'Steals the victim\'s innate ability to cast spells or spell-like abilities of the divination school.',
					'The victim loses access to the spells that were stolen.'
				])
			],
			[
				'title' => 'Quintenium/Cadmium',
				'spaced' => true,
				'texts' => quick_array([
					'Steals constitution, granting the recipient an untyped bonus to their constitution score equal to 5 plus the victim\'s constitution modifier.',
					'The victim\'s constitution becomes 1 and they automatically fail any fortitude saves. If there are any penalties for failling a save by a certain amount, they automatically fail by the greatest amount.'
				])
			],
			[
				'title' => 'Quintenium/Bendalloy',
				'spaced' => true,
				'texts' => quick_array([
					'Steals dexterity, granting the recipient an untyped bonus to their dexterity score equal to 5 plus the victim\'s dexterity modifier.',
					'The victim\'s dexterity becomes 1, they automatically fail any Reflex saves and Acrobatics checks, they are always considered flat-footed, and all terrain is treated as difficult terrain.'
				])
			],
			[
				'title' => 'Quintenium/Gold',
				'spaced' => true,
				'texts' => quick_array([
					'Steals wisdom, granting the recipient an untyped bonus to their wisdom score equal to 5 plus the victim\'s wisdom modifier.',
					'The victim\'s wisdom becomes 1 and they automatically fail any Will saves.'
				])
			],
			[
				'title' => 'Quintenium/Electrum',
				'spaced' => true,
				'texts' => quick_array([
					'Steals charisma, granting the recipient an untyped bonus to their charisma score equal to 5 plus the victim\'s charisma modifier.',
					'The victim\'s charisma becomes 1 and becomes unable speak developing psychological mutism.'
				])
			],
			[
				'title' => 'Quintenium/Chromium',
				'spaced' => true,
				'texts' => quick_array([
					'Steals the victim\'s natural armor, giving the recipient natural armor equal to the victim\'s natural armor. If the recipient already has natural armor, they receive a bonus to their natural armor equal to half of the victim\'s natural armor.',
					'The victim loses their natural armor.'
				])
			],
			[
				'title' => 'Quintenium/Nicrosil',
				'spaced' => true,
				'texts' => quick_array([
					'Steals the victim\'s methods of locomotion, giving the recipient all of the victim\'s move speeds of types not possessed by the recipient. For every type of move speed possessed by both the victim and recipient, if the victim\'s speed was faster than the recipient\'s, the recipient receives a bonus to that movement type equal to half the victim\'s speed of that type. If this speed was granted by a specific physical structure (such as by wings, additional legs, or special claws), the recipient grows this structure when the spike is first applied. If the spike is removed, the structure turns black, shrivels up, and falls off, leaving a scar where it was attached.',
					'The victim loses their means of locomotion. Legs, wings, and other structures primarily for movement turn black, shrivel up, and cannot be used. Their speed becomes 0.'
				])
			],
			[
				'title' => 'Quintenium/Aluminum',
				'spaced' => true,
				'texts' => quick_array([
					'Steals the victim\'s SR, giving the recipient SR equal to the victim\'s. If the recipient already has SR, they receive a bonus to their SR equal to 10 less than the victim\'s SR.',
					'The victim loses their SR.'
				])
			],
			[
				'title' => 'Quintenium/Duralumin',
				'spaced' => true,
				'texts' => quick_array([
					'Steals one supernatural ability chosen by the creator during creation, and gives it to the recipient. This ability behaves exactly like it did for the victim save for differences due to differing stats.',
					'The victim loses the stolen supernatural ability.'
				])
			],
			[
				'title' => 'Quintenium',
				'spaced' => true,
				'texts' => quick_array([
					'Grants the recipient 1 level in a class possessed by the victim chosen by the creator at the time of creation. This effect stacks.',
					'The victim loses 1 level in the class along with all asociated values.'
				])
			]
		]
	);
	require $startDir.'pageEnd.php';
?>