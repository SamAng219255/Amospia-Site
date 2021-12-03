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
?>
<title>Piglin</title>
<?php
	raceBlockAuto(
		"Piglin",
		9,
		"Piglins are a primitive and violent people that have adapted to live in a violent world. Piglins are natives of the Nether and some of its few denizens to not be resistant to its fires.",
		"Piglins are largely pig-like humanoids with wide heads with large porcine ears and snouts. They have 4 fingers to a hand including their thumbs that have keratin coating over their ends similar to a pig's hoofs and they have actual pig hooves for their feet.",
		"Piglins travel in tribes for safety preferring to remain in the crimson fungal forests where meat can be found though without relying on their brothers a piglin could not hope to take down even one of the hoglins. Children are generally raised by the group and wander about the forests within the watchful eyes of the adults. Some tribes have managed to take refuge with the ruins of ancient bastions which can be found thoughout the nether, allowing the tribe to grow larger and stronger. In general the only three things a piglin values are strength, loyalty, and gold which they pry in nuggets from the soft red rock that makes up their home plane. Piglins possess a secret method to create usable tools, weapons, and armor from otherwise impractically soft gold.",
		"Piglins distrust all outsiders to their tribe and will generally attack on sight. It is known, however, by a few interdimensional traders that if you approach them wearing golden items they will grow curious enough to allow you to approach and initiate trade, generally in the form of trading golden items for the various items piglins find in their travels that often are of no use to them but can fetch high prices elsewhere.",
		"Piglins almost always chaotic neutral but other alignments are not unheard of. In the dangerous and hellish wastes of the nether, piglins rarely find the time or reason to worship gods that obviously turned their back them long ago.",
		"Piglins generally remain with their tribe for safety but many strike out on their own in search of something more that will save them from a life endless wandering, never knowing what horrors lie in wait around the corner.",
		"WIP",
		"WIP",
		[
			"str" => 2,
			"wis" => 2,
			"con" => -2
		],
		"Piglins are incredibly strong and skilled at staying alive but are surprisingly frail despite their dangerous lifestyle.",
		[
			"Medium: Piglins are Medium creatures and have no bonuses or penalties due to their size.",
			"Monstrous Humanoid: Piglins are monstrous humanoids with the extraplanar subtype.",
			"Normal Speed: Piglins have a base speed of 30 feet.",
			"Scent: Piglins have a strong sense of smell that can be used to identify the presence of nearby creatures.",
			"Greed: Piglins receive a +2 racial bonus on appraise checks to determine the price of non-magical goods containing precious metals or gemstones.",
			"Hatred: Piglins have a long standing fear and hatred of the many undead that call the Nehter their home and have learned to fight back. Piglins have a +1 racial bonus on attack rolls against undead.",
			"Weapon Familiarity: Piglins are proficient with all crossbows and all piglin racial weapons.",
			"Languages: Piglins begin play speaking Piglin. Piglins with high Intelligence scores can choose from the following languages: Abyssal, Common, Ignan, and Infernal."
		],
		false
	);
	require $startDir.'pageEnd.php';
?>