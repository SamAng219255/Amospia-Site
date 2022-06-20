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
		'Draught of Sobriety',// Name
		'Imbibed',
		[],// Descriptors
		0,// Level
		'1 hour or instantaneous; see text',// Duration
		'Fortitude negates (harmless)',// Saving Throw
		[
			'You become completely sober for 1 hour, negating any penalties to your actions for being drunk. Magical and alchemical methods (such as ii/detect poison/ii) still detect you as inebriated. Time spent under the effect of this potion do not count toward the time necessary to sober up (it merely delays your intoxication).',
			'If drank during a hangover, it immediately ends the hang-over instead.'
		] // Description
	);
	require $startDir.'pageEnd.php';
?>