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
	armorBlockAuto(
		'O\'achiaskua',// Name
		100,// Cost
		17,// Weight
		'+6',// Armor Bonus
		'+3',// Max Dex Bonus
		'-4',// Armor Check Penalty
		'25%',// Arcane Spell Failure Chance
		true,// slow
		'Medium',// Proficiency
		'O\'achiaskua is an uncommon type of armor made from flattened vertical wooden rods bound by cord. The armor includes shin guards, a skirt, a breastplate, a helmet, and a large backplate that extends near to the top of the wearer\'s head and is connected to the arms by a pair of flexible wings that provide ample protection.
		Visual, function, and cultural reference: li/https://youtu.be/qmkQS8_MODE|Iroquoian wooden armour. Pt 1. Introduction./li li/https://youtu.be/lyXNALNnF7g|Pt 2. Overview./li' // description
	);
	require $startDir.'pageEnd.php';
?>