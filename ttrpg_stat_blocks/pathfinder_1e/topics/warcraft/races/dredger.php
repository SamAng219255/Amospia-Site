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
		'Dredger',
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
			'con' => 2,
			'int' => -2
		],
		'',
		[
			'bb/Monstrous Humanoid/bb: Dredgers are monstrous humanoids with the sinborn and dredger subtypes.',
			'bb/Medium/bb: Dredgers are Medium creatures and have no bonuses or penalties due to their size.',
			'bb/Slow/bb: Dredgers have a base speed of 20 feet and cannot take the run action.',
			'bb/Darkvision/bb: Dredgers can see perfectly in darkness up to 60 feet away though they can only see in black and white in the dark.',
			'bb/Burden Sworn/bb: Dredgers never have their speed modified by armor and suffer no effects from encumbrance less than their maximum load. Dredgers calculate their carrying capacity as though they were one size category larger and their Strength score was 4 points higher than it is.',
			'bb/Muckborn/bb: Dredgers covered in mud or muck gain fast healing 2 for 1 round. Dredgers can completely submerge themselves in mud or muck or rub it on their wounds to gain this benefit. Dredgers can only heal up to 2 hit points per level per day with this ability, after which it ceases to function.',
			'bb/Skill Bonus/bb: Dredgers are always treated as evil for the purposes of spells and effects other than those of the Divination school. Dredgers are harmed by positive energy like undead, except they take nonlethal damage instead. Dredgers are also healed by negative energy like undead, except they only receive half as much health. Damaging spells and effects with the light descriptor deal half again as much damage to dredgers and treat dredgers as undead that are vulnerable to sunlight.',
			'bb/Languages/bb: Dredgers begin play speaking Shadowspeak. Dredgers with high Intelligence scores may know any language (other than secret languages).'
		],
		false
	);
	require $startDir.'pageEnd.php';
?>