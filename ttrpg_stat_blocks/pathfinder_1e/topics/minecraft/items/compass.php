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
<title>Redstone Compass</title>
<?php
	magicItemBlockAuto(
		"Redstone Compass",// Name
		"Divination",// School
		1,// CL
		"none",// Slot
		1000,// Price
		'1/2 lb.',// Weight
		"A rather simple device, this compass uses redstone energies in place of magnets and point to a location based on the aura of the creature holding, specifically to a place they feel safe. When held this compass unerringly points to the last location considered home by the creature holding it. If the creature never considered a location home or the location is on another the the compass instead spins wildly back and forth unable to properly discern it goal.
		As a standard action a specific ii/redstone compass/ii can be attuned to a ii/netherite lodestone/ii within 5 feet at which point the compass will pointto the lodestone instead, spinning wildly if it is on another plane. The compass remains attuned as such until it attuned to another lodestone or until the wielder clears the attunement as another standard action.",// Desc
		false,// Is Artifact
		"bb/Requirements/bb Craft Wondrous Item, ii/know direction/ii; bb/Cost/bb 500 gp"// Construction/Destruction
	);
	require $startDir.'pageEnd.php';
?>