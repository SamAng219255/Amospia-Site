<?php require '../pageStart.php'; ?>
<title>Barjoskadwaz</title>
<?php
	block("Blade of the Forest's Shadow", 'item', [
			"<b>Aura</b> Overwhelming Evocation and Illusion(Shadow); <b>CL</b> 30th",
			"<b>Slot</b> none; <b>Price</b> —; <b>Weight</b> 8 lbs."
		], false, [
			[
				"title" => "Statistics",
				"spaced" => false,
				"texts" => quick_format([
					"bb/Alignment/bb Neutral Good; bb/Ego/bb 65",
					"bb/Senses/bb 120 ft., See in Darkness, Read Magic",
					"bb/Int/bb 20; bb/Wis/bb 20; bb/Cha/bb 20",
					"bb/Skills/bb Handle Animal +18, Intimidate +18, Knowledge (geography) +18, Knowledge (nature) +18, Perception +18, Sense Motive +18",
					"bb/Communication/bb Telepathy, Speech (Aklo, Common, Draconic, Druidic, Elven, Sylvan)"
				])
			],
			[
				"title" => "Weapon Statistics",
				"spaced" => false,
				"texts" => quick_format([
					"bb/Damage/bb 8d6+10; bb/Critical/bb 17-20/x2; bb/Range/bb —; bb/Type/bb S; bb/Special/bb —",
					"bb/Category/bb One-Handed; bb/Proficiency/bb Martial",
					"bb/Weapon Groups/bb Blades, Heavy"
				])
			],
			[
				"title" => "Description",
				"spaced" => false,
				"texts" => quick_format([
					"This longsword was originally created with the aid of a 10th tier Mythic ii/Shadow Weapon/ii spell which was used to house the soul of a powerful fey named Vulhi as her forest, the first Forest of Shadow, was being destroyed nearly killing her. Using special magic, the sword was made into a physical object, with the existing magic on it still in place, and her permanent home, wielded by the champion of the new Forest of Shadows, Skadwalth. By a combination of Vulhi's power and later enhancements the sword gained further power and became more solid.",
					"The sword functions as a +10 ii/Keen Impact Ominous Speed Umbral/ii Longsword that is constantly under the effect of ii/Umbral Weapon/ii except that the afterimage deals 4d8 points of damage instead 1d8. Additionally, as a swift action, the wielder transform the sword to and from the form of a dull black metal ring. Unlike the ii/Shadow Weapon/ii spell from which it was formed, this sword has been made into a separate object and is not affected by the target's spell resistance, though the sword may still be disbelieved reducing the damage to half. If the target of the weapon's ii/Umbral Weapon/ii spell successfully resists the the spell, the spell reactivates 1d4 rounds later. The sword also has runes alone its blade that increase the number of damage dice of the weapon from 2d6 with the ii/Impact/ii quality to 8d6. (4d8 if it did not possess the ii/Impact/ii quality.)",
					"The ii/Blade of the Forest's Shadow/ii grants the following powers.",
					"<ul>",
					"<li>Can cast ii/Pass Without Trace/ii at-will.</li>",
					"<li>Can cast ii/Make Lost/ii 3/day.</li>",
					"<li>Can cast ii/Plant Growth/ii 1/day.</li>",
					"</ul>",
					"The ii/Blade of the Forest's Shadow/ii has the following powers.",
					"<ul>",
					"<li>The sword is able to take a humanoid form resembling a drow woman with black eyes that seem to twinkle with starlight and fingers that turn into long black claws. This action requires a standard action and behaves like ii/Polymorph Any Object/ii, lasting 1 hour, except that she gains a strength and dexterity score of 20, and a constitution score of 15. She has a total of 62 hit points.</li>",
					"<li>While in humanoid form, Vulhi possesses every ability granted to a non-mythic wielder of the sword except Mythic Weapon Focus (Longsword) which is replaced with Mythic Weapon Focus (Claws).</li>",
					"<li>Vulhi is effected as though by a constant ii/Shadow Claws/ii spell as a supernatural ability while in humanoid form.</li>",
					"<li>If Vulhi is reduced to 0 hit points, she transforms back into a sword and can not return to her humanoid form for 24 hours. When the effect ends for any other reason, she can not turn into her humanoid form again for 1 hour.</li>",
					"<li>Once per day, when taking humanoid form, Vulhi is treated as having 10 druid levels. She gains the Wolf Domain, a +2 bonus to dexterity, 21 additional hit points (total 83), Improved Initiative, Run, Skill Focus (Perception), Skill Focus (Stealth), Weapon Focus (Claws), and all other class features available to a druid of her level. She gains 10 ranks in acrobatics, survival, and stealth (15 acrobatics, 24 perception, 18 survival, 21 stealth). Despite being already polymorphed, she is able to use the Wild Shape class feature but only to take the form of a solid black dire wolf. She can choose which spells she has prepared upon taking humanoid form.</li>",
					"</ul>",
					"Transcendent Power: The ii/Blade of the Forest's Shadow/ii seek's first to be wielded by her champion, Skadwalth, but would also be wielded by any who defend the Forest of Shadows and its inhabitants. A non-mythic wielder deemed worthy by the ii/Blade of the Forest's Shadow/ii can wield the might of a powerful fey.",
					"<ul>",
					"<li>The wielder gains 5 mythic tiers in the champion path.</li>",
					"<li>The wielder gains the champion's strike (Sudden Attack) champion feature and the guardian's call (Absorb Blow) guardian feature.</li>",
					"<li>The wielder gains a +4 bonus to strength.</li>",
					"<li>The wielder gains the Mythic Weapon Focus (Longsword) and Mythic Run or Weapon Focus (Longsword) and Run respectively if he does not already have it and meets the prerequisites. The wielder also gains the Dual Path mythic feat.</li>",
					"<li>The wielder gains the empathic healing, fast healing, fleet warrior, mythic sustenance, and titan's rage path abilities.</li>",
					"</ul>",
					"Special Purpose: the sword has the special purpose of defending the the Forest of Shadows and its people. Regardless of whether he has mythic tiers, if the wielder of the Blade of the Forest's Shadow shares the sword's special purpose, he gains the following benefits.",
					"<ul>",
					"<li>Can cast ii/Shadow Step/ii and ii/Cloak of Shadows/ii at-will. ii/Cloak of Shadows/ii does not count as an evil spell when cast like this.</li>",
					"<li>The wielder may merge with the shadows of the forest's canopy. While merged, the wielder is at no specific location in the shadow but is focused in a certain region with a radius of 30'. He can move his center of focus to anywhere within 5 miles as a move action as long as the center remains under the canopy. While merged, he can see and hear the area as though using a divination (scrying) spell ignoring concealment, in addition, anything in the shadow of the canopy (whether or not the area is illuminated by other means) can be seen as though the wielder also had supernatural blindsight. The wielder can also sense the location, overall condition, and attitude of other creatures with an intelligence of at least 3 within the forest. The wielder can exit the shadows at a point within the radius of his region of focus that is in dim light or darkness as a move action.</li>",
					"</ul>"
				])
			]
		]);
	require '../pageEnd.php';
?>