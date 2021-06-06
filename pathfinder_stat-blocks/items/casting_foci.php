<?php require '../pageStart.php'; ?>
<title>Casting Foci</title>
<?php
	block(
		"Casting Foci",
		"",
		[
			'Certain, specially created, items can be used focus the the power of a caster. Most of these items appear at first to resemble existing magic items and, in fact, many can have the functions of their corresponding item integrated into it. Each item grants a boon to the caster improving their magic.',
			'Holding a casting focus does not prevent that hand from performing somatic spell components. Depending on the item, either normal somatic components are used or some manipulation of the item is used in place.',
			'All casting foci can be enchanted like a magic weapon. Enhancement bonuses add to any attack rolls or save DCs associated with the spell. Melee weapon properties only apply to damaging spells with a range of touch, while rammed weapon properties only apply to damaging spells with a range longer than touch. Weapon properties with additional restrictions cannot be applied to casting foci. An enchanted casting foci has the higher caster level of its base caster level and the caster level of its enchantments.',
			'Some casting foci can be wielded and enchanted as some type of weapon. Enchantments on these items apply separately to its use as a casting foci and as a weapon similar  to if it were a double weapon, listing enchantments on the casting focus functionality first. When applying an enchantment to either the casting focus or weapon functionality, the material component cost of making the item is reduced by the square of the overlapping equivalent enhancement bonus times 500 gp and the required time at the same rate. (i.e. Enchanting a +2 bane/+3 ghost touch shocking burst spell potency staff to +4 bane shocking burst/+3 ghost touch shocking burst would cost (49,000 - 12,500) - (9,000 - 2,000) = 36,500 - 7,000 = 29,500 gp and take 61 days instead of 49,000 - 9,000 = 40,000 gp taking 80 days.)'
		],
		false,
		[]
	);
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
The symbol of power on this stone can be amplified to grant the bearer spell resistance. A +2 abjuring rune stone can grant a spell resistance of up to 16. A +4 abjuring rune stone can grant a spell resistance of up to 21 and a +6 abjuring rune stone can grant a spell resistance up to 26. In any case, adding spell resistance increases the price by 10,000 gp per point of spell resistance over 12 with a minimum spell resistance of 13.",
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
A divining sphere can be modified to function as a crystal ball in addition to its properties as a casting focus, costing as much as would to create a new crystal ball.",
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
		"Enchanting rings are composed of approximately a dozen rings connected by fine chains and metal rods and are made of precious metals and inlaid with many expensive stones. These rings form a bulk that, while it does not prevent an additional magic ring to be worn on that hand, make wielding any implement or even carrying an item over 1 lb impossible. When a spell of the enchantment school is cast using these rings the stone set within twinkle nearly imperceptibly such that only creatures who are already aware of the spell and are watching the stones would notice. Creatures affected by spells of the enchantment school cast using the rings find them entrancing. These rings acts as a casting focus and grants the caster a bonus to their caster level for enchantment spells cast.
Up to 12 magic rings can be incorporated into into a set of enchanting rings, however, they must first be modified costing 500 gp. After being modified, the wearer is able to gain the effects of one of the incorporated rings chosen by the wearer. This does not count against the two-ring limit. Changing which ring grants its effects is a move action.",
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
An evocation rod can be wielded and enchanted as though it were a masterwork light mace.
An evocation rod can be modified to function as any standard rod in addition its properties as a casting focus. This costs as much as creating a new rod of the corresponding type. Alternatively, they can be modified to strengthen damaging spells, adding a number of d6s of energy damage equal to the rod's caster level bonus. The type of damage matches the rod's energy type. This damage applies to a number of targets equal to half the rod's caster level bonus. This modification costs 2,000 gp for a +2 rod, 8,000 gp for a +4 rod, and 18,000 gp for a +6.",
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
		"Abjuration",
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
A necromantic skull can be modified into a dead skull. A dread skull confers all the same effects and bonuses as a necromantic skull but it contains a dormant animating force that can be awakened requiring the wielder to sacrifice either 1d4 or 2d4 points of strength damage at which point the skull animates into a Dread Skull Animus for a number of rounds equal to the strength damage dealt.
A Dread Skull Animus is a medium mindless undead with the dread skull as its head with a jaw and skeletal body formed from black mist that seems to flow down to the ground from the skull. The eyes of the skull glow with a cold blue light and cloak of black smoke trails down from the skull with the thickest almost liquid part flowing from its mouth and eyes. The smoke spreads out around the body not quite obscuring it. It has a number of hit dice equal the base caster level of the creature that awakened it and it has strength, dexterity, wisdom, and charisma stats of 10 plus twice the caster level bonus of the skull it was created from. It has 2 primary claw attacks that deal 1d4 damage and a primary bite attack that deals 1d6 damage. A Dread Skull Animus has a natural armor of half its hit dice, DR 5/magic, immunity to cold, and all of the standard immunities and traits possessed by undead creatures. Their base save bonuses are Fort +1/3 HD, Ref +1/3 HD, and Will +1/2 HD + 2 and their base attack bonus is equal to 3/4 of its hit dice. A Dread Skull Animus has Improved Initiative and Run as bonus feats. Any creature that grapples the Dread Skull Animus or hits it with a natural weapon takes a point of strength damage. Any target successfully hit one of the Dread Skull Animus's natural attacks takes 1d2 points of strength damage. Every point of strength damage dealt by a Dread Skull Animus increases the duration for which it it is animate by 1 round. While a dread skull is animated, it does not grant its awakener the normal benefits but it does maintain an empathic link via which base instructions can be conveyed and by which the Dread Skull Animus can identify whether the awakener considers a creature a friend or foe even if the awakener cannot see the creature. If not prevented, a Dread Skull Animus will attempt to charge at the nearest enemy and attack them targeting creature in an attempt to maximize the duration for which it remains animated. A Dread Skull Animus receives the dread skull's enhancement bonus and melee special weapon properties, if any, on its natural weapons and they count as magic so long as the enhancement bonus is at least +1.",
		false,
		"bb/Requirements/bb Craft Wondrous Item; bb/Cost/bb (+2) 11,250 gp, (+4) 22,500 gp, (+6) 33,750 gp
bb/Upgrade/bb:
bb/Requirements/bb Craft Wondrous Item, ii/animate dead/ii; bb/Cost/bb 23,000 gp"
	);
	require '../pageEnd.php';
?>