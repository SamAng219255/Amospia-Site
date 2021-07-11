<?php require '../pageStart.php'; ?>
<title>Plane Walker</title>
<?php
	raceBlockAuto(
		"Plane Walker",
		"11 (Subraces are 16)",
		"This enigmatic race wanders between the planes in numerous caravans and are touched by the energies of the planes they visit.",
		"Taller and slightly skinnier than humans, Plane Walkers move in awkward ways that somehow come off as graceful. They have larger than normal ears with a near point to them that almost resembles an elf. They have large eyes whose iris can contract to only a small pin hole allowing them to adjust to both dark and bright enviroments. Their eyes have a wide variety of deep hues and their scleras are black. Their skin is a deep ashen gray tinted slightly purple",
		"Plane Walkers live in tight knit nomadic communities that travel from one plane to another. They often take the roll of traders bringing goods from other planes.",
		"Plane Walkers form few opinions if any of creatures outside their communities and other races often find them cold and uncaring.",
		"Plane Walkers come in many alignments but most are true neutral. Some who spend more of their time in planes of similar alignment will inherit enhanced abilities and alignments which match the region.",
		"A rare few Plane Walkers leave their communities often either due to being exiled or if their community is largely wiped out by a disaster. Those that do leave often become nomadic adventurers that are often cold to their new companions at first but soon form unbreakable bonds with them treating them as a replacement community.",
		"WIP",
		"WIP",
		[
			"cha" => 2,
			"int" => 2
		],
		"Plane Walkers have powerful minds and a natural charisma about them.",
		[
			"Medium: Plane Walkers are Medium creatures and have no bonuses or penalties due to their size.",
			"Native Outsider: Plane Walkers are outsiders with the native subtype.",
			"Normal Speed: Plane Walkers have a base speed of 30 feet.",
			"Darkvision: Plane Walkers can see in the dark up to 60 feet.",
			"Skill Training: Knowledge (planes) and Linguistics are always considered class skills for Plane Walkers.",
			"Spell-Like Ability: Plane Walkers can cast ii/plane shift/ii once per day as a spell-like ability.",
			"Spell Resistance: Plane Walkers receive spell resistance equal to 6 plus their number of hit dice.",
			"Languages: Plane Walkers begin play speaking Common. Plane Walkers with high Intelligence scores can choose any languages they want (except secret languages, such as Druidic)."
		],
		[
			[
				"Chaotic Aligned",
				[
					"Plane Walkers who spend the majority of their time in chaotic planes absorb the planar energies.",
					"Chaotic Aligned Plane Walkers know Protean and gain Acid, Electricity, and Fire resistance 5 and the Chaotic subtype."
				]
			],
			[
				"Evil Aligned",
				[
					"Plane Walkers who spend the majority of their time in evil planes absorb the planar energies.",
					"Evil Aligned Plane Walkers know Abyssal or Infernal and gain Cold, Electricity, and Fire resistance 5 and the Evil subtype."
				]
			],
			[
				"Good Aligned",
				[
					"Plane Walkers who spend the majority of their time in good planes absorb the planar energies.",
					"Good Aligned Plane Walkers know Celestial and gain Acid, Cold, and Electricity resistance 5 and the Good subtype."
				]
			],
			[
				"Lawful Aligned",
				[
					"Plane Walkers who spend the majority of their time in lawful planes absorb the planar energies.",
					"Lawful Aligned Plane Walkers gain Acid, Cold, and Fire resistance 5 and the Lawful subtype."
				]
			]
		]
	);
	require '../pageEnd.php';
?>