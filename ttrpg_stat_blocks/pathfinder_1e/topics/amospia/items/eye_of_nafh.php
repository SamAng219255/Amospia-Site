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
	magicItemBlockAuto(
		'The Eye of Nafh',// Name
		'Divination',// School
		21,// CL
		'none',// Slot
		'—',// Price
		1,// Weight
		'One of the three artifacts created in combination of the magic of one the Narmen Sects and the power of the Arkon. This ii/ aa/endereye|eye of ender/aa /ii emanates an unnerving presence and is capable of sensing far more than portals. The eye telepathically conveys all it senses and is entirely aware of everything within 120 feet of it. This bypasses illusions and other magic like ii/true seeing/ii but also bypasses Stealth and Slight of Hand as well as anything that could be discovered using a Perception check in addition to being able to read and understand every language and magical writing and being able to sense magic and alignment auras like ii/arcane sight/ii and ii/aura sight/ii respectively. Additionally, the eye cannot be fooled or blocked by any physical or supernatural barrier. Instead of being able to be directed via the use of specific command words, the eye can be telepathically directed by the wielder to locate any object or creature or class of objects or creatures with infinite range as well as telepathically conveying the distance to the object. If the target object is on another plane, the eye telepathically conveys the plane and rough location on the plane to the creature.
		The eye can also be used, as a standard action, to create an invisible magical sensor through which the wielder can see and hear using all of the eye\'s senses. This sensor can be placed at any location you are aware of or at the location the eye is watching. There is no limit to the distance at which the eye can be placed and it can be placed on another plane. The sensor can be directed to follow an object or creature or to move up to 1200 feet as a move action. The eye can be dismissed as a free action and looking through the eye does not prevent the use of the wielder\'s normal sense or the normal sense of the eye.
		If the eye is watching a creature within 300 feet, the wielder can spend a full round action focusing the eye\'s gaze into the target\'s soul. At which point the target must make a DC 30 Will save. On a failed save the target falls under the control of any creature wielding the eye as per ii/dominate person/ii except that the target never receives a new save, the target will cary out self-destructive orders, and the duration is permanent or until dismissed, though only 20 creatures can be controlled this way at a time.',// Desc
		true,// Destruction
		'Should a powerful celestial under the effect of ii/mind blank/ii or a similar spell cast ii/blindness/ii or another blinding spell on the eye and succeeds at a DC 45 caster level check, the eye will spin wildly before going dark and transforming into a sphere of pure adamantite.'// Construction
	);
	require $startDir.'pageEnd.php';
?>