<?php 
	$startDir='';
	for($i=0; $i<20; $i++) {
		if(file_exists($startDir.'pageStart.php')) {
			require $startDir.'pageStart.php';
			break;
		}
		else {
			$startDir='../'.$startDir;
		}
	}
?>
<h2>
	Knight Radiant
</h2>
<p class="spaced">
	Description
</p>
<p class="spaced">
	<b>Role</b>: TODO
</p>
<p>
	<b>Alignment</b>: Varies.
</p>
<p>
	<b>Hit Dice</b>: d8.
</p>
<p>
	<b>Starting Wealth</b>: TODO.
</p>
<h3 class="alt">
	Class Skills
</h3>
<p>
	The Knight's Radiant class skills are Climb (Str), Craft (Int), Knowledge (history) (Int), Knowledge (planes) (Int), Knowledge (religion) (Int), Profession (Wis), Spellcraft (Int), and Use Magic Device (Cha).
</p>
<p>
	<b>Skill Points at each Level</b>:  4 + Int modifier.
</p>
<h3 class="alt">
	Class Features
</h3>
<table class="class-features no-sort">
	<tr>
		<th>Level</th>
		<th>Base Attack Bonus</th>
		<th>Good Saves</th>
		<th>Bad Saves</th>
		<th>Special</th>
	</tr>
	<tr>
		<td>1st</td>
		<td>+0</td>
		<td>+2</td>
		<td>+0</td>
		<td>First Ideal, Order, Stormlight, Spren, Surgebinding</td>
	</tr>
	<tr>
		<td>2nd</td>
		<td>+1</td>
		<td>+3</td>
		<td>+0</td>
		<td></td>
	</tr>
	<tr>
		<td>3rd</td>
		<td>+2</td>
		<td>+3</td>
		<td>+1</td>
		<td>Second Surge, Stormlight Efficiency</td>
	</tr>
	<tr>
		<td>4th</td>
		<td>+3</td>
		<td>+4</td>
		<td>+1</td>
		<td>Inspiring Visage</td>
	</tr>
	<tr>
		<td>5th</td>
		<td>+3</td>
		<td>+4</td>
		<td>+1</td>
		<td>Second Ideal, Stormlight Efficiency</td>
	</tr>
	<tr>
		<td>6th</td>
		<td>+4</td>
		<td>+5</td>
		<td>+2</td>
		<td>Squires</td>
	</tr>
	<tr>
		<td>7th</td>
		<td>+5</td>
		<td>+5</td>
		<td>+2</td>
		<td>Stormlight Efficiency</td>
	</tr>
	<tr>
		<td>8th</td>
		<td>+6/+1</td>
		<td>+6</td>
		<td>+2</td>
		<td></td>
	</tr>
	<tr>
		<td>9th</td>
		<td>+6/+1</td>
		<td>+6</td>
		<td>+3</td>
		<td>Stormlight Efficiency</td>
	</tr>
	<tr>
		<td>10th</td>
		<td>+7/+2</td>
		<td>+7</td>
		<td>+3</td>
		<td>Shardblade, Third Ideal</td>
	</tr>
	<tr>
		<td>11th</td>
		<td>+8/+3</td>
		<td>+7</td>
		<td>+3</td>
		<td>Stormlight Efficiency</td>
	</tr>
	<tr>
		<td>12th</td>
		<td>+9/+4</td>
		<td>+8</td>
		<td>+4</td>
		<td></td>
	</tr>
	<tr>
		<td>13th</td>
		<td>+9/+4</td>
		<td>+8</td>
		<td>+4</td>
		<td>Stormlight Efficiency</td>
	</tr>
	<tr>
		<td>14th</td>
		<td>+10/+5</td>
		<td>+9</td>
		<td>+4</td>
		<td></td>
	</tr>
	<tr>
		<td>15th</td>
		<td>+11/+6/+1</td>
		<td>+9</td>
		<td>+5</td>
		<td>Fourth Ideal, Shardplate, Stormlight Efficiency</td>
	</tr>
	<tr>
		<td>16th</td>
		<td>+12/+7/+2</td>
		<td>+10</td>
		<td>+5</td>
		<td></td>
	</tr>
	<tr>
		<td>17th</td>
		<td>+12/+7/+2</td>
		<td>+10</td>
		<td>+5</td>
		<td>Stormlight Efficiency</td>
	</tr>
	<tr>
		<td>18th</td>
		<td>+13/+8/+3</td>
		<td>+11</td>
		<td>+6</td>
		<td></td>
	</tr>
	<tr>
		<td>19th</td>
		<td>+14/+9/+4</td>
		<td>+11</td>
		<td>+6</td>
		<td>Stormlight Efficiency</td>
	</tr>
	<tr>
		<td>20th</td>
		<td>+15/+10/+5</td>
		<td>+12</td>
		<td>+6</td>
		<td>Fifth Ideal</td>
	</tr>
