<?php 
	$startDir='';
	for($i=0; $i<20; $i++) {
		if(file_exists($startDir.'pageStart.php')) {
			require $startDir.'pageStart.php';
			break;
		}
		else {
			$startDir='../'.$startDir;
		}
	}
	magicBuildingBlockAuto(
		'Construction Node',// Name
		3,// CL
		['gp' => 800000],// Price
		'Individuals within a ii/construction node/ii are filled with the spark of creation and are able to work at an incredibly increased speed.
		Each node is tied to a specific craft skill chosen as part of its creation. When used by an individual inside it provides magically enhanced masterwork tools for whatever task is necessary as part of crafting an item with its associated skill that grant a +7 bonus to craft skills of the associated type. When these tools are used by someone with at least 5 ranks in the given craft skill they accelerate the process performing 2,000 gp of work on a mundane or magical item in one hour. If the item is magical, it cannot be worked on again until the following day, however, working on a magic item this way does not prevent working on another magic item that day using either the same or a different ii/construction node/ii. An individual can use a ii/construction node/ii for a maximum of eight hours per day.
		A ii/construction node/ii can be used by up to eight individuals at a time and it can be used for a maximum of 64 combined hours per day.',// Desc
		false,// Destruction
		'bb/Requirements/bb Construct Magic Building, ii/fabricate/ii; bb/Cost/bb '.narmenPriceToStr(['gp' => 800000/2])// Construction
	);
	require $startDir.'pageEnd.php';
?>