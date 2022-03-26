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
	block(
		'Spellbound Tridents',
		'item',
		[
			'Scrolls are useful items allowing you to store any spell for later so that you can always have an extra and don\'t need to worry so much about your daily limit, but they have one glaring flaw. Scrolls are single use items. Wands improve upon the design allowing you to store up to 50 copies but once it\'s out, it\'s out. Staves come in handy here, able to be recharged and then be used again and again, but the rate of recharge so pitifully slow and requires spending high level spell slots every day, often acting as little more than a battery with horrible efficiency.',
			'Being who they are, the Narmen did not stand for these options. While they do manufacture a large quantity of these items they have also invented the Spellbound Trident. Spellbound tridents come in two forms, simple and complex. Simple spellbound tridents are each capable of producing an effect created by a simple application of one of the primal elements, such as producing a blast of flame or air. These are available in both lesser and greater variants applying progressively more powerful and/or more complicated effects. Complex spellbound tridents are tied to a specific category of spells centered around one of the most primal elements and can produce the effect of any spell in that category up to a given level determined while creating the trident with higher level tridents being more difficult to produce. Every spellbound trident has a number of charges that replenish each day. Common numbers of charges for simple tridents being 5, 10, and 50 while complex tridents often only have 3, 5, or 8.',
			'Spellbound tridents can also have either a staff or up to three rods integrated into while creating it granting the their effects while wielding the trident as well. Metamagic rods integrated into the trident can be used to augment the spells cast from it.'
		]
	);
	echo '<p><b>Base Elements</b></p>';
	table(
		[
			'Element',
			'Lesser Simple Trident',
			'Simple Trident',
			'Greater Simple Trident',
			'Complex Trident'
		],
		[
			[
				'Air',
				'',
				'',
				'',
				'Spells with the Air descriptor.'
			],
			[
				'Fire',
				'',
				'',
				'',
				'Spells with the Fire descriptor.'
			],
			[
				'Healing',
				'',
				'',
				'',
				'Spells of the Healing sub-school.'
			],
			[
				'Luck',
				'',
				'',
				'',
				'Spells with the Luck descriptor.'
			],
			[
				'Water',
				'',
				'',
				'',
				'Spells with the Water descriptor.'
			],
			[
				'Force',
				'',
				'',
				'',
				'Spells with the Force descriptor.'
			]
		],
		true,
		true,
		false
	);
	echo '<p><b>Dark Elements</b></p>';
	table(
		[
			'Element',
			'Lesser Simple Trident',
			'Simple Trident',
			'Greater Simple Trident'
		],
		[
			[
				'Flight',
				'',
				'',
				''
			],
			[
				'Teleportation',
				'',
				'',
				''
			],
			[
				'Resurrection',
				'',
				'',
				''
			],
			[
				'Void',
				'',
				'',
				''
			],
			[
				'Control',
				'',
				'',
				''
			]
		],
		true,
		true,
		false
	);
	echo '<p><b>Corrupt Elements</b></p>';
	table(
		[
			'Element',
			'Lesser Simple Trident',
			'Simple Trident',
			'Greater Simple Trident'
		],
		[
			[
				'Motion',
				'',
				'',
				''
			],
			[
				'Explosion',
				'',
				'',
				''
			],
			[
				'Luminance',
				'',
				'',
				''
			],
			[
				'Satisfaction',
				'',
				'',
				''
			],
			[
				'Storm',
				'Summons a 5-foot-wide, 30-foot-long, vertical bolt of lightning that deals 3d6 points of electricity damage within medium range as designated by aiming the trident. Any creature in the target square or in the path of the bolt is affected and may make a DC 15 reflex save to take half damage.',
				'Summons a bolt of lightning from the tip of the trident as per the spell lightning bolt using the wielder\'s caster level with a spell DC of 18.',
				'Summons an arc of lightning from the tip of the trident that bounces to nearby targets as per the spell chain lightning using the wielder\'s caster level with a spell DC of 21.'
			]
		],
		true,
		true,
		false
	);
	require $startDir.'pageEnd.php';
?>