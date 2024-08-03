<?php 
	$startDir='';
	for($i=0; $i<5; $i++) {
		if(file_exists($startDir.'pageStart.php')) {
			require $startDir.'pageStart.php';
			break;
		}
		else {
			$startDir='../'.$startDir;
		}
	}
	spellBlockAuto(
		'Planar Ascension',// Name
		'Transmutation (Transmogrification)',// School
		[],// Descriptors
		[
			'arcanist' => 10,
			'cleric' => 10,
			'oracle' => 10,
			'skald' => 10,
			'sorcerer' => 10,
			'summoner' => 10,
			'unchained summoner' => 10,
			'warpriest' => 10,
			'witch' => 10,
			'wizard' => 10
		],// Levels
		[
			'V' => 1,
			'S' => 1,
			'M' => 1,
			'MNote' => 'diamonds worth at least 200,000 gp'
		],// Components
		'24 hours',// Casting Time
		'personal',// Range
		'self',// Target
		false,// Effect
		false,// Area
		'instantaneous',// Duration
		'none',// Save
		'no',// SR
		[
			'You infuse yourself with the essence of an outer plane and ascend to become a powerful outsider. Your type changes to outsider and you gain the aeon, agathion, angel, archon, azata, daemon, demon, devil, protean, or psychopomp subtype. You cannot gain a subtype whose alignment differs from your own and you gain the alignment subtypes matching your alignment. (Though not its own subtype, you may also become an axiomite, in which case you acquire the lawful subtype and do not acquire an additional subtype. You must be LN to select this option.) You do not gain any racial hit dice but if you already possess racial hit dice they change to d10s. Your form also changes to match your subtype. The exact nature of this change can vary but it does not affect your abilities. You gain a 60-foot fly speed with good maneuverability.',
			'You do not lose any abilities from your original form but from your new type you gain darkvision 60\' as well as treating Bluff, Craft, Knowledge (planes), Perception, Sense Motive, and Stealth as class skills. If you already possessed racial hit dice, you keep the class skills from that type, but your base attack bonus from your racial hit dice increases to be equal to your number of hit dice and you treat Reflex and Will as being good saves instead of those possessed by your previous type.',
			'You also gain the following benefits depending on your subtype:',
			'ii/Aeon/ii (N)',
			'/mm/You gain immunity to cold, poison, and critical hits, resistance 10 to electricity and fire, and the envisaging, extension of all, and void form abilities. ',
			'/mm/ii/Envisaging (Su)/ii: Aeons communicate wordlessly, almost incomprehensibly. Aeons mentally scan beings for their thoughts and intentions, and then retaliate with flashes of psychic projections that emit a single concept in response to whatever the other being was thinking. The flash is usually a combination of a visual and aural stimulation, which displays how the aeon perceives future events might work out. For instance, an aeon seeking to raze a city communicates this concept to non-aeons by sending them a vivid image of the city crumbling to ash. Envisaging functions as a nonverbal form of telepathy. You cannot read the thoughts of any creature immune to mind-affecting effects.',
			'/mm/ii/Extension of All (Ex)/ii: Through your connection to the multiverse, you gain access to strange and abstruse knowledge that filters through all existence. Much of the knowledge is timeless, comprising events long past, present, and potentially even those yet to come. You gain a racial bonus equal to 1/2 your total Hit Dice on all Knowledge checks. This same connection also binds you to other aeons. As a result, you can communicate back and forth with other aeons freely over great distances as if using telepathy. This ability also works across planes, albeit less effectively, allowing the communication of vague impressions or feelings, not specific details or sights. Due to the vast scope of the aeon race\'s multiplanar concerns, though, even the most dire reports of a single aeon rarely inspire dramatic or immediate action.',
			'/mm/ii/Void Form (Su)/ii: Though you aren\'t incorporeal, your form is only a semi-tangible manifestation of something greater. Your void form grants you a deflection bonus equal to 1/4 your Hit Dice (rounded down).',
			'ii/Agathion/ii (NG)',
			'/mm/You gain low-light vision, a +4 racial bonus on saving throws against poison, immunity to electricity and petrification, resistance 10 to cold and sonic, and truespeech. You also gain ii/speak with animals/ii as a constant spell-like ability, except using it is a free action that does not require sound.',
			'ii/Angel/ii (any Good)',
			'/mm/You gain darkvision to a range of 60 feet, low-light vision, a +4 racial bonus on saves against poison, immunity to acid, cold, and petrification, resistance 10 to electricity and fire, and truespeech. You also gain a supernatural protective aura with the following properties:',
			'/mm/Against attacks from or effects created by evil creatures, this ability provides a +4 deflection bonus to AC and a +4 resistance bonus on saving throws to anyone within 20 feet of the angel. Otherwise, it functions as a ii/magic circle against evil/ii effect and a ii/lesser globe of invulnerability/ii, both with a radius of 20 feet (caster level equals the angel\'s HD).',
			'ii/Archon/ii (LG)',
			'/mm/You gain darkvision to a range of 60 feet, low-light vision, immunity to electricity and petrification, a +4 racial bonus on saves against poison, and truespeech. You also gain a supernatural aura of menace with the following properties:',
			'/mm/A righteous aura surrounds archons that fight or get angry. Any hostile creature within a 20-foot radius of an archon must succeed at a Will save to resist its effects. The DC of this save equals 10 + half of the archon\'s number of hit dice + their Charisma modifier + a +2 racial bonus. Those who fail take a -2 penalty on attacks, AC, and saves for 24 hours or until they successfully hit the archon that generated the aura. A creature that has resisted or broken the effect cannot be affected again by the same archon\'s aura for 24 hours.',
			'ii/Axiomite/ii (LN)',
			'/mm/You gain regeneration 5 (chaotic or magic), DR 10/chaotic, immunity to disease, electricity, and mind-affecting effects, and resistance 10 to cold and fire. You also gain the crystalline dust form and ii/summon inevitable/ii abilities. ',
			'/mm/ ii/Crystalline Dust Form (Su)/ii You can shift between your solid body and one made of golden, crystalline dust as a free action once per round. In dust form, you look like a shifting mass of glowing mathematical symbols and equations. In this form you can fly and gain the incorporeal quality; you can use spells and spell-like abilities but cannot make physical attacks and cannot provide material or focus components. In your solid form, you do not gain the fly speed from this spell. Both shapes are your true form, and you do not revert to a different form if killed. A true seeing spell reveals both forms simultaneously. ',
			'/mm/ ii/Summon Inevitable (Sp)/ii Once per day, four axiomites may join hands to summon a single zelekhut inevitable as a full-round action.',
			'ii/Azata/ii (CG)',
			'/mm/You gain darkvision to a range of 60 feet, low-light vision, immunity to electricity and petrification, resistance 10 to cold and fire, and truespeech.',
			'ii/Daemon/ii (NE)',
			'/mm/You gain immunity to acid, death effects, disease, and poison, resistance 10 to cold, electricity, and fire, and telepathy to a range of 100 feet. You can also summon a specific kind of daemon with a CR of 20 or less chosen when you cast this spell. This is a spell-like ability equivalent to a 9th level spell that is usable once per day and otherwise functions like ii/summon monster/ii.',
			'ii/Demon/ii (CE)',
			'/mm/You gain immunity to electricity and poison, resistance 10 to acid, cold, and fire, and telepathy. Your natural weapons, as well as any weapon you wield, are treated as chaotic and evil for the purpose of overcoming damage reduction. You can also summon a specific kind of demon with a CR of 20 or less chosen when you cast this spell. This is a spell-like ability equivalent to a 9th level spell that is usable once per day and otherwise functions like ii/summon monster/ii.',
			'ii/Devil/ii (LE)',
			'/mm/You gain immunity to fire and poison, resistance 10 to acid and cold, telepathy, and see in darkness. Your natural weapons, as well as any weapon you wield, are treated as lawful and evil for the purpose of overcoming damage reduction. You can also summon a specific kind of devil with a CR of 20 or less chosen when you cast this spell. This is a spell-like ability equivalent to a 9th level spell that is usable once per day and otherwise functions like ii/summon monster/ii.',
			'ii/Protean/ii (CN)',
			'/mm/You gain blindsense to a range of 60 feet, immunity to acid, resistance 10 to electricity and sonic, and ii/freedom of movement/ii as a constant spell-like ability. Your fly is also treated as being supernatural. You gain a slam attack that deals normal damage for your size as well as the grab and constrict special attacks with your slam. Your constrict deals the same amount of damage as your slam attack. You also gain the amorphous anatomy and change shape abilities:',
			'/mm/ ii/Amorphous Anatomy (Ex)/ii: Your vital organs shift and change shape and position constantly. This grants you a 50% chance to ignore additional damage caused by critical hits and sneak attacks, and grants you immunity to polymorph effects (unless you are a willing target). You automatically recover from physical blindness or deafness after 1 round by growing new sensory organs to replace those that were compromised.',
			'/mm/ ii/Change Shape (Su)/ii: Your form is not fixed. Once per day as a standard action, you may change shape into any Small, Medium, or Large animal, elemental, giant, humanoid, magical beast, monstrous humanoid, ooze, plant, or vermin. You can assume your true form as a free action, and when you do so, you gain the effects of a ii/heal/ii spell (CL equal to the your HD).',
			'ii/Psychopomp/ii (N)',
			'/mm/You gain low-light vision, DR 5/adamantine, immunity to death effects, disease, and poison, and resistance 10 to cold and electricity. You also gain the spirit touch and spiritsense abilities. ',
			'/mm/ ii/Spirit Touch (Ex)/ii: Your natural weapons, as well as any weapon you wield, are treated as though they had the ii/ghost touch/ii weapon special ability.',
			'/mm/ ii/Spiritsense (Su)/ii: You notice, locate, and can distinguish between living and undead creatures within 60 feet, just as if you had the blindsight ability. This sense does not allow you to detect objects, but it does allow you to notice living things that are not creatures.'
		]// Description
	);
	require $startDir.'pageEnd.php';
?>