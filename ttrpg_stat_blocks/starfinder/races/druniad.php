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
		"Druniad", // $name=''
		[
			""
		], // $desc=[]
		[
			'con' => +2,
			'wis' => +2,
			'str' => -2
		], // $stats=[]
		4, // $hp=0
		"Druniads are Medium humanoids with the aquatic and druniad subtypes.", // $size_type=''
		[
			"Aquatic" => "Druniads have the water breathing universal creature rule.",
			"Druniad Movement" => "Druniads have a 40-foot swim speed and no land speed.",
			"Plantlike" => "Druniads have the plantlike universal creature rule. For effects targeting creatures by type, druniads count as both humanoids and plants (whichever type allows an ability to affect them for abilities that affect only one type, and whichever is worse for abilities that affect both types). They also receive a +2 racial bonus to saving throws against mind-affecting effects, paralysis, poison, polymorph, sleep, and stunning, unless the effect specifies that it works against plants.",
			"Natural Connection" => "Druniads gain a +2 bonus to Life Science checks and can cast sprout as a spelllike ability at will.",
			"Leg Growth" => "In order to better interact with non aquatic races, druniads have learned to adapt their lower tendrils to become both stronger and longer to be able to stand on them as well as adapt their form to be able to breathe air. A druniad wishing to undergo this process must spend 1 week adapting their vine-like tendrils after which they gain a 20-foot base speed and gain the amphibious universal creature rule."
		]  // $traits=[]
	);
	blockSF(
		"About the Druniad",
		"race-description",
		[],
		false,
		[
			[
				'title' => 'Physiology',
				'spaced' => true,
				'texts' => quick_array([
					"Druniads have a humanoid head, torso, and arms but only vine-like tendrils extend below their narrow waist. Most of their body is made of the same dark-green vine-like tendrils except for their face which appears like an expressionless white mask."
				])
			]
		],
		true
	);
	require $startDir.'pageEnd.php';
?>