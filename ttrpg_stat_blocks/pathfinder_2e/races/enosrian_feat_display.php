<?php require '../../pageStart.php'; ?>
<title>Thyllkthoron Feats</title>
<?php
	block2('Enosrian Racial Feats');
	contents([
		'Abyssal Claws',
		'Alluring Voice',
		'Dominating Command',
		'Enlarged Wings',
		'Fiendish Claws',
		'Fiendish Damage Resistance',
		'Fiendish Energy Resistance',
		'Fiendish Spell Resistances',
		'Full Flight',
		'Honeyed Words',
		'Silver Tongue',
		'Strengthening Wings',
		'Thyllkthoron Lore',
		'Thyllkthoron Weapon Expertise',
		'Thyllkthoron Weapon Familiarity',
		'Thyllkthoron Weapon Finesse',
		'Vestigial Wings'
	]);
	block2(
		'Abyssal Claws',
		'Feat',
		9,
		[
			'Enosrian',
			'Magic'
		],
		[
			[
				"Prerequisites Ancient Blood Thyllkthoron"
			],
			quick_array(
				'Your claws are infused with the powers of the Abyss. Your claws do an additional 1d6 evil damage.'
			)
		]
	);
	block2(
		'Alluring Voice',
		'Feat',
		1,
		[
			'Enosrian',
			'Magic'
		],
		[
			[],
			quick_array(
				'Your demonic ancestry has manifested in your voice, aiding your speech. When you speak while making a Diplomacy check, you receive a +2 bonus on that check. This bonus increases to +4 if you are expert in Diplomacy, +6 if you are Master, and +8 if you are Legendary.'
			)
		]
	);
	block2(
		'Dominating Command',
		'Feat',
		13,
		[
			'Enosrian',
			'Magic'
		],
		[
			[
				'Prerequisites Alluring Voice'
			],
			quick_array(
				'You can use your words to dominate the minds of others. You can cast ii/dominate/ii as an innate spell 1/day heightened to half your level, rounded up, as a three action /3l/ activity without needing the somatic component.'
			)
		]
	);
	block2(
		'Enlarged Wings',
		'Feat',
		5,
		[
			'Enosrian'
		],
		[
			[
				"Frequency once per round"
			],
			quick_array(
				'You can fly /1l/ through the air in short bursts at half your land Speed. If you don\'t end your movement on solid ground, you fall at the end of your turn. You can only gain the benfits of this feat while in your true form.'
			)
		]
	);
	block2(
		'Fiendish Claws',
		'Feat',
		5,
		[
			'Enosrian'
		],
		[
			[
				"Prerequisites Ancient Blood Thyllkthoron"
			],
			quick_array(
				'Your claws have grown stronger. Your claws damage increases to 2d6 and receive a +1 bonus to attack rolls.
				Special: You can take this feat a second time increasing your claw\'s damage to 3d6 and their bonus to attack rolls to +2.'
			)
		]
	);
	block2(
		'Fiendish Damage Resistance',
		'Feat',
		9,
		[
			'Enosrian'
		],
		[
			[],
			quick_array(
				'Your demonic ancestry has granted you some resistance against attacks though these can be overcome by a properly prepared opponent. You gain resistance 10 to physical damage (except cold iron).'
			)
		]
	);
	block2(
		'Fiendish Energy Resistance',
		'Feat',
		9,
		[
			'Enosrian'
		],
		[
			[],
			quick_array(
				'Your demonic ancestry has granted you some resistances to energy. Choose one of the following energy damage types: acid, cold, electricity, fire, or sonic. You gain resistance 5 to that damage type.'
			)
		]
	);
	block2(
		'Fiendish Spell Resistances',
		'Feat',
		9,
		[
			'Enosrian'
		],
		[
			[],
			quick_array(
				'Your demonic ancestry has granted you some resistances against spells. You gain a +4 bonus to your saving throws against magic effects. This bonus increases to +6 to saving throws you are expert in, +8 to saving throws you are master in, and +10 to saving throws you are legendary in. This same bonus applies to your saving throw DC against magic effects.'
			)
		]
	);
	block2(
		'Full Flight',
		'Feat',
		13,
		[
			'Enosrian'
		],
		[
			[],
			quick_array(
				'You gain the effects of Strengthening Wings at all times, rather than just once per day for 10 minutes.'
			)
		]
	);
	block2(
		'Honeyed Words',
		'Feat',
		5,
		[
			'Enosrian',
			'Magic'
		],
		[
			[
				'Prerequisites Alluring Voice'
			],
			quick_array(
				'Your words flow like honey and can take on a magical quality. You can cast ii/charm/ii as an innate spell at-will heightened to half your level, rounded up, as a three action /3l/ activity without needing the somatic component.'
			)
		]
	);
	block2(
		'Silver Tongue',
		'Feat',
		9,
		[
			'Enosrian',
			'Magic'
		],
		[
			[
				'Prerequisites Alluring Voice'
			],
			quick_array(
				'You can make people follow your every word. You can cast ii/suggestion/ii as an innate spell at-will heightened to half your level, rounded up, as a three action /3l/ activity without needing the somatic component.'
			)
		]
	);
	block2(
		'Strengthening Wings',
		'Feat',
		9,
		[
			'Enosrian'
		],
		[
			[],
			quick_array(
				'You unfold your wings /2l/ for travel and can keep them unfolded for 10 minutes. You gain a fly Speed equal to your land Speed while your wings are unfurled. You can only gain the benfits of this feat while in your true form. If you have Enlarged Wings, you gain a +10-foot status bonus to your fly Speed with Juvenile Flight. As normal, since your fly Speed is derived from your land Speed, this status bonus isn\'t cumulative with a status bonus to your land Speed, if you have one.'
			)
		]
	);
	block2(
		'Thyllkthoron Lore',
		'Feat',
		1,
		[
			'Enosrian'
		],
		[
			[],
			quick_array(
				'You\'ve studied the history of your people as well as their traditions, enemies, and skills. You gain the trained proficiency rank in Diplomacy and Religion. If you would automatically become trained in one of those skills (from your background or class, for example), you instead become trained in a skill of your choice. You also become trained in Thyllkthoron Lore.'
			)
		]
	);
	block2(
		'Thyllkthoron Weapon Expertise',
		'Feat',
		13,
		[
			'Enosrian'
		],
		[
			[
				'Prerequisites Thyllkthoron Weapon Familiarity'
			],
			quick_array(
				'Your Thyllkthoron affinity blends with your class training, granting you great skill with Thyllkthoron weapons. Whenever you gain a class feature that grants you expert or greater proficiency in certain weapons, you also gain that proficiency in daggers, rapiers, scimitars, shortswords, sword canes, warhammers, and all Thyllkthoron weapons in which you are trained.'
			)
		]
	);
	block2(
		'Thyllkthoron Weapon Familiarity',
		'Feat',
		1,
		[
			'Enosrian'
		],
		[
			[],
			quick_array(
				'You prefer finer weapons and the weapons of your people\'s goddess. You are trained with daggers, rapiers, scimitars, shortswords, sword canes, and warhammers.
				In addition, you gain access to all uncommon Thyllkthoron weapons. For the purpose of determining your proficiency, martial Thyllkthoron weapons are simple weapons and advanced Thyllkthoron weapons are martial weapons.'
			)
		]
	);
	block2(
		'Thyllkthoron Weapon Finesse',
		'Feat',
		5,
		[
			'Enosrian'
		],
		[
			[
				'Prerequisites Thyllkthoron Weapon Familiarity'
			],
			quick_array(
				'You are attuned to the weapons of your Thyllkthoron ancestors and are particularly deadly when using them. Whenever you critically hit using a Thyllkthoron weapon or one of the weapons listed in Thyllkthoron Weapon Familiarity, you apply the weapon\'s critical specialization effect.'
			)
		]
	);
	block2(
		'Vestigial Wings',
		'Feat',
		1,
		[
			'Enosrian'
		],
		[
			[],
			quick_array(
				'You can spread your wings to glide safely to the ground. As long as you can act, and you are in your true form, you take no damage from falling, no matter what distance you fall.'
			)
		]
	);
	require '../../pageEnd.php';
?>