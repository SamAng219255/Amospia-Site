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
		'Black Arrow',// Name
		'Necromancy',// School
		25,// CL
		'none',// Slot
		'—',// Price
		'—',// Weight
		'The heads of these arrows absorbs all light and emits thin black smoke. The head of the arrow transitions smoothly into the shaft which appears to be formed of dark basalt and is twisted and lined with thorns. The fletching is formed from two rows of short, thin twigs tilted back on opposite sides. When fired, the arrow streaks black energy.
		Any creature struck by a Black Arrow takes 40 permanent negative levels, 40 points of constitution and charisma drain, and 1,000 points of unholy damage that is not subject to any form of resistance, immunity, damage reduction, or hardness. Any creature killed by these effects is entirely disintegrated. This is a death effect.
		Moments after impact, these arrows rapidly dissolve into black mist before reforming the round after, in the quiver or hand of the creature who fired it, at the beginning of their turn. If the creature does not have a quiver or free hand to accept the arrow, it manifests on the ground beside them.
		These arrows are generally conjured by The Dark Lord from his own power and never leave his side. However, a few brave, or foolhardy, individuals have managed to successfully steal some of these arrows which are often used to great effect though The Dark Lord often seeks out this stolen arrows making possessing one, potentially, quite dangerous.',// Desc
		true,// isArtifact
		'If positive energy is channeled into the arrow, it will dissolve into a fine black powder.'// Construction/Destruction
	);
	require $startDir.'pageEnd.php';
?>