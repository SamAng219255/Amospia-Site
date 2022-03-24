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
		"Pre-Flood Narmen",// Name
		"100; Pre-Flood Narmen are not recommended for player characters.",// Race Points
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
			"dex" => 2,
			"con" => 2,
			"int" => 2,
			"wis" => 2,
			"cha" => 2
		],// Ability Mofifiers
		"Narmen were designed to outclass all other races, especially in their strength.",// Ability Description
		[
			"bb/Medium/bb: Narmen were Medium creatures and had no bonuses or penalties due to their size.",
			"bb/Humanoid/bb: Narmen were humanoids with the narman subtype.",
			"bb/Base Speed/bb: Narmen had a base speed of 40 feet.",
			"bb/Languages/bb: Narmen begin play speaking Celestial. Narmen with high Intelligence scores could choose from the following languages: Abyssal, Andina, Infernal, and Knom.",
			"<h3>Defense Racial Traits</h3>",
			"bb/Celestial Resistance/bb: Narmen had acid, cold, and electricity resistance 5",
			"bb/Spell Resistance/bb: Narmen had SR equal to their level plus 11",
			"bb/Damage Reduction/bb: Narmen had DR 10/Magic",
			"bb/Fast Healing/bb: Narmen had fast healing 1",
			"<h3>Feat and Skill Racial Traits</h3>",
			"bb/Ascendant Magic/bb: Narmen gained Ascendant Spell as a bonus feat at first level",
			"bb/Heavenborn/bb: Narmen gained a +2 to knowledge (planes) checks.",
			"<h3>Offense Racial Traits</h3>",
			"bb/Celestial Crusader/bb: Narmen gained a +1 insight bonus on attack rolls and to AC against evil outsiders and a +2 racial bonus to identify evil outsiders or items or effects evil outsiders create with Knowledge (planes) or Spellcraft; they could use these skills untrained for this purpose.",
			"bb/Swordtrained/bb: Narmen were trained from birth with swordplay and were therefore automatically proficient with sword-like weapons (including bastard swords, daggers, elven curve blades, falchions, greatswords, kukris, longswords, punching daggers, rapiers, scimitars, short swords, and two-bladed swords).",
			"<h3>Senses Racial Traits</h3>",
			"bb/Low-Light Vision/bb: Narmen could see twice as far as humans in areas of dim light.",
			"bb/Darkvision/bb: Narmen could see perfectly in the dark up to 120 feet.",
			"bb/Blindsense/bb: Narmen were capable of magically sensing their surroundings granting them the ability to notice and locate creatures within 30' with which they had line of sight.",
			"<h3>Magical Racial Traits</h3>",
			"bb/Lightborn/bb: Narmen were innately connected to the power of light allowing them to cast spells with the good descriptor at +1 caster level and spells with the light descriptor at +2 caster level.",
			"bb/Crusader's Sight/bb: Narmen could see as though constantly under the effect of ii/detect evil/ii.",
			"bb/Divine Birthright/bb: Using the mystical glowing runes that covered their skin, Narmen were able to use amounts of magic normally only accessible to trained spellcasters. At character creation, choose 3 0-level cleric spells that do not attack or deal damage, these can be cast at-will and choose 4 1st level spells, 3 2nd level spells, 2 3rd level spells, and 1 4th level spell from the cleric spell list, none of which can attack or deal damage, these can each be cast once per day. The same spell can be chosen multiple times giving multiple castings of it. For the purpose of spells that either aid or harm depending on the target, the spells can only be cast on targets for which it does not attack or deal damage. Additionally, Narmen could cast ii/light/ii at-will. These spells can be changed whenever you gain a level. A successful DC 20 Spellcraft check or a ii/read magic/ii spell allowed you to read the runes and determine which spells were available to that individual.",
			"<h3>Other Racial Traits</h3>",
			"bb/Supernatural Flight/bb: Narmen had the ability to fly using their innate magical power at a speed of 60 feet with good maneuverability. This ability did not work in areas of no magic. "
		],// Racial Traits
		false// Subraces
	);
?>
<a target="_blank" href="https://www.worldanvil.com/w/amospia-pharaohcrab/a/narmen2C-pre-flood--species"><p>World Anvil</p></a>
<?php require $startDir.'pageEnd.php'; ?>