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
		"Narmen",// Name
		15,// Race Points
		"",// Desc
		"",// Physical Desc
		"",// Society
		"",// Relations
		"",// Alignment and Religion
		"",// Adventurers
		"WIP",// Male Names
		"WIP",// Female Names
		[
			"str" => -2,
			"int" => 2,
			"cha" => 2
		],// Ability Mofifiers
		"Narmen have built up their mental acumen in order to better wield arcane magic but, between their goddess's curse and their pursuit of purely mental tasks, their strength has withered.",// Ability Description
		[
			"bb/Medium/bb: Narmen are Medium creatures and have no bonuses or penalties due to their size.",
			"bb/Monstrous Humanoid/bb: Narmen are monstrous humanoids.",
			"bb/Normal Speed/bb: Narmen have a base speed of 30 feet and a swim speed of 30 feet.",
			"bb/Hold Breath/bb: Narmen can hold their breath a number of minutes equal to 2 times their Constitution score.",
			"bb/Lightbringer/bb: Narmen are immune to light based blind and dazzle and cast spells with the light descriptor at +2 caster levels.",
			"bb/Natural Attack/bb: Narmen have a gore attack that deals 1d6 piercing damage.",
			"bb/Heavenborn/bb: Narmen have a +2 to knowledge planes and cast spells with the good descriptor at +1 caster level.",
			"bb/Spell-like Abilities/bb: Narmen can cast ii/light/ii at will and ii/comprehend languages/ii, ii/detect magic/ii, ii/detect poison/ii and ii/read magic/ii each once per day.",
			"bb/Languages/bb: Narmen begin play speaking Narman. Narmen with high Intelligence scores can choose from the following languages: Abyssal, Aquan, Aztec, Celestial, Common, Donovian, Elven, Idgyptian, Infernal, Mayan, Undercommon, and Vandalusian."
		],// Racial Traits
		false// Subraces
	);
?>
<a target="_blank" href="https://www.worldanvil.com/w/amospia-pharaohcrab/a/narmen-article"><p>World Anvil</p></a>
<?php require $startDir.'pageEnd.php'; ?>