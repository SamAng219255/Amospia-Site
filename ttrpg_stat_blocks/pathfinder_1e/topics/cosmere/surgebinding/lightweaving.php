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
	surgeBlock(
		'Lightweaving', // name
		'Illumination', // surge
		'Lightweavers, Masked Ones, Truthwatchers', // access
		'close (25 ft. + 50 ft./ideal), 5 ft., or self; see text', // range
		false, // target=false
		'visual figment that cannot extend beyond four 10-ft. cubes + two 10-ft. cubes/ideal (S)', // effect=false
		false, // area=false
		10, // cost
		'1 minute', // interval
		true, // dismiss
		[
			'Lightweaving creates a purely visual illusion that can be used to various effects. Lightweaving does not create sound, smell, texture, or temperature. The various details of the illusions created must be created manually by the surgebinder. The surgebinder can use either Disguise or Bluff as appropriate or they can use an artistry skill (such as Craft (painting) or Profession (sculptor)) to set the DC of detecting that it is an illusion. Creatures that see the illusion automatically receive a Perception check on which they are assumed to be taking a 10 to notice that it is an illusion. If this illusion uses a previously created work of art by the surgebinder as a focus, they can use the same result they got on that work of art. If an illusion is interacted with, the individual can make a Perception check against the DC to notice the discrepancies and identify it as an illusion, at which point they can clearly see that it is fake. If they fail they can attempt a Will save against the DC to believe it is an illusion, at which point it still looks real but they have convinced themself it is fake. In any case wherein the illusion is identified as such, the individual cannot see through it or otherwise interact with it differently than before. ',
			'These illusions can be "hollow" in that, when viewed from inside or from a certain direction, it can be seen that the illusion only incorporates the normally visible faces of the object and is otherwise not visible.',
			'The most simple use of lightweaving creates a visual illusion of an object or creature, as visualized by the surgebinder within close range. As a move action, the surgebinder can modify this illusion and move it anywhere within range, potentially giving the appearance of walking or other activities.',
			'Lightweaving can also create an illusion that is tied to the surgebinder, making it move with them. While doing so, a radiant surgebinder does not leak light and does not shed light as what would otherwise be escaping or remaining on the surface is instead whisked into the illusion to continue to feed it. In the case of attaching the lightweaving to a radiant surgebinder, the surgebinding no longer needs to be maintained by spending its cost so long as the surgebinder has remaining light.',
			'A surgebinder can always use lightweaving to replicate the effects of ii/disguise self/ii except as noted in this description.',
			'After obtaining the next ideal, a radiant surgebinder can use lightweaving to replicate the effects of ii/mirror image/ii except as noted in this description.',
			'After obtaining the next two ideals, a radiant surgebinder can use lightweaving to replicate the effects of ii/adjustable disguise/ii except as noted in this description.',
			'When replicating any of these spells, the surgebinder is not made invisible and creating a smaller disguise than themself will make them visible through it. Additionally, the surgebinder can choose to move the effect off of themself and occupy any square within 5 feet.',
			'Any given illusion created by lightweaving can, as a free action, be converted to any other type of illusion which it matches the appearance and range of. Potentially creating an effect wherein there are multiple images of creatures of the same type as the surgebinder with 5 feet of the surgebinder where at any given time any number of them are replicating the actions of the surgebinder while others remain still or walk around as directed.'
		]  // desc
	);
	require $startDir.'pageEnd.php';
?>