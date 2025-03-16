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
		"Bio-Ghoul", // $name=''
		[
			""
		], // $desc=[]
		[
			'dex' => +2,
			'con' => +2,
			'int' => -2
		], // $stats=[]
		6, // $hp=0
		"Bio-ghouls are Medium humanoids with the bio-ghoul subtype.", // $size_type=''
		[
			"Bio-Ghoul Movement" => "Bio-ghouls have a 30-foot base speed and a 20-foot burrow speed.",
			"Jumper" => "Bio-ghouls halve the DC of Athletics checks to jump.",
			"Natural Weapons" => [
				"Bio-ghouls can attack with a special unarmed strike that deals lethal slashing damage, doesn't count as archaic, and threatens squares. Bio-ghouls gain a special version of the Weapon Specialization feat with this unarmed strike at 3rd level, allowing them to add 1–1/2 × their character level to their damage rolls for this unarmed strike (instead of just adding their character level, as usual).",
				"Additionally, humanoid creatures that take at least 1 point of damage from a bio-ghoul's natural weapon must make a Fortitude save or contract bio-ghoul fever.",
				"bb/Type/bb disease (injury); bb/Save/bb Fortitude DC 10 + half of the bio-ghoul's level + their Constitution modifier; bb/Track/bb physical; bb/Frequency/bb 1/hour; bb/Effect/bb Creatures that die from bio-ghoul fever awaken as bio-ghouls about 1 minute later.; bb/Cure/bb 2 consecutive saves"
			],
			"No Breath" => "Bio-ghouls do not breathe and possess the No Breath universal creature rule.",
			"Senses" => [
				"Bio-ghouls have darkvision to a range of 60 feet and blindsense (scent) to a range of 30 feet.",
				"Their darkvision allows them to see perfectly in darkness within range, but only in black and white.",
				"Using their blindsense, bio-ghouls can detect the presence and location of creatures and objects they can smell within range but, unless the bio-ghoul can otherwise see them, they still have total concealment from the bio-ghoul."
			]
		]  // $traits=[]
	);
	blockSF(
		"About the Bio-Ghoul",
		"race-description",
		[],
		false,
		[
			[
				'title' => 'Physiology',
				'spaced' => true,
				'texts' => quick_array([
					"Bio-ghouls are the result of an infection by a particular microorganism that causes varied and strange reactions in the host.",
					"Physically, a bio-ghoul's body is in a constant state of rotting and replacement and its specific organs are quickly lost and replaced with a more homogeneous super organ that grows like a cancer to replace the rotting tissue. This super organ is mostly powered by the microorganism and is able to keep the bio-ghoul alive. The super organ is even able to salvage some of the rotting tissue, though the constant replacement leaves the bio-ghoul with an insatiable hunger, primarily for raw meat as they have trouble digesting anything else. Bio-ghouls also have minor bioluminescence that makes their eyes glow red.",
					"Mentally, the microorganism reduces the host's intelligence and drives them toward a feral state of attacking and eating anything that moves other than their fellow bio-ghouls. It also creates a strong communal bond with other bio-ghouls and creates a hierarchy of authority based on descendancy with ghouls having an inclination to please and obey the bio-ghoul that infected them as well as a stronger inclination toward the one that infected them and so on and so forth until the pseudo-deific figure simply known as \"Father\" who was the origin of the ghouls. Whether or not Father was a ghoul himself is unknown and ghouls disagree on what his identity is. The only known fact is that he is no longer walking around with mortals with most claiming he is either dead, ascended to godhood, or in seclusion somewhere.",
					"Bio-ghouls also release a complex series of pheromones that allow them to identify fellow bio-ghouls as well as recognize related bio-ghouls and how high up in the infection tree they are."
				])
			],
			[
				'title' => 'Religion',
				'spaced' => true,
				'texts' => quick_array([
					"Many of the bio-ghouls worshpi the figure they refer to as Father who is said to be the origin of the bio-ghouls, though whether or not he himself was a bio-ghoul is a topic of some debate. The only known fact is that he is no longer walking around with mortals with most claiming he is either dead, ascended to godhood, or in seclusion somewhere. The concept of Father seems to be so deeply ingrained in bio-ghouls that even those who adamantly refuse the idea of him will gravitate towards a male leader, role model, famous figure, deity, or other individual that they cannot bring themselves to disobey or to go against what they believe their will to be. Those that follow the mythological Father claim that the bio-ghouls are superior to all others and that they can and should treat other races as little more than prey to be eaten. They believe in ruling by fear and strength and in giving in to their primal urges.",
					"Some bio-ghouls replace their belief in Father with a figure known as \"Elder Brother\". Elder Brother is considered similarly deific and is said by his followers to have freed the bio-ghouls from Father's tyrannical control. Elder Brother is said to teach temperance and discipline and working together with others. His teachings are generally put in complete opposition with those of Father.",
					"Father is generally considered to be chaotic evil aligned while Elder Brother is said to be lawful good."
				])
			],
			[
				'title' => 'Culture',
				'spaced' => true,
				'texts' => quick_array([
					"Two primary cultures of bio-ghouls exist: those that follow the teachings of Father and those that follow those of Elder Brother, which are based off their respective tenants.",
					"Both groups tend to prefer living underground in dug out burrows with large communal spaces. Bio-ghouls tend to prioritize community, each in their own way, and are wary of outsiders who generally see them as wild, uncivilized, insane, dangerous, and unintelligent."
				])
			],
			[
				'title' => 'Ghoulamancy',
				'spaced' => true,
				'texts' => quick_array([
					"Ghoulamancy is a seemingly magical ability possessed by some ghouls that allows them to manipulate and control the microorganism that performs the bio-ghoul transformation.",
					"Simple operations using ghoulamancy include healing and enhancing themself and other bio-ghouls. Slightly more complicated operations include transforming corpses into bio-zombies which are similar to bio-ghouls except they are mindless and follow the ghoulamancer's orders which are delivered through pheromonal signals. Even more complicated operations are used to create an extensive network of biotech powered by the bio-ghoul microbe.",
					"Ghoulamancy must be manually passed down, using ghoulamancy to grant the ability to other bio-ghouls."
				])
			]
		],
		true
	);
	require $startDir.'pageEnd.php';
?>