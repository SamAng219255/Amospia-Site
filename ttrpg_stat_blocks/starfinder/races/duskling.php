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
		"Duskling", // $name=''
		[
			""
		], // $desc=[]
		[
			'cha' => +2
		], // $stats=[]
		4, // $hp=0
		"Dusklings are Medium humanoids but, for effects targeting creatures by type, dusklings count as humanoids and as outsiders (whichever type allows an ability to affect them for abilities that affect only one type, and whichever is worse for abilities that affect both types).", // $size_type=''
		[
			"Entropic Form" => [
				"Dusklings have resistance 5 to cold and acid. Additionally when they make a melee attack, they can change half of the damage to either cold or acid. If at least half of the attack's damage is either cold or acid damage, the damage becomes half cold and half acid. Otherwise, the duskling must choose whether half of the damage becomes cold or acid, replacing one of the damage types if the attack damage is already split between two damage types.",
				"Dusklings also draw light into them, decreasing the light level by 2 steps in a 10 foot radius and by 1 step for an additional 10 feet beyond.",
				"If a duskling enters the gravity well of a black hole, their field drops and they become immune to cold and acid and are immune to the various dangers being in close proximity to a black hole including being unaffected by its gravity well, radiation, and the \"winds\" of debris falling into it from its accretion disk falling into the black hole."
			],
			"Non-Biological" => [
				"Dusklings do not breathe, granting all the effects of the no breath rule. They also do not eat and while they do not need to sleep they can go dormant, negating their field of darkness, to gain the benefits of sleep.",
				"Dusklings are also harmed by positive energy and healed by negative energy like undead."
			],
			"Senses" => [
				"Dusklings have low-light vision, darkvision to a range of 60 feet, and blindsense (life) with a range of 30 feet.",
				"Dusklings can see in dim light as if it were normal light and can see perfectly in complete in darkness up to 60 feet away, though only in black and white.",
				"Dusklings can also sense the lifeforce of nearby creatures, allowing them to detect the presence and location of living creatures within range, though the creatures are still considered to have total concealment from the duskling unless they can see them using another sense."
			],
			"Duskling Movement" => "Dusklings have a 20-foot base speed and a 30-foot supernatural fly speed with average maneuverability."
		]  // $traits=[]
	);
	blockSF(
		"About the Duskling",
		"race-description",
		[],
		false,
		[
			[
				'title' => 'Physiology',
				'spaced' => true,
				'texts' => quick_array([
					"Dusklings are akin to living black holes. Occasionally, dusklings can be formed naturally when negative energy from the rift of a black hole infuses and animates a portion of its event horizon which pulls off and becomes a duskling. Most dusklings, however, are the result of sparklings collapsing upon death, usually at the same time as their home star. Dusklings use the same type of field as their sparkling counterparts that allow them to leave the region of the black hole's gravity well.",
					"Dusklings possess the same strange dimorphism as sparklings which, even more strangely, does not invert like the rest of them when a sparkling becomes a duskling.",
					"Unlike sparklings, there are no records of dusklings dying of old age though theories persist that they merely have a substantially longer life-span."
				])
			],
			[
				'title' => 'Psychology',
				'spaced' => true,
				'texts' => quick_array([
					"Duskling psychology is defined by an intense detachment from the whims and impulses that guide many other species. As beings born from the collapse of stars or the infusion of negative energy, their existence is inherently tied to endings, entropy, and the passage of time. This manifests in their stoic and often monotone demeanor. Duskling emotions, if they exist at all, are subtle and difficult to detect. They are not prone to the fleeting joys or sorrows of other sentient creatures; instead, they act with deliberate care and thought, often considering all outcomes before making decisions.",
					"Their view of the universe is one of inevitability. To a duskling, life is a constant process of entropy, and all things, no matter how vibrant or chaotic, eventually return to the darkness from which they came. This acceptance of eventual endings gives them a sense of calm indifference, making them unperturbed by external stresses that might affect other beings. Where Sparklings are whimsical and spontaneous, dusklings are the opposite—methodical, measured, and often burdened by a sense of cosmic order. They do not shy away from difficult or complex situations but rather approach them with cool precision, carefully analyzing every detail."
				])
			]
		],
		true
	);
	require $startDir.'pageEnd.php';
?>