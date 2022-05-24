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
		'Quintenium/Bronze', // Metal
		false, // User
		[
			'Quadrant' => 'Mental',
			'Internal/External' => 'Internal',
			'Pushing/Pulling' => 'Pushing'
		], // Categories
		'1 round',
		[
			'While burning quintenium/bronze, the misting can see invisible objects and beings as though they were affected by ii/see invisibility/ii, except that it lasts so long as they continue burning the metal.'
		], // Description
		[
			'While flaring quintenium/bronze, the misting can see through all illusions, transmutations, and other magic gaining the affects of ii/true seeing/ii.'
		], // Flare
		[
			10 => [
				'effect' => 'The misting can cast ii/detect magic/ii as a spell-like ability at-will.',
				'draw' => ''
			],
			20 => [
				'effect' => 'The misting receives a +2 bonus to Perception to find hidden things.',
				'draw' => ''
			],
			30 => [
				'effect' => 'The misting can cast ii/detect chaos/evil/good/law/ii as spell-like abilities at-will.',
				'draw' => ''
			],
			40 => [
				'effect' => 'The misting receives a +2 bonus to Perception to find hidden things.',
				'draw' => ''
			],
			60 => [
				'effect' => 'The misting receives a +2 bonus to Perception to find hidden things and the misting gains the benefit of ii/arcane sight/ii.',
				'draw' => ''
			],
			80 => [
				'effect' => 'The misting receives a +2 bonus to Perception to find hidden things.',
				'draw' => ''
			],
			100 => [
				'effect' => 'The misting receives a +2 bonus to Perception to find hidden things and the misting can see all alignment auras within 120\' as a ghostly radiance.',
				'draw' => ''
			]
		]
	);
	require $startDir.'pageEnd.php';
?>