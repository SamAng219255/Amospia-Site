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
		'Dazing Cell',// Name
		'Cell',
		[],// Descriptors
		0,// Level
		'1 standard action',// Activation Time
		'instantaneous',// Duration
		'Fortitude negates',// Saving Throw
		[
			'This airtight disk made of waxy paper can be pressed, activating a small contained clicker. A moment later the disk bursts with a bang that leaves nearby creatures\' ears ringing, potentially making it difficult to think. When this cell (see the aa/recipe_desc|Recipe Description/aa guide for more information) pops, target creatures with 4 or fewer Hit Dice are dazed for 1 round, preventing them from taking any actions. Creatures with 5 or more HD are not affected. After a creature has been dazed by this recipe, it is immune to the effects of this recipe for 1 minute.'
		] // Description
	);
	require $startDir.'pageEnd.php';
?>