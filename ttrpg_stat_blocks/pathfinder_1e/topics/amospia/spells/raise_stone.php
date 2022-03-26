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
		'Pettep\'s Raise Stone',// Name
		'transmutation',// School
		[],// Descriptors
		[
			'adept' => 0,
			'antipaladin' => 1,
			'arcanist' => 0,
			'cleric' => 0,
			'druid' => 0,
			'magus' => 0,
			'occultist' => 0,
			'oracle' => 0,
			'paladin' => 1,
			'psychic' => 0,
			'sorcerer' => 0,
			'wizard' => 0
		],// Levels
		[
			'V' => 1,
			'S' => 1
		],// Components
		'1 full-round action',// Casting Time
		'Close',// Range
		'250 cu ft (2 5-foot cubes) of unworked stone per level ',// Target
		false,// Effect
		false,// Area
		'instantaneous',// Duration
		'none',// Save
		false,// SR
		[
			'This spell raises up to 250 cubic feet (2 5\' cubes) of unworked stone per level up into a structure. The stone can only move directly upward and must remain adjacent to a surface which it can attach to. The structure is not magically supported but raised stone solidly attaches to adjacent unworked stone. The structure can not have any detail and must be a single solid piece connected to the ground below it. The structure can possess shapes such as ramps, stairs, archways, and hollow regions. Building a structure that can not hold itself up will cause it to fall apart. If the stone encounters anything in its path other than dirt, sand, gravel, and similar materials, liquids, gases, or loose objects less than 5 pounds, the spell will end, leaving the stone where it was when it encountered the object.',
			'Multiple casters can cast this spell simultaneously to combine their volume of stone. (i.e. 2 4th level casters can move a total of 2000 cu ft (8 5\' cubes) together)',
			'After being affected by this spell, that stone can not be affected by it again for 1 hour.'
		]// Description
	);
	require $startDir.'pageEnd.php';
?>