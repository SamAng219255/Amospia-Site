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
<title>Killer Rabbit</title>
<?php
	monsterBlockAuto(
		'Killer Rabbit',// name
		'Rabbit',// alt name
		'This otherwise ordinary rabbit has blood dripping from its mouth and a murderous look in its eyes.',// lore text
		3,// CR
		false,// MR
		false,// Custom XP
		'',// Race
		[],// Class
		'NE',// Alignment
		'Tiny',// Size
		'magical beast',// Type
		0,// Misc Initiative Mod
		false,// Mythic Initiative
		'darkvision 60 ft., low-light vision',// Senses
		0,// Misc Perception Mod
		'',// Aura
		[],// Misc AC bonuses
		[1,10],// Number of hit dice, Hit dice size, <additional hp bonus>, <hp notes (fast healing/regen/etc)>
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
		'Immunity',// Defensive Abilities
		'',// Weaknesses
		'50 ft.',// Speed
		[
			[
				'type' => 'Melee',
				'list' => [
					[
						'name' => 'bite',
						'mod' => 0,
						'stat' => 'str',
						'damage' => '2d8+12'
					]
				]
			]
		],// Attacks
		10,// Reach
		'',// Special Attacks
		[],// Spell-like Abilities
		[],// Spell Casting
		'',// Spell Casting Note
		[
			'str' => 26,
			'dex' => 16,
			'con' => 9,
			'int' => 2,
			'wis' => 12,
			'cha' => 5
		],// Stats
		1,// BAB (1=full, 0.75=3/4 or medium, 0.5=half or slow)
		0,//CMB misc bonus and special cases
		0,//CMD misc bonus and special cases
		[
			'Combat Reflexes ss/B/ss',
			'Greater Cleave ss/B/ss',
			'Run'
		],// Feats
		[
			[
				'skill' => 'Acrobatics',
				'stat' => 'dex',
				'bonus' => [
					'base' => -3,
					'when jumping' => 15
				]
			],
			[
				'skill' => 'Stealth',
				'stat' => 'dex',
				'bonus' => 12
			]
		],// Skills
		[],// Languages
		'quick leap',// Special Qualities
		'temperate plains',// Environment
		'solitary',// Organization
		'standard',// Treasure
		[
			[
				'name' => 'Immunity',
				'type' => 'Ex',
				'desc' => 'The Killer Rabbit is immune to most types of damage and negative effects including acid, bleed, bludgeoning, cold, electricity, fire, force, mental damage, negative energy effects including negative levels and ability drain, nonlethal damage, piercing, positive energy damage, precision damage, slashing, sonic, untyped damage, and all negative conditions. The only type of damage that can harm The Killer Rabbit is damage resulting directly from divine power such as from ii/flame strike/ii and abilities that work similar to ii/flame strike/ii. The Killer Rabbit is also capable of biting its way out of any situation, any attempt at a combat manauever against The Killer Rabbit automatically fails and the creature attempting the combat maneuver takes the damage from The Killer Rabbit\'s bite. The Killer Rabbit cannot be restrained such that it cannot use its bite against its restraints and its bite ignores hardness.'
			],
			[
				'name' => 'Quick Leap',
				'type' => 'Ex',
				'desc' => 'The Killer Rabbit is able to quick bounce to an opponent and back granting it 10 foot reach.'
			]
		],// Special Abilities
		$desc=''// Description
	);
	require $startDir.'pageEnd.php';
?>