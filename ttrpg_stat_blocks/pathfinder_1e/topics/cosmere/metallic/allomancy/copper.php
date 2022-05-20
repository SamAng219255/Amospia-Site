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
		'Copper', // Metal
		'Smoker', // User
		[
			'Quadrant' => 'Mental',
			'Internal/External' => 'Internal',
			'Pushing/Pulling' => 'Pulling'
		], // Categories
		'10 minutes',
		[
			'While burning copper, the smoker emits a "coppercloud" in a 60 foot radius that blocks all divination effects and spells of an equal or lower level both used within the cloud and that are used on targets within the cloud. Additionally, while the coppercloud is in effect, the smoker is immune to mind-affecting effects including allomancy (zinc and brass) effects.'
		], // Description
		[
			'Flaring copper yields no additional apparent effect.'
		], // Flare
		[
			10 => [
				'effect' => 'Your ability\'s spell level increases by 0.5',
				'draw' => ''
			],
			20 => [
				'effect' => 'Radius increases by 5 feet',
				'draw' => ''
			],
			30 => [
				'effect' => 'Your ability\'s spell level increases by 0.5',
				'draw' => ''
			],
			40 => [
				'effect' => 'Radius increases by 5 feet',
				'draw' => ''
			],
			60 => [
				'effect' => 'Radius increases by 5 feet; Your ability\'s spell level increases by 0.5',
				'draw' => ''
			],
			80 => [
				'effect' => 'Radius increases by 5 feet',
				'draw' => ''
			],
			100 => [
				'effect' => 'Radius increases by 5 feet; Your ability\'s spell level increases by 0.5',
				'draw' => ''
			]
		]
	);
	require $startDir.'pageEnd.php';
?>