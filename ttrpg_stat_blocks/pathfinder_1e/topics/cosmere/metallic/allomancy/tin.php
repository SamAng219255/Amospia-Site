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
		'Tin', // Metal
		'Tineye', // User
		[
			'Quadrant' => 'Physical',
			'Internal/External' => 'Internal',
			'Pushing/Pulling' => 'Pulling'
		], // Categories
		'1 hour',
		[
			'While burning tin, the tineye receives a +10 bonus to perception checks involving physical senses. When flaring tin, in addition to the normal benefits, the tineye is able to ignore the effects of the exhausted and fatigued conditions for 1 minute.'
		], // Description
		[
			'While flaring steel, a tineye\'s senses increase even more, potentially to a degree such that it sends a shock through their body. The bonus to percpetion increases by half and any current exhausted or fatigued conditions are negated for 1 minute after they start flaring. The tineye can acquire the fatigued or exhausted conditions during this time and, once the minute is over, any previous sources return if they were not healed, potentially stacking with any recently acquired fatigue. A tineye may renew their flare as often as they like, spending additional tin, to regain this benefit.'
		], // Flare
		[
			10 => [
				'effect' => 'low-light vision',
				'draw' => '-5 perception'
			],
			20 => [
				'effect' => 'bonus to perception increases by +5',
				'draw' => '-5 perception'
			],
			30 => [
				'effect' => 'darkvision 60\' and light sensitivity',
				'draw' => ''
			],
			40 => [
				'effect' => 'bonus to perception increases by +5',
				'draw' => '-5 perception'
			],
			60 => [
				'effect' => 'bonus to perception increases by +5; darkvision 120\' and light blindness',
				'draw' => '-5 perception'
			],
			80 => [
				'effect' => 'bonus to perception increases by +5',
				'draw' => '-5 perception'
			],
			100 => [
				'effect' => 'bonus to perception increases by +5; see in darkness',
				'draw' => 'Complete loss of all senses'
			]
		]
	);
	require $startDir.'pageEnd.php';
?>