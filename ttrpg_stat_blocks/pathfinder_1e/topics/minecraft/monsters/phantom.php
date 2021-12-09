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
<title>Phantom</title>
<?php
	monsterBlockAuto(
		'Phantom',// name
		false,// alt name
		'This creature appears at first to be a skeletal bird with a strange tattered thin translucent blue membrane stretched over it, if it weren\'t for the bony tail as long as the body and lack of legs. Its head is the only region not aupported by its skeleton, having no skull but possessing a wide toothy mouth and two piercing green eyes.',// lore text
		2,// CR
		false,// MR
		false,// Custom XP
		'',// Race
		[],// Class
		'NE',// Alignment
		'Medium',// Size
		'undead',// Type
		0,// Misc Initiative Mod
		false,// Mythic Initiative
		'darkvision 60ft., lifesense 120 ft.',// Senses
		0,// Misc Perception Mod
		'',// Aura
		[],// Misc AC bonuses
		[3,8],// Number of hit dice, Hit dice size, <additional hp bonus>, <hp notes (fast healing/regen/etc)>
		[
			[
				'good' => false,
				'mod' => 0
			],
			[
				'good' => false,
				'mod' => 0
			],
			[
				'good' => true,
				'mod' => 0
			]
		],// Fortitude/Reflex/Will save good/bad and misc bonuses
		'bb/Immune/bb undead traits',// Defensive Abilities
		'sunlight flammability',// Weaknesses
		'fly 60 ft.',// Speed
		[
			[
				'type' => 'Melee',
				'list' => [
					[
						'name' => 'bite',
						'mod' => 0,
						'stat' => 'str',
						'damage' => '1d6+6'
					]
				]
			]
		],// Attacks
		5,// Reach
		'swoop',// Special Attacks
		[],// Spell-like Abilities
		[],// Spell Casting
		'',// Spell Casting Note
		[
			'str' => 19,
			'dex' => 18,
			'con' => 'cha',
			'int' => 0,
			'wis' => 10,
			'cha' => 15
		],// Stats
		0.75,// BAB (1=full, 0.75=3/4 or medium, 0.5=half or slow)
		0,//CMB misc bonus and special cases
		[
			'notes' => 'can\'t be tripped'
		],//CMD misc bonus and special cases
		[],// Feats
		[],// Skills
		[],// Languages
		'',// Special Qualities
		'any',// Environment
		'solitary, haunting (2-4)',// Organization
		'none',// Treasure
		[
			[
				'name' => 'Sunlight Flammability',
				'type' => 'Ex',
				'desc' => 'When exposed to direct sunlight, phantoms burst into flame take 1 point of fire damage per hit dice (normally 3) every round until they die. At which point their body burns to ash and is completely destroyed. If the phantom gets out of the sunlight before it dies, it is still on fire and will continue to take 1d6 points of fire damage, to a maximum of its number of hit dice, each round until it is extinguished. Phantoms count as being vulnerable to sun light and bright light for the purpose of being affected by spells and abilities.'
			],
			[
				'name' => 'Swoop',
				'type' => 'Ex',
				'desc' => 'Phantoms can swoop down and make an attack before continuing back into the sky. This action is treated as a charge with the following excpetions. The phantom can continue moving after they make their attack up to their remaining movement or the distance of a single movement, whichever is less. Phantoms must still move at least 10 feet before making their attack which is still made in the closest space from which they can attack the target. Phantoms do not provoke an attack of opportunity from the target of their swoop. Phantoms can move up and down as normal during their swoop but must still move in a straight line horizontally.'
			]
		],// Special Abilities
		$desc=''// Description
	);
	require $startDir.'pageEnd.php';
?>