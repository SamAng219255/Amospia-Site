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
		"While it can be rarely passed on genetically, demonic narmen are those who have undergone the so-called Rite of Conversion and become more demon than mortal.
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
		).'Demonic narmen cease aging the moment they go through the Rite of Conversion though if any of their children are born as demonic narmen they age naturally until they reach 15 at which point they can choose at any time to cease aging. If they do not choose to cease aging by the time they reach 35 they stop aging at 35.
		bb/Table: Random Height and Weight/bb'.sTable(
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
		"Taller than humans, elves, or orcs, Narmen stand at an average of 7 feet tall with a build similar to an elf who has spent too much time sitting at their desk. Narmen have coal black skin with a network of scars that vaguely resemble arcane runes, a remnant of their ancient powers. Due to their arcane modification, Narmen have lack all hair and possess a single long tusk jutting straight out of their mouth which they are quite familiar with not running into things, much to the perplexing of other races.
		The runes on a a demonic narmen's skin, that are only scars on their brethren, glow with a purple light that is brighter than their darkened brethren. Their bodies are fit and nimble. A third eye has appeared on their foreheads that can see magical energies and allows access to certain powerful scrying rituals. Demonic narmen also possess a pair of large leathery wings sprouting from their back.",// Physical Desc
		"Most demonic narmen are members of the New World sect of the First Amospian Empire. The New World sect retains the rigid hierarchy of the other sects of narmen though while in other sects the hierarchy is formed from legal precedent and the memebers follow their betters out of loyalty, narmen of the New World sect obey out of fear, with the stronger forcing the weaker to obey.",// Society
		"Demonic narmen are feared and/or hated by most others though the demonic narmen pay them little heed. Content to work amongst themselves in growing their powers.",// Relations
		"Demonic narmen tend toward being evil and chaotic and often take joy in their own cruelty. Most demonic narmen pay at least some respect to N'morahlw'nafh, the void god who granted them this form.",// Alignment and Religion
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