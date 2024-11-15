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
		'Draenei',
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
			'str' => 4,
			'dex' => -2,
			'int' => 2,
			'wis' => 2,
			'cha' => 2
		],
		'Draenei are robust and charismatic, with a keen intellect and a deep spiritual insight, though their size and build can make them less agile.',
		[
			'bb/Humanoid/bb: Draenei are humanoid creatures with the eredar subtype.',
			'bb/Medium/bb: Draenei are Medium creatures and have no bonuses or penalties due to their size.',
			'bb/Normal Speed/bb: Draenei have a base speed of 30 feet.',
			'bb/Gift of the Naaru/bb: Draenei can channel positive energy to heal a touched creature, restoring a number of hit points equal to 1d4 for each hit die the target possesses. This does not damage creatures harmed by positive energy. This a spell-like ability that requires a standard action to perform and provokes attacks of opportunity. This ability can only be used once per day.',
			'bb/Gemcutting/bb: Draenei gain a +2 racial bonus on Craft (jewelry) checks.',
			'bb/Shadow Resistance/bb: Draenei gain spell resistance equal to 6 + their character level against spells and spell-like abilities with the [evil] descriptor, as well as any spells and spell-like abilities cast by evil outsiders.',
			'bb/Languages/bb: Draenei begin play speaking Common and Draenei. Draenei with high Intelligence scores can choose from Eredun, Gnomish, Darnassian, Dwarven, Orcish, Pandaren, Thalassian.'
		],
		false,
		[
			[
				'Subraces',
				[
					'bb/Eredar/bb',
					'/mm/Eredar are the original race of the draenei. Few remain as most have either joined the draenei or the man\'ari.',
					'/mm/Use arcane talent and hardy for eredar. Thaumic engineer and unintegrated can also be a fitting option.',
					'bb/Man\'ari/bb',
					'/mm/Man\'ari eredar have been twisted by fel magic into demons. Most serve the burning legion but a few have escaped it\'s influence. Unlike most eredar, man\'ari generally have red skin but some have purple, gray, or other colors of skin. Man\'ari are infused with brilliant green fel energy that replaces the color of their eyes but also leaks through cracks in their skin but also marring their skin with numerous pockmarks.',
					'/mm/Man\'ari eredar are outsiders with the native subtype instead of being humanoids like their kin, though they retain the eredar subtype and are treated as eredar for all purposes. This also grants them darkvision, allowing them to see clearly in darkness to a range of 60 feet. They lose the shadow resistance trait and gain the fel magic and unintegrated alternate racial traits. Thaumic engineer may also be a fitting option as man\'ari rarely work with the magical crystals used anciently by their people or by their draenic brethren.'
				]
			],
			[
				'Alternate Racial Traits',
				[
					'bb/Thaumic Engineer/bb',
					'/mm/Some draenei and eredar focus more on operating and repairing the magical technology that their people possess than on their use of gems. These draenei receive a +1 racial bonus to Knowledge (engineering) and Spellcraft checks. This bonus increases to +2 when in regards to magical technology.',
					'/mm/This replaces gemcutting.',
					'bb/Demon Slayer/bb',
					'/mm/Draenei that focus on martial combat often become accustomed to battling their eternal foes, The Burning Legion. These individuals gain a +1 racial bonus on attack rolls and a +2 dodge bonus to AC against demons.',
					'/mm/This replaces shadow resistance.',
					'bb/Hardy/bb',
					'/mm/Those that are less accustomed to battling the Burning Legion tend to have more generalized resistances instead of the rather targeted ones possessed by their brethren. These individuals gain a +2 racial bonus on saving throws against poison, spells, and spell-like abilities.',
					'/mm/This replaces shadow resistance.',
					'bb/Arcane Talent/bb',
					'/mm/Some draenei or draenei are better at channeling the arcane instead of the light. These individuals treat their caster level as one higher when casting arcane spells of a school chosen at character creation.',
					'/mm/This replaces gift of the naaru.',
					'bb/Fel Magic/bb',
					'/mm/Instead of the gift of the light, the power of demons flows through your body. ',
					'/mm/This replaces gift of the naaru.',
					'bb/Unintegrated/bb',
					'/mm/Many draenei and eredar have spent little time on Azeroth and thus do not speak the native languages. These individuals start speaking Eredun. Those with a high Intelligence may know Common, Darnassian, Draenei, and Orcish.',
					'/mm/This replaces languages.'
				]
			]
		]
	);
	require $startDir.'pageEnd.php';
?>