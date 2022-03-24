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
		"Enlightened Narmen",// Name
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
			"str" => 2,
			"int" => -2,
			"cha" => 2
		],// Ability Mofifiers
		"Enlightened Narmen have a strong personality and have had a portion of their strength returned to them though they have shunned secular puruits and their knowledge is lacking.",// Ability Description
		[
			"bb/Medium/bb: Enlightened Narmen are Medium creatures and have no bonuses or penalties due to their size.",
			"bb/Outsider/bb: Enlightened Narmen are outsiders with the native subtype.",
			"bb/Normal Speed/bb: Enlightened Narmen have a base speed of 30 feet and a swim speed of 30 feet.",
			"bb/Hold Breath/bb: Enlightened Narmen can hold their breath a number of minutes equal to 2 times their Constitution score.",
			"bb/Natural Attack/bb: Enlightened Narmen have a gore attack that deals 1d6 piercing damage.",
			"bb/Heavenborn/bb: Enlightened Narmen have a +2 to knowledge planes and cast spells with the good or light descriptor at +1 caster level.",
			"bb/Celestial Resistance/bb: Enlightened Narmen have acid, cold, electricity resistance 5.",
			"bb/Exalted Spell Resistance/bb: Enlightened Narmen have spell resistance equal to 6 plus their level versus spells and spell-like abilities with the evil descriptor and those cast by evil outsiders.",
			"bb/Celestial Crusader/bb: Enlightened Narmen gain a +1 insight bonus on attack rolls and to their AC against evil outsiders and a +2 racial bonus to identify evil outsiders or items or effects evil outsiders create with Knowledge (planes) or Spellcraft; they may use these skills untrained for this purpose.",
			"bb/Languages/bb: Enlightened Narmen begin play speaking Narman and Celestial. Enlightened Narmen with high Intelligence scores can choose from the following languages: Abyssal, Aklo, Aquan, Aztec, Common, Donovian, Elven, Idgyptian, Infernal, Mayan, Undercommon, and Vandalusian."
		],// Racial Traits
		false// Subraces
	);
?>
<a target="_blank" href="https://www.worldanvil.com/w/amospia-pharaohcrab/a/enlightened-narmen-species"><p>World Anvil</p></a>
<?php require $startDir.'pageEnd.php'; ?>