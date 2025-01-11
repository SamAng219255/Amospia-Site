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
		'Darkfallen',
		11,
		'',
		'',
		'',
		'',
		'',
		'',
		'',
		'',
		[
			'dex' => 2,
			'cha' => 2,
			'con' => -2
		],
		'',
		[
			'bb/Humanoid/bb: Darkfallen are humanoid creatures with the elf subtype.',
			'bb/Medium/bb: Darkfallen are Medium creatures and have no bonuses or penalties due to their size.',
			'bb/Normal Speed/bb: Darkfallen have a base speed of 30 feet.',
			'bb/Darkvision/bb: Darkfallen can see perfectly in darkness up to 60 feet away though they can only see in black and white in the dark.',
			'bb/Undeath/bb: Darkfallen are undead and their souls are only imperfectly attached to their bodies. Darkfallen are treated as undead for all purposes in addition to being humanoid. Darkfallen take no penalties from energy-draining effects, though they can still be killed if they accrue more negative levels than they have Hit Dice. After 24 hours, any negative levels they\'ve gained are removed without any additional saving throws. Darkfallen receive a +2 racial bonus on saves against death effects and other death magic and an equal bonus to AC against such effects. Darkfallen are harmed by life magic and, while they can be healed by the Light, they are also excruciatingly pained by it, receiving half of the damage the effect heals as nonlethal damage. Darkfallen do not need to breathe but still feel the impulse to do so. Darkfallen also do not sleep but nonetheless appreciate resting by laying motionless. Darkfallen characters may rest as such to recover daily abilities in place of sleeping for the same duration.',
			'bb/Necrotic Magic/bb: Darkfallen gain +1 to the DC of any saving throws against necromancy spells and spell-like abilities that they cast. Darkfallen can also cast ii/bleed/ii and ii/touch of fatigue/ii at-will and ii/chill touch/ii once per day as spell-like abilities.'
			'bb/Languages/bb: Darkfallen begin play speaking Thalassian and the language of death. Darkfallen with high Intelligence scores can choose from Common, Darnassian, Draconic, and Orcish.'
		],
		false,
		[
			[
				'Alternate Racial Traits',
				[
					'bb/San\'layn Blood Magic/bb',
					'/mm/San\'layn gain +1 to the DC of any saving throws against enchantment spells and spell-like abilities that they cast. San\'layn can also cast ii/vampiric touch/ii once per day as a spell-like ability.',
					'/mm/This replaces necrotic magic.',
					'bb/Twisted Magic/bb',
					'/mm/Some darkfallen are infused with a corrupt form of their original life magic that has been twisted to be fuel by the powers of death. These darkfallen replace any life-magic they wield with death-magic. This affects divine spells they receive from nature such as those of the druid and ranger classes. Any Conjuration (healing) spells become Necromancy spells and provide their benefits, such as healing, to undead instead of living creatures while harming living creatures as though they were undead. This allows spells such as ii/raise dead/ii and ii/resurection/ii to bring back an undead creature but they are no longer able to bring back a living creature. Spells that directly interact with nature (such as ones the create or manipulate plant-life) receive benefits from feats, spells, and abilities as though they were Necromancy spells and leave the affected region looking dark and twisted.',
					'/mm/If they were originally a night elf, they also gain the night elves\' elusiveness and shadowmeld traits.',
					'/mm/If they were originally a high elf, they also gain the high elves\' arcane acuity and arcane affinity traits.',
					'/mm/This replaces necrotic magic.',
					'bb/Kal\'dorei Languages/bb',
					'/mm/Darkfallen formed recently from night elves begin play speaking Common, Darnassian, and the language of death. Such darkfallen with high Intelligence scores can choose from Gnomish, Draenei, Dwarven, Orcish, Pandaren, and Thalassian.',
					'/mm/This replaces languages.',
					'bb/First Darkfallen Languages/bb',
					'/mm/The darkfallen dark rangers that were transformed with Sylvanas begin play speaking begin play speaking Gutterspeak, Thalassian, and the language of death. Such darkfallen with high Intelligence scores can choose from Common, Darnassian, Goblin, Shalassian, Orcish, Taur-ahe, and Zandali.',
					'/mm/This replaces languages.'
				]
			]
		]
	);
	require $startDir.'pageEnd.php';
?>