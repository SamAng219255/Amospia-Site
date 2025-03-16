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
		"Aviran", // $name=''
		[
			""
		], // $desc=[]
		[
			'dex' => +2,
			'wis' => +2,
			'str' => -2
		], // $stats=[]
		2, // $hp=0
		"Avirans are Medium aberrations with the air subtype though, for effects targeting creatures by type, they count as both aberrations and as outsiders with the elemental subtype (whichever type allows an ability to affect them for abilities that affect only one type, and whichever is worse for abilities that affect both types).", // $size_type=''
		[
			"Aerobatic" => "Avirans receive a +2 bonus to Acrobatics checks.",
			"Aviran Movement" => "Avirans have a fly speed of 40 feet with perfect maneuverability.",
			"Limited Telepathy" => "Avirans have limited telepathy with a range of 60 feet.",
			"Low-Light Vision" => "Avirans can see in dim light as if it were normal light."
		]  // $traits=[]
	);
	blockSF(
		"About the Aviran",
		"race-description",
		[],
		false,
		[
			[
				'title' => 'Physiology',
				'spaced' => true,
				'texts' => quick_array([
					"Avirans are striking and ethereal in form, resembling vast, semi-transparent balloons that shimmer with iridescent hues. Their bodies are composed of a delicate, flexible material that allows them to shift and contort with ease, their translucence catching the light in a display of mesmerizing colors. This semi-fleshy balloon-like structure provides the necessary buoyancy to navigate the thin, high-altitude air of their homeworld. Rather than traditional limbs or wings, Avirans manipulate their surroundings with short-range telekinetic abilities, allowing them to float gracefully through the air and interact with their environment with a subtle, almost fluid motion. Their soft, gelatinous forms ripple gently as they move, giving them an almost otherworldly presence, as though they are more a manifestation of the wind than a solid entity."
				])
			],
			[
				'title' => 'Home World',
				'spaced' => true,
				'texts' => quick_array([
					"The Avirans' home world is found in the upper atmosphere of a colossal gas giant, within a region where the air is thin but still breathable, with a pressure and atmospheric density comparable to that of many terrestrial worlds. This layer of the atmosphere is far removed from the crushing depths of the planet's lower clouds, yet still far enough from the surface to create an environment both serene and volatile. The skies are constantly in motion, with swirling winds and shifting cloud formations, but the Avirans are perfectly adapted to these conditions. The environment is a delicate balance of calm and turbulence, where strong air currents provide ample opportunity for Avirans to float gracefully while avoiding the most dangerous aspects of the planet’s storm systems. This middle layer of the atmosphere is where life thrives for the Avirans, as they navigate the hazy, undulating clouds and rarefied air, utilizing their unique abilities to move and communicate in the vastness of their gaseous home. The Avirans build their floating cities and settlements within this atmospheric zone, where the sky feels both vast and intimately close, providing them with a quiet yet dynamic existence amidst the clouds."
				])
			]
		],
		true
	);
	require $startDir.'pageEnd.php';
?>