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
		"Imp", // $name=''
		[
			"Imps are descendants of outsiders from the plane of Hell that became native to the material plane after extended exposure."
		], // $desc=[]
		[
			'dex' => +2,
			'cha' => +2,
			'str' => -2
		], // $stats=[]
		2, // $hp=0
		"Imps are Tiny monstrous humanoids.", // $size_type=''
		[
			"Aerobatic" => "Imps gain a +2 bonus to Acrobatics checks.",
			"Darkvision" => "Juhzabors can see up to 60 feet in the dark.",
			"Imp Movement" => "Imps have a 20-foot land speed and a 30-foot extraordinary fly speed with perfect maneuverability.",
			"Limited Telepathy" => "Imps have limited telepathy with a range of 60 feet.",
			"Stinger" => [
				"Imps can attack with a special unarmed strike, in the form of their stinger, that deals lethal damage, doesn't count as archaic, and threatens squares.",
				"Additionally, an imp can load their stinger with venom as part of their attack action. Once loaded, a creature that takes at 1 point of damage from the stinger is poisoned and the stinger is no longer loaded. Once an imp loads their sting it remains loaded until they successfully deal damage to an opponent. They cannot load their sting again until they've spent a Resolve Point to recover Stamina Points after a 10-minute rest. They also cannot load their sting if it is already loaded.",
				"ii/Imp Venom/ii; bb/Type/bb poison (injury); bb/Save/bb Fortitude DC 10 + the imp's level + their Constitution modifier; bb/Track/bb Dexterity; bb/Frequency/bb 1/round for 6 rounds; bb/End State/bb Immobile",
				"Imps gain a special version of the Weapon Specialization feat with their sting at 3rd level, allowing them to add 1–1/2 × their character level to their damage rolls for this unarmed strike (instead of just adding their character level, as usual)."
			],
			"Silver Weakness" => "Contact with at least a handful of silver deals 1d6 damage per round to an imp. This effect is negated by the environmental protections built into most armor."
		]  // $traits=[]
	);
	blockSF(
		"About the Imp",
		"race-description",
		[],
		false,
		[
			[
				'title' => 'Physiology',
				'spaced' => true,
				'texts' => quick_array([
					"Imps are rather small humanoids with bat-like wings on their backs and rust-red skin. They also sport a scorpion-like tail that can be used to sting threats."
				])
			],
			[
				'title' => 'Psychology',
				'spaced' => true,
				'texts' => quick_array([
					"Imps are a rather loyal species and generally hang out and work in tight-knit groups of fellow imps often called \"cackles\" or \"clouds\". Imps are also known to be \"bad idea generators\". Most imps will constantly barrage those around them with \"suggestions\" that are generally really bad ideas (and often quite violent) but that the imp finds to be comical. They will also play pranks whenever given the chance.",
					"Most other species cannot stand working near imps but cackles often find work deep in the engine bays of ships where they can fit through small access ports and around machinery as well as where no one else has to deal with them though they often result in seemingly targeted malfunctions."
				])
			]
		],
		true
	);
	require $startDir.'pageEnd.php';
?>