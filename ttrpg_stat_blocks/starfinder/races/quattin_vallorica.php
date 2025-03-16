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
		"Quattin Vallorica", // $name=''
		[
			""
		], // $desc=[]
		[
			'dex' => +2,
			'wis' => +2,
			'str' => -2
		], // $stats=[]
		2, // $hp=0
		"Quattin vallorica are Medium humanoids with the quattin vallorica subtype.", // $size_type=''
		[
			"Collective" => "Quattin vallorica gain a +2 bonus to skill checks for the aid another action. A creature using the aid another action to assist a quattin vallorica's skill check gains a +2 bonus to their check.",
			"Four Heads…" => "Quattin vallorica gain a +2 bonus to saving throws against mind-affecting effects.",
			"Limited Telepathy" => "Chromacephs have limited telepathy to a range of 60 feet which allows them to communicate with creatures in range with whome they share a language.",
			"Low-Light Vision" => "Quattin vallorica can see in dim light as if it were normal light.",
			"Sheltering" => "Quattin vallorica increase the bonuses to AC and Reflex saves granted by partial cover, cover, and improved cover by 1."
		]  // $traits=[]
	);
	blockSF(
		"About the Quattin Vallorica",
		"race-description",
		[],
		false,
		[
			[
				'title' => 'Physiology',
				'spaced' => true,
				'texts' => quick_array([
					"Each quattin vallorica is actually 4 creatures pretending to be one. Long ago on their homeworld there existed another intelligent humanoid race of predators that hunted the quattin vallorica. The quattin vallorica, to survive, adapted a strategy of stacking multiple of their smaller frames into a set of heavy clothing belonging to the predatory race. This way they were able to somewhat hide and blend in with the other race. Over time, the quattin vallorica evolved various other adaptations to increase the quality of their disguise including varied morphologies to disguise as specific protruding parts and telepathy to be able to better coordinate their movements. ",
					"Somewhere along the line, the predatory race went extinct but the quattin vallorica were entirely unaware, unable to tell each other apart from the predatory race themselves anymore. Eventually the discovery was made but the quattin vallorica have the fear of being revealed so deeply ingrained in their minds through thousands of generations of evolution that they continue to mimic the now extinct race. ",
					"Each quattin vallorica is technically 4 separate creatures: one for the legs, one for the head, one for the right arm, and one for the left arm. These creatures, however, are connected by something of a telepathic hive mind and function as a single creature, including sharing health conditions and death. Quattin vallorica practically never remove their disguises in front of others and do everything in their power to prevent methods of seeing through the disguise such as using x-ray technology."
				])
			]
		],
		true
	);
	require $startDir.'pageEnd.php';
?>