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
		"Gheltom", // $name=''
		[
			"Gheltoms are descendants of demons of greed that became native to the material plane after extended exposure."
		], // $desc=[]
		[
			'int' => +2,
			'wis' => +2,
			'cha' => -2
		], // $stats=[]
		6, // $hp=0
		"Gheltoms are Large monstrous humanoids with the extraplanar subtype though, for effects targeting creatures by type, they count as both monstrous humanoids and as outsiders with the chaotic, demon, evil, and native subtypes (whichever typing allows an ability to affect them for abilities that affect only one type, and whichever is worse for abilities that affect both types).", // $size_type=''
		[
			"Gheltom Movement" => "Gheltoms have a 30-foot land speed and a 20-foot extraordinary fly speed with clumsy maneuverability.",
			"Resistant" => "Gheltoms receive a +3 bonus to saves against poison.",
			"Skillful" => "Gheltoms gain +2 racial bonus to Mysticism checks. This bonus increases to +3 to recall knowledge about the Abyss or to make other checks concerning the Abyss.",
			"Sturdy" => "Gheltoms gain a +4 bonus to AC against bull rush, disarm, reposition, and trip combat maneuvers.",
			"Cold Iron Weakness" => "Contact with at least a handful of cold iron deals 1d6 damage per round to a gheltom. This effect is negated by the environmental protections built into most armor."
		]  // $traits=[]
	);
	blockSF(
		"About the Gheltom",
		"race-description",
		[],
		false,
		[
			[
				'title' => 'Physiology',
				'spaced' => true,
				'texts' => quick_array([
					"Gheltoms take the form of towering humanoids with pig-like heads and fatty bodies including hands that bear four stubby fingers.",
					"Gheltoms are known for their greed and are some of the most shrewd traders in the galaxy and often prefer to do business with equally greedy buyers whom they can easily manipulate."
				])
			],
			[
				'title' => 'Unique Technology',
				'spaced' => true,
				'texts' => quick_array([
					"Gheltom traders are known to possess some type of faster-than-light travel that predates the Signal and allowed them to build up galactic trade networks that are still in use today. While the exact operation of this network is unknown, it is believed to utilize passage through the Abyss, which realm the gheltoms are native to."
				])
			]
		],
		true
	);
	require $startDir.'pageEnd.php';
?>