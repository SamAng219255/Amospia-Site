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
		"Bellar", // $name=''
		[
			"Bellars are descendants of demon's of wrath that became native to the material plane after extended exposure."
		], // $desc=[]
		[
			'str' => +2,
			'cha' => +2,
			'wis' => -2
		], // $stats=[]
		6, // $hp=0
		"Bellars are Large outsiders with the demon and native subtypes.", // $size_type=''
		[
			"Bellar Movement" => "Bellars have a 30-foot land speed and a 20-foot extraordinary fly speed with clumsy maneuverability.",
			"Fiery" => "When a bellar makes a melee attack, they can change half the damage of that attack to fire. They also have resistance to fire 5.",
			"Senses" => "Bellars have darkvision with range of 60 feet and blindsense (emotion) with a range of 30 feet.",
			"Spellcasting" => "Bellars gain ii/spark/ii and ii/psychokinetic hand/ii as spelllike abilities they can use at will and ii/summon monster/ii (1st level, Tiny demon only) as a spelllike ability they can use once per day.",
			"Cold Iron Weakness" => "Contact with at least a handful of cold iron deals 1d6 damage per round to a bellar. This effect is negated by the environmental protections built into most armor.",
			"Vulnerability to Peace" => "Bellars feel rejuvenated when sensing anger and rage with their emotion sense but feel weakened and drained when near individuals that feel only peace and love. When there are at least three more creatures that only have peaceful emotions than that are angry within range of their bellar's emotion sense, the bellar becomes fatigued."
		]  // $traits=[]
	);
	blockSF(
		"About the Bellar",
		"race-description",
		[],
		false,
		[
			[
				'title' => 'Physiology',
				'spaced' => true,
				'texts' => quick_array([
					"Bellars have a strong resemblance to their demonic ancestry: they are wide-shouldered humanoids with goat-like legs, hoofed feet, and a pair of horns that curve around and point forward on the sides of their head. Their bodies are covered in coarse black hair that emit black smoke and occasionally spit small flames.",
					"Bellars are known to be irritable and ill-tempered. Bellars enjoy riling up other creatures to experience their anger."
				])
			]
		],
		true
	);
	require $startDir.'pageEnd.php';
?>