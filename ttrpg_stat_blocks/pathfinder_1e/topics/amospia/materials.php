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
		'Arkonite',
		'material',
		quick_array([
			'Arkonite is a purple crystal infused with the power of light that is grown with the aid of the Arkon, an artifact hammer whose head appears to be made from arkonite that was gifted to the Narmen from Zovilla and has been passed down through the years.',
			'Arkonite weapons reinforce and weaponize the holiness of the wielder. Good aligned creatures wielding an arkonite weapon can make a single attack as a standard action that deals 5 times the weapon damage. This does not multiply damage that would not be multiplied on a critical hit or from static bonuses. On a critical hit, the damage is multiplied again.',
			'Weapons and armors fashioned from arkonite are always masterwork items. Arkonite has 30 hit points per inch of thickness and hardness 15.',
			'Arkonite weapons cannot be bought, rather arkonite weapons are generally given as awards to paladins who have performed great feats.'
		])
	);
	block(
		'Rune Inscribed Gold',
		'material',
		quick_array([
			'Narmen magic smiths possess the knowledge to draw great power for their enchantments from gold but in order to take advantage of this knowledge they have learned to forge gold while inscribing basic runes into its surface that reinforce its strength to be more similar to hardened steel and simultaneously make what would otherwise be a prohibitively heavy and unwieldy weapon easier to wield.',
			'Magic effects placed on rune inscribed gold are empowered. All variable numeric effects and static bonuses and penalties of the effects are increased by half, rounded up. Percentage effects are increased according to the following chart.',
			sTable(
				[
					'Original',
					'Adjusted'
				],
				[
					['10%', '15%'],
					['20%', '30%'],
					['30%', '40%'],
					['40%', '55%'],
					['50%', '65%'],
					['60%', '75%'],
					['70%', '85%'],
					['80%', '90%'],
					['90%', '95%']
				],
				true,
				false,
				false
			),
			'These effects apply to all magical effects on the item, including temporary spell effects, and also affect spells produced by effects on the item.',
			'Items without metal parts cannot be made from rune inscribed gold.',
			'Objects forged from rune inscribed gold have the same hardness and number of hit points and cost 10 times as much as those made from steel, plus an additional 1,500 gp. Items made from rune inscribed gold are always considered masterwork.'
		])
	);
	require $startDir.'pageEnd.php';
?>