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
		'Sethrak',
		9,
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
			'dex' => 2,
			'con' => -2
		],
		'',
		[
			'bb/Humanoid/bb: Sethrak are humanoid creatures with the sethrak subtype.',
			'bb/Medium/bb: Sethrak are Medium creatures and have no bonuses or penalties due to their size.',
			'bb/Normal Speed/bb: Sethrak have a base speed of 30 feet.',
			'bb/Bite/bb: Sethrak receive a bite attack. This is a primary natural attack that deals 1d6 points of piercing damage.',
			'bb/Desert Runner/bb: Sethrak receive a +4 racial bonus on Constitution checks and Fortitude saves to avoid fatigue and exhaustion, as well as any other ill effects from running, forced marches, starvation, thirst, and hot or cold environments.',
			'bb/Lightning Magic/bb: Sethrak cast spells and spell-like abilities with the electricity descriptor and use electricity powers (such as those granted by the cleric air domain or the air elemental sorcerer bloodline) as though they were one level higher and as though any associated ability score was 2 points higher.',
			'bb/Lightning Resistance/bb: Sethrak have resistance 5 to electricity.',
			'bb/Nimble Attacks/bb: Sethrak receive Weapon Finesse as a bonus feat.',
			'bb/Venomous/bb: Sethrak gain the following extraordinary ability: A number of times per day equal to their Constitution modifier (minimum 1/day), a sethrak can envenom a weapon that it wields with their venom that drips from their fangs. Applying venom in this way is a swift action.',
			'ii/Weakening Venom/ii: Injury; save Fort DC 10 + 1/2 the sethrak\'s Hit Dice + the sethrak\'s Constitution modifier; frequency 1/round for 6 rounds; effect 1d2 Str; cure 1 save.',
			'bb/Languages/bb: Sethrak begin play speaking Sethrak and Zandali. Sethrak with high Intelligence scores can choose from Common, Orcish, Tortollan, and Vulpera.'
		],
		false
	);
	require $startDir.'pageEnd.php';
?>