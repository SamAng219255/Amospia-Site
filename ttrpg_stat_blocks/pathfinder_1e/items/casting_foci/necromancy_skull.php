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
		'Necromantic Skull',
		'Abjuration',
		17,
		'Focus',
		'15,000 gp (3rd), 60,000 gp (6th), 120,000 gp (9th)',
		2,
		'This humanoid skull of an unknown race with sharp teeth and a pair of particularly long canines is missing its jaw and has dark symbols scribbled across its surface and seems to exude an ominous presence and almost visible dark smoke that drips to the floor before evaporating. While a spell of the necromancy school is being cast using this skull, the eyes fill with supernatural darkness and the black smoke thickens and grows more visible, pouring from the eyes and the area that would otherwise be its mouth, spilling across a 5 foot diameter region of the ground before evaporating away.
		This skull acts as a casting focus and empowers undead you animate. This skull is limited to what spells it can affect, it can only affect spells, and the casting of those spells, up to its max level of 3rd, 6th, or 9th. Whenever you cast a spell that creates, animates, calls, or summons an undead creature using this focus, the creature gains two additional racial hit dice before any relevant templates are applied. Additionally, any spells cast with, or spell-like and supernatural abilities used while holding, this focus that control undead creatures receive a bonus to their DCs equal to half your caster level rounded up to a maximum of 1 more than the maximum spell level of the focus.
		<br>
		A ii/necromantic skull/ii can be modified into a dread skull. A ii/dread skull/ii confers all the same effects and bonuses as a ii/necromantic skull/ii but it contains a dormant animating force that can be awakened requiring the wielder to sacrifice either 1d4 or 2d4 points of strength damage at which point the skull animates into a aa/dread_skull_animus|Dread Skull Animus/aa for a number of rounds equal to the strength damage dealt.
		A Dread Skull Animus is a medium mindless undead with the ii/dread skull/ii as its head with a jaw and skeletal body formed from black mist that seems to flow down to the ground from the skull. The eyes of the skull glow with a cold blue light and cloak of black smoke trails down from the skull with the thickest almost liquid part flowing from its mouth and eyes. The smoke spreads out around the body not quite obscuring it. Every point of strength damage dealt by a Dread Skull Animus increases the duration for which it it is animate by 1 round. While a ii/dread skull/ii is animated, it does not grant its awakener the normal benefits but it does maintain an empathic link through which basic instructions can be conveyed and by which the Dread Skull Animus can identify whether the awakener considers a creature a friend or foe even if the awakener cannot see the creature. If not prevented, a Dread Skull Animus will attempt to charge at the nearest enemy and attack them, targeting creatures in an attempt to maximize the duration for which it remains animated. A Dread Skull Animus receives the ii/dread skull/ii\'s enhancement bonus and melee special weapon properties, if any, on its natural weapons and they count as magic so long as the enhancement bonus is at least +1.',
		false,
		'bb/Requirements/bb Craft Wondrous Item; bb/Cost/bb 7,500 gp (3rd), 30,000 gp (6th), 60,000 gp (9th)
		bb/Upgrade/bb:
		bb/Requirements/bb Craft Wondrous Item, ii/animate dead/ii; bb/Cost/bb 23,000 gp'
	);
	require $startDir.'pageEnd.php';
?>