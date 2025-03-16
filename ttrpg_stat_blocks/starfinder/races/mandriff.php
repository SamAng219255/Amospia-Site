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
		"Mandriff", // $name=''
		[
			""
		], // $desc=[]
		[
			'str' => +4,
			'cha' => -2
		], // $stats=[]
		6, // $hp=0
		"Mandriff are monstrous humanoids. About 50% of mandriffs are Large, 33% are Medium, and 17% are Small. A rare few mandriffs are either Tiny or Huge sized though. Regardless of their size, mandriff wield weapons as though they were one size category smaller.", // $size_type=''
		[
			"Mandriff Movement" => "Mandriff have a land speed of 40 feet.",
			"Natural weapons" => "Mandriff can attack with a special unarmed strike that deals lethal damage, doesn't count as archaic, and threatens squares. This natural weapon can take the form of a bite, horns, antlers, hooves or other such structures. Mandriffs gain a special version of the Weapon Specialization feat with this unarmed strike at 3rd level, allowing them to add 1–1/2 × their character level to their damage rolls for this unarmed strike (instead of just adding their character level, as usual).",
			"Senses" => "Mandriff have both low-light vision and blindsense (scent) to a range of 30 feet. Using their low-light vision, mandriff can see in dim light as if it were normal light. Their blindsense allows them to detect the presence and location of creatures and objects within range but, if they cannot otherwise see them, such creatures and objects are still considered to have total concealment from the mandriff.",
			"Skilled" => "Mandriff gain an additional skill rank at 1st level and each level thereafter."
		]  // $traits=[]
	);
	blockSF(
		"About the Mandriff",
		"race-description",
		[],
		false,
		[
			[
				'title' => 'Physiology',
				'spaced' => true,
				'texts' => quick_array([
					"Each mandriff has the head and body of a different animal, but all of them have a human-like neck and torso, generally one rippling with muscle, where the animal's neck would otherwise be. Each mandriff always has the head and body of the same animal. The animal forms they possess always have four legs (though some may use what would otherwise be used as arms as the front legs), do not have wings, and are not aquatic or amphibious. Because of the added weight of the torso, mandriff generally cannot lift their front legs off the ground, at least not for very long, even if these legs would normally be easy or even common for the animal to lift."
				])
			],
			[
				'title' => 'Home World',
				'spaced' => true,
				'texts' => quick_array([
					"Mandriff are native to the planet Theares.",
					"Theares is a terrestrial world with several continents, their landscapes dominated by a striking mix of vast deserts and dense forests. The forests are home to the majestic adamant cedars—towering trees that reach over 1,000 feet in height. Their wood is stronger than the glaucite used in ship hulls, making them a valuable resource for the inhabitants of the planet.",
					"Theares is primarily inhabited by the mandriff, a four-legged, two-armed humanoid species. These beings have the body and head of various animal species (usually resembling familiar creatures from Golarion), but where their necks would be is a torso and arms resemble those of a human. Known for their immense strength and remarkable skill, mandriffs still live in a relatively archaic technological state. Despite this, they often find their way onto the galactic stage by hitching rides on the ships of other species, acquiring drift engines to install on their own occasional magically powered vessels made from adamant cedar, or using a variety of magical faster-than-light engines that traverse the Astral Plane. These methods, however, are rare, and most mandriffs lead simple lives in their massive village complexes, living off the land and crafting their own unique technology.",
					"The wildlife of Theares is dominated by megafauna with magically toughened hides. These creatures provide the mandriff with materials to craft a type of armor that resembles double-sided brigandine, with plates of adamant cedar wood fixed between layers of the toughened hide. The resulting armor is often far stronger than the advanced armor used by many drift age civilizations. Similarly, their weapons—crafted from adamant cedar wood and infused with ingredients harvested from these megafauna—are imbued with elemental powers. Despite being made from seemingly primitive materials, these weapons are capable of holding their own against far more advanced technologies."
				])
			]
		],
		true
	);
	require $startDir.'pageEnd.php';
?>