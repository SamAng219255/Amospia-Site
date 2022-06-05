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
		'Gateway',// Name
		'Cauldron',// Form
		[],// Descriptors
		9,// Level
		'Tended',// Duration
		'none',// Saving Throw
		[
			'The mixture pulls at the fabric of reality and creates a doorway connecting this plane to another. The doorway manifests adjacent to the cauldron facing away from it, and is partially transparent from the back. The front is a two-dimensional window looking into the plane specified when beginning the recipe, and anyone or anything that moves through is shunted instantly to the other side.',
			'A ii/gateway/ii recipe functions much like a ii/planar shunt/ii recipe, except that the doorway opens precisely at the point you desire (a creation effect). Deities and other beings who rule a planar realm can prevent a gate from opening in their presence or personal demesnes if they so desire. Travelers need not be adjacent to the cauldron at its creation–anyone who chooses to step through the portal is transported. A ii/gateway/ii cannot be opened to another point on the same plane; the doorway works only for interplanar travel.'
		] // Description
	);
	require $startDir.'pageEnd.php';
?>