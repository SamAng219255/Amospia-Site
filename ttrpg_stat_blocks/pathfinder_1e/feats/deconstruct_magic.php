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
		'Deconstruct Magic',
		'feat',
		quick_array([
			'You can deconstruct magic items.',
			'bb/Prerequisites/bb: Caster level 3rd.',
			'bb/Benefit/bb: You can break down the enchantments possessed by magic items and recover magical reagents. You can deconstruct magic armor, potions/oils, rings, rods, shadow piercings, staves, wands, weapons, and wondrous items though you cannot deconstruct artifacts, constructs, scrolls, or any other magical creations. Deconstructing a magic item takes 1 day for each 4,000 gp in its price, after which you must make a spellcraft or aproppriate Deconstruction check. The DC is the same a crafting the item. If you succeed, you recover an amount raw magical reagents worth the crafting cost of the item that can be used to create or repair similar magic items or sold at half price.'
		]),
		true
	);
	require $startDir.'pageEnd.php';
?>