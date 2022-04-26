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
		'Brigandine',// Name
		175,// Cost
		30,// Weight
		'+6',// Armor Bonus
		'+3',// Max Dex Bonus
		'-4',// Armor Check Penalty
		'25%',// Arcane Spell Failure Chance
		true,// slow
		'Medium',// Proficiency
		'Brigandine is made by riveting about a dozen or two overlapping metal plates to a piece of sturdy cloth. These plates aford protection similar to a single piece of metal, but are able to flex and bend. The other major feature is that because there is an external layer of cloth, that cloth can be dyed and patterned to display creats and other patterns.' // description
	);
	require $startDir.'pageEnd.php';
?>