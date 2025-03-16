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
		"Bestial Mithalan", // $name=''
		[
			"Bestial mithalans have taken on some of their fallen god's bestial might."
		], // $desc=[]
		[
			'str' => +2,
			'dex' => +2,
			'int' => -2
		], // $stats=[]
		6, // $hp=0
		"Bestial mithalans are Medium monstrous humanoids with the aquatic and mithalan subtypes.", // $size_type=''
		[
			"Athletic" => "Bestial mithalans gain a +2 bonus to Athletics and halve the DC of Athletics checks to jump.",
			"Aquatic" => "Mithalans have the water breathing and amphibious universal creature rules.",
			"Bestial Mithalan Movement" => "Bestial mithalans have a 50-foot swim speed and a 20-foot base speed.",
			"Natural Weapon" => "Bestial mithalans can attack with a special unarmed strike that deals lethal damage, doesn't count as archaic, and threatens squares. Bestial mithalans gain a special version of the Weapon Specialization feat with this unarmed strike at 3rd level, allowing them to add 1–1/2 × their character level to their damage rolls for this unarmed strike (instead of just adding their character level, as usual).",
			"Senses" => [
				"Bestial mithalans have low-light vision and blindsense (scent) to a range of 30 feet.",
				"Bestial mithalans can see in dim light as if it were normal light. They can also detect the presence and location of creatures and objects within range but, unless the mithalan has another way of sensing them, they still have total concealment from the mithalan."
			]
		]  // $traits=[]
	);
	blockSF(
		"About the Bestial Mithalan",
		"race-description",
		[],
		false,
		[
			[
				'title' => 'Physiology',
				'spaced' => true,
				'texts' => quick_array([
					"Bestial mithalans resemble their non bestial kin but lack the blue shade and instead have a slightly magenta shade. They also have a magenta frill extending down their spine and their hands and feet turn a similar shade. Their mouth also acquires razor-sharp teeth and their legs become especially toned and powerful."
				])
			]
		],
		true
	);
	require $startDir.'pageEnd.php';
?>