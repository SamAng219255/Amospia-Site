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
	magicItemBlockAuto(
		'Forceful',// Name
		'transmutation',// School
		10,// CL
		'weapon quality',// Slot
		'+1 bonus',// Price
		'—',// Weight
		'This ability increases the critical multiplier of a weapon. The critical multiplier increases by one step (such as from x2 to x3). If the original multiplier is greater than x2, the multiplier increases another step for each step above x2.
		Only bludgeoning melee weapons can be ii/forceful/ii. If you roll this special ability randomly for an inappropriate weapon, reroll. This benefit doesn\'t stack with most other effects that increase the critical multiplier of a weapon (such as the ii/forceful weight/ii spell) but does stack with any boons acquired as part of capstone abilities (class features acquired at 20th level). When stacking with capstone abilities, both calculate their effects based on the original critical multiplier only.
		Attempting to cast ii/keen edge/ii, similar spells, on a weapon with the ii/forceful/ii property causes the spell to fail. If a weapon is given both the ii/forceful/ii and ii/keen/ii properties, you cannot apply both effects to the same attack. When making an attack with the weapon, you must decide, before making the attack roll, if you want to apply the ii/forceful/ii or ii/keen/ii property to the attack. The other property does has no effect on either the weapon\'s threat range or critical multiplier for the attack.',// Desc
		false,// Destruction
		'bb/Requirements/bb Craft Magic Arms and Armor, ii/forceful weight/ii; Cost +1 bonus'// Construction
	);
	require $startDir.'pageEnd.php';
?>