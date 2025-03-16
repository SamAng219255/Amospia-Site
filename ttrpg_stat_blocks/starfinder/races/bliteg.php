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
		"Bliteg", // $name=''
		[
			"Blitegs are descendants of demon's of pride that became native to the material plane after extended exposure."
		], // $desc=[]
		[
			'dex' => +2,
			'cha' => +2,
			'wis' => -2
		], // $stats=[]
		4, // $hp=0
		"Blitegs are Medium monstrous humanoids.", // $size_type=''
		[
			"Multiarmed" => "Blitegs have the multiarmed (6) universal creature rule.",
			"Serpentine Coils" => "Blitegs gain a +2 species bonus to grapple combat maneuver checks.",
			"Silver Tongue" => "Blitegs gain a +2 species bonus to Bluff and Diplomacy checks.",
			"Cold Iron Weakness" => "Contact with at least a handful of cold iron deals 1d6 damage per round to a bliteg. This effect is negated by the environmental protections built into most armor.",
			"Fragile Pride" => "Blitegs are so prideful that humbling experiences can be physically painful. Any creature that is aware of a recent major failure (such as a critical failure roll or a rather dumb action) of the bliteg can make an Intimidate check as a move action to taunt and humiliate the bliteg. This check is opposed by a Will save by the bliteg. On a successful check, the bliteg takes 1d4 points of nonlethal damage plus 1d4 for every 2 levels over level 5."
		]  // $traits=[]
	);
	blockSF(
		"About the Bliteg",
		"race-description",
		[],
		false,
		[
			[
				'title' => 'Physiology',
				'spaced' => true,
				'texts' => quick_array([
					"Blitegs are a six armed humanoid species with pointed ears and a long serpentine tail in place of legs. Their bodies are covered in scales that form a rainbow marbling across their bodies.",
					"Blitegs are known for being an incredibly arrogant and self-centered species, but also simultaneously being effective \"hype-men\" to build up others' self confidence. Unfortunately, they are fond of doing so to dangerous degrees, leading to their victims getting themselves into significant trouble.",
					"Blitegs possess sexual dimorphism typical of most humanoid species including humans but are also sequential hermaphrodites, being able to transition their bodies between sexes in the course of a 24 hour period. They can also transition their bodies to various in-between stages to become either neuter or simultaneous hermaphrodites. They can also transition different regions of their bodies separately to control which parts of their forms take on the traits of either sex."
				])
			]
		],
		true
	);
	require $startDir.'pageEnd.php';
?>