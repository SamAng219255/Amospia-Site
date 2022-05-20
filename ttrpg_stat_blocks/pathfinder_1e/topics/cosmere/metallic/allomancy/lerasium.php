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
		'Lerasium', // Metal
		false, // User
		[
			'Quadrant' => 'Enhancement',
			'Internal/External' => 'Internal',
			'Pushing/Pulling' => 'Pushing'
		], // Categories
		'1 round',
		[
			'Lerasium is a god metal, but, unlike other god metals and their alloys, lerasium can be burned by anybody. When a bead of lerasium is ingested, the individual transforms into a mistborn with a spell level of 6, allowing them to burn any type of allomantically burnable metal. If the individual already has one or more innate allomantic abilities, it also increases the spell level of those abilities to 7 or increases it by 1 if it is already at least level 7.'
		], // Description
		[
			'Flaring lerasium provides no additional effect.'
		], // Flare
		[
			10 => [
				'effect' => 'The individual Ascends and becomes the vessel of Preservation.',
				'draw' => ''
			]
		]
	);
	require $startDir.'pageEnd.php';
?>