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
		"Ender Portal",// Name
		"Conjuration",// School
		25,// CL
		"none",// Slot
		'—',// Price
		'—',// Weight
		"These ancient immovable rings are found hanging in air amidst ruins. It is unknown who or what created them. Each ii/ender portal/ii contains 12 slots the top of the ring which can hold ii/eyes of ender/ii. When a portal is found, it contains 2d4 eyes. These eyes can be removed and used as normal but the portal must contain 12 eyes to operate. If the portal contains 12 eyes the interior of the ring becomes filled with a portal. Looking through this portal reveals what appears to be an endless starry night sky as though looking at it through a window. Any creature or object passing through this portal appears to fall through an endless starry sky before suddenly and abruptly disappearring from view to onlookers as they find themslf upon the obsidian platform in the End.",// Desc
		true,// Is Artifact
		"If a ii/sphere of annihilation/ii is brought in contact with an active ii/ender portal/ii's portal surface, it tears a greater hole from reality creating a rift that drags all objects within 1,000 feet into a random location in the End. The rift lasts for 2d4 rounds before shutting. Afterward the portal ring and sphere cannot be found on either plane."// Construction/Destruction
	);
	require $startDir.'pageEnd.php';
?>