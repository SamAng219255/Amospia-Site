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
		'Quintenium/Copper', // Metal
		false, // User
		[
			'Quadrant' => 'Mental',
			'Internal/External' => 'Internal',
			'Pushing/Pulling' => 'Pulling'
		], // Categories
		'1 round',
		[
			'While burning quintenium/copper, the misting becomes invisible as per ii/invisibility/ii, except that it lasts so long as they continue burning the metal. If the misting performs an action that makes the invisibility end, it returns at the beginning of their next turn so long as they are still burning quintenium/copper.'
		], // Description
		[
			'While flaring quintenium/copper, the misting becomes magically silenced to other creatures while invisible.'
		], // Flare
		[
			10 => [
				'effect' => 'The first time per day that the misting makes an attack while invisible, the effect does not end.',
				'draw' => ''
			],
			30 => [
				'effect' => 'There is a 30% chance on subsequent attacks that the invisibility does not end.',
				'draw' => ''
			],
			60 => [
				'effect' => 'The effects functions as ii/greater invisibility/ii instead.',
				'draw' => ''
			],
			100 => [
				'effect' => 'Up to 4 other creatures all in contact with the misting are also made invisible. If the misting is flaring, the other creatures are also silenced.',
				'draw' => ''
			]
		]
	);
	require $startDir.'pageEnd.php';
?>