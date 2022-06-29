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
	classBlock(
		'Beast Knight',// name,
		'Beast knights or, as their known in the ancient tongue, Dizahud are members of an ancient order of knights whose origins are shrouded in mystery. What is known, however, is that their order has the unique power to wear the pelts and hides of great beasts they slay to gain their strength and take their forms. This power bares some unknown connection to lycanthropy though its origin is just as unknown as that of the order and may be closely related.',// desc,
		'Beast knights are masters of combat who are skilled at mixing advanced training and rigid study with the wild might of the beasts whose forms they take.',// role,
		'Any',// align,
		10,// hd,
		5,// startWealth,
		[
			'Acrobatics',
			'Climb',
			'Craft',
			'Fly',
			'Handle Animal',
			'Intimidate',
			'Knowledge (geography)',
			'Knowledge (nature)',
			'Perception',
			'Profession',
			'Ride',
			'Stealth',
			'Survival',
			'Swim'
		],// classSkills,
		2,// skillsPerLevel,
		1,// bab,
		[
			'fort' => 'good',
			'refl' => 'good',
			'will' => 'bad' 
		],// saves,
		[
			'Beast Skins, Might of the Beast',// 1st
			'Primal Speed',// 2nd
			'Bonus Feat, Uncanny Dodge',// 3rd
			'Beast Hide Transformation',// 4th
			'+2 Natural Armor, Steel Claws, Steel Hide',// 5th
			'Beast Shape II, Improved Uncanny Dodge',// 6th
			'Bonus Feat, +4 Str/Dex',// 7th
			'Beast Shape III',// 8th
			'+3 Natural Armor, Steel Hide',// 9th
			'Beast Shape IV, Steel Claws',// 10th
			'Bonus Feat, Hybrid Forms',// 11th
			'Draconic Skins',// 12th
			'+4 Natural Armor, Steel Hide',// 13th
			'Draconic Skins II',// 14th
			'Bonus Feat, +6 Str/Dex, Steel Claws',// 15th
			'Draconic Skins III',// 16th
			'+5 Natural Armor, Steel Hide',// 17th
			'Gargantuan/Fine Forms',// 18th
			'Bonus Feat, Timeless Body',// 19th
			'Kaiju Forms, Steel Claws' // 20th
		],// specials,
		false,// spells,
		false,// spellsSecondary,
		[
			'Weapon and Armor Proficiency' => [
				'A beast knight is proficient with all simple and martial weapons, light armor, medium armor, and shields (except tower shields).'
			],
			'Beast Skins (Ex)' => [
				'Beast Knights wear the pelts of creatures they have slain to gain their strength. ',
				'Beast knights can skin the pelt from an animal or magical beast with a successful Survival check with a DC equal to 15 plus the CR of the creature. Failing the check by 5 or more ruins the pelt. The beast knight may incorporate a pelt of their same size onto the surface any set of medium or heavy armor by spending 1 hour with them. A given set of armor can only have one incorporated pelt at a time. Switching pelts also takes 1 hour. A larger pelt can be cut down into a single smaller pelt for wearing the pelt of a creature larger than oneself, and smaller pelts may be sewn together, with 4 pelts of a given size being made into 1 pelt one step larger. Creatures that lack pelts can be used by attaching their feathers or skin to the armor instead.',
				'Beast knights start with the pelts of a medium or small creature that they helped slay.',
			],
			'Might of the Beast (Su)' => [
				'Starting at first level, a beast knight wearing a pelt of an animal or magical beast, they had a hand in slaying, receives a +2 bonus to either strength or dexterity and a +1 natural armor bonus. If they already had natural armor, their natural armor bonus instead increases by that amount.',
				'At 5th level, the natural armor bonus increases to +2.',
				'At 7th level, the bonus to strength or dexterity increases to +4.',
				'At 9th level, the natural armor bonus increases to +3.',
				'At 13th level, the natural armor bonus increases to +4.',
				'At 15th level, the bonus to strength or dexterity increases to +6.',
				'At 17th level, the natural armor bonus increases to +5.',
				'The beast knight must choose at first level if they receive a bonus to strength or dexterity. If they choose dexterity, they use dexterity in place strength on attack and damage rolls with any natural weapons gained from this class and they gain Weapon Finesse as a bonus feat.',
				'Beast knights\' powers possess some unknown link to lycanthropy, making them weak to silver. If the beast knight is hit with an attack from a silver* weapon, they lose the effects of Might of the Beast until the end of their next turn.',
				'* In this case, silver weapons refer to weapons made of silver or one whose material is treated as silver such as one made of mithral or that is treated with silversheen, silver blanche, or ii/ aa/aa_silver_oil|silver oil/aa /ii, but not other weapons that overcome DR silver.'
			],
			'Primal Speed (Ex)' => [
				'Beast knights train to mimic the speed of wild beasts in additional to their might. Starting at 2nd level, a beast knight\'s base speed is faster than the normal for their race by 10 feet. This benefit applies only when they are not carrying a heavy load. Apply this bonus before modifying the beast knight\'s speed because of any load carried or armor worn. This bonus stacks with any other bonuses to the beast knight\'s base speed.'
			],
			'Bous Feats' => [
				'At 3rd level, and every 4th level thereafter (7th, 11th, 15th, and 19th), a beast knight gains a bonus feat in addition to those gained from normal advancement. These bonus feats must be selected from those listed as Combat Feats or ones that have the wild shape class feature as a prerequisite. The beast may add their levels in beast knight to any levels in fighter they may have to qualify for feats. The beast knight must still meet any other prerequisites as normal.'
			],
			'Uncanny Dodge (Ex)' => [
				'At 3rd level, a beast knight gains the ability to react to danger before their senses would normally allow them to do so. They cannot be caught flat-footed, nor do they lose her Dexterity bonus to AC if immobilized. A beast knight with this ability can still lose their Dexterity bonus to AC if an opponent successfully uses the feint action against them.',
				'If a beast knight already has uncanny dodge from a different class, they automatically gain improved uncanny dodge (see below) instead.'
			],
			'Beat Hide Transformation (Su)' => [
				'Starting at 4th level, as a standard action, a beast knight can take the form of the animal whose pelt they wear as ii/beast shape I/ii except that it lasts until dismissed as another standard action and they gain DR 5/silver while transformed. Beast knights can only take the form of a pelt from a creature they had a hand in slaying.',
				'Starting at 6th level, they may take the form of the animal whose pelt they wear as ii/beast shape II/ii.',
				'Starting at 8th level, they may take the form of the animal or magical beast whose pelt they wear as ii/beast shape III/ii.',
				'Starting at 10th level, they may take the form of the animal or magical beast whose pelt they wear as ii/beast shape IV/ii.',
				'You are treated as having the wild shape class feature for the purpose of meeting the prerequisites for feats and can use your beast knight level in place of your druid level and your beast hide transformation ability in place of your wild shape ability for such feats.'
			],
			'Steel Claws (Su)' => [
				'Starting at 5th level, upon transforming using Beast Hide Transformation, the beast knight may choose one of their natural attacks to gain the properties and abilities of a manufactured melee weapon they are wielding. If the manufactured weapon deals more damage than the natural attack, they may use the damage from the manufactured weapon (using the original damage of the weapon using the wielder\'s normal size). If the manufactured weapon uses a different ability score (generally strength or dexterity) for attack or damage rolls, they must use the ability score used by manufactured weapon.',
				'Starting at 10th level, they may choose two of their natural weapons to gain the properties and abilities of their manufactured weapon. They may use the properties and abilities of different weapons but they must be wielding any weapons they use the properties and abilities of.',
				'Starting at 15th level, they may choose three of their natural weapons to gain the properties and abilities of their manufactured weapons.',
				'Starting at 20th level, they may choose any number of their natural weapons to gain the properties and abilities of their manufactured weapons.'
			],
			'Steel Hide (Su)' => [
				'Starting at 5th level, when transformed using Beast Hide Transformation, the beast knight retains the bonuses and other effects of their armor, as it invisibly incorporates itself into their hide. While incorporated into their hide, the armor check penalty is reduced by 1 (to a minimum of 0) and increases the maximim dexterity bonus allowed by 1. Every four levels thereafter (9th, 13th, and 17th), these bonuses increase by +1 each time, to a maximum –4 reduction of the armor check penalty and a +4 increase to to armor\'s maximum dexterity bonus.'
			],
			'Improved Uncanny Dodge (Ex)' => [
				'At 6th level and higher, a beast knight can no longer be flanked. This defense denies a rogue the ability to sneak attack the beast knight by flanking them, unless the attacker has at least four more rogue levels than the target has beast knight levels.',
				'If a character already has uncanny dodge (see above) from another class, the levels from the classes that grant uncanny dodge stack to determine the minimum rogue level required to flank the character.'
			],
			'Hybrid Forms' => [
				'Starting at 11th level, a beast knight is able to combine pelts, mixing and matching parts such as placing moose antlers on a bear\'s hide or bat wings on a big cat\'s hide. These hybrid hides work as normal but when transforming, the form taken by the beast knight is similarly hybridized. Granting abilities possessed by one form to another, potentially replacing existing ones. Abilities possessed by the hybrid form must come from the parts of creatures included in the hybrid hide. Abilities affected by size use the size of the hybrid form which must be the size of one of the creatures the hybrid hide is made from.',
				'Each hide used in this process must come from a creature the best knight has a hand in killing.'
			],
			'Draconic Skins' => [
				'Starting at 12th level, a beast knight can wear and gain the strength of dragons as well. Beast knights can skin the hide of dragons as well as they can those of animals and magical beasts. They also gain the effects of Might of the Beast while wearing a dragon\'s hide. They can also use Beast Hide Transformation to take the form of a dragon matching the one whose hide they wear. When doing so, the transformation is as ii/form of the dragon/ii or ii/form of the exotic dragon/ii, except that it can be used to take the form of any type of dragon, using similar rules as ii/form of the dragon/ii.',
				'Starting at 14th level, they may take the form of a dragon whose hide they wear as ii/form of the dragon II/ii or ii/form of the exotic dragon II/ii.',
				'Starting at 16th level, they may take the form of a dragon whose hide they wear as ii/form of the dragon III/ii or ii/form of the exotic dragon III/ii.'
			],
			'Gargantuan/Fine Forms' => [
				'Starting at 18th level, the beast knight may take the form of animals, dragons, and magical beasts of Gargantuan size and smaller.',
				'When taking the form of a animal or magical beast, if the form you assume has any of the following abilities, you gain the listed ability: burrow 90 feet, climb 120 feet, fly 150 feet (poor maneuverability), swim 150 feet, blindsense 60 feet, darkvision 120 feet, and tremorsense 120 feet.',
				'ii/Fine animal/ii: If the form you take is that of a Fine animal, you gain a +8 size bonus to your Dexterity, a -6 penalty to your Strength, and a +1 natural armor bonus.',
				'ii/Fine magical beast/ii: If the form you take is that of a Fine magical beast, you gain a -6 penalty to your Strength, a +16 size bonus to your Dexterity, and a +5 natural armor bonus.',
				'ii/Diminutive magical beast/ii: If the form you take is that of a Diminutive magical beast, you gain a -4 penalty to your Strength, a +12 size bonus to your Dexterity, and a +4 natural armor bonus.',
				'ii/Huge magical beast/ii: If the form you take is that of a Huge magical beast, you gain a +8 size bonus to your Strength, a -4 penalty on your Dexterity, a +4 size bonus to your Constitution, and a +8 natural armor bonus.',
				'ii/Gargantuan animal/ii: If the form you take is that of a Gargantuan animal, you gain a +8 size bonus to your Strength, a -6 penalty to your Dexterity, and a +8 natural armor bonus.',
				'ii/Gargantuan magical beast/ii: If the form you take is that of a Gargantuan magical beast, you gain a +10 size bonus to your Strength, a -6 penalty on your Dexterity, a +6 size bonus to your Constitution, and a +10 natural armor bonus.',
				'ii/Gargantuan dragon/ii: If the form you take is that of a Gargantuan chromatic or metallic dragon, you gain a +12 size bonus to Strength, a +10 size bonus to Constitution, a +10 natural armor bonus, fly 150 feet (poor), blindsense 60 feet, darkvision 120 feet, a breath weapon, damage reduction 15/magic, frightful presence, and immunity to one element. You also gain one bite (4d6), two claws (2d8), two wing attacks (2d6), one tail slap attack (2d8), a crush attack (2d8), and a tail sweep attack (2d6). You can use the breath weapon as often as you like, but you must wait 1d4 rounds between uses. All breath weapons deal 16d8 points of damage and allow a Reflex save for half damage. Line breath weapons increase to 120-foot lines and cones increase to 60-foot cones.',
				'Taking these forms is otherwise done as the highest level of the appropriate spell, granting any additional abilities granted by those spells.'
			],
			'Timeless Body' => [
				'After attaining 19th level, a beast knight no longer takes ability score penalties for aging and cannot be magically aged. They also lose any existing penalties they may have already incurred. Bonuses still accrue, the beast knight continues to visibly age, and the beast knight still dies of old age when their time is up.'
			],
			'Kaiju Forms' => [
				'At 20th level, the beast knight may take the form of animals, dragons, and magical beasts of any size, and, when taking a form they may change its size to any other size, taking it as though it were a form of the new size. Additionally, the beast knight receives regeneration 10 (silver) while transformed.',
				'When taking the form of a animal or magical beast, if the form you assume has any of the following abilities, you gain the listed ability: burrow 120 feet, climb 150 feet, fly 200 feet (clumsy maneuverability), swim 200 feet, blindsense 60 feet, darkvision 120 feet, and tremorsense 120 feet. If the animal or magical beast has immunity or resistance to any elements, you gain immunity to those elements. If the form you take is an animal or magical beast, you also gain a breath weapon. This weapon is a 120-foot line that deals 16d8 points of damage and allows a Reflex save for half damage. You may choose the damage type from acid, cold, elecricity, fire, and sonic when taking the form.',
				'ii/Colossal animal/ii: If the form you take is that of a Colossal animal, you gain a +10 size bonus to your Strength, a -8 penalty to your Dexterity, and a +10 natural armor bonus.',
				'ii/Colossal magical beast/ii: If the form you take is that of a Colossal magical beast, you gain a +12 size bonus to your Strength, a -8 penalty on your Dexterity, a +8 size bonus to your Constitution, and a +12 natural armor bonus.',
				'ii/Colossal dragon/ii: If the form you take is that of a Colossal chromatic or metallic dragon, you gain a +14 size bonus to Strength, a +12 size bonus to Constitution, a +12 natural armor bonus, fly 200 feet (clumsy), blindsense 60 feet, darkvision 120 feet, dragon senses, a breath weapon, damage reduction 20/epic, frightful presence, and immunity to one element. You also gain one bite (4d8), two claws (4d6), two wing attacks (2d8), one tail slap attack (4d6), a crush attack (4d8), and a tail sweep attack (2d8). You can use the breath weapon as often as you like, but you must wait 1d4 rounds between uses. All breath weapons deal 16d8 points of damage and allow a Reflex save for half damage. Line breath weapons increase to 140-foot lines and cones increase to 70-foot cones.',
				'Taking these forms is otherwise done as the highest level of the appropriate spell, granting any additional abilities granted by those spells.'
			] 
		]// features
	);
	require $startDir.'pageEnd.php';
?>