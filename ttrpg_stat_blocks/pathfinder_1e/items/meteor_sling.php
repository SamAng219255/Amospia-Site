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
		'Meteor Sling',// Name
		'Evocation',// School
		6,// CL
		'none',// Slot
		30000,// Price
		'—',// Weight
		'This ii/+1 flaming sling/ii infuses stones slung from it with power that converts them into small shooting stars that streak across the battlefield. Stones slung from a ii/meteor sling/ii fly extra far, deal increased damage, and can be used to deal either bludgeoning or piercing damage. Stones slung from a ii/meteor sling/ii deal 2d4 points of damage for a medium sling, or twice as many of the normal dice for slings of other sizes, and have a range increment of 80 feet.
		Three times per day, a ii/meteor sling/ii can be used to infuse a stone with extra power. This stone becomes a fiery meteor, dealing 2d6 bludgeoning damage to the target if it hits and dealing 6d6 fire damage in a 20-foot radius spread from the nearest corner of their square regardless of whether the attack hit. Creatures in the area can make a Reflex save to take only half damage with a DC equal to 10 plus half of your base attack bonus plus your strength modifier.
		The effects of a ii/meteor sling/ii do not stack with the magic stone spell.',// Desc
		false,// Destruction
		'bb/Requirements/bb Craft Magic Arms and Armor, ii/shooting stars/ii, ii/meteor stone/ii; bb/Cost/bb 15,000 gp'// Construction
	);
	require $startDir.'pageEnd.php';
?>