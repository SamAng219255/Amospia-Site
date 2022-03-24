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
			'Netherite origniates from ancient debris found burried in the Nether. This debris contains scraps od some ancient alloy harder than any other known material. All that is known about this alloy is that it incorporates certain amounts of both gold and adamantine. Expert smiths can, with significant skill, effort, time, and heat amalgam additional gold into the alloy softening it considerably. Netherite is often stored in this state. From here it can be similarly worked into already shaped adamantine converting adamantine objects into netherite, albeit as a lower quality alloy than the original debris. Weapons fashioned from netherite improve the base metal\'s ability to bypass hardness, ignoring the first 30 hardness. Netherite weapons count as adamantine for purposes such as overcoming DR. Armor made from netherite grants its wearer damage reduction 2/— if it\'s light armor, 4/— if it\'s medium armor and 6/— if it\'s heavy armor. Netherite also inherits qualities otherwise unique to piglin forged gold. The cost of adding magical properties to a netherite item is reduced to 3/4 the normal cost, netherite items can be enchanted with a +6 enhancement bonus, and can support up to a +12 equivalent enhancement bonus. This decrease in cost does not reduce the time required. Netherite is also highly resistant to heat granting a bonus to saves against fire effects. This is a +2 bonus from light armor, a +4 from medium armor, and a +6 from heavy armor. Netherite is so costly that weapons and armor made from it are always of masterwork quality; the masterwork cost is included in the prices given below. Thus, netherite weapons and ammunition have a +1 enhancement bonus on attack rolls, and the armor check penalty of netherite armor is lessened by 1 compared to ordinary armor of its type. Items without metal parts cannot be made from netherite. An arrow could be made of netherite, but a quarterstaff could not.',
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
						'+100 gp per item'
					],
					[
						'Light Armor',
						'+9,000 gp'
					],
					[
						'Medium Armor',
						'+17,500 gp'
					],
					[
						'Heavy Armor',
						'+37,500 gp'
					],
					[
						'Weapon',
						'+5,000 gp'
					]
				],
				true,
				false
			)
		])
	);
	block(
		'Piglin Forged Gold',
		'material',
		quick_array([
			'Over the millenia in their hostile home, piglins have discovered a method to work the only available metal, gold, into useful items. Piglin forged gold has the strange property of taking to be enchanted far easier than other materials. Any armor or weapons fashioned from piglin forged gold have the cost to add magical properties reduced by half, can support enhancement bonuses up to +7, and can support properties with a total equivalent enhancment bonus of up to +15. Piglin forged gold is always of masterwork quality; the masterwork cost is included in the given price. Thus, piglin forged gold weapons have a +1 enhancement bonus on attack rolls, and the armor check penalty of piglin forged gold armor is lessened by 1 compared to ordinary armor of its type.',
			'Piglin forged gold retains the weight of regular gold and any armor made from piglin forged gold are one category heavier than normal for purposes of movement and other limitations. Light armors are treated as medium, and medium armors are treated as heavy, heavy armors are still treated as heavy but a creature wearing heavy armor made from piglin forged gold have their speed reduced by an additional 5 feet. This increase does not apply to proficiency in wearing the armor. Weapons made of piglin forged gold require a minimum strength score to wield. This score increases by 2 for every size category above medium and decreases by 2 for every size category below medium. Creatures attempting to wield a piglin forged gold weapon without a sufficient strength score take a -2 penalty on all attacks made with it. This penalty increases by -2 for every 2 less than the required score the creature has. Light weapons made of piglin forged gold require a strength score of at least 13, one-handed weapons require a strength score of at least 17, and two-handed weapons require a strength score of at least 21. Items without metal parts cannot be made from piglin forged gold.',
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