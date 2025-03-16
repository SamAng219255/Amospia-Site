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
		"Arnassi", // $name=''
		[
			""
		], // $desc=[]
		[
			'str' => +2,
			'dex' => +2,
			'cha' => -2
		], // $stats=[]
		4, // $hp=0
		"Arnassi are Medium humanoids with the arnassi and aquatic subtypes.", // $size_type=''
		[
			"Aquatic" => "Arnassi have the water breathing and amphibious universal creature rule.",
			"Arnassi" => "Arnassi have a 50-foot swim speed and a 20-foot base speed.",
			"Carrier" => "An arnassi increases their carrying capacity by 50%.",
			"Depth Adaptation" => "Arnassi are immune to the pressures of extreme depth underwater.",
			"Ferocious Charge" => [
				"Arnassi have the ferocious charge universal creature rule:",
				"When the creature charges, it can attempt a trip combat maneuver in place of the normal melee attack. In addition, the creature can charge without taking the normal charge penalties to its attack roll or AC. If the creature has another ability that allows it to charge without taking these penalties (such as the charge attack ability from the soldier's blitz fighting style), it also gains the ability to charge through difficult terrain."
			],
			"Low-Light Vision" => "Krotites can see in dim light as if it were normal light."
		]  // $traits=[]
	);
	blockSF(
		"About the Arnassi",
		"race-description",
		[],
		false,
		[
			[
				'title' => 'Physiology',
				'spaced' => true,
				'texts' => quick_array([
					"Arnassi are swift humanoids with heads shaped like that of seahorses. Their skin varies in color between many different colors and patterns."
				])
			]
		],
		true
	);
	require $startDir.'pageEnd.php';
?>