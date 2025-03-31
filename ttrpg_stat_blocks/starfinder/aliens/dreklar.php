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
		'Teshainige, Dreklar', // name
		'Dreklar', // name2
		'Eight, blue-green feathered, cat-like aliens leap from the shadows with claws glowing with cool blue plasma.', // lore
		'2', // cr
		'combatant', // role
		false, // customXp
		'', // race
		"N", // alignment
		"Large", // size
		'magical beast', // type
		'blindsense (scent) 60 ft., darkvision 60 ft., low-light vision', // senses
		'', // aura
		'', // defAb
		'', // weak
		40, // speed
		[ // attacks
			[
				'type' => 'Melee',
				'list' => [
					[
						'name' => 'Claws',
						'attack' => 'high',
						'dmg' => 'standard',
						'dmgType' => 'E & F'
					]
				]
			]
		],
		10, // reach
		'pounce', // offAbilities
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
			'Athletics' => 'good',
			'Perception' => 'good',
			'Stealth' => 'master',
			'Survival' => 'good'
		],
		'', // lang
		'Fade, Octal Link', // other
		'', // gear
		'The Planet Theares', // enviro
		'octet (8, CR 8)', // organiz
		[ // specAb
			[
				'name' => 'Fade (Su)',
				'type' => false,
				'desc' => 'Dreklars can turn partially invisible and are always treated as visually having cover or concealment for the purposes of hiding using Stealth.'
			],
			[
				'name' => 'Octal Link (Su)',
				'type' => false,
				'desc' => 'Dreklars operate in octets, or groups of eight, which work together as a single unit. Dreklars in an octet are able to telepathically communicate within 60 feet of each other to coordinate attacks.'
			],
			[
				'name' => 'Variant Energies',
				'type' => false,
				'desc' => [
					'While plasma covered claws are the most common energy for dreklars to use, they can also be charged with acid, cold, electricity, fire, or sonic energies, in which case half of the damage is slashing and the other half is the chosen energy type. To randomly determine what energy type a dreklar deals, use the following chart.',
					sTable(
						[
							'd%',
							'Energy'
						],
						[
							['1-41', 'plasma (electricity & fire)'],
							['42-61', 'acid'],
							['62-75', 'fire'],
							['76-85', 'electricity'],
							['86-93', 'cold'],
							['94-100', 'sonic']
						],
						true,
						false,
						false,
						false
					)
				]
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
				'skills' => [
					'Stealth' => +2
				]
			]
		],
		[ // desc
			'Dreklars are fairly cat shaped and their forms are designed to balance hunting prey and avoiding being hunted by larger teshainige. It has two sets of eyes: vertically slitted front-facing eyes for hunting and horizontally slitted eyes angled upward on either side of their heads for spotting threats. They are covered in dark colored feathers that range from sapphire blue to emerald green in a mottled pattern to hide amidst the large and shadowed underbrush.',
			'Dreklars live in large colonies that organize efforts using simple communication through body language. ',
			'Some xeno-biologists believe that, in theory, it would be possible, or even simple, to domesticate a dreklar. Despite this, no attempts have been made thus far due to the danger the creatures pose and the difficulty in acquiring a young from the midst of a colony.',
			'Dreklars are usually around 12 feet long.'
		]
	);
	require $startDir.'pageEnd.php';
?>