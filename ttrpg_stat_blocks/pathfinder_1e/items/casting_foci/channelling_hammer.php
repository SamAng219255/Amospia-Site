<?php 
	$startDir='';
	for($i=0; $i<10; $i++) {
		if(file_exists($startDir.'pageStart.php')) {
			require $startDir.'pageStart.php';
			break;
		}
		else {
			$startDir='../'.$startDir;
		}
	}
?>
<?php
	magicItemBlockAuto(
		'Hammer of Holy Light',
		'Evocation',
		17,
		'Focus',
		'15,000 gp (3rd), 60,000 gp (6th), 120,000 gp (9th)',
		8,
		'This hammer is shaped like a miniature warhammer which has been scaled down and adjusted slightly to be able to be wielded as a one handed weapon. The sides of the hammer depict holy symbols related a god with an image of radiating light on the top. The handle is equally as ornate though with less specific patterns and a flatter design that can be gripped for long periods without difficulty.
		This hammer functions as a holy symbol of a specific god or pantheon in addition to serving as a casting focus, thus allowing it to simultaneously fill the roll of a divine focus.
		A ii/hammer of holy light/ii can be wielded and enchanted as though it were a masterwork heavy mace.
		Positive energy damage dealt from spells cast using this hammer or from spell-like or supernatural abilities used while wielding this hammer is increased by 50%. Each hammer has a maximum spell level of 3rd, 6th, or 9th and it will not work on spells or abilities of a higher level. This bonus does not stack with the Empower Spell feat. The caster may also add twice the enhancement bonus to the DCs of such spells and abilities.
		The hammer may be further empowered to greater allow the wielder to overcome the defenses of the undead. Once upgraded, half of all damage dealt to undead from spells cast using this hammer; spell-like, supernatural, and extraordinary abilities performed while wielding this hammer; or dealt by this hammer results directly from divine power and is therefore not subject to being reduced by energy immunities or resistances, DR, the incorporeal quality, or other such abilities. Similarly, this effect only applies to spells and abilities at or below the hammer\'s maximum spell level. The caster may also add the hammer\'s enhancement bonus to caster level checks made to bypass spell resistance vs undead creatures from spells cast with this hammer or from spell-like abilities performed while wielding this hammer.',
		false,
		'bb/Requirements/bb Craft Wondrous Item or Craft Magic Arms and Armor; bb/Cost/bb 7,500 gp (3rd), 30,000 gp (6th), 60,000 gp (9th)
		bb/Upgrade/bb:
		bb/Requirements/bb Craft Magic Arms and Armor, ii/flame strike/ii; bb/Cost/bb 2,500 gp (3rd), 10,000 gp (6th), 20,000 gp (9th)'
	);
	require $startDir.'pageEnd.php';
?>