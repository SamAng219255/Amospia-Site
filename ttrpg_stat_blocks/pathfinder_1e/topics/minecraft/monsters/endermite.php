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
<title>Endermite</title>
<?php
	monsterBlockAuto(
		'Endermite',// name
		false,// alt name
		'This small, squirming, bulbous creature is surrounded in a faint purple aura and has a rough purple shell, eight segmented legs, and a single red eye.',// lore text
		1,// CR
		false,// MR
		false,// Custom XP
		'',// Race
		[],// Class
		'N',// Alignment
		'Tiny',// Size
		'vermin (arthropod, extraplanar)',// Type
		0,// Misc Initiative Mod
		false,// Mythic Initiative
		'darkvision 60 ft.',// Senses
		0,// Misc Perception Mod
		'',// Aura
		[],// Misc AC bonuses
		[2,8],// Number of hit dice, Hit dice size, <additional hp bonus>, <hp notes (fast healing/regen/etc)>
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
		'',// Defensive Abilities
		'',// Weaknesses
		'30 ft.',// Speed
		[
			[
				'type' => 'Melee',
				'list' => [
					[
						'name' => 'bite',
						'mod' => 0,
						'stat' => 'dex',
						'damage' => '1d3+3'
					]
				]
			]
		],// Attacks
		0,// Reach
		'',// Special Attacks
		[
			'level' => 2,
			'conc' => 0,
			'spells' => [
				[
					'perday' => 'at-will',
					'list' => [
						[
							'name' => 'plane shift',
							'note' => 'self only, astral plane only'
						]
					]
				]
			]
		],// Spell-like Abilities
		[],// Spell Casting
		'',// Spell Casting Note
		[
			'str' => 2,
			'dex' => 14,
			'con' => 16,
			'int' => 0,
			'wis' => 8,
			'cha' => 2
		],// Stats
		0.75,// BAB (1=full, 0.75=3/4 or medium, 0.5=half or slow)
		0,//CMB misc bonus and special cases
		[
			'trip' => 12
		],//CMD misc bonus and special cases
		[],// Feats
		[],// Skills
		[],// Languages
		'dimensional hitch-hike, nimble strikes',// Special Qualities
		'any',// Environment
		'solitary',// Organization
		'none',// Treasure
		[
			[
				'name' => 'Dimensional Hitch-Hike',
				'type' => 'Ex',
				'desc' => 'Despite their name, endermites are native to the astral plane and often hitch rides with creatures teleporting through it emerging at the destination with the creature. Whenever a creature teleports to or from a region infested with endermites, there is a 5% chance that an endermite will also appear in their when they arrive.'
			],
			[
				'name' => 'Nimble Strikes',
				'type' => 'Ex',
				'desc' => 'An endermite uses their dexterity in place of their strength on attack and damage rolls with their natural weapons.'
			]
		],// Special Abilities
		$desc=''// Description
	);
	require $startDir.'pageEnd.php';
?>