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
		'Rusting Bomb',// Name
		'Bomb',// Form (Sub-Form(s))
		[
			'destruction'
		],// Descriptors
		2,// Level
		'instantaneous',// Duration
		'Reflex half or negates (object); see text',// Saving Throw
		[
			'The contents of this clay jar rapidly oxidize any metal objects they come in contact with. If the target creature is made of metal, it takes 1d8 points of damage per alchemy level (maximum 5d8), with a reflex save for half. Creatures made of metal within the splash radius take half the damage rolled and receive a reflex save to negate the damage.',
			'Any metal objects within the radius gain the broken condition though magic items and items held or worn by creatures receive a reflex save to negate this effect. Affected items that already possess the broken condition are destroyed instead unless they are magical.',
			'Magical items have additional protective magic that the alchemy has difficulty overcoming and magical items that would be destroyed by this effect are instead reduced to 1 hit point and are non-functional. These items appear to made of solid rust and can still take physical damage destroying them but can take no more damage from this effect until they are restored. They also lose any hardness and their magic aura is weakened as though they had a caster level of 1. These objects can be restored by any magic or ability capable of repairing magic items.'
		] // Description
	);
	require $startDir.'pageEnd.php';
?>