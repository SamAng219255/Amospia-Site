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
	advAlchemySimpleBlock(
		'Astral Scrying',// Name
		'Cauldron',// Form (Sub-Form(s))
		[
			'mind-affecting',
			'scrying'
		],// Descriptors
		5,// Level
		'tended up to 1 minute/level',// Duration
		'Will negates (harmless); see text',// Saving Throw
		[
			'So long as the mixture is tended, nearby creatures are placed into a state of astral projection, except, instead of travelling to the astral plane the nearby creatures\' astral selves are merged into an invisible sensor that attempts to seek out a specfic subject. This subject receives a Will save against this affect and, if they succeed, all projecting creatures are cast back stunning them for 1 round. The difficulty of the save depends on how well the group\'s knowledge of the subject is and what sort of physical connection (if any) they have to that creature. Furthermore, if the subject is on another plane, it gets a +5 bonus on its Will save.',
			sTable(
				[
					'Knowledge',
					'Will Save Modifier'
				],
				[
					[
						'None* ',
						'+10'
					],
					[
						'Secondhand (someone in the group has heard of the subject)',
						'+5'
					],
					[
						'Firsthand (someone in the group has met the subject)',
						'+0'
					],
					[
						'Familiar (someone in the group knows the subject well)',
						'-5'
					]
				],
				true,
				false,
				false
			),
			'*The group must have some sort of connection (see below) to a creature of which they have no knowledge.',
			sTable(
				[
					'Connection ',
					'Will Save Modifier' 
				],
				[
					[
						'Likeness or picture ',
						'-2' 
					],
					[
						'Possession or garment ',
						'-4' 
					],
					[
						'Body part, lock of hair, bit of nail, etc. ',
						'-10' 
					]
				],
				true,
				false,
				false
			),
			'If the subject\'s save fails, you can see and hear the subject and its surroundings (approximately 10 feet in all directions of the subject). If the subject moves, the sensor follows at a speed of up to 150 feet.',
			'As with all scrying effects, the sensor has your full visual acuity, including any magical effects.',
			'If the subject succeeds at their save, you can\'t attempt to scry on that subject again for at least 24 hours.',
			'Creatures may still take actions while scrying but are considered blind and deaf and creatures approaching or walking away from the mixture join or leave the sensor accordingly.'
		] // Description
	);
	require $startDir.'pageEnd.php';
?>