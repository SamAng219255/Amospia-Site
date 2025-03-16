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
		"Cedit", // $name=''
		[
			"Numerites are descendants of outsiders from the plane of Nirvana that became native to the material plane after extended exposure."
		], // $desc=[]
		[
			'str' => +2,
			'dex' => +2,
			'int' => -2
		], // $stats=[]
		4, // $hp=0
		"Cedita are Medium humanoids with the aquatic and cedit subtypes.", // $size_type=''
		[
			"Aquatic" => "Cedita have the water breathing and amphibious universal creature rules.",
			"Blindsense (Vibration)" => "Cedita can detect the presence and location of creatures and objects within 30 feet using the vibrations in the air or water.",
			"Cedit Movement" => "Cedita have a 30-foot swim speed and a 20-foot extraordinary fly speed with clumsy maneuverability. They have no land speed.",
			"Cold lightning" => "Cedita have resistance 5 to cold and electricity. Additionally when they make a melee attack, they can change half of the damage to either cold or electricity. If at least half of the attack's damage is either cold or electricity damage, the damage becomes half cold and half electricity. Otherwise, the cedit must choose whether half of the damage becomes cold or electricity, replacing one of the damage types if the attack damage is already split between two damage types.",
			"Spellcasting" => "Cedita can cast ii/companion bond/ii once per day as a spell-like ability and can cast ii/distant speech/ii and ii/stabilize/ii as at will spell-like abilities. These spells' caster level is equal to character level."
		]  // $traits=[]
	);
	blockSF(
		"About the Cedit",
		"race-description",
		[],
		false,
		[
			[
				'title' => 'Physiology',
				'spaced' => true,
				'texts' => quick_array([
					"Cedita have a generally human torso, head, and arms but below that is the tail of an orca."
				])
			]
		],
		true
	);
	require $startDir.'pageEnd.php';
?>