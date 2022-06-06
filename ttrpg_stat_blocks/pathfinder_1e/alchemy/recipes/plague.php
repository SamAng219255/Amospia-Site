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
	advAlchemySimpleBlock(
		'Plague Vial',// Name
		'Bomb',
		[
			'disease'
		],// Descriptors
		3,// Level
		'instantaneous',// Duration
		'Fortitude negates',// Saving Throw
		[
			'Unlike most bombs, a ii/plague vial/ii deals no damage. Instead, anyone who woud be hit by the splash must make their save or else contract one of the following diseases: blinding sickness, bubonic plague, cackle fever, filth fever, leprosy, mindfire, red ache, shakes, or slimy doom. The disease is contracted immediately (the onset period does not apply). Use the disease\'s listed frequency and save DC to determine further effects.',
			'Creatures hit by the splash, other than the primary target, receive a +3 bonus to the save.'
		] // Description
	);
	require $startDir.'pageEnd.php';
?>