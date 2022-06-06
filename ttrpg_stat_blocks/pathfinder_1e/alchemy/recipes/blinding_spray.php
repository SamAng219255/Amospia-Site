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
	advAlchemyActivatedBlock(
		'Blinding Spray',// Name
		'Cell',
		[],// Descriptors
		2,// Level
		'1 standard action',// Activation Time
		'instantaneous',// Duration
		'Fortitude negates',// Saving Throw
		[
			'Ripping the paper off the top of this tube releases a forceful spray of an irritating compoud that causes blindness when it gets in a creature\'s eyes. This item can be used against an adjacent creature, pointing the tube at them and letting it rip, or it can be opened and immediately thrown at a creature in an attempt to blind them. Whether thrown or pointed at a creature, any creature hit by the spray who fails their save is rendered permanently blind. Creatures hit by the spray who made their save are instead blinded for 2d4 rounds. This is a cell (see the aa/recipe_desc|Recipe Description/aa guide for more information), that can be used as ranged or melee.'
		] // Description
	);
	require $startDir.'pageEnd.php';
?>