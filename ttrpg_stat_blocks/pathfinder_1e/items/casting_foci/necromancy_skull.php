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
<?php
	magicItemBlockAuto(
		"Necromantic Skull",
		"Abjuration",
		9,
		"Focus",
		"(+2) 22,500 gp, (+4) 45,000 gp, (+6) 67,500 gp",
		"—",
		"This humanoid skull of an unknown race with sharp teeth and a pair of particularly long canines is missing its jaw and has dark symbols scribbled across its surface and seems to exude an ominous presence and almost visible dark smoke that drips to the floor before evaporating. While a spell of the necromancy school is being cast using this skull, the eyes fill with supernatural darkness and the black smoke thickens and grows more visible, pouring from the eyes and the area that would otherwise be its mouth, spilling across a 5 foot diameter region of the ground before evaporating away. This skull acts as a casting focus and grants the caster a bonus to their caster level for necromancy spells cast.
		A ii/necromantic skull/ii can be modified into a dread skull. A ii/dread skull/ii confers all the same effects and bonuses as a ii/necromantic skull/ii but it contains a dormant animating force that can be awakened requiring the wielder to sacrifice either 1d4 or 2d4 points of strength damage at which point the skull animates into a Dread Skull Animus for a number of rounds equal to the strength damage dealt.
		A Dread Skull Animus is a medium mindless undead with the ii/dread skull/ii as its head with a jaw and skeletal body formed from black mist that seems to flow down to the ground from the skull. The eyes of the skull glow with a cold blue light and cloak of black smoke trails down from the skull with the thickest almost liquid part flowing from its mouth and eyes. The smoke spreads out around the body not quite obscuring it. It has a number of hit dice equal the base caster level of the creature that awakened it and it has strength, dexterity, wisdom, and charisma stats of 10 plus twice the caster level bonus of the skull it was created from. It has 2 primary claw attacks that deal 1d4 damage and a primary bite attack that deals 1d6 damage. A Dread Skull Animus has a natural armor of half its hit dice, DR 5/magic, immunity to cold, and all of the standard immunities and traits possessed by undead creatures. Their base save bonuses are Fort +1/3 HD, Ref +1/3 HD, and Will +1/2 HD + 2 and their base attack bonus is equal to 3/4 of its hit dice. A Dread Skull Animus has Improved Initiative and Run as bonus feats. Any creature that grapples the Dread Skull Animus or hits it with a natural weapon takes a point of strength damage. Any target successfully hit one of the Dread Skull Animus's natural attacks takes 1d2 points of strength damage. Every point of strength damage dealt by a Dread Skull Animus increases the duration for which it it is animate by 1 round. While a ii/dread skull/ii is animated, it does not grant its awakener the normal benefits but it does maintain an empathic link via which base instructions can be conveyed and by which the Dread Skull Animus can identify whether the awakener considers a creature a friend or foe even if the awakener cannot see the creature. If not prevented, a Dread Skull Animus will attempt to charge at the nearest enemy and attack them targeting creature in an attempt to maximize the duration for which it remains animated. A Dread Skull Animus receives the ii/dread skull/ii's enhancement bonus and melee special weapon properties, if any, on its natural weapons and they count as magic so long as the enhancement bonus is at least +1.",
		false,
		"bb/Requirements/bb Craft Wondrous Item; bb/Cost/bb (+2) 11,250 gp, (+4) 22,500 gp, (+6) 33,750 gp
		bb/Upgrade/bb:
		bb/Requirements/bb Craft Wondrous Item, ii/animate dead/ii; bb/Cost/bb 23,000 gp"
	);
	require $startDir.'pageEnd.php';
?>