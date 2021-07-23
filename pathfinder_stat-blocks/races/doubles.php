<?php require '../pageStart.php'; ?>
<title>Double Walkers</title>
<?php
	raceBlockAuto(
		"Double Walkers",
		15,
		"The unusual result of relations between doppelgangers and humanoid races, double walkers, sometimes shortened to doubles, maintain a large degree of the doppelgangers ability to shape shift.",
		"Double walkers natural form generally looks like a slightly washed out version of their non-doppelganger parent's race but most double walkers spend the majority of their time in some other form.",
		"Double walkers tend to occupy the communities of their non-doppelganger parent and will often aid their doppelganger parent in their schemes.",
		"Double walkers are often met with the same reactions as doppelgangers once identified as many people can't tell the difference.",
		"Double walkers come in all alignments but many tend toward being more chaotic.",
		"Double walkers often search for adventure and may or may not tell their travelling companions their true nature.",
		"WIP",
		"WIP",
		[
			"str" => 2,
			"cha" => 2,
			"con" => -2
		],
		"Double walkers are often strong and have a silver tongue but are frail and perfer to talk their way out of situations or take out enemies quickly.",
		[
			"Medium: Double walkers are Medium creatures and have no bonuses or penalties due to their size.",
			"Monstrous Humanoid: Double walkers are monstrous humanoids with the shapechanger subtype.",
			"Normal Speed: Double walkers have a base speed of 30 feet.",
			"Darkvision: Double walkers can see in the dark up to 60 feet.",
			"Integrated: Double walkers gain a +1 racial bonus on Bluff, Disguise, and Knowledge (local) checks.",
			"Change Shape: Double walkers gain the following supernatural ability: a member of this race can assume the appearance of a Small or Medium humanoid as the ii/alter self/ii spell, save that it does not adjust its ability scores.",
			"Perfect Copy: Double walkers gain the following spell-like ability (the caster level is equal to the user’s character level):",
			"/mm/1/day—ii/assume appearance/ii",
			"Languages: Double walkers begin play speaking Common. Double walkers with high Intelligence scores can choose any languages they want (except secret languages, such as Druidic)."
		],
		false
	);
	racialFeats("double walker", [
		[
			"name" => "Improved Copying",
			"desc" => "Doubles can learn to hone their ability to create and maintain a copy of an individual.",
			"prereq" => "character level 7th, ii/assume appearance/ii racial spell-like ability",
			"benefit" => "Your ii/assume appearance/ii spell-like ability becomes ii/assume appreance, greater/ii.",
			"special" => false
		]
	]);
	require '../pageEnd.php';
?>