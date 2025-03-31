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
		'Teshainige, Protran', // name
		'Protran', // name2
		'A towering figure rises from the forest canopy, its silhouette rippling with dark, feathery plumes. Its beady eyes twinkle with a fierce intelligence as it surveys its surroundings.', // lore
		'20', // cr
		'combatant', // role
		false, // customXp
		'', // race
		"N", // alignment
		"Colossal", // size
		'magical beast', // type
		'blindsense (scent) 60 ft., darkvision 60 ft., low-light vision', // senses
		'gravity lens (120 ft.)', // aura
		'bb/DR/bb 20/adamantine and magic; bb/Resistance/bb acid 10, cold 20, electricity 10, fire 10, sonic 10', // defAb
		'', // weak
		50, // speed
		[ // attacks
			[
				'type' => 'Melee',
				'list' => [
					[
						'name' => 'Bite',
						'attack' => 'high',
						'dmg' => 'standard',
						'dmgType' => 'P',
						'note' => 'swallow whole'
					],
					[
						'name' => 'Claw',
						'attack' => 'low',
						'dmg' => 'three',
						'dmgType' => 'P'
					]
				]
			]
		],
		25, // reach
		'breath weapon (15-ft wide 150-ft long line, 21d6 So, Reflex DC 25 half, usable every 1d4 rounds), swallow whole (11d10+32 A, EAC 35, KAC 33, 116 HP)', // offAbilities
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
					'While a blast of sound is the most common energy for protrans to use, they can also be able to breathe acid, cold, electricity, fire, or plasma, in which case their breath weapon deals the corresponding energy type. To randomly determine what energy type a protran\'s breath weapon deals, use the following chart.',
					sTable(
						[
							'd%',
							'Energy'
						],
						[
							['1-41', 'sonic'],
							['42-61', 'plasma (electricity & fire)'],
							['62-75', 'electricity'],
							['76-85', 'fire'],
							['86-93', 'cold'],
							['94-100', 'acid']
						],
						true,
						false,
						false,
						false
					)
				]
			],
			[
				'name' => 'Gravity Lens (Su)',
				'type' => false,
				'desc' => 'The protran creates a lensed region of space around itself that slows time for all but the protran. All creatures, other than protrans, are staggered and move at half their normal speed (round down to the next 5-foot increment).'
			],
			[
				'name' => 'Thunderous Stomp (Su)',
				'type' => false,
				'desc' => 'A protran can perform a thunderous stomp as a standard action once per minute which causes tremors to issue throughout the nearby terrain. Creatures within 250 feet take 21d6 bludgeoning damage with a DC 25 Reflex save for half. Creatures that fail their save are also knocked prone. All terrain within 120-feet also becomes difficult terrain for 2d4 rounds due to remaining aftershocks though creatures of at least Gargantuan size are unaffected.'
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
			'Protrans resemble massive upright bipedal raptors without wings or arms. Their bodies are covered in large iridescent black feathers and possess impressive tail feathers. Their heads feature front facing round eyes used to locate prey that they tear into with their powerful jaws. While their mouth is full, protrans can also tear into enemies with the sharp talons on their feet.',
			'Protrans possess a stark dimorphism when it comes to their tail feathers. Females will possess several oversized feathers that are otherwise identical while males will have several much larger feathers that can be up to 120 feet in length and display a mesmerizing pattern and array of colors.',
			'Protrans are usually around 100 feet in height.'
		]
	);
	require $startDir.'pageEnd.php';
?>