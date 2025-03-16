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
		"Ignesh", // $name=''
		[
			"Ignesh are descendants of outsiders from the plane of Elysium that became native to the material plane after extended exposure."
		], // $desc=[]
		[
			'str' => +2,
			'cha' => +2,
			'int' => -2
		], // $stats=[]
		6, // $hp=0
		"Ignesh are Medium humanoids with the ignesh subtype.", // $size_type=''
		[
			"Blindsense (Vibration)" => "Ignesh can detect the presence and location of creatures and objects within 30 feet by feeling the vibrations in the ground. Unless the ignesh can otherwise see the creature, the creature still has total concealment from the ignesh.",
			"Ignesh Movement" => "Ignesh have a 30-foot land speed and a 20-foot burrow speed.",
			"Obsidian Blade" => "Ignesh can conjure a knife or sword made of obsidian as a spell-like ability. This blade lasts until dismissed, destroyed, or it leaves the ignesh's hand. This blade deals 1d6 or less points of slashing damage depending on its length when summoned and has the archaic property. It otherwise functions as a standard longsword.",
			"Speakers and Healers" => "Ignesh gain a +2 bonus to checks made with the Medicine, Profession (orator), or Profession (poet) skills.",
			"Volcanic Resistance" => "Ignesh have fire resistance 5 and do not take damage from breathing in extreme heat.",
			"Volcanic Strikes" => "When an ignesh makes a melee attack, they can change half the damage of that attack to fire damage.",
			"Susceptibility to Cold" => "When an ignesh takes cold damage, they become fatigued for 1 round (Fortitude negates; DC equals 13 + 1/2 the level, item level, or CR of the source of the damage); this doesn't cause an already fatigued character to become exhausted."
		]  // $traits=[]
	);
	blockSF(
		"About the Ignesh",
		"race-description",
		[],
		false,
		[
			[
				'title' => 'Physiology',
				'spaced' => true,
				'texts' => quick_array([
					"Ignesh are humanoids with rough, dark-gray skin, bright orange-red hair, and eyes like glowing coals. Their internal temperature is naturally extremely high and their skin is painfully hot to the touch for most races though not hot enough to injure. Ignesh tend to prefer volcanic worlds. Ignesh enjoy creating, hearing, and sharing clever wordplay in all forms and almost any communication between them is often full of it. Most ignesh venerate the purifying power of flame."
				])
			]
		],
		true
	);
	require $startDir.'pageEnd.php';
?>