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
		"Gumodeuza (Medium or Large)", // $name=''
		[
			""
		], // $desc=[]
		[
			"str" => +2,
			"wis" => +2,
			"dex" => -2
		], // $stats=[]
		6, // $hp=0
		"Gumodeuza are Medium or Large fey.", // $size_type=''
		[
			"Change Shape" => "As a standard action, a gumodeuza can assume the appearance of a specific Medium humanoid or return to their animal form. They gain a +10 bonus to Disguise checks to appear as the creature their form resembles. The creature can remain in this form indefinitely. The exact form of both the humanoid and animal forms is chosen at character creation. This feature can disguise most sensory information but does not affect scent.",
			"Gumodeuza Movement" => "Most gumodeuza have a base speed of 40 feet though some, whose animal form is a bird or other flying creature, have a base speed of 10 feet and a fly speed of 40 feet with average maneuverability.",
			"Low-Light Vision" => "Gumodeuza can see in dim light as if it were normal light.",
			"Natural Attack" => "Gumodeuza can attack with a special unarmed strike that deals lethal damage, doesn't count as archaic, and threatens squares. Gumodeuza gain a special version of the Weapon Specialization feat with this unarmed strike at 3rd level, allowing them to add 1–1/2 × their character level to their damage rolls for this unarmed strike (instead of just adding their character level, as usual).",
			"Cold Iron Weakness" => "Contact with at least a handful of cold iron deals 1d6 damage per round to gumodeuza. This effect is negated by the environmental protections built into most armor."
		]  // $traits=[]
	);
	raceSFBlock(
		"Gumodeuza (Tiny or Small)", // $name=''
		[
			""
		], // $desc=[]
		[
			"dex" => +2,
			"cha" => +2,
			"wis" => -2
		], // $stats=[]
		4, // $hp=0
		"Gumodeuza are Tiny or Small fey.", // $size_type=''
		[
			"Change Shape" => "As a standard action, a gumodeuza can assume the appearance of a specific Medium humanoid or return to their animal form. They gain a +10 bonus to Disguise checks to appear as the creature their form resembles. The creature can remain in this form indefinitely. The exact form of both the humanoid and animal forms is chosen at character creation. This feature can disguise most sensory information but does not affect scent.",
			"Gumodeuza Movement" => "Most gumodeuza have a base speed of 40 feet though some, whose animal form is a bird or other flying creature, have a base speed of 10 feet and a fly speed of 40 feet with average maneuverability.",
			"Low-Light Vision" => "Gumodeuza can see in dim light as if it were normal light.",
			"Natural Attack" => "Gumodeuza can attack with a special unarmed strike that has the operative property, deals lethal damage, doesn't count as archaic, and threatens squares. Gumodeuza gain a special version of the Weapon Specialization feat with this unarmed strike at 3rd level, allowing them to add 1–1/2 × their character level to their damage rolls for this unarmed strike (instead of just adding their character level, as usual).",
			"Cold Iron Weakness" => "Contact with at least a handful of cold iron deals 1d6 damage per round to gumodeuza. This effect is negated by the environmental protections built into most armor."
		]  // $traits=[]
	);
	blockSF(
		"About the Gumodeuza",
		"race-description",
		[],
		false,
		[
			[
				'title' => 'Physiology',
				'spaced' => true,
				'texts' => quick_array([
					"While in their true form, gumodeuza look in every way like an ordinary animal, or occasionally vermin. The primary difference being that, unlike an animal, the gumodeuza can talk and is fully sapient. Gumodeuza also have a second form that takes the appearance of a member of some humanoid race.",
					"Gumodeuza come about in the normal way for fey tied to the First World: partially developed mortal souls lost on their way which take on a body from the essence of the First World. Most gumodeuza make their way to the Material Plane soon after their creation. These young gumodeuza are childlike in look and behavior but are actually surprisingly wise and often soon take up a charge, filling their role as the bridge between nature and progression."
				])
			],
			[
				'title' => 'Culture',
				'spaced' => true,
				'texts' => quick_array([
					"Gumodeuza often act as go-betweens between the natural and artificial worlds, taking whichever of their forms to blend in with their current audience. Gumodeuza often work closely with xenodruids and many become xenodruids themselves. Gumodeuza have a few communities throughout the Pact Worlds but mostly live among other races, often defending nature or progress depending on what they feel is being underrepresented at the time."
				])
			]
		],
		true
	);
	require $startDir.'pageEnd.php';
?>