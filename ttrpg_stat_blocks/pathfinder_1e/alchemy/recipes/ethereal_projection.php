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
		'Mist of Ethereal Projection',// Name
		false,
		[
			'mind-affecting'
		],// Descriptors
		5,// Level
		'1 standard action',// Activation Time
		'24 hours',// Duration
		'Will negates',// Saving Throw
		[
			'Uncorking this pressurized fine bottle releases a spray of shimmering pastel mist that hangs in the air for a moment before fading away. Any creature that breathes in this mist is put in a strange trance that sends their mind to the Ethereal Plane.',
			'This recipe functions like ii/ aa/aa_astral_projection|mist of astral projection/aa /ii except the creatures are sent to the Ethereal Plane instead of the Astral Plane.'
		] // Description
	);
	require $startDir.'pageEnd.php';
?>