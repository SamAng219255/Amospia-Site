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
		'Creeper',// name
		false,// alt name
		'An almost humanoid form appears from the underbrush. This creature appears to be made of dried green leaves and stands with a head holding two sunken eye-sockets and an indentation resembling an open and frowning mouth, a torso made of a tall leafy stalk, and four stubby legs around the base.',// lore text
		5,// CR
		false,// MR
		false,// Custom XP
		'',// Race
		[],// Class
		'N',// Alignment
		'Medium',// Size
		'plant',// Type
		0,// Misc Initiative Mod
		false,// Mythic Initiative
		'low-light vision, tremorsense 60 ft.',// Senses
		0,// Misc Perception Mod
		'',// Aura
		[
			'dodge' => 1,
			'natural' => 2
		],// Misc AC bonuses
		[7,8],// Number of hit dice, Hit dice size, <additional hp bonus>, <hp notes (fast healing/regen/etc)>
		[
			[
				'good' => true,
				'mod' => 0
			],
			[
				'good' => false,
				'mod' => 0
			],
			[
				'good' => false,
				'mod' => 0
			]
		],// Fortitude/Reflex/Will save good/bad and misc bonuses
		'bb/Immune/bb plant traits',// Defensive Abilities
		'',// Weaknesses
		'30 ft.',// Speed
		[],// Attacks
		0,// Reach
		'explode',// Special Attacks
		[],// Spell-like Abilities
		[],// Spell Casting
		'',// Spell Casting Note
		[
			'str' => 8,
			'dex' => 16,
			'con' => 11,
			'int' => 2,
			'wis' => 8,
			'cha' => 2
		],// Stats
		0.75,// BAB (1=full, 0.75=3/4 or medium, 0.5=half or slow)
		0,//CMB misc bonus and special cases
		[
			'trip' => 4
		],//CMD misc bonus and special cases
		[
			'Dodge',
			'Following Step',
			'Stealthy',
			'Step Up'
		],// Feats
		[
			[
				'skill' => 'Perception',
				'stat' => 'wis',
				'bonus' => 0
			],
			[
				'skill' => 'Stealth',
				'stat' => 'dex',
				'bonus' => 12
			]
		],// Skills
		[],// Languages
		'camouflage',// Special Qualities
		'any (forests and jungles)',// Environment
		'solitary, conflagration (2-8)',// Organization
		'none',// Treasure
		[
			[
				'name' => 'Camouflage',
				'type' => 'Ex',
				'desc' => 'Creepers are experts at hiding in plain daylight using silence and camouflage. Creepers can make Stealth checks in areas of abundant greenery such as forests and jungles even while observed and receive a +10 circumstance bonus to their check.'
			],
			[
				'name' => 'Explode',
				'type' => 'Ex',
				'desc' => 'Creepers become excited spontaneously combust in large explosion when near their target. Creepers can explode as a standard action, dealing 7d8 points of damage to all creatures within 20 feet and killing the creeper. Creatures within range are allowed to make a DC 15 Reflex save as an immediate to perform one of two actions. The creatures can either move up to its movement speed towards the nearest unoccupied space outside of the creeper\'s range before the blast or they can move up to half their movement speed towards the creeeper and attempt a single attack of opportunity. This counts towards their limit of attacks of opportunity per round and they cannot make the attack of they were unable to take an attack of opportunity. This movement provokes attacks of opportunity except from creatures who took the immediate action and attempted the save. After every other creature\'s actions are resolved, if the creeper is still alive, the creeper may choose attempt a DC 11 Reflex save to cancel their explosion. On a successful save, or if the creeper was slain, the explosion is negated. On a successful save, the creeper also survives. Beginning to explode breaks stealth and the creeper cannot make a new Stealth check until after surviving the explosion.'
			]
		],// Special Abilities
		$desc=''// Description
	);
	block(
		'Charged Creeper (CR 8)',
		'variants',
		quick_array(
			'Through various means a creeper can become charged. A charged creeper glows with a flickering blue light that illuminates them and their surroundings as ii/faerie fire/ii. Charged creeepers possess a significantly potent explosion that deals 14d8 points of damage to creatures within 40 feet. Charged creeper explosions also have the uncanny ability to decapitate victims. Creatures which roll a natural 1 on their save against a charged creepers explosion have their head removed as by the ii/vorpal/ii weapon property. Any creature which dies to a charged creeper\'s explosion have their head decapitated which remains otherwise unharmed.'
		)
	);
	require $startDir.'pageEnd.php';
?>