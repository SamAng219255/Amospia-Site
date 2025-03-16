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
	raceSFBlock(
		"Mithalan", // $name=''
		[
			""
		], // $desc=[]
		[
			'any' => +2
		], // $stats=[]
		4, // $hp=0
		"Mithalans are Medium humanoids with the aquatic and mithalan subtypes.", // $size_type=''
		[
			"Aquatic" => "Mithalans have the water breathing and amphibious universal creature rules.",
			"Extra Feat" => "A mithalan gains an extra combat feat at first level.",
			"Mithalan Movement" => "Mithalans have a 40-foot swim speed and a 20-foot base speed.",
			"Skilled" => "A mithalan gains an additional skill rank at 1st level and each level thereafter."
		]  // $traits=[]
	);
	blockSF(
		"About the Mithalan",
		"race-description",
		[],
		false,
		[
			[
				'title' => 'Physiology',
				'spaced' => true,
				'texts' => quick_array([
					"Mithalans are very human-like but with webbed fingers and toes and fin-shaped ears. Their skin also tends towards a slightly bluer shade."
				])
			]
		],
		true
	);
	require $startDir.'pageEnd.php';
?>