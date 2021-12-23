<?php 
	$startDir='';
	for($i=0; $i<10; $i++) {
		if(file_exists($startDir.'pageStart.php')) {
			require $startDir.'pageStart.php';
			break;
		}
		else {
			$startDir='../'.$startDir;
		}
	}
?>
<title>Evoker</title>
<?php
	monsterBlockAuto(
		'Evoker',// name
		false,// alt name
		'This gray skinned humanoid stares you down as he raises his hands summoning three winged entities.',// lore text
		8,// CR
		false,// MR
		false,// Custom XP
		'Illager',// Race
		[
			'conjurer' => 9
		],// Class
		'NE',// Alignment
		'Medium',// Size
		'humanoid (illager)',// Type
		0,// Misc Initiative Mod
		false,// Mythic Initiative
		false,// Senses
		0,// Misc Perception Mod
		'',// Aura
		[
			'armor' => 4
		],// Misc AC bonuses
		[9,8],// Number of hit dice, Hit dice size, <additional hp bonus>, <hp notes (fast healing/regen/etc)>
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
		'bb/SR/bb 15',// Defensive Abilities
		'',// Weaknesses
		'30 ft.',// Speed
		[],// Attacks
		5,// Reach
		'hatred',// Special Attacks
		[
			'level' => 9,
			'conc' => 0,
			'spells' => [
				[
					'perday' => 9,
					'list' => [
						'vexing call'
					]
				]
			]
		],// Spell-like Abilities
		[
			[
				'class' => 'Conjurer',
				'prep' => true,
				'level' => 9,
				'stat' => 'cha',
				'conc' => 0,
				'spells' => [
					0 => [
						'list' => [
							'acid splash',
							[
								'name' => 'daze',
								'dc' => true
							],
							'detect magic',
							'read magic'
						]
					],
					1 => [
						'list' => [
							[
								'name' => 'grease',
								'count' => 2,
								'dc' => true,
								'dcMod' => 2
							],
							[
								'name' => 'infernal healing',
								'dc' => true,
								'dcMod' => 2
							],
							[
								'name' => 'mage armor',
								'dc' => true,
								'dcMod' => 2,
								'note' => 'generally assume this spell is already cast'
							]
						]
					],
					2 => [
						'list' => [
							[
								'name' => 'create pit',
								'count' => 2,
								'dc' => true,
								'dcMod' => 2
							],
							[
								'name' => 'web',
								'count' => 2,
								'dc' => true,
								'dcMod' => 2
							]
						]
					],
					3 => [
						'list' => [
							[
								'name' => 'hold person',
								'dc' => true
							],
							'phantom steed',
							[
								'name' => 'suggestion',
								'dc' => true
							]
						]
					],
					4 => [
						'list' => [
							[
								'name' => 'amnesia',
								'dc' => true
							],
							[
								'name' => 'confusion',
								'dc' => true
							]
						]
					],
					5 => [
						'list' => [
							[
								'name' => 'dominate person',
								'dc' => true
							]
						]
					]
				]
			]
		],// Spell Casting
		'',// Spell Casting Note
		[
			'str' => 8,
			'dex' => 14,
			'con' => 14,
			'int' => 13,
			'wis' => 10,
			'cha' => 17
		],// Stats
		0.75,// BAB (1=full, 0.75=3/4 or medium, 0.5=half or slow)
		0,//CMB misc bonus and special cases
		0,//CMD misc bonus and special cases
		[
			'Augment Summoning ss/B/ss',
			'Empower Spell',
			'Extra Summons*',
			'Greater Spell Focus (conjuration)*',
			'Greater Spell Specialization (evoker\'s fangs)',
			'Spell Focus (conjuration)*',
			'Spell Specialization (evoker\'s fangs)',
			'note' => 'Feats marked with * are already included in the creature\'s statistics.'
		],// Feats
		[
			[
				'skill' => 'Knowledge (arcana)',
				'stat' => 'int',
				'bonus' => 12
			],
			[
				'skill' => 'Knowledge (planes)',
				'stat' => 'int',
				'bonus' => 12
			],
			[
				'skill' => 'Spellcraft',
				'stat' => 'int',
				'bonus' => 12
			]
		],// Skills
		[
			'Illager',
			'Infernal'
		],// Languages
		'summoning mastery',// Special Qualities
		'any (Illager Mansions)',// Environment
		'any',// Organization
		'NPC gear (ii/<a href="../items/totem.php" target="_blank">totem of undying</a>/ii)',// Treasure
		[
			[
				'name' => 'Hatred',
				'type' => 'Ex',
				'desc' => 'While Illagers hate all other races, the illagers have a particular hatred for their human and knom cousins. Illagers have a +1 racial bonus on attack rolls against humans and knom.'
			],
			[
				'name' => 'Greater Spell Specialization',
				'type' => 'Ex',
				'desc' => 'By sacrificing a prepared spell of the same or higher level than ii/evoker\'s fangs/ii (3rd), the evoker may spontaneously cast ii/evoker\'s fangs/ii. ii/Evoker\'s fangs/ii is treated as its normal level, regardless of the spell slot used to cast it. The evoker may add a metamagic feat to the spell by increasing the spell slot and casting time, just like a cleric spontaneously casting a cure or inflict spell with a metamagic feat.'
			],
			[
				'name' => 'Summoning Mastery',
				'type' => 'Sp',
				'desc' => 'An evoker can can cast <a href="../spells/vexing_call.php" target="_blank">ii/vexing call/ii</a> as a spell-like ability a number of times per equal to 5 + his Charisma modifier (normally 8). This ability other wise functions as a summoner\'s ii/summon monster I/ii ability, and is increased by 1 from the evoker\'s Extra Summons feat.'
			]
		],// Special Abilities
		$desc='',// Description
		[
			'Gear' => [
				'ii/<a href="../items/totem.php" target="_blank">totem of undying</a>/ii',
				'100 gp of mundane equipment',
				'a collection of emeralds in three sizes together worth approximately 400 gp'
			]
		]
	);
?>
<p>The evoker is unlikely to draw their totem in time to save themself from death. The evoker requires both hands to spellcast, unlike most other casters, and therefore must keep their totem stowed during most of the fight.</p>
<br><br><br>
<?php require $startDir.'pageEnd.php';?>