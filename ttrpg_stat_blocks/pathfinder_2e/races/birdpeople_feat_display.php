<?php require '../../pageStart.php'; ?>
<title>Piccilli Feats</title>
<?php
	block2('Piccilli Racial Feats');
	contents([
		'Full Flight',
		'Piccilli Lore',
		'Piccilli Weapon Expertise',
		'Piccilli Weapon Familiarity',
		'Piccilli Weapon Finesse',
		'Strengthening Wings'
	]);
	block2(
		'Full Flight',
		'Feat',
		13,
		[
			'Piccilli'
		],
		[
			[],
			quick_array(
				'You gain the effects of Strengthening Wings at all times, rather than just once per day for 10 minutes.'
			)
		]
	);
	block2(
		'Piccilli Lore',
		'Feat',
		1,
		[
			'Piccilli'
		],
		[
			[],
			quick_array(
				'You\'ve studied the history of your people as well as their traditions and skills. You gain the trained proficiency rank in Acrobatics and Nature. If you would automatically become trained in one of those skills (from your background or class, for example), you instead become trained in a skill of your choice. You also become trained in Piccilli Lore.
				/tt/1st Ed. Hybrid Description:
				You receive a +2 racial bonus to Fly and Knowledge (nature) checks. You also receive a +5 bonus to Knowledge (local) checks made about piccilli and can make such checks untrained.'
			)
		]
	);
	block2(
		'Piccilli Weapon Expertise',
		'Feat',
		13,
		[
			'Piccilli'
		],
		[
			[
				'Prerequisites Piccilli Weapon Familiarity'
			],
			quick_array(
				'Your Piccilli affinity blends with your class training, granting you great skill with Piccilli weapons. Whenever you gain a class feature that grants you expert or greater proficiency in certain weapons, you also gain that proficiency in hand crossbows, daggers, javelins, shortswords, slings, whips, and all Piccilli weapons in which you are trained.
				/tt/1st Ed. Hybrid Description:
				Your Piccilli affinity blends with your class training, granting you great skill with Piccilli weapons. When wielding a hand crossbow, dagger, javelin, shortsword, sling, whip, or a Piccilli weapon, you receive a cummulative +2 bonus on attack rolls to your iterative attacks.'
			)
		]
	);
	block2(
		'Piccilli Weapon Familiarity',
		'Feat',
		1,
		[
			'Piccilli'
		],
		[
			[],
			quick_array(
				'Your people prefer lighter weapons that can be stowed or held in your beak while flying. You are trained with hand crossbows, daggers, javelins, shortswords, slings, and whips.
				In addition, you gain access to all uncommon Piccilli weapons. For the purpose of determining your proficiency, martial Piccilli weapons are simple weapons and advanced Piccilli weapons are martial weapons.
				/tt/1st Ed. Hybrid Description:
				Your people prefer lighter weapons that can be stowed or held in your beak while flying. You are proficient with hand crossbows, daggers, javelins, shortswords, slings, and whips.
				In addition, you gain access to all Piccilli weapons. For the purpose of determining your proficiency, martial Piccilli weapons are simple weapons and exotic Piccilli weapons are martial weapons.'
			)
		]
	);
	block2(
		'Piccilli Weapon Specialization',
		'Feat',
		5,
		[
			'Piccilli'
		],
		[
			[
				'Prerequisites Piccilli Weapon Familiarity'
			],
			quick_array(
				'You are attuned to the weapons of your Piccilli ancestors and are particularly deadly when using them. Whenever you critically hit using a Piccilli weapon or one of the weapons listed in Piccilli Weapon Familiarity, you apply the weapon\'s critical specialization effect.
				/tt/1st Ed. Hybrid Description:
				You are attuned to the weapons of your Piccilli ancestors and are particularly deadly when using them. Whenever you critically hit using a Piccilli weapon or one of the weapons listed in Piccilli Weapon Familiarity, you can apply a converted version of the weapon\'s 2nd Edition critical specialization effect.'
			)
		]
	);
	block2(
		'Strengthening Wings',
		'Feat',
		9,
		[
			'Piccilli'
		],
		[
			[],
			quick_array(
				'You unfold your wings /2l/ for travel and can keep them unfolded for 10 minutes. You gain a fly Speed equal to your land Speed while your wings are unfurled.
				You cannot fly while holding an object of 1 bulk or more in either hand.
				/tt/1st Ed. Hybrid Description:
				You can unfold your wings as a standard action for travel and can keep them unfolded for 10 minutes. You gain a fly speed equal to your base speed while your wings are unfurled.
				You cannot fly while holding an object weighing more than a pound in either hand.'
			)
		]
	);
	require '../../pageEnd.php';
?>