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
	block(
		'Beast Colossus',
		'archetype',
		quick_array([
			[
				'text' => 'bb/Weapon and Armor Proficiency/bb: A beast colossus is proficient with all simple and martial weapons, light armor, medium armor, and shields (except tower shields). This ability alters Weapon and Armor Proficiency.',
				'spacing' => 0b1001
			],
			[
				'text' => 'bb/Natural Size/bb: Starting at 4th level, when taking the form of a creature using beast hide transformation, the form is always the closest size to the original creature allowed by the spell this transformation functions as. Small sized forms have a minimum reach of 5 feet. Forms larger than the maximum size allowed have their reach reduced by 5 feet for every step their size is reduced, to a minimum of 5 feet for medium or large size and 10 feet for huge size. Any natural attacks or other size dependant abilities they gain are likewise modified to their new size. This ability alters Beast Hide Transformation.',
				'spacing' => 0b1001
			],
			[
				'text' => 'bb/Enlarged Claws/bb: Starting at 5th level, when granting the properties of a manufactured weapon they are wielding to a natural attack, if the manufactured weapon deals more damage than the natural attack: They may use the damage from the manufactured weapon, using the damage of the weapon at their new size, if their new size is medium size or larger, or the damage of weapon at small size, if their new size is small sized or smaller. They do receive the ability to make additional attacks with their natural weapons when they would gain additional attacks from a high base attack bonus. This ability alters Steel Claws.',
				'spacing' => 0b1001
			],
			[
				'text' => 'bb/Greater Draconic Skins (Su)/bb: Starting at 12th level, a beast knight can wear and gain the strength of dragons as well. The beast knight can skin the hide of dragons as well as they can those of animals and magical beasts. They also gain the effects of Might of the Beast while wearing a dragon\'s hide. They can also use Beast Hide Transformation to take the form of a dragon matching the one whose hide they wear. When taking the form of dragons, they do so as beast shape IV like taking the form of a magical beast of the same size except they take the form of a dragon. When they take the form of a true dragon, they can do so as ii/form of the dragon I/ii or ii/form of the exotic dragon I/ii instead',
				'spacing' => 0b1001
			],
			'Starting at 14th level, the beast colossus may take the form of a true dragon whose hide they wear as ii/form of the dragon II/ii or ii/form of the exotic dragon II/ii and may take the form of other Tiny or Large dragons as ii/beast shape IV/ii as taking the form of a magical beast of the same size.',
			'Starting at 16th level, they may take the form of a true dragon whose hide they wear as ii/form of the dragon III/ii or ii/form of the exotic dragon III/ii and may take the form of other Diminutive or Huge dragons as ii/beast shape IV/ii with the following effects.',
			'/mm/ ii/Diminutive dragon/ii: If the form you take is that of a Diminutive non-true dragon, you gain a -4 penalty to your Strength, a +12 size bonus to your Dexterity, and a +4 natural armor bonus.',
			'/mm/ ii/Huge dragon/ii: If the form you take is that of a Huge non-true dragon, you gain a +8 size bonus to your Strength, a -4 penalty on your Dexterity, a +4 size bonus to your Constitution, and a +8 natural armor bonus.',
			'This ability replaces Draconic Skins.',
			[
				'text' => 'bb/Gargantuan/Fine Forms/bb: Starting at 18th level, the beast knight may take the form of animals, dragons, and magical beasts of Gargantuan size and smaller, and, when they take a form, they are able to change its size to any other size they are able to transform to.',
				'spacing' => 0b1001
			],
			'When taking the form of a animal or magical beast, if the form you assume has any of the following abilities, you gain the listed ability: burrow 90 feet, climb 120 feet, fly 150 feet (poor maneuverability), swim 150 feet, blindsense 60 feet, darkvision 120 feet, and tremorsense 120 feet.',
			'/mm/ ii/Fine animal/ii: If the form you take is that of a Fine animal, you gain a +8 size bonus to your Dexterity, a -6 penalty to your Strength, and a +1 natural armor bonus.',
			'/mm/ ii/Fine magical beast or non-true dragon/ii: If the form you take is that of a Fine magical beast or non-true dragon, you gain a -6 penalty to your Strength, a +16 size bonus to your Dexterity, and a +5 natural armor bonus.',
			'/mm/ ii/Diminutive magical beast or non-true dragon/ii: If the form you take is that of a Diminutive magical beast or non-true dragon, you gain a -4 penalty to your Strength, a +12 size bonus to your Dexterity, and a +4 natural armor bonus.',
			'/mm/ ii/Huge magical beast or non-true dragon/ii: If the form you take is that of a Huge magical beast or non-true dragon, you gain a +8 size bonus to your Strength, a -4 penalty on your Dexterity, a +4 size bonus to your Constitution, and a +8 natural armor bonus.',
			'/mm/ ii/Gargantuan animal/ii: If the form you take is that of a Gargantuan animal, you gain a +8 size bonus to your Strength, a -6 penalty to your Dexterity, and a +8 natural armor bonus.',
			'/mm/ ii/Gargantuan magical beast or non-true dragon/ii: If the form you take is that of a Gargantuan magical beast or non-true dragon, you gain a +10 size bonus to your Strength, a -6 penalty on your Dexterity, a +6 size bonus to your Constitution, and a +10 natural armor bonus.',
			'/mm/ ii/Gargantuan dragon/ii: If the form you take is that of a Gargantuan true dragon, you gain a +12 size bonus to Strength, a +10 size bonus to Constitution, a +10 natural armor bonus, fly 150 feet (poor), blindsense 60 feet, darkvision 120 feet, a breath weapon, damage reduction 15/magic, frightful presence, and immunity to one element. You also gain one bite (4d6), two claws (2d8), two wing attacks (2d6), one tail slap attack (2d8), a crush attack (2d8), and a tail sweep attack (2d6). You can use the breath weapon as often as you like, but you must wait 1d4 rounds between uses. All breath weapons deal 16d8 points of damage and allow a Reflex save for half damage. Line breath weapons increase to 120-foot lines and cones increase to 60-foot cones.',
			'Taking these forms is otherwise done as the highest level of the appropriate spell, granting any additional abilities granted by those spells. This ability replaces Large and Tiny Forms and Huge and Diminutive Forms.',
			[
				'text' => 'bb/Kaiju Forms/bb: Upon reaching 20th level, the beast knight may take the form of animals, dragons, and magical beasts of any size. Additionally, the beast knight receives regeneration 10 (silver) while transformed.',
				'spacing' => 0b1001
			],
			'When taking the form of an animal, magical beast, or non-true dragon, if the form you assume has any of the following abilities, you gain the listed ability: burrow 120 feet, climb 150 feet, fly 200 feet (clumsy maneuverability), swim 200 feet, blindsense 60 feet, darkvision 120 feet, and tremorsense 120 feet. If the animal or magical beast has immunity or resistance to any elements, you gain immunity to those elements. If the form you take is an animal or magical beast, you also gain a breath weapon, in addittion to any possessed by the creature. This weapon is a 120-foot line that deals 16d8 points of damage and allows a Reflex save for half damage. You may choose the damage type from acid, cold, elecricity, fire, and sonic when taking the form.',
			'/mm/ ii/Colossal animal/ii: If the form you take is that of a Colossal animal, you gain a +16 size bonus to your Strength, a -8 penalty to your Dexterity, and a +16 natural armor bonus.',
			'/mm/ ii/Colossal magical beast or non-true dragon/ii: If the form you take is that of a Colossal magical beast or non-true dragon, you gain a +20 size bonus to your Strength, a -8 penalty on your Dexterity, a +10 size bonus to your Constitution, and a +16 natural armor bonus.',
			'/mm/ ii/Colossal dragon/ii: If the form you take is that of a Colossal true dragon, you gain a +22 size bonus to Strength, a +16 size bonus to Constitution, a +16 natural armor bonus, fly 200 feet (clumsy), blindsense 60 feet, darkvision 120 feet, dragon senses, a breath weapon, damage reduction 20/epic, frightful presence, and immunity to one element. You also gain one bite (4d8), two claws (4d6), two wing attacks (2d8), one tail slap attack (4d6), a crush attack (4d8), and a tail sweep attack (2d8). You can use the breath weapon as often as you like, but you must wait 1d4 rounds between uses. All breath weapons deal 16d8 points of damage and allow a Reflex save for half damage. Line breath weapons increase to 140-foot lines and cones increase to 70-foot cones.',
			'Taking these forms is otherwise done as the highest level of the appropriate spell, granting any additional abilities granted by those spells. This ability replaces Savage Strike.'
		]),
		true
	);
	require $startDir.'pageEnd.php';
?>