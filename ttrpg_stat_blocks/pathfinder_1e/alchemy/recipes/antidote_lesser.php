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
		'Antidote, Lesser',// Name
		'Imbibed',
		[],// Descriptors
		1,// Level
		'4 hours',// Duration
		'Fortitude negates (harmless)',// Saving Throw
		[
			'Generally stored in a glass vial, a ii/lesser antidote/ii is formulated to counteract a specific poison chosen at the time of the antidote\'s creation. Drinking the antidote grants a +10 alchemical bonus on saving throws against that poison for 4 hours. If the imbiber succeeds at a saving throw with this bonus, she is automatically cured even if she would not normally be cured by successful saving throws or the number required to cure her has not been met yet. However, the antidote has no effect against other poisons. An antidote has no effect against a magical poison.'
		] // Description
	);
	require $startDir.'pageEnd.php';
?>