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
		"Klevine", // $name=''
		[
			"Klevines are descendants of outsiders from the plane of Heaven that became native to the material plane after extended exposure."
		], // $desc=[]
		[
			'str' => +2,
			'wis' => +2,
			'int' => -2
		], // $stats=[]
		4, // $hp=0
		"Klevines are Medium humanoids with the klevine subtype.", // $size_type=''
		[
			"Bite" => "Klevines can attack with a special unarmed strike that deals lethal damage, doesn't count as archaic, and threatens squares. Klevines gain a special version of the Weapon Specialization feat with this unarmed strike at 3rd level, allowing them to add 1–1/2 × their character level to their damage rolls for this unarmed strike (instead of just adding their character level, as usual).",
			"Change Shape" => "As a standard action, a klevine can assume the form of a Small or Medium domesticated or wild canine or return to their humanoid form. They gain a +10 bonus to Disguise checks to appear as that creature. The player must choose a specific canine form at character creation that is taken when this ability is used and it is reflected in the klevine's canine head. Klevines retain their bite ability in both canine and humanoid form.",
			"Klevine Movement" => "Klevines have a 40 foot land speed.",
			"Senses" => "Klevines have low-light vision and blindsense (scent) to a range of 30 feet. Klevines can see in dim light as if it were normal light and can detect the presence and location of creature and object within 30 feet using scent. Unless they can otherwise see them without their blindsense, creatures have total concealment from the klevine."
		]  // $traits=[]
	);
	blockSF(
		"About the Klevine",
		"race-description",
		[],
		false,
		[
			[
				'title' => 'Physiology',
				'spaced' => true,
				'texts' => quick_array([
					"Klevines are humanoid in build, with strong, athletic frames well-suited for both endurance and bursts of speed. Their defining feature is their distinctly canine head, which closely resembles a specific breed of dog or wolf, determined at birth. Their fur-covered faces range from sleek and narrow to broad and powerful, with matching ears, muzzles, and coloration. Despite their otherwise human-like bodies, their physiology includes heightened olfactory senses and sharp, durable teeth adapted for biting. Their hands and feet remain human-like, but their nails often grow thick and claw-like, hinting at their animalistic nature.",
					"A klevine’s connection to their canine form is more than superficial—each individual has the ability to fully transform into a four-legged version of the same breed their head resembles. When in this form, they appear indistinguishable from a normal dog or wolf of similar size, though their intelligence and awareness remain fully intact. This transformation is seamless and instinctive, allowing them to switch between their humanoid and animal forms with practiced ease."
				])
			],
			[
				'title' => 'Psychology',
				'spaced' => true,
				'texts' => quick_array([
					"Klevines are known for their deeply ingrained sense of loyalty, forming unshakable bonds with those they consider allies. They are both merciful and fiercely protective, often acting as guardians or mediators within their communities. Their strong pack mentality makes them reliable and steadfast companions, but they can also be wary of outsiders until trust is earned."
				])
			]
		],
		true
	);
	require $startDir.'pageEnd.php';
?>