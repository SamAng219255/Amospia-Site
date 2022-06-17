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
		'Potion of Youth',// Name
		'Imbibed',// Form (Sub-Form(s))
		[],// Descriptors
		9,// Level
		'24 hours',// Duration
		'Fortitude negates (harmless)',// Saving Throw
		[
			'This milky-like tastes vaguely of oranges. When drank by a creature that is older the the initial age for young adulthood, it affects the aging processes of the drinker of the next 24 hours, causing them to become younger. This process is not without side effects as the drinker becomes nauseated starting 1 minute after drinking the mixture. This nausea only subsides once the process is complete. During these 24 hours, the drinker appears to rapidly age backwards ultimately appearing to be the initial age of young adulthood for their race.',
			'The drinker loses any penalties to their physical stats from middle age, old age, or venerable age and these penalties going forward use their modified physical age. Mental ability score adjustments from middle age, old age, or venerable age are retained and are determined by their actual age.'
		] // Description
	);
	require $startDir.'pageEnd.php';
?>