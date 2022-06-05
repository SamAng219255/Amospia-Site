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
	advAlchemyAppliedBlock(
		'Annort Oil',// Name
		[],// Descriptors
		1,// Level
		'1 full round action',// Activation Time
		'1 hour',// Duration
		'none',// Saving Throw
		[
			'This oil, when applied, alchemically alloys as/special_materials|Annort|annort/as into the weapon\'s surface, an alchemically engineered metal that burns the forms of undead, causing it to gain the effects of annort.',
			'Crafting this recipe requires at least 20 gp of annort.'
		] // Description
	);
	require $startDir.'pageEnd.php';
?>