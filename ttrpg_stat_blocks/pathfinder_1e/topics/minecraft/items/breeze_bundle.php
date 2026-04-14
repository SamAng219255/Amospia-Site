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
		'Breeze Bundle',// Name
		'Evocation',// School
		5,// CL
		'none',// Slot
		10000,// Price
		'—',// Weight
		[
			'This pouch of rabbit hide is dyed with brilliant orange and teal in endless, chaotic swirling patterns. Inside is a trapped air elemental. This elemental may have been forced into the bundle, or it may have entered into the position willingly, but, regardless of its origins, it is now bound to lend its winds to any creature who holds the bundle.',
			'Once per round, as part of an Acrobatics check to jump, the wielder may launch themself using these winds in addition to the results of their jump. The wielder receives up to 30 feet to divide between horizontal and vertical movement as they choose, but they must travel in a straight line and there must be a suitable place to launch themself from. This place must be in the opposite direction from their direction of travel and may either be a solid surface perpendicular to the direction of travel or be a creature or object whose size and weight is similar to or greater than the wielders\'. Using this ability also negates any damage the wielder would take from falling after their jump down to their initial starting height. Damage from distance fallen below their initial starting height is dealt and may be reduced as normal.',
			'As an immediate action, the wielder may also use the winds to soften their landing, negating all damage caused from a fall.'
		],// Desc
		false,// Destruction
		'bb/Requirements/bb Craft Wondrous Item, ii/air geyser/ii; bb/Cost/bb 5,000 gp'// Construction
	);
	require $startDir.'pageEnd.php';
?>