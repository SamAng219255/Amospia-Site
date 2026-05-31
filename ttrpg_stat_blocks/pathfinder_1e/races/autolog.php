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
		'Autolog',
		'20 (estimated)',
		'Autologi are relatives of aeons which are native to a demiplane made from the corpse of dead aeon which lies high above the city of Axis and near the great spire on which sits the Boneyard. They are born from the mixing of shed fragments of the decaying form of the ancient and powerful pleroma that forms their home, the essence of law and order emanating from Axis below them, and the shed quintessence of the countless souls passing through the Boneyard falling down to them. In their native home, autologi are insubstantial beings of energy. Shortly after they are created, they travel from the fringes of the plane to the center, wherein lies a structure like a great machine whose true purpose is largely unknown but which grants power and knowledge to the various autologi to fulfill their roles. Here they join the rest of their kind and declare the mighty purpose which they were given during their formation. The true source of these purposes, like the nature of the machine, is unknown.
		Most purposes assign them to serving somewhere in the machine, either maintaining or expanding it, but some purposes lead them away from their home. These include the star tenders, that guide stars from formation, to collapse, and eventually to their ultimate dwindling from existence; the light guards, who travel to the plane of positive energy to gather energies to replace those lost from their own plane; and the dark guard, who serve as the light guard does but traveling to the plane of negative energy to acquire that portion. To perform these tasks, these autologi must contruct themselves physical forms with which to walk the planes. The dark guard contruct theirs from crystallized negative energy, taking shapes like horizontal spirals with a large shard at their center. The light guard do likewise, forming theirs from crystallized positive energy, they they arrange their forms like three-dimensional starbursts, with lines of hovering crystals radiating outward at all angles. The star tenders gather energies from the astral plane before they travel to their destination, which they use to contruct bodies like dark clouds filled with pinpricks of light, the brightest of which are conected by lines of energy in abstract three-dimensional constellations.
		There is another group, though, whose purpose takes them far from home. These individuals construct humanoid exoskeletons carved by them from acacia wood, using spheres of slate for eyes. These stone eyes are carved with runes which bind the autolog to their body, their energy form forming a crystalline lattice inside their shell. These autologi are transformed in a ritual which strips them of their memories, knowledge, and power and sends them to their destined home among the inhabited worlds of the Material Plane where they live as mortals. These mortal autologi arrive, aware of their own nature and vaguely aware that they are their to serve a divine purpose, but what that purpose is is ultimately unknown. Some believe that each one has their own purpose, some believe that all mortal autlogi were sent to complete parts of a single purpose. Most autlogi don\'t tend to spend much time wondering this mystery, however, and are generally content believing that they have been placed to be able to serve their purpose whether or not they know it.
		All autlogi have intelligences that are considered alien to most mortals. They seem to think in impassionate logic, though they assure others that they do possess emotion. Their minds are also often torn between the two halves of their aeon-like nature, which they call "outflow" and "inflow" respectively though which usually refer to by stellar symbolism in the form of stars and black holes or "photon" and "graviton". Outflow drives them to compassion for all things, living or nonliving, but especially intelligent creatures, as well as to the creation and sharing of things they think beautiful. Inflow, convsersely, drives their focus inward, seeking to consume and devour, to take in they can find to make it theirs and to use it up. It wise to note though, that outflow is not purely good, nor inflow evil. Unchecked, outflow will consume them to give to others, while inflow, when regulated, is what maintains, supplies, and empowers them.',
		'',
		'',
		'',
		'',
		'',
		'',
		'',
		[
			'int' => 2,
			'wis' => 2,
			'cha' => -2
		],
		'',
		[
			'bb/Native Outsider/bb: Autologi are outsiders with the autolog and native subtypes.',
			'bb/Medium/bb: Autologi are Medium creatures and have no bonuses or penalties due to their size.',
			'bb/Normal Speed/bb: Autologi have a base speed of 30 feet.',
			'bb/Darkvision/bb: Autologi can see perfectly in darkness up to 60 feet away though they can only see in black and white in the dark.',
			'bb/Fragments of All/bb: Autologi always treat all Knowledge skills as class skills.',
			'bb/Dichotomous Origins/bb: Autologi are healed both by positive energy as living creatures and negative energy as though they were undead.',
			'bb/Illusory Mask (Su)/bb: Autologi gain ii/disguise self/ii as a constant spell-like ability. The appearance of this disguise is consistent, even if dispelled or dismissed then later reactivated. However, the autolog may spend a full-round to change the appearance of their disguise while it is active. They may also choose to dismiss this illusion as a swift action. Re-activating a dispelled or dismissed constant spell-like ability is a swift action.',
			'bb/Stellar Mode (Su)/bb: Autologi can switch to either graviton mode or photon mode, or return to their normal mode, as a swift action once per round. Autologi immediately automatically return to their normal mode when they fall unconscious. Some autolog racial abilities and feats can only be used while in a specific mode.',
			'While in graviton mode, autologi can use their darkvision to see in regions of supernatural darkness and gain a bite primary natural attack that deals 1d6 points of bludgeoning, piercing, and slashing damage plus one and half times their Strength modifier. They may also use ii/darkness/ii at will as a spell-like ability, except it is treated as a 0-level spell and each casting automatically end your previous casting. At the beginning of each round while in graviton mode, autologi gain 1 point of gravitic strain and lose 2 points of photonic strain. After gaining and losing strain, they may choose up to 2 enemies within 60 feet to drain their essence. These creatures take a -1 penalty on saving throws and to their AC until the start of the autolog\'s next turn and take 2 points of damage.',
			'While in photon mode, autologi are immune to light-based blindness and dazzle effects, and are treated as one level higher when determining the effects of any light-based spells or effects they cast (including spell-like and supernatural abilities). They may also use ii/light/ii at will as a spell-like ability. At the beginning of each round while in photon mode, autologi gain 1 point of photonic strain and lose 2 points of gravitic strain. After gaining and losing strain, the autolog, and all allies within 10 feet of them, gain 2 temporary hit points. These last until the autolog leaves photon mode.',
			'Autologi lose 1 point of both types of strain at the start of each round they are not in either graviton or photon mode. Each point of strain inflicts increasing penalties to certain checks and saving throws based on the table below. Gravitic strain applies its penalty to Will saving throws, Wisdom ability checks, and Wisdom based skill checks. Photonic strain applies its penalties to Fortituden saving throws and Constitution ability checks. Strain can never go below 0 or reach higher than 3 + the associated ability score modifier (Wisdom for gravitic strain and Constitution for photonic strain), minimum 3. If an autolog reaches the maximum strain, they become overwhelmed until they lose all points that type of strain. An autolog overwhelmed by strain is trapped in the corresponding mode and cannot switch out of it on their own and automatically activate it of able, but automatically leave it and cannot enter it while unconscious. They also do not need sleep or choose to sleep (though they can still be affected by magical sleep) while overwhelmed. An autolog overwhelmed by gravitic strain is also trapped in devourer\'s frenzy, acts and is treated as mindless, and single-mindedly hunts any living creature it can find. An autolog overwhelmed by photonic strain can take no actions, hovers an inch off of the ground, and emits waves of energy deal 1d6 points of divine damage per character level to all other creatures within 20 feet, with a Reflex save for half. Undead take additional damage from this equal to the autolog\'s number of character levels.',
			sTable(
				[
					'Strain',
					'Penalty'
				],// headers
				[
					[
						'1',
						'-1'
					],
					[
						'2',
						'-2'
					],
					[
						'3',
						'-4'
					],
					[
						'4',
						'-8'
					],
					[
						'5+',
						'-16'
					],
				],// rows
				true,//horizontal
				false,// expand
				false,// allowSort
				true //inline
			),
			'bb/Devourer\'s Frenzy (Su)/bb: Once per day as a free action while in graviton mode, an autolog can enter a destructive frenzy which lasts until they leave graviton mode. When they enter this frenzy, and at the beginning of each of their turns thereafter, they gain 1d4 additional points of gravitic strain. This frenzy grants them a +2 bonus on melee attack rolls, increases their Strength bonus on melee and thrown weapon damage rolls by 50%, and increases all of their movement speeds by 50%. They also take a -2 penalty to their AC while in this frenzy and it clouds their mind with impulses of violence. Each round while in a frenzy, there is a 25% chance that they can act normally, a 50% chance that they try to seek out and attack the nearest perceived enemy, and a 25% chance that they try to seek out attack the nearest creature, regardless of whether they are friend or foe. Familiars count as part of themself for this purpose. If the autolog is compelled to attack a creature, they can attempt a Will saving throw to instead receive no actions that round. The DC of this check is equal to 10 + half the autolog\'s total level + their current number of points of gravitic strain.',
			'bb/Channel Divinity (Su)/bb: Once per day while in photon mode, an autolog can channel divine grace to heal or empower their allies. The autolog takes 2d4 points of photonic strain after using this ability. The autolog may choose any of the following effects:',
			'/mm/ii/Healing/ii: The autolog channel positive energy either to heal a single living creature or a group. If healing a group, they restore 2 points of health to all living creatures within 30 feet. If healing a single target, they restore 5 points of health to a touched creature and cure them of one condition that can be cured by the ii/heal/ii spell.',
			'/mm/ii/Blessing/ii: The autolog says a prayer, blessing either a single creature or a group. If blessing a group, all allies within 30 feet receive a +1 sacred bonus on attack rolls, saving throws against fear effects, and to their AC. If blessing a single creature, the target receives a sacred bonus to their attack rolls and AC equal to the autolog\'s wisdom bonus, maximum +5. Both blessings last for 1 round per character level of the autolog.',
			'/mm/ii/Blessed Defender/ii: The autolog is blessed to command the battlefield around them. This power lasts for 1 round per level. Whenever a creature within their reach attacks an ally, they provoke an attack of opportunity from the autolog. The autolog also grants allies within their natural reach a shield bonus equal to their own.',
			'The autolog can also use their channel divinity as the channel energy feature of a cleric whose level is equal to the autolog\'s full character level, channeling positive energy, for the purposes of qualifying for and using feats as well as for activating items. They can also use it to completely destroy any number of undead within 30 feet that are below 0 hit points but will recover unless slain using positive energy.',
			'bb/Envisaged Formulations (Su)/bb: Autologi are incapable of ordinary speech, though they can create a series of melodic tones that conveys a complex system of mathematical and logical formulas directly to the hearer\'s mind which they use to convey meaning. All creatures that can hear their tones receive the formulas, but creatures must succeed at a DC 11 Intelligence check to be able to understand them. On a failed check, they cannot try again for that message, even if repeated or rephrased, for 1 hour. Creatures can choose to take a 10, treating their result as though they had rolled a 10 on the die, before rolling this check so long as they are not currently rushed or distracted.',
			'bb/Flammable/bb: Autologi are vulnerable to fire, taking 50% additional damage, and, if an autolog takes a number of points of fire damage at least equal to their level plus their Constitution modifier, they are set on fire and take 1d6 points of fire damage each round until they are extinguished. Setting them on fire while they are already on fire has no effect.',
			'bb/Languages/bb: Autologi start knowing Common and Draconic. Autologi with a high Intelligence score may know any language (except secret languages).',
			'bb/Outflow, Inflow/bb: In addition to breathing, eating, and sleeping, autlogi have two additional requirements to keep in good health.',
			'Once per day, an autolog can consume a portion of the life force of a willing or helpless creature with a 3 or higher Intelligence, dealing 1d2 points of Constitution damage. If they go a whole day without consuming lifeforce, they become fatigued until they do so. If they are already fatigued from not consuming lifeforce, they become exhausted instead and consuming lifeforce only reduces it to fatigued. If they are already exhausted, they must make a DC 15 Constitution check or else take 1d4 points of Constitution damage. The DC increases by 1 for each consecutive day they must make the check. This damage cannot be healed until they consume lifeforce. Consuming lifeforce does not remove the damage taken, but it does reduce their exhausted condition to fatigued.',
			'At least once per day, an autolog must use the Craft, Profession, or Perform skill to perform an action for another creature and have the gift be noticeably appreciated. They cannot charge the recipient for this action. This action must have a DC of at least 10. When using Craft to satisfy this requirement, an item must be created worth at least 3 silver pieces. This item must be made for the recipient and must be given to them. If the item worth 3 silver is crafted with a DC of 10, the time it takes to craft with a successful check is 720 minutes divided by the result of character\'s Craft check and it costs 1 silver worth of materials to make. When using Profession to satify this requirement, a service that benefits the recipient must be provided to another creature. When using Perform to satisfy this requirement, a performance must be performed for the recipient. It may also be performed for a small group wherein the autolog personally knows each member of the audience. In this case, at least half of the audience must express appreciation. If the autolog goes a full day without sharing on of these skills, they take a -1 penalty on attack rolls, damage rolls, skill checks, and saving throws for each consecutive day, to a maximum penalty of -10, and, anytime they receive a morale bonus, there is a 50% chance that it has no affect on them.'
		],
		false
	);
	racialFeats('autolog', [
		[
			'name' => 'Blazing Dash',
			'desc' => '',
			'prereq' => 'stellar mode (photon) racial trait, base attack bonus +1',
			'benefit' => 'When making a charge while in photon mode, you become wreathed in blazing energy. This energy provides some protection against attacks and slams into the target of your charge. Your first attack made as part of the charge deals an additional 1d6 points of fire damage. If your base attack bonus is at least +7, this damage increases by an additional 1d6. Creatures that attempt a melee attack of opportunity against you while charging, without using a reach weapon, also take 1d6 points of fire damage. Lastly, any other melee attacks attempted against you until the beginning of your next turn made without using a reach weapon deal 1d4 points of fire damage to the attacker as the energy disperses.',
			'special' => false
		],
		[
			'name' => 'Dark Matter Density',
			'desc' => '',
			'prereq' => 'stellar mode (graviton) racial trait, 5 hit dice',
			'benefit' => 'While in graviton mode, you gain damage reduction 1/— for every 5 levels you possess (DR 1/— at level 5, DR 2/— at level 10, DR 3/— at 15, etc).',
			'special' => false
		],
		[
			'name' => 'Healing Light',
			'desc' => '',
			'prereq' => 'stellar mode (photon) racial trait, 13 Wisdom',
			'benefit' => 'While in photon mode, whenever you use positive energy to heal or damage a creature, you may choose to reroll a number of dice of positive energy healing or damage up to your Wisdom modifier. You must use the new values rolled. You may not reroll a given die multiple times. You may choose which and how many dice to reroll after totalling the dice, but not after the healing or damage is resolved on the target.',
			'special' => false
		],
		[
			'name' => 'Healing Touch',
			'desc' => '',
			'prereq' => 'stellar mode (photon) racial trait',
			'benefit' => 'While in photon mode, you can use the Heal skill to treat deadly wounds as a full-round action. You do not take a penalty for not using a healer\'s kit when treating deadly wounds this way, and you can do so on a given creature more than once per day. When treating deadly wounds this way, if your result exceeds the DC by 10 or more, add your character level to the damage healed. These benefits do not apply to creatures that are not healed by positive energy. You can use this feat\'s benefit a number of times per day equal to 3 + your character level.',
			'special' => false
		],
		[
			'name' => 'Inspiring Presence',
			'desc' => '',
			'prereq' => 'stellar mode (photon) racial trait, 5th level',
			'benefit' => 'While in photon mode, allies within 10 feet receive a +1 morale bonus on attack rolls, weapon damage rolls, saving throws, and skill checks.',
			'special' => false
		],
		[
			'name' => 'Light and Shadow',
			'desc' => '',
			'prereq' => 'stellar mode racial trait, 5th level',
			'benefit' => 'While in graviton mode, you can cast ii/deeper darkness/ii as a spell-like ability 3 times per day. While in photon mode, you can cast ii/daylight/ii as a spell-like ability 3 times per day.',
			'special' => false
		],
		[
			'name' => 'Light of Creation',
			'desc' => '',
			'prereq' => 'stellar mode (photon) racial trait, 8th level',
			'benefit' => 'While in photon mode, you may cast ii/major creation/ii as a spell-like ability at will except casting it instantly ends your previous casting from this ability.',
			'special' => false
		],
		[
			'name' => 'Gravity Pull',
			'desc' => '',
			'prereq' => 'stellar mode (graviton) racial trait, base attack bonus +1',
			'benefit' => 'While in graviton mode, you may exert a pulling force on a creature within 60 feet as a standard action. This is treated as a bull rush except the target is pulled directly towards you, you do not need to be within reach of your target, and you cannot move with your target. If the target is within your reach at the end of its forced movement, you may automatically attempt a single melee attack against the target.',
			'special' => false
		],
		[
			'name' => 'Oblivion Maw',
			'desc' => '',
			'prereq' => 'stellar mode (graviton) racial trait, 8th level',
			'benefit' => 'While in graviton mode, you can touch a creature that has -1 or fewer hit points or that died or was destroyed in the last 3 rounds to absorb their essence. A still living creature receives a Fortitude save to negate this effect, or else they also instantly die. The DC is equal to 10 + half of your level + your Charisma modifier. If the effect was not negated, you receive 1d8 temporary hit points, a +2 bonus to your Strength, and +1 bonus to your caster level. The hit points and bonuses last for 10 minutes per hit dice of the target.',
			'special' => false
		],
		[
			'name' => 'Oblivion Touch',
			'desc' => '',
			'prereq' => 'stellar mode (graviton) racial trait',
			'benefit' => 'While in graviton mode, you can cast ii/touch of idiocy/ii three times per day as a spell-like ability.',
			'special' => false
		],
		[
			'name' => 'Oblivion Touch, Greater',
			'desc' => '',
			'prereq' => 'stellar mode (graviton) racial trait, Oblivion Touch, 10th level',
			'benefit' => 'While in graviton mode, you can cast ii/feeblemind/ii once per day as a spell-like ability.',
			'special' => false
		],
		[
			'name' => 'Pleroma Spheres',
			'desc' => '',
			'prereq' => '17th level',
			'benefit' => 'You can use the following spell-like abilities three times per day each using your total character level in place of your caster level. The effective spell level of these abilities is 9th. ii/Graviton sphere/ii uses Charisma to determine its DC. ii/Photon sphere/ii uses Wisdom to determine its DC. You must be in photon mode to use ii/photon sphere/ii and graviton mode to use ii/graviton sphere/ii.
				/mm/ii/Graviton Sphere/ii: You manifest a 6-inch diameter sphere of impenetrable darkness above your right hand which travels quickly to a location you specify within 300 feet, passing through any interposing barriers without harming them. Once reaching its destination, the sphere rapidly expands and causes a swirling implosion that rends matter and draws it in before shrinking away and winking out of existence. All creatures and objects within 40 feet take 10 points of damage per caster level with a Fortitude save for half. This damage ignores the hardness of objects and deals full damage to affected items. Any creature or object is slain or destroyed by this, it is entirely consumed by the sphere. Slain creatures can only be revived using ii/true resurrection/ii. ii/Graviton sphere/ii also destroys anything that is destroyed by ii/disintegrate/ii.
				/mm/ii/Photon Sphere/ii: You manifest a 6-inch diameter sphere of brilliant energy above your left hand which travels quickly to a location you specify within 300 feet, passing through any interposing barriers without harming them. Upon reaching its destination, the sphere bursts with energy, providing one of the following effects in a 40-foot radius burst:
				/m2/ii/Positive Burst/ii: All living creatures within the area receive 5 points of positive energy healing per caster level. Undead within the area take an equal number of points of positive energy damage but are allowed a Will save to reduce the damage by half.
				/m2/ii/Luminous Burst/ii: All creatures within the area take 5 points of damage per caster level and are permanently blinded. Creatures in the area receive a Reflex save to reduce the damage by half and negate the blindness.
				/m2/ii/Creative Burst/ii: You may create any combination of natural earth (such as rock and soil) and terrains (such as swamps, tundras, deserts, or forests) to the affected region. Earth added must be typical for the type of terrain (either the preexisting terrain or the one created). This is an instantaneous effect and created matter is in no way magical. If plants were created that cannot survive in the region, they will eventually die as normal. Created water or snow may also melt or evaporate away or seep away into the ground. You may also create a number of items up to your caster level as per ii/major creation/ii. These items may be created being already worn or held by willing creatures within the area. Creatures must have a free hand to accept created items. If creating multiple copies of the same complex item, you may choose to roll your Craft skill once for any number of copies of the item. These items last for the duration given in ii/major creation/ii.',
			'special' => false
		]
	]);
	require $startDir.'pageEnd.php';
?>