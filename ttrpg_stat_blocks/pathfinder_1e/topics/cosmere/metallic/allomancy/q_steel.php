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
		'Quintenium/Steel', // Metal
		false, // User
		[
			'Quadrant' => 'Physical',
			'Internal/External' => 'External',
			'Pushing/Pulling' => 'Pushing'
		], // Categories
		'1 round',
		[
			'While burning quintenium/steel, the misting can infuse their attacks with elemental energy. As a swift action, the misting may choose an elemental damage type (acid, electricity, fire, cold, or sonic). When they make an attack with a natural or manufactured weapon, they may add 1d6 points of damage of that type.'
		], // Description
		[
			'While flaring quintenium/steel, the damage is increased by 50%.'
		], // Flare
		[
			10 => [
				'effect' => 'The misting adds their charisma modifier to the damage dealt.',
				'draw' => ''
			],
			20 => [
				'effect' => 'The misting receives a +1 enhancement bonus on attack and damage rolls infused with elemental energy.',
				'draw' => ''
			],
			30 => [
				'effect' => 'The added damage increases to 1d8 points of damage.',
				'draw' => ''
			],
			40 => [
				'effect' => 'The misting receives a +1 enhancement bonus on attack and damage rolls infused with elemental energy.',
				'draw' => ''
			],
			60 => [
				'effect' => 'The misting receives a +1 enhancement bonus on attack and damage rolls infused with elemental energy and the misting gains the ability to make melee touch attacks that deal 1d6 energy damage.',
				'draw' => ''
			],
			80 => [
				'effect' => 'The misting receives a +1 enhancement bonus on attack and damage rolls infused with elemental energy.',
				'draw' => ''
			],
			100 => [
				'effect' => 'The misting receives a +1 enhancement bonus on attack and damage rolls infused with elemental energy, the added damage increases to 2d6 points of damage and the damage from touch attacks increases to 1d8.',
				'draw' => ''
			]
		]
	);
	require $startDir.'pageEnd.php';
?>