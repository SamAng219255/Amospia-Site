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
		'Oshu\'nei',
		11,
		'Oshu\'nei are the descendants of both orcs and draenei. Few surviving individuals remain, most believing the rest were all killed and that they are the sole survivor due to their rarity and how dispersed they became. All known individuals are the result of orcs forcing draenei slaves to bear their children. Oshu\'nei are generally scorned both by orcs and draenei. Oshu\'nei is a draenic word meaning "Children of Spirit".',
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
			'bb/Humanoid/bb: Oshu\'nei are humanoid creatures with the draenei and orc subtypes.',
			'bb/Medium/bb: Oshu\'nei are Medium creatures and have no bonuses or penalties due to their size.',
			'bb/Normal Speed/bb: Oshu\'nei have a base speed of 30 feet.',
			'bb/Arcane Talent/bb: Oshu\'nei treat their caster level as one higher when casting arcane spells of a school chosen at character creation.',
			'bb/Hardy/bb: Oshu\'nei gain a +2 racial bonus on saving throws against poison, spells, and spell-like abilities.',
			'bb/Stability/bb: Oshu\'nei receive a +4 racial bonus to your CMD when resisting bull rush or trip attempts while standing on the ground.',
			'bb/Weapon Familiarity/bb: Oshu\'nei are proficient with greataxes, and orcish weapons.',
			'bb/Languages/bb: Oshu\'nei begin play speaking Draenei and Orcish. Oshu\'nei with high Intelligence scores can choose from Common, Ogre.'
		],
		false
	);
	require $startDir.'pageEnd.php';
?>