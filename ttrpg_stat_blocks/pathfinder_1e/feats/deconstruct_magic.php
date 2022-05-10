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
			'ii/You can deconstruct magic items and can use this knowledge to quickly diable similar items./ii',
			'bb/Prerequisites/bb: Caster level 3rd.',
			'bb/Benefit/bb: You can break down the enchantments possessed by magic items and recover magical reagents. You can deconstruct magic armor, potions/oils, rings, rods, shadow piercings, staves, wands, weapons, and wondrous items though you cannot deconstruct artifacts, constructs, scrolls, or any other magical creations. Deconstructing a magic item takes 1 day for each 4,000 gp in its price, after which you must make a Spellcraft or aproppriate Deconstruction check. The DC is the same a crafting the item. If you succeed, you recover an amount raw magical reagents worth the crafting cost of the item that can be used to create or repair similar magic items or sold at half price.',
			'After deconstructing an item, you are expertly aware of how to break apart its magic and can quickly disable similar items. As a standard action, you may expend a prepared spell or an unused spell slot to disable a touched magic item of a type you have previously deconstructed for 24 hours. If you have at least 5 ranks in Spellcraft of an aproppriate Deconstruction skill you can instead perform this action on an item you can see within Close range or Medium range if you have least 10 ranks or Long range if you have at least 15 ranks. If a creature is holding or wearing the item the creature may make a Will save against this effect with DC equal to your spellcasting DC for a spell of the deconstruction pseudo-sub-school.'
		]),
		true
	);
	require $startDir.'pageEnd.php';
?>