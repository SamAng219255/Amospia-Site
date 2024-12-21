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
		'Mok\'nathal',
		11,
		'Mok\'nathal are the mixed children of ogres and orcs. As orcs are themselves descended from ogres, they form and half-way race, strong like ogres and smart like orcs. Despite this, Mo\'nathal are seen as lesser by both ogres and orcs.',
		'',
		'',
		'',
		'',
		'',
		'',
		'',
		[
			'str' => 4,
			'dex' => -2,
			'int' => -2
		],
		'',
		[
			'bb/Humanoid/bb: Mok\'nathal are humanoid creatures with the ogre and orc subtypes.',
			'bb/Medium/bb: Mok\'nathal are Medium creatures and have no bonuses or penalties due to their size.',
			'bb/Normal Speed/bb: Mok\'nathal have a base speed of 30 feet.',
			'bb/Blood Fury/bb: Once per day, whenever a Mok\'nathal takes damage, they fly into a frenzy for 1 minute, gaining a +2 racial bonus to Constitution and Strength, but a –2 penalty to AC.',
			'bb/Reckless Might/bb: Mok\'nathal receive Power Attack as a bonus feat at first level.',
			'bb/Stability/bb: Mok\'nathal receive a +4 racial bonus to your CMD when resisting bull rush or trip attempts while standing on the ground.',
			'bb/Titanic Origins/bb: Mok\'nathal with the arcane bloodline or an elemental bloodline treat their Charisma score as being 2 points higher for all spells and class abilities from the class that gave the bloodline. Mok\'nathal with the earth elemental bloodline treat their Charisma score as being 4 points higher instead.',
			'bb/Weapon Familiarity/bb: Mok\'nathal are proficient with greataxes, and orcish weapons.',
			'bb/Languages/bb: Mok\'nathal begin play speaking Ogre and Orcish. Mok\'nathal with high Intelligence scores can choose from Common, Draenei, and Ravenspeech.'
		],
		false
	);
	require $startDir.'pageEnd.php';
?>