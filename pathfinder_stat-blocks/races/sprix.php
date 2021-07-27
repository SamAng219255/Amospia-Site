<?php require '../pageStart.php'; ?>
<title>Sprix</title>
<?php
	raceBlockAuto(
		"Sprix",
		14,
		"Sprix are, most simply, elemental spirits, though Sprix are not elementals, rather they are Fey. Sprix are small spirits that are infused with a portion of elemental magic from where the feywilds touch the elemental planes.",
		"Sprix vary in appearance based on what element they are a spirit of though most appear to be made either in part or in whole out of their element and all have a lean build almost like stick drawings at times.",
		"Sprix are very social people though they often annoy other creatures with other fey finding them too mundane in conversation and non-fey finding them too bizarre. Because of this, Sprix often find more of each other and form colonies, carving multi-level cities into the ground supportted with a mixture of wood, stone, and metal. These towns have little or often no structures above ground level and are otherwise dug entirely into the ground.",
		"Sprix are constantly curious and ask many questions. As with all fey they have a strange almost alien look at world and to how they interact with people, this often makes conversation difficult and annoying with non-fey races though they are similar enough to them that fey find conversation with them equally annoying. Their appearance makes many people assume them to be simple elementals, these assumptions annoy the Sprix to no end.",
		"Most Sprix are chaotic neutral, preferring change and disliking confusing rules that end the fun. Sprix general act with curiosity in mind never with particular malice or benevolence in mind just simple desires and they act with a lack of care in many regards that makes being good or evil difficult as they simply become distracted from their goals.",
		"Sprix are endlessly curious and will often leave their colonies in search of new things, additionally many Sprix will fail to find the colonies and will keep moving from to place joining with anyone who will tolerate them.",
		"WIP",
		"WIP",
		[
			"cha" => 2
		],
		"Sprix have a strong personality and are endlessly friendly. Sprix additionally receive a +2 increase to one other stat based on their element.",
		[
			"Small: Sprix are Small creatures and gain a +1 size bonus to their AC, a +1 size bonus on attack rolls, a –1 penalty on combat maneuver checks and to their Combat Maneuver Defense, and a +4 size bonus on Stealth checks.",
			"Normal Speed: Drem have a base speed of 30 feet.",
			"Low-Light Vision: Sprix can see twice as far as humans in conditions of dim light.",
			"Fey Damage Resistance: Sprix gain DR 5/cold iron.",
			"Languages: Sprix begin play speaking Sylvan and Common. Sprix with high Intelligence scores can choose from the following languages: Auran, Aquan, Gnome, Ignan, and Terran"
		],
		false
	);
	block(
		"Elements",
		"race-variants",
		[
			"Each Sprix has an affinity with a specific element that decides what other stat increase is as well as some of its other abilities."
		],
		true,
		[
			[
				"title" => "Air",
				"spaced" => true,
				"texts" => [
					"+2 Dexterity",
					"Breeze-Kissed: Air Sprix are surrounded by swirling winds, gaining a +2 racial bonus to AC against non-magical ranged attacks. They can calm or renew these winds as a swift action. Once per day, an Air Sprix can channel this wind into a single gust, making a bull rush or trip combat maneuver attempt against one creature within 30 feet. Doing so exhausts the user’s breeze-kissed ability for 24 hours. This is a supernatural ability.",
					"Air Affinity: If an Air Sprix is a sorcerer with the elemental (air) bloodline, it treats its Charisma score as 2 points higher for all sorcerer spells and class abilities. Furthermore, an Air Sprix able to cast air domain spells casts its domain powers and spells at +1 caster level. This trait does not give Air Sprix early access to level-based powers; it only affects powers that they could already use without this trait.",
					"Flight: Air Sprix have a fly speed of 30 feet with clumsy maneuverability."
				]
			],
			[
				"title" => "Crystal",
				"spaced" => true,
				"texts" => [
					"+2 Intelligence",
					"Crystalline Form: Crystal Sprix have reflective, crystalline skin that grants them a +2 racial bonus to AC against rays. Once per day, they can deflect a single ray attack targeted at them as if they were using the Deflect Arrows feat.",
					"Crystalline Armor: Crystal Sprix gain a +2 natural armor bonus to their Armor Class.",
					"Earth Affinity: If a Crystal Sprix is a sorcerer with the elemental (earth) bloodline, it treats its Charisma score as 2 points higher for all sorcerer spells and class abilities. Furthermore, a Crystal Sprix able to cast earth domain spells casts its domain powers and spells at +1 caster level. This trait does not give Crystal Sprix early access to level-based powers; it only affects powers that they could already use without this trait.",
					"Burrow: Crystal Sprix have a burrow speed of 30 feet."
				]
			],
			[
				"title" => "Fire",
				"spaced" => true,
				"texts" => [
					"+2 Strength",
					"Blazing Form: Fire Sprix are immune to fire damage and are vulnerable to cold. Fire Sprix also have the fire subtype.",
					"Elemental Weapons: Fire Sprix deal 1d6 points of fire damage whenever they strike a foe with a natural attack, unarmed strike, or melee weapon.",
					"Fire Affinity: If a Fire Sprix is a sorcerer with the elemental (fire) bloodline, it treats its Charisma score as 2 points higher for all sorcerer spells and class abilities. Furthermore, Fire Sprix are treated as +1 level higher when casting spells with the fire descriptor, using granted powers of the Fire domain, using the revelations of the oracle’s flame mystery, and determining the damage of alchemist bombs that deal fire damage."
				]
			],
			[
				"title" => "Metal",
				"spaced" => true,
				"texts" => [
					"+2 Constitution",
					"Ferrous Growth: Once per day, a Metal Sprix can cause a touched piece of iron or steel to grow into an object weighing up to 10 pounds, such as a sword, crowbar, or light steel shield. This object remains in this form for 10 minutes or until broken or destroyed, at which point it shrinks back to its original size and shape.",
					"Metal Armor: Metal Sprix gain a +2 natural armor bonus to their Armor Class.",
					"Earth Affinity: If a Metal Sprix is a sorcerer with the elemental (earth) bloodline, it treats its Charisma score as 2 points higher for all sorcerer spells and class abilities. Furthermore, a Metal Sprix able to cast metal domain spells casts its domain powers and spells at +1 caster level. This trait does not give Metal Sprix early access to level-based powers; it only affects powers that they could already use without this trait.",
					"Burrow: Metal Sprix have a burrow speed of 30 feet."
				]
			],
			[
				"title" => "Plant",
				"spaced" => true,
				"texts" => [
					"+2 Wisdom",
					"Treespeech: Plant Sprix have the ability to converse with plants as if subject to a continual speak with plants spell.",
					"Goodberries: Three times per day, Plant Sprix can grow 2d4 magical berries as <i>goodberry</i>.",
					"Fertile Soil: Sorcerer Plant Sprix with the verdant bloodline treat their Charisma score as 2 points higher for all sorcerer spells and class abilities. Clerics who are Plant Sprix with the Plant domain use their domain powers and spells at +1 caster level. This trait does not give Plant Sprix early access to level-based powers; it only affects powers that they could already use without this trait.",
					"Climb: Metal Sprix have a climb speed of 30 feet."
				]
			],
			[
				"title" => "Water",
				"spaced" => true,
				"texts" => [
					"+2 Dexterity",
					"Nereid Fascination: Water Sprix gain the following supernatural ability:",
					"<span class=\"inset\">1/day—a member of this race can create a 20-foot-radius burst that causes humanoids within the aura’s range to become fascinated with the user (as the bard’s fascinate bardic performance). Affected humanoids may resist this effect by making a successful Will saving throw (DC 10 + 1/2 the user’s character level + the user’s Charisma modifier).</span>",
					"Water Sense: Water Sprix can sense vibrations in water, granting them blindsense 30 feet against creatures that are touching the same body of water.",
					"Water Affinity: If an Water Sprix is a sorcerer with the elemental (water) bloodline, it treats its Charisma score as 2 points higher for all sorcerer spells and class abilities. Furthermore, an Water Sprix able to cast water domain spells casts its domain powers and spells at +1 caster level. This trait does not give Water Sprix early access to level-based powers; it only affects powers that they could already use without this trait.",
					"Swim: Water Sprix have a swim speed of 30 feet and are amphibious and can breathe both air and water."
				]
			]
		]
	);
	require '../pageEnd.php';
?>