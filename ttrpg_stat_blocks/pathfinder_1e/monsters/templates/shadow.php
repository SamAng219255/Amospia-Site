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
		'Shadow (CR +0)',
		'template',
		quick_array([
			'Acquired/Inherited Template Inherited',
			'Simple Template No',
			'Usable with Summons No',
			'',
			'Shadows are individuals born with a soul formed of negative energy instead of positive which were created by the Sceaduinar via spying on and mimicking the Jyoti as an attempt to populate the multiverse with negative energy life. Due to the Sceaduinar\'s lack of creative ability these individuals are simply shadows of already existing races formed of matter from the their native plane, the plane of shadow.',
			'"Shadow" is an inherited template that can be added to any intelligent mortal creature, referred to hereafter as the base creature.',
			'bb/Challenge Rating/bb: The challenge rating of a shadow rarely changes from that of the base creature.',
			'bb/Senses/bb: Shadows retain all of the sense of the base creature and also gain shadow vision.',
			'ii/Shadow Vision/ii (Ex): Native to the darkness of the shadow plane, those with shadow vision are able to see things in dark places with full sight but see areas that are too well lit as washed out and too bright to make out. Shadow vision also lets the creature see a different set of colors; creatures with shadow vision often see the colors of the material plane as grey or nearly grey while seeing many grey or black objects, such as those found in the plane of shadow, as having vibrant colors. Those with Shadow vision can see in areas of darkness as though it were bright light, areas of dim light as it were normal light, normal light as dim light and bright light as darkness. This changes the behaviors of other means of sight such as low-light vision, darkvision, and see in darkness in the same manner: low-light allows seeing twice as far in areas of normal light, darkvision allows seeing areas of bright light though not in color, and see in darkness allows seeing perfectly in the brightest light including Blinding Light. Additionally creatures with Shadow vision treat supernatural darkness as though it were Blinding light to a creature without Shadow vision. Shadows do not lose this property when under the effect of a polymorph effect unless the effect removes their vision all together or unless it specifically mentions this ability.',
			'bb/Special Qualities/bb: A shadow retains all of the special qualities of the base creature and gains the following special qualities.',
			'ii/Negative Energy Affinity/ii (Ex): Shadows are healed by negative energy and harmed by positive energy similar to an undead even though they have no inherit relation to the undead.',
			'ii/Spark of Destruction/ii (Ex): Located deep within the heart of nearly all living things can be found a hidden spark of creation that enables and drives them to create and innovate. This spark originates from the power of creation their souls are composed of. Shadows, however, have souls composed of negative energy, the power of destruction, so instead they have an innate spark of destruction. This does not drive shadows to destroying left and right anymore than the spark of creation drives other races to spending all day sculpting or making art, but it does change some of their affinities.',
			'Shadows are more prone to finding decay, rot, and the natural march of entropy beautiful than where nature has created something. Shadows also have less of an affinity with creation magic than the norm and a stronger one with magic that destroys objects, treating their caster level as 2 less when casting a spell of the creation subschool and treating their caster level as 2 higher when casting a spell with the aa/destruction_descriptor|destruction/aa descriptor. They also receive a -5 penalty to craft skills and an untyped +5 bonus to aa/deconstruction|deconstruction/aa skills, though the penalty to craft skills cannot reduce their result below 1.'
		]),
		true
	);
	require $startDir.'pageEnd.php';
?>