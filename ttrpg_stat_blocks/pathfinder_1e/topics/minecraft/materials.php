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
		'Special Materials',
		'intro',
		[
			'Weapons and armor can be crafted using materials that have innate special properties. If you make a suit of armor or a weapon out of more than one special material, you get the benefit of only the most prevalent material. However, you can build a double weapon with each head made of a different special material.',
			'Each of the special materials described below has a definite game effect. Some creatures have damage reduction that makes them resistant to all but a special type of damage, such as that dealt by evil-aligned weapons or bludgeoning weapons. Others are vulnerable to weapons of a particular material. Characters may choose to carry several different types of weapons, depending upon the types of creatures they most commonly encounter.'
		],
		true
	);
	block(
		'Netherite',
		'material',
		quick_array([
			'Netherite originates from ancient debris found buried in the Nether. This debris contains scraps of some ancient alloy harder than any other known material. All that is known about this alloy is that it incorporates certain amounts of both gold and adamantine. Expert smiths can, with significant skill, effort, time, and heat amalgam additional gold into the alloy softening it considerably. Netherite is often stored in this state. From here it can be similarly worked into already shaped adamantine converting adamantine objects into netherite, albeit as a lower quality alloy than the original debris. Weapons fashioned from netherite improve the base metal\'s ability to bypass hardness, ignoring hardness less than 30. Netherite weapons count as adamantine for purposes such as overcoming DR. Armor made from netherite grants its wearer damage reduction 2/— if it\'s light armor, 3/— if it\'s medium armor and 4/— if it\'s heavy armor. Netherite also inherits qualities otherwise unique to piglin forged gold and one magical property with an equivalent enhancement bonus of +2 or less can be similarly excluded from the total equivalent enhancement bonus. Netherite is also highly resistant to heat, granting a circumstance bonus to saves against fire effects. This is a +1 bonus from light armor, a +2 from medium armor, and a +3 from heavy armor. Netherite is so costly that weapons and armor made from it are always of masterwork quality; the masterwork cost is included in the prices given below. Thus, netherite weapons and ammunition have a +1 enhancement bonus on attack rolls, and the armor check penalty of netherite armor is lessened by 1 compared to ordinary armor of its type. Items without metal parts cannot be made from netherite. An arrow could be made of netherite, but a quarterstaff could not.',
			'Weapons and armor normally made of steel that are made of netherite have two-thirds more hit points than normal. Netherite has 50 hit points per inch of thickness and hardness 30. Netherite is immune to fire.',
			'Weapons and armor made from adamantine can be converted into netherite by paying the difference in cost.',
			sTable(
				[
					'Type of Netherite Item',
					'Item Price Modifier'
				],
				[
					[
						'Ammunition',
						'+150 gp per item'
					],
					[
						'Light Armor',
						'+11,500 gp'
					],
					[
						'Medium Armor',
						'+16,500 gp'
					],
					[
						'Heavy Armor',
						'+21,600 gp'
					],
					[
						'Weapon',
						'+7,500 gp'
					]
				],
				true,
				false
			)
		])
	);
	block(
		'Nether Fungus Hyphae',
		'material',
		quick_array([
			'Nether fungus hyphae is a material that replaces wood in the Nether. It is collected by chopping down the massive fungus found there and carving it into shapes like wood.',
			'Nether fungus hyphae can be used in place of wood when making items and has the same hardness and hit points as regular wood but is immune to fire.',
			'Weapons and other items primarily made from wood cost twice as much when made from nether fungus hyphae.'
		])
	);
	block(
		'Piglin Forged Gold',
		'material',
		quick_array([
			'Over the millenia in their hostile home, piglins have discovered a method to work the only available metal, gold, into useful items. Piglin forged gold also takes to being enchanted better than most materials thus allowing additional enchantments to be added.',
			'When adding magical properties to a weapon, shield, or set of armor made from piglin forged gold, one property can be excluded from counting against the normal limits and price of the item. This property does not contribute to the total equivalent enhancement bonus. Instead, lapis lazuli worth the property\'s equivalent enhancement bonus squared times 1,000 gp for a weapon or 500 gp for a shield or set of armor must be expended as part of crafting which increases to price by the same amount. This cost is paid when the property is added, not every time the weapon gains properties. Each item can only have one property excluded this way at a time but you can switch which property is excluded by adjusting the price of the weapon without the lapis lazuli and expending more lapis lazuli for the new property to be excluded. This new price of lapis lazuli is added to the total price instead of the old value. The value of the initial lapis lazuli expended is lost.',
			'Piglin forged gold retains the weight of regular gold and any armor made from piglin forged gold is one category heavier than normal for purposes of movement and other limitations. Light armors are treated as medium, and medium armors are treated as heavy, heavy armors are still treated as heavy but a creature wearing heavy armor made from piglin forged gold has their speed reduced to half their base speed. This increase does not apply to proficiency in wearing the armor. Weapons made of piglin forged gold require a minimum strength score to wield. This score increases by 2 for every size category above medium and decreases by 2 for every size category below medium. Creatures attempting to wield a piglin forged gold weapon without a sufficient strength score take a -2 penalty on all attacks made with it. This penalty increases by -2 for every 2 less than the required score the creature has. Light weapons made of piglin forged gold require a strength score of at least 13, one-handed weapons require a strength score of at least 17, and two-handed weapons require a strength score of at least 21. Items without metal parts cannot be made from piglin forged gold.',
			'Weapons and armor normally made of steel that are made of piglin forged gold have half as many hit points as normal. Piglin forged gold has 10 hit points per inch of thickness, hardness 5, and the fragile quality. Masterwork and magic items made of piglin forged gold do not lose the fragile quality. Piglin forged gold costs 10 times the normal price for items of their type and weighs 50% more than typical weapons or armor of their type.'
		])
	);
	block(
		'Prismarine',
		'material',
		quick_array([
			'Prismarine is a cyan crystal that, with some skill, can be manufactured into tools in place of metal. Prismarine crystals grow in the depths of the sea and are infused with the power to cut through the waves they grow from. Prismarine weapons ignore all penalties to attack and damage from being underwater and prismarine throwing weapons and ammunition can be used underwater without issue. Prismarine armor allows a creature to ignore reductions to their movement speed from being in the water and, if the creature is in the water, reductions from wearing medium or heavy armor. In addition, attack rolls with prismarine weapons against creatures with the aquatic subtype or creatures vulnerable to water receive a +2 bonus.',
			'Weapons and armor normally made of steel that are made of prismarine have half as many hit points as normal. Prismarine has 15 hit points per inch of thickness and hardness 15.',
			sTable(
				[
					'Type of Prismarine Item',
					'Item Price Modifier'
				],
				[
					[
						'Ammunition',
						'+40 gp per item'
					],
					[
						'Light Armor',
						'+1,000 gp'
					],
					[
						'Medium Armor',
						'+3,000 gp'
					],
					[
						'Heavy Armor',
						'+7,000 gp'
					],
					[
						'Weapon',
						'+2,000 gp'
					]
				],
				true,
				false
			)
		])
	);
	require $startDir.'pageEnd.php';
?>