<?php
	$startDir='';
	for($i=0; $i<5; $i++) {
		if(file_exists($startDir.'pageStart.php')) {
			require $startDir.'pageStart.php';
			break;
		}
		else {
			$startDir='../'.$startDir;
		}
	}
	impossibleStaffBlockAuto(
		'Avatar',	#name
		'Transmutation',	#school
		12,	#lvl
		[
			'The surface of this acacia staff is plated with platinum while its head is often adorned with a pair of angels, fiends, inevitables, proteans, psychopomps, or other outsiders though many other shapes are possible including skulls, lanterns, trees, animals, suns, moons, stars, or simple spheres though it is always fashioned from pure gold. It\'s length is often decorated with the holy symbols of one or more gods.',
			'By expending a charge from the staff, the following spell can be cast:'
		],	#staffDescPt1
		'Polymorph',	#subschool
		['see text'],	#descriptors
		[
			'F' => 1,
			'FNote' => 'a holy symbol of the chosen god worth 25,000 gp',
			'S' => 1,
			'V' => 1
		],	#components
		'1 full-round action ',	#time
		'personal',	#range
		'self',	#target
		false,	#effect
		false,	#area
		'1 hour (D)',	#duration
		'none',	#save
		'no',	#sr
		[
			'You channel the power of a god to become their avatar. You must have the same alignment of the god whose avatar you become. You do not have to be in good favor with the god who you become the avatar of but you must have a connection with the god, such as a merchant becoming the avatar of a god of trade.',
			'As the avatar of the god, you gain 450 bonus hit points, fast healing 20, a +20 sacred bonus on attack rolls and to AC, a +10 sacred bonus to saves, low-light vision, darkvision, see in darkness, blindsight 250\', tongues, and you automatically succeed at all skill checks except checks made against another intelligent creature not made to discover something such as using Perception to notice a hidden creature or Sense Motive to detect a lie. You gain all of the domain spells of all of the domains and subdomains of the god whose avatar you become as spell-like abilities you can use at-will. Such abilities with casting times longer than a round are reduced to a full-round action. You gain the effects of ii/invoke deity/ii for a domain possessed by the chosen deity and can change this choice as the spell except it does not reduce the spell\'s duration and clerics casting this spell to become an avatar of the deity they follow may select both of their chosen domains simultaneously.',
			'You can also use your divine power to attack another creature dealing 24d8 damage which results directly from divine power and is therefore not subject to resistance or immunity. If the god whose avatar you become has an elemental domain (air, earth, fire, or water) you can change this damage to the corresponding energy damage. Similarly, if the god whose avatar you become has the healing domain or either the undead subdomain or void domain you can change this damage to positive or negative energy damage respectively. Finally, if you have at least one level in grave knight and you become the avatar of a god of death, you can change this damage to grave damage. You can either add this damage as additional damage to another attack or spell or you can make a ranged touch attack against a creature within your sight that deals the damage.',
			'If the god whose avatar you become has an elemental domain (air, earth, fire, or water) you become immune to damage of the corresponding energy type. If the god whose avatar you become you take possesses the undead subdomain, you are healed by negative energy and harmed by positive energy and gain undead immunities. If you become the avatar of a god of constructs, you gain construct immunities. You do not need to eat, drink, breathe, or sleep in this form and are immune to hunger, thirst, suffocation, sleep, fatigue, and exhaustion effects as well as poison and disease including magical diseases.',
			'Your appearance changes to match the god whose form you take. Your size category does not change.',
			'Using the powers of the avatar of a god to perform an action contrary to their will will earn their wrath and will result in their mortal and outsider servants being sent to destroy you even after the spell ends.',
			'At the GM\'s discretion, you may gain additional abilities and statistical adjustments according to the god whose avatar you become. Examples include granting natural attacks, increasing your size for the avatar of a god of giants, or granting additional magical abilities themed to the god.',
			'This spell acquires the alignment traits matching the alignment of the god whose avatar you become.',
			'If using the mythic system and the caster expends one use of mythic power as part of casting, all spell-like abilities or spells granted by this form are treated as their mythic form with the highest possible augmentation if applicable and without requiring the expenditure of additional mythic power.'
		],	#spellDesc
		['Charging a ii/staff of avatar/ii requires expending 8 9th level spell slots.']	#staffDescPt2
	);
	require $startDir.'pageEnd.php';
?>