</table>
<p class="spaced">
	<b>Weapon and Armor Proficiency</b>: Knights Radiant are proficient with all simple and martial weapons, with all types of armor (heavy, medium, and light), and with shields (except tower shields).
</p>
<p class="spaced">
	<b>Order</b>: Each knight radiant is part of one of 10 orders, though under specific circumstances, certain knights may have powers that differ from the majority of their order. At 1st level each knight radiant joins one of the orders. This choice determines which surges, type of spren, and other abilities are gained by the knight. Some orders are restricted to characters of certain alignments. Knights radiant receive three additional class skills based on their order and the surges it grants. The knight's order also lists two saves that are the knight's "good" saves and one save which is their "bad" save. The knight receives a bonus to these saves from their class based on the chart above. Here is a <a href="knight_radiant_orders.php" target="_blank">list of the orders of the knights radiant and their associated details</a>.
</p>
<p class="spaced">
	<b>Ideals</b>: In order to gain power and progress through the stages of being a knight radiant, each knight must learn, internalize, and live a set of ideals that, with the exception of the first one, are unique to each order. Once a knight successfully internalizes an ideal it is associated with a given oath that must be made to seal it and allow it to take effect. The first of these oaths being "Life before death, strength before weakness, journey before destination." When an oath is made, it rejuvenates the knight, restoring them to full health, removing all negative status conditions, and healing them of all diseases and physical injury (as per healing done by investiture). It also fills the knight's internal reserve of stormlight.
</p>
<p class="spaced">
	If a knight breaks one of these oaths they begin to regress, taking 1 negative level per hour they continue to go as such without attempting to make amends. These negative levels cannot be removed by any means unless the knight makes amends and re-takes up their oath. Every negative level taken this way restricts access to class features  in addition to its normal affects. After losing a number of negative levels this way equal to their number of Knight Radiant levels, they lose the negative levels and permanently lose all levels in Knight Radiant, losing access to all class features, class skills, skill points gained, feats taken, base attack bonuses, save bonuses, and all other effects of the levels in the class as though they had never received those levels.
</p>
<p class="spaced">
	<b>Spren</b>: At 1st level each knight radiant forms a bond with a species of radiant spren based on their order. It is this bond which makes them a knight radiant and decides their order. As with any spren, this spren can choose to show or hide itself to anyone it chooses, is <?php echo quick_format('as/general_rules_cosm|Intangible|intangible/as'); ?>, and is related to some concept. Unlike other spren, radiant spren are intelligent, though stuck in their ways similar to many outsiders. Additionally, while in theory a radiant spren can hide itself from its bonded knight, in practice they are generally always visible to them. A bonded spren can travel a maximum distance of 500 feet from their bonded radiant beyond which they begin to lose themself and become "feral", changing in nature and appearance to match the species of lesser spren associated with that order.
</p>
<p class="spaced">
	In many ways, a spren is the final judge of whether or not their knight has properly internalized or broken an oath. If a knight does break an oath their spren will begin to lose themself similar to being too far away. If the knight loses the effect of all of their levels as a knight radiant, their bond to their spren is violently severed, transforming their spren into a deadeye and permanently cutting them off from their class features as a knight radiant.
