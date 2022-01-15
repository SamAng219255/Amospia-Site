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
		'Annort',
		'material',
		quick_array([
			'Annort is an alchemically engineered metal that opposes necromantic forces of undeath and can be used to overcome many of the resistances of undead. Annort weapons are treated as good, silver, and magic for the purposes of overcoming the damage reduction of undead creatures. Annort weapons also overcome half the damage reduction of undead that would be overcome if the weapon were piercing, slashing, or bludgeoning, as well as half the damage reduction that does not have a listed method to overcome it (DR /—).',
			'Annort weapons can also be used to better strike incorporeal undead. Non-magic annort weapons are treated as magic for the purpose of harming incorporeal undead and magic annort weapons are treated as having the ii/ghost touch/ii property for the purpose of harming incorporeal undead.',
			'Weapons made of annort are always considered masterwork, and the masterwork costs are included in the listed prices. Items without metal parts cannot be made from annort. An arrow could be made of annort, but a quarterstaff could not. Adding any magical enhancements to a annort weapon increases its price by 2,000 gp. This increase is applied the first time the item is enhanced, not once per ability added.',
			'Annort has 30 hit points per inch of thickness and hardness 10. The same as steel.',
			sTable(
				[
					'Type of Annort Item',
					'Item Price Modifier'
				],
				[
					[
						'Ammunition',
						'+20 gp per item'
					],
					[
						'Weapon',
						'+1,000 gp'
					],
					[
						'Other Items',
						'+500 gp/lb.'
					]
				],
				true,
				false
			)
		]),
		true
	);
	require $startDir.'pageEnd.php';
?>