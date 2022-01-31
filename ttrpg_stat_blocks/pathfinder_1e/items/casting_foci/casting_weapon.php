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
		'Casting Weapon',
		'Transmutation',
		5,
		'Focus',
		'+2,000 gp',
		'—',
		'This quality can be applied to any weapon. This weapon acts as a casting focus and can receive a seperate set of enhancement bonuses and special qualities that apply to spells cast using the weapon. Any enhancement bonus added to its functionality as a casting focus also apply to concentration checks and all other checks made as part of casting the spell.',
		false,
		'bb/Requirements/bb Craft Wondrous Item, ii/magic weapon/ii, ii/weaponwand/ii; bb/Cost/bb +1,000 gp'
	);
	require $startDir.'pageEnd.php';
?>