</p>
<p class="spaced">
	<b>Stormlight (Su)</b>: Starting at 1st level, a knight radiant gains the ability to absorb and transfer stormlight as a swift action. Each knight has a maximum internal reserve of stormlight equal to 36 points of investiture plus 4 per level over 1st. This reserve depletes at a rate of 1 point per minute. While a knight has at least 1 point within their reserve, they shed <i>light</i> as per the spell. A knight can absorb stormlight from unattended reserves within 5 feet and can deposit it into touched valid containers. While a knight has at least 1 point of stormlight in their reserve and is damaged, their stormlight will be expended at a rate of 1 point per round granting them fast healing equal to half their level, minimum 1.
</p>
<p class="spaced">
	Starting at 1st level, a knight radiant can expend 4 points of stormlight as a free action to remove the bleed, confused, dazed, deafened, exhausted, fatigued, nauseated, paralyzed, shaken, sickened, staggered, and stunned conditions.
</p>
<p class="spaced">
	Starting at 1st level, a knight radiant can expend a number of points of stormlight, minimum 1, from their reserve as a free action to attempt to remove a disease, drug, or poison from their system. The knight makes a fortitude save against the DC of the affliction with a bonus equal to the number of points of stormlight expended. If the knight rolls less than a 10 on the die, treat the die as having landed on a 10. For drugs use the addiction DC. For alcohol use a DC of 15. If the save succeeded, the effects or the affliction are immediately ended. When used on drugs, this also removes the ability damage associated.
</p>
<p class="spaced">
	Starting at 2nd level, while a knight radiant has at least 1 point of stormlight in their reserve, they move with increased speed gaining the effects of the <i>haste</i> spell.
</p>
<p class="spaced">
	Starting at 4th level, a knight radiant who is holding their breath can expend 2 points of stormlight, when making a check to continue holding their breath, to automatically succeed the check.
</p>
<p class="spaced">
	Starting at 6th level, severed body members grow back as per the spell <i>regenerate</i>, expending 2 points of investiture per round while it happens. If the knight runs out of stormlight, the process is paused, leaving the member partially restored. Once the knight acquires additional stormlight, the process will resume with the remaining time left.
</p>
<p class="spaced">
	Starting at 12th level, while a knight radiant has at least 1 point of stormlight in their reserve, they gain a +4 enhancement bonus to all of their physical stats.
</p>
<p class="spaced">
	<b>Surgebinding (Sp)</b>: Each order has an associated primary and secondary surge. Starting at 1st level, a knight gains access to the surgebinding abilities granted by their primary surge and access to the abilities granted by their secondary surge starting at 3rd level. The act of performing surgebinding is a spell-lik ability. Surgebinding abilities require infusing either an area or object with a given amount of investiture in the form of stormlight that decays at a certain rate. The resulting effect lasts until all of the investiture is expended or until the knight dismisses the effect reclaiming all remaining stormlight as a move action. A knight can only dismiss an ability within 10 feet.
</p>
<p class="spaced">
	When a surgebinding ability is used, and each time that an amount of time has elapsed equal to the listed interval following its use, an amount of investiture is expended equal to the listed investiture cost for the ability. Using one of these abilities is a standard action that provokes attacks of opportunity and is subject to spell resistance unless it states otherwise.
</p>
<p class="spaced">
	<b>Stormlight Efficiency</b>: At 3rd level and every second level thereafter (5th, 7th, 9th, etc.), a knight radiant reduces the cost of using surgebinding abilities by 1 to a minimum of 1.
</p>
<p class="spaced">
	<b>Squires</b>: Starting at 6th level, a knight radiant is able to recruit squires. The knight can lend their powers to up to 5 subordinates who become the knight's squires and gain the benefit of the Stormlight and Surgebinding class features as a knight radiant of their level (maximum of the knight's level minus 2) with the same order as the knight so long as they are within 1,000 feet. Every second level beyond 6th (8th, 10th, 12th, etc.), the knight's maximum number of squires increases by 2.
