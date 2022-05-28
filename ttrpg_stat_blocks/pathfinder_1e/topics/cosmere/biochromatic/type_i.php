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
		'Type I BioChromatic Entities',
		'info',
		quick_array([
			'Spontaneous Sentient BioChromatic Manifestations in a Deceased Host, also known as the Returned, are the only known natural BioChromatic entity. Following death, some individuals are given visions of the future and allowed to return to life with a divine Breath. This divine Breath grants them the fifth heightening. The visions provided are of some disaster which will eventually take place and the Returned are brought to life in order to prevent this from coming to fruition, generally through the use of their divine Breath. Beyond any ordinary breaths held by a Returned which can be used as normal, a Returned possesses a single divine Breath which can be given away to dramatic effect. While there are many possible effects capable by use of a divine Breath some include instantly and completely healing an individual, regrowing lost body parts, and healing them of all poisons, diseases, and negative conditions; cleansing an entire region of a certain disease; and dramatically improving crop yields over the next several years. Once a Returned gives away their divine Breath, they immediately die. Returned appear as an idealized version of themselves as they see it.',
			'Returned consume one breath each day. If the Returned only has their Divine Breath remaining, they consume the Divine Breath and die.'
		]),
		true
	);
	require $startDir.'pageEnd.php';
?>