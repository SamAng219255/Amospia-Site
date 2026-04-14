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
		'Happy Ghast',// name
		false,// alt name
		'This large, pale, and bulbous entity floats aimlessly, a dozen or so tendrils hang down and sway forward and back. Its soft coos travel unusually far.',// lore text
		4,// CR
		false,// MR
		false,// Custom XP
		'',// Race
		[],// Class
		'N',// Alignment
		'Large',// Size
		'outsider (native, [water])',// Type
		0,// Misc Initiative Mod
		false,// Mythic Initiative
		'darkvision 60 ft.',// Senses
		0,// Misc Perception Mod
		'',// Aura
		[
			'dodge' => 1,
			'natural' => 4
		],// Misc AC bonuses
		[5,10,5,'; water healing'],// Number of hit dice, Hit dice size, <additional hp bonus>, <hp notes (fast healing/regen/etc)>
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
		'bb/Immune/bb mind-affecting effects',// Defensive Abilities
		'',// Weaknesses
		'fly 30 ft.',// Speed
		[
			[
				'type' => 'Melee',
				'list' => [
					[
						'name' => 'slam',
						'mod' => 0,
						'stat' => 'str',
						'damage' => '1d6+4'
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
			'str' => 18,
			'dex' => 16,
			'con' => 15,
			'int' => 2,
			'wis' => 8,
			'cha' => 16
		],// Stats
		0.75,// BAB (1=full, 0.75=3/4 or medium, 0.5=half or slow)
		0,//CMB misc bonus and special cases
		[
			'notes' => 'can\'t be tripped'
		],//CMD misc bonus and special cases
		[
			'Dodge',
			'Endurance',
			'Toughness'
		],// Feats
		[
			[
				'skill' => 'Fly',
				'stat' => 'dex',
				'bonus' => 8
			]
		],// Skills
		[],// Languages
		'strong carry',// Special Qualities
		'any',// Environment
		'solitary',// Organization
		'none',// Treasure
		[
			[
				'name' => 'Strong Carry',
				'type' => 'Ex',
				'desc' => 'Happy ghasts can carry far more than other creatures of their size. They are never treated as encumbered and never suffer penalties for carrying a medium or heavy load. They also are treated as quadrupeds for determining their carrying capacity and treat their Strength score as being 10 points higher for the purposes of determining their carrying capacity (altogether bringing their maximum carrying capacity to 3,600 lbs.). When properly harnessed, a happy ghast can be ridden by four Medium creatures without issue, though only one can determine the ghast\'s movement.'
			],
			[
				'name' => 'Water Healing',
				'type' => 'Ex',
				'desc' => [
					'Happy ghasts can heal by absorbing water. They gain fast healing 5 while flying through clouds, rain, fog, or areas of especially high humidity such as some tropical regions. They also heal 5 points of damage every 10 minutes while in areas where the humidity is not especially low (such as it is in a desert or the The Nether). Happy ghasts cannot use bodies of water for this purpose and do not receive healing from touching or entering bodies of water such as river, lakes, or oceans.',
					'Happy ghasts are treated as though they had the water subtype for all purposes even though they do not possess a swim speed and cannot breath underwater.'
				]
			]
		],// Special Abilities
		[
			'It is not quite clear what relationship happy ghasts have to ghasts, but the visual similarities are uncanny. Despite that, happy ghasts are known to be quite friendly beings of mere animal intelligence who rely heavily on water as opposed to the agressive and fiery natures of ordinary ghasts.',
			'Happy ghasts are found naturally as shrivelled up and dried out juveniles in the soul sand valleys of The Nether, where ghasts often go to die. These dried out individuals are immobile and unconsious but can be brought back the The Overworld and rehydrated by submerging them in water for about a day. At this point, the juveniles are referred to as "ghastlings" and exhibit a playful and curious nature. Curiously, ghastlings possess gills and are able to breathe underwater, though the gills appear to seal shut as they enter adulthood and they lose the ability. Adult happy ghasts are also unable to draw in water from being submerged, shutting the pores from which they absorb water if there is ever too much, most likely done to prevent them from absorbing too much or too quickly. Ghastlings expand as they age and absorb additional liquid until they reach adulthood having expanded to a height of about four times their initial size.',
			'Happy ghasts lack the powerful attack of regular ghasts but are known to be quite physically strong and can easily lift several people and carry heavy weights without issue. When used for these purposes, happy ghasts are often fitted with specialized harnesses that can be ridden by four human sized creatures and have periodic rings that ropes can be tied to in order to hang loads beneath the happy ghast.'
		]// Description
	);
	require $startDir.'pageEnd.php';
?>