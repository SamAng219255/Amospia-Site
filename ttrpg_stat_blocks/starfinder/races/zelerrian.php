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
		"Zelerrian", // $name=''
		[
			"Zelerrians are descendants of outsiders from the plane of Axis that became native to the material plane after extended exposure."
		], // $desc=[]
		[
			'str' => +2,
			'wis' => +2,
			'int' => -2
		], // $stats=[]
		4, // $hp=0
		"Zelerrians are Large constructs with the magical and zelerrian subtypes though, for effects targeting creatures by type, they count as having both the magical subtype and as having the technological subtype (whichever subtype allows an ability to affect them for abilities that affect only one subtype, and whichever is worse for abilities that affect both subtypes.", // $size_type=''
		[
			"Electrified Grasp" => "When a zellerian makes a melee attack, they can change half the damage of that attack to electricity.",
			"Natural Attack" => "Zelerrians can attack with a special unarmed strike that deals lethal damage, doesn't count as archaic, and threatens squares. Zelerrians gain a special version of the Weapon Specialization feat with this unarmed strike at 3rd level, allowing them to add 1–1/2 × their character level to their damage rolls for this unarmed strike (instead of just adding their character level, as usual).",
			"Senses" => "Zelerrians possess both low-light vision and darkvision to a range of 60 feet, allowing them to see in dim light as though it were normal light and to see perfectly in darkness up to 60 feet though only in black and white.",
			"Skill Specialization" => "Zellerians gain a +2 bonus to Profession (mercenary or bounty hunter) and Sense Motive checks.",
			"Zelerrian Movement" => "Zelerrians have a 30-foot land speed and a 20-foot extraordinary fly speed with clumsy maneuverability."
		]  // $traits=[]
	);
	blockSF(
		"About the Zelerrian",
		"race-description",
		[],
		false,
		[
			[
				'title' => 'Physiology',
				'spaced' => true,
				'texts' => quick_array([
					"Zelerrians are seemingly primitively designed golden hybrid-robots whose build is similar to a centaur, with four hoofed legs attached to a roughly-equine body atop which sits an upright humanoid torso with a pair of arms and a head with a human-like face. Two large mechanical wings sprout from the back of the back of the more equine portion of the body, enabling crude flight. Their fingers on both hands can shoot out to reveal lengths of barbed chain that can be used effectively in combat or retracted back just as quickly to handle and manipulate objects."
				])
			],
			[
				'title' => 'Culture',
				'spaced' => true,
				'texts' => quick_array([
					"Zelerrians are well known to follow local laws wherever they are to the utmost degree and as a people look down upon lawbreakers. As such they commonly take up jobs to seek out and bring to justice those that escape justice."
				])
			]
		],
		true
	);
	require $startDir.'pageEnd.php';
?>