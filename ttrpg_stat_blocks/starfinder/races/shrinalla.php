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
		"Shrinalla", // $name=''
		[
			"Shrinalla come from several diverse backgrounds but are all planar scions of celestial ancestry with a divine gift for music."
		], // $desc=[]
		[
			'dex' => +2,
			'cha' => +2,
			'str' => -2
		], // $stats=[]
		4, // $hp=0
		"Shrinalla are Medium outsiders with the native subtype. Most shrinalla also have an additional subtype matching the race of celestial they are related to such as agathion, angel, archon, or azata. They do not receive the normal benefits of this additional subtype however.", // $size_type=''
		[
			"Celestial Music" => "Shrinalla gain a +2 bonus to Mysticism and Profession (musician) checks.",
			"Celestial Resistance" => "A shrinallan gains a +2 bonus to saving throws against petrification and poison and resistance 5 to electricity.",
			"Darkvision" => "Shrinallas can see up to 60 feet in the dark."
		]  // $traits=[]
	);
	blockSF(
		"About the Shrinalla",
		"race-description",
		[],
		false,
		[
			[
				'title' => 'Physiology',
				'spaced' => true,
				'texts' => quick_array([
					"Shrinalla are a variant of celestial planr scion with specific ties to a race of musical celestial such as a trumpet archon, choral angel, or lilend azata. They generally appear as humans or other humanoid races though they have an incredible affinity for music. When creating music, it is sometimes possible to see a vision of the race of celestial they get their affinity from as a glow around them."
				])
			]
		],
		true
	);
	require $startDir.'pageEnd.php';
?>