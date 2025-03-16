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
		"Ventruah", // $name=''
		[
			"Ventruah are descendants of outsiders from the plane of Elysium that became native to the material plane after extended exposure."
		], // $desc=[]
		[
			'dex' => +2,
			'con' => +2,
			'int' => -2
		], // $stats=[]
		4, // $hp=0
		"Ventruahs are Medium humanoids with the ventruah subtype.", // $size_type=''
		[
			"Lightning Bolts" => "Ventruahs gain resistance to electricity 5 and when they make a melee attack, they can change half the damage of that attack to electricity damage. They can also use this ability with bows and similar weapons, in which case, the attack loses the archaic property.",
			"Skill Specialization" => "Ventruahs gain a +2 bonus to checks made with the Acrobatics or Perception skills.",
			"Ventruah Movement" => "Ventruahs have a 30-foot land speed and a 20-foot supernatural fly speed with average maneuverability. This fly speed does not function in a vacuum."
		]  // $traits=[]
	);
	blockSF(
		"About the Ventruah",
		"race-description",
		[],
		false,
		[
			[
				'title' => 'Physiology',
				'spaced' => true,
				'texts' => quick_array([
					"Ventruahs resemble elves with bright white hair that seems to glow in the light and occasionally crackles with electricity. Faint winds tend to surround them and they can muster these winds and join with them to soar through the sky."
				])
			]
		],
		true
	);
	require $startDir.'pageEnd.php';
?>