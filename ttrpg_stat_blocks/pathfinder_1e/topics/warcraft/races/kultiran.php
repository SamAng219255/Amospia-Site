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
	raceBlockAuto(
		'Kul Tiran',
		11,
		'',
		'',
		'',
		'',
		'',
		'',
		'',
		'',
		[
			'any' => 2
		],
		'Humans are a diverse and adaptable race.',
		[
			'bb/Humanoid/bb: Kul tirans are humanoid creatures with the human subtype.',
			'bb/Medium/bb: Kul tirans are Medium creatures and have no bonuses or penalties due to their size.',
			'bb/Normal Speed/bb: Kul tirans have a base speed of 30 feet.',
			'bb/Brush it Off/bb: Kul tirans receive the following extraordinary ability: Once per day as a standard action, a kul tiran can convert 2d6 points of damage of they\'ve taken + 1 point per level into nonlethal damage.',
			'bb/Child of the Sea/bb: Kul tirans gain a +4 racial bonus on Swim checks, can always take 10 while swimming. Kul tirans can hold their breath for a number of rounds equal to four times their Constitution score before risking drowning or suffocating.',
			'Kul tirans receive a +2 racial bonus on Profession (sailor) checks.',
			'bb/Haymaker/bb: Kul tirans receive Improved Unarmed Strike as a bonus feat at 1st level.',
			'bb/Rime of the Ancient Mariner/bb: Kul tirans gain resistance 5 to cold. Kul tirans are treated as +1 level higher when casting spells with the water or ice descriptor, using granted powers of the Water domain, using bloodline powers of the water elemental bloodline, and determining the damage of alchemist bombs that deal cold damage. This trait does not give members of this race early access to level-based powers; it only affects powers that they could already use without this trait.',
			'bb/Languages/bb: Kul tirans begin play speaking Common. Kul tirans with high Intelligence scores can choose from Darnassian, Draenei, Dwarven, Gnomish, Kalimag (Aquan), Thalassian, Orcish, and Pandaren.'
		],
		false
	);
	require $startDir.'pageEnd.php';
?>