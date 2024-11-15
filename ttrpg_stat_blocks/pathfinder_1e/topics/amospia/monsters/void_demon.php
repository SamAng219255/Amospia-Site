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
	monsterBlockAuto(
		'Void Demon',// name
		false,// alt name
		'Whatever this creature once was, it has been horribly twisted and mutated by the void into a creature of darkness with too many mouths, eyes, and tendrils.',// lore text
		11,// CR
		false,// MR
		false,// Custom XP
		'Outsider',// Race
		[],// Class
		[
			'alignment' => 'CE',
			'altruism' => -1,
			'humility' => -1,
			'mercy' => -1,
			'purity' => -1,
			'order' => -1,
			'honesty' => -1,
			'loyalty' => -1,
			'law' => -1,
			'independence' => 0,
			'individualism' => 0,
			'knowledge' => 0,
			'work' => 0
		],// Alignment
		'Medium',// Size
		'outsider (chaotic, demon, evil)',// Type
		4,// Misc Initiative Mod
		false,// Mythic Initiative
		'darkvision 120 ft., scent',// Senses
		0,// Misc Perception Mod
		'unease (250 ft.)',// Aura
		[
			'natural' => 7
		],// Misc AC bonuses
		[14,10],// Number of hit dice, Hit dice size, <additional hp bonus>, <hp notes (fast healing/regen/etc)>
		[
			[
				'good' => false,// Fortitude
				'mod' => 0
			],
			[
				'good' => true,// Reflex
				'mod' => 0
			],
			[
				'good' => false,// Will
				'mod' => 0
			]
		],// Fortitude/Reflex/Will save good/bad and misc bonuses
		'all-around vision, dark affinity; bb/DR/bb 10/cold iron and magic; bb/Immune/bb electricity, mind-affecting, poison; bb/Resistance/bb acid 10, cold 10, fire 10',// Defensive Abilities
		'',// Weaknesses
		'50 ft.',// Speed
		[
			[
				'type' => 'Melee',
				'list' => [
					[
						'name' => '13 tentacles',
						'mod' => -5,
						'stat' => 'str',
						'damage' => '1d6+3 plus grab',
						'iterative' => 0
					]
				]
			]
		],// Attacks
		5,// Reach
		'constrict (1d6+6 plus poison)',// Special Attacks
		[
			'level' => 15,
			'conc' => 0,
			'spells' => [
				[
					'perday' => 'at-will',
					'list' => [
						[
							'name' => 'compelling whispers',
							'dc' => true,
							'level' => 5
						],
						[
							'name' => 'condemning whispers',
							'dc' => true,
							'level' => 6
						],
						[
							'name' => 'deceiving whispers',
							'dc' => true,
							'level' => 7
						],
						[
							'name' => 'insane whispers',
							'dc' => true,
							'level' => 7
						] 
					]
				],
				[
					'perday' => 1,
					'list' => [
						[
							'name' => 'summon',
							'note' => '1 void demon'
						] 
					]
				]
			]
		],// Spell-like Abilities
		[],// Spellcasting
		false,// Spell Casting Note
		[
			'str' => 22,
			'dex' => 27,
			'con' => 20,
			'int' => 0,
			'wis' => 2,
			'cha' => 27
		],// Stats
		1,// BAB (1=full, 0.75=3/4 or medium, 0.5=half or slow)
		[
			'grapple' => +4
		],// CMB misc bonus and special cases
		[
			'notes' => 'can\'t be tripped'
		],// CMD misc bonus and special cases
		[],// Feats
		[],// Skills
		'',// Languages
		'bond of servitude',// Special Qualities
		'Any (The Lower Planes)',// Environment
		'',// Organization
		'none',// Treasure
		[
			[
				'name' => 'Aura of Unease',
				'type' => 'Ex',
				'desc' => 'Creatures within this aura, which permeates through physical and magical barriers without issue, are subject to a feeling of extreme unease, as though every fiber of the body and even their very soul is crying out that something is so very wrong here. Creatures must make a DC 25 Will save vs fear at the start of each of their turns or else become shaken. Creatures that are struck by one of the void demon\'s attacks must make another save or become shakened. Creatures that are struck that are already shaken or frightened become frightened or panicked respectively. Allied demons are immune to this aura. This is a mind-affecting fear effect. The DC is Charisma-based.'
			],
			[
				'name' => 'Bond of Servitude',
				'type' => 'Su',
				'desc' => 'Void demons are generally created or summoned to serve a particular master and they possess a telepathic bond with this master. This bond extends over any distance and across planes and allows the void demon and its master to telepathically communicate with each other though the void demon is not very talkative, being mindless, and only communicates in short, often single word, responses to questions asked. The void demon and its master are also aware of each other like ii/status/ii and the void demon will often rush to the aid of its master if their master comes under threat.'
			],
			[
				'name' => 'Compelling Whispers',
				'type' => 'Sp',
				'desc' => 'As a swift action, the demon\'s many mouths begin speaking in unintelligible whispers. Choose a creature within 60 feet. That creature hears the whispers as a series of beguiling words and must make a Will save (DC 23) or else follow their instruction as ii/greater command/ii. This is equivalent to a 5th level mind-affecting spell of the Enchantment (compulsion) school and does not provoke an attack of opportunity.'
			],
			[
				'name' => 'Condemning Whispers',
				'type' => 'Sp',
				'desc' => 'As a swift action, the demon\'s many mouths begin speaking in unintelligible whispers. Choose a creature within 60 feet. That creature believes the whispers to be a series of condemnations against them and must succeed at a Will save (DC 24). On a failed save, the target believes the condemnations, believing them to be about either a real wrongdoing or fictitious wrongdoing made up by their own imagination, and doesn\'t believe themself worthy of divine aid or power. They must attempt to save against any beneficial divine spell and, if they are a cleric or paladin, they are treated as an ex-cleric or ex-paladin for the duration. This effect lasts for 1 day per hit dice of the demon (normally 14). An ii/atonement/ii spell cast on the target immediately ends this effect and makes them immune to it for 1 day per level of the caster. This usage of ii/atonement/ii does not incur a material component cost. This is equivalent to a 6th level mind-affecting spell of the Enchantment school and does not provoke an attack of opportunity.'
			],
			[
				'name' => 'Dark Affinity',
				'type' => 'Ex',
				'desc' => 'A void demon is harmed by positive energy and healed by negative energy like an undead. They are also immune to energy drain and negative levels.'
			],
			[
				'name' => 'Deceiving Whispers',
				'type' => 'Sp',
				'desc' => 'As a swift action, the demon\'s many mouths begin speaking in unintelligible whispers. Choose a creature within 60 feet. That creature hears the whispers as a series of corrections about the nature of reality and must make a Will save (DC 25) or else be tricked into believing a false reality, usually one happier than the real one. The target believes a specific false reality regarding their circumstance, such as a battle being a costume party, and does not attack or act aggressively. They can still take actions but their actions are based on the false reality they believe. Each round at the start of their turn they may make a new save to end the effect. Before taking an action that would be harmful, the target receives a new save to end the effect with a +5 bonus. If the target takes damage at least equal to their number of hit points, they receive a new save to end the effect with a +10 bonus. This is equivalent to a 7th level mind-affecting spell of the Enchantment (compulsion) school and does not provoke an attack of opportunity.'
			],
			[
				'name' => 'Insane Whispers',
				'type' => 'Sp',
				'desc' => 'As a swift action, the demon\'s many mouths begin speaking in unintelligible whispers. Choose a creature within 60 feet. The target must succeed at Will save (DC 25) or else go insane as the spell ii/insanity/ii. This ability is the equivalent of a 7th level mind-affecting spell of the Enchantment (compulsion) school and does not provoke an attack of opportunity.'
			],
			[
				'name' => 'Poison',
				'type' => 'Ex',
				'desc' => 'Poison (Ex) Constrict-injury; save Fort DC 22; frequency 1/round for 6 rounds; effect 1d3 Con and Wis damage; cure 2 consecutive saves. The save DC is Constitution-based.'
			]
		],// Special Abilities
		$desc='',// Description
		$gear=[] // Gear
	);
	block(
		'Strategy',
		'strategy',
		quick_array([
			'The void demon generally attempts to make a full-attack each round while using whispers every round on targets in range seemingly at random though it never uses a whisper on a target immune to the whisper or already under its effect. The void demon can be directed to act otherwise by its master who may have it use its whispers more strategically, such as focusing ii/condemning whispers/ii on paladins (to make them susceptible to the aura of unease) and clerics (to weaken the party).'
		])
	);
	require $startDir.'pageEnd.php';
?>