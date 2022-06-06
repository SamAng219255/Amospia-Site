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
		'Plague Vial, Greater',// Name
		'Bomb',
		[
			'disease'
		],// Descriptors
		5,// Level
		'instantaneous',// Duration
		'Fortitude negates',// Saving Throw
		[
			'This recipe functions as ii/ aa/aa_plague|plague vial/aa /ii, except the victim cannot overcome the disease without medicine or magic that cures diseases. Making the required number of saves does not cure it, but it does prevent the effect from taking place the time it would, resetting the number of saves made.',
			'The DC to remove the disease with medicine or magic that cures diseases is equal to the save DC + 5.',
			'Additionally, the disease becomes highly contagious, any creature it touches or that touches it with natural weapons or unarmed strikes must save or contract the disease.',
			'The save DC for these targets is equal to the spell\'s DC – 4.'
		] // Description
	);
	require $startDir.'pageEnd.php';
?>