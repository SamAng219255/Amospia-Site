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
		"Enchanting Rings",
		"Enchantment",
		9,
		"Focus",
		"(+2) 22,500 gp, (+4) 45,000 gp, (+6) 67,500 gp",
		"—",
		"ii/Enchanting rings/ii are composed of approximately a dozen rings connected by fine chains and metal rods and are made of precious metals and inlaid with many expensive stones. These rings form a bulk that, while it does not prevent an additional magic ring to be worn on that hand, make finely wielding any implement impossible. Items weighing more than one pound can be carried but cannot be wielded though objects weighing one pound or less can be wielded but you are never considered proficient in them. When a spell of the enchantment school is cast using these rings the stone set within twinkle nearly imperceptibly such that only creatures who are already aware of the spell and are watching the stones would notice. Creatures affected by spells of the enchantment school cast using the rings find them entrancing. These rings acts as a casting focus and grants the caster a bonus to their caster level for enchantment spells cast.
		Up to 12 magic rings can be incorporated into into a set of ii/enchanting rings/ii, however, they must first be modified costing 500 gp. After being modified, the wearer is able to gain the effects of one of the incorporated rings chosen by the wearer. This does not count against the two-ring limit. Changing which ring grants its effects is a move action.",
		false,
		"bb/Requirements/bb Craft Wondrous Item; bb/Cost/bb (+2) 11,250 gp, (+4) 22,500 gp, (+6) 33,750 gp
		bb/Upgrade/bb:
		bb/Requirements/bb Craft Wondrous Item, ii/trade items/ii; bb/Cost/bb 500 gp"
	);
	require $startDir.'pageEnd.php';
?>