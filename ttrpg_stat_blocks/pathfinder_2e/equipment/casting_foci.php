<?php require '../../pageStart.php'; ?>
<title>Casting Channels</title>
<?php
	block2(
		"Casting Channels",
		false,
		false,
		[],
		[
			quick_array([
				'In recent years, spellcasters have learned to create items that can be used to channel their power. These items, referred to as ii/casting channels/ii, can be engraved with runes in order to empower spells cast. Additionally, most ii/casting channels/ii acquire a number of charges after being used to cast a spell equal to the level of the spell cast including any levels gained from being heightened. Once per turn, these charges can be expended as a 1 action (/1l/) activity with the manipulate trait. If not expended these charges fades at the start of your next turn. The caster can choose to expend only some of the charges in the channel but that are not expended are lost.',
				'When ii/casting channels/ii are used to cast a spell, required somatic components are made by manipulating the focus and the caster does not need to provide a material component meaning that they do not require a free hand or access to a material component pouch though the spell retains the manipulate trait as the casting channel must be manipulated in place of the component.',
				'ii/Casting channels/ii come in varying levels of craftsmanship as fine tuning the devices requires great skill. These levels mimic the grades of purity of special materials, with low-grade channels being able to hold runes up to 8th level and being able to be used with spells up to 3rd level, standard-grade channels being able to hold runes up to 15th level and being able to be used with spells up to 8th level, and high-grade channels being able to hold runes and be used with spells of any level.'
			])
		],
		false,
		[]
	);
	//item2eBlockAuto($name, $level, $rarity, $traits, $price, $hands, $usage, $bulk, $activateTime, $activateType, $description, $variations)
	item2eBlockAuto(
		'Focusing Wand',
		'1+',
		'Common',
		['Magical','Casting Channel'],
		false,
		1,
		'held in 1 hand',
		'L',
		false,
		false,
		[
			'The most basic of the casting channels, a ii/focusing wand/ii possesses no additional ability but can have runes added to it.',
			'A ii/focusing wand/ii can be further enchanted to function as a standard wand as well. This increases the price of the whole item by the price of the wand being added to it and adds all of the wand\'s traits to those of the ii/focusing wand/ii. It also increases the level of the item to that of the wand\'s if it is is higher.'
		],
		[
			[
				"title" => "Focusing Wand (Low-Grade)",
				"spaced" => false,
				"level" => 1,
				"texts" => [
					'Price 15 gp'
				]
			],
			[
				"title" => "Focusing Wand (Standard-Grade)",
				"spaced" => false,
				"level" => 6,
				"texts" => [
					'Price 225 gp'
				]
			],
			[
				"title" => "Focusing Wand (High-Grade)",
				"spaced" => false,
				"level" => 13,
				"texts" => [
					'Price 2,700 gp'
				]
			]
		]
	);
	item2eBlockAuto(
		'Arcane Potency Staff',
		'5+',
		'Common',
		['Casting Channel','Arcane'],
		false,
		1,
		'held in 1 hand',
		'L',
		false,
		false,
		[
			'In addition to being able to support runes to augment spell casting, when the wielder expends one or more charges from the staff, they may, as part of expending the charges, make a melee or ranged strike that has the magical trait. If the spell cast had an energy trait, this strike deals damage of the corresponding type, otherwise it will deal force damage. This strike deals 1d4 points of damage per charge expended.',
			'An ii/arcane potency staff/ii can be further enchanted to function as a standard staff as well. This increases the price of the whole item by the price of the staff being added to it and adds all of the staff\'s traits to those of the ii/arcane potency staff/ii. It also increases the level of the item to that of the staff\'s if it is is higher.',
			'A wizard with the staff nexus thesis can modify their makeshift staff such that is also functions as an ii/arcane potency staff/ii before or after crafting it into another type of staff. If they do, they can draw more from their staff granting a +1 item bonus on spell attack rolls made with the staff as a channel that increases by +1 for every 5 levels possessed by the wizard. Furthermore, they can forgo the bonus to increase a number of dice of damage from the staff\'s ability from d4s to d6s on a strike made with the charges from that spell.'
		],
		[
			[
				"title" => "Arcane Potency Staff (Low-Grade)",
				"spaced" => false,
				"level" => 5,
				"texts" => [
					'Price 150 gp'
				]
			],
			[
				"title" => "Arcane Potency Staff (Standard-Grade)",
				"spaced" => false,
				"level" => 11,
				"texts" => [
					'Price 1,300 gp'
				]
			],
			[
				"title" => "Arcane Potency Staff (High-Grade)",
				"spaced" => false,
				"level" => 17,
				"texts" => [
					'Price 14,000 gp'
				]
			]
		]
	);
	item2eBlockAuto(
		'Divine Prayer Beads',
		'5+',
		'Common',
		['Casting Channel','Divine'],
		false,
		1,
		'held in 1 hand',
		'L',
		false,
		false,
		[
			'In addition to being able to support runes to augment spell casting, when the wielder expends one or more charges from the ii/divine conduit/ii, they may, as part of expending the charges, heal one creature they can touch by 1d6 Hit Points per charge expended.',
			'This item can be used as a divine focus by clerics and other classes capable of using them. If the caster draws their power from a specific deity, the beads will attune to that deity and from then can only be used by followers of that deity.',
			'ii/Divine prayer beads/ii can be further enchanted to function as ii/holy prayer beads/ii or their greater counterpart except that they may already be attuned to a deity from previous use, the beads continue to function for an evil spellcaster, and that the healing provided is not a positive healing effect. This increases the price of the whole item by the price of the prayer beads being added to it and adds all of the beads\' traits to those of the ii/divine prayer beads/ii except for the positive trait. It also increases the level of the item to that of the added prayer beads\' if it is is higher.'
		],
		[
			[
				"title" => "Divine Symbol (Low-Grade)",
				"spaced" => false,
				"level" => 5,
				"texts" => [
					'Price 150 gp'
				]
			],
			[
				"title" => "Divine Symbol (Standard-Grade)",
				"spaced" => false,
				"level" => 11,
				"texts" => [
					'Price 1,300 gp'
				]
			],
			[
				"title" => "Divine Symbol (High-Grade)",
				"spaced" => false,
				"level" => 17,
				"texts" => [
					'Price 14,000 gp'
				]
			]
		]
	);
	item2eBlockAuto(
		'Occult Effigy',
		'5+',
		'Common',
		['Casting Channel','Occult'],
		false,
		1,
		'held in 1 hand',
		'L',
		false,
		false,
		[
			'In addition to being able to support runes to augment spell casting, when the wielder expends one or more charges from the ii/occult effigy/ii, they may, as part of expending the charges, either grant an ally a bonus on all attack rolls, skill checks, and saving throws or force an opponent to take an equal penalty on those same rolls. This can be used against any creature within sight within 40 feet. This effect lasts for a number of rounds equal to the number of charges expended. Multiple penalties or bonuses from this effect do not stack with each other but do stack with all other bonuses and penalties.',
			'An ii/occult effigy/ii can be further enchanted, increasing the price of the whole item by 160 gp, allowing it to be attuned to a specific individual and enabling it to be activated in the following ways.',
			'bb/Activate/bb 10 minutes (envision, interact); bb/Frequency/bb once per day; bb/Effect/bb You attune the effigy to a specific individual. The requires an item to tie it to that individual that is consumed during the process. This item can be an object or piece of an object that belonged to the individual and was in their possession for at least 24 hours or it can be an item that was part of their body for at least 24 hours such as a lock of hair, a toe or finger nail, or some of their blood. The effigy remains attuned to the individual until they die or it is attuned to a different individual.',
			'bb/Activate/bb 1 minute (envision, interact); bb/Frequency/bb once per hour; bb/Effect/bb Whenever you are holding the effigy in the next hour you know the attuned individual\'s direction from you, distance from you, and any conditions affecting it, similar to the ii/status/ii spell. If the creature was not aware of being attuned to the effigy or did not permit the caster to attune the effigy to them, they may make a Will save against your Occult spell DC to negate the effect.',
			'bb/Activate/bb /fl/ (envision, interact); bb/Trigger/bb You attempt to cast a spell with a range of touch on the effigy that could target the attuned individual; bb/Effect/bb If the attuned individual is within 30 feet, the spell\'s target changes to the attuned individual. Otherwise the spell fails but is still consumed.',
			'bb/Activate/bb /rl/ (envision, interact); bb/Trigger/bb The effigy receives damage and the attuned individual is within 60 feet; bb/Effect/bb The attuned individual must make a Basic Will save. The attuned individual receives the damage instead.'
		],
		[
			[
				"title" => "Occult Effigy (Low-Grade)",
				"spaced" => false,
				"level" => 5,
				"texts" => [
					'Price 150 gp',
					'<hr>',
					'Grants a +1 bonus or -1 penalty.'
				]
			],
			[
				"title" => "Occult Effigy (Standard-Grade)",
				"spaced" => false,
				"level" => 11,
				"texts" => [
					'Price 1,300 gp',
					'<hr>',
					'Grants a +2 bonus or -2 penalty.'
				]
			],
			[
				"title" => "Occult Effigy (High-Grade)",
				"spaced" => false,
				"level" => 17,
				"texts" => [
					'Price 14,000 gp',
					'<hr>',
					'Grants a +3 bonus or -3 penalty.'
				]
			]
		]
	);
	item2eBlockAuto(
		'Primal Lodestone (WIP)',
		'5+',
		'Common',
		['Casting Channel','Primal'],
		false,
		1,
		'held in 1 hand',
		'L',
		false,
		false,
		[
			'In addition to being able to support runes to augment spell casting, when the wielder expends one or more charges from the ii/primal lodestone/ii, they may, as part of expending the charges, summon and command a spirit of nature. This spirit of nature takes the form of a specific creature with the animal, beast, elemental, fey, fungus, or plant trait and with a maximum level determined by the quality of the channel and has the minion trait.',
			'The wielder may issue commands to the spirit as part of expending at least one charge from the lodestone. If spirit is not currently manifested when the wielder expends the charges from the lodestone, the spirit can appear in the square closest to the wielder. Alternatively, if the spirit was present within 30 feet of the wielder last round they may reappear at their last position. In either case the spirit will remain manifested for a number of rounds equal to the number of charges expended. If the spirit is already manifested when the charges are expended, the wielder can restore 1d4 points of health per charge to the spirit.',
			'When not currently manifested, the spirit remains in its current state with any conditions. When a primal caster performs their initial morning spell preperations, the spirit is restored to full health and loses any conditions and other effects.',
			'???-Upgrade'
		],
		[
			[
				"title" => "Primal Lodestone (Low-Grade)",
				"spaced" => false,
				"level" => 5,
				"texts" => [
					'Price 150 gp',
					'<hr>',
					'The spirit can take the form of a creature up to level 2.'
				]
			],
			[
				"title" => "Primal Lodestone (Standard-Grade)",
				"spaced" => false,
				"level" => 11,
				"texts" => [
					'Price 1,300 gp',
					'<hr>',
					'The spirit can take the form of a creature up to level 7.'
				]
			],
			[
				"title" => "Primal Lodestone (High-Grade)",
				"spaced" => false,
				"level" => 17,
				"texts" => [
					'Price 14,000 gp',
					'<hr>',
					'The spirit can take the form of a creature up to level 13.'
				]
			]
		]
	);
	require '../../pageEnd.php';
?>