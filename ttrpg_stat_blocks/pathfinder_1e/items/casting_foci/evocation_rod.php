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
		"Evocation Rod",
		"Evocation",
		9,
		"Focus",
		"(+2) 22,500 gp, (+4) 45,000 gp, (+6) 67,500 gp",
		"—",
		"Each of these metal rods is decorated with shapes of bubbling acid, jagged encroaching ice, crackling electricity, flickering fire, waves of force, or rapid small shifts giving the appearance of vibration. These depictions seem to move and change giving the impression of elemental forces embedded into the surface. Each appearance correlates to an energy type which the rod is attuned to. (Acid, Cold, Electricity, Fire, Force, or Sonic) While a spell of the evocation school is being cast using this rod, the images flare up becoming more dramatic, moving with speed befitting their contents.
		This rod acts as a casting focus and 
		An ii/evocation rod/ii can be wielded and enchanted as though it were a masterwork light mace.
		An ii/evocation rod/ii can be modified to function as any standard rod in addition its properties as a casting focus. This costs as much as creating a new rod of the corresponding type. Alternatively, they can be modified to strengthen damaging spells, adding a number of d6s of energy damage equal to the rod's caster level bonus. The type of damage matches the rod's energy type. This damage applies to a number of targets equal to half the rod's caster level bonus. This modification costs 2,000 gp for a +2 rod, 8,000 gp for a +4 rod, and 18,000 gp for a +6.",
		false,
		"bb/Requirements/bb Craft Wondrous Item or Craft Rod; bb/Cost/bb (+2) 11,250 gp, (+4) 22,500 gp, (+6) 33,750 gp
		bb/Upgrade/bb:
		bb/Requirements/bb Craft Wondrous Item or Craft Rod, any damaging spell of 2nd level or higher with the decriptor matching the rod's energy type; bb/Cost/bb (+2) 2,000 gp, (+4) 8,000, (+6) 18,000 gp
		OR
		Same as creating the chosen rod."
	);
	require $startDir.'pageEnd.php';
?>