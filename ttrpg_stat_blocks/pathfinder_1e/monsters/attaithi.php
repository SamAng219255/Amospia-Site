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
		'Attaithi',// name
		false,// alt name
		'As you watch this noble woman take off her porcelain mask, her appearance changes, revealing an alluring form though where her face should be is seen only blank featureless scar tissue with only a wicked smile.',// lore text
		9,// CR
		false,// MR
		false,// Custom XP
		'Attaithi cleric 8',// Race
		[],// Class
		[
			'alignment' => 'NE',
			'altruism' => -1,
			'humility' => -1,
			'purity' => -1,
			'honesty' => -2,
			'loyalty' => 0,
			'law' => 1,
			'individualism' => 1,
			'knowledge' => 0,
			'work' => 0
		],// Alignment
		'Medium',// Size
		'humanoid (hyperbiote)',// Type
		4,// Misc Initiative Mod
		false,// Mythic Initiative
		'darkvision 60 ft.',// Senses
		0,// Misc Perception Mod
		'nimbus of light (30 ft., 8 rounds)',// Aura
		[
			'deflection' => 2,
			'dodge' => 1,
			'natural' => 6
		],// Misc AC bonuses
		[8,8,8,"; fast healing 5"],// Number of hit dice, Hit dice size, <additional hp bonus>, <hp notes (fast healing/regen/etc)>
		[
			[
				'good' => false,// Fortitude
				'mod' => 3
			],
			[
				'good' => false,// Reflex
				'mod' => 2+3
			],
			[
				'good' => true,// Will
				'mod' => 3
			]
		],// Fortitude/Reflex/Will save good/bad and misc bonuses
		'channel resistance +4; DR 10/magic and copper; Immune hyperbiote traits; Resist fire 10, acid 10',// Defensive Abilities
		'Attaithi weaknesses',// Weaknesses
		'30 ft.',// Speed
		[
			[
				'type' => 'Melee',
				'list' => [
					[
						'name' => 'slam',
						'mod' => 0,
						'stat' => 'dex',
						'damage' => '1d4+4 plus energy overload'
					]
				]
			]
		],// Attacks
		5,// Reach
		'channel positive energy, create spawn, energy overload (2 levels, DC 18), breath draw (1d4 Con)',// Special Attacks
		[],// Spell-like Abilities
		[
			[
				'class' => 'Cleric',
				'prep' => true,
				'level' => 8,
				'stat' => 'wis',
				'conc' => 0,
				'spells' => [
					0 => [
						'perday' => 'at-will',
						'list' => [
							'light',
							'mending',
							'stabilize',
							'virtue' 
						]
					],
					1 => [
						'list' => [
							[
								'name' => 'command',
								'dc' => true
							],
							[
								'name' => 'cure light wounds',
								'dc' => true,
								'domain' => true
							],
							[
								'name' => 'positive pulse',
								'dc' => true,
								'count' => 2
							],
							'preserve',
							[
								'name' => 'protection from evil',
								'dc' => true
							],
							'sanctify corpse'
						]
					],
					2 => [
						'list' => [
							'consecrate',
							[
								'name' => 'cure moderate wounds',
								'dc' => true,
								'domain' => true
							],
							[
								'name' => 'blinding ray',
								'dc' => true
							],
							'false animation, lesser',
							[
								'name' => 'fear the sun',
								'dc' => true
							],
							[
								'name' => 'spear of purity',
								'dc' => true
							] 
						]
					],
					3 => [
						'list' => [
							'false animation',
							'daylight',
							'holy javelin',
							'life shield',
							[
								'name' => 'searing light',
								'count' => 2,
								'domain' => true
							] 
						]
					],
					4 => [
						'list' => [
							[
								'name' => 'cure critical wounds',
								'dc' => true,
								'domain' => true
							],
							[
								'name' => 'healing flames',
								'dc' => true
							],
							[
								'name' => 'holy smite',
								'dc' => true
							],
							[
								'name' => 'positive pulse',
								'dc' => true
							],
							'rest eternal' 
						]
					]
				]
			]
		],// Spell Casting
		'bb/Domains/bb Healing, Sun',// Spell Casting Note
		[
			'str' => 16,
			'dex' => 18,
			'con' => 'cha',
			'int' => 14,
			'wis' => 26,
			'cha' => 18
		],// Stats
		0.75,// BAB (1=full, 0.75=3/4 or medium, 0.5=half or slow)
		0,//CMB misc bonus and special cases
		0,//CMD misc bonus and special cases
		[
			'Alertness* ss/B/ss',
			'Combat Casting',
			'Combat Reflexes ss/B/ss',
			'Dodge* ss/B/ss',
			'Extend Spell',
			'Improved Channel*',
			'Improved Initiative* ss/B/ss',
			'Lightning Reflexes* ss/B/ss',
			'Toughness* ss/B/ss',
			'Weapon Finesse*' 
		],// Feats
		[
			[
				'skill' => 'Knowledge (religion)',
				'stat' => 'int',
				'bonus' => 8+3
			],
			[
				'skill' => 'Perception',
				'stat' => 'wis',
				'bonus' => 8+3+2
			],
			[
				'skill' => 'Sense Motive',
				'stat' => 'wis',
				'bonus' => 8+3+2
			],
			[
				'skill' => 'Spellcraft',
				'stat' => 'int',
				'bonus' => 8+3
			]
		],// Skills
		[
			'celestial',
			'common',
			'draconic'
		],// Languages
		'channel positive energy, gaseous form, healer\'s blessing, rebuke death, shadowless, spider climb, steal face',// Special Qualities
		'any',// Environment
		'solitary or cluster (attaithi plus 2–8 spawn)',// Organization
		'NPC gear (ii/cloak of resistance/ii +3, ii/headband of alluring charisma/ii +4, ii/ring of protection/ii +2, ii/phylactery of positive channeling/ii)',// Treasure
		[
			[
				'name' => 'Attaithi Weaknesses',
				'type' => false,
				'desc' => 'Attaithi cannot tolerate the strong odor of oranges and will not enter an area laced with it. Similarly, they recoil from statues that include a descript face or strongly presented unholy symbols. These things don\'t harm the attaithi—they merely keep it at bay. A recoiling attaithi must stay at least 5 feet away from the statue or unholy symbol and cannot touch or make melee attacks against that creature. Holding an attaithi at bay takes a standard action. After 1 round, an attaithi can overcome its revulsion of the object and function normally each round it makes a DC 25 Will save.
				Attaithi cannot enter a private home or dwelling unless invited in by someone with the authority to do so.
				Reducing an attaithi\'s hit points to 0 or lower incapacitates it but doesn\'t always destroy it (see fast healing). However, certain attacks can slay attaithi. Each round of immersion in running water inflicts damage on an attaithi equal to one-third of its maximum hit points—an attaithi reduced to 0 hit points in this manner is destroyed. Driving a stone spike through a helpless attaithi\'s heart instantly slays it (this is a full-round action). However, it returns to life if the spike is removed, unless the head is also severed and anointed with unholy water.'
			],
			[
				'name' => 'Channel Positive Energy',
				'type' => 'Su',
				'desc' => 'AS a standard action, the attaithi can channel positive energy to either deal damage to undead creatures or to heal living creatures. Channeling energy causes a burst that affects all creatures of one type (either undead or living) in a 30-foot radius centered on the attaithi. The amount of damage healed is equal 6d6 points of damage and the amount of damage dealt is equal to 6d6+8 damage. Creatures may make a DC 18 Will save to halve the amount damage taken. Undead may not add their channel resistance to their saves when the attaithi channels positive energy. The attaithi may channel energy up to 7 times per day.'
			],
			[
				'name' => 'Create Spawn',
				'type' => 'Su',
				'desc' => 'An attaithi can create spawn out of those it slays a creature with breath draw or energy overload. They enter a coma wherein their body maintains all signs of life before they awaken as an attaithi after 1d4 days. This attaithi is under the command of the attaithi that created it, and remains enslaved until its master\'s destruction. An attaithi may have enslaved spawn totaling no more than twice its own Hit Dice; any spawn it creates that would exceed this limit become free-willed hyperbiotes. An attaithi may free an enslaved spawn in order to enslave a new spawn, but once freed, an attaithi or attaithi spawn cannot be enslaved again.'
			],
			[
				'name' => 'Energy Overload',
				'type' => 'Su',
				'desc' => 'A creature hit by an attaithi\'s slam (or other natural weapon) gains two unstable bonus levels. This ability only triggers once per round, regardless of the number of attacks an attaithi makes.'
			],
			[
				'name' => 'Breath Draw',
				'type' => 'Su',
				'desc' => 'At the end of its turn if it grapples a foe, the attaithi makes the target\'s life force violently erupt before siphoning off a portion of power, inflicting 1d4 Constitution damage. Visibly, this appears as a flash of energy from the target\'s eyes, mouth, and nose and that is sucked up by the creature, often through the mouth.'
			],
			[
				'name' => 'Fast Healing',
				'type' => 'Su',
				'desc' => 'An attaithi also possesses fast healing 5. If reduced to 0 hit points in combat, an attaithi assumes ii/gaseous form/ii (see below) and attempts to escape. It must reach its nexus home within 2 hours or be utterly destroyed. (It can normally travel up to 9 miles in 2 hours.) Additional damage dealt to an attaithi forced into ii/gaseous form/ii has no effect. Once at rest, the attaithi is helpless. It regains 1 hit point after 1 hour, then is no longer helpless and resumes healing at the rate of 5 hit points per round.'
			],
			[
				'name' => 'Gaseous Form',
				'type' => 'Su',
				'desc' => 'As a standard action, an attaithi can assume ii/gaseous form/ii at will (caster level 5th), but it can remain gaseous indefinitely and has a fly speed of 20 feet with perfect maneuverability.'
			],
			[
				'name' => 'Healer\'s Blessing',
				'type' => 'Su',
				'desc' => 'All of the attaithi\'s cure spells are treated as if they were empowered, increasing the amount of damage healed by half (+50%). This does not apply to damage dealt to undead with a cure spell. This does not stack with the Empower Spell metamagic feat.'
			],
			[
				'name' => 'Nimbus of Light',
				'type' => 'Su',
				'desc' => 'The attaithi can emit a 30-foot nimbus of light for a number of rounds per day equal to their cleric level. (normally 8) This acts as a ii/daylight/ii spell. In addition, undead within this radius take an amount of damage equal to the attaithi\'s cleric level each round that they remain inside the nimbus. Spells and spell-like abilities with the darkness descriptor are automatically dispelled if brought inside this nimbus. These rounds do not need to be consecutive.'
			],
			[
				'name' => 'Rebuke Death',
				'type' => 'Sp',
				'desc' => 'The attaithi can touch a living creature as a standard action, healing the target for 1d4 points of damage plus 1 for every two cleric levels they possess. (normally 1d4+4) The attaithi can only use this ability on a creature that is below 0 hit points. They can use this ability a number of times per day equal to 3 + their Wisdom modifier. (normally 11 times)'
			],
			[
				'name' => 'Shadowless',
				'type' => 'Ex',
				'desc' => 'An attaithi casts no shadows and any attempts to depict an attaithi\'s face in a sculpture, painting, or other work of art is rendered impossible.'
			],
			[
				'name' => 'Spider Climb',
				'type' => 'Su',
				'desc' => 'An attaithi can climb sheer surfaces as though under the effects of a ii/spider climb/ii spell.'
			],
			[
				'name' => 'Steal Face',
				'type' => 'Su',
				'desc' => 'As a full-round action, an attaithi can turn a willing or helpless creature into a mask that can be worn to take their appearance as ii/greater claim identity/ii except the mask lasts until it is dispelled or damaged and the target is unable to cast spells or use any abilities, including ones require purely mental actions. When the attaithi uses this ability, the target may make a DC 20 Fortitude save to negate it.'
			]
		],// Special Abilities
		$desc=''// Description
	);
	require $startDir.'pageEnd.php';
?>