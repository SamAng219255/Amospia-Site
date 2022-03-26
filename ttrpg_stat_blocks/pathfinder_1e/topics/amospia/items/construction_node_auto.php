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
		'Automated Construction Node',// Name
		3,// CL
		['labeled' => [
			'+10' => [
				'gp' => 804000
			],
			'+20' => [
				'gp' => 1204000
			],
			'+30' => [
				'gp' => 1604000
			],
			'+40' => [
				'gp' => 2004000
			],
			'+50' => [
				'gp' => 2404000
			]
		]],// Price
		'An ii/automated construction node/ii houses 8 constructs that are bound to the structure. If they are removed from the structure they cease to function. These constructs can each make 16,000 gp worth of progress on one or more items per day. They roll the associated craft check once at the completion of the item, if the check succeeds the item is completed. If the check fails the time is wasted but the materials are preserved and can be used to try again. The bonus possessed by these constructs can be increased at an increased cost in making the structure.
		The constructs within an ii/automated construction node/ii must first be programmed to create the given item. To do so a creature must spend time and materials as if creating the desired item according to the normal rules except no product is produced. The creature must also make make all relevant in creating the item and if they fail to create the item they must start over with new materials. The constructs can be reprogrammed using the same process but, like its non-automated counterpart, each ii/automated construction node/ii is associated with a given craft skill and it can only be used to create items using that skill.
		Automated construction nodes must be regularly supplied material otherwise they cease functioning.',// Desc
		false,// Destruction
		'bb/Requirements/bb Construct Magic Building, ii/fabricate/ii;
		bb/Cost/bb '.narmenPriceToTable(['labeled' => [
			'+10' => [
				'gp' => 804000/2
			],
			'+20' => [
				'gp' => 1204000/2
			],
			'+30' => [
				'gp' => 1604000/2
			],
			'+40' => [
				'gp' => 2004000/2
			],
			'+50' => [
				'gp' => 2404000/2
			]
		]])// Construction
	);
	require $startDir.'pageEnd.php';
?>