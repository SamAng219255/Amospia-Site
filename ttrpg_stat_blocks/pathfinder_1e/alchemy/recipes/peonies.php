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
	advAlchemyActivatedBlock(
		'Dancing Peonies',// Name
		false,
		[
			'fire',
			'firework',
			'light'
		],// Descriptors
		1,// Level
		'1 standard action',// Activation Time
		'1 round/level',// Duration
		'Reflex negates',// Saving Throw
		[
			'This paper disc contains 3 small paper packets that move about randomly and spit a trail of bright sparks. Each packet deals 1 point of damage to creatures in its square, blinds them for 1d2 rounds, and then moves 5 feet in a random direction. Creatures in a square with a packet can make Reflex save against each packet avoid taking damage and being blinded by that packet.',
			'This disc can be thrown as part of activating it. It is thrown as a ranged weapon attack with a range increment of 20 feet and maximum range of 100 feet. This attack never deals damage and you are lways considered proficient with it.'
		] // Description
	);
	require $startDir.'pageEnd.php';
?>