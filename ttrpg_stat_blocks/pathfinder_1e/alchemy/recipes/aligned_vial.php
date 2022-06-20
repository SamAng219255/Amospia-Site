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
		'Aligned Vial',// Name
		'Bomb',
		[
			'see text'
		],// Descriptors
		4,// Level
		'instantaneous',// Duration
		'Reflex half or negates; see text',// Saving Throw
		[
			'This recipe imbues a vial of water with planar energy taken from matter from an inherently aligned plane. The resulting aligned water is able to burn creatures of the opposite alignment, with a greater effect on outsiders, like acid in a way not dissimilar to holy water.',
			'You must choose an alignment from chaotic, evil, good, lawful, or neutral. Target outsiders with an alignment opposite the chosen alignment take 1d8 points of damage per level, maximum 10d8, with Reflex save to reduce the damage by half. All other target creatures of the opposite alignment take 1d6 points of damage per level, maximum 10d6, with a Reflex save to reduce the damage by half. Creatures of the opposite alignment, other than the target, take half as much damage as if they were the target with a Reflex save to negate the damage.',
			'If you chose the neutral alignment when creating this recipe, treat lawful good, chaotic good, lawful evil, and chaotic evil creatures as being of the opposite alignment. This recipe acquires the descriptor matching the chosen alignment if it exists.'
		], // Description
		'1 ounce of material from a plane that is strongly aligned to the chosen alignment'
	);
	require $startDir.'pageEnd.php';
?>