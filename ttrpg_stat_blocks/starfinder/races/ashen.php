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
		"Ashen", // $name=''
		[
			""
		], // $desc=[]
		[
			'con' => +2,
			'cha' => +2,
			'int' => -2
		], // $stats=[]
		4, // $hp=0
		"Ashen are Medium outsiders with the elemental and fire subtypes. ", // $size_type=''
		[
			"Fiery Form" => "Ashen have resistance 5 to fire and, when an ashen takes cold damage, it becomes fatigued for 1 round (Fortitude negates); this doesn't cause an already fatigued ashen to become exhausted.",
			"Filtered Breathing" => "An ashen's breathing is unaffected by airborne particulates such as ash, sand, or dust in the air.",
			"Humanoid Mimicry" => "An ashen's form and mind mimic that of a humanoid which leaves it rather vulnerable where another elemental wouldn't be. An ashen does not possess any of the standard elemental immunities and, for effects targeting creatures by type, they counts as outsiders and as humanoids (whichever type allows an ability to affect them for abilities that affect only one type, and whichever is worse for abilities that affect both types).",
			"Senses" => "Ashen possess both low-light vision and darkvision 60', allowing them to see in dim light as though it were normal light and to see perfectly in darkness up to 60 feet though only in black and white. Ashen also possess the sense through (ash and smoke) ability which allows them to see through see despite ash or smoke in the air."
		]  // $traits=[]
	);
	blockSF(
		"About the Ashen",
		"race-description",
		[],
		false,
		[
			[
				'title' => 'Physiology',
				'spaced' => true,
				'texts' => quick_array([
					"Ashen take a generally humanoid form that appears dirty and covered in ash and soot when, in reality, this form isn't covered but is rather made of volcanic ash and soot. Their eyes glow with a red-orange light revealing their internal flame. To keep their flame alive they must continue to breathe oxygen but they do not require food or other sustenance.",
					"Ashen possess a dimorphism matching the sexual dimorphism of humans and similar mammalian humanoids despite being elementals. This is to better disguise themselves as humanoids. ",
					"Ashen are created, fully formed, from a network of lava tubes on their home world. No one has ever seen this process and it is not understood though it has been determined that the ashen population of their home world influences the rate of production with a higher population encouraging a higher rate of production up to a point at which it is diminished again, forming a stable population count."
				])
			]
		],
		true
	);
	require $startDir.'pageEnd.php';
?>