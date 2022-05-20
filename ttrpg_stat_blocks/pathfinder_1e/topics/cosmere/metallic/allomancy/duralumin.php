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
		'Duralumin', // Metal
		'Duralumin Gnat', // User
		[
			'Quadrant' => 'Enhancement',
			'Internal/External' => 'Internal',
			'Pushing/Pulling' => 'Pushing'
		], // Categories
		'1 round',
		[
			'Upon burning duralumin, a duralumin gnat instantly uses up all of their stores of investiture that are actively being used to fuel active applications of investiture. This includes burning metals, tapping metalminds, using surges, the passive effects of stormlight, and all similar abilities. This applies a +50% bonus to the effectiveness of the abilities, adds +1 caster level, and increases dynamic spell levels by +0.5 for every relevant unit of investiture being expended in addition to any logical or lore effects not encapsulated as such as determined by the GM. In the case of burning metals this unit is 1/4 ounce of metal while for tapping a metal mind its the current increment being tapped. Any ongoing effects of the, now amplified, ability last until the start of the duralumin gnat\'s next round at which point the investiture is fully expended. No action taken by the duralumin gnat can prevent their stores from fully expending in this way. All of the relevant stores of investiture are otherwise lost.'
		], // Description
		[
			'Flaring duralumin provides no additional effect.'
		], // Flare
		[
			10 => [
				'effect' => 'The duralumin gnat can choose 2 types of investiture to not be affected',
				'draw' => ''
			],
			20 => [
				'effect' => 'The duralumin gnat can choose 2 additional types of investiture to not be affected',
				'draw' => ''
			],
			40 => [
				'effect' => 'The duralumin gnat can choose 3 additional types of investiture to not be affected',
				'draw' => ''
			],
			60 => [
				'effect' => 'The duralumin gnat can choose 3 additional types of investiture to not be affected',
				'draw' => ''
			],
			80 => [
				'effect' => 'The duralumin gnat can choose 3 additional types of investiture to not be affected',
				'draw' => ''
			],
			100 => [
				'effect' => 'The duralumin gnat can choose 3 additional types of investiture to not be affected',
				'draw' => ''
			]
		]
	);
	require $startDir.'pageEnd.php';
?>