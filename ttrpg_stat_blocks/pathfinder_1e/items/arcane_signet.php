<?php 
	$startDir='';
	for($i=0; $i<5; $i++) {
		if(file_exists($startDir.'pageStart.php')) {
			require $startDir.'pageStart.php';
			break;
		}
		else {
			$startDir='../'.$startDir;
		}
	}
	magicItemBlockAuto(
		'Arcane Signet',
		'Universal',
		1,
		'ring',
		1000,
		'—',
		[
			'This signet ring can be used to apply an arcane seal by pressing it against a surface similar to how one would to make a wax seal. This arcane seal includes a mark unique to that signet ring as ii/arcane mark/ii. This seal functions similarly to a wax seal including being able to hold an envelope or similar item closed with the same strength and being able to be broken with the same strength. If an arcane seal is broken for any reason it immediately fades and disappears.',
			'Characters with the ability to disarm magical traps can open and close a sealed letter without breaking the seal or transfer a seal from one surface to another with the same level of difficulty as performing that procedure to a wax seal.'
		],
		false,
		'bb/Requirements/bb Craft Wondrous Items, ii/arcane mark/ii; bb/Cost/bb 500 gp'
	);
	require $startDir.'pageEnd.php';
?>