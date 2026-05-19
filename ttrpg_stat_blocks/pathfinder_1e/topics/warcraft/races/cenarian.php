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
		'Child of Cenarius',
		18,
		'',
		'',
		'',
		'',
		'',
		'',
		'',
		'',
		[
			'dex' => 2,
			'wis' => 2
		],
		'Dryads and keepers are known for their wisdom and nimbleness.',
		[
			'bb/Monstrous Humanoid/bb: Keepers and dryads are monstrous humanoid creatures with the elf and half-plant subtypes. Unlike other monstrous humanoids, dryads and keepers do not naturally possess darkvision.',
			'bb/Half-Plant/bb: Keepers and dryads possess the half-plant subtype which grants a +2 racial bonus on saving throws against mind-affecting effects, polymorph, and sleep effects.',
			'bb/Medium/bb: Keepers and dryads are Medium creatures and gain no bonuses or penalties from their size.',
			'bb/Swift/bb: Keepers and dryads have a base speed of 40 feet.',
			'bb/Low-light Vision/bb: Dryads and keepers have low-light vision and can see twice as far as humans in conditions of dim light.',
			'bb/Natural Attacks/bb: Keepers and dryads possess 2 hoof natural attacks which are secondary attacks which each deal 1d4 points of bludgeoning damage. They may also possess a single claw attack which is a primary attack that deals 1d6 points of bludgeoning and slashing damage. Dryads and keepers cannot use their hoof attacks as part of the same full attack action as any other attacks. If they use their claw attack as part of the same full attack action as a manufactured weapon, their claw is treated as a secondary natural attack instead.',
			'bb/Quadruped/bb: Keepers and dryads have four legs and a normal sized night elf torso. Dryads and keepers gain a +4 bonus to their CMD against trip attempts and they wear and wield armor, weapons, and other pieces of equipment as though they were Medium sized.',
			'bb/Dream-Blessed/bb: Keepers and dryads with access to the Plant domain use their domain powers and spells at +1 caster level. This trait does not give them early access to level-based powers; it only affects powers that they could already use without this trait. Dryads and keepers with access to kineticist talents can ignore 1 point of burn per hour from a talent of the Wood element.',
			'Keepers and dryads with at least an 11 Wisdom score may cast entangle once per day as a spell-like ability, using their total number of hit dice as their caster level. The DC for this ability is based on their Wisdom modifier.',
			'bb/Magic Resistance/bb: Dryads and keepers have spell resistance equal 6 + their number of hit dice. This spell resistance only applies against arcane spells and spell-like abilities.',
			'bb/Animal Speech/bb: Keepers and dryads are able to communicate with animals as if subject to a continual speak with animals spell.',
			'bb/Skill Bonuses/bb: Dryads and keepers gain a +1 racial bonus on Handle Animal checks and Knowledge (nature) checks.',
			'bb/Languages/bb: Keepers and dryads start speaking Common and Darnassian. Dryads and Keepers with high Intelligence scores can choose from Gnomish, Draenei, Dwarven, Orcish, Pandaren, and Thalassian.'
		],
		false
	);
	require $startDir.'pageEnd.php';
?>