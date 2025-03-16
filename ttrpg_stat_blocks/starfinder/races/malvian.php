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
		"Malvian", // $name=''
		[
			"Malvians are descendants of outsiders from the plane of Abaddon that became native to the material plane after extended exposure."
		], // $desc=[]
		[
			'str' => +2,
			'con' => +2,
			'int' => -2
		], // $stats=[]
		4, // $hp=0
		"Malvians are Medium humanoids with the necrospatium subtype though, for effects targeting creatures by type, they count as both humanoids and as undead (whichever type allows an ability to affect them for abilities that affect only one type, and whichever is worse for abilities that affect both types).", // $size_type=''
		[
			"Blindsense (Life)" => "Malvians can detect the presence and location of living creatures within 30 feet. Unless they can otherwise see the creature, such creatures still have total concealment from the malvian.",
			"Carrier" => "Malvians increase their carrying capacity by 50%.",
			"Exceptional Resilience" => "Malvians gain a +2 bonus to saving throws against fear or sleep.",
			"Multiarmed" => "Malvians gain the multiarmed (4) universal creature rule.",
			"Negative Energy Affinity" => "Malvians are harmed by positive energy and healed by negative energy like undead."
		]  // $traits=[]
	);
	blockSF(
		"About the Malvian",
		"race-description",
		[],
		false,
		[
			[
				'title' => 'Physiology',
				'spaced' => true,
				'texts' => quick_array([
					"Malvians are four-armed humanoids characterized by massive bags beneath their eyes, prominent scars along their bodies, and a perpetual look of complete exhaustion and apathy.",
					"Like other necrospatiums, each member possesses different faint features from countless humanoid races. It is said that the longer you look at a necrospatium, the more races you can see, but somehow the more they look familiar.",
					"Malvians form underground, just below the surface, on the sites of the many abandoned factories, mines, plantations, and other such facilities that dot the Necroterra. The Necroterra is a rogue planet deep in interstellar space that is the homeworld of the necrospatium races."
				])
			]
		],
		true
	);
	require $startDir.'pageEnd.php';
?>