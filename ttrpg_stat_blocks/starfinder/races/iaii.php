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
		"I'ai'i", // $name=''
		[
			""
		], // $desc=[]
		[
			'dex' => +2,
			'wis' => +2,
			'con' => -2
		], // $stats=[]
		2, // $hp=0
		"I'ai'i are Medium monstrous humanoids.", // $size_type=''
		[
			"I'ai'i Movement" => "I'ai'i have a 20-foot base speed and a 40-foot supernatural fly speed with average maneuverability.",
			"Innate Magic" => "I'ai'i can cast ii/detect magic/ii and ii/token spell/ii as spelllike abilities at will and ii/wisp ally/ii as a spelllike ability once per day.",
			"Low-Light Vision" => "I'ai'i can see in dim light as if it were normal light.",
			"Multiarmed" => "I'ai'i gain the multiarmed (4) universal creature rule.",
			"Arcanivorous" => "I'ai'i are arcanivorous, meaning they consume magic. In addition to normal sustenance, they must spend at least 1 hour on a high magic world each day. They can go without consuming magic as such for 3 days, after which they must attempt Constitution checks to avoid starvation. Additionally, they can consume either their own prepared mystic spells or those of another willing mystic to satisfy their hunger. Each day, they must consume at least one prepared spell of 1st level or higher. I'ai'i that have not consumed magic in the past 36 hours cannot use their ii/token spell/ii and ii/wisp ally/ii spelllike abilities."
		]  // $traits=[]
	);
	blockSF(
		"About the I'ai'i",
		"race-description",
		[],
		false,
		[
			[
				'title' => 'Physiology',
				'spaced' => true,
				'texts' => quick_array([
					"I'ai'i are humanoid creatures with four arms and graceful bodies. Their faces are generally human but they have long ears that hang down on either side of their head all the way to their shoulders and a pair of feathery antennae that extend from the crown of their head and shimmer in pastel tones whilst absorbing magic. They have fair human-like skin with long black hair that extends from their heads and black fuzz that covers their ears. Their eyes do not possess visible irises or white portions but are completely black and incredibly sensitive to light.",
					"I'ai'i have a pair of moth-like wings that extend from the region around their shoulder blades. When extended these wings reveal intricate moving patterns of pastel colors composed of magic gathered on their surface. When folded up, these wings resemble cloth as though they were a cloak of some sort. I'ai'i often wear unique cloaks that are able to both hide and protect their wings while they are folded up."
				])
			]
		],
		true
	);
	require $startDir.'pageEnd.php';
?>