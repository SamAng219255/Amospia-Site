<?php require '../pageStart.php'; ?>
<title>Gumodeuza</title>
<?php
	raceBlockAutoSections(
		"Gumodeuza",
		18,
		"Gumodeuza are an unusual race of fey withthe ability to take the form of mighty beasts. Gumodeuza are unlike normal fey in a few ways. In a sense they can be considered native to the material plane similar to a native outsider. Gumodeuza communities are often in places where the First World is closest to the material plane.",
		"Gumodeuza are largely humanoid despite their nature as fey looking mostly like humans with a more graceful and slender physique similar to an elf. The most stark difference is the color of their hair. Each Gumodeuza's hair is a different bright hue from red to green to orange to purple. The similarity is the overwhelming vibrancy of the color. Though it should be noted that Gumodeuza spend as much time in their humanoid forms as they do in their beast forms. Each Gumodeuza can change their form to one of a mighty beast that differs from individual to individual though families tend to have similar types of beasts.",
		"Placeholder: Society",
		"Placeholder: Relations",
		"Placeholder: Alignment/Religion",
		"Placeholder: Adventurers",
		"WIP",
		"WIP",
		[],
		"bb/Ability Score Modifiers/bb: Gumodeuz characters gain a +2 racial bonus to one ability score of their choice at creation usually corresponding to their animal form.",
		[
			"bb/Size/bb: Gumodeuza are Medium creatures and thus receive no bonuses or penalties due to their size.",
			"bb/Fey/bb: Gumodeuza are fey with the shapechanger subtype.",
			"bb/Base Speed/bb: Gumodeuza have a base speed of 30 feet.",
			"bb/Languages/bb: Gumodeuza speak Sylvan. Gumodeuza with high intelligence scores may learn Aklo, Common, Elven, and _____"
		],
		[
			[
				"DEFENSE RACIAL TRAITS",
				"bb/Bond To The Land/bb: Gumodeuza possess a tie to nature and the land around them. Gumodeuz characters gain a +2 dodge bonus to AC while in a ranger favored terrain chosen at character creation.
					bb/Dual Minded/bb: Due to the dual nature of the Gumodeuza, Gumodeuz characters  receive a +2 bonus to all will saves."
			],
			[
				"FEAT AND SKILL RACIAL TRAITS",
				"bb/Bonus Feat/bb: Due to their common interactions with druids, Gumodeuza often pick up a word or two or druidic. Most druids have learned to accept this fact and most Gumodeuza try not to flaunt or abuse it. Non-druid Gumodeuz characters with at least 1 rank in linguistics automatically the Druidic Decoder feat as a bonus feat.
				bb/Skill Training/bb: Gumodeuza spend significant time while growing up in nature. Gumodeuza always treat Knowledge (nature) and Survival as class skills."
			],
			[
				"MAGICAL RACIAL TRAITS",
				"bb/Beast Form/bb: Gumodeuza have a beast form in addition to their normal human form. The type of creature is chosen at character creation. The appearance of this form is static and it cannot be changed each time they assume this form. Changing into this form or back again is a standard action that does not provoke attacks of opportunity. A Gumodeuza loses their ability to speak while in their beast form because they are limited to the sounds that a normal, untrained animal can make, but they can communicate normally with other animals of the same general grouping as their new form. This ability otherwise functions as Beast Shape II, and their ability scores change accordingly.
				/rr/As this is a polymorph effect, the following rules apply. The character gains a +10 bonus on Disguise checks made to appear as a creature of the form taken. Their base speed changes to match the form they assume. If the form grants a swim or burrow speed they maintain the ability to breathe while swimming or burrowing respectively. They gain all natural attacks of their form. All of the character's gear melds into their body. Items that provide constant bonuses continue to provide these bonuses with the the exception of armor and shield bonuses. Items that have to be activated cannot be used. They cannot use material components and cannot cast spells with somatic components if their form does not have the capability to make those movements. They lose all extraordinary and supernatural abilities that depend on their original form. (such as low-light vision)
				This ability counts as wild shape and Gumodeuza with this trait count as being Druids or Shifters of a level equal to their total number of hit dice with the wild shape class feature for the purpose of feats and other prerequisites.
				bb/Partial Transformation/bb: Gumodeuza are able to transform part-way into their beast form. They can only be in one these two forms at a time and can transform between their humanoid, beast, and partial forms as a standard action that does not provoke attacks of opportunity. While in their partial transformation form, Gumodeuza gain two claw attacks appropriate for their size and one bite attack at one size category lower. While in this form they resemble anthropomorphized version of their beast form similar to the monstrous form of a lycanthrope. Gumodeuza also gain an additional ability while in this form chosen at character creation that corresponds with their beast form. Gumodeuz characters may select one ability from the following table to gain while partially transformed for which their beast form meets the prerequisite.
				Table 1-1: Partial Tranformation Abilities".sTable(
					[
						"Beast Form Prerequisite",
						"Possible Ability Gained While Partially Transformed"
					],
					[
						[
							"at least 30' movement speed",
							"+20 foot racial bonus to their movement speed"
						],
						[
							"any fly speed",
							"gliding wings preventing fall damage as per the spell feather fall and can glide horizontally at rate of 5 feet per foot fallen to a maximum of 60 feet per round"
						],
						[
							"any climb speed",
							"30 foot climb speed"
						],
						[
							"any swim speed and the ability breathe underwater",
							"30 foot swim speed and the ability to breathe both in air and water"
						],
						[
							"tiny or small size",
							"small size"
						],
						[
							"has the scent ability",
							"scent"
						],
						[
							"poison or venom ability",
							"Never risk accidentally poisoning themself when applying poison to a weapon."
						],
						[
							"web special attack",
							"spell-like ability: 1/day web"
						],
						[
							"darkvision",
							"60 foot darkvision"
						],
						[
							"large size",
							"large size"
						]
					]
				)
			],
			[
				"SENSES RACIAL TRAITS",
				"bb/Low-Light Vision/bb: Gumodeuza possess the ability to see twice as far as humans in conditions of dim light."
			]
		]
	);
	require '../pageEnd.php';
?>