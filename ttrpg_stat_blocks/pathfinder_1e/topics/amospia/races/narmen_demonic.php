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
		"Demonic Narmen",// Name
		37,// Race Points
		"",// Desc
		"",// Physical Desc
		"",// Society
		"",// Relations
		"",// Alignment and Religion
		"",// Adventurers
		"WIP",// Male Names
		"WIP",// Female Names
		[
			"str" => 2,
			"dex" => 2,
			"con" => 2,
			"wis" => -2,
			"cha" => 4
		],// Ability Mofifiers
		"Demonic Narmen have a strong personality and have supernatural physical prowess but their patron has stunted their ability to foresee his schemes and resist commands.",// Ability Description
		[
			"bb/Medium/bb: Demonic Narmen are Medium creatures and have no bonuses or penalties due to their size.",
			"bb/Outsider/bb: Demonic Narmen are outsiders with the native subtype.",
			"bb/Normal Speed/bb: Demonic Narmen have a base speed of 30 feet, a swim speed of 30 feet, and a fly speed of 30 feet with clumsy maneuverability.",
			"bb/Hold Breath/bb: Demonic Narmen can hold their breath a number of minutes equal to 2 times their Constitution score.",
			"bb/Natural Attack/bb: Demonic Narmen have a gore attack that deals 1d6 piercing damage.",
			"bb/Fiendish Resistance/bb: Demonic Narmen have cold, electricity, and fire resistance 5.",
			"bb/Fiendish Blood/bb: Demonic Narmen with the abyssal or infernal bloodlines can use bloodline powers from those bloodlines as though they were one level higher. This does not grant access to powers they would otherwise not have access to.",
			"bb/Fell Magic/bb: Demonic Narmen add 1 to the DC of all spells and spell-like abilities they cast of the necromancy school.",
			"bb/See In Darkness/bb: Demonic Narmen can see perfectly in darkness of any kind including supernatural darkness.",
			"ii/Negative Energy Affinity/ii: Demonic Narmen are healed by negative energy and harmed by positive energy as if they were undead.",
			"ii/Resist Level Drain/ii: Demonic Narmen take no penalties from negative levels though they can still be killed if they accumulate a number of negative levels equal to their umber of hit dice and they automatically lose all negative levels after 24 hours.",
			"ii/Vulnerable To Sunlight/ii: Demonic Narmen take one constitution damage every hour they remain in sunlight.",
			"bb/Spell-like Abilities/bb: Demonic Narmen can cast ii/bleed/ii, ii/detect poison/ii, and ii/touch of fatigue/ii each once per day; can cast ii/chill touch/ii and ii/protective penumbra/ii at will; and have ii/detect magic/ii and ii/infernal healing/ii as constant spell-like effects.",
			"bb/Languages/bb: Demonic Narmen begin play speaking Narman and either Abyssal or Infernal. Demonic Narmen with high Intelligence scores can choose from the following languages: Abyssal, Aklo, Aquan, Aztec, Celestial, Common, Donovian, Elven, Idgyptian, Infernal, Mayan, Undercommon, and Vandalusian."
		],// Racial Traits
		false// Subraces
	);
?>
<a target="_blank" href="https://www.worldanvil.com/w/amospia-pharaohcrab/a/demonic-narmen-species"><p>World Anvil</p></a>
<?php require $startDir.'pageEnd.php'; ?>