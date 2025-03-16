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
		"Wysp", // $name=''
		[
			"Wysps are small spherical elementals with a curious and friendly nature that spawned from the resonance of the elemental and ethereal planes."
		], // $desc=[]
		[
			'dex' => +2,
			'cha' => +2,
			'str' => -2
		], // $stats=[]
		2, // $hp=0
		"Wysps are Tiny outsiders with the elemental subtype.", // $size_type=''
		[
			"Darkvision" => "Wysps can see up to 60 feet in the dark.",
			"Elemental Song" => "As a swift action, a wysp can align their song with the resonance of a single elemental plane until the start of their next turn. The wysp may choose any of the elemental planes (Plane of Air, Plane of Earth, Plane of Fire, or Plane of Water) each time they use this ability. All creatures within 30 feet receive a +1 morale bonus to damage rolls with the energy type matching the chosen plane. (Electricity for the Plane of Air, Acid for the Plane of Earth, Fire for the Plane of Fire, and Cold for the Plane of Water)",
			"Planar Song" => "Wysps gain a +2 bonus to Mysticism and Profession (musician) and their singing is treated as a euphonic musical instrument.",
			"Wysp Movement" => "Wysps have a supernatural fly speed of 30 feet with average maneuverability but no land speed."
		]  // $traits=[]
	);
	require $startDir.'pageEnd.php';
?>