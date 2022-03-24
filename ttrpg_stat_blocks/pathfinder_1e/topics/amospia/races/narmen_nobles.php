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
		"Narman Nobles",// Name
		41,// Race Points
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
			"dex" => 4,
			"int" => 2,
			"wis" => 2,
			"cha" => 2
		],// Ability Mofifiers
		"Narmen nobles have built up their mental acumen in order to better wield magic but, between their goddess's curse and their pursuit of purely mental tasks, their strength has withered.",// Ability Description
		[
			"bb/Medium/bb: Narmen nobles are Medium creatures and have no bonuses or penalties due to their size.",
			"bb/Monstrous Humanoid/bb: Narmen nobles are monstrous humanoids.",
			"bb/Normal Speed/bb: Narmen nobles have a base speed of 30 feet and a swim speed of 30 feet.",
			"bb/Hold Breath/bb: Narmen nobles can hold their breath a number of minutes equal to 2 times their Constitution score.",
			"bb/Racial Immunities/bb: Narmen nobles are immune to magic sleep effects and gain +2 vs. enchantment spells and effects.",
			"bb/Spell Resistance/bb: Narmen nobles have spell resistance equal to 11 plus their level.",
			"bb/Lightbringer/bb: Narmen nobles are immune to light based blind and dazzle and cast spells with the light descriptor at +2 caster levels.",
			"bb/Natural Attack/bb: Narmen nobles have a gore attack that deals 1d6 piercing damage.",
			"bb/Heavenborn/bb: Narmen nobles have a +2 to knowledge planes and cast spells with the good descriptor at +1 caster level.",
			"bb/Spell-like Abilities/bb: Narmen nobles can cast ii/comprehend languages/ii, ii/detect magic/ii, ii/dispel magic/ii, ii/fly/ii, ii/light/ii, ii/mage armor/ii, ii/prestidigitation/ii, and ii/read magic/ii at will.",
			"bb/Languages/bb: Narmen nobles begin play speaking Narman and Common. Narmen nobles with high Intelligence scores can choose from the following languages: Abyssal, Aquan, Aztec, Celestial, Donovian, Elven, Idgyptian, Infernal, Mayan, Undercommon, and Vandalusian."
		],// Racial Traits
		false// Subraces
	);
?>
<a target="_blank" href="https://www.worldanvil.com/w/amospia-pharaohcrab/a/narman-nobles-species"><p>World Anvil</p></a>
<?php require $startDir.'pageEnd.php'; ?>