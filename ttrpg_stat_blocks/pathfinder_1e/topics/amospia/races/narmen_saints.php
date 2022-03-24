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
		"Narmen Saints",// Name
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
			"str" => 4,
			"con" => 2,
			"int" => -2,
			"wis" => 2,
			"cha" => 2
		],// Ability Mofifiers
		"Narmen saints have a strong personality, are quite wise, and have had their strength returned to them though they have shunned secular puruits and their knowledge is lacking.",// Ability Description
		[
			"bb/Medium/bb: Narmen saints are Medium creatures and have no bonuses or penalties due to their size.",
			"bb/Outsider/bb: Narmen saints are outsiders with the native subtype.",
			"bb/Normal Speed/bb: Narmen saints have a base speed of 30 feet.",
			"bb/Heavenborn/bb: Narmen saints have a +2 to knowledge planes and cast spells with the good descriptor at +1 caster level.",
			"bb/Lightbringer/bb: Narmen saints are immune to light based blind and dazzle and cast spells with the light descriptor at +2 caster levels.",
			"bb/Celestial Resistance/bb: Narmen saints have acid, cold, electricity resistance 5.",
			"bb/Exalted Spell Resistance/bb: Narmen saints have spell resistance equal to 6 plus their level versus spells and spell-like abilities with the evil descriptor and those cast by evil outsiders.",
			"bb/Celestial Crusader/bb: Narmen saints gain a +1 insight bonus on attack rolls and to their AC against evil outsiders and a +2 racial bonus to identify evil outsiders or items or effects evil outsiders create with Knowledge (planes) or Spellcraft; they may use these skills untrained for this purpose.",
			"bb/Divine Birthright/bb: Using the mystical glowing runes that cover the skin, Narmen are able to use amounts of magic normally only accessible to trained spellcasters. At character creation, choose 3 0-level cleric spells that do not attack or deal damage, these can be cast at-will, and choose 3 1st level spells and 2 2nd level spells from the cleric spell list, none of which can attack or deal damage, these can each be cast once per day. The same spell can be chosen multiple times giving multiple castings of it. For the purpose of spells that either aid or harm depending on the target, the spells can only be cast on targets for which it does not attack or deal damage. Spells with the Evil descriptor can not be chosen. Additionally, Narmen can cast ii/light/ii at-will. These spells can be changed whenever you gain a level. A successful DC 20 Spellcraft check or a ii/read magic/ii spell allows you to read the runes and determine which spells are available to that individual.",
			"bb/Languages/bb: Narmen saints begin play speaking Narman and Celestial. Narmen saints with high Intelligence scores can choose from the following languages: Abyssal, Aklo, Aquan, Aztec, Common, Donovian, Elven, Idgyptian, Infernal, Mayan, Undercommon, and Vandalusian."
		],// Racial Traits
		false// Subraces
	);
?>
<a target="_blank" href="https://www.worldanvil.com/w/amospia-pharaohcrab/a/narmen-saints-species"><p>World Anvil</p></a>
<?php require $startDir.'pageEnd.php'; ?>