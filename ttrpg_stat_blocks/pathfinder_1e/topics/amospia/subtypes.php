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
	block(
		'Monster Subtypes',
		'desc',
		[
			'Some creatures have one or more subtypes. Subtypes add additional abilities and qualities to a creature.'
		]
	);
	block(
		'Alial',
		'subtype',
		quick_array([
			'Alial races have (generally suppressed) magical energy that infuses a specific part of their body. Though this energy may be present in the object before the creature\'s death, alial objects are non-magical until after the creature\'s death and only acquire their abilities if they are still part of the creature when they die. This body part must be hard like bone or a gemstone. This object can otherwise take many different forms. The vast majority of alial races are descended from narmen, most of whose alial objects take the form of a long straight tusk that protrudes through their upper lip along the base of their nose. What exact form this takes is listed in the race\'s or monster\'s stat block. Alial races possess the alial subtype. ',
			'Alial objects contain a significantly strong impression of the owner\'s identity. Whether or not the creature is deceased, alial objects can be used as a focus for any spell that requires identifying a creature, such as scrying, to perfectly identify the owner. The owner also receives no saves against such spells.',
			'Alial objects can be incorporated in the blade of a sword-like weapon to grant it some of its magic. Such weapons are known as alial weapons, or aliden blades if an alidens is used. The exact effect is listed in the alial object\'s description. ',
			'Alial objects can also be incorporated into a wand, rod, or staff, increasing or decreasing the strength of spells cast with it. Which spells are affected, and in what way, is also listed in the alial object\'s description. Incorporating the alial object also modifies the way in which they function, as described in the corresponding entries for ii/alial wands/ii, ii/alial rods/ii, ii/alial metamagic rods/ii, and ii/alial staves/ii.',
			'Some alial objects also list additional effects. These effects apply to all objects the alial item is incorporated into as well as to the item itself.'
		])
	);
	require $startDir.'pageEnd.php';
?>