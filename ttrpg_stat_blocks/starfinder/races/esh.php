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
		"Esh", // $name=''
		[
			""
		], // $desc=[]
		[
			'str' => +2,
			'cha' => +2,
			'wis' => -2
		], // $stats=[]
		4, // $hp=0
		"Esh are Medium oozes with the fire subtype though, for effects targeting creatures by type, they count as both oozes and as outsiders with the elemental subtype (whichever type allows an ability to affect them for abilities that affect only one type, and whichever is worse for abilities that affect both types).", // $size_type=''
		[
			"Amorphous" => "An esh's body is malleable and shapeless. They have the amorphous universal creature rule. They don't take double damage from critical hits but are affected by critical hit effects normally.",
			"Burning Form" => "An esh's form is extraordinary hot and a creature attacking an esh with a natural weapon or unarmed strike takes 1d4 fire damage.",
			"Compression" => "Esh have the compression universal creature rule and can move through an area as small as one-quarter of their space without squeezing or one-eighth their space when squeezing.",
			"Extreme Heat Adaptation" => "Esh have fire resistance 5 and do not take damage from breathing in extreme heat.",
			"Senses" => "As oozes, esh cannot see and have the sightless universal creature rule along with blindsight (vibration) to a range of 60 feet.",
			"Susceptibility to Cold" => "When an esh takes cold damage, they become fatigued for 1 round (Fortitude negates; DC equals 13 + 1/2 the level, item level, or CR of the source of the damage); this doesn't cause an already fatigued character to become exhausted."
		]  // $traits=[]
	);
	blockSF(
		"About the Esh",
		"race-description",
		[],
		false,
		[
			[
				'title' => 'Physiology',
				'spaced' => true,
				'texts' => quick_array([
					"The esh are a race of sapient oozes. The heat they emit is intense, and their surfaces appear like molten rock, which gives off an orange-red hue, occasionally flickering with bright bursts of fire. When in motion, their forms elongate and contract, leaving behind faint trails of heat distortion in the air."
				])
			],
			[
				'title' => 'Home World',
				'spaced' => true,
				'texts' => quick_array([
					"Esh hail from a world dominated by volcanic activity and searing heat. Their homeworld is a chaotic landscape of active volcanoes, fiery chasms, and rivers of lava that stretch across the barren landscape. The atmosphere is thick with smoke and ash, with the sun often obscured by the dense cloud cover. This world is a constantly shifting landscape of molten rock, jagged peaks, and geysers of steam, where volcanic eruptions are commonplace and create lightning storms that illuminate the fiery skies.",
					"The planet is covered in large, flowing rivers of lava that snake through its surface, creating a natural network of channels and caverns that the esh have adapted to, moving effortlessly across this scorching terrain. The heat from the volcanic flows and geysers does not faze them; rather, it fuels their existence. The harsh environment has forged esh into resilient beings, and they thrive in the extreme heat, using their ability to move through even the most dangerous sections of the planet's surface to hunt, forage, and gather resources. They are naturally drawn to the molten heart of the world, where the core's heat pulses and radiates outward, creating the perfect environment for them to live and flourish.",
					"The esh are not isolated from each other; instead, they form communal clusters near lava flows, where their radiant forms blend with the landscape, creating an eerie and mesmerizing sight. While their world is perilous, with constant volcanic activity and shifting tectonic plates, the esh have long since made peace with their environment, adapting their physiology to survive in a world that few other creatures could endure."
				])
			]
		],
		true
	);
	require $startDir.'pageEnd.php';
?>