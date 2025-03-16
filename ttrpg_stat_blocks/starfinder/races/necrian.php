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
		"Necrian", // $name=''
		[
			""
		], // $desc=[]
		[
			'any' => +2
		], // $stats=[]
		4, // $hp=0
		"Necrians are Medium humanoids with the necrian subtype though, for effects targeting creatures by type, they count as both humanoids and as undead (whichever type allows an ability to affect them for abilities that affect only one type, and whichever is worse for abilities that affect both types).", // $size_type=''
		[
			"Darkvision" => "Necrians can see up to 60 feet in the dark.",
			"Fire Resistance" => "Necrians have resistance 5 against fire.",
			"Necromantic Origin" => "Necrians are harmed by positive energy and healed by negative energy like other undead. They take no penalties from energy drain effects, but can still be killed if they accrue more negative levels then they have class levels. After 24 hours, any negative levels a necrian has taken are removed without the need for an additional saving throw.",
			"Skilled" => "Necrians gain an additional skill rank at 1st level and each level thereafter.",
			"Undead Resilience" => "Necrians gain a +2 bonus on saves against bleed, death, and fear effects."
		]  // $traits=[]
	);
	blockSF(
		"About the Necrian",
		"race-description",
		[],
		false,
		[
			[
				'title' => 'Physiology',
				'spaced' => true,
				'texts' => quick_array([
					"Necrians are undead adjacent humanoids that are living creatures despite being animated by the forces of necromancy and undeath. They resemble humans with pallid skin that ranges from pale gray to charcoal black. Their most prominent features are their exposed bones and eyes of flame. The region of their skull and jawbone that makes up the front of their face extend through their skin and are plainly visible, giving them a look like a skeleton while their eye sockets hold only candle-like flames instead of normal eyes. Their bones pierce the surface of skin in other locations as well, being visible on their ribs, their spine, the outside of their forearms, the backs of their hands and fingers, the front of their lower legs, and the tops of their feet and toes.",
					"Their teeth and jaw are only visible going back to their canine teeth, allowing them to hold food in their mouths while chewing but making it impossible to chew with their mouth closed."
				])
			]
		],
		true
	);
	require $startDir.'pageEnd.php';
?>