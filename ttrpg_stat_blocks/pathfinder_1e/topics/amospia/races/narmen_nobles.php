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
		"Through a combination of natural selection and arcane enhancements, those descendant from the upper echelons of Narmen society generally possess a greater affinity for the arcane arts.
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
					'+1d4 years<br>(16 - 19 years)',
					'+1d6 years<br>(16 - 21 years)',
					'+2d6 years<br>(17 - 27 years)',
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
					'53 years',
					'70 years',
					'70 + 3d20 years',
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
		"Taller than humans, elves, or orcs, Narmen stand at an average of 7 feet tall with a build similar to an elf who has spent too much time sitting at their desk. Narmen have coal black skin with a network of grey scars that vaguely resemble arcane runes, a remnant of their ancient powers. Due to their arcane modification, Narmen have lack all hair and possess a single long tusk jutting straight out of their mouth which they are quite familiar with not running into things, much to the perplexing of other races. Narmen nobles are visually distinguished by having longer, pointier ears, narrower eyes, more delicate fingers, and an even greater air of pomp. Nobles also claim that their scars are a lighter coloration than those of most.",// Physical Desc
		"Most narmen are citizens of the First Amospian Empire which has divided into a number of sects and created colonies across the world. Narmen society is organized into a strict hierarchy and narmen generally follow their higher ups unquestioningly and expect those below them to do the same.",// Society
		"Narmen generally see themselves as superior to other races though they are not cruel only patronizing. Narmen wish to uplift the world though they generally believe that the other races will never reach them. The other races find this behavior something of a nuissance but are not afraid to take advantage of their aid as the Narmen do possess knowledge that has been collected over their millenia of research that can be of significant use.",// Relations
		"Narmen are gnerally lawful and good and follow Zovilla but a growing number reject her teachings though most are still lawful.",// Alignment and Religion
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