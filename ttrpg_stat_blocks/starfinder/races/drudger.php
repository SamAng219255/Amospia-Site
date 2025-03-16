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
		"Drudger", // $name=''
		[
			"Drudgers are descendants of demons of sloth that became native to the material plane after extended exposure."
		], // $desc=[]
		[
			'str' => +2,
			'con' => +2,
			'dex' => -2
		], // $stats=[]
		2, // $hp=0
		"Drudgers are Small humanoids with the drudger subtype.", // $size_type=''
		[
			"Carrier" => "Drudgers increase their carrying capacity by 50%.",
			"Drudger Movement" => "Drudgers have a 20-foot land speed",
			"Petrify" => "When a drudger takes the total defense action, they gain a +6 bonus to their Armor Class instead of the normal +4 bonus, and they also gain the unflankable universal creature rule until the start of their next turn.",
			"Rapid Recovery" => "Once per day, when a drudger takes a 10-minute rest to regain Stamina Points, they can additionally recover Hit Points as though they'd taken a full night's rest.",
			"Resistant" => "Drudgers receive a +2 bonus to saves against bleed, fear, and poison.",
			"Cold Iron Weakness" => "Contact with at least a handful of cold iron deals 1d6 damage per round to a drudger. This effect is negated by the environmental protections built into most armor."
		]  // $traits=[]
	);
	blockSF(
		"About the Drudger",
		"race-description",
		[],
		false,
		[
			[
				'title' => 'Physiology',
				'spaced' => true,
				'texts' => quick_array([
					"Drudgers are short humanoids with bulbous bodies that would generally prefer to sleep over all else. Despite this, they can be bullied with little effort and often form rather effective slave populations. Because of this, and because the universe won't seem to let them sleep, drudgers are generally spiteful to all other races. Drudgers possess the ability to effectively temporarily petrify their epidermal layer to grant increased defense."
				])
			]
		],
		true
	);
	require $startDir.'pageEnd.php';
?>