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
	classBlock(
		'Dragon Eaters',// name,
		'Despite the gruesome name, dragon eaters actually often have good relations with at least one dragon. Dragon eaters possess powers that are generally either stolen from or gifted to the dragon eater. In the former case, this requires slaying the dragon and consuming their arcane essence, hence the name. Dragon eaters generally sport dragon-like wings, scales, horns, claws, teeth, and eyes that make them often appear as much like a dragon as they do their actual race.',// desc,
		'Dragon eaters are versatile warriors who wield elemental breath weapons.',// role,
		'Any',// align,
		8,// hd,
		false,// parentClasses
		4,// startWealth,
		[
			'Appraise',
			'Craft',
			'Fly',
			'Heal',
			'Intimidate',
			'Knowledge (aracana)',
			'Perception',
			'Profession',
			'Spellcraft',
			'Swim' 
		],// classSkills,
		2,// skillsPerLevel,
		0.75,// bab,
		[
			'fort' => 'good',
			'refl' => 'good',
			'will' => 'bad' 
		],// saves,
		[
			'Draconic Essence, Draconic Scales, Draconic Source, Draconic Spirit, Elemental Cantrip',// 1st
			'Draconic Might, Physical Dragon Talent',// 2nd
			'Arcane Dragon Talent',// 3rd
			'Physical Dragon Talent',// 4th
			'Arcane Dragon Talent, Draconic Source',// 5th
			'Draconic Might, Physical Dragon Talent',// 6th
			'Arcane Dragon Talent',// 7th
			'Physical Dragon Talent',// 8th
			'Arcane Dragon Talent, Draconic Source',// 9th
			'Draconic Might, Physical Dragon Talent',// 10th
			'Arcane Dragon Talent',// 11th
			'Physical Dragon Talent',// 12th
			'Arcane Dragon Talent, Draconic Source',// 13th
			'Draconic Might, Physical Dragon Talent',// 14th
			'Arcane Dragon Talent',// 15th
			'Physical Dragon Talent',// 16th
			'Arcane Dragon Talent, Draconic Source',// 17th
			'Draconic Might, Physical Dragon Talent',// 18th
			'Arcane Dragon Talent',// 19th
			'Draconic Ascension' // 20th
		],// specials,
		false,// spells,
		false,// spellsSecondary,
		[
			'Weapon and Armor Proficiency' => [
				'A dragon eater is proficient with all simple and martial weapons. A dragon eater is also proficient with both light and medium armor and with shields, except tower shields.'
			],
			'Draconic Source' => [
				'Each dragon eater chooses 1 draconic source at 1st level. Each draconic source represents a type of dragon from which they derive their powers. Each draconic source lists the specific type of dragon (gold, red, sky, umbral, etc.), a category of dragon (metallic, chromatic, imperial, primal, etc.), an energy type (acid, cold, electricity, fire, etc.), a default breath weapon shape (generally a cone or line), and often one or more unique dragon talents plus occasional special rules.',
				'A dragon eater receives an additional draconic source of their choice at 5th, 10th, 15th, and 20th levels.',
				'When choosing an additional draconic source, a dragon eater may choose a draconic source they\'ve already chosen before which increases the damage of its breath weapon by 1d6, grants a +1 bonus on DCs, attack rolls, and to their caster level with the source\'s breath weapon and dragon talents based on that breath weapon, and granting an additional dragon talent that must be from the source\'s unique talents or one that can be used with the draconic source.',
				'A full list of draconic sources can be found aa/dragon_eater_sources|here/aa.'
			],
			'Draconic Scales (Ex)' => [
				'A dragon eater grows scales across their bodies that match their draconic source. These scales generally grow covering the back, the back of their arms and hands, and the front of their legs. These scales grant a +1 natural armor bonus to AC and resistance 5 to the energy types of their chosen draconic sources. This increases to a +2 bonus and resistance 10 at 5th level, a +3 bonus and resistance 15 at 10th level, and a +4 bonus and immunity at 15th level.'
			],
			'Draconic Spirit (Su)' => [
				'A dragon eater can manifest a draconic spirit which can be manifested or dismissed as a swift action. This spirit takes the form of the head of a dragon based on their draconic source that has a long serpentine neck and which appears to be made out of the energy of their source. The neck appears to rise out of the dragon eater near the back of the base of their neck. When there is sufficient room, this head appears 1 size category larger than the dragon eater though shrinks to the available space. A dragon eater\'s draconic spirit is a literal extension of themself. Regardless of its size, a draconic spirit never takes up space nor can it be damaged. If the dragon eater has multiple draconic sources, manifesting their spirit creates a head for each of their sources.',
				'A dragon eater\'s draconic spirit can gain additional abilities but all draconic spirits can use a breath weapon which uses the energy and breath weapon shape of the draconic source. This functions as the breath weapon universal monster ability except that it originates from the draconic spirit\'s mouth instead of the dragon eater\'s (though it originates from the same space) and that if the dragon eater\'s spirit has multiple heads, each one can separately use their own breath weapon as a single action. Creatures in the area of one of these breath weapons take 1d6 points of damage of the energy type of the corresponding draconic source. At every level they do not gain a draconic source, the dragon eater chooses one of their breath weapons to increase the damage of by 1d6 points. If the draconic source has a cone shaped breath weapon, its area is a 15-foot cone though it extends by an additional 5 feet for each 2 levels you possess over 1st level. If it has a line shaped breath weapon, its area is a 20-foot line though it extends by an additional 5 feet for each level you possess. Each breath weapon can only be used every 1d4 rounds. If multiple breath weapons are used simultaneously, roll once to determine the number of rounds before they can be used again and apply it to all of the breath weapons used. This breath weapon does not heal creatures unless specified otherwise, even if it deals positive or negative energy damage. '
			],
			'Elemental Cantrip (Su)' => [
				'All dragon eaters receive the ability to manipulate their element somewhat at 1st level though this ability is generally no stronger than a 0-level spell. If these abilities allow a save, the DC is equal to 10 plus your Charisma modifier.',
				'A full list of elemental cantrips can be found ab/dragon_eater_talents|Elemental Cantrips|here/ab.'
			],
			'Draconic Essence' => [
				'A dragon eater is able to receive and take draconic essence.',
				'If a dragon is particularly impressed with a dragon eater, they may grant them a portion of their draconic essence, allowing the dragon eater to use one of their spell-like abilities of the dragon\'s choice once per day. This choice is made when gifting the essence and the dragon can change which ability is granted later in the same way as gifting it in the first place. This gift can also be rescinded by the dragon as a free action. Earning this gift is generally as hard as slaying the dragon in question and the exact method is determined by the GM.',
				'A dragon eater can also take a portion of a dragon\'s essence from a dragon they slew. They do not have to make the finishing blow but they must have made a fair contribution to the fight as determined by the GM. This stolen essence grants the dragon eater the ability to use one of the dragon\'s spell-like abilities of the dragon eater\'s choice once per day. This choice is made when taking the essence and cannot be changed later.',
				'A dragon eater can receive the same ability from multiple dragons which grants additional uses of it. A dragon eater can only receive one portion of draconic essence from a given dragon, whether that essence is given or stolen. Draconic essence may only be given by or taken from true dragons such as metallic, chromatic, imperial, primal, outer, or esoteric dragons.',
				'When taking or receiving essence from an esoteric dragon, the dragon eater gains one of the spells the dragon could perform with their psychic magic ability as a psychic spell-like ability usable once per day. This does not grant access to, or cost any, psychic energy but does use the same components as psychic spells.',
				'The GM may determine that for some, more exotic, types of dragons the dragon eater must receive a portion of essence from that specific type of dragon before choosing it as a draconic source.'
			],
			'Dragon Talents' => [
				'Starting at 2nd level, dragon eaters receive dragon talents according to the chart above. Dragon talents are divided into physical and arcane talents. Physical talents grant physical changes to the dragon eater while arcane talents grant or improve magical abilities. Unless specified otherwise, abilities and effects granted by physical talents are extraordinary abilities while abilities and effects granted by arcane talents are supernatural abilities. Talents that say they use a breath weapon cannot be used unless the breath weapon is available and they prevent the breath weapon from being used for 1d4 rounds as normal. Some dragon talents have prerequisites that must be met before you can take it. These prerequisites tend to restrict talents by level, previously acquired talents, and various attributes of your draconic sources. You may use a talent that requires having a draconic source of a certain category with any of your sources but other prerequisites based on your draconic sources can only be used with sources that meet the prerequisites.',
				'Some draconic sources grant access to breath talents. Breath talents are arcane talents that allow the dragon eater to change the effect of the source\'s breath weapon. They must choose whether to replace their breath weapon from the draconic source before using it. These talents can be used with other talents that change the shape of the breath weapon but not with ones that only use its energy.',
				'A full list of dragon talents can be found ab/dragon_eater_talents|Dragon Talents|here/ab.'
			],
			'Draconic Might' => [
				'At 2nd level, dragon eaters receive a +2 bonus to Strength. This bonus increases by +2 at 6th, 10th, 14th, and 18th levels.'
			],
			'Draconic Ascension' => [
				'Each draconic source additionally lists a draconic ascension. At 20th level, a dragon eater may choose one of the draconic ascensions from their draconic sources to receive.'
			]
		]// features
	);
	require $startDir.'pageEnd.php';
?>