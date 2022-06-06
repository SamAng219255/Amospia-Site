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
		'Flash Cell',// Name
		'Cell',
		[],// Descriptors
		0,// Level
		'1 standard action',// Activation Time
		'instantaneous',// Duration
		'Fortitude negates',// Saving Throw
		[
			'This airtight disk made of waxy red paper can be pressed, activating a small contained clicker. A moment later the disk bursts with a bright light that leaves nearby creatures dazzled. When this cell (see the aa/recipe_desc|Recipe Description/aa guide for more information) pops, target creatures are dazzled for 1 minute. Sightless creatures, as well as creatures already dazzled, are not affected by a ii/flash cell/ii.'
		] // Description
	);
	require $startDir.'pageEnd.php';
?>