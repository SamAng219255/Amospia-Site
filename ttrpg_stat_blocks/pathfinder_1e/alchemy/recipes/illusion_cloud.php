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
		'Shimmer Cloud',// Name
		[],// Descriptors
		2,// Level
		'1 standard action',//Activation Time
		'1 min./level',// Duration
		'none',// Saving Throw
		'This thin glass rod contains a series of brightly colored opalescent chemicals and by striking one side against the palm of your hand you break an internal seal allowing them to mix before shooting out a fine mist of glittering pastel sparkles. These particles fill a 30-foot radius area. While this mist is too thin to obscure sight, where it encounters the surface of any visual illusion, other than those of the phatasm or shadow subschools, it creates a series of visual artifacts such as blurring the image, creating rainbows of colors, or otherwise making easily visible effects along its edges.  All such illusions are easily visible as such and the locations of creatures or objects that are made invisible using an illusion are plain to see. This does not allow creatures to see through illusions or allow creatures to see invisible creatures, only identify where illusions are located. Creatures receive a +20 bonus to disbelieve affected illusions, or a +5 bonus if it\'s a pattern, and receive an aditional save to disbelieve ongoing illusions if one was allowed to begin with.' // Description
	);
	require $startDir.'pageEnd.php';
?>