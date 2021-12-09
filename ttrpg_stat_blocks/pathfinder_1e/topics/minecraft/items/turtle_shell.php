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
<title>Enchanted Turtle Shell</title>
<?php
	magicItemBlockAuto(
		"Enchanted Turtle Shell",// Name
		"Transmutation",// School
		5,// CL
		"head",// SLot
		6000,// Price
		1,// Weight
		"Invented by a grove of aquatic druids, these turtle shells have been formed by layering shed scutes from sea turtles have been enchanted with druidic magic to allow limited breathing while underwater. A creature wearing an enchanted turtle shell gain 5 hours of water breathing per day. These 5 hours need not be continuous but must be spent in 10 minute increments.",// Desc
		false,// Destruction
		"bb/Requirements/bb Craft Wondrous Item, ii/water breathing/ii; bb/Cost/bb 3,000 gp"// Construction
	);
	require $startDir.'pageEnd.php';
?>