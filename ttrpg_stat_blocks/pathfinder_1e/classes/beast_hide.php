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
			'Draconic Skins',// 14th
			'Bonus Feat, +6 Str/Dex, Steel Claws',// 15th
			'Large and Tiny Forms',// 16th
			'+5 Natural Armor, Steel Hide',// 17th
			'Huge and Diminutive Forms',// 18th
			'Bonus Feat, Timeless Body',// 19th
			'Savage Strike, Steel Claws' // 20th
		],// specials,
		false,// spells,
		false,// spellsSecondary,
		[
			'Weapon and Armor Proficiency' => [
				'A beast knight is proficient with all simple and martial weapons, all armor (heavy, light, and medium), and shields (except tower shields).'
			],
			'Beast Skins (Ex)' => [
				'Beast Knights wear the pelts of creatures they have slain to gain their strength. ',
				'Beast knights can skin the pelt from an animal or magical beast with a successful Survival check with a DC equal to 15 plus the CR of the creature. Failing the check by 5 or more ruins the pelt. The beast knight may incorporate a pelt of their same size onto the surface any set of medium or heavy armor by spending 1 hour with them. A given set of armor can only have one incorporated pelt at a time. Switching pelts also takes 1 hour. A larger pelt can be cut down into a single smaller pelt for wearing the pelt of a creature larger than oneself, and smaller pelts may be sewn together, with 4 pelts of a given size being made into 1 pelt one step larger. Creatures that lack pelts can be used by attaching their feathers or skin to the armor instead.',
				'Beast knights start with the pelt of a medium or small creature whose CR is no higher than their level that they helped slay.',
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
			'Beast Hide Transformation (Su)' => [
				'Starting at 4th level, as a standard action, a beast knight can take the form of the animal whose pelt they wear as ii/beast shape I/ii except that it lasts until dismissed as another standard action and they gain DR 5/silver while transformed. Beast knights can only take the form of a pelt from a creature they had a hand in slaying.',
				'Starting at 6th level, they may take the form of the animal whose pelt they wear as ii/beast shape II/ii.',
				'Starting at 8th level, they may take the form of the animal or magical beast whose pelt they wear as ii/beast shape III/ii.',
				'Starting at 10th level, they may take the form of the animal or magical beast whose pelt they wear as ii/beast shape IV/ii.',
				'Regardless of which spell this transformation functions as, the beast knight may only take small and medium forms. If the creature whose hide they wear is small sized or smaller, their form is small sized and their reach is increased to be at least 5 feet. If the hide they wear is medium sized or larger, the form they take is medium sized and their reach is reduced by 5 feet for every step above medium the creature normally is, to a minimum of 5 feet. Any natural attacks or other size dependant abilities they gain are likewise modified to their new size.',
				'You are treated as having the wild shape class feature for the purpose of meeting the prerequisites for feats and can use your beast knight level in place of your druid level and your beast hide transformation ability in place of your wild shape ability for such feats.'
			],
			'Steel Claws (Su)' => [
				'Starting at 5th level, upon transforming using Beast Hide Transformation, the beast knight may choose one of their natural attacks to gain the properties and abilities of a manufactured melee weapon they are wielding. If the manufactured weapon deals more damage than the natural attack, they may use the damage from the manufactured weapon (using the original damage of the weapon using the wielder\'s normal size). If the manufactured weapon uses a different ability score (generally strength or dexterity) for attack or damage rolls, they must use the ability score used by manufactured weapon.',
				'When making a full attack action using only your natural attacks, you may make an additional attack with one of your natural weapons for each additional attack you would gain from a high base attack bonus. These additional attacks take a cumulative -5 penalty for each additional attack in addition to the penalty for making an attack with a secondary weapon if using one.',
				'Starting at 10th level, they may choose two of their natural weapons to gain the properties and abilities of their manufactured weapon. They may use the properties and abilities of different weapons but they must be wielding any weapons they use the properties and abilities of.',
				'Starting at 15th level, they may choose three of their natural weapons to gain the properties and abilities of their manufactured weapons.',
				'Starting at 20th level, they may choose four of their natural weapons to gain the properties and abilities of their manufactured weapons.'
			],
			'Steel Hide (Su)' => [
				'Starting at 5th level, when transformed using Beast Hide Transformation, the beast knight retains the bonuses and other effects of their armor, as it invisibly incorporates itself into their hide. While incorporated into their hide, the armor check penalty is reduced by 1 (to a minimum of 0) and increases the maximim dexterity bonus allowed by 1. Every four levels thereafter (9th, 13th, and 17th), these bonuses increase by +1 each time, to a maximum –4 reduction of the armor check penalty and a +4 increase to to armor\'s maximum dexterity bonus.'
			],
			'Improved Uncanny Dodge (Ex)' => [
				'At 6th level and higher, a beast knight can no longer be flanked. This defense denies a rogue the ability to sneak attack the beast knight by flanking them, unless the attacker has at least four more rogue levels than the target has beast knight levels.',
				'If a character already has uncanny dodge (see above) from another class, the levels from the classes that grant uncanny dodge stack to determine the minimum rogue level required to flank the character.'
			],
			'Hybrid Forms' => [
				'Starting at 11th level, a beast knight is able to combine pelts, mixing and matching parts such as placing moose antlers on a bear\'s head or bat wings in place of a big cat\'s forelimbs. These hybrid hides work as normal but when transforming, the form taken by the beast knight is similarly hybridized. Granting abilities possessed by one form to another, potentially replacing existing ones. Abilities possessed by the hybrid form must come from the parts of creatures included in the hybrid hide. Abilities affected by size use the size of the hybrid form which must be the size of one of the creatures the hybrid hide is made from.',
				'Each hide used in this process must come from a creature the beast knight had a hand in killing.'
			],
			'Draconic Skins' => [
				'Starting at 12th level, a beast knight can wear and gain the strength of dragons as well. The beast knight can skin the hide of dragons as well as they can those of animals and magical beasts. They also gain the effects of Might of the Beast while wearing a dragon\'s hide. They can also use Beast Hide Transformation to take the form of a dragon matching the one whose hide they wear. When taking the form of dragons, they do so as ii/beast shape IV/ii like taking the form of a magical beast of the same size except they take the form of a dragon.',
				'Starting at 14th level, when they take the form of a true dragon, they can do so as ii/form of the dragon I/ii or ii/form of the exotic dragon I/ii instead.'
			],
			'Large and Tiny Forms' => [
				'Starting at 16th level, when taking forms via Beast Hide Transformation, you can take the form of Large and Tiny sized creatures. If the creature whose hide they wear is Tiny sized or smaller, their form is Tiny sized. If the hide they wear is Large sized or larger, the form they take is Large sized and their reach is reduced by 5 feet for every step above Large the creature normally is, to a minimum of 5 feet. Any natural attacks or other size dependant abilities they gain are likewise modified to their new size.',
				'When taking the form of Large sized true dragon, they do so as ii/form of the dragon II/ii or ii/form of the exotic dragon II/ii instead.'
			],
			'Huge and Diminutive Forms' => [
				'Starting at 18th level, when taking forms via Beast Hide Transformation, you can take the form of Huge and Diminutive sized creatures. If the creature whose hide they wear is Diminutive sized or smaller, their form is Diminutive sized. If the hide they wear is Huge sized or larger, the form they take is Huge sized and their reach is reduced by 5 feet for every step above Huge the creature normally is, to a minimum of 10 feet. Any natural attacks or other size dependant abilities they gain are likewise modified to their new size.',
				'When taking the form of Huge sized true dragon, they do so as ii/form of the dragon III/ii or ii/form of the exotic dragon III/ii instead.'
			],
			'Timeless Body' => [
				'After attaining 19th level, a beast knight no longer takes ability score penalties for aging and cannot be magically aged. They also lose any existing penalties they may have already incurred. Bonuses still accrue, the beast knight continues to visibly age, and the beast knight still dies of old age when their time is up.'
			],
			'Savage Strike (Ex)' => [
				'Upon reaching 20th level, the beast knight\'s savage might and comabt skills peak, allowing them to deliver particularly devastating blows. Any attacks made with their natural weapons while transformed automatically confirm all critical threats and have their damage multiplier increased by 1 (×2 becomes ×3, for example).'
			] 
		]// features
	);
	require $startDir.'pageEnd.php';
?>