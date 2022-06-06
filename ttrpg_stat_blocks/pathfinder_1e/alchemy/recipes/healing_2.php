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
		'Elixir of Healing',// Name
		'Imbibed',
		[
			'healing'
		],// Descriptors
		2,// Level
		'instantaneous',// Duration
		'Fortitude negates (harmless)',// Saving Throw
		[
			'This mixture accelerates the drinker\'s healing, restoring 2d8 points of damage +1 point per alchemy level (maximum +10). This healing is not inherently positive or negative energy but only affects creatures that can heal damage on their own or have natural fast healing or regeneration.'
		] // Description
	);
	require $startDir.'pageEnd.php';
?>