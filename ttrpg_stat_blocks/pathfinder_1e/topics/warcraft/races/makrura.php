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
		'Makrura',
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
			'wis' => 2,
			'int' => -4
		],
		'',
		[
			'bb/Monstrous Humanoid/bb: Makrura are monstrous humanoid creatures with the aquatic and amphibious subtypes.',
			'bb/Medium/bb: Makrura are Medium creatures and have no bonuses or penalties due to their size.',
			'bb/Normal Speed/bb: Makrura have a base speed of 30 feet and a swim speed of 30 feet which gives the normal +8 racial bonus to Swim checks that a swim speed normally grants.',
			'bb/Darkvision/bb: Makrura can see perfectly in darkness up to 60 feet away though they can only see in black and white in the dark.',
			'bb/Amphibious/bb: Makrura can breathe both in air and in water.',
			'bb/Claws/bb: Makrura receive two claw attacks. These are primary natural attacks that deal 1d6 points of slashing damage.',
			'bb/Natural Armor/bb: Makrura gain a +1 natural armor bonus to their AC.',
			'bb/Water Affinity/bb: If a makrura is a sorcerer with the water elemental bloodline, they treat their Charisma score as 2 points higher for all sorcerer spells and class abilities. Furthermore, a makrura is able to cast water domain spells casts their domain powers and spells at +1 caster level. This trait does not give makrura early access to level-based powers; it only affects powers that they could already use without this trait',
			'bb/Languages/bb: Makrura begin play speaking Nerglish. Makrura with high Intelligence scores can choose from Common, Kalimag (Aquan), Nazja, and Orcish.'
		],
		false
	);
	require $startDir.'pageEnd.php';
?>