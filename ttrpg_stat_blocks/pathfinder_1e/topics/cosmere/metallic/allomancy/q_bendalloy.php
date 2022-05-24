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
		'Quintenium/Bendalloy', // Metal
		false, // User
		[
			'Quadrant' => 'Temporal',
			'Internal/External' => 'External',
			'Pushing/Pulling' => 'Pushing'
		], // Categories
		'1 round',
		[
			'Within a 15-foot-radius sphere around a misting burning quintenium/bendalloy, all creatures are hastened as by the ii/haste/ii spell.'
		], // Description
		[
			'The hastening effect increases strength. Affected creatures gain an additional move action each round. The movement speed increase changes to 50 feet, to a maximum of three times the creature’s normal speed for that movement type.'
		], // Flare
		[
			10 => [
				'effect' => 'The misting can exclude one creature from the effect, the misting cannot exclude themself.',
				'draw' => ''
			],
			30 => [
				'effect' => 'The misting can exclude up to two creatures instead.',
				'draw' => ''
			],
			60 => [
				'effect' => 'The misting can exclude up to three creatures instead.',
				'draw' => ''
			],
			100 => [
				'effect' => 'The misting can exclude up to four creatures instead.',
				'draw' => ''
			]
		]
	);
	require $startDir.'pageEnd.php';
?>