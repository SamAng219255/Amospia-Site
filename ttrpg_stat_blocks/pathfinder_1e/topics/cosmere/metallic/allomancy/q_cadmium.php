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
		'Quintenium/Cadmium', // Metal
		false, // User
		[
			'Quadrant' => 'Temporal',
			'Internal/External' => 'External',
			'Pushing/Pulling' => 'Pulling'
		], // Categories
		'1 round',
		[
			'Within a 60-foot-radius sphere around a misting burning quintenium/cadmium, all creatures are slowed as by the ii/slow/ii spell.'
		], // Description
		[
			'The slowing effect increases strength. The penalties on attack rolls, on Reflex saves, and to AC increase to –2, and affected creatures move at one-fourth speed.'
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