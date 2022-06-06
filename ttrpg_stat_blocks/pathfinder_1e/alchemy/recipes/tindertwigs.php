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
		'Tindertwig Box',// Name
		false,
		[
			'fire'
		],// Descriptors
		0,// Level
		'1 move action',// Activation Time
		'1d2 rounds',// Duration
		'none',// Saving Throw
		[
			'This box contains 25 individuals tindertwigs that can be used seperately. Each tindertwig is a small wooden stick with an alchemical substance at the end that ignites into a candle-sized flame when struck against a rough surface.',
			'Creating a flame with a tindertwig is much faster than creating a flame with tinder and a flint and steel or magnifying glass. Lighting a torch with a tindertwig is a standard action rather than a full-round action, and lighting any other fire with one is at least a standard action. A tindertwig burns for 1d2 rounds and sheds light as a candle. Tindertwigs are waterproof, but must be dried before you can strike them.'
		] // Description
	);
	require $startDir.'pageEnd.php';
?>