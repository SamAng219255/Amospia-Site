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
		"While it can be rarely passed on genetically, narmen saints are those who have earned the right to undergo the Rite of Ascension and receover a larger portion of their ancient glory.
		bb/Table: Random Starting Ages/bb".sTable(
			[
				'Adulthood',
				'Intuitive',
				'Self-Taught',
				'Trained'
			],
			[
				[
					'15 years',
					'+1d6 years<br>(16 - 21 years)',
					'+2d6 years<br>(17 - 27 years)',
					'+3d6 years<br>(18 - 33 years)',
				]
			],
			true,
			false
		).'bb/Table: Aging/bb'.sTable(
			[
				'Middle Age',
				'Old',
				'Venerable',
				'Maximum Age'
			],
			[
				[
					'70 years',
					'186 years',
					'700 years',
					'700 + 8d100 years',
				]
			],
			true,
			false
		).'bb/Table: Random Height and Weight/bb'.sTable(
			[
				'Gender',
				'Base Height',
				'Height Modifier',
				'Base Weight',
				'Weight Modifier'
			],
			[
				[
					'Male',
					'5\' 11"',
					'+2d12 in.<br>(6\' 1" - 7\' 11")',
					'100 lbs.',
					'+(2d12x3 lbs.)<br>(106 - 172 lbs.)'
				],
				[
					'Female',
					'5\' 5"',
					'+2d12 in.<br>(5\' 7" - 7\' 5")',
					'90 lbs.',
					'+(2d12x3 lbs.)<br>(96 - 162 lbs.)'
				]
			],
			true,
			false
		),// Desc
		"Taller than humans, elves, or orcs, narmen saints stand at an average of 7 feet tall with a build similar to a muscular elf. Narmen saints have, almost white, pale skin with golden, brightly glowing runes across their skin. Narmen saints have regrown their hair and possess long, flowing, golden locks. The tusk, that was zcquired by the narmen as a side-effect of their arcane adaptation to the depth of the sea, is dramatically shorter on an narmen saints than on most, being only about a quater of the length.",// Physical Desc
		"Most narmen saints are members of the Return sect of the First Amospian Empire. The Return sect functions as a theocracy with Zovilla's highest priests at its head. Every member knows their place and completes their assigned duties without hesitation.",// Society
		"Narmen saints are often looked up to by some of the other narmen generally for their devoation and priviledge. Healers often travel to grand cathedral-fortress cities of the narmen saints to train and hone their art. Narmen saints, in turn, often travel outside of their grand cities to visit the cities of other races and provide aid, generally in the form of healing or the slaying of demons, as well as to spread the word of Zovilla. Other races tend to find these wandering priests a bit stuck up though quite helpful.",// Relations
		"Narmen saints are almost exclusively good aligned and the large majority are lawful. Almost all narmen saints pay respects in some form or another to the goddess Zovilla.",// Alignment and Religion
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