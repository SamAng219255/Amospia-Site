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
		"Foarg", // $name=''
		[
			"Foargs are descendants of demons of gluttony that became native to the material plane after extended exposure."
		], // $desc=[]
		[
			'str' => +2,
			'con' => +2,
			'wis' => -2
		], // $stats=[]
		4, // $hp=0
		"Foargs are Medium humanoids with the foarg subtype.", // $size_type=''
		[
			"Bite" => "Foargs can attack with a special unarmed strike that deals lethal damage, doesn't count as archaic, and threatens squares. Foargs gain a special version of the Weapon Specialization feat with this unarmed strike at 3rd level, allowing them to add 1–1/2 × their character level to their damage rolls for this unarmed strike (instead of just adding their character level, as usual).",
			"Blindsense (Scent)" => "Foargs can detect the presence and locations of creatures and objects within 30 feet by smell.",
			"Epicurean" => "Foargs gain a +2 species bonus to Life Science checks that increases to +3 to craft food and drink items.",
			"Foarg Movement" => "Foargs have a 30-foot land speed and a 20-foot extraordinary fly speed with clumsy maneuverability.",
			"Stuffing" => "Foargs gain damage equal to their base attack bonus that is overcome by piercing or slashing damage.",
			"Cold Iron Weakness" => "Contact with at least a handful of cold iron deals 1d6 damage per round to a foarg. This effect is negated by the environmental protections built into most armor.",
			"Ravenous" => "Foargs require twice as much food as normal for their size to avoid starvation. A foarg can go without eating food for 1 day. After this time, they must succeed at a Constitution check (DC = 10 + 2 per previous check) each day or take 1d6 nonlethal damage."
		]  // $traits=[]
	);
	blockSF(
		"About the Foarg",
		"race-description",
		[],
		false,
		[
			[
				'title' => 'Physiology',
				'spaced' => true,
				'texts' => quick_array([
					"Foargs are scaly humanoids with large maws filled with sharp teeth. While not genetically any heavier set than most humans, foargs are known to eat to extremes and are ubiquitously overweight and rather rotund compared to human standards. Despite this, their physiology is able to deal with this extreme eating without creating issues, generally preventing any adverse side effects though particularly rich foargs often eat to the point they can no longer stand or walk.",
					"Foargs are also well known as chefs and enjoy preparing large and extravagant meals for themselves and others."
				])
			]
		],
		true
	);
	require $startDir.'pageEnd.php';
?>