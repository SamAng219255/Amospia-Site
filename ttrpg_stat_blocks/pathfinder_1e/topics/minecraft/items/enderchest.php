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
		"Ender Chest",// Name
		"Conjuration",// School
		9,// CL
		"none",// Slot
		90000,// Price
		2400,// Weight
		"This large obsidian chest glows with a faint blue light emanating from within the material. A strange eye can be seen watching you from its front. Opening an ii/ender chest/ii reveals an extradimensional space tied to the person who opened it. This extradimensional space can contain up to 1,500 lbs or 250 cubic ft of items. Whenever a creature opens an ii/ender chest/ii they access the same space regardless of which chest was opened. This space cannot be accessed by any other creature opening an ii/ender chest/ii. Instead they get one unique to themself. If a creature dies with items in their ii/ender chest/ii storage space, these items are evacuated into the creatures environment after 1 day appearing around the remains of their body.
		Living things in the chest eat, sleep, and age normally, and they die if they run out of food, air, water, or whatever they need to survive.",// Desc
		false,// Destruction
		"bb/Requirements/bb Craft Wondrous Item, ii/secret chest/ii; bb/Cost/bb 45,000 gp"// Construction
	);
	require $startDir.'pageEnd.php';
?>