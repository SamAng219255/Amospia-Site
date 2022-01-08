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
	require $startDir.'pageEnd.php';
?>