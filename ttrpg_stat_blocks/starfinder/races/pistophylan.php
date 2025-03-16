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
		"Pistophylan", // $name=''
		[
			"Pistophylans are descendants of outsiders from the plane of Hell that became native to the material plane after extended exposure.",
			"Pistophylans are tall rust-colored humanoids with a crown of large horns atop their heads. Pistophylans tend to have particularly sharp features. Pistophylans are known to be shrewd dealers and enjoy making arrangements and contracts to see how much they can be used to benefit themselves.",
			"Pistophylans often find work as lawyers and other legal professionals throughout the galaxy."
		], // $desc=[]
		[
			'int' => +2,
			'cha' => +2,
			'str' => -2
		], // $stats=[]
		4, // $hp=0
		"Pistophylans are Medium humanoids with the pistophylan subtype.", // $size_type=''
		[
			"Darkvision" => "Pistophylans can see up to 60 feet in the dark.",
			"Legal Experts" => "Pistophylans gain a +2 bonus of Profession (lawyer) checks and can use Profession (lawyer) to Recall Knowledge about laws in place of Culture. Pistophylans also gain a +2 bonus on checks to hide or discover hidden terms and conditions in agreements."
		]  // $traits=[]
	);
	require $startDir.'pageEnd.php';
?>