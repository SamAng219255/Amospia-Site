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
		'Human',
		9,
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
			'bb/Humanoid/bb: Humans are humanoid creatures with the human subtype.',
			'bb/Medium/bb: Humans are Medium creatures and have no bonuses or penalties due to their size.',
			'bb/Normal Speed/bb: Humans have a base speed of 30 feet.',
			'bb/The Human Spirit/bb: Humans receive a +1 racial bonus to initiative checks and attack rolls to confirm a critical hit.',
			'bb/Diplomatic/bb: Humans gain a +2 bonus on Diplomacy checks. In addition, when they use Diplomacy to shift a creature\'s attitude, they can do so up to three steps up rather than just two.',
			'bb/Will to Survive/bb: Once per day, humans can remove the staggered or stunned conditions affecting them as a swift action.',
			'bb/Perception/bb: Humans gain a +2 racial bonus to Perception checks.',
			'bb/Sword & Mace Specialization/bb: Humans are proficient with greatswords and heavy maces.',
			'bb/Languages/bb: Humans begin play speaking Common. Humans with high Intelligence scores can choose from Darnassian, Draenei, Dwarven, Gnomish, Thalassian, Orcish, and Pandaren.'
		],
		false,
		[
			[
				'Alternate Racial Traits',
				[
					'bb/Will to Live/bb',
					'/mm/Humans gain a +2 racial bonus on all saving throws made to resist death effects, saving throws against negative energy effects, Fortitude saves made to remove negative levels, and Constitution checks made to stabilize if reduced to negative hit points.',
					'/mm/This replaces will to survive.',
					'bb/Survival Instincts/bb',
					'/mm/Humans gain a +1 racial bonus on all saving throws.',
					'/mm/This replaces will to survive.'
				]
			]
		]
	);
	require $startDir.'pageEnd.php';
?>