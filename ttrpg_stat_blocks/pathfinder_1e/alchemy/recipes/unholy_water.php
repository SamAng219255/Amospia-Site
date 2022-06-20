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
		'Unholy Water',// Name
		'Bomb',
		[
			'evil'
		],// Descriptors
		2,// Level
		'instantaneous',// Duration
		'Reflex half or negates; see text',// Saving Throw
		[
			'Despite unholy water\'s normal association with profane magic, unholy water itself is not inherently magic and can be created through careful alchemical processes, though doing so is more difficult than using magic. This alchemically created unholy water is often referred to as "artificial unholy water" and is created similarly to normal unholy by using silver to channel negative energy to imbue into the water, granting it its properties.',
			'This ii/unholy water/ii deals 1d8 points of damage to target good outsiders with a Reflex save to reduce the damage by half. Creatures in the area of the splash take half as much damage as if they were the target and may make a Reflex save to negate the damage.',
			'This damage counts as damage from unholy water.'
		], // Description
		'5 pounds of powdered silver worth 25 gp'
	);
	require $startDir.'pageEnd.php';
?>