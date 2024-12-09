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
		'Lightforged Draenei',
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
			'str' => 4,
			'dex' => -2,
			'int' => 2,
			'wis' => 2,
			'cha' => 2
		],
		'Lightforged Draenei are robust and charismatic, with a keen intellect and a deep spiritual insight, though their size and build can make them less agile.',
		[
			'bb/Humanoid/bb: Lightforged Draenei are humanoid creatures with the eredar subtype.',
			'bb/Medium/bb: Lightforged Draenei are Medium creatures and have no bonuses or penalties due to their size.',
			'bb/Normal Speed/bb: Lightforged Draenei have a base speed of 30 feet.',
			'bb/Demonbane/bb: Lightforged draenei receive a +1 bonus on attack rolls against outsiders with the evil subtype.',
			'bb/Forge of Light/bb: Lightforged draenei receive a +2 racial bonus to Craft checks to forge items made of metal.',
			'Once per day, a lightforged draenei can summon a forge of light suitable to working metal. This forge is immobile and sheds light as daylight. This forge lasts for 24 hours per level or until dismissed. A lightforged draenei can only have one forge of light summoned at a time. Summoning a new forge of light immediately causes the old one to be dismissed. This is a spell-like ability.',
			'bb/Light\'s Judgment/bb: When a lightforged draenei reaches 7th level in any combination of classes, they gain the following spell-like ability (the caster level is equal to the user\'s character level):',
			'1/day—ii/holy smite/ii',
			'If the lightforged draenei dies with this ability available, it is immediately cast, centered on their location. ',
			'bb/Languages/bb: Lightforged Draenei begin play speaking Common and Draenei. Lightforged Draenei with high Intelligence scores can choose from Eredun, Gnomish, Darnassian, Dwarven, Orcish, Pandaren, Thalassian.'
		],
		false
	);
	require $startDir.'pageEnd.php';
?>