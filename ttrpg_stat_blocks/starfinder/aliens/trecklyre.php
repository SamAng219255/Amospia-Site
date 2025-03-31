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
	alienSFBlock(
		'Teshainige, Trecklyre', // name
		'Trecklyre', // name2
		'You hear a low rumbling from above, and then see an enormous shadow moving between the massive trees. A monstrous reptilian form, large as a house, emerges from the misty treetops, its six leathery wings spread wide. Its piercing gaze locks onto your party as it flexes its pincer-like jaw.', // lore
		'16', // cr
		'combatant', // role
		false, // customXp
		'', // race
		"N", // alignment
		"Gargantuan", // size
		'magical beast', // type
		'blindsense (scent) 60 ft., darkvision 60 ft., low-light vision', // senses
		'', // aura
		'', // defAb
		'', // weak
		'40 ft., 30 ft. climb, 60 ft. fly (clumsy)', // speed
		[ // attacks
			[
				'type' => 'Melee',
				'list' => [
					[
						'name' => 'Claws',
						'attack' => 'high',
						'dmg' => 'standard',
						'dmgType' => 'S'
					]
				]
			]
		],
		20, // reach
		'breath weapon (60-ft. cone, 17d6 C, Reflex DC 22 half, usable every 1d4 rounds), vacuous devourer (Reflex DC 22, 6d10+26 A, EAC 30, KAC 28, 90 HP)', // offAbilities
		false, // spelllike
		[], // spellcast
		'', // spellnote
		[ // scores
			'str' => 'first',
			'dex' => 'third',
			'con' => 'second',
			'int' => -4,
			'wis' => +1,
			'cha' => -1
		],
		[ // skills
			'Athletics' => 'master',
			'Intimidate' => 'good',
			'Perception' => 'good',
			'Survival' => 'good'
		],
		'', // lang
		'Dimensional Mist', // other
		'', // gear
		'The Planet Theares', // enviro
		'Solitary', // organiz
		[ // specAb
			[
				'name' => 'Breath Weapon (Su)',
				'type' => false,
				'desc' => [
					'While icy breath is the most common energy for dreklars to use, they can also be able to breathe acid, electricity, fire, plasma, or high energy sound, in which case tgeir breath weapon deals the corresponding energy type. To randomly determine what energy type a trecklyre\'s breath weapon deals, use the following chart.',
					sTable(
						[
							'd%',
							'Energy'
						],
						[
							['1-41', 'cold'],
							['42-61', 'sonic'],
							['62-75', 'fire'],
							['76-85', 'acid'],
							['86-93', 'electricity'],
							['94-100', 'plasma (electricity & fire)']
						],
						true,
						false,
						false,
						false
					)
				]
			],
			[
				'name' => 'Vacuous Devourer (Su)',
				'type' => false,
				'desc' => 'Trecklyres can create an artificial gravity well in their maw to suck creatures in and devour them. Using this ability is a standard action. The target receives a DC 22 Reflex save avoid the attack and, on a failed save, they are swallowed as the swallow whole universal creature ability.'
			]
		],
		[ // grafts
			[
				'fort' => +2,
				'ref' => +2,
				'attack' => [
					'high' => +1,
					'low' => +1
				]
			],
			[
				'hp' => +60
			]
		],
		[ // desc
			'Trecklyres are massive lizards with thick legs that terminate in sharp claws used to cling onto the massive trees of their homeworld. They have somewhat triangular heads with a pincer-like jaw used for ripping apart prey. Their backs possess two rows of spines along with three sets of thick leathery wings.',
			'Trecklyres are usually around 50 feet in length.'
		]
	);
	require $startDir.'pageEnd.php';
?>