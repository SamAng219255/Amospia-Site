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
		'Iron Rod',
		'Enchantment',
		20,
		'none',
		122000,
		5,
		[
			'This plain iron rod denotes a right to rule and is infused with the powers of Heaven. An ii/iron rod/ii acts as a masterwork light mace. An ii/iron rod/ii has a number of functions as detailed below.',
			'The wielder of an ii/iron rod/ii is aware of any action or item that could adversely affect their stance and their standing with their deity, including magical effects. They acquire this information prior to performing such an action or becoming associated with such an item if they take a moment to contemplate the act.',
			'The wielder of this rod also gains a +5 competence bonus on Diplomacy checks. Furthermore, once per day, and on command, the wielder can affect up to 20 living creatures with ii/good hope/ii, as the spell. If the wielder of an ii/iron rod/ii has the Leadership feat, they may attract double the normal number of followers for their Leadership score; however, if the rod is out of the wielder’s possession for more than 1 week these extra followers leave. In addition, an ii/iron rod/ii radiates a continuous ii/bless/ii effect that affects any cohort, follower, animal companion, familiar, special mount, or creature charmed or summoned by the wielder (but not called creatures or those under dominate or other compulsion effects). Whenever the wielder creates an effect that provides a morale bonus to such creatures (not including the rod\'s ii/bless/ii effect), that bonus increases by 1.',
			'And finally, once per week, an ii/iron rod/ii can be used to perform a powerful ii/miracle/ii without needing the normal material component cost.'
		],
		false,
		'bb/Requirements/bb Craft Rod, ii/bless/ii, ii/detect good/ii, ii/detect law/ii, ii/good hope/ii, ii/miracle/ii; bb/Cost/bb 61,000 gp'
	);
	require $startDir.'pageEnd.php';
?>