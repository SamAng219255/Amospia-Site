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
		17,
		'ring',
		'15,000 gp (0 wishes), 55,300 gp (1 wish)',
		'—',
		[
			'These ring has a plain band made from polished cold iron and it has a single smooth lapis lazuli stone on it with veins of gold in it. The rings function as holy symbols of the Lapis Lazuli King of dragons, Kundrak, and are distributed by his few followers to weary travelers, generally with special timeless ii/geas/ii spells cast on the travelers to prevent the sale of the rings. The travelers are rarely told more than that the rings will "protect [them] in [their] travels," and to not flaunt or mention the rings to anyone else or else they may attract the attention of envious bandits.',
			'The wearer of one of these bands receives a +1 luck bonus on all saving throws. Its wearer also gains the power of good fortune, usable once per day. This extraordinary ability allows its possessor to reroll one roll that she just made, before the results are revealed. They must take the result of the reroll, even if it\'s worse than the original roll. The ring also grants specific protection from demons, qlippoth, and creatures of the dark tapestry. The wearer receives a +2 deflection to AC against such creatures attacks and are warded against such summoned creatures in a similar manner to protection from evil regardless of the creature\'s alignment. ',
			'The rings can also contain 1 wish. This wish is visually symbolized by a prominent vein of gold across the stone that vanishes after the wish has been expended. To the untrained eye, it is apparent that some amount of radiance has been expended. If the wearer is unaware of the wish, they can still use it. If the wearer is in dire need, whether for their own benefit or another\'s, the wish will automatically be made without their knowledge.'
		],
		false,
		'bb/Requirements/bb Forge Rings, ii/miracle/ii or ii/wish/ii; bb/Cost/bb 7,500 gp (0 wishes), 40,150 gp (1 wish)'
	);
	require $startDir.'pageEnd.php';
?>