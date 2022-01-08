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
		"Blessed Holy Symbol",
		"Universal",
		1,
		"Focus",
		1400,
		"—",
		"This holy symbol has been specifically blessed by the clergy of the specific deity to which it is a symbol of, and grants believers additional favor.
		Followers of the god associated with the holy symbol may reroll one attack roll, combat maneuver check, or skill check before the result of the roll or check is known each day. They must take the result of the reroll, even if it’s worse than the original roll. Followers may use this ability one extra time each day for each level they possess in a divine spell casting class devoted to that god.
		A ii/blessed holy symbol/ii can be upgraded to grant the follower an additional use of a prepared spell.
		When the item is upgraded, the crafter must choose a caster level to create the holy symbol at. This can be increased later like adding a new ability.
		If the wielder of an upgraded ii/blessed holy symbol/ii is capable of casting divine spells in a class devoted to the god associated with the holy symbol, once per day on command, the holy symbol enables the possessor to recall any one spell that they had prepared and then cast that day. The spell is then prepared again, just as if it had not been cast. The spell can be any level up to the maximum spell level of the holy symbol which is half the caster level rounded up.
		The cost of upgrading a ii/blessed holy symbol/ii is (the caster level plus 1) squared, times 100 gp.",
		false,
		"bb/Requirements/bb Craft Wondrous Item, ii/fallback strategy/ii; bb/Cost/bb 700 gp
		bb/Upgrade/bb:
		bb/Requirements/bb Craft Wondrous Item; bb/Special/bb creator must be able to cast spells of the highest spell level that can be recalled.; bb/Cost/bb see text"
	);
	require $startDir.'pageEnd.php';
?>