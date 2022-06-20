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
	advAlchemyRocketBlock(
		'Smoke Rocket',// Name
		false,
		[
			'firework'
		],// Descriptors
		1,// Level
		'1 standard action',// Ignition Time
		90,// Range Increment
		315,// Max Range
		'instantaneous, 1 round/level; see text',// Duration
		'Reflex partial',// Saving Throw
		[
			'As a ii/smoke rocket/ii rocket travels, it leaves a 5-foot-diameter trail of thick, potentially colorful, smoke, before exploding at its destination in a 20-foot-spread of smoke. It begins leaving this trail in the first square it passes through after leaving the user\'s square. This trail then continues following the same path as the rocket.',
			'This smoke obscures ight like ii/fog cloud/ii and hangs in the air for a number of rounds equal to the recipe\'s alchemy level. Creatures in the area of the smoke when the rocket is fired, or that end their turn in it afterward, are sickened for 1d4 rounds. A moderate or stronger wind dissipates the smoke in 1 round.'
		] // Description
	);
	require $startDir.'pageEnd.php';
?>