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
		'Unbound Magic',
		'rule',
		quick_array([
			'When in strictly role-playing encounters, spellcasters often find themselves attempting to play the part of a powerful magic user without being able to actually demonstrate that power because they are forced to save it for combats or tight situations.',
			'When using the unbound magic rules, magic users are allowed to cast a version of any spell they can cast for purely role playing effect without spending that spell. For instance, a wizard who knows ii/fireball/ii would be allowed to create an explosion of flame to punctuate their point so long as nothing is mechanically harmed by the flames. This allows casters to demonstrate their power without sacrificing viability later. Additionally, the exact limitations or effect of a spell may be able to be modified to better fit the story so long as the GM allows. Such as using ii/alter self/ii to create a caricature of guard and mock them, despite ii/alter self/ii not being allowed for use in replicating specific creatures.',
			'This can also be extended to creatures with spell-like, supernatural, or extraordinary abilities with a limited number of uses.',
			'If the GM deems this too powerful, they may limit a character\'s ability to do this by requiring a caster level check with a DC of 10 or 15 plus twice the level of the spell in order to create the effect instead.'
		])
	);
	require $startDir.'pageEnd.php';
?>