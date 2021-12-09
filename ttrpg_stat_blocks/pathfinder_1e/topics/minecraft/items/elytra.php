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
?>
<title>Elytra</title>
<?php
	magicItemBlockAuto(
		"Elytra",// Name
		"Transmutation",// School
		3,// CL
		"shoulders",// Slot
		12000,// Price
		10,// Weight
		"These two wing-like structures fit onto the wearers shoulders. If the wearer falls more than 5 feet, the wings open up spreading to the sides. While the wings are open, the wearer takes no damage from falls, falls at a rate of 10 feet per round and can glide up to 5 feet in any horizontal direction for every 1 foot you fall. The wearer can attempt a dive to increase their horizontal speed at the cost of losing vertical height. The wearer can sacrifice up to 30 feet of vertical height to increase the distance they move horizontally by half the vertical height spent for the next 5 rounds, but they must make a DC 20 fly check or else their speed is unaffected. If the wearer fails by 10 or more they lose twice as much vertical height as intended. If the creature succeeds by 10 or more the increase to their horizontal distance is doubled.
		If the creature possesses some method propelling themself they can increase their horizontal speed accordingly and can gain height.",// Desc
		false,// Is Artifact
		"bb/Requirements/bb Craft Wondrous Item, ii/glide/ii; bb/Cost/bb 6,000 gp"// Construction/Destruction
	);
	require $startDir.'pageEnd.php';
?>