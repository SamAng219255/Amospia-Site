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
		'Bleeding Bone',
		'Necromancy',
		'5th, see text',
		'Focus',
		14000,
		3,
		'This rod is made of an unknown smooth black stone and is shaped like a femur bone. When a creature picks it up, they can see crimson runes appear acrossed its surface that pulse with light in time with their heartbeat. These runes are normally invisible to other creatures. When the item is used to cast a spell, the wielder can choose to remove the material component. Doing so requires a blood cost. Paying the blood cost deals 1d6 points of damage to the caster and causes the runes to glow more brightly for 1 round during which time they can be seen by all nearby creatures. Costly material components can be removed but doing increases the blood cost dealing 1 point of Strength damage, plus a further point of damage for every full 250 gp of the component’s value. This causes the runes to grow even brighter and begin to drip the crimson energy.
		Spellcasters who do not have blood cannot use this ability, and those who are immune to Strength damage (such as undead spellcasters) cannot use this ability to create valuable material components. This ability cannot be used to create magic items or constructs.
		bb/Blood Sacrifice/bb:
		/mm/It is possible to extract a blood cost from other creatures but doing so is less efficient. In a ritual requiring 1 minute per level of the spell, the wielder can extract the blood cost from a number of willing or helpless creatures up to their level plus their casting stat. This deals 1d6 points of damage to each creature and 1 point of strength drain, plus a further point of drain for every full 100 gp of the component\'s value divided among the creatures as chosen by the wielder. After the ritual is complete, the ability takes effect or the spell is cast as normal without requiring any further material component cost.
		/mm/If any of the creatures takes a number of points of strength drain from this ability that is at least half their prior strength score, they must make fortitude save with a DC of 20 plus 1 for each point of strength drain taken beyond half of their prior score. If they fail this save they are instantly killed. This counts as a death effect.
		This rod can be upgraded to use its dark magic to raise and command undead without being limited on its wielder\'s ability to maintain control over them.
		The rod can be used to take control of undead creatures in a ritual that takes 1 round per hd of the undead and costs 1 strength damage per hd of the undead as a blood cost. When extracted from other creatures, this blood cost deals 1d6 points of damage and 1 point of strength drain per hd of the undead. Intelligent undead receive a will save to negate this effect. The DC for this Will save is equal to 10 + the rod\'s caster level + the rod\'s enhancement bonus. The rod can also create new undead that are already bound to it. These undead are created as per ii/animate dead/ii except that they are bound to the rod. Doing so imparts the same blood cost as taking control of existing undead. The rod can control any number of undead, so long as their total Hit Dice do not exceed 4 times it\'s caster level. When it is upgraded, it\'s caster level can be increased, multiplying the cost of the upgrade by the new caster level divided by 5.
		Additionally, an upgraded ii/bleeding bone/ii can be used to replace the material compoenent cost of creating a necrocraft with a blood cost.',
		false,
		'bb/Requirements/bb Craft Wondrous Item, ii/blood money/ii; bb/Cost/bb 7,000 gp
		bb/Upgrade/bb:
		bb/Requirements/bb Craft Wondrous Item, ii/animate dead/ii, ii/command undead/ii; bb/Cost/bb 25,000 gp'
	);
	require $startDir.'pageEnd.php';
?>