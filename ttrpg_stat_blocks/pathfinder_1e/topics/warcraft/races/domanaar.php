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
	raceBlockAuto(
		'Domanaar',
		22,
		'',
		'',
		'',
		'',
		'',
		'',
		'',
		'',
		[
			'dex' => 2,
			'int' => 2,
			'cha' => -2
		],
		'',
		[
			'bb/Aberration/bb: Domanaar are aberrations with the void and extraplanar subtypes.',
			'bb/Large/bb: Domanaar are Large creatures and gain a -1 size penalty to their AC, a -1 size penalty on attack rolls, a +1 size bonus on combat maneuver checks and to their Combat Maneuver Defense, and a -4 size penalty on Stealth checks. bb/Domanaar also receive a +2 size bonus to Strength and -2 size penalty to Dexterity./bb These are permanent and stack with the domanaar\'s other racial ability score adjustments but are lost while polymorphed. Domanaar occupy a 10-foot area and have a reach of 10 feet.',
			'bb/Normal Speed/bb: Domanaar have a base speed of 30 feet.',
			'bb/Darkvision/bb: Domanaar have darkvision with a range of 120 feet.',
			'bb/Fearless/bb: Domanaar gain a +2 racial bonus against fear effects.',
			'bb/Beguiling Liar/bb: Domanaar gain a +4 bonus on Bluff checks to convince an opponent that what they are saying is true when they are telling a lie.',
			'bb/Intimidating Presence/bb: Domanaar gain a +2 bonus on Intimidation checks and may automatically attempt an Intimidation check, immediately and without spending an action, against a creature the first time they become within 60 feet of domanaar and are in line of sight.',
			'bb/Predatory Instincts/bb: Once per day, as a swift action, a domanaar may designate any creature they know of as their prey. They receive a +2 racial bonus on Survival checks to track their prey, they may always do so untrained, and they can track their prey by smell as though they had the scent ability. The domanaar also receives a +1 circumstance bonus on attack rolls against their prey and deals an additional 1d6 points of damage on weapon damage rolls against them. Their prey treats the domanaar\'s spell and spell-like ability DCs as being 1 point higher.',
			'After being designated, a creature remains the domanaar\'s prey until the domanaar designates a new creature as their prey.',
			'bb/Chilling Magic/bb: Domanaar gain a +1 bonus to the DCs of any spells or spell-like abilities of the Necromancy school which they cast. Additionally, once per day, domanaar with an Intelligence score of at least 11 may cast ii/chill touch/ii as a spell-like ability. The domanaar uses their Intelligence modifier to determine the DC.',
			'bb/Negative Energy Affinity/bb: Domanaar are healed by negative energy and harmed by positive energy.',
			'bb/Void Body/bb: Domanaar can survive longer between eating than mortals, but they have a ravenous hunger and grow weaker if they do not eat. If a domanaar goes a day without sufficient sustenance, they become fatigued until they are able to satiate their hunger. A second consecutive day without sufficient sustenance causes them to become exhausted instead. Domanaar do not necessarily sleep, but they must rest in a similar way for at least 8 hours per day. They can sleep for 8 uninterrupted hours, or they may gain the same benefit by taking smaller rests throughout the day. For each additional period of time that their rest is divided into, they require an additional hour of rest, to a maximum 16 hours of rest when divided into 9 periods of rest. Domanaar are susceptible to sleep effects. Domanaar do not need to breathe, but are susceptible to airborne toxins and other effects.',
			'bb/Languages/bb: Domanaar begin play speaking Aklo. Domanaar with high Intelligence scores can choose from Common, Eredar, K\'areshi, or Thalassian.'
		],
		false,
		[
			[
				'Subraces',
				[
					'bb/Overlord/bb',
					'/mm/Focused only on power, overlords are a sight to behold and terror in battle, wielding their raw might to slaughter their foes before the feast. Overlords use the following ability score modifiers replacing the normal modifiers: +2 Strength, +2 Constitution, -2 Charisma. They may also use their predatory instincts an additional time per day for every +5 base attack bonus they possess, to a maximum of their Wisdom modifier, and increase the attack bonus to +2 and the additional damage to 2d6. They lose the chilling magic racial trait.'
				]
			],
			[
				'Alternate Racial Traits',
				[
					'bb/Wasteland Cunning/bb',
					'/mm/The domanaar\'s ability modifiers become -2 Str, +2 Dex, +2 Wis. They use their Wisdom instead of their Intelligence to determine the DC and whether they can use their spell-like ability.',
					'/mm/This replaces ability modifiers.',
				]
			]
		]
	);
	racialFeats('domanaar', [
		[
			'name' => 'Void Shaping',
			'desc' => '',
			'prereq' => 'domanaar, CL 5th, 15 Intelligence',
			'benefit' => 'You gain the ability to focus the void\'s energies to form various items. When crafting any item, you can replace its materials with ritual reagents worth an equal amount to forge it from concentrated void. Items made from concentrated void appear to be made from a combination of dark stone, glowing blue or purple crystal, or dull yellowish or gray metal. Weapons made this way grant a +1 circumstance bonus on attack rolls against creatures with light or good subtypes and armor made like this deals 1 point of negative energy damage to such creatures whenever they make a melee attack against the wearer.
			When using any item creation feat, you may infuse the item with the void to enhance its properties. The item\'s aura changes to Necromancy. A void-infused item has its caster level automatically increased by 1 without increasing the cost or difficulty to craft, to a maximum caster level of 1 higher than your own caster level. This confers any bonuses or improvements resulting from a higher caster level as normal. If the item has an ability which allows a saving throw, you may use your Intelligence to determine the crafted item\'s DC if it is better (most items use the minimum ability score to cast a relevant spell to determine the DC with). Void-infused weapons automatically gain the vicious property without increasing the item\'s cost or crafting time or counting against the item\'s maximum effective enhancement bonus. This property also applies to void-infused ranged weapons.',
			'special' => false
		]
	]);
	require $startDir.'pageEnd.php';
?>