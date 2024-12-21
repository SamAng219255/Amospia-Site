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
		'Tortollan',
		10,
		'',
		'',
		'',
		'',
		'',
		'',
		'',
		'',
		[
			'wis' => 2,
			'con' => 2,
			'dex' => -4
		],
		'',
		[
			'bb/Humanoid/bb: Tortollans are humanoid creatures with the aquatic, amphibious, and tortollan subtypes.',
			'bb/Medium/bb: Tortollans are Medium creatures and have no bonuses or penalties due to their size.',
			'bb/Slow and Steady/bb: Tortollans have a base speed of 20 feet and their speed is never modified by armor or encumbrance. Tortollans also have a swim speed of 30 feet and receive the +8 racial bonus to Swim checks that a swim speed normally grants.',
			'bb/Amphibious/bb: Tortollans can breathe both in air and in water.',
			'bb/Natural Armor/bb: Tortollans receive a +2 natural armor bonus to their AC.',
			'bb/Scroll Magic/bb: Tortollans receive a +2 racial bonus on Use Magic Device checks to use a scroll and on Spellcraft checks to create a scroll. When a tortollan casts a spell from a scroll, they cast it at +1 caster level.',
			'bb/Storied/bb: Tortollans receive a +1 racial bonus on Knowledge (history) and Perform (oratory) checks.',
			'bb/Languages/bb: Tortollans begin play speaking Zandali. Tortollans with high Intelligence scores can choose from Common, Orcish, Sethrak, and Vrykul.'
		],
		false
	);
	blockStack(
		'Racial Equipment',
		'racial_equipment',
		[
			[
				'block' => true,
				'name' => 'Tortollan Spell Scroll',
				'type' => 'item',
				'texts' => quick_array([
					'bb/Price/bb varies, see text; bb/Weight/bb —'
				]),
				'spaced' => true,
				'sections' => [
					[
						'title' => 'Description',
						'spaced' => true,
						'texts' => quick_array([
							'Tortollan spell scrolls are created through the use of the Scribe Scroll feat and function as scrolls in all ways except that they can be activated by any creature that makes the associated Use Magic Device checks whether or not they can normally cast spells or are of the proper magical discipline.',
							'Creatures unable to cast arcane or divine spells, depending on the scroll, are always treated as though they did not have the spell on their spell list. Creatures can use their number of ranks in Use Magic Device in place of their caster level when operating a tortollan spell scroll.',
							'A tortollan spell scroll\'s price is equal to 45 gp times the level of the spell times the caster level. Cheaper than a potion but more than a regular scroll.'
						])
					]
				]
			]
		]
	);
	require $startDir.'pageEnd.php';
?>