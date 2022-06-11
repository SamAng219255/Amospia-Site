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
		'Allsoup',// Name
		'Imbibed',// Form (Sub-Form(s))
		[],// Descriptors
		1,// Level
		'instantaneous',// Duration
		'none',// Saving Throw
		[
			'This recipe creates 6 servings of an alchemically engineered stew that is thick, brown, and tastes like chicken broth. Each serving of this stew will provide sufficient nourishment for a Medium creature for 1 day.',
			'So long as the stew remains in sealed containsers, such as corked waterskins or bottles, it remains fresh and ready to eat. This does prevent it from being contaminated or poisoned as normal.'
		] // Description
	);
	require $startDir.'pageEnd.php';
?>