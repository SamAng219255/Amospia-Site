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
		"Karkal", // $name=''
		[
			""
		], // $desc=[]
		[
			'str' => +2,
			'con' => +2,
			'dex' => -2
		], // $stats=[]
		4, // $hp=0
		"Karkals are Small magical beasts with the earth subtype though, for effects targeting creatures by type, they count as both magical beasts and as outsiders with the elemental subtype (whichever type allows an ability to affect them for abilities that affect only one type, and whichever is worse for abilities that affect both types).", // $size_type=''
		[
			"Camouflaged" => "A karkal gains a +3 bonus to Stealth checks when in a subterranean biome.",
			"Carrier" => "Karkals increase their carrying capacity by 50%.",
			"Karkal Movement" => "Karkals have a base speed of 30 feet and a burrow speed of 20 feet.",
			"Natural Weapons" => "Karkals can attack with a special unarmed strike that deals lethal slashing damage, doesn't count as archaic, and threatens squares. Karkals gain a special version of the Weapon Specialization feat with this unarmed strike at 3rd level, allowing them to add 1–1/2 × their character level to their damage rolls for this unarmed strike (instead of just adding their character level, as usual).",
			"Senses" => "Karkals lack any type of visual sense and have have the sightless universal creature rule. Karkals do possess blindsight (vibration) with a range of 60 feet."
		]  // $traits=[]
	);
	blockSF(
		"About the Karkal",
		"race-description",
		[],
		false,
		[
			[
				'title' => 'Physiology',
				'spaced' => true,
				'texts' => quick_array([
					"Karkals are compact and resilient creatures, perfectly suited to the harsh conditions of their subterranean home. Their stocky, muscular bodies are built for strength and endurance, with thick skin that shields them from the relentless pressures of deep stone tunnels. This physicality allows them to move efficiently through the dense, often oppressive underground environments where they reside, digging and navigating with ease in their dark, damp world.",
					"Though sightless, Karkals have developed an exceptional sensitivity to the vibrations in their surroundings. They perceive the world through a heightened awareness of movement in the air and earth around them. Their keen sense of touch and spatial perception helps them map out their environment in ways that others, dependent on vision, cannot. This ability allows them to detect the faintest tremors or subtle shifts in the ground, giving them a clear picture of their surroundings, even in the deepest darkness.",
					"Their burrowing nature and solid frame make them excellent survivors in their underground habitats. Karkals are not quick to react but rather possess a steady, unyielding presence. They have evolved to thrive under the weight of stone and earth, making them particularly suited to tunnel systems where survival depends on strength and persistence. Their bodies are adept at carrying weight and enduring long periods of intense physical labor, while their hands and feet are uniquely shaped for digging and gripping the rocky terrain.",
					"The Karkal’s form is as practical as it is formidable. With a body designed for the subterranean world, their resilience and awareness of their environment make them formidable in the dark recesses they call home."
				])
			],
			[
				'title' => 'Environment',
				'spaced' => true,
				'texts' => quick_array([
					"Karkals thrive in deep subterranean environments, typically living in labyrinthine caves or expansive underground tunnels. These locations are often filled with a unique ecosystem where bacteria, fungi, and other plant-like organisms have adapted to the harsh, lightless conditions. Over time, these organisms have altered the natural surroundings, creating breathable, albeit dense, pockets of air within the otherwise stifling stone. The Karkals, with their earth affinity, find comfort and sustenance in these underground realms. Their society is built around navigating and manipulating this underground ecosystem, making them resilient to the dangers of cave-ins, toxic gases, and oppressive darkness. They prefer locations where the ground is solid, and the air is thick with the smell of damp stone and growing organisms, while avoiding open, unprotected spaces."
				])
			]
		],
		true
	);
	require $startDir.'pageEnd.php';
?>