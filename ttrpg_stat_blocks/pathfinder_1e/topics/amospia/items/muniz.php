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
	block('The Mind Muniz',
		'item',
		[
			'<b>Aura</b> Overwhelming Divination; <b>CL</b> 21th',
			'<b>Slot</b> head; <b>Price</b> —; <b>Weight</b> 1/2 lbs.'
		],
		false,
		[
			[
				'title' => 'Statistics',
				'spaced' => false,
				'texts' => quick_format([
					'bb/Alignment/bb True Neutral; bb/Ego/bb —',
					'bb/Senses/bb 120 ft., blindsight, ii/true seeing/ii, Read Languages, Read Magic',
					'bb/Int/bb 30; bb/Wis/bb 25; bb/Cha/bb 20',
					'bb/Skills/bb Knowledge (all) +30, Perception +27, Sense Motive +27',
					'bb/Communication/bb Telepathy'
				])
			],
			[
				'title' => 'Description',
				'spaced' => true,
				'texts' => quick_format([
					'One of the three artifacts created in combination of the magic of one the Narmen Sects and the power of the Arkon. This bronze circlet seems plain but any creature who wears it has their mind expanded in addition to the circlet feeding vital information about their surrounding and suggesting optimal courses of action. The circlet grants the wearer an enhancement bonus to Intelligence, Wisdom, and Charisma of +10, truespeech, and a number of ranks in 5 knowledge skills equal to the wearer\'s number of hit dice. These skills are chosen at the beginning of each day and are the same for every creature that wears the circlet.',
					'Any creature wearing the mind gains access to the intelligence within that feeds vast amounts of information to its wearer as needed. Despite such a powerful intelligent item normally having an incredibly high ego score, Muniz has no ego score has no ability nor desire to override its wearer\'s will. In addition to being able to make seperate Perception, Sense Motive, and Knowledge checks and relaying the results to the wearer, The Mind has vast predictive and problem solving algorithms that enable it to advise the wearer in tactics and invention. While wearing The Mind, you are never treated as being flat-footed, cannot be flanked, have your critical threat range doubled, and you receive a +10 dodge bonus to AC, a +5 competence on attack rolls, and a +10 competence bonus on saves.'
				])
			],
			[
				'title' => 'Destruction',
				'spaced' => false,
				'texts' => quick_format([
					'WIP'
				])
			]
		]
	);
	require $startDir.'pageEnd.php';
?>