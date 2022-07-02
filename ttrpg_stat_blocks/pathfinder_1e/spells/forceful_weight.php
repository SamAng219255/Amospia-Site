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
	spellBlockAuto(
		'Forceful Weight',// Name
		'Transmutation',// School
		[],// Descriptors
		[
			'arcanist' => 3,
			'bloodrager' => 3,
			'inquisitor' => 3,
			'magus' => 3,
			'occultist' => 3,
			'redmantisassassin' => 3,
			'sorcerer' => 3,
			'wizard' => 3 
		],// Levels
		[
			'V' => 1,
			'S' => 1
		],// Components
		'1 standard action',// Casting Time
		'Close',// Range
		'one weapon or 50 projectiles, all of which must be together at the time of casting',// Target
		false,// Effect
		false,// Area
		'10 min./level',// Duration
		'Will negates (harmless, object)',// Save
		'yes (harmless, object)',// SR
		[
			'This spell makes a weapon magically forceful, improving its ability to deal telling blows. This transmutation increases the critical multiplier of the weapon. The critical multiplier increases by one step (such as from x2 to x3). If the original multiplier is greater than x2, the multiplier increases another step for each step above x2. A critical multiplier of x2 becomes x3, a critical multiplier of x3 becomes x5, and a critical multiplier of x4 becomes x7. The spell can be cast only on bludgeoning weapons. If cast on arrows or crossbow bolts, the ii/forceful weight/ii on a particular projectile ends after one use, whether or not the missile strikes its intended target. Treat shuriken as arrows, rather than as thrown weapons, for the purpose of this spell.',
			'This benefit doesn\'t stack with most other effects that increase the critical multiplier of a weapon (such as the ii/forceful/ii special weapon property) but does stack with any boons acquired as part of capstone abilities (class features acquired at 20th level). When stacking with capstone abilities, both calculate their effects based on the original critical multiplier only. You can\'t cast this spell on a natural weapon, such as a claw.',
			'Attempting to cast ii/forceful weight/ii on a weapon with the ii/keen/ii special weapon property or that is under the affect of the ii/keen edge/ii spell, or similar spells, causes the spell to fail. Similarly, attempting to cast ii/keen edge/ii on weapon under the affect of ii/forceful weight/ii, causes the spell to fail.'
		]// Description
	);
	require $startDir.'pageEnd.php';
?>