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
		'Curse Rod',
		'Necromancy',
		7,
		'Focus',
		28000,
		5,
		'This rod appears to be a cold iron spiked light flail that had the chain links fused together into a straight line extending from the end of the handle.
		Penalties and ability damage from spells cast using the ii/curse rod/ii become curse effects and cannot be dispelled or cured except with the aid of ii/remove curse/ii, ii/limited wish/ii, ii/wish/ii, or ii/miracle/ii. Affected spells also gain the curse descriptor.
		The wielder may also add the rod\'s enhancement bonus, if any, to to concentration checks made to cast spells while in combat or while grappled. They may also treat the enhancement bonus as being one and half its normal value, rounded up, when adding it to the save DCs of spells cast with the curse descriptor. If the rod has no enhancement bonus add +1 to the DCs of such spells instead.
		A ii/curse rod/ii can be wielded and enchanted as though it were a masterwork heavy mace. If the wielder is proficient in light flails, while they are holding the rod the chain links become unfused and the rod may be wielded as though it were a masterwork light flail instead.
		A ii/curse rod/ii may be upgraded to allow the wielder to make an attack and cast a spell with a range of touch as though they were making attacks with two-weapons with the following exceptions. The wielder rolls only one attack roll that takes the penalties as though it were the primary weapon. If they hit the target\'s AC both the weapon attack and the spell attack hit. If the attack roll hits the target\'s touch AC but not their regular AC, the spell hits but the weapon does not. The wielder must cast the spell defensively or provoke and attack of opportunity as normal when casting a spell in melee. Penalties to the secondary weapon apply instead to any concentration checks made as part of casting the spell and to the wielder\'s AC against any attacks of opportunity provoked by casting the spell.',
		false,
		'bb/Requirements/bb Craft Wondrous Item, ii/bestow curse/ii; bb/Cost/bb 14,000 gp
		bb/Upgrade/bb:
		bb/Requirements/bb Craft Wondrous Item; bb/Cost/bb 15,000 gp'
	);
	require $startDir.'pageEnd.php';
?>