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
		'Antidote, Greater',// Name
		'Imbibed',
		[
			'healing'
		],// Descriptors
		5,// Level
		'instantaneous',// Duration
		'Fortitude negates (harmless)',// Saving Throw
		[
			'This recipe functions as ii/ aa/aa_antidote|antidote/aa /ii, except as noted here. You automatically succeed at all alchemy level checks to neutralize any poisons affecting the target creature. The antidote also reverses all instantaneous or permanent effects caused by poisons, such as temporary ability damage or permanent ability drain (it does not heal ability drain caused by anything other than poison, however).'
		] // Description
	);
	require $startDir.'pageEnd.php';
?>