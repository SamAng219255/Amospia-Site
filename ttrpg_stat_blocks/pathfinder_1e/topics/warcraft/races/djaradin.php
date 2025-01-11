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
		'Djaradin',
		22,
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
			'bb/Humanoid/bb: Djaradin are humanoid creatures with the djaradin, fire, and giant subtypes.',
			'bb/Fire Subtype/bb: Djaradin are immune to fire and vulnerable to cold.',
			'bb/Large/bb: Djaradin are Large creatures and gain a -1 size penalty to their AC, a -1 size penalty on attack rolls, a +1 size bonus on combat maneuver checks and to their Combat Maneuver Defense, and a -4 size penalty on Stealth checks. bb/Djaradin also receive a +2 size bonus to Strength and -2 size penalty to Dexterity./bb These are permanent and stack with the ogre\'s other racial ability score adjustments but are lost while polymorphed. Djaradin occupy a 10-foot area and have a reach of 10 feet.',
			'bb/Normal Speed/bb: Djaradin have a base speed of 30 feet.',
			'bb/Ancient Might/bb: Djaradin select one extra feat at 1st level. This feat must be from the list of fighter combat feats. If a djaradin has Strength score of 13 or higher and base attack bonus of +1 or higher, they also gain Power Attack as a bonus feat.',
			'bb/Dragon Hunter/bb: Djaradin gain a +1 bonus on attack rolls and a +2 dodge bonus to AC and on saving throws against the extraordinary, supernatural, and spell-like abilities of dragons. In addition, they gain a +2 racial bonus on Knowledge (arcana) checks to identify dragons and can make such checks untrained.',
			'bb/Ferocity/bb: Djaradin gain the following extraordinary ability: If the hit points of a djaradin fall below 0 but they are not yet dead, they can continue to fight. If they do, they are staggered, and lose 1 hit point each round. They still die when their hit points reach a negative amount equal to their Constitution score.',
			'bb/Magma Affinity/bb: Djaradin are treated as +1 level higher when casting spells with the earth or fire descriptors, using granted powers of the Earth or Fire domains, using bloodline powers of the earth or fire elemental bloodlines, using the revelations of the oracle\'s flame mystery, and determining the damage of alchemist bombs that deal fire damage. This trait does not give members of this race early access to level-based powers; it only affects powers that they could already use without this trait.',
			'bb/Languages/bb: Djaradin begin play speaking Djaradin. Djaradin with high Intelligence scores can choose from Common, Draconic, Kalimag, and Orcish.'
		],
		false
	);
	require $startDir.'pageEnd.php';
?>