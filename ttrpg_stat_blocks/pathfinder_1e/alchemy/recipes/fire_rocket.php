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
	advAlchemyRocketBlock(
		'Fire Rocket',// Name
		[
			'fire'
		],// Descriptors
		3,// Level
		'1 standard action',
		120,
		'Long',
		'instantaneous',// Duration
		'Reflex Half',// Saving Throw
		'A ii/fire rocket/ii generates a searing explosion of flame that detonates with a low roar and deals 1d6 points of fire damage per alchemy level (maximum 10d6) to every creature within a 20-foot radius spread. Unattended objects also take this damage. The explosion creates a limited amount pressure, being focused on creating a hot fiery explosion instead of a forceful one. Free floating objects weighing less than 1 pound that are located near the center of the blast can be thrown away from the center.
		You aim and ignite the rocket, twisting together certain fuses to limit the distance travelled before the blast, before the rocket, generally covered with red paper, streaks from your hands and, unless it missess or bounces off of intervening cover (see the description for rocket recipes), blossoms into a cinematic ball of fire at the specified distance.
		The explosion sets fire to combustibles and damages objects in the area. It can melt metals with low melting points, such as lead, gold, copper, silver, and bronze. If the damage caused to an interposing barrier shatters or breaks through it, the flames may continue beyond the barrier if the area permits; otherwise it stops at the barrier just as any other recipe effect does.' // Description
	);
	require $startDir.'pageEnd.php';
?>