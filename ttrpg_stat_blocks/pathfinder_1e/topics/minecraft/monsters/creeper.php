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
<title>Creeper</title>
<?php
	monsterBlockAuto(
		'Creeper',// name
		false,// alt name
		'An almost humanoid form appears from the underbrush. This creature appears to be made of moss and stands with a head holding two sunken eye-sockets and an indentation resembling an open and frowning mouth, a torso-like shape bearing no arms, a pair of fused mossy stalks resembling a pair legs fused together in the middle, and 4 stubby appendages used for walking where you expect the lower half of the shins and the feet to be.',// lore text
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
		'camouflage, opportunistic stealth',// Special Qualities
		'any (forests and jungles)',// Environment
		'solitary, conflagration (2-8)',// Organization
		'none',// Treasure
		[
			[
				'name' => 'Camouflage',
				'type' => 'Ex',
				'desc' => 'Creepers gain a +4 bonus to stealth in areas with abundant greenery such as in a forest or jungle.'
			],
			[
				'name' => 'Explode',
				'type' => 'Ex',
				'desc' => 'Creepers spread their spores in a violent eruption, preferrably one close enough to an unwitting creature to take them out so that the spores can grow in the corpse. Creepers can explode as a full-round action dealing 7d8 points of damage to all creatures within 15 feet at the beginning of the creeper\'s next turn. Affected creatures can make a DC 15 reflex save to halve the damage taken. Any ongoing effects affecting the creeper when it explodes apply to any creature that failed their save for the remaining duration. Creatures which are currently flat-footed against the creeper are denied their dexterity bonus. If no creatures are within 20 feet at the beginning of its turn, the creeper can make a DC 11 reflex save. On a successful save the creeper does not explode. If the creeper does explode it immediately dies.'
			],
			[
				'name' => 'Opportunistic Stealth',
				'type' => 'Ex',
				'desc' => 'Creepers are skilled at making their way behind a potential target while they are distracted by combat. A creeper is treated as having sufficient cover from all target creatures to hide using stealth so long as the last directionally oriented action the target creature made in the last turn interacted with (such as by attacking or casting a spell on) a creature or area opposite the creeper. When in doubt about whether the creature or area is on the opposite side of the target from the creeper, trace an imaginary line from the center of the creeper\'s square to the center of the region of the creature or area the target last interacted with. If the line passes through opposite borders of the target\'s space (including corners of those borders), then the creature or area is opposite the creeper.'
			]
		],// Special Abilities
		$desc=''// Description
	);
	block(
		'Charged Creeper (CR 8)',
		'variants',
		quick_array(
			'Through various means a creeper can become charged. A charged creeper glows with a flickering blue light that illuminates them and their surroundings as ii/faerie fire/ii. Charged creeepers possess a significantly potent explosion that deals 14d8 points of damage to creatures within 30 feet. Charged creeper explosions also have the uncanny ability to decapitate victims. Creatures which roll a natural 1 on their save against a charged creepers explosion have their head removed as by the vorpal weapon property. Any creature which dies to a charged creeper\'s explosion have their head decapitated which remains otherwise unharmed.'
		)
	);
	require $startDir.'pageEnd.php';
?>