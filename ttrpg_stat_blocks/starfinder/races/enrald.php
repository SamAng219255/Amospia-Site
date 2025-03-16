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
		"Enrald", // $name=''
		[
			"Enralds are descendants of outsiders from the plane of Heaven that became native to the material plane after extended exposure."
		], // $desc=[]
		[
			'dex' => +2,
			'wis' => +2,
			'str' => -2
		], // $stats=[]
		2, // $hp=0
		"Enralds are Tiny aberrations.", // $size_type=''
		[
			"Darkvision" => "Enralds can see up to 60 feet in the dark.",
			"Energy Resistance" => "Enralds have resistance to electricity 5.",
			"Enrald Movement" => "Enralds have a supernatural fly speed of 30 feet with average maneuverability and no land speed.",
			"Exceptional Resilience" => "Enralds gain a +2 bonus on saving throws against poison and paralysis.",
			"Limited Telepathy" => "Enralds have limited telepathy to a range of 60 feet.",
			"Void Adaptation" => "Enralds possess the Void Adaptation universal creature rule which grants them immunity to natural cosmic rays (though not other sources of radiation) and the environmental effects of vacuum. They also do not breathe and possess the No Breath universal creature rule that grants them immunity to effects that require breathing (such as inhaled poison). This doesn't give them immunity to cloud or gas attacks that don't require breathing."
		]  // $traits=[]
	);
	blockSF(
		"About the Enrald",
		"race-description",
		[],
		false,
		[
			[
				'title' => 'Physiology',
				'spaced' => true,
				'texts' => quick_array([
					"Enralds are unusual creatures that appear native to the void between solar systems. In fact, they actually resemble small solar systems themselves. At their center, enralds have a single glowing crystal. Around that are several concentric rings of softly glowing energy that each hold a small round stone, nodule of metal, or occasionally a crystal of varying size. These orbit slowly, following the paths laid out by the rings of energy. Enralds interact with their surroundings by means of fine-tuned and short range telekinesis."
				])
			],
			[
				'title' => 'Psychology',
				'spaced' => true,
				'texts' => quick_array([
					"Enralds are a rather contemplative race, preferring to spend long periods of time largely dormant while they ponder on the mysteries of the cosmos."
				])
			]
		],
		true
	);
	require $startDir.'pageEnd.php';
?>