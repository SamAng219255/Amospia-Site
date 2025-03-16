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
		"Narman", // $name=''
		[
			""
		], // $desc=[]
		"All narmen receive a +2 bonus to Strength and a -2 penalty to Wisdom. Celestials and void seers receive a +2 bonus to Charisma while imperials receive a +2 bonus to Intelligence.", // $stats=[]
		6, // $hp=0
		"Narmen are Medium outsiders with the aquatic and native subtypes.", // $size_type=''
		[
			"Aquatic" => "Narmen are able to breathe both in air and water and possess the water breathing and amphibious universal creature rules.",
			"Darkvision" => "Narmen can see up to 60 feet in the dark.",
			"Divine Light" => [
				"A narman can call forth a small portion of divine light as a standard action. This either creates a point of light that follows the narmen and increases the light level by one step in a 10-foot radius or shines light from their open palm, raising the light level by one step in a 20-foot cone.",
				"Many void seers are able to create darkness with the same methods and to the same degree instead."
			],
			"Narmen Movement" => "Narmen have a base speed of 30 feet and a swim speed of 30 feet.",
			"Natural Magic" => "Narmen have innate magical understanding and ability that grants them a +2 bonus to Mysticism checks, the ability to cast token spell as a spell-like ability at will, and the ability to cast a 1st spell as a spell-like ability once per day. This additional spell is chosen at character creation and can be from any spell list. This spell can be changed each time the narman gains a level.",
			"Swordtrained" => "Narmen are trained in swordplay almost from birth and are always considered proficient with sword-like advanced melee weapons. They also begin play with a sword unique to the wielder. Despite the many forms this blade could take, this sword is treated as having the same statistics as a standard longsword, though the player may request for the GM to allow their sword to have the operative property. They also gain a special version of the Weapon Specialization feat which only applies to their unique sword. If they lose their sword or it is destroyed, a replacement can be crafted the same as crafting a standard longsword.",
			"Subspecies" => [
				"Narmen possess three primary subspecies that each grant an additional effect.",
				"/mm/bb/Angelic Resistance/bb: Celestial narmen, or simply celestials, possess resistance 5 to acid and cold and a +2 bonus on saving throws against petrification. ",
				"/mm/bb/Imperial Magic/bb: Imperial narmens', or simply imperials', stronger innate magic grants them a supernatural fly speed of 20' with perfect maneuverability. ",
				"/mm/bb/Void Sight/bb: Void seers have a third eye in their forehead that grants them the see in darkness universal creature rule and the ability to see magical auras as though constantly under the effect of ii/detect magic/ii."
			]
		]  // $traits=[]
	);
	blockSF(
		"About the Narman",
		"race-description",
		[],
		false,
		[
			[
				'title' => 'Physiology',
				'spaced' => true,
				'texts' => quick_array([
					"Narmen are roughly humanoid with a long tusk that juts through their upper lip. This tusk was once used to defend themselves but advancements since have made it relatively useless as such. A narman's body is covered in shimmering runes in their skin that glow and change colors. These color changes are generally influenced by their changing moods and form a complex means of body language, especially given that each narman's runes behave differently and favor different colors than others'. Narmen are divided into subspecies depending on what region of their homeworld their families were from and what magics were prevalent in that region. Celestials favor holy magic and tend to have golden hair and fair skin. Void seers favor the dark powers of the void and tend to have pure black skin with similarity black hair. Imperials favor a mixture of arcane powers and have semi-fair skin with iridescent hair."
				])
			],
			[
				'title' => 'Home World',
				'spaced' => true,
				'texts' => quick_array([
					"The narmen's waterlogged homeworld of Amospia is one rich in magic overall though certain regions may have a greater or lesser affinity for certain magics which will affect certain aspects of the terrain. The void seers' homeland of N'mor is blanketed in void energies and, while the sun is visible during the day like a brighter disk in the sky, the sky has been darkened to an eternal starry night which only gives dim light. The celestials' mountainous homeland of Zovillzburg is instead blanketed by clouds that form an enormous portal-like planar connection and effectivle transports the region within to the plane of Heaven resulting in the land being suffused with its essence. The Imperials occupy the largest region of the world, occupying most of the lands in between the other settlements.",
					"A number of millenia prior, magical imbalance caused the world to flood and while much of the water has since receded, the narmen population was forced to use magic to adapt themselves to being able to operate underwater. To this day, much of the empire is still below the waves though the celestials and void seers are located atop several high points where the water receded from.",
					"Modern technology is almost unheard of on Amospia in large part due to their ability to replace the need for it with advanced magic. Narmen are experts at magic and every individual is capable of some basic magic but where narmen culture truly shines is in the creation of magical items and even entire buildings that serve as a single massive magic item. This magical technology includes a magical equivalent of an infosphere in the form of the great transnet though the transnet is also able to teleport creatures and objects across its length, replacing the need for most vehicles. Reactive tomes, usually shortened simply to \"tomes\", serve many functions similar to comm units and can in fact perform any operation that can be done with a personal comm unit though they can also act as spell caches. Full sized tomes exist which resemble ancient books of magic, but most individuals carry \"pocket tomes\" which are small enough to fit in a pocket. And the list of magical technologies continues onward, replacing the need for any technological item with a magical one, though generally a magical item of a considerably different design."
				])
			],
			[
				'title' => 'Society',
				'spaced' => true,
				'texts' => quick_array([
					"Narmen society is incredibly efficient and orderly, with every member knowing their place and falling into their assigned duties. This is in large part due to narmen having an innate need for strict rules, laws, and instructions that they follow almost automatically, as though there were no other option, and they will often invent their own laws if not provided some."
				])
			]
		],
		true
	);
	require $startDir.'pageEnd.php';
?>