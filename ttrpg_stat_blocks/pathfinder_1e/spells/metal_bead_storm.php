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
		'Metal Bead Storm',// Name
		'Conjuration',// School
		[],// Descriptors
		[
			'arcanist' => 5,
			'bloodrager' => 5,
			'cleric' => 5,
			'inquisitor' => 5,
			'magus' => 5,
			'occultist' => 5,
			'oracle' => 5,
			'psychic' => 5,
			'redmantisassassin' => 5,
			'sorcerer' => 5,
			'wizard' => 5 
		],// Levels
		[
			'V' => 1,
			'S' => 1,
			'M' => 1,
			'MNote' => 'a small pouch of metal beads'
		],// Components
		'1 standard action',// Casting Time
		'Medium',// Range
		false,// Target
		'A swirling storm of metal beads',// Effect
		'10-ft. radius cylinder and 20-foot radius spread, see text',// Area
		'1 round/level and 1 minute per level, see text',// Duration
		'Reflex half, see text',// Save
		'no',// SR
		[
			'This spells creates a 20-foot tall chaotically swirling cylindrical storm of metal beads that attempts to rip through any creatures in the area. Any creatures in the area when the spell is cast or that end their turn in the area take 1d6 points of damage per caster level (maximum 15d6). This damage is treated as being bludgeoning, piercing and slashing damage as the flying beads strike in different ways.',
			'Creatures that pass through the area but do not end their turn in it also receive the damage but receive a +5 bonus on their save.',
			'After a number of rounds equal to 1 round per caster level, the swirling storm of beads ends but the beads fall to the ground where they occupy a 20-foot radius spread and last for 1 minute per caster level. Creatures that move into a square in this area must treat this area as difficult terrain or make a Reflex save. On a failed save their movement ends and they are knocked prone.',
			'You can replace the material component with a pouch metal beads made of a special material to make the storm of beads out of the same material. This pouch costs the same as 20 pieces of ammunition made from that material.'
		]// Description
	);
	require $startDir.'pageEnd.php';
?>