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
		'Stoneborn',
		16,
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
			'bb/Monstrous Humanoid/bb: Stoneborn are monstrous humanoids with the sinborn and stoneborn subtypes.',
			'bb/Medium/bb: Stoneborn are Medium creatures and have no bonuses or penalties due to their size.',
			'bb/Slow and Steady/bb: Stoneborn have a base speed of 20 feet, but their speed is never modified by armor or encumbrance.',
			'bb/Flight/bb: Stoneborn have a 30-foot fly speed with clumsy maneuverability.',
			'bb/Darkvision/bb: Stoneborn can see perfectly in darkness up to 60 feet away though they can only see in black and white in the dark.',
			'bb/Damage Reduction/bb: Stoneborn gain DR 5/adamantine.',
			'bb/Natural Armor/bb: Stoneborn receive a +2 bonus to natural armor.',
			'bb/Healthy/bb: Stoneborn gain +4 bonus against poisons and diseases, including magical diseases.',
			'bb/Sinborn/bb: Stoneborn are always treated as evil for the purposes of spells and effects other than those of the Divination school. Stoneborn are harmed by positive energy like undead, except they take nonlethal damage instead. Stoneborn are also healed by negative energy like undead, except they only receive half as much health. Stoneborn can be healed using spells such as make whole as though they were constructs. Damaging spells and effects with the light descriptor deal half again as much damage to stoneborn and treated stoneborn as undead that are vulnerable to sunlight.',
			'bb/Languages/bb: Stoneborn begin play speaking Shadowspeak. Stoneborn with high Intelligence scores may know any language (other than secret languages).'
		],
		false
	);
	require $startDir.'pageEnd.php';
?>