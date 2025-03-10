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
	monsterBlockAuto(
		'Inferno',// name
		false,// alt name
		'A strange pillar of flame hovers in the air ahead. Atop sits a head resmbling the other blaze but wrapped in a odd ceremonial looking helm. Around the creature floats a ring of what appears to be 4 tower shields made from fire.',// lore text
		11,// CR
		false,// MR
		false,// Custom XP
		'',// Race
		[],// Class
		'N',// Alignment
		'Large',// Size
		'outsider (elemental, extraplanar, fire)',// Type
		4,// Misc Initiative Mod
		false,// Mythic Initiative
		'darkvision 60 ft., smokesight',// Senses
		0,// Misc Perception Mod
		'',// Aura
		[
			'dodge' => 1,
			'natural' => 6,
			'shield' => 4
		],// Misc AC bonuses
		[14,10],// Number of hit dice, Hit dice size, <additional hp bonus>, <hp notes (fast healing/regen/etc)>
		[
			[
				'good' => true,
				'mod' => 0
			],
			[
				'good' => true,
				'mod' => 0
			],
			[
				'good' => false,
				'mod' => 0
			]
		],// Fortitude/Reflex/Will save good/bad and misc bonuses
		'shield wall, spinning shields; bb/Immune/bb elemental traits, fire',// Defensive Abilities
		'vulnerability to cold, water vulnerability',// Weaknesses
		'fly 40 ft. (perfect)',// Speed
		[
			[
				'type' => 'Melee',
				'list' => [
					[
						'name' => 'slam',
						'mod' => 0,
						'stat' => 'str',
						'damage' => '1d6+5 plus 3d6 fire'
					]
				]
			],
			[
				'type' => 'Ranged',
				'list' => [
					[
						'name' => '3 fire blasts',
						'mod' => 0,
						'stat' => 'dex',
						'damage' => '3d8+3 fire'
					]
				]
			]
		],// Attacks
		10,// Reach
		'flaming shockwave',// Special Attacks
		[],// Spell-like Abilities
		[],// Spell Casting
		'',// Spell Casting Note
		[
			'str' => 21,
			'dex' => 20,
			'con' => 21,
			'int' => 2,
			'wis' => 12,
			'cha' => 16
		],// Stats
		1,// BAB (1=full, 0.75=3/4 or medium, 0.5=half or slow)
		0,//CMB misc bonus and special cases
		[
			'notes' => 'cannot be tripped'
		],//CMD misc bonus and special cases
		[
			'Combat Reflexes',
			'Dodge',
			'Far Shot',
			'Improved Initiative',
			'Mobility',
			'Point-Blank Shot',
			'Precise Shot'
		],// Feats
		[
			[
				'skill' => 'Fly',
				'stat' => 'dex',
				'bonus' => 25
			],
			[
				'skill' => 'Perception',
				'stat' => 'wis',
				'bonus' => 17
			]
		],// Skills
		[],// Languages
		'',// Special Qualities
		'any (The Nether)',// Environment
		'solitary, conflagration (2-4 inferno), greater conflagration (1-4 inferno, 1-8 blaze)',// Organization
		'none (blazing helm, shield scavenge)',// Treasure
		[
			[
				'name' => 'Fire Blasts',
				'type' => 'Ex',
				'desc' => 'As a standard action, infernos can launch 3 blasts of flame at targets that each deal 3d8+3 points of fire damage. These are ranged touch attacks with a range increment of 25 feet. On a successful hit the target is also set on fire.'
			],
			[
				'name' => 'Flaming Shockwave',
				'type' => 'Ex',
				'desc' => 'As a standard action, infernos can make a shockwave attack. Any creature or object within 30 feet of the inferno, without total cover from the inferno, takes 14d6 fire damage and is thrown 30 feet away. Creatures in the area can make a DC 20 reflex save to half the damage. Creatures who make the save are also only thrown 15 feet back. Abilities that let you take no damage or ignore the effects on a successful relfex save have reduced effect allowing you to take only 1/4 the damage rolled or be thrown back 10 feet.'
			],
			[
				'name' => 'Shield Wall',
				'type' => 'Ex',
				'desc' => 'As a standard action, the inferno can bring its shields inward forming a solid barrier around the inferno. The inferno gains total cover against all attacks unless they come from directly above or below. The inferno cannot attack while doing this and any attack action made by the inferno opens the shield wall.'
			],
			[
				'name' => 'Smokesight',
				'type' => 'Ex',
				'desc' => 'Infernos can see through fire, smoke, and ash without penalty, ignoring any cover or concealment bonuses from fire, smoke, and ash. This does not allow the inferno to see anything the inferno could not otherwise see (for example, invisible creatures are still invisible).'
			],
			[
				'name' => 'Spinning Shields',
				'type' => 'Ex',
				'desc' => 'Once aware of combat the inferno begins spinning its shields rapidly around itself making it difficult to aim between them. Any ranged attack against an inferno has a 50% miss chance or else it strikes one of the shields and bounces off. For ranged touch attacks this miss chance is reduced to 30%.'
			],
			[
				'name' => 'Water Vulnerability',
				'type' => 'Ex',
				'desc' => 'Infernos take 1d6 points of damage each round they are in contact with water and splashing them with water deals 1d4 points of damage. Infernos take 10d6 points of damage each round instead if they are fully submerged in water.'
			],
			[
				'name' => 'Blazing Helm',
				'type' => 'Ex',
				'desc' => 'After an inferno has been defeated it loses form leaving only a pile of ash, though a lingering aura remains of their helm. A DC 20 spellcraft check reveals that the magic essence of the helm is still present. A spellcraft check can be made to recover the helm. If successsful, the helm forms from lingering flames that rise from the ashes. Determine the properties of the helm based on the following chart using the DC that character succeeded at.'.sTable(
					[
						'DC',
						'Passive Effect',
						'Once per day on command for 2 hours.'
					],
					[
						[
							'40',
							'Fire resistance 10',
							'—'
						],
						[
							'35',
							'Fire resistance 5',
							'Fire resistance 10'
						],
						[
							'30',
							'—',
							'Fire resistance 10'
						],
						[
							'25',
							'Fire resistance 5',
							'—'
						],
						[
							'20',
							'—',
							'Fire resistance 5'
						]
					],
					true,
					false
				).'If the character did not make any of the listed DCs the helm fails to form and is lost.'
			],
			[
				'name' => 'Shield Scavenge',
				'type' => 'Ex',
				'desc' => 'Similarly to their helm, a lingering aura of their shield barriers remain, though it cannot be used to create a physical shield. Rather any arcane spellcaster can attempt a spellcraft check to learn how to craft a spell to mimic the effects of the shields. If the caster is charisma based they can add their charisma to their spellcraft for this check instead and can use it untrained. The following chart contains a list of spells and DCs, an arcane caster attempting this check learns all of the spells whose DC they make, adding them to their spellbook if they have one. If the caster forgets the spell or loses their spellbook they can choose any spells whose DCs they made to learn when gaining a level. If a caster makes the DC for a spell of a level they cannot cast, they can still learn the spell and add it to their spellbook but they cannot cast it until they can cast spells of thet level.'.sTable(
					[
						'DC',
						'Spell'
					],
					[
						[
							'40',
							'Blazing Shield Ring, Communal'
						],
						[
							'35',
							'Blazing Shield, Communal'
						],
						[
							'30',
							'Blazing Shield Ring'
						],
						[
							'25',
							'Blazing Shield'
						]
					],
					true,
					false
				)
			]
		],// Special Abilities
		$desc=''// Description
	);
	require $startDir.'pageEnd.php';
?>