</p>
<p class="spaced">
	<b>Shardblade</b>: Starting at 10th level once the knight has made their 3rd oath, a knight's bonded spren can take the form of a weapon known as a shardblade as an immediate action. This weapon can take any form as per the <i>greater transformative</i> property, but defaults to a large sword whose length surpasses the height of the knight radiant. The default form deals 3d6 slashing damage and has a x3 critical modifier. This form also has the reach property but closer targets can also be attacked, though at a -2 penalty. The weapon possesses spell immunity and is immune to damage. Regardless of the weapon's size and shape it can be wielded with relative ease possessing relatively only little weight.
</p>
<p class="spaced">
	Any sharp edge or point possessed by a shardblade is capable of cleanly piercing or cutting any normal material with no force. Any nonliving object without a soul and without spell resistance or spell immunity is incapable of impeding the path of a sharp shardblade and takes 20 times the regular damage of the weapon bypassing hardness and DR. This only applies to attacks made with piercing or slashing weapons. If a nonliving object without a soul and possessing spell resistance is struck it takes the normal damage replacing its hardness with its spell resistance minus 10. If the object instead has spell immunity, the shardblade cannot harm it. If a living object or creature, or a creature or object with a soul, is struck by a sharp shardblade, the weapon passes through them without dealing physical damage. Instead it damages their soulweb, cutting off the portion beyond the cut line, causing that region of their body to die and go limp. This deals damage to the creature equal to 5 times the normal damage of the weapon that cannot be healed until the damage to their soulweb is undone. Such damage can be recovered by receiving investiture based healing, requiring two points of healing for every point of damage restored. Spell resistance and immunity possessed by a living creature does not impede a shardblade. Because they are not impeded by most physical objects, bladed or pointed shardblades ignore most armor, shield, and natural armor bonuses to AC.
</p>
<p class="spaced">
	Shardblades receive a +1 enhancement bonus for every two levels the knight radiant possesses beyond 10th, to a maximum of +5.
</p>
<p class="spaced">
	<b>Shardplate</b>: Upon swearing the 4th oath, a swarm of lesser spren, matching the knight's order, gather around and take physical form as a suit of god-metal armor called shardplate. Shardplate completely covers the wearer except for a series of small holes and slits around the face to allow air in. The face mask of the armor is transparent from the inside allowing the wearer to see without hindrance. The holes in the face mask can be closed or opened as an immediate action by the knight radiant. While the holes are closed the knight can no longer breathe but the suit is air-tight, preventing any and all damage or effects from reaching them directly.
</p>
<p class="spaced">
	Any damage or spell targeting the knight is instead taken by their armor which has a hardness of 20 and 200 hit points, plus 20 per level over 15th. For the purpose of interacting with shardblades, treat the armor as having a spell resistance of 30. Against non damage dealing spells, shardplate is treated as immune to magic. Spells that deal damage do so as normal, applying the hardness of the plate, but the plate is immune to all secondary effects. While the air slits on the helmet are open, a critical hit with a piercing weapon or with energy damage, which rolled at least 15 higher than the wearer's AC, or a natural 20 on the confirmation roll, bypasses the plate, through the holes, and deals damage to the wearer, but the damage is reduced by x1. (A weapon with a critical multiplier of x2 will deal normal damage and a weapon with a multiplier of x3 will deal only double damage.)
</p>
<p class="spaced">
	While wearing shardplate, the knight gains a +6 enhancement bonus to strength and dexterity, counts as being 2 categories larger for the purpose of spells and abilities, and can wield weapons one size category above them without penalty. This armor doesn't grant a bonus to AC and has no maximum dexterity, armor check penalty, or arcane spell failure chance. Shardplate weighs 2,000 lbs though does not count against the weight the knight is carrying. This armor does prevent the wearing of other armor, but the wearer does not receive the bonus to AC from any other armor, or from natural armor, while wearing this plate.
</p>
<p class="spaced">
	The knight can transform their armor into a thin veil around them that has no effects and can only be seen with a DC 20 perception check. Doing so is a standard action.
</p>



<?php require $startDir.'pageEnd.php'; ?>