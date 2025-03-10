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
	classBlock(
		'Knight Radiant',// name,
		'Description',// desc,
		'TODO',// role,
		'Varies',// align,
		8,// hd,
		false,// parentClasses
		false,// startWealth,
		[
			'Skills' => 'Any one skill 5 ranks',
			'Spren' => 'The character must form a bond with a spren.'
		],// require,
		[
			'Climb',
			'Craft',
			'Knowledge (history)',
			'Knowledge (planes)',
			'Knowledge (religion)',
			'Profession',
			'Spellcraft',
			'Use Magic Device'
		],// classSkills,
		4,// skillsPerLevel,
		3/4,// bab,
		false,// showIter,
		[
			'custom' => true,
			'Good' => 'good_prestige',
			'Bad' => 'bad_prestige'
		],// saves,
		[
			'Order, Stormlight, Spren',// 1st
			'First Ideal, Surgebinding',// 2nd
			'Inspiring Visage',// 3rd
			'Second Ideal, Second Surge',// 4th
			'Squires',// 5th
			'Shardblade, Third Ideal',// 6th
			'',// 7th
			'Fourth Ideal, Shardplate',// 8th
			'',// 9th
			'Fifth Ideal',// 10th
		],// specials,
		false,// spells,
		false,// spellsSecondary,
		[
			'Weapon and Armor Proficiency' => [
				'Knight radiants are proficient with all simple and martial weapons, with all types of armor (heavy, medium, and light), and with shields (except tower shields).'
			],
			'Order' => [
				'Each knight radiant is part of one of 10 orders, though under specific circumstances, certain radiants may have powers that differ from the majority of their order. At 1st level each knight radiant joins one of the orders. This choice determines which surges, type of spren, and other abilities are gained by the radiant. Some orders are restricted to characters of certain alignments. Knight radiants receive three additional class skills based on their order and the surges it grants. The radiant\'s order also lists two saves that are the radiant\'s "good" saves and one save which is their "bad" save. The radiant receives a bonus to these saves from their class based on the chart above. Here is a aa/knight_radiant_orders|list of the orders of the knight radiants and their associated details/aa.'
			],
			'Ideals' => [
				'In order to gain power and progress through the stages of being a knight radiant, each radiant must learn, internalize, and live a set of ideals that, with the exception of the first one, are unique to each order. Once a radiant successfully internalizes an ideal it is associated with a given oath that must be made to seal it and allow it to take effect. The first of these oaths being "Life before death, strength before weakness, journey before destination." When an oath is made, it rejuvenates the radiant, restoring them to full health, removing all negative status conditions, and healing them of all diseases and physical injury (as per healing done by investiture). It also fills the radiant\'s internal reserve of stormlight.',
				'If a radiant breaks one of these oaths they begin to regress, taking 1 negative level per hour they continue to go as such without attempting to make amends. These negative levels cannot be removed by any means unless the radiant makes amends and re-takes up their oath. Every negative level taken this way restricts access to class features  in addition to its normal affects. After losing a number of negative levels this way equal to their number of Knight Radiant levels, they lose the negative levels and permanently lose all levels in Knight Radiant, losing access to all class features, class skills, skill points gained, feats taken, base attack bonuses, save bonuses, and all other effects of the levels in the class as though they had never received those levels.'
			],
			'Spren' => [
				'At 1st level each knight radiant forms a bond with a species of radiant spren based on their order. It is this bond which makes them a knight radiant and decides their order. As with any spren, this spren can usually choose to show or hide itself to anyone it chooses, is as/general_rules_cosm|Intangible|intangible/as, and is related to some concept. Unlike other spren, radiant spren are intelligent, though stuck in their ways similar to many outsiders. Additionally, while in theory a radiant spren can hide itself from its bonded radiant, in practice they are generally always visible to them. A bonded spren can travel a maximum distance of 500 feet from their bonded radiant beyond which they begin to lose themself and become "feral", changing in nature and appearance to match the species of lesser spren associated with that order.',
				'In many ways, a spren is the final judge of whether or not their radiant has properly internalized or broken an oath. If a radiant does break an oath their spren will begin to lose themself similar to being too far away. If the radiant loses the effect of all of their levels as a knight radiant, their bond to their spren is violently severed, transforming their spren into a deadeye and permanently cutting them off from their class features as a knight radiant.'
			],
			'Stormlight (Su)' => [
				'Starting at 1st level, a knight radiant gains the ability to absorb and transfer stormlight as a swift action. Each radiant has a maximum internal reserve of stormlight equal to 36 points of investiture plus 4 per level over 1st. This reserve depletes at a rate of 1 point per minute. While a radiant has at least 1 point within their reserve, they shed ii/light/ii as per the spell. A radiant can absorb stormlight from unattended reserves within 5 feet and can deposit it into touched valid containers. While a radiant has at least 1 point of stormlight in their reserve and is damaged, their stormlight will be expended at a rate of 1 point per round granting them fast healing equal to half their level, minimum 1.',
				'Starting at 1st level, a knight radiant can expend 4 points of stormlight as a free action to remove the bleed, confused, dazed, deafened, exhausted, fatigued, nauseated, paralyzed, shaken, sickened, staggered, and stunned conditions.',
				'Starting at 1st level, a knight radiant can expend a number of points of stormlight, minimum 1, from their reserve as a free action to attempt to remove a disease, drug, or poison from their system. The radiant makes a fortitude save against the DC of the affliction with a bonus equal to the number of points of stormlight expended. If the radiant rolls less than a 10 on the die, treat the die as having landed on a 10. For drugs use the addiction DC. For alcohol use a DC of 15. If the save succeeded, the effects or the affliction are immediately ended. When used on drugs, this also removes the ability damage associated.',
				'Starting at 2nd level, while a knight radiant has at least 1 point of stormlight in their reserve, they move with increased ability, granting them a bonus on attack rolls equal to half their level.',
				'Starting at 4th level, a knight radiant who is holding their breath can expend 2 points of stormlight, when making a check to continue holding their breath, to automatically succeed the check.',
				'Starting at 6th level, severed body members grow back as per the spell ii/regenerate/ii, expending 2 points of investiture per round while it happens. If the radiant runs out of stormlight, the process is paused, leaving the member partially restored. Once the radiant acquires additional stormlight, the process will resume with the remaining time left.',
				'Starting at 8th level, while a knight radiant has at least 1 point of stormlight in their reserve, they gain a +4 enhancement bonus to all of their physical stats.'
			],
			'Surgebinding (Su)' => [
				'Each order has an associated primary and secondary surge. Starting at 2nd level, a radiant gains access to the surgebinding abilities granted by their primary surge. At 4th level, they gain access to the abilities granted by their secondary surge. Surgebinders only receive abilities associated with their order. Surgebinding abilities require infusing either an area or object with a given amount of investiture in the form of stormlight that decays at a certain rate. The radiant must decide how much stormlight they are using when they infuse it into the target and the cost of the ability is paid from that amount. They may add additional stormlight on subsequent rounds by touching the object. If the target is a willing creature it is inanimate and not held or worn by another creature, this can be be done as a free action. Otherwise, adding additional stormlight to an active ability is a standard action. The resulting effect lasts until all of the investiture is expended or until the radiant dismisses the effect reclaiming all remaining stormlight as a move action. A radiant can only dismiss an ability within 10 feet.',
				'When a surgebinding ability is used, and each time that an amount of time has elapsed equal to the listed interval following its use, an amount of investiture is expended equal to the listed investiture cost for the ability. Using one of these abilities is a standard action that provokes attacks of opportunity and is subject to spell resistance unless it states otherwise.'
			],
			'Stormlight Efficiency (Su)' => [
				'Starting at 3rd level, a knight radiant reduces the cost of using surgebinding abilities by 1 plus 1 for each level they possess over 3rd, to a minimum cost of 1. '
			],
			'Squires (Su)' => [
				'Starting at 6th level, a knight radiant is able to recruit squires. The radiant can lend their powers to up to 5 subordinates who become the radiant\'s squires and gain the benefit of the Stormlight and Surgebinding class features as a knight radiant of their level (maximum of the radiant\'s level minus 2) with the same order as the radiant so long as they are within 1,000 feet. Every second level beyond 6th (8th, 10th, 12th, etc.), the radiant\'s maximum number of squires increases by 2.'
			],
			'Shardblade (Su)' => [
				'Starting at 10th level once the radiant has made their 3rd oath, a radiant\'s bonded spren can take the form of a weapon known as a shardblade as an immediate action. This weapon can take any form as per the ii/greater transformative/ii property, but defaults to a large sword whose length surpasses the height of the knight radiant. The default form deals 3d6 slashing damage and has a x3 critical modifier. This form also has the reach property but closer targets can also be attacked, though at a -2 penalty. The weapon possesses spell immunity and is immune to damage. Regardless of the weapon\'s size and shape it can be wielded with relative ease possessing relatively only little weight.',
				'Any sharp edge or point possessed by a shardblade is capable of cleanly piercing or cutting any normal material with no force. Any nonliving object without a soul and without spell resistance or spell immunity is incapable of impeding the path of a sharp shardblade and takes 20 times the regular damage of the weapon bypassing hardness and DR. This only applies to attacks made with piercing or slashing weapons. If a nonliving object without a soul and possessing spell resistance is struck it takes the normal damage replacing its hardness with its spell resistance minus 10. If the object instead has spell immunity, the shardblade cannot harm it. If a living object or creature, or a creature or object with a soul, is struck by a sharp shardblade, the weapon passes through them without dealing physical damage. Instead it damages their soulweb, cutting off the portion beyond the cut line, causing that region of their body to die and go limp. This deals damage to the creature equal to 5 times the normal damage of the weapon that cannot be healed until the damage to their soulweb is undone. This damage can be healed as normal but does not allow use of the limb. Investiture based healing can be applied though to restore the lost portion, requiring sufficient healing to restore the damage dealt but requiring twice as much stormlight as normal. If the damage has not already been healed, this also heals the target as normal. Spell resistance and immunity possessed by a living creature does not impede a shardblade. Because they are not impeded by most physical objects, bladed or pointed shardblades ignore most armor, shield, and natural armor bonuses to AC.',
				'Shardblades receive a +1 enhancement bonus for every two levels the knight radiant possesses beyond 10th, to a maximum of +5.'
			],
			'Shardplate (Su)' => [
				'Upon swearing the 4th oath, a swarm of lesser spren, matching the radiant\'s order, gather around and take physical form as a suit of god-metal armor called shardplate. Shardplate completely covers the wearer except for a series of small holes and slits around the face to allow air in. The face mask of the armor is transparent from the inside allowing the wearer to see without hindrance. The holes in the face mask can be closed or opened as an immediate action by the knight radiant. While the holes are closed the radiant can no longer breathe but the suit is air-tight, preventing any and all damage or effects from reaching them directly.',
				'Any damage or spell targeting the radiant is instead taken by their armor which has a hardness of 20 and 200 hit points, plus 20 per level over 15th. For the purpose of interacting with shardblades, treat the armor as having a spell resistance of 30. Against non damage dealing spells, shardplate is treated as immune to magic. Spells that deal damage do so as normal, applying the hardness of the plate, but the plate is immune to all secondary effects. While the air slits on the helmet are open, a critical hit with a piercing weapon or with energy damage, which rolled at least 15 higher than the wearer\'s AC, or a natural 20 on the confirmation roll, bypasses the plate, through the holes, and deals damage to the wearer, but the damage is reduced by x1. (A weapon with a critical multiplier of x2 will deal normal damage and a weapon with a multiplier of x3 will deal only double damage.)',
				'While wearing shardplate, the radiant gains a +6 enhancement bonus to strength and dexterity, counts as being 2 categories larger for the purpose of spells and abilities, and can wield weapons one size category above them without penalty. This armor doesn\'t grant a bonus to AC and has no maximum dexterity, armor check penalty, or arcane spell failure chance. Shardplate weighs 2,000 lbs though does not count against the weight the radiant is carrying. This armor does prevent the wearing of other armor, but the wearer does not receive the bonus to AC from any other armor, or from natural armor, while wearing this plate.',
				'The radiant can transform their armor into a thin veil around them that has no effects and can only be seen with a DC 20 perception check. Doing so is a standard action.'
			]
		]// features
	);
	require $startDir.'pageEnd.php';
?>