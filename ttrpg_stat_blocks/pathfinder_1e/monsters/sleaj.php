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
<title>Sleaj</title>
<?php
	monsterBlockAuto(
		'Sleaj',
		false,
		'Before your eyes, what once appeared to be an ordinary stone, shifts and changes colors expanding and taking on the appearance of a human male.',
		'1/2',
		false,
		false,
		'Sleaj',
		[
			'Warrior' => 0
		],
		'N',
		'Medium',
		'ooze',
		0,
		false,
		'blind, tremorsense 60 ft.',
		1,
		'',
		[],
		[1,8],
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
				'good' => false,
				'mod' => 0
			]
		],
		'amorphous, ooze traits',
		'',
		30,
		[],
		5,
		'engulf',
		false,
		[],
		'',
		[
			'str' => 12,
			'dex' => 12,
			'con' => 20,
			'int' => 12,
			'wis' => 12,
			'cha' => 8
		],
		0.75,
		[
			'grapple' => 4
		],
		[
			'bull rush' => 10,
			'notes' => 'can\'t be tripped'
		],
		[
			'Blind Fighting'
		],
		[
			[
				'skill' => 'Disguise',
				'stat' => 'cha',
				'bonus' => 1
			],
			[
				'skill' => 'Survival',
				'stat' => 'wis',
				'bonus' => 1
			]
		],
		[
			'TBD'
		],
		'engulf, change shape, ooze traits',
		'any (caves)',
		'solitary, hunting party (3-5), village (10-20)',
		'standard',
		[
			[
				'name' => 'Amorphous',
				'type' => 'Ex',
				'desc' => 'The sleaj does not require any given part of its body and if a portion is removed the sleaj can return it as a swift or move action as long as it is in contact. Gains the compression ability.'
			],
			[
				'name' => 'Engulf',
				'type' => 'Ex',
				'desc' => 'The sleaj can attempt a special grapple that does not provoke an attack of opportunity, by moving into the targets square. The sleaj does not need to see the target to initiate this grapple, only attempt to move into their square. If this grapple check succeeds, the ooze moves into the target\'s square. Creatures grappled this way takes acid damage equal to 1d6 plus an additional 1d6 points per two hit dice the sleaj has over the first. This damage is taken each round at the start of the creature\'s turn. An engulfed creature cannot breathe.
					When a sleaj sustains an engulf or standard grapple, they can choose to convert it to a regular grapple or engulf respectively.'
			],
			[
				'name' => 'Change Shape',
				'type' => 'Ex',
				'desc' => 'As a swift action, the sleaj can take the form of any medium or small aberration, animal, humanoid, magical breast, monstrous humanoid, ooze, outsider, plant, undead, or vermin. This transformation is primarily superficial. The sleaj receives any burrow, climb, land, or swim speeds their new form possesses up to 30 feet, replacing their own speeds, and is limited to actions that can be performed by the limbs possessed by their new form. The sleaj receives a +10 bonus to disguise as the form they took. The sleaj does not receive any other abilities or statistical changes from the transformation. The sleaj can also use this ability to take the form of a medium or small inanimate object. While the sleaj can visually mimic any object, it is limited in the types of tactile textures it can replicate. It can produce skin-like, hairy, gelatinous, hard, or slimy surfaces. Creatures coming into contact with regions of the sleaj\'s surface that do not fall into one of these categories may attempt an additional perception check with a +5 bonus. It is not able to replicate scents. This ability lasts until it takes a new form as a swift action or returns to their original form as a free action.'
			]
		],
		$desc=''
	);
	require $startDir.'pageEnd.php';
?>