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
		"Yarallian", // $name=''
		[
			"Yarallians are descendants of outsiders from the plane of Axis that became native to the material plane after extended exposure."
		], // $desc=[]
		[
			'str' => +2,
			'int' => +2,
			'cha' => -2
		], // $stats=[]
		4, // $hp=0
		"Yarallians are Medium constructs with the magical and yarallian subtypes though, for effects targeting creatures by type, they count as having both the magical subtype and as having the technological subtype (whichever subtype allows an ability to affect them for abilities that affect only one subtype, and whichever is worse for abilities that affect both subtypes).", // $size_type=''
		[
			"Senses" => "Yarallians possess both low-light vision and darkvision to a range of 60 feet, allowing them to see in dim light as though it were normal light and to see perfectly in darkness up to 60 feet though only in black and white.",
			"Technological Expertise" => "Yarallians receive a +2 bonus to Engineering checks that increases to +3 to sabotage or dismantle technological devices. They can also cast ii/holographic interface/ii as a spell-like ability at will.",
			"Technological Interference" => "Creatures attacking a yarallian with a technological weapon take a -1 penalty to their attack roll as their weapon malfunctions. Solarian weapons and weapons with the analog property are immune to this effect.",
			"Yarallian Movement" => "Yarallians have a 30-foot land speed and a 20-foot extraordinary fly speed with clumsy maneuverability."
		]  // $traits=[]
	);
	blockSF(
		"About the Yarallian",
		"race-description",
		[],
		false,
		[
			[
				'title' => 'Physiology',
				'spaced' => true,
				'texts' => quick_array([
					"Yarallians are seemingly primitively designed brazen humanoid hybrid-robots with large metal mechanical wings and three faces."
				])
			],
			[
				'title' => 'Society',
				'spaced' => true,
				'texts' => quick_array([
					"Yarallians are masters of technology but primarily at thwarting it. They have a culture of regulating the growth of technology to prevent technologies from coming forward that the population is not ready for. In the galactic scene, they often place themselves as self-designated protectors of planets with less technological advancements, seeking to prevent interference from individuals bringing advanced technologies."
				])
			]
		],
		true
	);
	require $startDir.'pageEnd.php';
?>