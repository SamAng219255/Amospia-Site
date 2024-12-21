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
		'Jinyu',
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
			'str' => 2,
			'wis' => 2,
			'cha' => -2
		],
		'',
		[
			'bb/Humanoid/bb: Jinyu are humanoid creatures with the aquatic, amphibious, and jinyu subtypes.',
			'bb/Medium/bb: Jinyu are Medium creatures and have no bonuses or penalties due to their size.',
			'bb/Normal Speed/bb: Jinyu have a base speed of 30 feet and a swim speed of 30 feet. Jinyu also gain the +8 racial bonus on Swim checks that a swim speed normally grants.',
			'bb/Amphibious/bb: Jinyu are amphibious and can breathe both air and water.',
			'bb/Hatred/bb: Jinyu gain a +1 racial bonus on attack rolls against hozen.',
			'bb/Riversight/bb: Jinyu receive ii/riversight/ii as a spell-like ability that can be cast once per day.',
			'bb/Serenity/bb: Jinyu gain a +2 racial bonus on Will saves and a +1 racial bonus on Concentration checks.',
			'bb/Water Affinity/bb: If a jinyu is a sorcerer with the water elemental bloodline, they treat their Charisma score as 2 points higher for all sorcerer spells and class abilities. Furthermore, a jinyu is able to cast water domain spells casts their domain powers and spells at +1 caster level. This trait does not give jinyu early access to level-based powers; it only affects powers that they could already use without this trait.',
			'bb/Languages/bb: Jinyu begin play speaking Pandaren and Common. Jinyu with high Intelligence scores can choose from Darnassian, Draenei, Dwarven, Gnomish, Mogu, Orcish, and Pandaren.'
		],
		false
	);
	require $startDir.'pageEnd.php';
?>