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
		'Freezing Rocket',// Name
		false,
		[
			'cold'
		],// Descriptors
		6,// Level
		'1 standard action',
		120,
		'Long',
		'instantaneous',// Duration
		'Reflex Half; see text',// Saving Throw
		'A ii/freezing rocket/ii rapidly sucks the heat out of its surrounds, freezing them, and deals 1d6 points of cold damage per alchemy level (maximum 15d6) to every creature within a 40-foot radius spread. Unattended objects also take this damage. A creature of the water subtype instead takes 1d8 points of cold damage per alchemy level (maximum 15d8) and is staggered for 1d4 rounds.
		You aim and ignite the rocket, twisting together certain fuses to limit the distance travelled before the blast, before the rocket, generally covered with blue paper, streaks from your hands, leaving a trial of cold white sparks, and, unless it missess or bounces off of intervening cover (see the description for rocket recipes), erupts into ice as it freezes all of the water out of the air at the specified distance.
		If the area intersects a body of water or a liquid that is principally water (not including water-based creatures), it freezes the liquid to a depth of 6 inches in a 40-foot radius. This ice lasts for 1 round per alchemy level. Creatures that were swimming on the surface of a targeted body of water become trapped in the ice. Attempting to break free is a full-round action. A trapped creature must make a DC 25 Strength check or a DC 25 Escape Artist check to do so.' // Description
	);
	require $startDir.'pageEnd.php';
?>