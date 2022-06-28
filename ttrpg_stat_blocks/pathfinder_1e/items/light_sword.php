<?php 
	$startDir='';
	for($i=0; $i<5; $i++) {
		if(file_exists($startDir.'pageStart.php')) {
			require $startDir.'pageStart.php';
			break;
		}
		else {
			$startDir='../'.$startDir;
		}
	}
	magicItemBlockAuto(
		'Sword of Holy Light',// Name
		'Evocation',// School
		16,// CL
		'none',// Slot
		204000,// Price
		4,// Weight
		['The blade of this greatsword appears to be forged from solid light and it shines as the sun. The blade of this sword is forged wholly from divine light and it does not strike most matter. Treat the sword as having the ii/brilliant energy/ii property except that it can only strike undead matter or the matter of creatures harmed by positive energy. The damage dealt by this sword is positive energy damage and deals full damage to affected incorporeal creatures. Any evil creature hit by this attack also take 2d6 damage as the divine power from ii/flame strike/ii.',
		'This weapon weapon also shines brightly as the spell ii/daylight/ii except any creature touched by the blade, whether or not it can harm them, is treated being exposed to direct sunlight. The blade can also be thrust into an area of magical darkness to attempt to dispel it as the Targeted Dispel effect of the ii/greater dispel magic/ii spell, using the caster level of the sword, except it can only dispel magical darkness. This light otherwise behaves as the ii/glorious/ii weapon property, which can be used to potentially blind a target even if it cannot harm them.',
		'The sword is otherwise treated as a ii/+1 brilliant energy ghost touch glorious holy mithral greatsword/ii.'],// Desc
		false,// isArtifact
		'bb/Requirements/bb Craft Magic Arms and Armor, ii/daylight/ii, ii/searing light/ii; bb/Cost/bb 102,000 gp'// Construction/Destruction
	);
	require $startDir.'pageEnd.php';
?>