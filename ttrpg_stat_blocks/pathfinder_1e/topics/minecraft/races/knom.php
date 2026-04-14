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
	raceBlockAuto(
		"Villager",
		10,
		"Villagers are a docile people have lived in the places in between for time out memory. Their villages often serving as way stations for caravans.",
		"Villagers appear very similar to humans though their heads are almost one and half times taller with the extra height being primarily above the face created a particularly large forehead. Villagers also do not grow hair on their heads though almost all villagers have a dark unibrow. Villagers also have a particularly large nose that hangs down often past their mouth that gives their voice a perpetually nasal sound.",
		"Villagers tend to prefer and gather in rural villages where they largely live in harmony often bartering between precious gems and goods instead of using official currency.",
		"Villagers are often suspicious of outsiders but warm up quickly to visitors bringing goods or gems to trade, other races not not to pay the villagers any mind.",
		"Villagers tend to be neutral often lacking any significant drives one way or another. Most villagers are religious to some degree and few villagers villages are complete without some form of church. Villagers tend to prefer good aligned deities. Villager clerics are always looking for aid in driving back the zombie hordes that often find their way to the isolated villages and they also often double as alchemists, providing useful potions to aid their congregation.",
		"Villagers rarely have the bravery to become adventurers but once in a rare while, a villagers will be born that finds the mundane existence of village life tedious and sets out to seek their fortunes. Many of these individuals become wandering merchant bringing exotic goods between far off places but many find their way into the adventuring life.",
		"WIP",
		"WIP",
		[
			"dex" => 2,
			"wis" => 2,
			"int" => -2
		],
		"Villagers are known for being wise but are often not brightest book-wise.",
		[
			"Medium: Villagers are Medium creatures and have no bonuses or penalties due to their size.",
			"Normal Speed: Villagers have a base speed of 30 feet.",
			"Craftsman: Villagers receive a +2 racial bonus to craft and profession checks.",
			"Greed: Villagers receive a +2 racial bonus on appraise checks to determine the price of non-magical goods containing precious metals or gemstones.",
			"Focused Study: At 1st, 8th, and 16th level, villagers gain Skill Focus in a skill of their choice as a bonus feat.",
			"Flexible Bonus Feat: Villagers receive an extra feat of their choice at first level.",
			"Languages: Villagers begin play speaking Villager and Common. Villagers with high Intelligence scores can choose from the following languages: Dwarven, Elven, Gnoll, Gnome, Goblin, Halfling, Orcish."
		],
		false
	);
	require $startDir.'pageEnd.php';
?>