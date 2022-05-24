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
		'Quintenium/Zinc', // Metal
		false, // User
		[
			'Quadrant' => 'Physical',
			'Internal/External' => 'Internal',
			'Pushing/Pulling' => 'Pulling'
		], // Categories
		'1 minute',
		[
			'While burning quintenium/zinc, the misting is able to weave words that entrance their subjects. As a standard action, the misting can make a Diplomacy check opposed by the target\'s Will save. If the misting succeeds the target becomes charmed as though by ii/charm monster/ii except that it is language-dependent and that it lasts as long as the misting continues burning quintenium/zinc.'
		], // Description
		[
			'The subjects of the misting\'s charm are magically compelled to follow the misting\'s instructions as ii/suggestion/i except the subjects do not receive a save.'
		], // Flare
		[
			10 => [
				'effect' => 'Treat the subject\'s attitude as helpful instead.',
				'draw' => ''
			],
			20 => [
				'effect' => 'The misting receives a +4 bonus to Diplomacy and Bluff checks.',
				'draw' => 'The misting takes a -4 penalty to Diplomacy and Bluff checks.'
			],
			30 => [
				'effect' => 'Subjects can understand the misting so long as they can understand any spoken language.',
				'draw' => ''
			],
			40 => [
				'effect' => 'The misting receives a +4 bonus to Diplomacy and Bluff checks.',
				'draw' => 'The misting takes a -4 penalty to Diplomacy and Bluff checks.'
			],
			60 => [
				'effect' => 'The misting receives a +4 bonus to Diplomacy and Bluff checks and subjects can understand the misting as though the misting had truespeech.',
				'draw' => 'The misting takes a -4 penalty to Diplomacy and Bluff checks.'
			],
			80 => [
				'effect' => 'The misting receives a +4 bonus to Diplomacy and Bluff checks.',
				'draw' => 'The misting takes a -4 penalty to Diplomacy and Bluff checks.'
			],
			100 => [
				'effect' => 'The misting receives a +4 bonus to Diplomacy and Bluff checks and the effect can affect creatures that are otherwise immune to mind-affecting effects.',
				'draw' => 'The misting takes a -4 penalty to Diplomacy and Bluff checks.'
			]
		]
	);
	require $startDir.'pageEnd.php';
?>