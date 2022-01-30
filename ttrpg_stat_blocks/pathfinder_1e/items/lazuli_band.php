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
	magicItemBlockAuto(
		'Band of Lazuli and Iron',
		'Abjuration',
		20,
		'ring',
		'278,000 gp (+1), 290,000 gp (+2), 310,000 gp (+3), 338,000 gp (+4), 374,000 gp (+5)',
		'—',
		'The centerpiece of this ring is made of cold iron and shaped like the alchemical symbol for cold iron, which is a circle with four "L" arms around it, the long lines pointing to either side and extending into the band. Within the circular center is a piece of lapis lazuli with several veins of gold including one particularly prominent vein through the middle. The rest of the band is formed from red wood extending from the arms and meeting in the back. These rings function as holy symbols of the Lapis Lazuli King of dragons, Kundrak, and are distributed by his few followers to weary travelers, generally with special <a href="https://aonprd.com/Rules.aspx?Name=Time%20Traits&Category=Physical%20Traits">timeless</a> geas spells cast on the travelers to prevent the sale of the rings. The travelers are rarely told more than that the rings will "protect [them] in [their] travels," and to not flaunt or mention the rings to anyone else or else they may attract the attention of envious bandits.
		These rings offer continual magical protection in the form of a deflection bonus of +1 to +5 to AC, an equal sacred bonus to saves, and the ability to act as if continually under the effect of a ii/freedom of movement/ii spell. Additionally, each ring can be used once to cast the ii/miracle/ii spell potentially allowing the wearer to make a very powerful request.
		Creatures unaware of the ii/miracle/ii granting property of the rings can still take advantage of it. Any wearer placed in a dire circumstance making an earnest plea in their heart automatically causes the ii/miracle/ii to be triggered, answering their plea. Once the ii/miracle/ii is expended from the ring, the prominent vein of gold fades away and the other veins become slightly dimmer. Even to the untrained eye, it appears as though some radiance has been expended from the ring.
		While worn by a living creature, the ring conceals itself from curious eyes. Unless the ring is explicitly pointed out by a creature aware of it, a creature must make a DC 40 Will save when first seeing the ring or else they do not notice its existence. A creature that failed the save can make another save with a +5 bonus if they come in contact with the ring. If the ring is taken off and worn by a different creature, a creature may attempt a new save to notice the ring.
		This ring also disguises its magical presence. When an effect is used that would detect the ring\'s magical aura, the user must make a DC 20 caster level check or else it fails to detect the ring\'s magic aura. With the exception that, unless the check beat the DC by 10 or more, it fails to discover the ii/miracle/ii granting properties of the ring and registers the item as having a caster level of only 7 and therefore a Moderate magic aura instead of a Strong aura. If both parties are unaware of the ii/miracle/ii granting properties of the ring, or if it has already been expended, the price is treated as being 88,000 gp (+1), 100,000 gp (+2), 120,000 gp (+3), 148,000 gp (+4), 184,000 gp (+5). These rings can also be created without the ii/miracle/ii granting properties. Requirements for creating a ring without the ii/miracle/ii granting properties are listed below as the alternate requirements.',
		false,
		'bb/Requirements/bb Craft Wondrous Item, ii/freedom of movement/ii, ii/miracle/ii, ii/prayer/ii, ii/shield of faith/ii; Special creator must be of a level at least three times the bonus of the ring; bb/Cost/bb 151,500 gp (+1), 157,500 gp (+2), 167,500 gp (+3), 181,500 gp (+4), 199,500 gp (+5) gp
		bb/Alternate Requirements/bb Craft Wondrous Item, ii/freedom of movement/ii, ii/prayer/ii, ii/shield of faith/ii; Special creator must be of a level at least three times the bonus of the ring; bb/Cost/bb 44,000 gp (+1), 50,000 gp (+2), 60,000 gp (+3), 74,000 gp (+4), 92,000 gp (+5) gp'
	);
	require $startDir.'pageEnd.php';
?>