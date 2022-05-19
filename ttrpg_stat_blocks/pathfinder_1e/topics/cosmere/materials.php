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
		'Special Materials',
		'intro',
		[
			'Weapons and armor can be crafted using materials that have innate special properties. If you make a suit of armor or a weapon out of more than one special material, you get the benefit of only the most prevalent material. However, you can build a double weapon with each head made of a different special material.',
			'Each of the special materials described below has a definite game effect. Some creatures have damage reduction that makes them resistant to all but a special type of damage, such as that dealt by evil-aligned weapons or bludgeoning weapons. Others are vulnerable to weapons of a particular material. Characters may choose to carry several different types of weapons, depending upon the types of creatures they most commonly encounter.'
		],
		true
	);
	block(
		'Aluminum Alloy',
		'material',
		quick_array([
			'Aluminum is immune to applications of investiture and, despite its cost, is occasionally used to counteract and protect from magical effects. Pure aluminum is far to soft to make into items so aluminum alloys are nearly always used instead. Pure aluminum is immune to magic while the more common aluminum alloys possess SR 30.',
			'Items without metal parts cannot be made from aluminum alloy. An arrow could be made of aluminum alloy, but a quarterstaff could not. A double weapon with one aluminum alloy half costs 50% more than normal. Weapons can be made of aluminum alloy but it is too soft to make armor out of.',
			'Weapons normally made of steel that are made of aluminum alloy have half as many hit points as normal and the fragile quality. Aluminum alloy has 15 hit points per inch of thickness and hardness 8.',
			sTable(
				[
					'Type of Aluminum Item',
					'Item Price Modifier'
				],
				[
					[
						'Ammunition',
						'+100 gp per item'
					],
					[
						'Light Weapon',
						'+1,000 gp'
					],
					[
						'One-Handed Weapon',
						'+2,500 gp'
					],
					[
						'Two-Handed Weapon',
						'+5,000 gp'
					],
					[
						'Other Items',
						'+500 gp/lb.'
					]
				],
				true,
				false,
				false
			)
		]),
		true
	);
	require $startDir.'pageEnd.php';
?>