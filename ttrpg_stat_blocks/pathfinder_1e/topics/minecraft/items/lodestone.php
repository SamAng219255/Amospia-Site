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
<title>Netherite Lodestone</title>
<?php
	magicItemBlockAuto(
		"Netherite Lodestone",// Name
		"Divination",// School
		1,// CL
		"none",// Slot
		12300,// Price
		6000,// Weight
		"This large stone has several runes engraved on its sides resembling a compass rose. As a standard action a creature may place their hand on the smooth surface atop the stone which will become illuminted around their hand for a moment before fading. After doing so, any spell, spell-like ability, or supernatural ability possessed by the creature that can be used to discern direction, either toward a specific object or a constant direction such as north, can also be used to disern the location of the lodestone.",// Desc
		false,// Is Artifact
		"bb/Requirements/bb Craft Wondrous Item, ii/locate object/ii; bb/Cost/bb 6,300 gp"// Construction/Destruction
	);
	require $startDir.'pageEnd.php';
?>