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
		"Cyralien", // $name=''
		[
			"Cyraliens are descendants of outsiders from the plane of Elysium that became native to the material plane after extended exposure."
		], // $desc=[]
		[
			'dex' => +2,
			'wis' => +2,
			'cha' => +2,
			'str' => -4
		], // $stats=[]
		2, // $hp=0
		"Cyraliens are Tiny humanoids with the cyralien subtype though, for effects targeting creatures by type, they count as both humanoids and as fey (whichever type allows an ability to affect them for abilities that affect only one type, and whichever is worse for abilities that affect both types).", // $size_type=''
		[
			"Cyralien Movement" => "Cyraliens have a 20 foor land speed and 40 foot supernatural fly speed with average maneuverability.",
			"Energy Resistance" => "Cyraliens gain resistance to electricity 5.",
			"Low-Light Vision" => "Gumodeuza can see in dim light as if it were normal light.",
			"Mystical Performance" => "Cyraliens gain a +2 bonus to checks with Profession skills based on performing arts such as Profession (musician) or Profession (dancer) as well as to Mysticism checks."
		]  // $traits=[]
	);
	blockSF(
		"About the Cyralien",
		"race-description",
		[],
		false,
		[
			[
				'title' => 'Physiology',
				'spaced' => true,
				'texts' => quick_array([
					"Cyraliens are diminutive humanoids, standing at just 2 feet tall, with wings sprouting from their backs. Two primary races exist: prospil cyraliens, adorned with beautiful butterfly wings, and dersel cyraliens, sporting more subdued moth wings. While physically similar, prospil cyraliens are generally bubbly and outgoing, while dersel cyraliens are more laid-back, solemn, or even stern. As a whole, cyraliens are a whimsical people, guided by their hearts and passionate about nurturing and sharing their talents. Their friendly nature is legendary, with a knack for banishing frowns with song, dance, joke, or any other delight.",
					"Cyraliens tend to face a number of challenges when working with other races due to the extreme differences in height. Luckily, their wings are able to help them navigate and reach controls but they often have to acquire special-made tools and devices to accommodate their size. For this reason, among others, many cyraliens become mystics or other spellcasters and use their magic to compensate for their size. Cyraliens tend to have strong connections to Elysium and to Desna that they use to draw on mystic powers."
				])
			]
		],
		true
	);
	require $startDir.'pageEnd.php';
?>