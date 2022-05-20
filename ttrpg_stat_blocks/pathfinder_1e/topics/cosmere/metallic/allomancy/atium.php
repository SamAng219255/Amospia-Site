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
	allomancy(
		'Atium', // Metal
		'Seer', // User
		[
			'Quadrant' => 'Temporal',
			'Internal/External' => 'Internal',
			'Pushing/Pulling' => 'Pushing'
		], // Categories
		'1 round',
		[
			'Atium is a god metal and therefore, with few exceptions, can only be burned by a mistborn. While burning atium, a mistborn or seer is able to see shadows of objects in the future and has a specifically expanded mental capacity to be able to understand these images. These shadows allow the seer to avoid any and all incoming attacks so long as they are of a physical nature (swords, fire, and darts of magic power as opposed to mental effects and spells that don\'t use an object to damage but rather instantly deal damage or cause an effect) and if it is at all possible to do so. A seer automatically succeeds at all Reflex saves, has a +30 dodge bonus to AC, is never considered flat-footed or surprised, treats sneak attacks against them as regular attacks, considers all opponents as flat-footed, and ignores opponent\'s armor and shield bonuses. Any creature making an attack against a seer burning atium or subject to an attack from a creature burning atium can attempt a DC 30 Sense Motive check. If they succeed they may make a Reflex save opposed by a Reflex save made by the seer. The seer does not get to automatically succeed at this save but they do receive a +10 bonus to it. If the creature succeeds at this save, the effects of the atium are negated in regards to this attack against this target. Additionally, a seer receives no bonuses against a creature with a near-future divergent timeline. This is near-future sight and therefore makes the seer\'s timeline near-future divergent.'
		], // Description
		[
			'The seer can see 2 rounds into the future, preventing creatures from making a Sense Motive check and Reflex save to negate the effects of the atium.'
		], // Flare
		[
			10 => [
				'effect' => 'The seer can sense the presence of shadows allowing them to gain the benefits without needing to be able to see the shadows.',
				'draw' => ''
			],
			30 => [
				'effect' => 'The seer\'s critical range increases by +3',
				'draw' => ''
			],
			60 => [
				'effect' => 'The seer\'s critical range increases by +3',
				'draw' => ''
			],
			100 => [
				'effect' => 'The seer\'s critical range increases by +3',
				'draw' => ''
			]
		]
	);
	require $startDir.'pageEnd.php';
?>