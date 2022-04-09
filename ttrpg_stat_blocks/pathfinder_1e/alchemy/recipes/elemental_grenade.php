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
		'Elemental Grenade',// Name
		'Bomb (Grenade)',// Form
		[
			'see text'
		],// Descriptors
		6,// Level
		'instantaneous',// Duration
		'Reflex Partial',// Saving Throw
		'This recipe functions as ii/ aa/aa_grenade|grenade/aa /ii except it is filled with elemental material (either acid, cold, electricity, or fire) meaning that creatures instead take 1d6 points of energy damage dependant on which element the grenade is filled with and 1d4 points of bludgeoning damage. This recipe gains the descriptor matching the type of energy damage it deals.' // Description
	);
	require $startDir.'pageEnd.php';
?>