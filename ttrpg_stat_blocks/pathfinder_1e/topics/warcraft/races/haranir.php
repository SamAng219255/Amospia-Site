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
		'Haranir',
		14,
		'',
		'',
		'',
		'',
		'',
		'',
		'',
		'',
		[
			'str' => 2,
			'wis' => 2,
			'cha' => -2
		],
		'',
		[
			'bb/Humanoid/bb: Haranir are humanoid creatures with the elf, haranir, and troll subtypes.',
			'bb/Medium/bb: Haranir are Medium creatures and have no bonuses or penalties due to their size.',
			'bb/Normal Speed/bb: Haranir have a base speed of 30 feet.',
			'bb/Lash Out/bb: Haranir deal an additional amount of damage equal to half of their Strength modifier on a successful critical hit with a melee attack.',
			'bb/One With Nature/bb: Haranir receive a +5 bonus on all skill checks to forage for plants or herbs.',
			'bb/Rootwalking/bb: At-will as a spell-like ability that takes 10 minutes, a haranir can perform a ritual dance beside a plant rooted into the surface of Azeroth to travel to the Cradle or to travel from Harandar to where they last came from. They may transport up to 1 additional creature per three levels who are also participating in the dance. They may use this same ability beside the roots of one of the World Trees within Harandar to instead travel to that tree on the surface.',
			'bb/Subterranean Predator/bb: Haranir receive a +1 racial bonus on attack rolls against aberrations, animals, magical beasts, and plants.',
			'bb/Thorn Bloom/bb: Once per day, a haranir can use the following spell-like ability:',
			'/mm/Enemies within a 10-foot radius spread take 1d6 points of bludgeoning, piercing, and slashing damage plus 1d6 per two levels over 1st. Allies within the area are healed by the same amount instead. This ability has a range of 25 feet plus 5 feet per 2 levels.',
			'bb/Languages/bb: Haranir begin play speaking Haranir. Haranir with high Intelligence scores can choose from Common, Fungarian, Ruutani, and Thalassian.'
		],
		false,
		[
			[
				'Alternate Racial Traits',
				[
					'bb/Claws/bb',
					'/mm/You gain two claw natural attacks that deal 1d4 slashing damage.',
					'/mm/This replaces lash out.',
				]
			]
		]
	);
	racialFeats('haranir', [
		[
			'name' => 'Rootweaving',
			'desc' => '',
			'prereq' => 'haranir, 3 ranks in any Craft skill',
			'benefit' => 'You can control and accelerate the growth of living plant matter to form various shapes. You can use any of your Craft skills to form the item out of living plant matter, including items normally made of metal. This item functions as though it were made of normal materials with the same statistics except it regains 1 point of health every minute in remains in light equivalent to sunlight. This also allows you to forgo half the cost of materials to make the item from. The remaining cost is spent to provide magical components to encourage the plant\'s growth.',
			'special' => false
		]
	]);
	require $startDir.'pageEnd.php';
?>