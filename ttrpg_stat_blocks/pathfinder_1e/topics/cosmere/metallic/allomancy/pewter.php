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
		'Pewter', // Metal
		'Pewterarm', // User
		[
			'Quadrant' => 'Physical',
			'Internal/External' => 'Internal',
			'Pushing/Pulling' => 'Pushing'
		], // Categories
		'1 minute',
		[
			'While burning pewter, the pewterarm receives a +100% multiplicative bonus to their strength, dexterity, and constitution, all of their movement speeds are doubled, they acquire fast healing equal to half their number of hit dice, they ignore the effects of the exhausted, fatigued, nauseated, and sickened conditions, and they do not die until their total hit points reach a negative amount equal to twice their constitution score. They also gain the ferocity ability. For every minute the pewterarm burns pewter, they must consume a quarter again as much food that day as normal and they must sleep an extra hour the next time they rest in order to count as having had a full night\'s rest. If these bonuses are increased by an ability or other effect, the increase in required food and sleep is applied again for every additional +100% that is added onto the bonus to their physical scores.'
		], // Description
		[
			'When flaring pewter, the multiplicative bonus to the pewterarm\'s strength, dexterity, and constitution is increased by +50% and their movement speed is increased by another half.'
		], // Flare
		[
			10 => [
				'effect' => 'The pewterarm doesn\'t die until reached three times their negative constitution score and is immune to the staggered condition.',
				'draw' => '-2 to all physical stats'
			],
			20 => [
				'effect' => 'The multiplicative bonus to the pewterarm\'s physial stats increases by +20%.',
				'draw' => '-2 to all physical stats'
			],
			30 => [
				'effect' => 'The fast healing increases by +1.',
				'draw' => ''
			],
			40 => [
				'effect' => 'The multiplicative bonus to the pewterarm\'s physial stats increases by +20%.',
				'draw' => '-2 to all physical stats'
			],
			60 => [
				'effect' => 'The multiplicative bonus to the pewterarm\'s physial stats increases by +20%. The fast healing increases by +1.',
				'draw' => '-2 to all physical stats'
			],
			80 => [
				'effect' => 'The multiplicative bonus to the pewterarm\'s physial stats increases by +20%.',
				'draw' => '-2 to all physical stats'
			],
			100 => [
				'effect' => 'The multiplicative bonus to the pewterarm\'s physial stats increases by +20%. The fast healing increases by +1.',
				'draw' => '-2 to all physical stats'
			]
		]
	);
	require $startDir.'pageEnd.php';
?>