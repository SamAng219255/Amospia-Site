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
		'Boulder of Annihilation',// Name
		'Transmutation',// School
		12,// CL
		'none',// Slot
		150000,// Price
		84000,// Weight
		'This 10-foot diameter boulder is nearly impossible to move normally but bears a curious enchantment allowing it to be mental rolled around.
		A curious wizard was attempting to research the minor telekinetic abilities which allow a creature to maneuver a ii/sphere of annihilation/ii and ended up creating a prohibitively expense enchantment which could be placed on an object at which point it would detect the largely imperceptable telekinesis and magnify it allowing it to move an object. While it is not a particularly fast method of moving an object the resulting enchantment could roll large boulders.
		If a ii/boulder of annihilation/ii enters a square occupied by a large sized or smaller creature, that creature takes 12d6 damage. If the creature succeeds at a DC 25 Reflex save, they can move 5 feet out of the path of the boulder which reduces the damage taken to half. If the boulder attempts to enter the square of creature which is large sized or larger, it can choose to make a strength check with the same DC to stop the boulder. If the creature succeeds, the boulder halts just before entering that creature\'s square and cannot be moved again until the following round. A large sized creature cannot attempt both a Reflex save and a strength check against the same movement of the boulder.
		A character’s ability to gain control of a ii/boulder of annihilation/ii (or to keep controlling one) is based on the result of a control check against DC 25 (a move action). A control check is 1d20 + character level + character Intelligence modifier. If the check succeeds, the character can move the boulder as a free action.
		Control of a boulder can be established from as far away as 40 feet (the character need not approach too closely). Once control is established, it must be maintained by continuing to make control checks (all DC 25) each round. For as long as a character maintains control (does not fail a check) in subsequent rounds, he can control the boulder from a distance of 40 feet + 10 feet per character level. The boulder speed in a round is 10 feet + 5 feet for every 5 points by which the character’s control check result in that round exceeded 25.
		If a control check fails, the boulder rolls 10 feet in the direction of the character attempting to move it. If two or more creatures vie for control of a ii/boulder of annihilation/ii, the rolls are opposed. If none are successful, the boulder slips toward the one who rolled lowest.
		Controlling a ii/boulder of annihilation/ii is unaffected by the use of a ii/talisman of the sphere/ii.',// Desc
		false,// Destruction
		'bb/Requirements/bb Craft Magic Arms and Armor, ii/telekinesis/ii; bb/Cost/bb 75,000 gp, a 10-foot diameter boulder'// Construction
	);
	require $startDir.'pageEnd.php';
?>