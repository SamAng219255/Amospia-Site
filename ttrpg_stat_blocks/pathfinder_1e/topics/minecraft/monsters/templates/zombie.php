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
<title>Zombie</title>
<?php
	block(
		'Zombie (CR +varies)',
		'template',
		quick_array([
			'Acquired/Inherited Template Acquired',
			'Simple Template No',
			'Usable with Summons No',
			'',
			'Zombies are the animated corpses of dead creatures, forced into foul unlife via necromantic magic like animate dead. While the most commonly encountered zombies are slow and tough, others possess a variety of traits, allowing them to spread disease or move with increased speed.',
			'Zombies are unthinking automatons, and can do little more than follow orders. When left unattended, zombies tend to mill about in search of living creatures to slaughter and devour. Zombies attack until destroyed, having no regard for their own safety.',
			'Although capable of following orders, zombies are more often unleashed into an area with no command other than to kill living creatures. As a result, zombies are often encountered in packs, wandering around places the living frequent, looking for victims. Most zombies are created using animate dead. Such zombies are always of the standard type.',
			'"Zombie" is an acquired template that can be added to any corporeal creature (other than an undead), referred to hereafter as the base creature.',
			'bb/Challenge Rating/bb: The challenge rating may or may not change depending on the original creatures type and its number of racial hit dice. See ii/Table 1-2: Creature Hit Dice/ii under monster creation on page 290 of the ii/Pathfinder RPG Bestiary/ii for more details.',
			'bb/Alignment/bb: Always neutral evil.',
			'bb/Type/bb: The creature\'s type changes to undead. It retains any subtype except for alignment subtypes (such as good) and subtypes that indicate kind. It does not gain the augmented subtype. It uses all the base creature\'s statistics and special abilities except as noted here.',
			'bb/Armor Class/bb: The creature gains additional natural armor based on its size. If the creature already had natural armor it is increased by the following amount instead.',
			sTable(
				[
					'Zombie Size',
					'Natural Armor Bonus'
				],
				[
					[
						'Tiny or smaller',
						'+0'
					],
					[
						'Small',
						'+1'
					],
					[
						'Medium',
						'+2'
					],
					[
						'Large',
						'+3'
					],
					[
						'Huge',
						'+4'
					],
					[
						'Gargantuan',
						'+7'
					],
					[
						'Colossal',
						'+11'
					]
				],
				true,
				false
			),
			'bb/Hit Dice/bb: Preserve HD from class levels and change racial HD to d8s. Zombies use their Charisma modifiers to determine bonus hit points (instead of Constitution).',
			'bb/Saves/bb: Racial base save bonuses become Fort +1/3 racial HD, Ref +1/3 racial HD, and Will +1/2 racial HD + 2. Retain save bonuses from class levels.',
			'bb/Defensive Abilities/bb: Zombies retain all of the defensive abilities of the base creature and gain all of the qualities and immunities granted by the undead type. Zombies gain DR 5/slashing.',
			'bb/Weaknesses/bb: Zombies retain any weaknesses of the base creature and gain sunlight flammability:',
			'ii/Sunlight Flammability/ii (Ex): When exposed to direct sunlight, zombies burst into flame and take 1 point of fire damage per hit dice every round until they die. At which point their body burns to ash and is completely destroyed. If the zombie gets out of the sunlight before it dies, it is still on fire and will continue to take 1d6 points of fire damage, to a maximum of its number of hit dice, each round until it is extinguished. Zombies count as being vulnerable to sun light and bright light for the purpose of being affected by spells and abilities.',
			'bb/Speed/bb: All speeds possessed by the base creature are retained by the zombie at a -10 feet penalty (minimum 5 feet).',
			'bb/Attacks/bb: A zombie retains all the attacks and weapon proficiencies of the base creature. It also gains a slam attack that deals damage based on the zombie\'s size, but as if it were one size category larger than its actual size.',
			'bb/Special Attacks/bb: A zombie retains all special attacks of the base creature and gains the fire spreader special attack:',
			'ii/Fire Spreader/ii (Ex): If a zombie is on fire for any reason including due to sunlight flammability, all of the zombie\'s natural attacks deal 1d6 fire damage. There is also a 33% chance that that any creature struck by the zombie\'s natural attacks will automatically catch on fire taking 1d6 points of fire damage each round for 2d4 rounds.',
			'bb/Abilities/bb: Str +2, Dex –2. A zombie has no Con or Int score. If a zombie possesses class levels requiring an intelligence or constitution score, use the zombie\'s charisma score and increase it to the associated score of the base creature if it is greater.',
			'bb/BAB/bb: A zombie\'s base attack from any racial hit dice it possesses is equal to 3/4 its racial Hit Dice. It retains any base attack bonuses from class levels.',
			'bb/Skills/bb: A zombie has no skill ranks.',
			'bb/Feats/bb: A zombie loses all feats from Hit Dice and class levels possessed by the base creature, and does not gain feats as its Hit Dice increase, but it does retain any bonus feats it has and gains Toughness as a additional bonus feat.',
			'bb/Special Qualities/bb: A zombie retains all of the special qualities of the base creature and gains the following special quality.',
			'ii/Staggered/ii (Ex): Zombies have poor reflexes and can only perform a single move action or standard action each round. A zombie can move up to its speed and attack in the same round as a charge action.'
		]),
		true
	);
	block(
		'Variant Zombies',
		'variants',
		[
			'The typical zombie is a sun-fearing slow-moving abomination that is tough to destroy. Yet this tough zombie is not the only type of zombie to plague crypts or stalk graveyards. Each of the following variant zombies modifies the base zombie in a few simple ways.'
		],
		false,
		[
			[
				'title' => 'Nether Zombie',
				'spaced' => true,
				'texts' => quick_array([
					'Native to the Nether these zombies are better suited to their hot environment.',
					'bb/Challenge Rating/bb: The CR of a nether zombie is the same as a typical zombie plus one.'
					'bb/Alignment/bb: Never Lawful, Chaotic, or Good. Unlike Typical zombies, nether zombies are not required to be evil, but creating one is still an evil act.',
					'bb/Type/bb: The creature\'s type changes to undead and it gains the extraplanar subtype. It retains any subtype except for alignment subtypes (such as good) and subtypes that indicate kind. It does not gain the augmented subtype.',
					'bb/Hit Dice/bb: Preserve HD from class levels, change racial HD to d8s, and inrease the number of racial hit dice by 1. Nether zombies use their Charisma modifiers to determine bonus hit points (instead of Constitution).',
					'bb/Defensive Abilities/bb: Nether zombies possess immunity to fire in addition to the defenses possessed by a typical zombie.',
					'bb/Weaknesses/bb: Nether zombies lack the sunlight flammability weakness of typical zombies but retain all other weaknesses they possess.',
					'bb/Special Attacks/bb: Nether zombies lack the fire spreader special attack of typical zombies but retain all other special attacks they possess.',
					'bb/Abilities/bb: Str +2, Dex –2, Cha +2. A zombie has no Con or Int score. If a zombie possesses class levels requiring an intelligence or constitution score, use the zombie\'s charisma score and increase it to the associated score of the base creature if it is greater before increasing it by 2.'
				])
			],
			[
				'title' => 'Husk',
				'spaced' => true,
				'texts' => quick_array([
					'Native to the Desert these zombies are designed to take advantage of the desolate environment.',
					'bb/Challenge Rating/bb: The CR of a husk is the same as a typical zombie plus one.',
					'bb/Type/bb: The creature\'s type changes to undead. It retains any subtype except for the aquatic or water subtypes, alignment subtypes (such as good), and subtypes that indicate kind. It does not gain the augmented subtype.',
					'bb/Hit Dice/bb: Preserve HD from class levels, change racial HD to d8s, and inrease the number of racial hit dice by 1. Husks use their Charisma modifiers to determine bonus hit points (instead of Constitution).',
					'bb/Weaknesses/bb: Husks lack the sunlight flammability weakness of typical zombies but retain all other weaknesses they possess.',
					'bb/Attacks/bb: A husk retains all the attacks and weapon proficiencies of the base creature. It also gains two claw attacks that deals damage based on the husk\'s size, but as if it were one size category smaller than its actual size.',
					'bb/Special Attacks/bb: Husks lack the fire spreader special attack of typical zombies but retain all other special attacks they possess and gain the desiccating touch special attack.',
					'ii/Desiccating Touch/ii (Su): Any creature hit by one of a husk\'s natural attacks must make a fortitude save with a DC equal to 10 plus half the husk\'s HD plus the husk\'s charisma modifier. If the creature fails the save it becomes fatigued and grows hungry and thirsty, requiring half again the normal amount of food and water for that day. If the creature fails the save against the attack a second time, the additional food and water requirement stacks, adding half again as much food and water as normal needed for each failure. Creatures of the water or aquatic subtypes take 1d6 desiccating damage from this ability regardless of the save. A husk can also deliver the effects of their desiccating touch by making a melee touch attack as a standard action.'
				])
			],
			[
				'title' => 'Drowned',
				'spaced' => true,
				'texts' => quick_array([
					'An aquatic variant of zombies, these zombies plague the seas.',
					'bb/Challenge Rating/bb: The CR of a drowned is the same as a typical zombie plus one.',
					'bb/Type/bb: The creature\'s type changes to undead and it gains the aquatic subtype. It retains any subtype except for the fire subtype, alignment subtypes (such as good), and subtypes that indicate kind. It does not gain the augmented subtype.',
					'bb/Hit Dice/bb: Preserve HD from class levels, change racial HD to d8s, and inrease the number of racial hit dice by 1. Drowned use their Charisma modifiers to determine bonus hit points (instead of Constitution).',
					'bb/Weaknesses/bb: drowned lack the sunlight flammability weakness of typical zombies but retain all other weaknesses they possess.',
					'bb/Speed/bb: Drowned retain any fly speed the base creature possessed but the speed is reduced by 10 feet to a minimum of 5 feet and the maneuverability drops to clumsy. Drowned gain a swim speed of 40 feet or retain any swim speed the base creature possessed if it is greater. All other speeds possessed by the base creature are retained by the drowned at a -10 feet penalty (minimum 5 feet).',
					'bb/Attacks/bb: A drowned retains all the attacks and weapon proficiencies of the base creature and gains proficiency with tridents. Approximately 10% of all drowned wield tridents, these tridents may be magic and often have the frost, icy busrt, returning, shock, and shocking burst qualities. It also gains two claw attacks that deals damage based on the drowned\'s size, but as if it were one size category smaller than its actual size.',
					'bb/Special Attacks/bb: Drowned lack the fire spreader special attack of typical zombies but retain all other special attacks they possess.',
					'bb/Special Qualities/bb: Drowned retain all the special qualities of a typical zombie and gain the following special quality.',
					'ii/Trident Mastery/ii (Ex): Drowned treat a trident as having a range increment of 20 feet when underwater, even though throwing weapons underwater is normally ineffective for most combatants.'
				])
			]
		]
	);
	require $startDir.'pageEnd.php';
?>