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
		"Susprax", // $name=''
		[
			"Suspraxes are descendants of outsiders from the plane of Abaddon that became native to the material plane after extended exposure."
		], // $desc=[]
		[
			'str' => +2,
			'con' => +2,
			'dex' => -2
		], // $stats=[]
		4, // $hp=0
		"Suspraxes are Medium humanoids with the necrospatium subtype though, for effects targeting creatures by type, they count as both humanoids and as undead (whichever type allows an ability to affect them for abilities that affect only one type, and whichever is worse for abilities that affect both types).", // $size_type=''
		[
			"Blindsense (Life)" => "Suspraxes can detect the presence and location of living creatures within 30 feet. Unless they can otherwise see the creature, such creatures still have total concealment from the susprax.",
			"Breath Stealing" => [
				"Creatures within 60 feet of a susprax get a feeling of being short of breath as air vanishes from their lungs and they must think about breathing instead of breathing automatically. For creatures holding their breath or using a limited source of breathable gases or fluids, they must make a Fortitude save each round or else lose an extra round of breath. The DC of this save is equal to 10 + half the susprax's level + their Constitution modifier. When not in combat, the GM may decide to use larger increments such as once per minute, once per 10 minutes, or once per hour. In this case, the creatures lose the same increment of available breath.",
				"A susprax can suppress or restore this aura as a standard action though they are discomforted whilst it is suppressed."
			],
			"Limited Telepathy" => "Suspraxes have limited telepathy to a range of 60 feet.",
			"Void Adaptation" => "Suspraxes possess the Void Adaptation universal creature rule which grants them immunity to natural cosmic rays (though not other sources of radiation) and the environmental effects of vacuum. They also do not breathe and possess the No Breath universal creature rule that grants them immunity to effects that require breathing (such as inhaled poison). This doesn't give them immunity to cloud or gas attacks that don't require breathing.",
			"Void Drift" => "While in the vacuum of space, suspraxes gain a supernatural fly speed of 10 feet with clumsy maneuverability.",
			"Negative Energy Affinity" => "Suspraxes are harmed by positive energy and healed by negative energy like undead."
		]  // $traits=[]
	);
	blockSF(
		"About the Susprax",
		"race-description",
		[],
		false,
		[
			[
				'title' => 'Physiology',
				'spaced' => true,
				'texts' => quick_array([
					"Suspraxes are humanoids whose skin and eyes show the characteristic sign of death by vacuum. Despite this, suspraxes are mostly alive, mostly because their forms seem to be almost undead. ",
					"Like other necrospatiums, each member possesses different faint features from countless humanoid races. It is said that the longer you look at a necrospatium, the more races you can see, but somehow the more they look familiar. ",
					"New suspraxes manifest, seemingly straight from the vacuum, around the Necroterra before slowly \"falling\" to the surface. The Necroterra is a rogue planet deep in interstellar space that is the homeworld of the necrospatium races."
				])
			]
		],
		true
	);
	require $startDir.'pageEnd.php';
?>