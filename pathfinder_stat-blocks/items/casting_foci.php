<?php require '../pageStart.php'; ?>
<title>Casting Foci</title>
<?php
	block(
		"Casting Foci",
		"",
		quick_format([
			'Certain, specially created, items can be used focus the the power of a caster. Most of these items appear at first to resemble existing magic items and, in fact, many can have the functions of their corresponding item integrated into it or some other boon. Unless stated otherwise, upgrading a casting focus increases it\'s price by twice the cost to upgrade it. Each item grants a boon to the caster improving their magic.',
			'Holding a casting focus does not prevent that hand from performing somatic spell components. Depending on the item, either normal somatic components are used or some manipulation of the item is used in place. Additionally if casting a touch spell, the charge becomes attached to both the caster\'s hand and the casting focus and can be discharged by touching either one.',
			'All casting foci can be enchanted like a magic weapon. Enhancement bonuses add to any attack rolls or save DCs associated with the spell. Melee weapon properties only apply to damaging spells with a range of touch, while ranged weapon properties only apply to damaging spells with a range longer than touch that are a "ray" effect or that have a target or targets. Weapon properties with additional restrictions cannot be applied to casting foci. Certain exceptions do apply however. If a casting focus is enchanted with ii/ghost touch/ii all spells cast with it are unaffected by the incorporeal quality as per ii/ghost touch/ii. A casting focus can be enchanted with the ii/deadly/ii property which changes any non-lethal damage dealt by spells cast with the focus deal lethal damage instead but also makes every spell cast with the focus count as a "damaging" spell. If a casting focus is enchanted with the ii/keen/ii quality or is the subject of the ii/keen edge/ii spell, it doubles the threat range of all attack rolls associated with spells cast from using the focus. An enchanted casting foci has the higher caster level of its base caster level and the caster level of its enchantments.',
			'Some casting foci can be wielded and enchanted as some type of weapon. Enchantments on these items apply separately to its use as a casting foci and as a weapon similar  to if it were a double weapon, listing enchantments on the casting focus functionality first. When applying an enchantment to either the casting focus or weapon functionality, the material component cost of making the item is reduced by the square of the overlapping equivalent enhancement bonus times 1,000 gp and the required time at the same rate. (i.e. Enchanting a +2 ii/bane/ii / +3 ii/ghost touch/ii ii/shocking burst/ii spell potency staff to +4 ii/bane/ii ii/shocking burst/ii / +3 ii/ghost touch/ii ii/shocking burst/ii would cost (49,000 - 25,000) - (9,000 - 4,000) = 24,000 - 5,000 = 19,000 gp and take 38 days instead of 49,000 - 9,000 = 40,000 gp taking 80 days.) (WIP, Subject to change.)'
		]),
		false,
		[]
	);
	contents([
		"Focusing Wand",
		"Spell Potency Staff",
		"Abjuring Rune Stone",
		"Conjuring Key",
		"Divining Sphere",
		"Enchanting Rings",
		"Evocation Rod",
		"Illusory Glove",
		"Transmuting Vial",
		"Necromantic Skull",
		"Blessed Holy Symbol",
		"Hammer of Holy Light",
		"Calling Key",
		"Ophiuchus Staff",
		"Radiant Lantern",
		"Bleeding Bone",
		"Curse Rod",
		"Genesis Branch",
		"Blessed Claw"
	]);
	magicItemBlockAuto(
		"Focusing Wand",
		"Divination",
		1,
		"Focus",
		300,
		"—",
		"This wand acts as a casting focus and grants the caster its enhancement bonus to concentration checks and all other checks made as part of casting the spell. Additionally, a ii/focusing wand/ii is treated as having an enhancement bonus one and a half times its actual enhancement bonus rounded up and if it has no enhancement bonus it is treated as having an enhancement bonus of +1. Spells cast using this wand generally originate from the tip if coming from the caster's square and the standard somatic movements involved with the spell are replaced by skilled waving of the wand.
		A ii/focusing wand/ii can be made into a normal wand in addition to its properties as a casting focus in which case the bonus also affects spells cast from it. It can also be made into a metamagic rod instead. In either case it costs as much to convert it as out would to create a new item of that type.",
		false,
		"bb/Requirements/bb Craft Wondrous Item or Craft Wand, ii/magic weapon/ii; bb/Cost/bb 150 gp
		bb/Upgrade/bb:
		Same as creating a normal wand of the chosen spell or the chosen metamagic rod."
	);
	magicItemBlockAuto(
		"Spell Potency Staff",
		"Evocation",
		9,
		"Focus",
		"(+1) 15,000 gp, (+2) 30,000 gp, (+3) 45,000 gp",
		"5 lbs.",
		"This staff acts as a casting focus and grants the caster a bonus to their caster level for spells cast. When a spell is being cast from this staff a bright light shines from he tip momentarily illuminating the region as per the ii/light/ii spell for the duration of the casting time. If a spell of 5th level or higher is cast from the staff it shines as per ii/daylight/ii for the same duration instead.
		A ii/spell potency staff/ii can be wielded and enchanted as though it were a masterwork quarterstaff.
		A ii/spell potency staff/ii can be modified to store spells like a normal staff in addition to its properties as a casting focus in which case the bonus also applies to spells cast from the staff. A spell potency staff cannot be modified to be a specific staff, rather spells must be added one at a time. A spell potency staff can store a number of spells up to 3 times the caster level bonus. The caster level of the staff has a minimum of 9 but can be increased up to the level of the crafter when adding a spell. Whenever a spell is added, the new base price of the staff is equal to the original price plus the caster level of the staff times the following. 400 times the level of the highest-level spell plus 300 gp times the cost of the next-highest-level spell plus 200 times the level of each of the rest of the spells in the staff. The price for each spell can be reduced by requiring that the spell require additional charges to activate. Divide the cost for each spell by the number of charges required. This number is chosen when a spell is added. Adding a spell costs material components equal to half the difference in the base price and takes a 1 day per 1,000 gp of the difference rounded up. Replacing a spell is similar but the cost is reduced by 50 gp times the level of the spell being removed times the previous caster level of the staff.
		It can also be made into a meta magic rod instead. In which case it costs as much to convert it as out would to create a new metamagic rod of that type.
		A spell potency staff can be used for a retributive strike, requiring it to be broken by its wielder. (If this breaking of the staff is purposeful and declared by the wielder, it can be performed as a standard action that does not require the wielder to make a Strength check.) All charges currently in the staff are instantly released in a 30-foot spread. All creatures and objects within 2 squares of the broken staff take an amount of damage equal to 10 x the number of charges in the staff, those 3 or 4 squares away take an amount of damage equal to 7 x the number of charges, and those 5 or 6 squares away take an amount of damage equal to 5 x the number of charges. For the purpose of the damage from the retributive strike, increase the number of charges by twice the caster level bonus and treat a spell potency staff as having only those charges gained from its caster level bonus if it cannot store spells. All those affected can make DC 17 Reflex saves to reduce the damage by half.
		The character breaking the staff has a 25% chance of traveling to another plane of existence (01—25 on a d%), but if she does not, the explosive release of spell energy instantly destroys her. Only certain items, including the staff of the magi and the staff of power, are capable of being used for a retributive strike.",
		false,
		"bb/Requirements/bb Craft Wondrous Item or Craft Staff; bb/Cost/bb (+1) 7,500 gp, (+2) 15,000 gp, (+3) 22,500 gp
		bb/Upgrade/bb:
		bb/Requirements/bb Craft Staff, spells to be added; bb/Cost/bb read description
		OR
		Same as a the chosen metamagic rod."
	);
	magicItemBlockAuto(
		"Abjuring Rune Stone",
		"Abjuration",
		9,
		"Focus",
		"(+2) 22,500 gp, (+4) 45,000 gp, (+6) 67,500 gp",
		"—",
		"This smooth, round, river stone has a faintly glowing symbol of power etched into its surface in wide, shallow strokes and shines brightly when a spell of the abjuration school is cast using it. This stone acts as a casting focus and grants the caster a bonus to their caster level for abjuration spells cast.
		The symbol of power on this stone can be amplified to grant the bearer spell resistance. A +2 ii/abjuring rune stone/ii can grant a spell resistance of up to 16. A +4 ii/abjuring rune stone/ii can grant a spell resistance of up to 21 and a +6 ii/abjuring rune stone/ii can grant a spell resistance up to 26. In any case, adding spell resistance increases the price by 10,000 gp per point of spell resistance over 12 with a minimum spell resistance of 13.",
		false,
		"bb/Requirements/bb Craft Wondrous Item; bb/Cost/bb (+2) 11,250 gp, (+4) 22,500 gp, (+6) 33,750 gp
		bb/Upgrade/bb:
		bb/Requirements/bb Craft Wondrous Item, ii/spell resistance/ii; bb/Cost/bb see description"
	);
	magicItemBlockAuto(
		"Conjuring Key",
		"Conjuration",
		9,
		"Focus",
		"(+2) 22,500 gp, (+4) 45,000 gp, (+6) 67,500 gp",
		"—",
		"This key generally comes in one of four forms, but many forms are possible. The standard types are an ornate gilded key with flowing lines and depictions of angels; a dull black key with spikes and hard edges with shapes like horns, teeth, and claws; a finely crafted steel key cut to perfect precision with depictions of hammers, anvils, and other such artifacts; or a sparkling crystal key shaped from many gaps and rods all parallel to the shaft with a representation of a hey hole on the bow. Conjuration spells including somatic components cast using this key requires slotting the key into an imaginary lock before turning it, in place of its normal movements. This key acts as a casting focus and grants the caster a bonus to their caster level for conjuration spells cast.
		A ii/conjuring key/ii can be used in place of a number of forked metal rods tuned to a number of planes equal to the caster level bonus of the key. Which planes a key is tuned to is determined by the creator while it is being made.
		A ii/conjuring key/ii can be further enchanted to act similarly to a skeleton key. A +2 ii/conjuring key/ii has a +5 disable device and costs 50 gp to enchant, a +4 ii/conjuring key/ii has a +10 disable device and costs 100 gp to enchant, and a +6 ii/conjuring key/ii has a +20 disable device and costs 200 gp to enchant. Further, a ii/conjuring key/ii negates the bonus to a lock's DC from the ii/arcane lock/ii spell and can be used to open a door without a lock that is affected by the ii/arcane lock/ii spell with a DC 10 disable device check using the key's bonus instead of your own.",
		false,
		"bb/Requirements/bb Craft Wondrous Item; bb/Cost/bb (+2) 11,250 gp, (+4) 22,500 gp, (+6) 33,750 gp
		bb/Upgrade/bb:
		bb/Requirements/bb Craft Wondrous Item, ii/knock/ii; bb/Cost/bb (+2) 50 gp, (+4) 100, (+6) 200 gp"
	);
	magicItemBlockAuto(
		"Divining Sphere",
		"Divination",
		9,
		"Focus",
		"(+2) 22,500 gp, (+4) 45,000 gp, (+6) 67,500 gp",
		"—",
		"This smokey crystal sphere grants viewers occasional glimpses of far off places and times and individuals can spend hours entranced and trying to discern their meaning yet to know avail. When a divination spell is cast using this sphere, the images within align and grant creatures glimpses into what the spell reveals. This sphere acts as a casting focus and grants the caster a bonus to their caster level for divination spells cast.
		A ii/divining sphere/ii can be modified to function as a crystal ball in addition to its properties as a casting focus, costing as much as would to create a new crystal ball.",
		false,
		"bb/Requirements/bb Craft Wondrous Item; bb/Cost/bb (+2) 11,250 gp, (+4) 22,500 gp, (+6) 33,750 gp
		bb/Upgrade/bb:
		Same as a crystal ball with any additional powers chosen."
	);
	magicItemBlockAuto(
		"Enchanting Rings",
		"Enchantment",
		9,
		"Focus",
		"(+2) 22,500 gp, (+4) 45,000 gp, (+6) 67,500 gp",
		"—",
		"ii/Enchanting rings/ii are composed of approximately a dozen rings connected by fine chains and metal rods and are made of precious metals and inlaid with many expensive stones. These rings form a bulk that, while it does not prevent an additional magic ring to be worn on that hand, make wielding any implement or even carrying an item over 1 lb impossible. When a spell of the enchantment school is cast using these rings the stone set within twinkle nearly imperceptibly such that only creatures who are already aware of the spell and are watching the stones would notice. Creatures affected by spells of the enchantment school cast using the rings find them entrancing. These rings acts as a casting focus and grants the caster a bonus to their caster level for enchantment spells cast.
		Up to 12 magic rings can be incorporated into into a set of ii/enchanting rings/ii, however, they must first be modified costing 500 gp. After being modified, the wearer is able to gain the effects of one of the incorporated rings chosen by the wearer. This does not count against the two-ring limit. Changing which ring grants its effects is a move action.",
		false,
		"bb/Requirements/bb Craft Wondrous Item; bb/Cost/bb (+2) 11,250 gp, (+4) 22,500 gp, (+6) 33,750 gp
		bb/Upgrade/bb:
		bb/Requirements/bb Craft Wondrous Item, ii/trade items/ii; bb/Cost/bb 500 gp"
	);
	magicItemBlockAuto(
		"Evocation Rod",
		"Evocation",
		9,
		"Focus",
		"(+2) 22,500 gp, (+4) 45,000 gp, (+6) 67,500 gp",
		"—",
		"Each of these metal rods is decorated with shapes of bubbling acid, jagged encroaching ice, crackling electricity, flickering fire, or waves of force. A sixth design includes rapid small shifts giving the appearance of vibrating. These depictions seem to move and change giving the impression of elemental forces embedded into the surface. Each appearance correlates to an energy type which the rod is attuned to. (Acid, Cold, Electricity, Fire, Force, or Sonic) While a spell of the evocation school is being cast using this rod, the images flare up becoming more dramatic and moving with speed befitting their contents. This rod acts as a casting focus and grants the caster a bonus to their caster level for evocation spells cast.
		An ii/evocation rod/ii can be wielded and enchanted as though it were a masterwork light mace.
		An ii/evocation rod/ii can be modified to function as any standard rod in addition its properties as a casting focus. This costs as much as creating a new rod of the corresponding type. Alternatively, they can be modified to strengthen damaging spells, adding a number of d6s of energy damage equal to the rod's caster level bonus. The type of damage matches the rod's energy type. This damage applies to a number of targets equal to half the rod's caster level bonus. This modification costs 2,000 gp for a +2 rod, 8,000 gp for a +4 rod, and 18,000 gp for a +6.",
		false,
		"bb/Requirements/bb Craft Wondrous Item or Craft Rod; bb/Cost/bb (+2) 11,250 gp, (+4) 22,500 gp, (+6) 33,750 gp
		bb/Upgrade/bb:
		bb/Requirements/bb Craft Wondrous Item or Craft Rod, any damaging spell of 2nd level or higher with the decriptor matching the rod's energy type; bb/Cost/bb (+2) 2,000 gp, (+4) 8,000, (+6) 18,000 gp
		OR
		Same as creating the chosen metamagic rod."
	);
	magicItemBlockAuto(
		"Illusory Glove",
		"Illusion",
		9,
		"Focus",
		"(+2) 22,500 gp, (+4) 45,000 gp, (+6) 67,500 gp",
		"—",
		"This glove comes in two varieties, a plain white glove woven from phase spider silk and a black glove woven from pure shadow. This glove acts as a casting focus and grants the caster a bonus to their caster level for illusion spells cast.
		The material of this glove is thin and it can be worn under a pair of magic gloves without taking up the slot. It does place an ethereal layer around your hand that makes wielding any implement impossible.
		These gloves can be modified for 2,000 gp to grant the wearer a +10 competence bonus on sleight of hand checks.",
		false,
		"bb/Requirements/bb Craft Wondrous Item; bb/Cost/bb (+2) 11,250 gp, (+4) 22,500 gp, (+6) 33,750 gp
		bb/Upgrade/bb:
		bb/Requirements/bb Craft Wondrous Item, ii/blur/ii; bb/Cost/bb 2,000 gp"
	);
	magicItemBlockAuto(
		"Transmuting Vial",
		"Transmutation",
		9,
		"Focus",
		"(+2) 22,500 gp, (+4) 45,000 gp, (+6) 67,500 gp",
		"—",
		"This sealed vial contains a continuously swirling fluid that flows and pulses in arbitrary ways, changing colors, viscosities, and temperatures as it does so as well as periodically converting part or all of its contents into gas or solids in chaotic patterns that no matter how random they appear seem to hold to some sort of unknown logic never increasing in entropy. When a spell of the transmutation school is cast using this vial, the contents change their behavior all at once to replicate or symbolize the effects of the spell cast before returning to their previous chaotic behavior. This vial acts as a casting focus and grants the caster a bonus to their caster level for transmutation spells cast.
		This vial can be modified for 2,500 gp times the caster level bonus to allow a character, trained in Craft (alchemy) once per day when preparing spells with the vial, to use otherwise mundane materials to replicate an amount of a variant of the vial's contents. This substance can be used in place of costly components in the creation of a number of alchemical items, each worth 50 gp or less, equal to the vial's caster level bonus. The created items can be created while preparing spells without requiring additional time but each item requires a successful Craft (alchemy) check or else it fails to take form and the materials are wasted. The items are also volatile and will expire after 24 hours becoming useless.",
		false,
		"bb/Requirements/bb Craft Wondrous Item or Brew Potion; bb/Cost/bb (+2) 11,250 gp, (+4) 22,500 gp, (+6) 33,750 gp
		bb/Upgrade/bb:
		bb/Requirements/bb Brew Potion or at least 9 ranks in Craft (alchemy), ii/WIP/ii; bb/Cost/bb 2,500 gp"
	);
	magicItemBlockAuto(
		"Necromantic Skull",
		"Abjuration",
		9,
		"Focus",
		"(+2) 22,500 gp, (+4) 45,000 gp, (+6) 67,500 gp",
		"—",
		"This humanoid skull of an unknown race with sharp teeth and a pair of particularly long canines is missing its jaw and has dark symbols scribbled across its surface and seems to exude an ominous presence and almost visible dark smoke that drips to the floor before evaporating. While a spell of the necromancy school is being cast using this skull, the eyes fill with supernatural darkness and the black smoke thickens and grows more visible, pouring from the eyes and the area that would otherwise be its mouth, spilling across a 5 foot diameter region of the ground before evaporating away. This skull acts as a casting focus and grants the caster a bonus to their caster level for necromancy spells cast.
		A ii/necromantic skull/ii can be modified into a dead skull. A ii/dread skull/ii confers all the same effects and bonuses as a ii/necromantic skull/ii but it contains a dormant animating force that can be awakened requiring the wielder to sacrifice either 1d4 or 2d4 points of strength damage at which point the skull animates into a Dread Skull Animus for a number of rounds equal to the strength damage dealt.
		A Dread Skull Animus is a medium mindless undead with the ii/dread skull/ii as its head with a jaw and skeletal body formed from black mist that seems to flow down to the ground from the skull. The eyes of the skull glow with a cold blue light and cloak of black smoke trails down from the skull with the thickest almost liquid part flowing from its mouth and eyes. The smoke spreads out around the body not quite obscuring it. It has a number of hit dice equal the base caster level of the creature that awakened it and it has strength, dexterity, wisdom, and charisma stats of 10 plus twice the caster level bonus of the skull it was created from. It has 2 primary claw attacks that deal 1d4 damage and a primary bite attack that deals 1d6 damage. A Dread Skull Animus has a natural armor of half its hit dice, DR 5/magic, immunity to cold, and all of the standard immunities and traits possessed by undead creatures. Their base save bonuses are Fort +1/3 HD, Ref +1/3 HD, and Will +1/2 HD + 2 and their base attack bonus is equal to 3/4 of its hit dice. A Dread Skull Animus has Improved Initiative and Run as bonus feats. Any creature that grapples the Dread Skull Animus or hits it with a natural weapon takes a point of strength damage. Any target successfully hit one of the Dread Skull Animus's natural attacks takes 1d2 points of strength damage. Every point of strength damage dealt by a Dread Skull Animus increases the duration for which it it is animate by 1 round. While a ii/dread skull/ii is animated, it does not grant its awakener the normal benefits but it does maintain an empathic link via which base instructions can be conveyed and by which the Dread Skull Animus can identify whether the awakener considers a creature a friend or foe even if the awakener cannot see the creature. If not prevented, a Dread Skull Animus will attempt to charge at the nearest enemy and attack them targeting creature in an attempt to maximize the duration for which it remains animated. A Dread Skull Animus receives the ii/dread skull/ii's enhancement bonus and melee special weapon properties, if any, on its natural weapons and they count as magic so long as the enhancement bonus is at least +1.",
		false,
		"bb/Requirements/bb Craft Wondrous Item; bb/Cost/bb (+2) 11,250 gp, (+4) 22,500 gp, (+6) 33,750 gp
		bb/Upgrade/bb:
		bb/Requirements/bb Craft Wondrous Item, ii/animate dead/ii; bb/Cost/bb 23,000 gp"
	);
	magicItemBlockAuto(
		"Blessed Holy Symbol",
		"Universal",
		1,
		"Focus",
		1400,
		"—",
		"This holy symbol has been specifically blessed by the clergy of the specific deity to which it is a symbol of, and grants believers additional favor.
		Followers of the god associated with the holy symbol may reroll one attack roll, combat maneuver check, or skill check before the result of the roll or check is known each day. They must take the result of the reroll, even if it’s worse than the original roll. Followers may use this ability one extra time each day for each level they possess in a divine spell casting class devoted to that god.
		A ii/blessed holy symbol/ii can be upgraded to grant the follower an additional use of a prepared spell.
		When the item is upgraded, the crafter must choose a caster level to create the holy symbol at. This can be increased later like adding a new ability.
		If the wielder of an upgraded ii/blessed holy symbol/ii is capable of casting divine spells in a class devoted to the god associated with the holy symbol, once per day on command, the holy symbol enables the possessor to recall any one spell that they had prepared and then cast that day. The spell is then prepared again, just as if it had not been cast. The spell can be any level up to the maximum spell level of the holy symbol which is half the caster level rounded up.
		The cost of upgrading a ii/blessed holy symbol/ii is (the caster level plus 1) squared, times 100 gp.",
		false,
		"bb/Requirements/bb Craft Wondrous Item, ii/fallback strategy/ii; bb/Cost/bb 700 gp
		bb/Upgrade/bb:
		bb/Requirements/bb Craft Wondrous Item; bb/Special/bb creator must be able to cast spells of the highest spell level that can be recalled.; bb/Cost/bb see text"
	);
	magicItemBlockAuto(
		"Hammer of Holy Light",
		"Evocation",
		17,
		"Focus",
		"(3rd) 15,000 gp, (6th) 60,000 gp, (9th) 120,000 gp",
		8,
		"This hammer is shaped like a miniature warhammer which has been scaled down and adjusted slightly to be able to be wielded as a one handed weapon. The sides of the hammer depict holy symbols related a god with an image of radiating light on the top. The handle is equally as ornate though with less specific patterns and a flatter design that can be gripped for long periods without difficulty.
		This hammer functions as a holy symbol of a specific god or pantheon in addition to serving as a casting focus, thus allowing it to simultaneously fill the roll of a divine focus.
		A ii/hammer of holy light/ii can be wielded and enchanted as though it were a masterwork heavy mace.
		Positive energy damage dealt from spells cast using this hammer or from spell-like or supernatural abilities used while wielding this hammer is increased by 50%. Each hammer has a maximum spell level of 3rd, 6th, or 9th and it will not work on spells or abilities of a higher level. This bonus does not stack with the Empower Spell feat. The caster may also add twice the enhancement bonus to the DCs of such spells and abilities.
		The hammer may be further empowered to greater allow the wielder to overcome the defenses of the undead. Once upgraded, half of all damage dealt to undead from spells cast using this hammer; spell-like, supernatural, and extraordinary abilities performed while wielding this hammer; or dealt by this hammer results directly from divine power and is therefore not subject to being reduced by energy immunities or resistances, DR, the incorporeal quality, or other such abilities. Similarly, this effect only applies to spells and abilities at or below the hammer's maximum spell level. The caster may also add the hammer's enhancement bonus to caster level checks made to bypass spell resistance vs undead creatures from spells cast with this hammer or from spell-like abilities performed while wielding this hammer.",
		false,
		"bb/Requirements/bb Craft Wondrous Item or Craft Magic Arms and Armor; bb/Cost/bb (3rd) 7,500 gp, (6th) 30,000 gp, (9th) 60,000 gp
		bb/Upgrade/bb:
		bb/Requirements/bb Craft Magic Arms and Armor, ii/flame strike/ii; bb/Cost/bb (3rd) 2,500 gp, (6th) 10,000 gp, (9th) 20,000 gp"
	);
	magicItemBlockAuto(
		"Calling Key",
		"Conjuration",
		17,
		"Focus",
		"(3rd) 15,000 gp, (6th) 60,000 gp, (9th) 120,000 gp",
		"—",
		"Orginally a modified ii/conjuration key/ii, each ii/calling key/ii is tied to a specfic plane and has decorations corresponding to that plane. Wielding a key tied to a plane associated with an alignment diametrically opposed to one's own on one or more axies prevents the creature from using the key and incurs 1 negative level that cannot be removed by any means so long as the individual wields the key. The same effect occurs if a creature wields a key tied to an elemental plane that is opposite the creature's subtype.
		This key functions as a holy symbol of certain gods and can be used as a divine focus. If the key is tuned to one of the outer planes it can be used as a holy symbol of any god whose alignment is within one step of the alignment of the plane. If the key is tuned to one of the elemental planes, it can be used as a holy symbol of any god with a domain matching the plane's element. If the key is tuned to the plane of shadow, it can be used as a holy symbol for any god with the darkness domain. If the key is tuned to the first world, it can be used as a holy symbol of any god with the plant domain. If the key is tuned to the material plane, it can be used as a holy symbol of any god with the earth domain.
		This key is limited to what levels of spells it can affect. It can only augment creatures from spells at or below it's max level of 3rd, 6th, or 9th.
		All creatures summoned using a conjuration (summoning) spell cast using this key recieve 2 additional hit dice. Keys tied to most planes also grant a template according to the table below to such summoned creatures overriding templates granted to them by spells such as ii/summon monster/ii. If a plane has more than one template associated with it, one of the possible templates is chosen at the creation of the key.
		<table>
			<tr>
				<th>Plane(s)</th>
				<th>Template</th>
			</tr>
			<tr>
				<td>Good-Aligned Planes</td>
				<td>Celestial</td>
			</tr>
			<tr>
				<td>Chaotic-Aligned Planes</td>
				<td>Entropic</td>
			</tr>
			<tr>
				<td>Evil-Aligned Planes</td>
				<td>Fiendish</td>
			</tr>
			<tr>
				<td>Lawful-Aligned Planes</td>
				<td>Resolute</td>
			</tr>
			<tr>
				<td>True Neutral-Aligned Planes</td>
				<td>Counterpoised Creature</td>
			</tr>
			<tr>
				<td>The Boneyard</td>
				<td>Usher*</td>
			</tr>
			<tr>
				<td>The Plane of Fire</td>
				<td>Fiery Creature</td>
			</tr>
			<tr>
				<td>The Plane of Earth</td>
				<td>Chthonic Creature</td>
			</tr>
			<tr>
				<td>The Plane of Water</td>
				<td>Aqueous Creature</td>
			</tr>
			<tr>
				<td>The Plane of Air</td>
				<td>Aerial Creature</td>
			</tr>
			<tr>
				<td>The Plane of Shadow</td>
				<td>Dark Creature</td>
			</tr>
			<tr>
				<td>The Material Plane</td>
				<td>Primordial Creature</td>
			</tr>
			<tr>
				<td>The First World</td>
				<td>Fey-Touched Creature</td>
			</tr>
		</table>
		*Usher is a template unique to creatures summoned using this item that grants the creature the power of the Boneyard.
		Rebuild Rules:
		/mm/bb/Senses/bb The creature gains darkvision 60 ft and Lesser Spiritsense.
		/mm/bb/Defensive Abilities/bb The creature gains damage reduction and energy resistance as noted on Table: Usher Defenses.
		/mm/bb/SR/bb The creature gains spell resistance equal to its new CR +5
		/mm/bb/Attacks/bb The gains Spirit Touch as a Psychopomp making its natural attacks and any weapons it wields be treated as though they had the ii/ghost touch/ii weapon special ability.
		bb/Lesser Spiritsense/bb
		/mm/Lesser Spriritsense acts as a Psychopomp's Spiritsense ability allowing an Usher to notice, locate, and distinguish between living and undead creatures within 60 feet except that it is an imprecise sense granting vision as per blindsense instead of blindsight. This means that the Usher can sense which space a living or undead creature resides in but not where in that space they are, granting total concealment, without the aid of other senses.
		Table: Usher Defenses
		<table>
			<tr>
				<th>&nbsp Hit Dice &nbsp</th>
				<th>Resist Cold and Electricity</th>
				<th>DR</th>
			</tr>
			<tr>
				<td>1-4</td>
				<td>5</td>
				<td>—</td>
			</tr>
			<tr>
				<td>5-10</td>
				<td>10</td>
				<td>5/adamantine</td>
			</tr>
			<tr>
				<td>11+</td>
				<td>15</td>
				<td>10/adamantine</td>
			</tr>
		</table>

		A ii/calling key/ii can be upgraded to provide a more permanent link to a creature stored in a unique interdimensional space linked to the key.
		When it is upgraded a creature is chosen from the ii/summon monster/ii list. The creature must be from level at or below the max level of the key. This creature can be summoned as a full round action and remains until it is dismissed as an immediate action, killed, or banished, at which point it returns to its interdimensional space. If it returns for any reason other than being dismissed until the next time the wielder of the ii/calling key/ii prepares spells following a rest.
		",
		false,
		"bb/Requirements/bb Craft Wondrous Item; bb/Cost/bb (3rd) 7,500 gp, (6th) 30,000 gp, (9th) 60,000 gp
		bb/Upgrade/bb:
		bb/Requirements/bb Craft Wondrous Item, ii/summon mosnter/ii; bb/Cost/bb (3rd) 15,000 gp, (6th) 66,000 gp, (9th) 153,000 gp"
	);
	magicItemBlockAuto(
		"Ophiuchus Staff",
		"Conjuration (healing)",
		9,
		"Focus",
		"(3rd) 45,000 gp, (6th) 72,000 gp, (9th) 99,000 gp",
		5,
		"This wooden staff has a snake made of brass coiling around it with its head resting on the top.
		This staff functions as a holy symbol in addition to serving as a casting focus, thus allowing it to simultaneously fill the roll of a divine focus.
		This staff is limited to what levels of spells it can affect. It can only modify spells at or below it's max level of 3rd, 6th, or 9th.
		When any spell that grants morale, luck, sacred, or profane bonuses is cast using this staff, the bonus increases by 50%. Additionally, each target can choose to increase the bonus to double instead for 1 roll or check before making the roll. Afterwards, the increase to the bonus ends and the spell behaves as normal.
		All spells that heal damage, cast with this staff, also heal either 1d4 ability damage to one stat chosen by the caster, 1d4 ability damage to all stats, or they heal all ability damage based on whether the staff has a maximum affected spell level of 3rd, 6th, or 9th respectively. Such spells also have a chance equal to 10% times the maximum affected spell level to remove the blinded, confused, dazzled, deafened, diseased, exhausted, fatigued, nauseated, poisoned, and sickened conditions from the target.
		This staff can be upgraded to lend it's wielder such great skill in medicine as to be able to heal death. The staff now grants the wielder a +20 competence bonus to the heal skill, can be used in place of a healer's kit, and can be used once per day to attempt to return a creature to life. When bringing a creature to life, the wielder must make a DC 50 heal check and must expend 500 gp worth of rare medicinal supplies. The creature's body must still be mostly intact or at least together in one place and placed roughly in the right shape and the creature must have died at most 1 week prior. If the wielder succeeds, the creature sheds the corpse revealing a new, fully intact, young adult body for the creature's soul to inhabit. This body may look different or it may look the same. If the creature was younger than a young adult, they return as the same age. The creature rolls a d% and compares the result to the table below. The creature may also make a will save and add the result to the d% roll to influence the outcome. Similarly, for each 5 by which the wielder beats the DC, they add +5 to the d% roll.
		<table>
			<tr>
				<th>d%</th>
				<th>Result</th>
			</tr>
			<tr>
				<td style=\"white-space: nowrap\">01-33</td>
				<td>New form is a random race.<br>Roll on the ii/reincarnate/ii table to determine their new race and adjust their ability scores according.</td>
			</tr>
			<tr>
				<td style=\"white-space: nowrap\">34-67</td>
				<td>New form is the same race but looks different.<br>The GM chooses a new appearance for the creature that is normal for its species but may be a different gender or ethnicity.</td>
			</tr>
			<tr>
				<td style=\"white-space: nowrap\">68-84</td>
				<td>New form looks similar to original form.<br>Small details have been changed but the creature still looks sufficiently reminiscent of their original form to be mistaken as a sibling.</td>
			</tr>
			<tr>
				<td style=\"white-space: nowrap\">85-89</td>
				<td>Creature looks like themself.<br>The only changes are overall minor and hard to notice.</td>
			</tr>
			<tr>
				<td style=\"white-space: nowrap\">90-94</td>
				<td>Creature can make minor changes.<br>The creature remains mostly similar to their original form but they can change things such as switching gender, making muscles more prominent, or changing their eye or hair color.</td>
			</tr>
			<tr>
				<td style=\"white-space: nowrap\">95-99</td>
				<td>Creature has some control over their appearance.<br>The creature can choose any appearance normal for its species but that may be a different gender or ethnicity.</td>
			</tr>
			<tr>
				<td style=\"white-space: nowrap\">100+</td>
				<td>Creature has full control of their new form.<br>The creature can pick any race from the ii/reincarnate/ii list and adjust their scores accordingly.</td>
			</tr>
		</table>
		Despite the skill involved in bringing the creature back from the dead, returning to life is still an ordeal. The creature takes 2 permanent negative levels. If the subject is 1st or 2nd level, it takes 2 points of Constitution drain instead (if this would reduce its Con to 0 or less, it can’t be reincarnated). A character who died with spells prepared has a 50% chance of losing any given spell upon being reincarnated. A spellcasting creature that doesn’t prepare spells (such as a sorcerer) has a 50% chance of losing any given unused spell slot as if it had been used to cast a spell.
		If the creature does wish to return, their soul does not arrive to inhabit the new body and it shrivels up, lifeless.
		A creature that has been turned into an undead creature or killed by a death effect can’t be returned to life by this ability. Constructs, elementals, outsiders, and undead creatures can’t be raised. The ability can bring back a creature that has died of old age.",
		false,
		"bb/Requirements/bb Craft Wondrous Item, ii/moment of greatness/ii, ii/cleanse/ii; bb/Cost/bb (3rd) 22,500 gp, (6th) 36,000 gp, (9th) 49,500 gp
		bb/Upgrade/bb:
		bb/Requirements/bb Craft Wondrous Item, ii/reincarnate/ii; bb/Cost/bb 54,250 gp"
	);
	magicItemBlockAuto(
		"Radiant Lantern",
		"Evocation",
		15,
		"Focus",
		37550,
		3,
		"This lantern is made of seemingly delicate metal wire and crystals and contains a ii/continual flame/ii that burns a brilliant white.
		Cure spells, and their mass versions, cast with this lantern are cast as the the version one level higher. (light to moderate, moderate to serious, and serious to critical) Additionally the lantern augments the casting of the following spells as so. ii/Cure critical/ii becomes ii/breath of life/ii, ii/breath of life/ii is improved such that it can heal creatures that died in the past minuteb and ii/cure critical, mass/ii keeps its targets and range but effects its targets like ii/breath of life/ii.
		A ii/radiant lantern/ii can be used as a holy symbol of any good aligned god or, if the wielder is neutral and can channel positive energy, as a holy symbol of any neutral god.
		A ii/radiant lantern/ii can be upgraded to empower the wielder's channelled positive energy.
		Once upgraded, the lantern will add 2d6 points of damage or healling to the wielder's channel positive energy ability and will add its enhancement to the DC of the ability. These effects do not stack with effects of the ii/phylactery of positive channeling/ii or the ii/celestial lamp/ii.",
		false,
		"bb/Requirements/bb Craft Wondrous Item, ii/continual flame/ii; bb/Cost/bb 18,800 gp
		bb/Upgrade/bb:
		bb/Requirements/bb Craft Wondrous Item; Special creator must be a 10th-level cleric; bb/Cost/bb 5,650 gp"
	);
	magicItemBlockAuto(
		"Bleeding Bone",
		"Necromancy",
		"5th, see text",
		"Focus",
		14000,
		"—",
		"This rod is made of an unknown smooth black stone and is shaped like a femur bone. When a creature picks it up, they can see crimson runes appear acrossed its surface that pulse with light in time with their heartbeat. These runes are normally invisible to other creatures. When the item is used to cast a spell, the wielder can choose to remove the material component. Doing so requires a blood cost. Paying the blood cost deals 1d6 points of damage to the caster and causes the runes to glow more brightly for 1 round during which time they can be seen by all nearby creatures. Costly material components can be removed but doing increases the blood cost dealing 1 point of Strength damage, plus a further point of damage for every full 250 gp of the component’s value. This causes the runes to grow even brighter and begin to drip the crimson energy.
		Spellcasters who do not have blood cannot use this ability, and those who are immune to Strength damage (such as undead spellcasters) cannot use this ability to create valuable material components. This ability cannot be used to create magic items or constructs.
		bb/Blood Sacrifice/bb:
		/mm/It is possible to extract a blood cost from other creatures but doing so is less efficient. In a ritual requiring 1 minute per level of the spell, the wielder can extract the blood cost from a number of willing or helpless creatures up to their level plus their casting stat. This deals 1d6 points of damage to each creature and 1 point of strength drain, plus a further point of drain for every full 100 gp of the component's value divided among the creatures as chosen by the wielder. After the ritual is complete, the ability takes effect or the spell is cast as normal without requiring any further material component cost.
		/mm/If any of the creatures takes a number of points of strength drain from this ability that is at least half their prior strength score, they must make fortitude save with a DC of 20 plus 1 for each point of strength drain taken beyond half of their prior score. If they fail this save they are instantly killed. This counts as a death effect.
		This rod can be upgraded to use its dark magic to raise and command undead without being limited on its wielder's ability to maintain control over them.
		The rod can be used to take control of undead creatures in a ritual that takes 1 round per hd of the undead and costs 1 strength damage per hd of the undead as a blood cost. When extracted from other creatures, this blood cost deals 1d6 points of damage and 1 point of strength drain per hd of the undead. Intelligent undead receive a will save to negate this effect. The DC for this Will save is equal to 10 + the rod's caster level + the rod's enhancement bonus. The rod can also create new undead that are already bound to it. These undead are created as per ii/animate dead/ii except that they are bound to the rod. Doing so imparts the same blood cost as taking control of existing undead. The rod can control any number of undead, so long as their total Hit Dice do not exceed 4 times it's caster level. When it is upgraded, it's caster level can be increased, multiplying the cost of the upgrade by the new caster level divided by 7.
		Additionally, an upgraded ii/bleeding bone/ii can be used to replace the material compoenent cost of created a necrocraft.",
		false,
		"bb/Requirements/bb Craft Wondrous Item, ii/blood money/ii; bb/Cost/bb 7,000 gp
		bb/Upgrade/bb:
		bb/Requirements/bb Craft Wondrous Item, ii/animate dead/ii, ii/command undead/ii; bb/Cost/bb 29,400 gp"
	);
	magicItemBlockAuto(
		"Curse Rod",
		"Necromancy",
		7,
		"Focus",
		28000,
		"—",
		"This rod appears to be a cold iron spiked light flail that had the chain links fused together into a straight line extending from the end of the handle.
		Penalties and ability damage from spells cast using the ii/curse rod/ii become corse effects and cannot be dispelled or cured except with the aid of ii/remove curse/ii, ii/limited wish/ii, ii/wish/ii, or ii/miracle/ii. Affected spells also gain the curse descriptor.
		The wielder may also add the rod's enhancement bonus, if any, to to concentration checks made to cast spells while in combat or while grappled. They may also treat the enhancement bonus as being one and half its normal value, rounded up, when adding it to the save DCs of spells cast with the curse descriptor. If the rod has no enhancement bonus add +1 to the DCs of such spells instead.
		A ii/curse rod/ii can be wielded and enchanted as though it were a masterwork heavy mace. If the wielder is proficient in light flails, while they are holding the rod the chain links become unfused and the rod may be wielded as though it were a masterwork light flail instead.
		A ii/curse rod/ii may be upgraded to allow the wielder to make an attack and cast a spell with a range of touch as though they were making attacks with two-weapons with the following exceptions. The wielder rolls only one attack roll that takes the penalties as though it were the primary weapon. If they hit the target's AC both the weapon attack and the spell attack hit. If the attack roll hits the target's touch AC but not their regular AC, the spell hits but the weapon does not. The wielder must cast their defensively or provoke and attack of opportunity as normal when casting a spell in melee. Penalties to the secondary weapon apply instead to any concentration checks made as part of casting the spell and to the wielder's AC against any attacks of opportunity provoked by casting the spell.",
		false,
		"bb/Requirements/bb Craft Wondrous Item, ii/bestow curse/ii; bb/Cost/bb 14,000 gp
		bb/Upgrade/bb:
		bb/Requirements/bb Craft Wondrous Item; bb/Cost/bb 15,000 gp"
	);
	magicItemBlockAuto(
		"Genesis Branch",
		"Conjuration",
		9,
		"Focus",
		18600,
		"—",
		"This branch appears to be an ordinary sprig of holly but exhibits magic far beyond an ordinary branch.
		This branch can be used as a divine focus by a druid or similar divine casters in parallel with iᛏs use as a casting focus.
		When used as a casting focus for a spell that affects or creates plant matter—such as entangle or spike growth—its magic manifests, causing numerous seeds of different types to suddenly grow from the branch, fall off, and bury themself into the ground nearby. They then spring up to create any vegetation or grass that the spell requires to function inside of the spell’s area of effect. The vegetation created by the branch grows regardless of the terrain, and lasts the full duration of the spell, allowing the user to cast plant-altering or plant-creating spells in deserts, badlands, and other harsh terrains.
		The plants created are imbued with the power of nature and produce stronger effects. All spells that create or affect plants that are cast with this casting focus are cast at +1 caster level.
		The branch can be upgraded to grow ii/goodberries/ii once per day as the spell. These berries are the size and shape of holly berries and even grow on the branch where the berries would naturally grow but are are light blue-white in color and have a lavender sheen on them.",
		false,
		"bb/Requirements/bb Craft Wondrous Item, ii/plant growth/ii; bb/Cost/bb 9,300 gp
		bb/Upgrade/bb:
		bb/Requirements/bb Craft Wondrous Item, ii/goodberry/ii; bb/Cost/bb 540 gp"
	);
	magicItemBlockAuto(
		"Blessed Claw",
		"Transmutation",
		5,
		"Focus",
		5000,
		"—",
		"While normally this artifact takes the form of a claw, it can be created from any hard and sharp item taken from the body of an animal or magical beast such as a talon, fang, or beak. The item is then attached to a piece of leather strapped to the palm of the wearer's hand.
		While wearing this item while under the effects of a polymorph effect, the caster receives a +5 bonus to concentration checks to cast spells in combat plus any enhancement bonus possessed by the item.
		This item can be upgraded to empower the wearer's natural attacks. This grants the wearer a +1 enhancement bonus on attack rolls with one natural attack chosen when the wearer puts on the item or when the wearer is placed under a polymorph effect reverting to the previous choice when it ends. Once upgraded, the item can be enchanted as a melee weapon with the melee weapon enchantments applying to the effected natural attack. The Enhancement bonuses do not stack. Alternatively, the item can be upgraded for twice the normal cost to grant its effects to all natural weapons possessed by the wearer. This also doubles the cost of enchantments to the melee weapon functionality after the price is reduced for overlapping enchantments.",
		false,
		"bb/Requirements/bb Craft Wondrous Item; bb/Cost/bb 2,500 gp
		bb/Upgrade/bb:
		bb/Requirements/bb Craft Wondrous Item, ii/greater magic fang/ii; bb/Cost/bb 150 gp, see text"
	);
	require '../pageEnd.php';
?>