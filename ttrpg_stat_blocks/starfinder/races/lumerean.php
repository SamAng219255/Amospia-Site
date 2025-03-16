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
		"Lumerean", // $name=''
		[
			""
		], // $desc=[]
		[
			'con' => +2,
			'int' => +2,
			'str' => -2
		], // $stats=[]
		4, // $hp=0
		"Lumereans are Medium humanoids with the aquatic and lumerean subtypes.", // $size_type=''
		[
			"Aquatic" => "Lumereans have the water breathing universal creature rule.",
			"Light Resistance" => "Lumereans gain a +2 bonus to saving throws against effects that cause penalties to sight-based vision (such as the dazzled or blinded conditions) caused by lights.",
			"Lumerean Movement" => "Lumereans have a 40-foot swim speed and no land speed.",
			"Machinations" => "Lumereans gain a +2 bonus to Engineering checks.",
			"Surface Crawler" => [
				"Lumereans have created many mechanical marvels to be able to dwell at the water's surface, the most mobile of which being the surface crawler. A surface crawler is a six-legged mechanical platform with an almost bowl shaped surface. This surface holds a sphere of water that is suspended on its surface and which is held in place by a hybrid energy field. The pilot can ride the device inside the bubble and can use their tendrils to direct its movement.",
				"While piloting the crawler, a lumerean gains a 30-foot base speed. The bubble also exchanges gasses with the environment and they are able to breathe as long as the bubble is in breathable water or air and they are affected by compounds in the air or water normally. The crawler can activate environmental protections as though it were armor and can store 20 charges as mechanical energy. These charges can be restored using a battery or by mechanical means such as a waterwheel. The surface of the bubble also provides some protection from attacks and grants a +1 bonus to both KAC and EAC though this does not stack with armor. A surface crawler costs 230 credits. A piloted crawler is treated as being worn like armor for all purposes and does not occupy a larger area than a lumerean.",
				"A lumerean can also attach surface crawler legs to other armor but they require the environmental protections to remain active while they are outside of the water in order to breathe. Adding the crawler legs takes the same time as crafting an item and costs 100 credits."
			]
		]  // $traits=[]
	);
	blockSF(
		"About the Lumerean",
		"race-description",
		[],
		false,
		[
			[
				'title' => 'Physiology',
				'spaced' => true,
				'texts' => quick_array([
					"Lumereans have a humanoid head, torso, and arms, but their torso terminates in only rubbery tendrils. Their skin is rubbery with a turquoise hue and numerous large wart-like bumps. Their arms and hands have become somewhat vestigial and are too weak to lift much but are able to project and direct a form of finely controlled telekinesis that produces forces mimicking the shapes of their hands just beyond them. When using surface crawlers and similar technology, this generally places the \"held\" items just outside of the bubble."
				])
			]
		],
		true
	);
	require $startDir.'pageEnd.php';
?>