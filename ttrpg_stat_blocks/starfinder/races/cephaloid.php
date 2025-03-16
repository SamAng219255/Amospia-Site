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
		"Cephaloid", // $name=''
		[
			""
		], // $desc=[]
		[
			'dex' => +2,
			'int' => +2,
			'cha' => -2
		], // $stats=[]
		4, // $hp=0
		"Cephaloids are Small animals.", // $size_type=''
		[
			"Camouflaged" => "Cephaloids gain a +3 bonus to Stealth checks when in a forest.",
			"Cephaloid Movement" => "Cephaloids have a land speed of 30 feet and a climb speed of 20 feet.",
			"Communal" => "A cephaloid gains a +2 bonus to skill checks for the aid another action. A creature using the aid another action to assist a cephaloid's skill check gains a +2 bonus to their check.",
			"Flexible" => "Cephaloids can move through an area as small as one-half their space without squeezing or one quarter their space when squeezing.",
			"Mighty Grip" => "Cephaloids gain a +2 species bonus to grapple combat maneuvers and Athletics checks to climb.",
			"Senses" => "Cephaloids possess both low-light vision and darkvision 60', allowing them to see in dim light as though it were normal light and to see perfectly in darkness up to 60 feet though only in black and white."
		]  // $traits=[]
	);
	blockSF(
		"About the Cephaloid",
		"race-description",
		[],
		false,
		[
			[
				'title' => 'Physiology',
				'spaced' => true,
				'texts' => quick_array([
					"The Cephaloids are an enigmatic species, resembling octopuses but adapted for life in the treetops. Their skin boasts intricate patterning, mirroring the camouflage of hunters, allowing them to blend seamlessly into rainforest environments. To maintain moisture in their arboreal home, their skin develops a slimy texture due to a thin mucus layer. Eight tentacles enable them to navigate with ease, with two specialized for grasping and manipulating objects, slightly shorter but stronger than the others and protruding upward. The remaining six tentacles are expert climbers, allowing Cephaloids to stalk prey with stealth. They exhibit little sexual dimorphism, yet still possess subtle distinguishing characteristics. Females lay approximately six eggs, which must be kept submerged, and the amphibious young remain so for several years after hatching."
				])
			]
		],
		true
	);
	require $startDir.'pageEnd.php';
?>