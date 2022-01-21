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
		"Radiant Lantern",
		"Evocation",
		15,
		"Focus",
		37550,
		3,
		"This lantern is made of seemingly delicate metal wire and crystals and contains a ii/continual flame/ii that burns a brilliant white.
		Cure spells, and their mass versions, cast with this lantern are cast as the the version one level higher. (light to moderate, moderate to serious, and serious to critical) Additionally the lantern augments the casting of the following spells as so. ii/Cure critical/ii becomes ii/breath of life/ii, ii/breath of life/ii is improved such that it can heal creatures that died in the past minuteb and ii/cure critical, mass/ii keeps its targets and range but effects its targets like ii/breath of life/ii.
		A ii/radiant lantern/ii can be used as a holy symbol of any good aligned god or, if the wielder is neutral and can channel positive energy, as a holy symbol of any neutral god.
		A ii/radiant lantern/ii can be upgraded to empower the wielder's channelled positive energy.
		Once upgraded, the lantern will add 2d6 points of damage or healling to the wielder's channel positive energy ability and will add its enhancement to the DC of the ability. These effects do not stack with effects of the ii/phylactery of positive channeling/ii or the ii/celestial lamp/ii.",
		false,
		"bb/Requirements/bb Craft Wondrous Item, ii/continual flame/ii; bb/Cost/bb 18,800 gp
		bb/Upgrade/bb:
		bb/Requirements/bb Craft Wondrous Item; Special creator must be a 10th-level cleric; bb/Cost/bb 5,650 gp"
	);
	require $startDir.'pageEnd.php';
?>