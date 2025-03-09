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
	raceBlockAuto(
		'Hobgoblin',
		8,
		'',
		'',
		'',
		'',
		'',
		'',
		'',
		'',
		[
			'str' => +4,
			'dex' => -2,
			'con' => +2,
			'int' => -4,
			'wis' => -2,
			'cha' => -2
		],
		'',
		[
			'bb/Humanoid/bb: Hobgoblins are humanoid creatures with the goblin subtype.',
			'bb/Medium/bb: Hobgoblins are Medium creatures and have no bonuses or penalties due to their size.',
			'bb/Slow Speed/bb: Hobgoblins have a base speed of 20 feet and their speed is never modified by armor or encumbrance.',
			'bb/Bonus Feats/bb: Hobgoblins gain Improved Unarmed Strike as a bonus feat. Hobgoblins with a Strength score of 13 or higher also receive Power Attack as a bonus feat.',
			'bb/Knocking Blows/bb: Hobgoblins gain a +2 recital bonus on combat maneuver checks made to bull rush an opponent.',
			'bb/Stability/bb: Hobgoblins gain a +4 racial bonus to their CMD when resisting bull rush or trip attempts while standing on the ground.',
			'bb/Too Dumb to Fear/bb: Hobgoblins gain a +2 bonus on all saves against fear effects.',
			'bb/Weapon Familiarity/bb: Hobgoblins are proficient with clubs and greatclubs.',
			'bb/Languages/bb: Hobgoblins begin play speaking Goblin and Orcish. Hobgoblins with high Intelligence scores can choose from Common, Gutterspeak, Shalassian, Taur-ahe, Thalassian, and Zandali.'
		],
		false
	);
	block(
		'Favored Class Bonus',
		'favored-class-bonus',
		quick_array(
			[
				'Instead of receiving an additional skill rank or hit point whenever they gain a level in a favored class, hobgoblins have the option of choosing from a number of other bonuses, depending upon their favored class.',
				'The following options are available to all hobgoglins who have the listed favored class.',
				'Barbarian: Add +1 to the barbarian\'s total number of rage rounds per day.'
			]
		),
		true
	);
	require $startDir.'pageEnd.php';
?>