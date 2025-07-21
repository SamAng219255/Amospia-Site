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
	spellBlockAuto(
		'Animate Copper Golem',// Name
		'Conjuration (summoning)',// School
		[],// Descriptors
		[
			'bard' => 1,
			'magus' => 1,
			'medium' => 1,
			'occultist' => 1,
			'psychic' => 1,
			'skald' => 1,
			'sorcerer' => 1,
			'spiritualist' => 1,
			'summoner' => 1,
			'summoner (unchained)' => 1,
			'witch' => 1,
			'wizard' => 1 
		],// Levels
		[
			'V' => 1,
			'S' => 1,
			'F' => 1,
			'FNote' => 'a humanoid copper figure about one and half feet tall worth 30 gp'
		],// Components
		'1 full-round action',// Casting Time
		'0 feet',// Range
		false,// Target
		'a copper golem',// Effect
		false,// Area
		'1 hour/level',// Duration
		'none',// Save
		'no ',// SR
		[
			'You call upon the energies of the plane of Law to form, what can only be described as, an order elemental which you infuse into the statuette to create a temporary golem. When the spell ends, the energies dissipate back to their home plane and the golem reverts to an inanimate statue.',
			'The created copper golem is a Tiny sized creature with a reach of 0 feet, a 20-foot movement speed, and a 10-foot climb speed. It has a single d10 hit die and 5 hit points. It has damage resistance 5 that can be overcome by any weapon whose hardness is at least 10 (like steel). Treat all its ability scores as being 10. Copper golems can carry up to 200 pounds of weight and are never considered encumbered. The copper golem cannot make attacks or activate magic items. The golem cannot speak but can read and understand all languages (including secret languages and codes) known to the caster.',
			'Copper golems are compelled by a need and desire to sort and organize their surroundings. If left alone, a copper golem will continue organizing everything within its reach as it sees fit, generally following any existing form of organization it finds. The caster can also instruct a copper golem on how or what to organize as well as to go to different locations or follow the caster or another creature. If the caster is not around, a copper golem may follow the instructions or other perceived allies, unless previously instructed otherwise.',
			'After every minute that the golem is not sorting and organizing, there is a 50%% chance that the golem gets distracted, wanders off, or otherwise ignores its current instructions to begin sorting things.',
			'Animate copper golem can be made permanent with a permanency spell.'
		]// Description
	);
	require $startDir.'pageEnd.php';
?>