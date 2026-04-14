<?php 
	$startDir='';
	for($i=0; $i<5; $i++) {
		if(file_exists($startDir.'pageStart.php')) {
			require $startDir.'pageStart.php';
			break;
		}
		else {
			$startDir='../'.$startDir;
		}
	}
	magicItemBlockAuto(
		'Lesser Wind Charge',// Name
		'Evocation',// School
		1,// CL
		'none',// Slot
		25,// Price
		'—',// Weight
		[
			'A ii/lesser wind charge/ii is a sphere of mischievious elemental winds. It weighs only as much as the ambient air around it and has no air resistance, though it is affected by changes in wind speed or direction it encounters. If crushed, struck, or slammed against a surface, the winds are released, slamming doors and triggering mechanisms.',
			'A ii/lesser wind charge/ii can be used by throwing it against a surface as a standard action. When thrown, it continues to travel in the direction it was thrown at the same speed until it hits something or is knocked off course. This is treated as a ranged touch attack with an unlimited maximum range and 60-foot range increment. On a missed attack, it strikes a square in a random direction 1d4 × 5 feet away from the targeted square plus an additional 20 feet away from the targeted square for every 5 points by which the attack missed. A ii/lesser wind charge/ii is not affected by the wind conditions when and where it is thrown, but if the strength or direction of the wind changes along its course, it will be affected by the differences in the wind.',
			'When its winds are released, any doors, lids, trapdoors, levers, buttons, or other such anchored movable objects in a 10-foot spread are changed to a random state other than their current one (e.g. open doors are closed, closed lids are opened, a lever with three modes is switched to one of the others at random, buttons are pushed, etc).',
			'Once a ii/lesser wind charge/ii has been used, the now-released winds from which it was made disperse and it is effectively destroyed.'
		],// Desc
		false,// Destruction
		'bb/Requirements/bb Craft Wondrous Item, ii/mage hand/ii or ii/open/close/ii; bb/Cost/bb 12 gp'// Construction
	);
	require $startDir.'pageEnd.php';
?>