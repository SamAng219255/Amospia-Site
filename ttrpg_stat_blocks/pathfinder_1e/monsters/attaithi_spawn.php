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
		'Attaithi Spawn',// name
		false,// alt name
		'As you watch this noble woman take off her porcelain mask, her skin appears to transform, becoming crushed bricks, splinters of wood, and smashed glass. The creature would almost appear to be a haphazardly assembled construct or maybe even a strange elemental, if it weren\'t for the white-gold light streaming from every crack and crevice in its form.',// lore text
		4,// CR
		false,// MR
		false,// Custom XP
		false,// Race
		[],// Class
		'N',// Alignment
		'Medium',// Size
		'false animate',// Type
		4,// Misc Initiative Mod
		false,// Mythic Initiative
		'darkvision 60 ft.',// Senses
		0,// Misc Perception Mod
		'',// Aura
		[
			'deflection' => 2,
			'dodge' => 1,
			'natural' => 6
		],// Misc AC bonuses
		[4,8,4,"; fast healing 2"],// Number of hit dice, Hit dice size, <additional hp bonus>, <hp notes (fast healing/regen/etc)>
		[
			[
				'good' => false,// Fortitude
				'mod' => 0
			],
			[
				'good' => false,// Reflex
				'mod' => 0
			],
			[
				'good' => true,// Will
				'mod' => 0
			]
		],// Fortitude/Reflex/Will save good/bad and misc bonuses
		'channel resistance +2; DR 5/copper; Immune false animate traits; Resist fire 10, acid 10',// Defensive Abilities
		'Attaithi weaknesses',// Weaknesses
		'30 ft.',// Speed
		[
			[
				'type' => 'Melee',
				'list' => [
					[
						'name' => 'slam',
						'mod' => 0,
						'stat' => 'str',
						'damage' => '1d4+1 plus energy overload'
					]
				]
			]
		],// Attacks
		5,// Reach
		'energy overload (1 level, DC 15), energy suffusion',// Special Attacks
		[],// Spell-like Abilities
		[],// Spell Casting
		false,// Spell Casting Note
		[
			'str' => 12,
			'dex' => 12,
			'con' => 'cha',
			'int' => 11,
			'wis' => 18,
			'cha' => 17
		],// Stats
		0.75,// BAB (1=full, 0.75=3/4 or medium, 0.5=half or slow)
		0,//CMB misc bonus and special cases
		0,//CMD misc bonus and special cases
		[
			'Toughness*',
			'Skill Focus (Perception)' 
		],// Feats
		[
			[
				'skill' => 'Knowledge (religion)',
				'stat' => 'int',
				'bonus' => 4+3
			],
			[
				'skill' => 'Perception',
				'stat' => 'wis',
				'bonus' => 4+3+3
			],
			[
				'skill' => 'Sense Motive',
				'stat' => 'wis',
				'bonus' => 4+3
			],
			[
				'skill' => 'Spellcraft',
				'stat' => 'int',
				'bonus' => 4+3
			]
		],// Skills
		[
			'celestial'
		],// Languages
		'gaseous form, shadowless, spider climb, steal face',// Special Qualities
		'any',// Environment
		'solitary, pair, gang (3–6), or pack (7–12)',// Organization
		'standard',// Treasure
		[
			[
				'name' => 'Attaithi Weaknesses',
				'type' => false,
				'desc' => 'Attaithi cannot tolerate the strong odor of oranges and will not enter an area laced with it. Similarly, they recoil from statues that include a descript face or strongly presented unholy symbols. These things don\'t harm the attaithi—they merely keep it at bay. A recoiling attaithi must stay at least 5 feet away from the statue or unholy symbol and cannot touch or make melee attacks against that creature. Holding an attaithi at bay takes a standard action. After 1 round, an attaithi can overcome its revulsion of the object and function normally each round it makes a DC 25 Will save.
				Attaithi cannot enter a private home or dwelling unless invited in by someone with the authority to do so.
				Reducing an attaithi\'s hit points to 0 or lower incapacitates it but doesn\'t always destroy it (see fast healing). However, certain attacks can slay attaithi. Each round of immersion in running water inflicts damage on an attaithi equal to one-third of its maximum hit points—an attaithi reduced to 0 hit points in this manner is destroyed. Driving a stone spike through a helpless attaithi\'s heart instantly slays it (this is a full-round action). However, it returns to life if the spike is removed, unless the head is also severed and anointed with unholy water.'
			],
			[
				'name' => 'Energy Overload',
				'type' => 'Su',
				'desc' => 'A creature hit by an attaithi\'s slam (or other natural weapon) gains one unstable bonus level. This ability only triggers once per round, regardless of the number of attacks an attaithi makes.'
			],
			[
				'name' => 'Energy Suffusion',
				'type' => 'Su',
				'desc' => 'An attaithi can suffuse energy into a grappled opponent; if the attaithi establishes or maintains a pin, it suffuses energy, dealing 1d4 points of Constitution damage. The attaithi heals 5 hit points or gains 5 temporary hit points for 1 hour (up to a maximum number of temporary hit points equal to its full normal hit points) each round it suffuses energy.'
			],
			[
				'name' => 'Fast Healing',
				'type' => 'Su',
				'desc' => 'An attaithi spawn also gains fast healing 2. If reduced to 0 hit points in combat, an attaithi spawn assumes ii/gaseous form/ii (see below) and attempts to escape. It must reach its nexus home within 2 hours or be utterly destroyed. (It can normally travel up to 9 miles in 2 hours.) Additional damage dealt to an attaithi spawn forced into ii/gaseous form/ii has no effect. Once at rest, the attaithi is helpless. It regains 1 hit point after 1 hour, then is no longer helpless and resumes healing at the rate of 2 hit points per round.'
			],
			[
				'name' => 'Gaseous Form',
				'type' => 'Su',
				'desc' => 'As a standard action, an attaithi can assume ii/gaseous form/ii at will (caster level 5th), but it can remain gaseous indefinitely and has a fly speed of 20 feet with perfect maneuverability.'
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
				'desc' => 'As a full-round action, an attaithi can turn a willing or helpless creature into a mask that can be worn to take their appearance as ii/greater claim identity/ii except the mask lasts until it is dispelled or damaged and the target is unable to cast spells or use any abilities, including ones require purely mental actions. When the attaithi uses this ability, the target may make a DC 19 Fortitude save to negate it.'
			]
		],// Special Abilities
		$desc=''// Description
	);
	require $startDir.'pageEnd.php';
?>