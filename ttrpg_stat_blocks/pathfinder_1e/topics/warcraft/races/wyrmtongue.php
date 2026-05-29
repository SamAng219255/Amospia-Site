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
		'Wyrmtongue',
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
			'str' => 2,
			'int' => 2,
			'cha' => -2
		],
		'',
		[
			'bb/Native Outsider/bb: Wyrmtongues are outsiders with the demon and native subtypes. Wyrmtongues do not automatically gain the traits of the demon subtype.',
			'bb/Medium/bb: Wyrmtongues are Medium creatures and have no bonuses or penalties due to their size.',
			'bb/Slow/bb: Wyrmtongues have a base speed of 20 feet, but their speed is never modified by armor or encumbrance.',
			'bb/Darkvision/bb: Wyrmtongues can see perfectly in darkness up to 60 feet away though they can only see in black and white in the dark.',
			'bb/Useful Junk/bb: Once per day, a wyrmtongue may pull from their bag a single-use alchemical or magical item to help with their current situation. This can be any alchemical worth no more than 50 gp or a small magical trinket capable of casting a spell whose level is no more than one-fourth the wyrmtongue\'s total character level. In either case, the item is treated as consumable and has a single use, regardless of the spell or alchemical item chosen.',
			'If the wyrmtongue loses their equipment, they cannot use this ability until they have recovered their equipment or until they have had sufficient time and access to be able rebuild their hoard.',
			'bb/Hoarder/bb: Wyrmtongues treat their Strength as being 4 points higher for the purposes of carrying capacity.',
			'bb/Languages/bb: Wyrmtongues begin play speaking Eredar. Wyrmtongues with high Intelligence scores may know any language (other than secret languages).'
		],
		false
	);
	require $startDir.'pageEnd.php';
?>