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
		"Lhaksharian", // $name=''
		[
			"Lhaksharians are descendants of outsiders from the plane of Axis that became native to the material plane after extended exposure."
		], // $desc=[]
		[
			'str' => +2,
			'wis' => +2,
			'cha' => -2
		], // $stats=[]
		4, // $hp=0
		"Lhaksharians are Medium constructs with the magical and lhaksharian subtypes though, for effects targeting creatures by type, they count as having both the magical subtype and as having the technological subtype (whichever subtype allows an ability to affect them for abilities that affect only one subtype, and whichever is worse for abilities that affect both subtypes.", // $size_type=''
		[
			"Adaptable Resistance" => "Once per day, whenever the lhaksharian takes a 10-minute rest to regain Stamina Points, they can choose one energy type (acid, cold, electricity, fire, or sonic). They receive resistance 5 to this energy type. This decision lasts until the next time the lhaksharian uses this trait.",
			"Energy Spheres" => "Lhaksharians possess two additional limbs that hold energy spheres capable of firing bolts of energy. Doing so, however, requires integrating an energy weapon into the limb in question. Any energy based small arm or longarm can be integrated into these limbs as the integrated weapon augmentation. These limbs can accept no other augmentations and are not affected by augmentations that affect all arms or all legs.",
			"Lhaksharian Movement" => "Lhaksharians have a 30-foot supernatural fly speed with average maneuverability, but no land speed.",
			"Multiarmed" => "Lhaksharians gain the multiarmed (4) universal creature rule.",
			"Skill Bonus" => "Lhaksharians receive a +2 bonus to Mysticism checks."
		]  // $traits=[]
	);
	blockSF(
		"About the Lhaksharian",
		"race-description",
		[],
		false,
		[
			[
				'title' => 'Physiology',
				'spaced' => true,
				'texts' => quick_array([
					"Lhaksharians are seemingly primitively designed metallic hybrid-robots. They are generally humanoid with six \"arms\". Four of the construct's arms end in functional hands that can be used as normal. Lhaksharians' lower two arms hold large, flaming metal spheres in their hands and they can use these spheres to generate elemental bolts of energy that they can hurl great distances to damage foes. These spheres are actually affixed to the hands which therefore cannot be used to handle items. Where a human would have legs, lhaksharians instead possesses a complex orb of spinning rings similar in shape to an orrery—it is this whirling machine that grants the lhaksharian the ability to fly."
				])
			]
		],
		true
	);
	require $startDir.'pageEnd.php';
?>