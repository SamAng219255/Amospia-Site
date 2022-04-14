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
	magicItemBlockAuto(
		'Ring of Instant Armament',
		'Conjuration',
		20,
		'Ring',
		'72,000 gp / 0x10E0 I',
		'—',
		'This ring was invented by several Narman Scholar-Knights that often found a need to quickly arm themselves. Once per day on command, this ring equips its wearer with a set of armor, a shield, and a weapon, all enhanced with magic and constructed from solid force. This grants a +9 armor bonus (including a +5 enhancement) and a +9 shield bonus (including a +5 enhancement) to AC. It also grants access to a +5 one-handed magic weapon of the wearer\'s choosing that is appropriately sized for them. The wearer is always considered proficient with the armor, shield, and weapon. As they are made out of force, incorporeal creatures cannot bypass the AC bonuses and take full damage from the weapon. Additional, any magic missile, or similar, spells directed at the wearer are negated. The wearer can opt to forgo the shield, losing the shield bonus to AC, but allowing them to choose to summon a two-handed weapon in place of the one-handed weapon.
		None of the summoned objects can be transferred to another creature. They last for 20 hours or until dismissed by the wearer.',
		false,
		'bb/Requirements/bb Craft Wondrous Item, ii/instant weapon/ii, ii/mage armor/ii, ii/magic weapon/ii, ii/shield/ii; bb/Cost/bb 36,000 gp / 0x870 I'// Construction
	);
	require $startDir.'pageEnd.php';
?>