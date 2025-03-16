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
		"Velkris", // $name=''
		[
			"Malvians are descendants of outsiders from the plane of Abaddon that became native to the material plane after extended exposure."
		], // $desc=[]
		[
			'dex' => +2,
			'con' => +2,
			'wis' => -2
		], // $stats=[]
		6, // $hp=0
		"Velkris are Medium humanoids with the necrospatium subtype though, for effects targeting creatures by type, they count as both humanoids and as undead (whichever type allows an ability to affect them for abilities that affect only one type, and whichever is worse for abilities that affect both types).", // $size_type=''
		[
			"Blindsense (Life)" => "Suspraxes can detect the presence and location of living creatures within 30 feet. Unless they can otherwise see the creature, such creatures still have total concealment from the susprax.",
			"Combat Intuition" => "Velkris gain an extra combat feat at first level.",
			"Warding Barbs" => "Velkris bristle with barbed wire and jagged metal. A creature attacking a velkris with a natural weapon or unarmed strike takes 1d4 piercing damage; as a reaction, the velkris can thrash and add their character level to the damage dealt.",
			"Negative Energy Affinity" => "Velkris are harmed by positive energy and healed by negative energy like undead."
		]  // $traits=[]
	);
	blockSF(
		"About the Velkris",
		"race-description",
		[],
		false,
		[
			[
				'title' => 'Physiology',
				'spaced' => true,
				'texts' => quick_array([
					"Velkris are humanoids whose forms are covered with various scars and seemingly open injuries. Barbed wire, jagged metal, chunks of broken weaponry and armor, and other clutter of old battlefields jut at strange angles through their skin, as though they carry countless battlefields, of wars long ended, with them.",
					"Like other necrospatiums, each member possesses different faint features from countless humanoid races. It is said that the longer you look at a necrospatium, the more races you can see, but somehow the more they look familiar.",
					"Velkris are formed emerging from piles of scrap on the various old battle sites that litter the Necroterra. The Necroterra is a rogue planet deep in interstellar space that is the homeworld of the necrospatium races."
				])
			]
		],
		true
	);
	require $startDir.'pageEnd.php';
?>