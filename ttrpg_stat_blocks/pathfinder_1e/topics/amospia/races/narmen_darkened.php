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
		"Darkened Narmen",// Name
		23,// Race Points
		"",// Desc
		"",// Physical Desc
		"",// Society
		"",// Relations
		"",// Alignment and Religion
		"",// Adventurers
		"WIP",// Male Names
		"WIP",// Female Names
		[
			"dex" => 2,
			"wis" => -2,
			"cha" => 2
		],// Ability Mofifiers
		"Darkened Narmen have a strong personality and move with supernatural grace but their patron has stunted their ability to foresee his schemes and resist commands.",// Ability Description
		[
			"bb/Medium/bb: Darkened Narmen are Medium creatures and have no bonuses or penalties due to their size.",
			"bb/Outsider/bb: Darkened Narmen are outsiders with the native subtype.",
			"bb/Normal Speed/bb: Darkened Narmen have a base speed of 30 feet and a swim speed of 30 feet.",
			"bb/Hold Breath/bb: Darkened Narmen can hold their breath a number of minutes equal to 2 times their Constitution score.",
			"bb/Natural Attack/bb: Darkened Narmen have a gore attack that deals 1d6 piercing damage.",
			"bb/Fiendish Resistance/bb: Darkened Narmen have cold, electricity, and fire resistance 5.",
			"bb/Fiendish Blood/bb: Darkened Narmen with the abyssal or infernal bloodlines can use bloodline powers from those bloodlines as though they were one level higher. This does not grant access to powers they would otherwise not have access to.",
			"bb/Fell Magic/bb: Darkened Narmen add 1 to the DC of all spells and spell-like abilities they cast of the necromancy school.",
			"bb/See In Darkness/bb: Darkened Narmen can see perfectly in darkness of any kind including supernatural darkness.",
			"bb/Spell-like Abilities/bb: Darkened Narmen can cast ii/bleed/ii, ii/chill touch/ii, ii/detect poison/ii, ii/infernal healing/ii, and ii/touch of fatigue/ii each once per day and have ii/detect magic/ii as a constant spell-like effect.",
			"bb/Languages/bb: Darkened Narmen begin play speaking Narman and either Abyssal or Infernal. Darkened Narmen with high Intelligence scores can choose from the following languages: Abyssal, Aklo, Aquan, Aztec, Celestial, Common, Donovian, Elven, Idgyptian, Infernal, Mayan, Undercommon, and Vandalusian."
		],// Racial Traits
		false// Subraces
	);
?>
<a target="_blank" href="https://www.worldanvil.com/w/amospia-pharaohcrab/a/darkened-narmen-species"><p>World Anvil</p></a>
<?php require $startDir.'pageEnd.php'; ?>