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
		"Enlightened narmen are those descendant from the orginal Return sect of Narmens who, following the end of their long isolation, determined to return to their goddess Zovilla and once again earn her blessings. These individuals have been blessed for their persistence and have regained the smallest portion of their ancient glory.
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
					'35 years',
					'93 years',
					'350 years',
					'350 + 4d100 years',
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
		"Taller than humans, elves, or orcs, enlightened narmen stand at an average of 7 feet tall with a build similar to a muscular elf. Enlightened narmen have, almost white, pale skin with golden, softly glowing runes across their skin. Enlightened narmen have regrown their hair and possess long, flowing, golden locks. The tusk, that was zcquired by the narmen as a side-effect of their arcane adaptation to the depth of the sea, is dramatically shorter on an enlightened narmen than on most, being only half the length.",// Physical Desc
		"Most enlightened narmen are members of the Return sect of the First Amospian Empire. The Return sect functions as a theocracy with Zovilla's highest priests at its head. Every member knows their place and completes their assigned duties without hesitation.",// Society
		"Enlightened are often looked up to by some of the other narmen generally for their devoation and priviledge though if for no other reason than vain envy of their golden locks of hair. Healers often travel to grand cathedral-fortress cities of the enlightened narmen to train and hone their art. Enlightened narmen, in turn, often travel outside of their grand cities to visit the cities of other races and provide aid, generally in the form of healing, as well as to spread the word of Zovilla. Other races tend to find these wandering priests a bit stuck up though quite helpful.",// Relations
		"Enlightened narmen are almost exclusively good aligned and the large majority are lawful. Almost all enlightened narmen pay respects in some form or another to the goddess Zovilla.",// Alignment and Religion
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
			"bb/Natural Attack/bb: Enlightened Narmen have a gore attack that deals 1d4 piercing damage.",
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