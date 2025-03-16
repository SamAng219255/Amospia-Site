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
		"Juhzabor", // $name=''
		[
			"Juhzabors are descendants of outsiders from the Maelstrom that became native to the material plane after extended exposure."
		], // $desc=[]
		[
			'str' => +2,
			'cha' => +2,
			'wis' => -2
		], // $stats=[]
		4, // $hp=0
		"Juhzabors are Medium monstrous humanoids.", // $size_type=''
		[
			"Amorphous" => "Juhzabors have the amorphous universal creature rule.",
			"Darkvision" => "Juhzabors can see up to 60 feet in the dark.",
			"Eclectic Knowledge" => "Juhzabors choose two skills at character creation and add those to their list of class skills.",
			"Juhzabor Movement" => "Juhzabors have a 30-foot land speed and a 20-foot extraordinary fly speed with perfect maneuverability.",
			"Natural Attack" => "Juhzabors can attack with a special unarmed strike that deals lethal damage, doesn't count as archaic, and threatens squares. Each time a juhzabor uses this unarmed strike, they can choose if it deals bludgeoning, piercing, or slashing damage. Juhzabors gain a special version of the Weapon Specialization feat with this unarmed strike at 3rd level, allowing them to add 1–1/2 × their character level to their damage rolls for this unarmed strike (instead of just adding their character level, as usual)."
		]  // $traits=[]
	);
	blockSF(
		"About the Juhzabor",
		"race-description",
		[],
		false,
		[
			[
				'title' => 'Physiology',
				'spaced' => true,
				'texts' => quick_array([
					"Juhzabors are largely humanoid in shape, though they lack legs, instead having a long, thick tail that they use for support and movement. Their body is covered in a smooth, scaly skin that slowly transitions between marbled iridescent hues, and their face bears prominent tusks reminiscent of an orc. Their arms are capable of changing shape and can transform into a variety of metallic weapons. Juhzabors' torsos possess a wide shouldered and heavily muscled build.",
					"Juhzabors are a whimsical and chaotic species that generally enjoy strangeness and unexpectedness.",
					"Juhzabors have a continuous physiological need for a guiding mission, a holdover from the temporary nature of their ancestors. If a juhzabor is ever without an assigned job their health rapidly deteriorates. Luckily, juhzabor are quick to acquire assignments, including rather unorthodox ones. Juhzabors also pursue any assignments they possess with a surprising willingness and diligence. When a juhzabor is born, their parents give them their first task which acts as their name. These are often difficult to accomplish and rather strange such as \"lick the outside of Absalom Station.\" These are often shortened to only a few words when spoken in normal conversation. ",
					"Juhzabors generally have three categories of tasks that they maintain at any given time. The first are long term goals that often act to keep them in good health. These are often either strange and whimsical, such as the ones given at birth, or tasks they are deeply invested in, such as avenging the death of a loved one. Most juhzabors will have one to two of these at a time. The second category are the various day to day tasks and are usually composed of work assignments and hobby projects. Most juhzabors have between two and five of these for each job or hobby they maintain. The third category are highly whimsical ones, dictated by whatever strikes their fancy at the moment. Juhzabors could have up to 20 of these at a time or could have none."
				])
			]
		],
		true
	);
	require $startDir.'pageEnd.php';
?>