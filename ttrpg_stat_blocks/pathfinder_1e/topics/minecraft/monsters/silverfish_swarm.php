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
?>
<title>Silverfish</title>
<?php
	monsterBlockAuto(
		'Lesser Silverfish Swarm',// name
		'Silverfish Swarm',// alt name
		'A moving pile of hairy gray maggot-shaped insects surges foward',// lore text
		'1/2',// CR
		false,// MR
		false,// Custom XP
		'',// Race
		[],// Class
		'N',// Alignment
		'Diminutive',// Size
		'vermin (arthropod)',// Type
		0,// Misc Initiative Mod
		false,// Mythic Initiative
		'darkvision 60 ft., tremorsense 15 ft.',// Senses
		0,// Misc Perception Mod
		'',// Aura
		[],// Misc AC bonuses
		[1,8],// Number of hit dice, Hit dice size, <additional hp bonus>, <hp notes (fast healing/regen/etc)>
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
		'swarm traits; bb/Immune/bb minecraft-affecting effects, weapon damage',// Defensive Abilities
		'swarm traits',// Weaknesses
		'30 ft., burrow 30 ft.',// Speed
		[
			[
				'type' => 'Melee',
				'list' => [
					[
						'name' => 'swarm',
						'auto' => true,
						'damage' => '1d6 plus distraction'
					]
				]
			]
		],// Attacks
		0,// Reach
		'distraction (DC 11)',// Special Attacks
		[],// Spell-like Abilities
		[],// Spell Casting
		'',// Spell Casting Note
		[
			'str' => 1,
			'dex' => 7,
			'con' => 13,
			'int' => 0,
			'wis' => 8,
			'cha' => 2
		],// Stats
		0.75,// BAB (1=full, 0.75=3/4 or medium, 0.5=half or slow)
		0,//CMB misc bonus and special cases
		0,//CMD misc bonus and special cases
		[],// Feats
		[],// Skills
		[],// Languages
		'',// Special Qualities
		'any',// Environment
		'solitary',// Organization
		'none',// Treasure
		[],// Special Abilities
		$desc=''// Description
	);
	require $startDir.'pageEnd.php';
?>