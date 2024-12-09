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
		'Dwarf',
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
			'str' => 2,
			'dex' => -2,
			'con' => 2
		],
		'Dwarves are strong and resilient but not very nimble.',
		[
			'bb/Humanoid/bb: Dwarves are humanoid creatures with the dwarf subtype.',
			'bb/Medium/bb: Dwarves are Medium creatures and have no bonuses or penalties due to their size.',
			'bb/Slow and Steady/bb: Dwarves have a base speed of 20 feet and speed is never modified by armor or encumbrance.',
			'bb/Darkvision/bb: Dwarves can see perfectly in darkness up to 60 feet away though they can only see in black and white in the dark.',
			'bb/Stoneform/bb: Dwarves gain a +2 racial bonus on saving throws against poison, spells, and spell-like abilities.',
			'bb/Might of the Mountain/bb: Dwarves deal an additional amount of damage equal to half of their Strength modifier on a successful critical hit with a melee attack.',
			'bb/Will to Survive/bb: Once per day, humans can remove the staggered or stunned conditions affecting them as a swift action.',
			'bb/Frost Resistance/bb: Dwarves have frost resistance 5.',
			'bb/Explorer/bb: Dwarves receive a +2 racial bonus to Profession (archaeologist) checks.',
			'bb/Stonecunning/bb: Dwarves receive a +2 bonus on Perception checks to notice unusual stonework, such as traps and hidden doors located in stone walls or floors. They receive a check to notice such features whenever they pass within 10 feet of them, whether or not they are actively looking.',
			'bb/Languages/bb: Dwarves begin play speaking Common and Dwarven. Dwarves with high Intelligence scores can choose from Darnassian, Draenei, Gnomish, Orcish, Pandaren, and Thalassian.'
		],
		false,
		[
			[
				'Alternate Racial Traits',
				[
					'/mm/This replaces elusiveness and quickness.',
					'bb/Craftsman/bb',
					'/mm/Dwarves are known for superior craftsmanship and their reputation is well deserved. Dwarves with this trait gain a +2 racial bonus on all Craft or Profession checks to create objects from metal or stone. They also do not have to spend additional time to add the masterwork quality to a weapon or set of armor they are making. They must spend additional materials and make additional checks as normal.',
					'/mm/This replaces explorer.',
					'bb/Mountain Step/bb',
					'/mm/Instead of wielding the mountains strength, some embody its stability. These dwarves gain a +2 racial bonus on Acrobatics checks made to cross narrow ledges and on saving throws against altitude fatigue and sickness and a +4 racial bonus to their CMD when resisting bull rush or trip attempts while standing on the ground.',
					'/mm/This replaces might of the mountain.'
				]
			]
		]
	);
	require $startDir.'pageEnd.php';
?>