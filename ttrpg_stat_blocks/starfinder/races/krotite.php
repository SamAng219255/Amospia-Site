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
		"Krotite", // $name=''
		[
			""
		], // $desc=[]
		[
			'str' => +2,
			'con' => +2,
			'cha' => -2
		], // $stats=[]
		6, // $hp=0
		"Krotites are Medium monstrous humanoids with the aquatic subtype.", // $size_type=''
		[
			"Aquatic" => "Krotites have the water breathing and amphibious universal creature rules.",
			"Energy Affinity" => "When a krotite makes a melee attack, they can change half the damage of that attack to fire.",
			"Krotite Movement" => "Krotites have a 40-foot swim speed and a 20-foot base speed.",
			"Low-Light Vision" => "Krotites can see in dim light as if it were normal light.",
			"Natural Weapon" => "Krotites can attack with a special unarmed strike that deals lethal damage, doesn't count as archaic, and threatens squares. Krotites gain a special version of the Weapon Specialization feat with this unarmed strike at 3rd level, allowing them to add 1–1/2 × their character level to their damage rolls for this unarmed strike (instead of just adding their character level, as usual).",
			"Muscle Skills" => "Krotites gain a +2 bonus to Athletics checks and to checks with a Profession skill such as bounty hunter or mercenary."
		]  // $traits=[]
	);
	blockSF(
		"About the Krotite",
		"race-description",
		[],
		false,
		[
			[
				'title' => 'Physiology',
				'spaced' => true,
				'texts' => quick_array([
					"Krotites are roughly humanoid with a face that resembles a permanently snarling dog. Their fingers and toes are webbed and their hands have sharp claws at the ends of their fingers. They can also call upon their connection with the verse to conjure fiery energies that function without issue in their underwater home. They are covered in sleek black fur."
				])
			]
		],
		true
	);
	require $startDir.'pageEnd.php';
?>