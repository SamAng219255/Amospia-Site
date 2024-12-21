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
		'Vrykul',
		17,
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
			'wis' => -2
		],
		'',
		[
			'bb/Humanoid/bb: Vrykul are humanoid creatures with the giant and vrykul subtypes.',
			'bb/Large/bb: Vrykul are Large creatures and gain a -1 size penalty to their AC, a -1 size penalty on attack rolls, a +1 size bonus on combat maneuver checks and to their Combat Maneuver Defense, and a -4 size penalty on Stealth checks. bb/Vrykul also receive a +2 size bonus to Strength and -2 size penalty to Dexterity./bb These are permanent and stack with the ogre\'s other racial ability score adjustments but are lost while polymorphed. Vrykul occupy a 10-foot area.',
			'bb/Normal Speed/bb: Vrykul have a base speed of 30 feet.',
			'bb/Ferocity/bb: Vrykul gain the following extraordinary ability: If the hit points of a vrykul fall below 0 but they are not yet dead, they can continue to fight. If they do, they are staggered, and lose 1 hit point each round. They still die when their hit points reach a negative amount equal to their Constitution score.',
			'bb/Natural Armor/bb: Vrykul gain a +2 bonus to natural armor.',
			'bb/Runic Magic/bb: Vrykul gain a +1 bonus to the DC of spells they cast that create glyphs, symbols, or other magical writings. They also gain a +2 racial bonus on saving throws against such spells.',
			'bb/Weapon Familiarity/bb: Vrykul are proficient with battleaxes and greataxes.',
			'bb/Languages/bb: Vrykul begin play speaking Vrykul. Vrykul with high Intelligence scores can choose from Common, Orcish, Titan, and the language of death.'
		],
		false
	);
	require $startDir.'pageEnd.php';
?>