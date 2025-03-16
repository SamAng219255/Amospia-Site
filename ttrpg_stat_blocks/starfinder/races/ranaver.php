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
		"Ranaver", // $name=''
		[
			""
		], // $desc=[]
		[
			'dex' => +4,
			'cha' => -2
		], // $stats=[]
		2, // $hp=0
		"Ranavers are Tiny creatures humanoids have a reach of 0 feet.", // $size_type=''
		[
			"Amphibious" => "Ranavers breathe through their skin and are adapted to breathing both above and below water. They possess the water breathing and amphibious universal creature rules.",
			"Camouflaged" => "A ranaver gains a +3 bonus to Stealth checks when in a forest or marsh, chosen on character creation.",
			"Climbing Master" => "Ranavers aren't flat-footed while climbing and can take 10 on Athletics checks to climb even when in combat or immediate danger.",
			"Jumper" => "Ranavers halve the DC of Athletics checks to jump.",
			"Toxic Coating" => "Ranavers are coated in a toxic mucus layer. A creature attacking a ranaver with a natural weapon or unarmed strike takes 1d4 damage; as a reaction, the ranaver can momentarily increase their secretions and add their character level to the damage dealt. Creatures that are immune to poison do not take any damage from this ability.",
			"Low-Light Vision" => "Ranavers can see in dim light as if it were normal light.",
			"Ranaver Movement" => "Ranavers have a land speed of 30 feet and a swim speed of 20 feet."
		]  // $traits=[]
	);
	blockSF(
		"About the Ranaver",
		"race-description",
		[],
		false,
		[
			[
				'title' => 'Physiology',
				'spaced' => true,
				'texts' => quick_array([
					"Ranavers take the appearance of an ordinary frog but are actually sapient and decently intelligent creatures. It is unclear what their relationship to frogs is however, and some believe them to be merely the descendants of awakened frogs. Regardless, ranavers are capable of using weapons and manipulating objects without difficulty but often require uniquely sized objects. Luckily, their extraordinary jumping ability generally allows them to reach objects designed for taller species without much difficulty. In combat, they tend to prefer mysticism or energy weaponry to allow them to effectively reach and injure their opponents where they would have difficulty reaching their enemies and giving them more than a paper cut with sword-like weapons reduced to their scale."
				])
			],
			[
				'title' => 'Home World',
				'spaced' => true,
				'texts' => quick_array([
					"Ranavers are native to the planet Sreknar.",
					"Sreknar is a terrestrial planet characterized by low gravity and a thick, dense atmosphere. Its surface is mostly flat, covered in expansive marshes that stretch across vast regions. Despite this, large settlements established by an alien race occupy significant portions of the land. This dominant race, which is not native to Sreknar, originally arrived after a natural ecological disaster devastated their home world. They believed they had discovered an uninhabited planet, only to find that Sreknar was already inhabited by the Ranavers, a smaller, frog-like species.",
					"In an effort to prevent their cities from sinking and flooding due to the planet’s swampy terrain, the settlers have made attempts to manipulate the water tables beneath the surface. Additionally, they’ve employed devices to control and alter the weather within their cities, further modifying the planet's environment. However, these interventions have had unintended consequences. Large swaths of desert have formed, disrupting the planet’s delicate balance and leading to ecological upheaval.",
					"The Ranavers, despite their unassuming appearance—resembling ordinary frogs—are an intelligent, sapient species with their own rich culture and history. While they have made efforts to cooperate with the newcomers, they often find themselves overlooked and marginalized, a trend that has persisted even as they’ve traveled with their more advanced neighbors to join the broader galaxy."
				])
			]
		],
		true
	);
	require $startDir.'pageEnd.php';
?>