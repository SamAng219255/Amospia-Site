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
	surgeBlock(
		'Carapace Growth', // name
		'Progression', // surge
		'Magnified Ones', // access
		'personal', // range
		'self', // target=false
		false, // effect=false
		false, // area=false
		10, // cost
		'10 minutes', // interval
		false, // dismiss
		[
			'The surgebinder can cause hard parts of their body, such as bones or carapace, to rapidly grow into desired shapes. Every 10 minutes the surgebinder can add or remove one of the following features:',
			'/mm/ii/Natural Weapon/ii: The surgebinder can add a single natural attack to one of their limbs. The attack deals 1d10 points of damage if the surgebinder is Medium sized and is treated as a primary natural attack. The surgebinder must choose when adding this feature if the natural weapon deals bludgeoning, piercing, or slashing damage. This makes feature the limb unusable for its regular purpose.',
			'/mm/ii/Natural Armor/ii: The surgebinder can cover their body in thick layers of hard material which grant a +10 natural armor bonus.',
			'/mm/ii/Body Spikes/ii: The surgebinder can add fearsome spikes to their body which function as armor spikes.',
			'Alternatively, the surgebinder can use this ability to patch wounds. The surgebinding takes 10 minutes and heals half of their current lethal damage while converting the remaining damage to nonlethal damage. This also immediately stops bleeding.'
		]  // desc
	);
	require $startDir.'pageEnd.php';
?>