<?php 
	$startDir='';
	for($i=0; $i<10; $i++) {
		if(file_exists($startDir.'pageStart.php')) {
			require $startDir.'pageStart.php';
			break;
		}
		else {
			$startDir='../'.$startDir;
		}
	}
?>
<script>
	initialSort=true;
	seriesNum={'basic':0,'arcane school':1,'divine':2,'natural':3};
	initialSortFunc=function(a,b) {
		if(a.children[0].tagName=='TH')
			return -1;
		else if(b.children[0].tagName=='TH')
			return 1;
		return 2 * comp(a.children[1].innerText.toLowerCase(),b.children[1].innerText.toLowerCase()) +
			1 * comp(a.children[0].innerText.toLowerCase(),b.children[0].innerText.toLowerCase());
	};
</script>
<p></p>
<?php
	block(
		"Casting Foci",
		"",
		quick_format([
			'Certain, specially created, items can be used focus the the power of a caster. Most of these items appear at first to resemble existing magic items and, in fact, many can have the functions of their corresponding item integrated into it or some other boon. Unless stated otherwise, upgrading a casting focus increases it\'s price by twice the cost to upgrade it. Each item grants a boon to the caster improving their magic.',
			'Holding a casting focus does not prevent that hand from performing somatic spell components. Depending on the item, either normal somatic components are used or some manipulation of the item is used in place. Additionally if casting a touch spell, the charge becomes attached to both the caster\'s hand and the casting focus and can be discharged by touching either one.',
			'All casting foci can be enchanted like a magic weapon. Enhancement bonuses add to any attack rolls or save DCs associated with the spell. Melee weapon properties only apply to damaging spells with a range of touch, while ranged weapon properties only apply to damaging spells with a range longer than touch that are a "ray" effect or that have a target or targets. Weapon properties with additional restrictions cannot be applied to casting foci. Certain exceptions do apply however. If a casting focus is enchanted with ii/ghost touch/ii all spells cast with it are unaffected by the incorporeal quality as per ii/ghost touch/ii. A casting focus can be enchanted with the ii/deadly/ii property which changes any non-lethal damage dealt by spells cast with the focus deal lethal damage instead but also makes every spell cast with the focus count as a "damaging" spell. If a casting focus is enchanted with the ii/keen/ii quality or is the subject of the ii/keen edge/ii spell, it doubles the threat range of all attack rolls associated with spells cast from using the focus. An enchanted casting foci has the higher caster level of its base caster level and the caster level of its enchantments.',
			'Some casting foci can be wielded and enchanted as some type of weapon. Enchantments on these items apply separately to its use as a casting foci and as a weapon similar  to if it were a double weapon, listing enchantments on the casting focus functionality first. When applying an enchantment to either the casting focus or weapon functionality, the material component cost of making the item is reduced by the square of the overlapping equivalent enhancement bonus times 1,000 gp and the required time at the same rate. (i.e. Enchanting a +2 ii/bane/ii / +3 ii/ghost touch/ii ii/shocking burst/ii spell potency staff to +4 ii/bane/ii ii/shocking burst/ii / +3 ii/ghost touch/ii ii/shocking burst/ii would cost (49,000 - 25,000) - (9,000 - 4,000) = 24,000 - 5,000 = 19,000 gp and take 38 days instead of 49,000 - 9,000 = 40,000 gp taking 80 days.) (WIP, Subject to change.)',
			'Casting foci are seperated into a number of types. Any casting can use any type of focus and the type has no effect on its functionality, though the type does indicate what type of caster it was designed for and therefore who might get the most use from it.'
		]),
		false,
		[]
	);
	table(
		[
			'Name',
			'Cost',
			'Type',
			'Description',
			'Upgrade'
		],
		[
			[
				'Focusing Wand',
				'link' => 'items/casting_foci/focusing_wand.php',
				'150 gp',
				'Basic',
				'The simplest form of focus, aids with concentration and can support further enchantment.',
				'Functions as either a wand or metamagic rod.'
			],
			[
				'Spell Potency Staff +1',
				'link' => 'items/casting_foci/spell_potency_staff.php',
				'15,000 gp',
				'Basic',
				'Grants a caster level bonus.',
				'Functions as a custom staff.'
			],
			[
				'Spell Potency Staff +2',
				'link' => 'items/casting_foci/spell_potency_staff.php',
				'30,000 gp',
				'Basic',
				'Grants a caster level bonus.',
				'Functions as a custom staff.'
			],
			[
				'Spell Potency Staff +3',
				'link' => 'items/casting_foci/spell_potency_staff.php',
				'45,000 gp',
				'Basic',
				'Grants a caster level bonus.',
				'Functions as a custom staff.'
			],
			[
				'Abjuring Rune Stone (10 hp)',
				'link' => 'items/casting_foci/abjuration_stone.php',
				'10,000 gp',
				'Arcane School',
				'Places a protective barrier around the targets of your spells.',
				'Grants spell resistance.'
			],
			[
				'Abjuring Rune Stone (20 hp)',
				'link' => 'items/casting_foci/abjuration_stone.php',
				'30,000 gp',
				'Arcane School',
				'Places a protective barrier around the targets of your spells.',
				'Grants spell resistance.'
			],
			[
				'Abjuring Rune Stone (30 hp)',
				'link' => 'items/casting_foci/abjuration_stone.php',
				'50,000 gp',
				'Arcane School',
				'Places a protective barrier around the targets of your spells.',
				'Grants spell resistance.'
			],
			[
				'Abjuring Rune Stone (40 hp)',
				'link' => 'items/casting_foci/abjuration_stone.php',
				'70,000 gp',
				'Arcane School',
				'Places a protective barrier around the targets of your spells.',
				'Grants spell resistance.'
			],
			[
				'Abjuring Rune Stone (50 hp)',
				'link' => 'items/casting_foci/abjuration_stone.php',
				'90,000 gp',
				'Arcane School',
				'Places a protective barrier around the targets of your spells.',
				'Grants spell resistance.'
			],
			[
				'Conjuring Key (3rd)',
				'link' => 'items/casting_foci/conjuration_key.php',
				'10,000 gp',
				'Arcane School',
				'Prolongs the duration of objects and creatures summoned or created by your spells and strengthens objects and creatures created by your spells.',
				'Either magically locks/unlocks or blocks/enables teleportation.'
			],
			[
				'Conjuring Key (6th)',
				'link' => 'items/casting_foci/conjuration_key.php',
				'36,700 gp',
				'Arcane School',
				'Prolongs the duration of objects and creatures summoned or created by your spells and strengthens objects and creatures created by your spells.',
				'Either magically locks/unlocks or blocks/enables teleportation.'
			],
			[
				'Conjuring Key (9th)',
				'link' => 'items/casting_foci/conjuration_key.php',
				'81,700 gp',
				'Arcane School',
				'Prolongs the duration of objects and creatures summoned or created by your spells and strengthens objects and creatures created by your spells.',
				'Either magically locks/unlocks or blocks/enables teleportation.'
			],
			[
				'Divining Sphere',
				'link' => 'items/casting_foci/divination_sphere.php',
				'TODO gp',
				'Arcane School',
				'TODO',
				'Functions as a crystal ball.'
			],
			[
				'Enchanting Rings',
				'link' => 'items/casting_foci/enchantment_rings.php',
				'TODO gp',
				'Arcane School',
				'TODO',
				'Allows switching between up to 12 other magic rings.'
			],
			[
				'Evocation Rod',
				'link' => 'items/casting_foci/evocation_rod.php',
				'TODO gp',
				'Arcane School',
				'TODO',
				'Can either add additional energy damage to spells or function as a metamagic rod.'
			],
			[
				'Illusory Glove, Ethereal (3rd)',
				'link' => 'items/casting_foci/illusion_glove.php',
				'9,300 gp',
				'Arcane School',
				'Makes it harder to for other to notice when you cast an illusion and to magical detect your illusions.',
				'Grants a +10 bonus to Sleight of Hand checks.'
			],
			[
				'Illusory Glove, Ethereal (6th)',
				'link' => 'items/casting_foci/illusion_glove.php',
				'29,300 gp',
				'Arcane School',
				'Makes it harder to for other to notice when you cast an illusion and to magical detect your illusions.',
				'Grants a +10 bonus to Sleight of Hand checks.'
			],
			[
				'Illusory Glove, Ethereal (9th)',
				'link' => 'items/casting_foci/illusion_glove.php',
				'78,800 gp',
				'Arcane School',
				'Makes it harder to for other to notice when you cast an illusion and to magical detect your illusions.',
				'Grants a +10 bonus to Sleight of Hand checks.'
			],
			[
				'Illusory Glove, Shadowy (3rd)',
				'link' => 'items/casting_foci/illusion_glove_shadow.php',
				'5,000 gp',
				'Arcane School',
				'Increases the realness of shadow spells you cast by 20%.',
				'Grants a +10 bonus to Sleight of Hand checks.'
			],
			[
				'Illusory Glove, Shadowy (6th)',
				'link' => 'items/casting_foci/illusion_glove_shadow.php',
				'18,300 gp',
				'Arcane School',
				'Increases the realness of shadow spells you cast by 20%.',
				'Grants a +10 bonus to Sleight of Hand checks.'
			],
			[
				'Illusory Glove, Shadowy (9th)',
				'link' => 'items/casting_foci/illusion_glove_shadow.php',
				'40,800 gp',
				'Arcane School',
				'Increases the realness of shadow spells you cast by 20%.',
				'Grants a +10 bonus to Sleight of Hand checks.'
			],
			[
				'Transmuting Vial (+1)',
				'link' => 'items/casting_foci/transmutation_vial.php',
				'2,500 gp',
				'Arcane School',
				'Grants a bonus or penalty to a chosen type of check to subjects of your spells.',
				'Allows the creation of a number of temporary alchemical items each day.'
			],
			[
				'Transmuting Vial (+2)',
				'link' => 'items/casting_foci/transmutation_vial.php',
				'10,000 gp',
				'Arcane School',
				'Grants a bonus or penalty to a chosen type of check to subjects of your spells.',
				'Allows the creation of a number of temporary alchemical items each day.'
			],
			[
				'Transmuting Vial (+3)',
				'link' => 'items/casting_foci/transmutation_vial.php',
				'22,500 gp',
				'Arcane School',
				'Grants a bonus or penalty to a chosen type of check to subjects of your spells.',
				'Allows the creation of a number of temporary alchemical items each day.'
			],
			[
				'Transmuting Vial (+4)',
				'link' => 'items/casting_foci/transmutation_vial.php',
				'40,000 gp',
				'Arcane School',
				'Grants a bonus or penalty to a chosen type of check to subjects of your spells.',
				'Allows the creation of a number of temporary alchemical items each day.'
			],
			[
				'Transmuting Vial (+5)',
				'link' => 'items/casting_foci/transmutation_vial.php',
				'62,500 gp',
				'Arcane School',
				'Grants a bonus or penalty to a chosen type of check to subjects of your spells.',
				'Allows the creation of a number of temporary alchemical items each day.'
			],
			[
				'Necromantic Skull (3rd)',
				'link' => 'items/casting_foci/necromancy_skull.php',
				'15,000 gp',
				'Arcane School',
				'Empowers undead you create and makes it harder to resist your spells to control undead.',
				'Animates as a dread skull animus.'
			],
			[
				'Necromantic Skull (6th)',
				'link' => 'items/casting_foci/necromancy_skull.php',
				'60,000 gp',
				'Arcane School',
				'Empowers undead you create and makes it harder to resist your spells to control undead.',
				'Animates as a dread skull animus.'
			],
			[
				'Necromantic Skull (9th)',
				'link' => 'items/casting_foci/necromancy_skull.php',
				'120,000 gp',
				'Arcane School',
				'Empowers undead you create and makes it harder to resist your spells to control undead.',
				'Animates as a dread skull animus.'
			],
			[
				'Blessed Holy Symbol',
				'link' => 'items/casting_foci/divine_symbol.php',
				'1,400 gp',
				'Divine',
				'Allows you to reroll at least one attack roll, saving throw, or skill check each day.',
				'Allows you to recall one spell per day.'
			],
			[
				'Hammer of Holy Light (3rd)',
				'link' => 'items/casting_foci/channelling_hammer.php',
				'15,000 gp',
				'Divine',
				'Empowers positive energy damage.',
				'Enables you to overcome the some of the defenses of undead.'
			],
			[
				'Hammer of Holy Light (6th)',
				'link' => 'items/casting_foci/channelling_hammer.php',
				'60,000 gp',
				'Divine',
				'Empowers positive energy damage.',
				'Enables you to overcome the some of the defenses of undead.'
			],
			[
				'Hammer of Holy Light (9th)',
				'link' => 'items/casting_foci/channelling_hammer.php',
				'120,000 gp',
				'Divine',
				'Empowers positive energy damage.',
				'Enables you to overcome the some of the defenses of undead.'
			],
			[
				'Calling Key (3rd)',
				'link' => 'items/casting_foci/summoning_key.php',
				'15,000 gp',
				'Divine',
				'Strengthens summoned creatures.',
				'Summons a persistent minion.'
			],
			[
				'Calling Key (6th)',
				'link' => 'items/casting_foci/summoning_key.php',
				'60,000 gp',
				'Divine',
				'Strengthens summoned creatures.',
				'Summons a persistent minion.'
			],
			[
				'Calling Key (9th)',
				'link' => 'items/casting_foci/summoning_key.php',
				'120,000 gp',
				'Divine',
				'Strengthens summoned creatures.',
				'Summons a persistent minion.'
			],
			[
				'Ophiuchus Staff (3rd)',
				'link' => 'items/casting_foci/healing_staff.php',
				'45,000 gp',
				'Divine',
				'Strengthens bonuses and healing granted by your spells.',
				'Dramatically improves your healing skill and is capable of restoring the dead.'
			],
			[
				'Ophiuchus Staff (6th)',
				'link' => 'items/casting_foci/healing_staff.php',
				'72,000 gp',
				'Divine',
				'Strengthens bonuses and healing granted by your spells.',
				'Dramatically improves your healing skill and is capable of restoring the dead.'
			],
			[
				'Ophiuchus Staff (9th)',
				'link' => 'items/casting_foci/healing_staff.php',
				'99,000 gp',
				'Divine',
				'Strengthens bonuses and healing granted by your spells.',
				'Dramatically improves your healing skill and is capable of restoring the dead.'
			],
			[
				'Radiant Lantern',
				'link' => 'items/casting_foci/channelling_lantern.php',
				'37,550 gp',
				'Divine',
				'Upgrades your cure spells to a more powerful version.',
				'Makes your channeled energy more powerful and harder to resist.'
			],
			[
				'Bleeding Bone',
				'link' => 'items/casting_foci/necromancy_bone.php',
				'14,000 gp',
				'Divine',
				'Allows you to pay material component costs in blood.',
				'Can command its own pool of undead.'
			],
			[
				'Curse Rod',
				'link' => 'items/casting_foci/curse_rod.php',
				'28,000 gp',
				'Divine',
				'Spells cast becomes curses and therefore harder to resist and dispel.',
				'Can cast spells as part of a melee attack.'
			],
			[
				'Genesis Branch',
				'link' => 'items/casting_foci/plants_branch.php',
				'18,600 gp',
				'Natural',
				'Create magical plant life to enable and empower plant-based spells.',
				quick_format('Grows ii/goodberries/ii.')
			],
			[
				'Blessed Claw',
				'link' => 'items/casting_foci/polymorph_claw.php',
				'5,000 gp',
				'Natural',
				'Grants a bonus to concentration checks while polymorphed.',
				'Can receive enhancement bonuses and special qualities that apply to one or all of your natural attacks.'
			],
			[
				'Casting Weapon',
				'link' => 'items/casting_foci/casting_weapon.php',
				'+2,000 gp',
				'Basic',
				'The simplest form of focus, aids with concentration and can support further enchantment.',
				'None'
			]
		],
		true,
		false
	);
	require $startDir.'pageEnd.php';
?>