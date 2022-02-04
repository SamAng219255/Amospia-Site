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
	block2('Piccilli Racial Feats');
	contents([
		'Full Flight',
		'Kleptomaniac',
		'Nesting',
		'Pecking',
		'Piccilli Lore',
		'Piccilli Weapon Expertise',
		'Piccilli Weapon Familiarity',
		'Piccilli Weapon Finesse',
		'Sharpened Talons',
		'Strengthened Feet',
		'Strengthening Wings'
	]);
	block2(
		'Full Flight',
		'Feat',
		13,
		[
			'Piccilli'
		],
		[
			[
				'Prerequisites Strengthening Wings'
			],
			quick_array(
				'You gain the effects of Strengthening Wings at all times, rather than just once per day for 10 minutes.'
			)
		]
	);
	block2(
		'Kleptomaniac',
		'Feat',
		5,
		[
			'Piccilli'
		],
		[
			[
				'Prerequisites Magpie heritage'
			],
			quick_array(
				'While entranced, you receive a +2 bonus to thievery checks to palm or steal the source of your entrancement. When making an athletics check to disarm a creature of the source of your entrancement, treat a failure as a success, a success as a critical success, and on a critical success you knock the item out of the target\'s grasp and are able to grab the item if you have a grabbing appendage free. You are also able to attempt athletics check to disarm a creature of the source of your entrancement even if you you are untrained in athletics and you receive a proficiency bonus to doing so equal to your level. These bonus increases to +3 if you are an expert in the skill, a +4 if you are a master, and +5 if you are legendary.
				/tt/1st Ed. Hybrid Description:
				While entranced, you receive a bonus equal to half your level to sleight of hand checks to palm or steal the source of your entrancement. You also receive an equal bonus to checks made to disarm an opponent of the subject of your entrancement.'
			)
		]
	);
	block2(
		'Nesting',
		'Feat',
		1,
		[
			'Piccilli'
		],
		[
			[],
			quick_array(
				'You are skilled at building soft and safe nests from common materials found in the wild. When rolling a survival check to subsist, treat your result as being 1 step better. If you would have critically succeeded, instead you can either provide a subsistence living for yourself and two additional creatures, or you improve your own food and shelter, granting yourself and up to one other creature a comfortable living.
				/tt/1st Ed. Hybrid Description:
				You are skilled at building soft and safe nests from common materials found in the wild. You can use your survival skill to build either an open or enclosed nest as building a makeshift structure. Building a nest takes 1 and requires a DC 10 survival check. Either style of nest can be built on the ground or hanging to the side of a tree or sturdy wall or cliff and provide a comfortable location for sleeping. An enclosed nest additionally provides protection from weather and pestering insects granting its occupants a +5 circumstance bonus on saves against adverse weather effects and DR 5/— against swarm damage caused by swarms composed of Diminutive or smaller creatures outside the nest. If an occupant takes no damage from a swarm as a result of this DR, she is not affected by the swarm’s distraction ability. The swarm can attempt a DC 20 Reflex save as a full-round action to enter the nest and deal full damage in subsequent rounds. This nest can hold 2 creatures plus 1 per 5 by which you beat the DC. You can build multiple nests if needed'
			)
		]
	);
	block2(
		'Pecking',
		'Feat',
		1,
		[
			'Piccilli'
		],
		[
			[],
			quick_array(
				'Your beak is sharp and can be used to peck at creatures that come too close. You can perform the following action:
				/mm/ /tt/Peck /rl/
				/mm/ qq/Attack/qq qq/Piccilli/qq
				/mm/ Trigger A creature within melee reach of you performs an action that requires reaching into your square such as attacking you.
				/mm/ <hr>
				/mm/ You peck at a creature that comes near with your beak which is treated as being a melee unarmed attack that deals 1d4 damage, is in the brawling group, and has the agile, finesse, and unarmed traits. Make a melee Strike with your beak against the triggering creature. If your attack is a critical hit and the trigger was a manipulate action, you disrupt that action. This Strike doesn’t count toward your multiple attack penalty, and your multiple attack penalty doesn’t apply to this Strike. You can only use your beak to perform this strike and you cannot use your beak to perform any other strike.
				/tt/1st Ed. Hybrid Description:
				Your beak is sharp and can be used to peck at creatures that come too close. Creatures performing actions that require reaching into your square, such as making an attack against you, while the creature is in a square you threaten, provoke a special attack of opportunity form you. This attack of opportunity otherwise behaves as normal except you can only make it using your beak. This is treated as a natural attack that deals 1d4 damage and is a primary attack. You can only use this natural attack to perform this type of attack of opportunity.'
			)
		]
	);
	block2(
		'Piccilli Lore',
		'Feat',
		1,
		[
			'Piccilli'
		],
		[
			[],
			quick_array(
				'You\'ve studied the history of your people as well as their traditions and skills. You gain the trained proficiency rank in Acrobatics and Nature. If you would automatically become trained in one of those skills (from your background or class, for example), you instead become trained in a skill of your choice. You also become trained in Piccilli Lore.
				/tt/1st Ed. Hybrid Description:
				You receive a +2 racial bonus to Fly and Knowledge (nature) checks. You also receive a +5 bonus to Knowledge (local) checks made about piccilli and can make such checks untrained.'
			)
		]
	);
	block2(
		'Piccilli Weapon Expertise',
		'Feat',
		13,
		[
			'Piccilli'
		],
		[
			[
				'Prerequisites Piccilli Weapon Familiarity'
			],
			quick_array(
				'Your Piccilli affinity blends with your class training, granting you great skill with Piccilli weapons. Whenever you gain a class feature that grants you expert or greater proficiency in certain weapons, you also gain that proficiency in hand crossbows, daggers, javelins, shortswords, slings, whips, and all Piccilli weapons in which you are trained. If you have the Sharpened Talons feat, you all gain that increased proficiency in unarmed attacks.
				/tt/1st Ed. Hybrid Description:
				Your Piccilli affinity blends with your class training, granting you great skill with Piccilli weapons. When wielding a hand crossbow, dagger, javelin, shortsword, sling, whip, or a Piccilli weapon, you receive a cummulative +2 bonus on attack rolls to your iterative attacks. If you have the Sharpened Talons feat, you all gain the same bonus when using your natural weapons.'
			)
		]
	);
	block2(
		'Piccilli Weapon Familiarity',
		'Feat',
		1,
		[
			'Piccilli'
		],
		[
			[],
			quick_array(
				'Your people prefer lighter weapons that can be stowed or held in your beak while flying. You are trained with hand crossbows, daggers, javelins, shortswords, slings, and whips.
				In addition, you gain access to all uncommon Piccilli weapons. For the purpose of determining your proficiency, martial Piccilli weapons are simple weapons and advanced Piccilli weapons are martial weapons.
				/tt/1st Ed. Hybrid Description:
				Your people prefer lighter weapons that can be stowed or held in your beak while flying. You are proficient with hand crossbows, daggers, javelins, shortswords, slings, and whips.
				In addition, you gain access to all Piccilli weapons. For the purpose of determining your proficiency, martial Piccilli weapons are simple weapons and exotic Piccilli weapons are martial weapons.'
			)
		]
	);
	block2(
		'Piccilli Weapon Specialization',
		'Feat',
		5,
		[
			'Piccilli'
		],
		[
			[
				'Prerequisites Piccilli Weapon Familiarity'
			],
			quick_array(
				'You are attuned to the weapons of your Piccilli ancestors and are particularly deadly when using them. Whenever you critically hit using a Piccilli weapon or one of the weapons listed in Piccilli Weapon Familiarity, you apply the weapon\'s critical specialization effect.
				/tt/1st Ed. Hybrid Description:
				You are attuned to the weapons of your Piccilli ancestors and are particularly deadly when using them. Whenever you critically hit using a Piccilli weapon or one of the weapons listed in Piccilli Weapon Familiarity, you can apply a converted version of the weapon\'s 2nd Edition critical specialization effect.'
			)
		]
	);
	block2(
		'Polarized Vision',
		'Feat',
		5,
		[
			'Piccilli'
		],
		[
			[],
			quick_array(
				'Like many birds, your vision is polarized such that reflections are often hidden from view allowing you to see through the surface of water or through fog without issue. You ignore the concealed condition from reflective and misty obstructions such as a reflective pond or fog and can otherwise see through such obstructions without issue. This does not allow seeing through an opaque mirror or seeing though clouds of smoke, dust, or gas. You can choose to look at a reflection but while doing so you lose this effect. You also gain a +2 bonus to sight based perception checks. If you are a master in perception this bonus increases to +4.
				/tt/1st Ed. Hybrid Description:
				Like many birds, your vision is polarized such that reflections are often hidden from view allowing you to see through the surface of water or through fog without issue. You ignore concealment from reflective and misty obstructions such as a reflective pond or fog and can otherwise see through such obstructions without issue. This does not allow seeing through an opaque mirror or seeing though clouds of smoke, dust, or opaque gas. You can choose to look at a reflection but while doing so you lose this effect. You also gain a bonus to sight based perception checks equal to half you level.'
			)
		]
	);
	block2(
		'Sharpened Talons',
		'Feat',
		1,
		[
			'Piccilli'
		],
		[
			[],
			quick_array(
				'Your talons are sharper than normal. You gain a talon melee unarmed attack that deals 1d6 slashing damage made with the talons on your feet. Your talon attack is in the brawling group and has the agile, finesse, and unarmed traits. If you already had a talon attack that dealt at least 1d6 damage, such as from the Eagle heritage, the damage from your talons is 1d8 instead. When you attack with these talons, you generally flap once to push yourself into the air before rotating your body and reaching up with your feet before raking back downwards and landing back on your feet, using your wings to help maneuver, though a clever piccilli can generally devise other methods for succesfully clawing with their feet.
				/tt/1st Ed. Hybrid Description: 
				You gain a talons natural attack that deals 1d6 slashing damage and is a primary attack. If you already had a talon natural attack that dealt at least 1d6 damage, such as from the Eagle heritage, the damage from your talons is 1d8 instead. When you attack with these talons, you generally flap once to push yourself into the air before rotating your body and reaching up with your feet before raking back downwards and landing back on your feet, using your wings to help maneuver, though a clever piccilli can generally devise other methods for succesfully clawing with their feet.'
			)
		]
	);
	block2(
		'Strengthened Feet',
		'Feat',
		1,
		[
			'Piccilli'
		],
		[
			[],
			quick_array(
				'Your feet are stronger and can be used to hold objects, even while walking or flying. You are able to carry items with your feet as well as you can with your hands. Carrying objects with your feet does not interfere with your flying or walking.
				If you also have the Strengthening Wings feat you can attempt the following action.
				/mm/ /tt/ Carry Away /1l/
				/mm/ Requirements You have at least one free foot or have your target grappled or restrained with your feet. Your target isn\'t more than one size larger than you.
				/mm/ <hr>
				/mm/ You attempt to grab a creature in your talons and carry it away. Make a Grapple attempt against your target. If you successfully grab or restrain your target you can use the Fly action without issue however the creature\'s bulk plus any bulk they are carrying counts against your bulk limit.
				/mm/ bb/Critical Success/bb Your target is restrained until the end of your next turn unless you move using an action other than Flying or your target Escapes. If you have a talons unarmed attack, your target also takes damage as though hit by a melee strike with your talons unarmed attack.
				/mm/ bb/Success/bb Your target is grabbed until the end of your next turn unless you move using an action other than Flying or your target Escapes.
				/mm/ bb/Failure/bb You fail to grab your target. If you already had the target grabbed or restrained using a Grapple, those conditions on that creature or object end.
				/mm/ bb/Critical Failure/bb If you already had the target grabbed or restrained, it breaks free. Your target can either grab you, as if it succeeded at using the Grapple action against you, or force you to fall and land prone. If the target chooses to grab you they can also choose to allow you to still make Fly actions. In which case they hold onto you while you fly and automatically move with you.
				/tt/1st Ed. Hybrid Description: 
				Your feet are stronger and can be used to hold objects, even while walking or flying. You are able to carry items with your feet as well as you can with your hands. Carrying objects with your feet does not interfere with your flying or walking.
				If you also have the Strengthening Wings feat you can grapple creatures with your feet while flying. You must have at least one foot free and be able to lift the creature and its equipment. If you succeed you can continue flying at your full speed while maintaining the grapple. If you have a talons natural attack, whenever you successfully roll to maintin the grapple the targt takes damage damage as though they had been hit with your talons. If the target successfully makes a combat maneuver or escape artist check to break the grapple and chooses to become the grappler, they can choose to allow you to continue flying even though you are otherwise grappled, in which case they remain holding onto you and move with you.'
			)
		]
	);
	block2(
		'Strengthening Wings',
		'Feat',
		9,
		[
			'Piccilli'
		],
		[
			[],
			quick_array(
				'You unfold your wings /2l/ for travel and can keep them unfolded for 10 minutes. You gain a fly Speed equal to your land Speed while your wings are unfurled.
				You cannot fly while holding an object of 1 bulk or more in either hand.
				/tt/1st Ed. Hybrid Description:
				You can unfold your wings as a standard action for travel and can keep them unfolded for 10 minutes. You gain a fly speed equal to your base speed while your wings are unfurled.
				You cannot fly while holding an object weighing more than a pound in either hand.'
			)
		]
	);
	require $startDir.'pageEnd.php';
?>