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
	block(
		'Special Materials',
		'intro',
		[
			'Weapons and armor can be crafted using materials that have innate special properties. If you make a suit of armor or a weapon out of more than one special material, you get the benefit of only the most prevalent material. However, you can build a double weapon with each head made of a different special material.',
			'Each of the special materials described below has a definite game effect. Some creatures have damage reduction that makes them resistant to all but a special type of damage, such as that dealt by evil-aligned weapons or bludgeoning weapons. Others are vulnerable to weapons of a particular material. Characters may choose to carry several different types of weapons, depending upon the types of creatures they most commonly encounter.'
		],
		true
	);
	contents(
		[
			'Adamant Bronze',
			'Annort',
			'Ardcel',
			'Astral Silver',
			'Blazing Obsidian',
			'Cobalt',
			'Crimwood',
			'Deep Iron',
			'Dragonblight',
			'Earth Iron',
			'Electral',
			'Heart Bronze',
			'Inkstone',
			'Jervak Wood',
			'Lamin',
			'Lost-Light Stone',
			'Makaar Steel',
			'Mercurial Cold Steel',
			'Mountain Copper',
			'Necrotic Lead',
			[
				'name' => 'Nerzaami',
				'nodes' => [
					'Red Nerzaami',
					'Green Nerzaami',
					'Blue Nerzaami'
				]
			],
			'Nin Glass',
			'Nin Glass, Infused',
			'Pit Metal',
			'Sanguine Steel',
			'Shade Iron',
			'Starfallen Steel',
			'Tarshic Pelt',
			'Vendetta Steel',
			'Wave Metal',
			'Ziff'
		]
	);
	block(
		'Adamant Bronze',
		'material',
		quick_array([
			'Adamant bronze is an alloy of adamantine and copper to form a mustard yellow metal that retains adamantine\'s ability to bypass hardness but is a good deal weaker and cheaper.',
			'Adamant bronze weapons ignore hardness less than 10 and treat DR adamantine as being 10 less, to a minimum of 0. Adamant bronze weapons also overcome DR copper. Armor made from adamant bronze grants its wearer damage reduction of 1/adamantine if it’s light armor, 2/adamantine if it’s medium armor, and 3/adamantine if it’s heavy armor.',
			'Adamant bronze has the same hardness and hit points as steel.',
			sTable(
				[
					'Type of Adamant Bronze Item',
					'Item Price Modifier'
				],
				[
					[
						'Weapon',
						'+1,000 gp'
					],
					[
						'Ammunition',
						'+20 gp per item'
					],
					[
						'Light Armor',
						'+2,000 gp'
					],
					[
						'Medium Armor',
						'+4,000 gp'
					],
					[
						'Heavy Armor',
						'+6,000 gp'
					]
				],
				true,
				false
			)
		]),
		true
	);
	block(
		'Annort',
		'material',
		quick_array([
			'Annort is an alchemically engineered metal that opposes necromantic forces of undeath and can be used to overcome many of the resistances of undead. Annort weapons are treated as good, silver, and magic for the purposes of overcoming the damage reduction of undead creatures. Annort weapons also overcome half the damage reduction of undead that would be overcome if the weapon were piercing, slashing, or bludgeoning, as well as half the damage reduction that does not have a listed method to overcome it (DR /—).',
			'Annort weapons can also be used to better strike incorporeal undead. Non-magic annort weapons are treated as magic for the purpose of harming incorporeal undead and magic annort weapons are treated as having the ii/ghost touch/ii property for the purpose of harming incorporeal undead.',
			'Weapons made of annort are always considered masterwork, and the masterwork costs are included in the listed prices. Items without metal parts cannot be made from annort. An arrow could be made of annort, but a quarterstaff could not. Adding any magical enhancements to a annort weapon increases its price by 2,000 gp. This increase is applied the first time the item is enhanced, not once per ability added.',
			'Annort has 30 hit points per inch of thickness and hardness 10. The same as steel.',
			sTable(
				[
					'Type of Annort Item',
					'Item Price Modifier'
				],
				[
					[
						'Ammunition',
						'+20 gp per item'
					],
					[
						'Weapon',
						'+1,000 gp'
					],
					[
						'Other Items',
						'+500 gp/lb.'
					]
				],
				true,
				false
			)
		]),
		true
	);
	block(
		'Ardcel',
		'material',
		quick_array([
			'Ardcel is a silvery metal that is known for its mirror-like surface, its difficulty in collecting and refining, and its ability to resonate with the holiness within its wielder. Refining ardcel requires taking large quantities of veins of ore from the material plane that has formed from exposure to the essence of a good-aligned plane for geological time spans. This ore is then heated and the slag removed continually to be refined down to approximately 1/1000th of the mass as ardcel.',
			'When wielded by a creature with a good alignment, ardcel weapons receive a +1 sacred bonus to their attack rolls and weapon damage rolls and, against a creature with the evil subtype, overcome DR cold iron. When wielded by an evil creature, they take a -1 penalty to the same rolls. Ardcel weapons also overcome DR silver and good. Ardcel does not rust and is therefore immune to rusting effects such as ii/rusting grasp/ii. Weapons made out of ardcel are always masterwork and the price of the masterwork component is factored into the price.',
			'Ardcel has a hardness of 15 and 30 hit points per inch of thickness. Making a weapon out of ardcel adds 2,000 gp to its price.'
		]),
		true
	);
	block(
		'Astral Silver',
		'material',
		quick_array([
			'Astral silver appears like regular silver except for random but periodic brilliant white specks throughout the material that dot its surface like stars.',
			'Light and one-handed weapons can be crafted from astral silver. Likewise, spear points, arrowheads, and axe heads can be crafted from astral silver, even those that are parts of twohanded weapons. Astral silver is too weak to be used for twohanded weapons made entirely out of metal, and cannot typically be used to craft polearms.',
			'Astral silver weapons have the hardness of their base weapons but also have the fragile quality. Astral silver weapons deal the same damage as steel weapons of the same type, have the same weight, and cost four times as much. Astral silver counts as silver for all purposes.',
			'Astral silver can be used to create any medium or light armor that are made entirely of metal or that have metal components. Astral silver armor protects a creature as well as steel armor does, but it has the fragile quality. Astral silver armor has the same weight as normal steel armor of its type and costs four times as much. After being the target of a spell of the teleportation subschool, a creature wearing astral silver remains partially in the astral plane for a number of rounds equal to the level of the spell. This grants the wearer a 20% miss chance against incoming attacks though force effects ignore this miss chance.',
			'One pound of astral silver worth 5 gp can be used as a power component when casting a spell of the calling, summoning, or teleportation subschools to cast them at +1 caster level. ',
			'Astral silver armor has hardness 9. Magically strengthened astral silver does not have the fragile quality and can be made into heavy armor.'
		]),
		true
	);
	block(
		'Blazing Obsidian',
		'material',
		quick_array([
			'Blazing obsidian is formed natively on the plane of fire and can be mined to make weapons out of. Despite being visually glass-like, blazing obsidian can actually be forged and sharpened like metal. Blazing obsidian is infused with the reckless might of flame. When making a power attack with a blazing obsidian weapon, add +1d4 fire damage in place of every +2 points of damage normally added by power attack. This damage is halved or increased by half as normal for the added damage from power attack.',
			sTable(
				[
					'Type of Blazing Obsidian Item',
					'Item Price Modifier'
				],
				[
					[
						'Weapon',
						'+2,000 gp'
					]
				],
				true,
				false
			)
		]),
		true
	);
	block(
		'Cobalt',
		'material',
		quick_array([
			'Cobalt is the name given to two different metallic substances that are often alchemically created by kobolds.',
			'The first can be cheaply produced and mimics the appearance of iron ore but, when refined, yields a worthless junk metal that cannot be effectively used to make anything. It is usually used to hide the tracks of kobolds stealing ore from other races so that they do not know what has happened until the kobolds are long gone. This ore is worth 1 copper piece per pound.',
			'The second substance, and the one generally referred to when saying an item is made from cobalt, is a useful metal infused with the smallest portion of draconic essence. This metal is generally silvery gray like most metals but is tinted with an additional hue matching one of the colors of chromatic dragons (black, blue, green, red, or white) though black and white cobalt tends to simply appear brighter or darker. Attacks made with cobalt weapons deal an additional 1 point of energy damage matching its color (acid for black or green, cold for white, electricity for blue, and fire for red) though also deal 1 point of damage of the same energy type to the wielder each round it is used in combat. When worn by humanoids of the reptilian subtype associated with that color of chromatic dragon (such as kobolds of that color), cobalt armor grants resistance 5 to the associated energy type which negates the damage from wielding a cobalt weapon of the same energy type.',
			'Burgolds are also capable of creating the second form of cobalt though theirs is tinted brazen, bronze, copper, golden, or silver instead. In practice, brass and gold cobalt are tinted yellow, bronze cobalt is tinted brown, copper cobalt is tinted an orange-pink, and silver cobalt is brighter than average though not as bright as white cobalt. Brass and gold cobalt are associated with fire, bronze cobalt is associated with electricity, copper cobalt with acid, and silver cobalt with cold. Burgold cobalt varieties grant energy resistance when worn by humanoids of the reptilian subtype associated with that color of metallic dragon, such as burgolds of that color.',
			'Cobalt has 30 hit points per inch of thickness and a hardness of 10 but physical attacks that do not overcome DR/magic treat cobalt\'s hardness as being 15 instead.',
			'Weapons made of cobalt cost +1,000 gp. Armor made of cobalt costs +6,000 gp.'
		]),
		true
	);
	block(
		'Crimwood',
		'material',
		quick_array([
			'These trees grow in places that are tainted and corrupted by dark forces. Crimwood is a deep crimson in color. The taint borne by crimwood weapons has a detrimental effect on creatures with a tie to nature, such as fey and elves. Such creatures become sickened if they hold or wear an item made of crimwood. If such a creature is struck by a crimwood weapon, their maximum number of hit points is reduced by 1 for 24 hours. Casting remove curse on the target automatically restores the creature\'s maximum hit points.',
			'Crimwood is incredibly hard allowing it to hold an edge and to be able to be made into the shape of any metal weapon. Crimwood has a hardness of 10 and 20 hit points per inch of thickness. Crimwood weapons have one-third fewer hit points than their steel counterparts and twice the hit points of their wooden counterparts.',
			sTable(
				[
					'Type of Crimwood Item',
					'Item Price Modifier'
				],
				[
					[
						'Weapon',
						'+1,000 gp'
					],
					[
						'Ammunition',
						'+20 gp per item'
					]
				],
				true,
				false
			)
		]),
		true
	);
	block(
		'Deep Iron',
		'material',
		quick_array([
			'Deep iron is a form of cold iron found deep within the ground which emits a field of radiation that is mildly harmful to creatures weak to cold iron.',
			'Weapons can be made out of deep iron and they function as cold iron.',
			'Armor made from deep iron interferes with an affected creature\'s ability to attack the wearer and grants damage reduction against creatures with damage reduction that is overcome by cold iron such as many types of fey and demons. It grants damage reduction of 1/— if it\'s light armor, 2/— if it\'s medium armor, and 3/— if it\'s heavy armor. ',
			'Carrying at least one pound of deep iron makes a creature that has damage reduction that is overcome by cold iron take a -1 penalty on attack rolls, damage rolls, skill checks,  and saves for every pound of deep iron they are carrying. ',
			'Items made from deep iron cost three times as much as their steel counterparts. Deep iron\'s radiation resists magical enhancements even more than regular cold iron. Adding magical properties to a cold iron item adds 3,000 gp to its price if it\'s a weapon or light armor, 6,000 gp if it\'s medium armor, and 9,000 gp if it\'s heavy armor. '
		]),
		true
	);
	block(
		'Dragonblight',
		'material',
		quick_array([
			'Dragonblight appears to be a dark gray ore but can be refined to a navy blue stone. Dragonblight produces a semi-magical radiation that can be detected by spells as a faint aura of Evocation. This radiation maintains effectiveness to a radius of 30 feet from the stone. This radiation eats slightly at the physical resistances of creatures in the area, negating DR/magic. Living creatures without spell resistance or a similar defense in the area must also make a DC 25 Fortitude save when they first enter the area of radiation and once an hour afterwards. On a failed save they are sickened for 1 hour. Being in the range of multiple radiation fields does not stack.',
			'A minimum of 1 lb of dragonblight, worth 5,000 gp, is needed to create a significant radiation field.'
		]),
		true
	);
	block(
		'Earth Iron',
		'material',
		quick_array([
			'Produced by certain divine powers, earth iron weapons have never been shaped by mortal hands nor have the materials been refined. Rather, earth iron weapons are made from natural native iron that is infused with the power of the earth and shaped by divine guidance of natural processes. ',
			'Earth iron has a supernatural ability to dissipate electricity. Whenever a creature wielding an earth iron weapon takes electricity damage, they may make a Reflex save, in addition to any other saves granted, to reduce the amount of damage taken. The damage is reduced by 2 if it is a light weapon, 5 if it is a one-handed weapon, or 10 if it is a two-handed weapon. This effect stacks with any electricity resistance the creature may possess. If the effect does not normally allow a save, the DC is equal to 10 plus the caster level (if it\'s magical), the attacker\'s base attack bonus plus the natural d20 result of their attack roll (if it came from an attack), or 15 (any other case). If the creature is wielding more than one earth iron weapon, they must choose one to use. Similarly, a creature wearing earth iron armor gains 5 electricity resistance (if the armor is light), 10 electricity resistance (if the armor is medium), or 15 electricity resistance (if the armor is heavy). This resistance does not stack with any existing resistance the creature may have but, if the creature otherwise has more than 5 less than the amount of resistance granted, their resistance instead increases by 5. Wearing an earth iron shield increases their electricity resistance by 5. Creatures without electricity resistance are treated as having an electricity resistance of 0.',
			'Druids may use and wear items made from earth iron without issue as it is completely natural. ',
			'Objects made of earth iron, unfortunately, do not possess the hardening normally done during the forging process and therefore have certain weaknesses. Attacks made with earth iron weapons treat any damage reduction or hardness possessed by the target as being doubled. Earth iron has a hardness of 8 but attacks made with items of a greater hardness treat earth iron\'s hardness as being only 5.',
			sTable(
				[
					'Type of Earth Iron Item',
					'Item Price Modifier'
				],
				[
					[
						'Light Weapon',
						'+1,750 gp'
					],
					[
						'One-Handed Weapon',
						'+4,500 gp'
					],
					[
						'Two-Handed Weapon',
						'+13,500 gp'
					],
					[
						'Light Armor',
						'+6,000 gp'
					],
					[
						'Medium Armor',
						'+18,000 gp'
					],
					[
						'Heavy Armor',
						'+30,000 gp'
					],
					[
						'Shield',
						'+6,000 gp'
					]
				],
				true,
				false
			)
		]),
		true
	);
	block(
		'Electral',
		'material',
		quick_array([
			'This alloy of gold and mithral is generally used for display and decoration but does have a few useful properties.',
			'Electral counts as both silver and gold for the purposes of overcoming damage reduction, does not rust or corrode, and has resistance 20 to acid. Apply this resistance before applying hardness and after dividing the damage by half for being an inanimate object.',
			'Any steel armor and weapons can be made of electral without issue. Electral has the same weight, hardness, and number of hit points as steel.',
			sTable(
				[
					'Type of Electral Item',
					'Item Price Modifier'
				],
				[
					[
						'Light Armor',
						'+6,000 gp'
					],
					[
						'Medium Armor',
						'+18,000 gp'
					],
					[
						'Heavy Armor',
						'+30,000 gp'
					],
					[
						'Shield',
						'+6,000 gp'
					],
					[
						'Other Items',
						'+300 gp/lb.'
					]
				],
				true,
				false
			)
		]),
		true
	);
	block(
		'Heart Bronze',
		'material',
		quick_array([
			'Heart bronze visually appears the same as ordinary bronze but it is as durable as steel. ',
			'The secret to heart bronze is that it is actually technically a construct, being infused with the same types of magic. When making most items this has little effect however other than making it competitive with steel. Some smiths, however, have managed to coax more out of the material. Some have managed to create pseudo intelligent weapons known as construct weapons from the material while others have created clockwork enhanced weapons from the material.',
			'Construct weapons function as intelligent weapons except they have no ego score and many are mindless (no intelligence score). ',
			'Clockwork enhanced weapons have magical clockwork modifications that grant magic weapon properties.',
			'Crafting either type of item requires the Craft Construct feat. ',
			'Heart bronze weapons also overcome DR copper.',
			'Heart bronze weapons cost twice as much as their steel counterparts.'
		]),
		true
	);
	block(
		'Inkstone',
		'material',
		quick_array([
			'This black stone has an iridescent surface and can be worked like metal. Legend claims that the laws of reality are written with the veins of this material. Whether or not these rumors are true however, inkstone is naturally infused with arcane power and can be used to make ink for magic writings such as spellbooks and scrolls as well as forged into powerful weapons and armor. ',
			'Inkstone weapons and armor naturally possess a +3 enhancement bonus that functions as an equal enhancement bonus added by magic properties and such weapons overcome DR magic, cold iron, silver, and other DR overcome by similar materials. This enhancement bonus stacks with any enhancement bonus from the item\'s magical properties and does not count against the maximum enhancement bonus or equivalent enhancement bonus that can be applied to the item and does not affect the cost of adding magical properties.',
			'Inkstone has a hardness of 24 and 45 hit points per inch of thickness. Weapons made of inkstone have an additional one half as many hit points as steel weapons.',
			'Due to its rarity, weapons and armor made from inkstone are often priceless.'
		]),
		true
	);
	block(
		'Jervak Wood',
		'material',
		quick_array([
			'Jervak trees only grow in a single location where an entire forest can be found. This forest is connected to the powers of the First World and the wood of the jervak trees retain an abundance of life even after being cut down and shaped into weapons. The jervak tree forest is guarded by a variety of magical beasts that keep guard.',
			'Jervak wood is always green as though freshly cut and items made from jervak wood have resistance 10 to fire. Items made of Jervak wood are also treated as having an SR of 11. If an artificial creature (such as a construct) is struck by a weapon made from jervak wood, it sprouts plants (or fungus if in darkness) that spread roots that spread throughout its form and break it up. This reduces the target\'s maximum health by 1 point. Taking fire damage restores an equal number of maximum hit points but deals the same amount of additional damage. On a critical hit, the target is also entangled until it is burned by taking 5 points of fire damage or ripped off by making a DC 20 Strength check as a standard action.',
			'Only weapons made mostly from wood (such as arrows and quarterstaffs) can be made jervak wood. ',
			'Jervak wood has hardness 8 and 30 hit points per inch of thickness. Items made from jervak wood have the same number of hit points as their steel counterparts or three times the number of hit points as their wooden counterparts.',
			sTable(
				[
					'Type of Jervak Wood Item',
					'Item Price Modifier'
				],
				[
					[
						'Weapon',
						'+1,000 gp'
					],
					[
						'Ammunition',
						'+20 gp per item'
					]
				],
				true,
				false
			)
		]),
		true
	);
	block(
		'Lamin',
		'material',
		quick_array([
			'Lamin, or "edge metal", is a rather dark gray color that adamantly refuses to take much of a reflective surface. Lamin ore is primarily mined in Hell but can be found in at least small quantities in Abaddon, the Abyss, the Plane of Shadow, and Plane of Negative Energy. ',
			'Lamin has a faint aura of evil.',
			'Successful strikes with lamin weapons deal an additional +2 points of damage but deals 1 point of damage to the wielder which ignores any damage reduction, resistance, immunity,  hardness, or similar defenses the wielder may have. On a critical hit with a lamin weapon, it deals 1 negative level to the target and the wielder becomes fatigued as well. If the wielder is already fatigued they become exhausted. If the weapon has a larger critical hit modifier, it deals additional negative levels accordingly. (1 level for ×2, 2 for ×3, 3 for ×4, etc.) Undead targets take an equal number of points of Charisma damage instead and constructs take an equal number of additional points of damage. ',
			'If a creature with DR/good wears lamin armor, their damage reduction increases by +1.',
			'Lamin has the same hardness and number of hit points as steel.',
			sTable(
				[
					'Type of Lamin Item',
					'Item Price Modifier'
				],
				[
					[
						'Weapon',
						'+2,000 gp'
					],
					[
						'Ammunition',
						'+40 gp per item'
					],
					[
						'Armor',
						'+2,500 gp'
					]
				],
				true,
				false
			)
		]),
		true
	);
	block(
		'Lost-Light Stone',
		'material',
		quick_array([
			'Lost-light stone is an unusual gemstone found in the Plane of Shadow and Plane of Negative Energy but also in Abaddon, the Abyss, and Hell. Lost-light stones wear at all that is light and can be embedded in weapons to great effect. Lost-light weapons deal an extra 1 point of damage against creatures with a good alignment and, on a critical hit, deal 1 point of Intelligence damage to the target and blind them for 1d4 rounds, regardless of their alignment.',
			'Adding lost-light stones to a weapon adds 2,000 gp to its price.'
		]),
		true
	);
	block(
		'Makaar Steel',
		'material',
		quick_array([
			'The sunrise elves of Makaaru have a unique technique for forging steel that creates an incredibly fine quality product. Makaar steel is visually distinguishable from regular steel by those who know what they are looking for by specific distortions in the reflections on its surface.',
			'Piercing and slashing weapons made from makaar steel deal an additional 1 point of their respective damage type.',
			'Items made from makaar steel are always masterwork and the price of the masterwork component is included in the price. Making an item out of makaar steel increases any DCs to craft the item by 10. Makaar steel has a hardness of 15 and 40 hit points per inch of thickness.',
			sTable(
				[
					'Type of Makaar Steel Item',
					'Item Price Modifier'
				],
				[
					[
						'Weapon',
						'+1,500 gp'
					],
					[
						'Ammunition',
						'+30 gp per item'
					],
					[
						'Other',
						'+250 gp per pound'
					]
				],
				true,
				false
			)
		]),
		true
	);
	block(
		'Mercurial Cold Steel',
		'material',
		quick_array([
			'Mercurial cold steel is the product of first amalgamating mercury with cold iron to make it soften and lower its melting point as well as allow its properties to be retained as it is then folded with ash to produce a unique steel. Creating mercurial cold steel is an art invented by, and largely unique to, the sunrise elves of Makaaru. Mercurial cold steel weapons receive a +1 bonus on damage rolls against creatures with DR cold iron in addition to overcoming the DR. Mercurial cold steel has a similar hardness to regular steel but half the number of hit points.',
			'Unlike cold iron, mercurial cold steel can be made into resonated weapons and armor though doing so increases its price as though adding magical properties.',
			'Making an item from mercurial cold steel doubles its price and adds +1,000 gp, also, like cold iron, adding magical properties to a mercurial cold steel item increases its price by another +2,000 gp.'
		]),
		true
	);
	block(
		'Mountain Copper',
		'material',
		quick_array([
			'Mountain copper is actually a unique type of native brass mined from the mountain that makes up the bulk of the plane of Heaven. Mountain copper is nearly identical to gold in appearance though bright sources of light reflect as a distinct pink-ish red hue on its surface. White mountain copper can also be found which appears like silver but still has the same pink-ish red shine. ',
			'Mountain copper has similar physical properties to most other brass and is mostly sought after as a precious metal for decoration due to its rarity and unique appearance.',
			'Mountain copper does have one unique property though: it has a weak supernatural affinity for healing, especially for fighting disease. Mountain copper tools worth 100 gp can be used with any medicine kit to increase the bonus granted to your check by +1 and, when used as part of a check to treat disease, confers an additional +1 sacred bonus to the target\'s save against the disease. These tools are not used up. A nodule of mountain copper worth 50 gp can also be used as a material power component when casting remove disease to add a +2 sacred bonus on the caster level check to cure diseases on the target.',
			'Mountain copper costs 500 gp per pound.'
		]),
		true
	);
	block(
		'Necrotic Lead',
		'material',
		quick_array([
			'Some undead and necromancers have learned to alloy a radioactive metallic black dust that is found deep underground with common lead to create a metallic material with interesting necromantic abilities. ',
			'Drinking vessels can be lined with necrotic lead to affect their contents. Affected drinks have a supernaturally improved taste but slowly transform the drinker into an undead. After drinking an affected drink, the drinker receives negative energy affinity for 1 hour. Drinking affected drinks too often can cause the drinker to immediately die and reawaken as some form of undead three days later. ',
			'While necrotic lead is generally as soft as regular lead, it can be magically strengthened in the same way as other softer materials such as gold or bronze. Magically hardened necrotic lead has the same hardness and number of hit points as steel and can be used to make any armor or weapons that can be made from steel. Necrotic lead armor grants the wearer a +2 bonus on saves against positive energy effects.',
			'One pound of necrotic lead worth 750 gp can be used as a focus alchemical power component when casting animate dead to create ghouls instead of zombies. The spell otherwise functions as normal.'
		]),
		true
	);
	blockStack(
		'Nerzaami',
		'material',
		quick_array([
			'Nerzaami is a rare metal that is said to be the blood of a primordial dragon and which changes hue depending on how it is treated. Heating nerzaami until it softens turns it a pinkish red-orange color (often just referred to as red) that remains once quenched, allowing it to slowly cool turns it a distinct green, and tempering the metal turns it a deep blue.',
			sTable(
				[
					'Type of Wave Metal Item',
					'Item Price Modifier'
				],
				[
					[
						'Weapon',
						'+1,000 gp'
					],
					[
						'Ammunition',
						'+20 gp per item'
					],
					[
						'Light Armor',
						'+1,000 gp'
					],
					[
						'Medium Armor',
						'+2,000 gp'
					],
					[
						'Heavy Armor',
						'+3,000 gp'
					],
					[
						'Other',
						'+300 gp/lb'
					]
				],
				true,
				false
			),
			[
				'block' => true,
				'name' => 'Red Nerzaami',
				'type' => 'material',
				'texts' => quick_array([
					'Red nerzaami holds the power of primal flame and of the sun and is linked to the Plane of Fire. ',
					'Weapons made from red nerzaami deal an additional 1 point of fire damage. Against creatures that are vulnerable to sunlight, this damage increases to 1d3 points.',
					'Armor made from red nerzaami shines brightly and spits sparks when struck. Once per round, when the wearer is hit by an attack that deals at least 1 point of physical damage, the attacker must make a Reflex saving throw to avoid taking 1d4 points of fire damage. Attackers that are more than 10 feet away from the wearer do not need to make a save. This applies even if the wearer avoided taking the damage, such as if they possessed damage reduction. If the wearer is standing in darkness, or if the attacker has light sensitivity or blindness, and the attacker failed their save, they are also dazzled for 1 round.',
					'Red nerzaami weighs the same as steel. Weapons and armor normally made of steel that are made of red nerzaami have one-third fewer hit points than normal. Red nerzaami has 20 hit points per inch of thickness and hardness 15.',
					'At least one pound of red nerzaami, worth 300 gp, can also function as a power component for the following spells:',
					'bb/Fire Spells (F)/bb: For spells that deal fire damage, red nerzaami can be used as a focus to add +1 to the caster level for the purpose of determining damage.',
					'bb/Light Spells (F)/bb: For spells with the light descriptor, red nerzaami can be used as a focus to add +1 to the caster level for the purpose of determining range and to increase the radius of the spell\'s area by 5 feet.'
				]),
				'spaced' => true
			],
			[
				'block' => true,
				'name' => 'Green Nerzaami',
				'type' => 'material',
				'texts' => quick_array([
					'Green nerzaami possesses the power of divine winds and is often used for wisdom enhancing equipment as well as good-aligned divine instruments. ',
					'Green nerzaami has physical properties that more resemble a hardwood than they do steel. Weapons and armor normally made from wood can be made from green nerzaami though weapons weigh 5 times as much as normal and armor weighs 10 times as much. Metal armor and weapons can also be fashioned from green nerzaami though weapons deal 1 less point of damage, minus an additional point per size category over Medium, and armor has its armor bonus reduced by 1. ',
					'Bows, crossbows, and similar ranged weapons made from green nerzaami have their projectiles surrounded by divine winds that increase the damage by +1. Against undead or creatures with the evil subtype, these winds also grant a +1 circumstance bonus on attack rolls. Projectiles fashioned from green nerzaami receive this same benefit. ',
					'Maximum Dexterity bonuses for armors and shields made from green nerzaami are increased by 2 and armor check penalties are decreased by 3 (to a minimum of 0).',
					'Druids and similar classes are not prohibited from wearing green nerzaami armor or shields.',
					'Green nerzaami has the same weight as steel (though the divine winds help support some of the weight when fashioned into a weapon and improve the wearer\'s ability to move when armor). Weapons and armor normally made of steel that are made of green nerzaami have one-third as many hit points as normal, minimum 1. Green nerzaami has 10 hit points per inch of thickness and hardness 5. ',
					'At least one pound of green nerzaami, worth 300 gp, can also function as a power component for the following divine spells.',
					'bb/Air Spells (F)/bb: For spells with the air descriptor, green nerzaami can be used as a focus to add +1 to the caster level for the purpose of effect.',
					'bb/Good Spells (F)/bb: For spells with the good descriptor, green nerzaami can be used as a focus to add +1 to the DC. ',
					'bb/Healing Spells (F)/bb: For harmless spells of the healing subschool, green nerzaami can be used as a focus to add +1 to the caster level for determining the duration and effect.'
				]),
				'spaced' => true
			],
			[
				'block' => true,
				'name' => 'Blue Nerzaami',
				'type' => 'material',
				'texts' => quick_array([
					'Blue nerzaami has a connection to the Astral Plane and is often used in creating intelligence enhancing items and similar pieces of equipment.',
					'Weapons and armor made from blue nerzaami can be pushed partway into a pocket of the Astral Plane. Characters receive a +2 circumstance bonus on Sleight of Hand checks with a blue nerzaami weapon and can also hide and palm any blue nerzaami weapons where the wielder can use their Dexterity on attack rolls with the weapon. If the wearer has at least a 15 Intelligence, spell failure chances for armors and shields made from blue nerzaami are decreased by 10%, maximum Dexterity bonuses are increased by 2, and armor check penalties are decreased by 3 (to a minimum of 0). In addition, armor made from blue nerzaami is surrounded by astral power that resonates with arcane spells being cast. If a creature within 10 feet successfully interrupts an arcane spell the wearer is performing, they take 1d4 points of force damage per spell level, minimum 1d4, as the excess power bursts back at them in the form of bolts of energy like shooting stars.',
					'Blue nerzaami has the same weight, hardness and hit points as steel.',
					'At least one pound of blue nerzaami, worth 300 gp, can also function as a power component for the following arcane spells.',
					'bb/Mage Armor (F)/bb: Add +2 to the armor bonus granted.',
					'bb/Force Spells (F)/bb: For spells with the force descriptor, blue nerzaami can be used as a focus to add +1 to the caster level for the purpose of effect and damage.',
					'bb/Teleportation Spells (F)/bb: For spells of the teleportation subschool, blue nerzaami can be used as a focus to add +1 to the caster level for the purpose of range.',
					'In addition to the listed effects, the spells take on a starry appearance. Mage armor resembles a translucent dark blue robe full of stars like a night sky, magic missiles resemble shooting stars, and so on.'
				]),
				'spaced' => true
			]
		]),
		true
	);
	block(
		'Nin Glass',
		'material',
		quick_array([
			'The sands of the isles of Nin are made from crushed native coral and can be melted to form a unique and durable glass. Weapons can be made from this glass and their edges are particularly sharp. If you successfully deal at least 1 point of slashing or piercing damage with a Nin glass weapon, the target takes 1 point of ongoing bleed damage. If the target is already receiving ongoing bleed damage from this effect, and you deal at least 1 point of slashing or piercing damage more than twice the current ongoing bleed damage, the ongoing bleed damage increases by 1. On a successful critical hit, add 1d3+1 to the amount of ongoing bleed damage regardless of the current amount. ',
			'Because of the skill required in making them, Nin glass weapons are always considered masterwork and receive a +1 enhancement bonus on attack rolls.',
			'Nin glass has a hardness of 15 and 30 hit points per inch of thickness. Weapons made of Nin glass have the same number of hit points as steel weapons.',
			sTable(
				[
					'Type of Nin Glass Weapon',
					'Item Price Modifier'
				],
				[
					[
						'Light',
						'+2,000 gp'
					],
					[
						'One-Handed',
						'+4,000 gp'
					],
					[
						'Two-Handed',
						'+7,000 gp'
					]
				],
				true,
				false
			)
		]),
		true
	);
	block(
		'Nin Glass, Infused',
		'material',
		quick_array([
			'Nin glass can be further enhanced and infused with lightning. This is generally done by the priests of the islands. Infused Nin glass has all the properties of Nin glass except it also glows as though under the effect of a continual light spell, though the effect is not magic, and weapons made from it are able to be used to make a special attack. If a natural 20 is rolled on an attack roll with the weapon, it becomes charged for 1d4 rounds starting the following round. While it is charged, an infused Nin glass weapon can be used as a standard action to make a melee touch attack against a target in range that is taking at least 1 point of ongoing bleed damage. This attack deals 1d8 points of damage plus 2d8 points of damage for every point of ongoing bleed damage the target possesses. Half of this damage is electricity damage and half results directly from divine power and ignores all resistances and immunities as flame strike. The target must also make a DC (14) Fortitude save or be deafened  for 1 round. On a critical hit, the target takes 1d6 points of sonic damage as well, the DC increases to (19), and, on a failed save, the target is blinded for 1 round and deafened for 2d4 rounds. Additionally on a critical hit with this strike, all creatures within 5 feet of the target, other than the wielder, take 1d4 points of sonic damage and must also make the save or be deafened for 1d4 rounds. If the target or nearby creatures make their save, they also reduce the amount of sonic damage taken by half.',
			sTable(
				[
					'Type of Infused Nin Glass Weapon',
					'Item Price Modifier'
				],
				[
					[
						'Light',
						'+5,500 gp'
					],
					[
						'One-Handed',
						'+11,000 gp'
					],
					[
						'Two-Handed',
						'+15,500 gp'
					]
				],
				true,
				false
			)
		]),
		true
	);
	block(
		'Pit Metal',
		'material',
		quick_array([
			'Pit metal comes from a fairly common ore found in the Abyss. Pit metal has a slightly red color but is otherwise a dull gray not dissimilar to lead. Pit metal bears a faint aura of chaos and treats DR cold iron as being doubled.',
			'Pit metals weapons have the same hardness, hit points, and price as their steel counterparts.'
		]),
		true
	);
	block(
		'Sanguine Steel',
		'material',
		quick_array([
			'This metal appears exactly like steel except it always seems strangely off like there is something wrong with it, you just can\'t quite pin down exactly what. This metal quickly absorbs blood which fills it with an unnatural energy. After an object made of sanguine steel absorbs the blood of a creature, such as by successfully dealing at least 1 point of weapon damage to it, the object becomes tuned to that creature, and hungry for more. If the object is a weapon, this grants a +1 profane bonus on attack and weapon damage rolls made with the weapon against the creature. This lasts for 1 minute or until the weapon is tuned to another creature. Additionally, while tuned to a creature, an object made of sanguine steel glows a faint red and becomes brighter as the object is held in the direction of the creature to which it is tuned, allowing a creature holding the object to identify in which direction the tuned creature is in as a swift action. This functions over an unlimited range but does not function if the creature is on another plane. This light is only bright enough to shed dim light in a 1-foot radius.',
			sTable(
				[
					'Type of Sanguine Steel Item',
					'Item Price Modifier'
				],
				[
					[
						'Weapon',
						'+2,000 gp'
					]
				],
				true,
				false
			)
		]),
		true
	);
	block(
		'Shade Iron',
		'material',
		quick_array([
			'Shade iron is a strange ore found where the Plane of Shadow meets a region of the Material Plane. Shadow iron is generally solid and can be worked like iron and made into steel but it is only partially real. Shadow iron weapons deal 1/3rd their normal damage, armor and shields grant 1/3rd their normal AC bonus, and all such items possess only 1/3rd as many hit points as their steel counterparts and a hardness of 3. The form of such an item is highly malleable, however, and it can be transformed by a creature holding or wearing it into the shape of any other item of the same purpose (weapon to weapon, armor to armor, etc) and of the same general physical size as a swift action. (A two-handed weapon is the same size category as its wielder, a one-handed weapon is 1 size category smaller, and a light weapon is 2 size categories smaller than its wielder. For this purpose, a set of heavy armor is the same size category as its wearer, a set of medium armor is 1 size category smaller, and a set of light armor is 2 size categories smaller than its wearer.) Making an item wholly out of shade iron adds 2,000 gp to its price.',
			'Despite the possibility of creating items purely out of shade iron, due to its inherent weaknesses, shade iron is more commonly added to other materials to create "shade infused" items. Shade infused items have shade iron added into its crystalline matrix such that it does not reduce the damage, AC, hit points, or hardness of the item though it still allows it some degree of transformative ability. Each form the item can take must be "programmed" in while it is being forged, after which it can only take the preprogrammed forms. This increases the price to twice that of its most expensive form plus the sum of the prices of all its other forms plus an additional 2,000 gp. Making such an item masterwork also multiplies the price of the masterwork component by the number of forms it possesses. Switching forms is still a swift action and possesses the same limitations. ',
			'Shadow iron weapons appear to be made of opaque solid shadows while shaded weapons simply have a much darker color than their counterparts.'
		]),
		true
	);
	block(
		'Starfallen Steel',
		'material',
		quick_array([
			'Made from iron taken from some of the fragments of the meteor that destroyed the Azlanti Empire, this steel still bears the same cursed energies. Attacks made with weapons forged from starfallen steel are hard to block and treat armor, natural armor, shield, deflection, sacred, and profane bonuses to AC as being half. Critical hits with such weapons also deal 1 point of constitution damage.',
			'Due to its rarity, weapons made of starfallen steel are priceless.'
		]),
		true
	);
	block(
		'Tarshic Pelt',
		'material',
		quick_array([
			'A tarshic pelt can be taken from any animal and is imbued with druidic magic that protects the wearer from most manufactured weapon attacks. Armor made from tarshic pelts treat their armor bonus as being 2 higher against piercing and slashing weapons made of metal. Unfortunately, tarshic pelts also have weaknesses and treat their armor bonus as being 2 less against metal bludgeoning weapons and against spells, spell-like abilities, and supernatural abilities.',
			'Only armor primarily made of leather or hide can be made of tarshic pelts. Armor made from tarshic pelts has a hardness of 6 and a number of hit points equal 5 times the base armor bonus of the armor plus 10.',
			sTable(
				[
					'Type of Wave Metal Armor',
					'Item Price Modifier'
				],
				[
					[
						'Light',
						'+1,000 gp'
					],
					[
						'Medium',
						'+2,000 gp'
					],
					[
						'Heavy',
						'+3,000 gp'
					]
				],
				true,
				false
			)
		]),
		true
	);
	block(
		'Vendetta Steel',
		'material',
		quick_array([
			'This seemingly normal steel can have a drop of blood added to it as part of creating the steel. If the blood comes from a humanoid creature or outsider without the elemental subtype, the steel will glow as a torch when they are within 60 feet of creatures with any of the same racial subtypes (human, elf, dwarf, angel, archon, demon, etc.). Weapons made from vendetta steel also deal an additional 1 point of damage against such creatures.',
			'Vendetta steel otherwise has the same hardness and number of hit points as regular steel and is visually indistinguishable. Making steel items from vendetta steel adds +1,000 gp to its price.'
		]),
		true
	);
	block(
		'Wave Metal',
		'material',
		quick_array([
			'Also sometimes called namkiin, wave metal is an unusual light-blue translucent metal native to the plane of water. When viewed underwater, wave metal takes on an opaque silvery-blue appearance instead. Wave metal is generally forged using thermal vents where the Plane of Fire meets the Plane of Water.',
			'Wave metal is infused with the flow of the waves and deals an additional point of damage for each previous successful hit by the wielder against the target that round.',
			sTable(
				[
					'Type of Wave Metal Item',
					'Item Price Modifier'
				],
				[
					[
						'Weapon',
						'+2,000 gp'
					]
				],
				true,
				false
			)
		]),
		true
	);
	block(
		'Ziff',
		'material',
		quick_array([
			'Ziff is a valuable metal that is incredibly reflective. Legends say that ziff is made by alloying copper and sunlight.',
			'Ziff ore is mined in only a few locations and it has a unique refining technique that deposits it as a sheet on the surface of a basin of water that is as thin and light as the finest gold leaf. This sheet is then laid on the surface of baser metals, such as iron or steel, and brushed before being heated. After which the ziff becomes perfectly bonded to its surface and nearly impossible to remove without taking off the top layer of the metal. Properly maintained ziff is perfectly reflective, but scatters the light that makes up the reflections like a prism, throwing brilliant rainbow light in many directions.',
			'If you are wearing armor covered in ziff while in bright light, the first time you make a melee attack against an opponent that day they must make a Fortitude saving throw against a DC equal to 10 + your base attack bonus + your Strength score. If you add your Dexterity modifier to your attack roll instead of your Strength, use your Dexterity modifier in place of your Strength modifier to determine the DC. On a failed save they are dazzled for 2d4 rounds. If you make a successful critical hit against a creature they must make a new save to avoid being dazzled regardless of whether they successfully made their save the first time.',
			'Weapons can be coated in ziff which overcomes DR/copper but do not confer any other bonuses. Furthermore, coating a weapon in ziff prevents any other materials it\'s made of from touching the target and may negate its properties such as its ability to overcome DR.',
			'Covering a set of armor in ziff triples its price and adds 300 gp if it\'s light armor, 1,200 gp if it\'s medium armor, or 2,700 gp if it\'s heavy armor. Covering other items in ziff triples their price if made of iron or steel and adds 150 gp per pound.'
		]),
		true
	);
	require $startDir.'pageEnd.php';
?>