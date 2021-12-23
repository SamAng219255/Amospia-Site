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
<title>Skeleton</title>
<?php
	block(
		'Skeleton (CR +varies)',
		'template',
		quick_array([
			'Acquired/Inherited Template Acquired',
			'Simple Template No',
			'Usable with Summons No',
			'',
			'Skeletons are the animated bones of the dead, brought to unlife through foul magic. While most skeletons are mindless automatons, they still possess an evil cunning imparted to them by their animating force—a cunning that allows them to wield weapons and wear armor.',
			'"Skeleton" is an acquired template that can be added to any corporeal creature (other than an undead) that has a skeletal system (referred to hereafter as the base creature).',
			'bb/Challenge Rating/bb: The challenge rating may or may not change depending on the original creatures type, its number of racial hit dice, and its reliance on feats. See ii/Table 1-2: Creature Hit Dice/ii and ii/Table 1-1: Monster Statistics by CR/ii under monster creation on page 290 of the ii/Pathfinder RPG Bestiary/ii for more details.',
			'bb/Alignment/bb: Always neutral evil.',
			'bb/Type/bb: The creature\'s type changes to undead. It retains any subtype except for alignment subtypes (such as good) and subtypes that indicate kind. It does not gain the augmented subtype. It uses all the base creature\'s statistics and special abilities except as noted here.',
			'bb/Armor Class/bb: The creature gains additional natural armor based on its size. If the creature already had natural armor it is increased by the following amount instead.',
			sTable(
				[
					'Skeleton Size',
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
						'Medium or Large',
						'+2'
					],
					[
						'Huge',
						'+3'
					],
					[
						'Gargantuan',
						'+6'
					],
					[
						'Colossal',
						'+10'
					]
				],
				true,
				false
			),
			'bb/Hit Dice/bb: Preserve HD from class levels and change racial HD to d8s. Skeletons use their Charisma modifiers to determine bonus hit points (instead of Constitution).',
			'bb/Saves/bb: Racial base save bonuses become Fort +1/3 racial HD, Ref +1/3 racial HD, and Will +1/2 racial HD + 2. Retain save bonuses from class levels.',
			'bb/Defensive Abilities/bb: Skeletons retain all of the defensive abilities of the base creature except those that rely on the creature\'s flesh or blood and gain all of the qualities and immunities granted by the undead type. Skeletons gain DR 5/bludgeoning.',
			'bb/Weaknesses/bb: Skeletons retain any weaknesses of the base creature except those that caused by the creature\'s flesh or blood and gain sunlight flammability:',
			'ii/Sunlight Flammability/ii (Ex): When exposed to direct sunlight, skeletons burst into flame and take 1 point of fire damage per hit dice every round until they die. At which point their body burns to ash and is completely destroyed. If the skeleton gets out of the sunlight before it dies, it is still on fire and will continue to take 1d6 points of fire damage, to a maximum of its number of hit dice, each round until it is extinguished. Skeletons count as being vulnerable to sun light and bright light for the purpose of being affected by spells and abilities.',
			'bb/Speed/bb: A winged skeleton can\'t use its wings to fly. If the base creature flew magically, so can the skeleton. All other movement types are retained.',
			'bb/Attacks/bb: A skeleton retains all the attacks, and weapon proficiencies of the base creature, except for attacks that can\'t work without flesh. A creature with hands gains one claw attack per hand; the skeleton can strike with each of its claw attacks at its full attack bonus. A claw attack deals damage depending on the skeleton\'s size. If the base creature already had claw attacks with its hands, use the skeleton claw damage only if it\'s better. A skeleton with hands also gains proficiency in bows and most skeletons carry a longbow with 100 arrows in addition to gear and equipment possessed by the base creature.',
			'bb/Special Attacks/bb: A skeleton retains all special attacks of the base creature except for attacks that can\'t work without flesh.',
			'bb/Abilities/bb: A skeleton\'s Dexterity increases by +2. It has no Constitution or Intelligence score. Skeletons have a minimum charisma score of 10. If a skeleton possesses class levels requiring an intelligence or constitution score, use the skeleton\'s charisma score and increase it to the associated score of the base creature if it is greater.',
			'bb/BAB/bb: A skeleton\'s base attack from any racial hit dice it possesses is equal to 3/4 its racial Hit Dice. It retains any base attack bonuses from class levels.',
			'bb/Skills/bb: A skeleton loses all skill ranks possessed by the base creature and gains none of its own.',
			'bb/Feats/bb: A skeleton loses all feats from Hit Dice and class levels possessed by the base creature, and does not gain feats as its Hit Dice increase, but it does retain any bonus feats it has and gains Improved Initiative as an additional bonus feat.',
			'bb/Special Qualities/bb: A skeleton retains all of the special qualities except those that rely on the creature\'s flesh or blood.'
		]),
		true
	);
	block(
		'Variant Skeletons',
		'variants',
		[
			'The typical skeleton is a sun-fearing abomination that is tough to destroy. Yet this tough skeleton is not the only type of skeleton to plague crypts or stalk graveyards. Each of the following variant skeletons modifies the base skeleton in a few simple ways.'
		],
		false,
		[
			[
				'title' => 'Wither Skeleton',
				'spaced' => true,
				'texts' => quick_array([
					'Native to the Nether, these skeletons are infused its necromantic energies.',
					'bb/Challenge Rating/bb: The CR of a nether skeleton is the same as a typical skeleton plus two.',
					'bb/Type/bb: The creature\'s type changes to undead and it gains the extraplanar subtype. It retains any subtype except for alignment subtypes (such as good) and subtypes that indicate kind. It does not gain the augmented subtype.',
					'bb/Hit Dice/bb: Preserve HD from class levels, change racial HD to d8s, and inrease the number of racial hit dice by 2. Wither skeletons use their Charisma modifiers to determine bonus hit points (instead of Constitution).',
					'bb/Defensive Abilities/bb: Wither skeletons possess immunity to fire in addition to the defenses possessed by a typical skeleton.',
					'bb/Weaknesses/bb: Wither skeletons lack the sunlight flammability weakness of typical skeletons but retain all other weaknesses they possess.',
					'bb/Special Attacks/bb: Wither skeletons retain all special attacks possessed by typical skeletons but they also gain the withering strike and hellfire missile special attacks.',
					'ii/Withering Strike/ii (Su): Anytime a wither skeleton succeeds in dealing damage with a melee attack the target must make a will save equal to 10 plus half the wither skeleton\'s number of hit dice plus the wither skeleton\'s charisma bonus. The wither skeleton may have a racial binus to this save. If the creature fails, it is inflicted with ii/withering/ii for a number of rounds equal to the wither skeleton\'s charisma modifier. ii/Withering/ii is a curse effect inflicted by wither skeletons and the wither that drains the life of the creature. Every round, a creature with ii/withering/ii takes 1d3 points of strength, dexterity, and constitution damage. A creature that dies from constitution damage due to ii/withering/ii cannot be raised by most means as though they died to a death effect. Any ability damage from withering that is not restored within 24 hours becomes ability drain. Undead afflicted with ii/withering/ii take 1 point of charisma damage each round instead. ii/Wish/ii, ii/remove curse/ii, and similar spells that can dispel curses can end the ii/withering/ii effect. If the spell is cast within 24 hours of the ii/withering/ii effect after it has ended it instead removes all ability damage from the ii/withering/ii effect.',
					'ii/Hellfire Missile/ii (Su): All projectiles fired by a wither skeleton burst into flame and deal an additional 4d6 points of damage. Half of this extra damage is fire while the other half results directly from unholy power and ignores all resistance and immunity. Additionally, any creature that takes at least 1 point of fire damage from this ability is automatically lit of fire.',
					'bb/Abilities/bb: A skeleton\'s Dexterity and Charisma increase by +2. It has no Constitution score. Wither skeletons have a minimum charisma score of 12. If a skeleton possesses class levels requiring a constitution score, use the skeleton\'s charisma score and increases it to the constitution score of the base creature if it is greater, before increasing it by 2. A wither skeleton cannot have a charisma of less than 14.',
					'bb/Skills/bb: A wither skeleton has a number of skill ranks from racial hit dice equal to 4 + its intelligence modifier. It generally spends a number of skill ranks in Knowledge (religion) equal to its number of hit dice but otherwise retains as many skill ranks from racial hit dice as possible in skills they are in on the base creature. Extra skill ranks can be spent as normal.',
					'bb/Feats/bb: A wither skeleton retains all feats possessed by the base creature and gains Improved Initiative as a bonus feat.',
					'bb/Languages/bb: A wither skeleton retains all its languages and learns Necril.'
				])
			],
			[
				'title' => 'Stray',
				'spaced' => true,
				'texts' => quick_array([
					'Native to icy wastelands, these skeletons are infused with the land\'s chill.',
					'bb/Challenge Rating/bb: The CR of a Stray is the same as a typical skeleton plus one.',
					'bb/Type/bb: The creature\'s type changes to undead and it gains the cold subtype. It retains any subtype except for the fire subtype, alignment subtypes (such as good), and subtypes that indicate kind. It does not gain the augmented subtype.',
					'bb/Hit Dice/bb: Preserve HD from class levels, change racial HD to d8s, and inrease the number of racial hit dice by 1. Strays use their Charisma modifiers to determine bonus hit points (instead of Constitution).',
					'bb/Defensive Abilities/bb: Strays retain all of the defensive abilities of skeletons but also gain immunity to cold.',
					'bb/Weaknesses/bb: Strays retain all of the weaknesses of skeletons but also gain vulnerability to fire.',
					'bb/Special Attacks/bb: Strays retain all special attacks possessed by typical skeletons but they also gain the freezing strike and icy missile special attacks.',
					'ii/Freezing Strike/ii (Su): All melee attacks by the stray deal an additional 1d4 points of cold damage. If the target takes at least 1 point of cold damage from the Stray\'s melee attack it is subjected to the effects of the ii/icy prison/ii spell with a DC equal to 10 plus the stray\'s new CR.',
					'ii/Icy Missile/ii (Su): All ranged attacks by the stray deal an additional 1d6 points of cold damage. If the target takes at least 1 point of cold damage from the Stray\'s ranged attack it is subjected to the effects of the ii/slow/ii spell with a DC equal to 10 plus the stray\'s new CR.'
				])
			]
		]
	);
	require $startDir.'pageEnd.php';
?>