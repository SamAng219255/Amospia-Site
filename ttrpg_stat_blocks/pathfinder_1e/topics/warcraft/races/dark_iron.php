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
		'Dark iron dwarves are strong and resilient but not very nimble.',
		[
			'bb/Humanoid/bb: Dark iron dwarves are humanoid creatures with the dwarf subtype.',
			'bb/Medium/bb: Dark iron dwarves are Medium creatures and have no bonuses or penalties due to their size.',
			'bb/Slow and Steady/bb: Dark iron dwarves have a base speed of 20 feet and speed is never modified by armor or encumbrance.',
			'bb/Darkvision/bb: Dark iron dwarves can see perfectly in darkness up to 60 feet away though they can only see in black and white in the dark.',
			'bb/Light Blindness/bb: Abrupt exposure to bright light blinds dark iron dwarves for 1 round; on subsequent rounds, they are dazzled as long as they remain in the affected area.',
			'bb/Dungeon Delver/bb: Dark iron dwarves can move unhindered through difficult terrain while underground. They also receive a +2 racial bonus on Knowledge (dungeoneering) checks.',
			'bb/Fireblood/bb: Dark iron dwarves gain a +2 racial bonus on saving throws against poison, spells, and spell-like abilities. Dark iron dwarves gain fast healing 2 for 1 round anytime they take fire damage (whether or not this fire damage overcomes their fire resistance). Dark iron dwarves can heal up to 2 hit points per level per day with this ability, after which it ceases to function.',
			'bb/Forged in Flames/bb: Dark iron dwarves gain resistance 5 to fire.',
			'bb/Mass Production/bb: When using the Craft skill to create an item, dark iron dwarves treat the DC as being 2 higher when multiplied times their check result to determine the amount of progress made that week.',
			'bb/Languages/bb: Dark iron dwarves begin play speaking Common and Dwarven. Dark iron dwarves with high Intelligence scores can choose from Darnassian, Draenei, Gnomish, Orcish, Pandaren, and Thalassian.'
		],
		false
	);
	require $startDir.'pageEnd.php';
?>