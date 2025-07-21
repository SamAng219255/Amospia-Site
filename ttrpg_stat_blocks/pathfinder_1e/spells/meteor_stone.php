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
		'Meteor Stone',// Name
		'Evocation',// School
		[
			'fire or cold; see text'
		],// Descriptors
		[
			'antipaladin' => 6,
			'arcanist' => 6,
			'bloodrager' => 6,
			'cleric' => 7,
			'druid' => 7,
			'inquisitor' => 6,
			'magus' => 6,
			'occultist' => 6,
			'oracle' => 7,
			'paladin' => 6,
			'redmantisassassin' => 6,
			'shaman' => 7,
			'sorcerer' => 6,
			'warpriest' => 6,
			'wizard' => 6 
		],// Levels
		[
			'V' => 1,
			'S' => 1,
			'M' => 1,
			'MNote' => 'a rock small enough to fit comfortably in your hand'
		],// Components
		'1 standard action',// Casting Time
		'Long',// Range
		false,// Target
		false,// Effect
		'40-ft. radius spread',// Area
		'instantaneous',// Duration
		'none or Reflex half, see text',// Save
		'yes',// SR
		[
			'As part of casting this spell, you hurl the stone at the target location, which grows into either a 2-foot diameter meteor that leaves a fiery trail of sparks or a 2-foot diameter comet that leaves a trail of shimmering icy dust.',
			'If you aim the meteor or comet at a specific creature, you may make a ranged touch attack to strike the target with the meteor or comet. If the creature is struck, it takes 2d6 points of bludgeoning damage (no save) and takes a –4 penalty on the saving throw against the meteor\'s fire damage or comet\'s cold damage (see below). If you aimed the meteor or comet at a target and it misses, it simply explodes at the nearest corner of the target\'s space.',
			'Once the meteor or comet reaches its destination, it explodes in a 40-foot radius spread, dealing 1d6 points of damage per caster level (maximum 15d6) to each creature in the area. If you chose a meteor this damage is fire damage. If you chose a comet, this damage is cold damage. This spell has the same descriptor as the type of damage done.'
		]// Description
	);
	require $startDir.'pageEnd.php';
?>