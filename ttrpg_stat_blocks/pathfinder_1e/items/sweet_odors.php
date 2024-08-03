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
		'Sweet Odors',
		'Enchantment',
		5,
		'none',
		13500,
		'—',
		[
			'These 50 incense sticks are collected by angels and made from the prayers of the righteous. They burn for 1 hour and function as standard incense in addition to providing divine aid. The scent produced by the incense is sweet and lovely to good-aligned creatures and a horrible stench to evil-aligned creatures. Creatures that are neither good nor evil can barely smell the incense which seems slightly flowery. Good-aligned creatures within 40 feet of the incense receive a +1 sacred bonus to attack rolls, weapon damage rolls, saves, and skill checks, while evil-aligned creatures take a -1 penalty on such rolls. Creatures that are neither good nor evil are unaffected.',
			'It is possible for good-aligned divine casters to craft their own sweet odors. The crafter must be joined by at least 11 other good-aligned creatures for the entire duration of crafting, during which they must all offer continuous and sincere prayers praising goodness and good-aligned deities and asking for the protection of the righteous from evil. These prayers are imbued into the incense.'
		],
		false,
		'bb/Requirements/bb Craft Wondrous Items, ii/prayer/ii; bb/Special/bb see text; bb/Cost/bb 6,750 gp'
	);
	require $startDir.'pageEnd.php';
?>