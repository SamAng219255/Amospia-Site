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
<title>Knom</title>
<?php
	raceBlockAuto(
		"Knom",
		10,
		"Knom are a docile people have lived in the places in between for time out memory. Their villages often serving as way stations for caravans.",
		"Knom appear very similar to humans though their heads are almost one and half times taller with the extra height being primarily above the face created a particularly large forehead. Knom also do not grow hair on their heads though almost all knom have a dark unibrow. Knom also have a particularly large nose that hangs down often past their mouth that gives their voice a perpetually nasal sound.",
		"Knom tend to prefer and gather in rural villages where they largely live in harmony often bartering between precious gems and goods instead of using official currency.",
		"Knom are often suspicious of outsiders but warm up quickly to visitors bringing goods or gems to trade, other races not not to pay the knom any mind.",
		"Knom tend to be neutral often lacking any significant drives one way or another. Most knom are religious to some degree and few knom villages are complete without some form of church. Knom tend to prefer good aligned deities. Knom clerics are always looking for aid in driving back the zombie hordes that often find their way to the isolated villages and they also often double as alchemists, providing useful potions to aid their congregation.",
		"Knom rarely have the bravery to become adventurers but once in a rare while, a knom will be born that finds the mundane existence of village life tedious and sets out to seek their fortunes. Many of these individuals become wandering merchant bringing exotic goods between far off places but many find their way into the adventuring life.",
		"WIP",
		"WIP",
		[
			"dex" => 2,
			"wis" => 2,
			"int" => -2
		],
		"Knom are known for being wise but are often not brightest book-wise.",
		[
			"Medium: Knom are Medium creatures and have no bonuses or penalties due to their size.",
			"Normal Speed: Knom have a base speed of 30 feet.",
			"Craftsman: Knom receive a +2 racial bonus to craft and profession checks.",
			"Greed: Knom receive a +2 racial bonus on appraise checks to determine the price of non-magical goods containing precious metals or gemstones.",
			"Focused Study: At 1st, 8th, and 16th level, knom gain Skill Focus in a skill of their choice as a bonus feat.",
			"Flexible Bonus Feat: Knom receive an extra feat of their choice at first level.",
			"Languages: Knom begin play speaking Knom and Common. Knom with high Intelligence scores can choose from the following languages: Dwarven, Elven, Gnoll, Gnome, Goblin, Halfling, Orcish."
		],
		false
	);
	require $startDir.'pageEnd.php';
?>