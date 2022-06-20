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
	advAlchemySimpleBlock(
		'Infused Holy Water',// Name
		'Bomb',
		[
			'good'
		],// Descriptors
		2,// Level
		'instantaneous',// Duration
		'Reflex half or negates; see text',// Saving Throw
		[
			'Despite holy water\'s normal association with divine magic, holy water itself is not inherently magic and can be created through careful alchemical processes, though doing so is more difficult than using magic. This alchemically created holy water is often referred to as "artificial holy water" and is created similarly to normal holy by using silver to channel positive energy to imbue into the water, granting it its properties. Unlike when created ordinary holy water, however, alchemists can tweak the recipe and reinforce its ability to counteract the undead.',
			'ii/Infused holy water/ii deals 1d8 points of damage to target evil outsiders and undead. If the target is an undead, they take an additional 1d8 of damage for every two alchemy levels after first, to a maximum of 5d8 total damage. The target may make Reflex save to reduce the damage by half. Creatures in the area of the splash take half as much damage as if they were the target and may make a Reflex save to negate the damage.',
			'This damage counts as damage from holy water.'
		], // Description
		'5 pounds of powdered silver worth 25 gp'
	);
	require $startDir.'pageEnd.php';
?>