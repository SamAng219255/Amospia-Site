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
		"Kadurote", // $name=''
		[
			"Kadurotes are descendants of outsiders from the plane of Heaven that became native to the material plane after extended exposure."
		], // $desc=[]
		[
			'dex' => +2,
			'wis' => +2,
			'con' => -2
		], // $stats=[]
		4, // $hp=0
		"Kadurotes are Large aberrations.", // $size_type=''
		[
			"Aerobatic" => "Kadurotes gain a +2 bonus on Acrobatics checks.",
			"Amorphous" => "Kadurotes gain the amorphous universal creature rule and they don't take double damage from critical hits but are affected by critical hit effects normally.",
			"Energy Resistance" => "Kadurotes gain electricity resistance 5.",
			"Kadurote Movement" => "Kadurotes have a supernatural fly speed of 30 feet with perfect maneuverability and no land speed.",
			"Low-Light Vision" => "Kadurotes can see in dim light as if it were normal light.",
			"Luminous" => "Kadurotes glow, increasing the light level by one step within 10 feet."
		]  // $traits=[]
	);
	blockSF(
		"About the Kadurote",
		"race-description",
		[],
		false,
		[
			[
				'title' => 'Physiology',
				'spaced' => true,
				'texts' => quick_array([
					"These enchanting beings resemble delicate clouds of swirling lights, their ethereal forms glowing with a soft, otherworldly luminescence, reminiscent of fireflies on a warm summer evening. Their voices are like gentle breezes on a sunny day, airy and cheerful, imbuing all who hear them with a sense of joy and wonder. With an insatiable curiosity and a deep love for connection, the Kadurotes are known far and wide for their warm, friendly natures, ever eager to explore new realms and forge meaningful bonds with those they encounter. Like delicate wisps of cloud, they flit and flutter, their very presence seeming to bring light and laughter to even the darkest of corners."
				])
			]
		],
		true
	);
	require $startDir.'pageEnd.php';
?>