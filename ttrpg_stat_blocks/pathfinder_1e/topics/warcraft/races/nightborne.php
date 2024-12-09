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
		'Nightborne',
		12,
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
			'int' => 2,
			'str' => -2
		],
		'',
		[
			'bb/Humanoid/bb: Nightborne are humanoid creatures with the elf subtype.',
			'bb/Medium/bb: Nightborne are Medium creatures and have no bonuses or penalties due to their size.',
			'bb/Normal Speed/bb: Nightborne have a base speed of 30 feet.',
			'bb/Ancient History/bb: Nightborne always treat Knowledge (history) and Linguistics as class skills. They also receive a +2 racial bonus on Spellcraft and Use Magic Device checks to create or use scrolls and are always considered trained in these skills for this purpose.',
			'bb/Magical Affinity/bb: Nightborne gain Spell Focus in a school of their choice as a bonus feat at 1st level. This decision cannot be changed.',
			'bb/Cantrips/bb: Nightborne can cast a single 0-level spell from the sorcerer spell list at will as a sorcerer with a level equal to their combined level in all classes. This spell is chosen at character creation and cannot be changed.',
			'bb/Arcane Pulse/bb: Nightborne gain the following spell-like ability:',
			'1/day—ii/slow/ii',
			'bb/Arcane Resistance/bb: Nightborne gain spell resistance equal to 11 + their character level.',
			'bb/Languages/bb: Nightborne begin play speaking Orcish and Shalassian. Nightborne with high Intelligence scores can choose from Common, Darnassian, Goblin, Gutterspeak, Thalassian, Taur-ahe, and Zandali.'
		],
		false,
		[
			[
				'Alternate Racial Traits',
				[
					'bb/Temporal Affinity/bb',
					'/mm/Some nightborne are particularly tied to the powers of time. They receive a +1 racial bonus to the DCs of time spells they cast and to their caster level for casting time spells. The following spells are treated as time spells as well as any other spells determined by the GM.',
					'/mm/ii/age resistance/ii, ii/greater age resistance/ii, ii/lesser age resistance/ii, ii/ally across time/ii, ii/army across time/ii, ii/bilocation/ii, ii/borrowed time/ii, ii/elude time/ii, ii/foresight/ii, ii/haste/ii, ii/hypercognition/ii, ii/moment of prescience/ii, ii/prediction of failure/ii, ii/retrocognition/ii, ii/sands of time/ii, ii/slow/ii, ii/strand of the tangled knot/ii, ii/symbol of slowing/ii, ii/temporal divergence/ii, ii/temporal regression/ii, ii/temporal stasis/ii, ii/threefold aspect/ii, ii/threefold form/ii, ii/threefold sight/ii, ii/time shudder/ii, ii/time stop/ii, ii/true strike/ii, ii/wizened appearance/ii, ii/youthful appearance/ii',
					'/mm/This replaces magical affinity.'
				]
			]
		]
	);
	require $startDir.'pageEnd.php';
?>