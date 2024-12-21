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
		'Satyr',
		12,
		'',
		'',
		'',
		'',
		'',
		'',
		'',
		'',
		[
			'str' => 2,
			'cha' => 2,
			'wis' => -2
		],
		'',
		[
			'bb/Monstrous Humanoid/bb: Satyr are monstrous humanoid creatures with the elf subtype.',
			'bb/Medium/bb: Satyr are Medium creatures and have no bonuses or penalties due to their size.',
			'bb/Normal Speed/bb: Satyr have a base speed of 30 feet.',
			'bb/Darkvision/bb: Satyr can see perfectly in darkness up to 60 feet away though they can only see in black and white in the dark.',
			'bb/Ancient Hatred/bb: Satyrs gain a +2 dodge bonus to AC against creatures of the elf subtype, a +2 racial bonus on combat maneuver checks made to grapple elves, and a +1 racial bonus on attack rolls against elves.',
			'bb/Beguiling Liar/bb: Satyrs gain a +4 racial bonus on Bluff checks to convince an opponent that what they are saying is true when they tell a lie.',
			'bb/Claws/bb: Satyrs receive two claw attacks. These are primary natural attacks that deal 1d4 points of slashing damage.',
			'bb/Fiendish Sorcery/bb: If a satyr is a sorcerer with the Abyssal or Infernal bloodline, they treat their caster level as 1 higher when casting bonus spells and bloodline powers. This trait does not give satyrs early access to level-based powers; it only affects powers that they could already use without this trait.',
			'bb/Languages/bb: Satyr begin play speaking Common and Darnassian. Satyr with high Intelligence scores can choose from Eredun, Grell, Orcish, and Thalassian.'
		],
		false
	);
	require $startDir.'pageEnd.php';
?>