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
?>
<title>Goodberry Sprig</title>
<?php
	magicItemBlockAuto(
		'Band of Lazuli and Iron',
		'Abjuration',
		20,
		'ring',
		'78,000 gp (+1), 90,000 gp (+2), 110,000 gp (+3), 138,000 gp (+4), 174,000 gp (+5)',
		'—',
		'This ring shaped like the alchemical symbol for cold iron with a circle with four "L" arms, the long lines pointing to either side, around it made of cold iron. Within the circular center is a piece of lapis lazuli with prominent veins of gold. The rest of the band is formed from red wood extending from the arms and meeting in the back. These rings function as holy symbols of the Lapis Lazuli King of dragons, Kundrak, and are distributed by his few followers to weary travelers, generally with special <a href="https://aonprd.com/Rules.aspx?Name=Time%20Traits&Category=Physical%20Traits">timeless</a> geas spells cast on the travelers to prevent the sale of the rings. The travelers are rarely told more than that the rings will "protect [them] in [their] travels," and to not flaunt or mention the rings to anyone else or else they may attract the attention of envious bandits.
		These rings offer continual magical protection in the form of a deflection bonus of +1 to +5 to AC, an equal sacred bonus to saves, and the ability to act as if continually under the effect of a ii/freedom of movement/ii spell. Additionally, each ring can be used once to cast the miracle spell potentially allowing the wearer to make a very powerful request.
		While worn by a living creature, the ring conceals itself from curious eyes. Unless the ring is explicitly pointed out by a creature aware of it, a creature must make a DC 40 Will save when first seeing the ring or else they do not notice its existence. A creature that failed the save can make another save with a +5 bonus if they come in contact with the ring. If the ring is taken off and worn by a different creature, a creature may attempt a new save to notice the ring.',
		false,
		'bb/Requirements/bb Craft Wondrous Item, ii/freedom of movement/ii, ii/miracle/ii, ii/prayer/ii, ii/shield of faith/ii; Special creator must be of a level at least three times the bonus of the ring; bb/Cost/bb 51,500 gp (+1), 57,500 gp (+2), 67,500 gp (+3), 81,500 gp (+4), 99,500 gp (+5) gp'
	);
	require $startDir.'pageEnd.php';
?>