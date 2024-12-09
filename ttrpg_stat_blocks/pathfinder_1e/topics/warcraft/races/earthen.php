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
		'Khaz Algari Earthen',
		12,
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
		'Khaz algari earthen are strong and resilient but not very nimble.',
		[
			'bb/Awakened Titan Constructs/bb: Khaz algari earthen are construct creatures with the dwarf and living subtypes.',
			'Khaz algari earthen are physically constructs but the influence of Azeroth\'s Worldsoul has transformed them into something much more life-like and granted them sapience. Khaz algari earthen have a Constitution score and are not immune to all effect that require a Fortitude save but are immune to poisons and diseases and to the nauseated and sickened conditions. Khaz algari earthen are also subject to mind-affecting effects, ability damage, ability drain, fatigue, exhaustion, energy drain, and nonlethal damage. Khaz algari earthen do not risk death due to massive damage, but they are immediately destroyed when reduced to 0 hit points or fewer and cannot be raised or resurrected. Khaz algari earthen gain no bonus hit points from their type. Khaz algari earthen must breathe, eat (see ingest minerals), and sleep. Khaz algari earthen are subject to any effects that target Humanoids as though they were a Humanoid.',
			'bb/Medium/bb: Khaz algari earthen are Medium creatures and have no bonuses or penalties due to their size.',
			'bb/Slow and Steady/bb: Khaz algari earthen have a base speed of 20 feet and speed is never modified by armor or encumbrance.',
			'bb/Darkvision/bb: Khaz algari earthen can see perfectly in darkness up to 60 feet away though they can only see in black and white in the dark.',
			'bb/Azerite Surge/bb: Once per day, as a standard action, khaz algari earthen can make a supernatural breath weapon attack that deals 1d6 points of fire damage to enemies in a 15-foot cone. All enemies within the affected area must make a Reflex saving throw to avoid taking damage. The save DC against this breath weapon is 10 + 1/2 the earthen\'s character level + their Constitution modifier. Those who succeed at the save take no damage from the attack. Allies within the region receive the same number of points of healing instead.',
			'bb/Ingest Minerals/bb: Khaz algari earthen cannot eat meat or plants but instead eat rocks and minerals. They can still consume potions and other magical or alchemical brews to receive their benefits.',
			'bb/Titan-Wrought Frame/bb: Earthen gain a +2 natural armor bonus.',
			'bb/Languages/bb: Khaz algari earthen begin play speaking Common and Titan. Khaz algari earthen with high Intelligence scores can choose from Darnassian, Draenei, Dwarven, Gnomish, Orcish, Pandaren, and Thalassian.'
		],
		false
	);
	require $startDir.'pageEnd.php';
?>