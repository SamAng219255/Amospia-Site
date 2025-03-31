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
		'Teshainige, Frendrin', // name
		'Frendrin', // name2
		'The strange mists part for a moment to reveal a massive crocodilian predator blending into the mists. Its jaws are lined with rows of sharp teeth and flames lick up from the corners of their jaw.', // lore
		'12', // cr
		'combatant', // role
		false, // customXp
		'', // race
		"N", // alignment
		"Huge", // size
		'magical beast', // type
		'blindsight (scent) 120 ft., darkvision 60 ft., low-light vision', // senses
		'', // aura
		'', // defAb
		'', // weak
		40, // speed
		[ // attacks
			[
				'type' => 'Melee',
				'list' => [
					[
						'name' => 'Bite',
						'attack' => 'high',
						'dmg' => 'standard',
						'dmgType' => 'P'
					],
					[
						'name' => 'Tail',
						'attack' => 'low',
						'dmg' => 'four',
						'dmgType' => 'B'
					]
				]
			]
		],
		15, // reach
		'energy blast, tail swipe', // offAbilities
		false, // spelllike
		[], // spellcast
		'', // spellnote
		[ // scores
			'str' => 'first',
			'dex' => +3,
			'con' => 'third',
			'int' => -4,
			'wis' => 'second',
			'cha' => -1
		],
		[ // skills
			'Athletics' => 'good',
			'Perception' => 'good',
			'Stealth' => 'master',
			'Survival' => 'good'
		],
		'', // lang
		'Dimensional Mist', // other
		'', // gear
		'The Planet Theares', // enviro
		'Solitary', // organiz
		[ // specAb
			[
				'name' => 'Dimensional Mist (Su)',
				'type' => false,
				'desc' => 'As a standard action, a frendrin can emit a strange gray mist from its mouth that fills a 120-foot spread from the center of the frendrin. This mist lingers until it is dismissed or the frendrin is slain. Dismissing the mist does not require an action but must be done on the frendrin\'s turn and does not take effect until the start of their next turn as the mist disperses. This mist obscures sight and smell and warps the space inside of it. This mist conceals creatures as ii/fog cloud/ii and blindsense cannot identify the location of a creature in the mist, only its presence or absence. In addition, space becomes warped inside the mist. Whenever a creature moves more than 5 feet in the mist, secretly roll a d6. On a 1 or a 2, the creature moves half the intended distance. On a 3 or a 4, the creature moves the intended distance. On a 5 or a 6 the creature moves twice the intended distance. This does not affect movement while outside the mist. The creature is unaware of how far they traveled unless they possess a non-visual precise sense. If the creature senses another creature or an object along their movement, they can stop or adjust their movement accordingly. If the creature possesses a non-visual precise sense, treat them as though their movement speed is affected instead of their movements.'
			],
			[
				'name' => 'Energy Blast (Su)',
				'type' => false,
				'desc' => [
					'Once every 1d4 rounds, a frendrin can fire a ball of energy from its mouth as a standard action that explodes up to 120 feet away, or once it collides with something, and deals 13d6 points of damage to creatures in a 30-foot spread. Creatures in the area receive a DC $adc$ Reflex saving throw for half damage.',
					'The most common energy type produced by frendrin is fire but they can also produce acid, cold, electricity, plasma, or sonic energies. To randomly determine what energy type a frendrin\'s energy blast deals, use the following chart.',
					sTable(
						[
							'd%',
							'Energy'
						],
						[
							['1-41', 'fire'],
							['42-61', 'acid'],
							['62-75', 'electricity'],
							['76-85', 'cold'],
							['86-93', 'sonic'],
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
				'name' => 'Tail Swipe (Ex)',
				'type' => false,
				'desc' => 'A frendrin can attempt a tail swipe that uses the listed statistics for their tail attack but can strike up to four separate creatures as a full-attack though it can only strike each creature once per round.'
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
			]
		],
		[ // desc
			'Frendrin are roughly shaped like a six-legged crocodile but sleeker with fewer protrusions and ridges. They are generally around 25 feet in length. Their scales are slightly mottled and are a mostly neutral gray that allow them to blend easily into the mist they create. They use their powerful jaws to take down single enemies but their powerful tail can also move swiftly to strike several enemies at once. They have a powerful sense of smell to locate prey or avoid enemies whilst surrounded by their mists.',
			'Frendrin often use their area attack to spread out their foes in the mists and attack them separately. ',
			'Frendrins are usually around 25 feet long.'
		]
	);
	require $startDir.'pageEnd.php';
?>