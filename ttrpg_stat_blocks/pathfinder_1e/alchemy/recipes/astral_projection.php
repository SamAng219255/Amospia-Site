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
	advAlchemyActivatedBlock(
		'Mist of Astral Projection',// Name
		false,
		[
			'mind-affecting'
		],// Descriptors
		5,// Level
		'1 standard action',// Activation Time
		'24 hours',// Duration
		'Will negates',// Saving Throw
		[
			'Uncorking this pressurized fine bottle releases a spray of shimmering rainbow mist that hangs in the air for a moment before fading away. Any creature that breathes in this mist is put in a strange trance that sends their mind to the Astral Plane.',
			'The creature\'s mind projects their astral self onto the Astral Plane, leaving their physical body behind on the Material Plane in a state of suspended animation. Their mind projects an astral copy of them and all they wear or carry onto the Astral Plane.',
			'While you are on the Astral Plane, your astral body is connected at all times to your physical body by an incorporeal silver cord. If the cord is broken, you are killed, astrally and physically. Luckily, very few things can destroy a silver cord. If the astral form is slain, the cord simply returns to your body where it rests on the Material Plane, but does not revive it from its state of suspended animation, rendering you unconscious until the effect wears off. This is a traumatic affair, however, and you gain two permanent negative levels if your astral form is slain. Although astral projections are able to function on the Astral Plane, their actions affect only creatures existing on the Astral Plane.',
			'When this effect ends, your astral body, and all of its gear, vanishes.'
		] // Description
	);
	require $startDir.'pageEnd.php';
?>