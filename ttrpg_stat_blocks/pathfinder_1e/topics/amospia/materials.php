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
			'Arkonite is a purple crystal infused with the power of light that is grown with the aid of the Arkon, an artifact hammer whose head appears to made from arkonite that was gifted to the Narmen from Zovilla and has been passed down through the years.',
			'Properly enchanted arkonite weapons can up to deal 10 times the normal damage for the weapon. This multiplies the number of dice rolled by up to 10. This multiplication does not effect any other values and the result is doubled or tripled as normal on a successful critical attack. This increase comes at a cost of speed when swinging. When wielding an arkonite weapon, the wielder does not receive additional attacks as part of a full attack action from a high base attack bonus.',
			'Only bludgeoning weapons and axes can be made from arknonite.',
			'Weapons and armors fashioned from arkonite are always masterwork items. Arkonite has 30 hit points per inch of thickness and hardness 15.',
			'Arkonite weapons cannot be bought, rather arkonite weapons are generally given as awards to paladins who have performed great feats.'
		])
	);
	block(
		'Rune Inscribed Gold',
		'material',
		quick_array([
			'Narmen magic smiths possess the knowledge to draw great power for their enchantments from gold but in order to take advantage of this knowledge they have learned to forge gold while incribing basic runes into its surface that reinforce its strength to be more similar to hardened steel and simultaneously make what would otherwise be a prohibitively heavy and unwiedly weapon easier to wield.',
			'Runic enchantments placed on rune inscribed gold are empowered. All variable numeric effects and static bonuses and penalties of the enchantments are increased by half, rounded up. Percentage effects are increased by half the distance to 100%. (i.e. 50% would increase to 75%, 30% would increase to 65%, and 80% would increase to 90%) These effects apply to all effects created by runic enchantments, including spell effects.',
			'Items without metal parts cannot be made from rune inscribed gold.',
			'Object forged from rune inscribed gold has the same hardness and number of hit points and costs 10 times as much as those made from steel plus an additional 1,500 gp. Items made from rune inscribed gold are always considered masterwork.'
		])
	);
	require $startDir.'pageEnd.php';
?>