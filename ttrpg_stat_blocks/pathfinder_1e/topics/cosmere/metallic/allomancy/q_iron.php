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
		'Quintenium/Iron', // Metal
		false, // User
		[
			'Quadrant' => 'Physical',
			'Internal/External' => 'External',
			'Pushing/Pulling' => 'Pulling'
		], // Categories
		'1 round',
		[
			'While burning quintenium/iron, the misting can make any part of their body glow with blue energy that disrupts the life force of living creatures. Any creature attempting to grapple the misting or that is touched as a melee touch attack takes 1 point of strength damage.'
		], // Description
		[
			'While flaring quintenium/iron, the damage increases to 2 points of strength damage.'
		], // Flare
		[
			10 => [
				'effect' => 'The misting can cover any held melee weapons with the same energy making them deal strength damage on a successful hit as though touched.',
				'draw' => 'The misting takes 1 point strength damage that cannot be cured while the drawback is in effect.'
			],
			20 => [
				'effect' => 'The misting receives a +1 enhancement bonus to hit with any melee attack charged with this energy.',
				'draw' => 'The misting takes an additional point strength damage that cannot be cured while the drawback is in effect.'
			],
			30 => [
				'effect' => 'The damage increases to 1d2 points or 1d4 points when flaring.',
				'draw' => ''
			],
			40 => [
				'effect' => 'The misting receives a +1 enhancement bonus to hit with any melee attack charged with this energy.',
				'draw' => 'The misting takes an additional point strength damage that cannot be cured while the drawback is in effect.'
			],
			60 => [
				'effect' => 'The misting receives a +1 enhancement bonus to hit with any melee attack charged with this energy and the damage increases to 1d3 points or 1d5 points when flaring.',
				'draw' => 'The misting takes an additional point strength damage that cannot be cured while the drawback is in effect.'
			],
			80 => [
				'effect' => 'The misting receives a +1 enhancement bonus to hit with any melee attack charged with this energy.',
				'draw' => 'The misting takes an additional point strength damage that cannot be cured while the drawback is in effect.'
			],
			100 => [
				'effect' => 'The misting receives a +1 enhancement bonus to hit with any melee attack charged with this energy and the damage increases to 1d4 points or 1d6 points when flaring.',
				'draw' => 'The misting takes three additional point strength damage that cannot be cured while the drawback is in effect.'
			]
		]
	);
	require $startDir.'pageEnd.php';
?>