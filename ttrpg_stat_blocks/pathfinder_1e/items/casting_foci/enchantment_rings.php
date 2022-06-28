<?php 
	$startDir='';
	for($i=0; $i<10; $i++) {
		if(file_exists($startDir.'pageStart.php')) {
			require $startDir.'pageStart.php';
			break;
		}
		else {
			$startDir='../'.$startDir;
		}
	}
?>
<?php
	magicItemBlockAuto(
		'Enchanting Rings',
		'Enchantment',
		17,
		'Focus',
		'6,400 gp (+8), 19,600 gp (+14), 40,000 gp (+20)',
		'—',
		'ii/Enchanting rings/ii are composed of approximately a dozen rings connected by fine chains and exquisite filigree and are made of precious metals and inlaid with many expensive stones. These rings form a bulk that, while it does not prevent an additional magic ring to be worn on that hand, make finely wielding any implement impossible. Items weighing more than one pound can be carried but cannot be wielded though objects weighing one pound or less can be wielded but you are never considered proficient in them. When a spell of the enchantment school is cast using these rings, the stone set within twinkle nearly imperceptibly such that only creatures who are already aware of the spell and are watching the stones would notice. Creatures affected by spells of the enchantment school cast using the rings find them entrancing.
		These rings acts as a casting focus and, when used, wraps either the caster or the target (caster\'s choice) in lingering magic, granting a +2 competence bonus to charimsa based skill checks made against another creature for 1 minute per level of the caster. This bonus increases by +2 for each level of the spell cast. These rings are limited by the highest bonus they can grant. If using the rings would grant a higher bonus, it grants the maximum instead.
		Up to 12 magic rings can be incorporated into into a set of ii/enchanting rings/ii, however, each ring must first be modified costing 500 gp. After being modified, the wearer is able to gain the effects of one of the incorporated rings chosen by the wearer. These rings do not count against the normal two-ring limit but you only receive the benefit of only one of the incorporated rings at a time. Changing which ring from this set grants its effects is a move action.',
		false,
		'bb/Requirements/bb Craft Wondrous Item, ii/charm person/ii; bb/Cost/bb 3,200 gp (+8), 9,800 gp (+14), 20,000 gp (+20)
		bb/Upgrade/bb:
		bb/Requirements/bb Craft Wondrous Item, ii/trade items/ii; bb/Cost/bb 500 gp'
	);
	require $startDir.'pageEnd.php';
?>