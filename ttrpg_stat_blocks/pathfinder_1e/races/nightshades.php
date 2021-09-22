<?php require '../../pageStart.php'; ?>
<title>Nightshades</title>
<?php
	raceBlockAuto(
		"Nightshades",
		24,
		"The plant races of the Tangled Grove live together hidden largely from the rest of the world by their mystical forest. It is in the center of which grow new Sproutlings that grow into the adult members of the community. There are several species within the grove, each with their own role to play.",
		"Nightshades are composed of a mess of dark green vines interwoven together. Leaves grow off these vines that resemble those of a belladonna. At the end of their four limbs these vines splay out and are used for grasping or stability. This unique structure makes the Nightshades extremely nimble, able to move through underbrush with ease as well as granting them an advantage when climbing as they can grip with all four limbs and don't often need conventional handholds.",
		"Each species within the grove has their own role with the wise Redwoods keeping a history and leading the people, the Nightshades functioning as skilled hunters gathering meat and keeping so-called animal races from discovering them, the Lo'raks guarding from the undead horde at their other border and the versatile Aniflor filling in the other roles. Despite these nearly predetermined roles, each individual may choose their profession and many work outside their roles.
		Nightshades are generally tasked with hunting the surrounding woods to catch food that is brought back to the Grove as well as keeping unwanted guests from getting deep enough to find the Grove, often by killing them. Organization among the ranks of the hunters is loose and most follow a general rule of respecting each other and staying out of each other's way. A few particularly skilled hunters will often earn the respect of the others and will often be picked to lead cooperative efforts.",
		"The inhabitants of the grove generally attempt to avoid contact with the animal races outside but there are stories of walking plant monsters hidden within the dangerous forest and some leave and are shunned as outcast or paraded as curiosities. The few outsiders that know anything about them are the druids of the animal races. The Grove are also in continuous war with a neighboring scourge of undead held back primarily through their efforts.",
		"The alignment of the inhabitants varies wildly but only few evil ones have been known and most are true neutral. Most of the members follow the green faith.",
		"Few members of the races from the Grove leave but those that do are seen as outcasts and tend to find themselves roaming from place to place often ending up in adventuring parties.",
		"WIP",
		"WIP",
		[
			"str" => 2,
			"dex" => 2,
			"cha" => -2
		],
		"Nightshades are strong and nimble but are not the most charismatic often seen as being cold.",
		[
			"Medium: Nightshades are Medium creatures and have no bonuses or penalties due to their size.",
			"Plants: Nightshades are plants making them immune to all mind affecting effects, paralysis, poison, polymorph effects, sleep effects, and stunning. Plants breathe and eat but do not sleep. To gain the benefits of a night's rest a Nightshade must spend 8 hours performing light activity such as meditating.",
			"Normal Speed: Nightshades have a base speed of 30 feet.",
			"Climbing Vines: Nightshades have a climb speed of 20 feet.",
			"Low-Light Vision: Nightshades can see twice as far as humans in conditions of dim light.",
			"Scent: Nightshades gain the scent ability allowing them to detect creatures and other sources of smells within 30 feet.",
			"Camouflage: Nightshades gain a +4 racial bonus to stealth while in a forest.",
			"Silent Hunter: Nightshades reduce the penalty for using Stealth while moving by 5 and can make Stealth checks while running at a –20 penalty (this number includes the penalty reduction from this trait).",
			"Terrain Stride: Nightshades can move through natural difficult terrain at their normal speed while within forests. Magically altered terrain affects them normally.",
			"Bite: Nightshades gain a bite attack, dealing 1d4 points of damage plus Weakening Venom. The bite is a primary attack. A Nightshade's bite attack includes the following poison:",
			"/mm/ii/Belladonna/ii: Injury; save Fort DC 10 + 1/2 the user’s Hit Dice + the user’s Constitution modifier; frequency 1/round for 6 rounds; effect 1d2 Str, target can attempt one save to cure a lycanthropy affliction contracted in the past hour.; cure 1 save.",
			"A Nightshade can also apply this poison to a held weapon as a swift action a number of times per day equal to their Constitution modifier (minimum 1/day). Alternatively, a Nightshade can grow small black berries which contain the toxin with the exception that it functions as an ingestion poison instead. These berries are sweet but provide no nutritional benefit. Each berry produced requires pending 1 use of the poison to coat a weapon and can be done as a swift action. As a move action, 1d4 berries can be produced instead up to the number of remaining uses.",
			"Languages: Nightshades begin play speaking Sylvan. Nightshades with high Intelligence scores can choose from the following languages: Aquan, Auran, Common, Elven, Ignan, Terran, and Treant."
		],
		false
	);
	racialFeats("nightshade", [
		[
			"name" => "Deadly Nightshade",
			"desc" => "Some Nightshades develop significantly more potent toxins.",
			"prereq" => "character level 11th",
			"benefit" => "Your poison becomes:
			/mm/ii/Draining Belladonna/ii: Injury; save Fort DC 10 + the user’s Hit Dice + twice the user’s Constitution modifier; frequency 1/round for 6 rounds; effect 1d4 Str, 1d2 Con, and target can attempt one save to cure a lycanthropy affliction contracted in the past hour.; cure 2 saves.
			Addionally, when you produce your toxic berries, they have the follow poison instead:
			/mm/ii/Deadly Belladonna/ii: ingestion; save Fort DC 10 + the user’s Hit Dice + twice the user’s Constitution modifier; onset 10 minutes; frequency 1/minute for 6 minutes; effect 1d2 Str, 1d4 Con, and target can attempt one save to cure a lycanthropy affliction contracted in the past hour.; cure 2 saves.",
			"special" => false
		]
	]);
	require '../../pageEnd.php';
?>