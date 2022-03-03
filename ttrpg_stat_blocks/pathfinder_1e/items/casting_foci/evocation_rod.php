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
	magicItemBlockAuto(
		'Evocation Rod',
		'Evocation',
		9,
		'Focus',
		'3,000 gp (3rd), 11,000 gp (6th), 24,500 gp (9th)',
		'—',
		'Each of these metal rods is decorated with shapes of bubbling acid, jagged encroaching ice, crackling electricity, flickering fire, waves of force, or rapid small shifts giving the appearance of vibration. These depictions seem to move and change giving the impression of elemental forces embedded into the surface. Each appearance correlates to an energy type which the rod is attuned to. (Acid, Cold, Electricity, Fire, Force, or Sonic) While a spell of the evocation school is being cast using this rod, the images flare up becoming more dramatic, moving with speed befitting their contents.
		This rod acts as a casting focus and infuses your spells with destructive power that allows you to overcome some or all of target\'s energy resistances and immunities, though it is limited as to what levels of spells it can affect. It can only affect spells up to its max level of 3rd, 6th, or 9th. Spells cast using this focus ignore an amount of energy resistance equal to your caster level. Subjects of these spells that have immunity to an energy type are instead treated as having resistance to that energy equal to 5 plus their number of hit dice, which is reduced as normal, though they never take more than half the total amount of damage. Lastly, when damaging a target that has hardness with a spell cast using this focus, you ignore an amount of hardness equal to your caster level.
		An ii/evocation rod/ii can be wielded and enchanted as though it were a masterwork light mace.
		An ii/evocation rod/ii can be modified to function as any standard rod in addition its properties as a casting focus. This costs as much as creating a new rod of the corresponding type. Alternatively, they can be modified to strengthen damaging spells, adding a number of d6s of energy damage. This extra damage applies only to limited number of targets of your spells. The type of damage matches the rod\'s energy type. For a rod with a maximum affected spell level of 3rd, this damage is equal to 2d6 and it affects 1 target. For a rod with a maximum affected spell level of 6th, this damage is equal to 4d6 and it affects 2 targets. For a rod with a maximum affected spell level of 9th, this damage is equal to 6d6 and it affects 3 targets.',
		false,
		'bb/Requirements/bb Craft Wondrous Item or Craft Rod; bb/Cost/bb 1,500 gp (3rd), 5,500 gp (6th), 12,250 gp (9th)
		bb/Upgrade/bb:
		bb/Requirements/bb Craft Wondrous Item or Craft Rod, any damaging spell of 2nd level or higher with the decriptor matching the rod\'s energy type; bb/Cost/bb 2,000 gp (3rd), 8,000 gp (6th), 18,000 gp (9th)
		OR
		Same as creating the chosen rod.'
	);
	require $startDir.'pageEnd.php';
?>