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
		"Marqua", // $name=''
		[
			""
		], // $desc=[]
		[
			'str' => +2,
			'int' => +2,
			'cha' => -2
		], // $stats=[]
		4, // $hp=0
		"Marquas are Medium vermin with the aquatic and water subtypes though, for effects targeting creatures by type, they count as both vermin and as outsiders with the elemental subtype (whichever type allows an ability to affect them for abilities that affect only one type, and whichever is worse for abilities that affect both types).", // $size_type=''
		[
			"Amphibious" => "Marquas are able to breathe both air and water and have the water breathing and amphibious universal creature rules.",
			"Marqua Movement" => "Marquas have a base speed of 20 feet and a swim speed of 40 feet.",
			"Natural Weapons" => "Marquas can attack with a special unarmed strike that deals lethal bludgeoning and piercing damage, doesn't count as archaic, threatens squares, and has the grab universal creature rule. Marquas gain a special version of the Weapon Specialization feat with this unarmed strike at 3rd level, allowing them to add 1–1/2 × their character level to their damage rolls for this unarmed strike (instead of just adding their character level, as usual).",
			"Senses" => "Marquas gain darkvision 60' while they are within water though this vision doesn't extend above the surface of the water.",
			"Skill Specialization" => "Marquas gain a +2 bonus to Athletics and Engineering checks."
		]  // $traits=[]
	);
	blockSF(
		"About the Marqua",
		"race-description",
		[],
		false,
		[
			[
				'title' => 'Physiology',
				'spaced' => true,
				'texts' => quick_array([
					"Marquas are segmented arthropods not dissimilar to lobsters though their bodies are decidedly flatter, more like a crab's, and their tails stick straight back and wave up and down to provide locomotion. While on land, their legs are able to lift the front of their bodies though their tails tend to drag behind them and occasionally act as an additional stabilizing leg."
				])
			],
			[
				'title' => 'Home World',
				'spaced' => true,
				'texts' => quick_array([
					"The homeworld of the marquas is an ocean planet with no real land though large floating islands of organic construction similar to reefs can be found occasionally floating on the surface. Marquas tend to favor life near these islands and have built both underwater and above water structures attached to them as well as entirely artificial islands that mimic the natural ones."
				])
			]
		],
		true
	);
	require $startDir.'pageEnd.php';
?>