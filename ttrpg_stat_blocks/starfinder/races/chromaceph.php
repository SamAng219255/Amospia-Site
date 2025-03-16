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
		"Chromaceph", // $name=''
		[
			""
		], // $desc=[]
		[
			'dex' => +2,
			'wis' => +2,
			'cha' => -2
		], // $stats=[]
		2, // $hp=0
		"Chromacephs are Small magical beasts.", // $size_type=''
		[
			"Blindsense (Thought)" => "Chromacephs can detect and locate thinking creatures within 30 feet. This ability cannot detect construct creatures or creatures without an intelligence score. Unless the chromaceph can other see a creature they detect, the creature still has total concealment from the chromaceph.",
			"Chromaceph Movement" => "Chromacephs have a supernatural fly speed of 20 feet with average maneuverability and a swim speed of 30 feet.",
			"Flexible" => "A chromaceph's body is incredibly flexible and they can move through an area as small as one-half their space without squeezing or one quarter their space when squeezing.",
			"Limited Telepathy" => "Chromacephs have limited telepathy to a range of 30 feet which allows them to communicate with creatures in range with whome they share a language.",
			"Natural Disguise" => "Chromacephs gain a +2 bonus to Stealth checks."
		]  // $traits=[]
	);
	blockSF(
		"About the Chromaceph",
		"race-description",
		[],
		false,
		[
			[
				'title' => 'Physiology',
				'spaced' => true,
				'texts' => quick_array([
					"Chromacephs are a race of air-breathing squid that can use psychic abilities to communicate and to fly through the air. Generally, chromacephs fly in the same way their aquatic counterparts swim which can occasionally be a nuisance as they use their two tentacles to grasp and wield objects which then end up behind them when moving swiftly. Their eight arms lack the strength to do much but are used when eating to push food into their beak.",
					"Chromacephs can change the color of their skin with incredible precision, detail, and control. Traditionally, this ability allows them to expertly blend into their surroundings. Modernly, this ability is also used as decoration and self expression. Chromacephs are particularly known to see a color that they enjoy and then include it into their appearance."
				])
			]
		],
		true
	);
	require $startDir.'pageEnd.php';
?>