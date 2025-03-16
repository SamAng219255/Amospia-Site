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
		"Sculker", // $name=''
		[
			""
		], // $desc=[]
		[
			'dex' => +2,
			'con' => +2,
			'cha' => -2
		], // $stats=[]
		6, // $hp=0
		"Sculkers are Medium aberrations but, for effects targeting creatures by type, sculkers count as aberrations and as constructs and undead (whichever type allows an ability to affect them for abilities that affect only one type, and whichever is worse for abilities that affect multiple types).", // $size_type=''
		[
			"No Breath" => "Sculkers have the no breath universal creature rule and their immune to effects that require breathing (such as inhaled poison). This doesn't give them immunity to cloud or gas attacks that don't require breathing.",
			"Senses" => "Sculkers have no visual senses, granting the sightless universal creature rule. They do possess blindsight (vibration) to a range of 60 feet allowing them to sense their surroundings and nearby creatures by even the slightest vibrations propagating through objects, liquids, and even through the atmosphere. They can also sense the forces connecting nearby creatures' souls and bodies. Granting blindsense (life) to a range of 30 feet. This also lets them sense the approximate health of creatures (dead, dying, badly wounded, injured, mostly fine, healthy) and whether their soul is bound by natural forces (mostly biological creatures), magic (mostly magical constructs), technology (mostly technological constructs), necromancy (mostly undead), or any other forces binding their soul in place.",
			"Shriek" => "Sculkers can perform a supernatural shriek as a standard action. This shriek is incredibly loud, can be heard at great distances, is able to be heard through physical barriers without issue, and can be heard by living and undead creatures even through a vacuum. This shriek does not convey speech but creatures may be able to identify the shriek of a specific sculker similar to identifying their voice. Sculkers may also focus this shriek into a weapon as a ranged attack that targets EAC and deals 1d6 points of sonic damage. At 3rd level, add 1-1/2 the character's level to the damage. A sculker can't use this ability to deal damage again until they've spent a Resolve Point to recover Stamina Points after a 10-minute rest.",
			"Negative Energy Affinity" => "Despite being aberrations, a sculker's soul is in truth an amalgamation of fragments of souls bound together and to their bodies by strange necromancy. A sculker is healed by negative energy and harmed by positive energy like an undead.",
			"Truly Unnatural" => [
				"Sculkers bear an unnatural presence that often wards off other creatures. Sculkers take a penalty determined by the GM (usually between -1 and -5) on all Charisma based skill checks, other than Intimidate, to affect creatures that noticed this aura that are not undead, aberrations, constructs, or have the evil subtype. Such creatures' starting attitude toward the sculker is also one step worse than normal.",
				"Animals and magical beasts automatically sense this aura. All other creatures, other than constructs, make a DC 15 wisdom check the first time they meet the sculker to notice the aura.",
				"Sculkers also bear an aura of necromancy whose caster level is equal to their number of hit dice, and an aura of undeath similar to an undead with the same number of hit dice."
			]
		]  // $traits=[]
	);
	blockSF(
		"About the Sculker",
		"race-description",
		[],
		false,
		[
			[
				'title' => 'Physiology',
				'spaced' => true,
				'texts' => quick_array([
					"Sculkers are roughly humanoid with long thick limbs. Most of their body is a shade of slightly greenish blue that is almost black. Small protrusions, the color of old bones, go up their spine while their skin fades to a similar color along their upper and lower arms and legs but fades back around their knees and elbows. Plates of material of the same color can also be seen on their chest, lining up with their ribs. Their face has no eyes but a pair of blue-green feathery antennae extend outward and upward from either side of their heads. These allow them to sense vibrations and they light up an almost cyan color when they do. Material almost resembling short hair, no more than an inch long, can be found on their heads though it is the same color as their antennae with slightly glowing spots strewn throughout.",
					"Sculkers do not possess an inherent dimorphism."
				])
			],
			[
				'title' => 'Unique Technology',
				'spaced' => true,
				'texts' => quick_array([
					"Sculkers utilize a unique technology that functions like a blend of biotech and necromancy. This technology is made of captured and mutated souls. This is also the same technology from which the sculkers themselves are made.",
					"Sculk catalysts function as the heart of this operation and they are used to transform the captured souls into devices. These devices communicate to one another using a supernatural ultrasound that functions similarly to the methods used by other race's technology for wireless communication. Sculk devices are not considered technological or magical but they are treated as undead and outsiders. They are powered and otherwise function like their technological, hybrid, or magical counterparts."
				])
			]
		],
		true
	);
	require $startDir.'pageEnd.php';
?>