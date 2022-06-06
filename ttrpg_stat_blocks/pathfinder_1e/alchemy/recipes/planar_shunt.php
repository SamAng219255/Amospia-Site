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
		'Planar Shunt',// Name
		'Cauldron',// Form
		[
			'teleportation'
		],// Descriptors
		7,// Level
		'instantaneous',// Duration
		'Will negates',// Saving Throw
		[
			'On completion of this recipe, the cauldron and, up to eight creatures standing around the cauldron, are cast to another plane of existence or alternate dimension. Precise accuracy as to a particular arrival location on the intended plane is nigh impossible. From the Material Plane, you can reach any other plane, though you appear 5 to 500 miles (5d%) from your intended destination. ii/Planar shunt/ii transports creatures instantaneously and then ends. The creatures need to find other means if they are to travel back (including preparing ii/planar shunt/ii again).'
		] // Description
	);
	require $startDir.'pageEnd.php';
?>