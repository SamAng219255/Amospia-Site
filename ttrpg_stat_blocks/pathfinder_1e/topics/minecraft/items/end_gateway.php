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
		"End Gateway",// Name
		"Conjuration",// School
		25,// CL
		"none",// Slot
		'—',// Price
		'—',// Weight
		"These strange objects are a little over 12 feet tall and are largely composed of two 5-feet tall rounded cones pointing up and down away from each other, made of a gray, unknown, indestructible stone. Between the stones is a roughly 2 and a half foot tall cylinder whose surface has the same strange visual qualities as an ii/ender portal/ii. If an ender pearl is cast through this surface, the throwing creature is transported to the outer islands below a matching gateway located between 2 and 40 feet in the air. Each gateway, around the main island, is connected two-way to one other gateway at the outer islands. Other gateways can be found the outer islands. Transporting through these gateways return the creature to the obsidian platform.",// Desc
		true,// Is Artifact
		"If a ii/sphere of annihilation/ii is brought in contact with an active ii/end gateway/ii's portal surface, it tears a greater hole from reality creating a rift that drags all objects within 1,000 feet into a random location in the End. The rift lasts for 2d4 rounds before shutting. Afterward the gateway and sphere cannot be found."// Construction/Destruction
	);
	require $startDir.'pageEnd.php';
?>