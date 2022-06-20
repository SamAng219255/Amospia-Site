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
	advAlchemyActivatedBlock(
		'Desnan Candle',// Name
		false,
		[
			'fire',
			'firework',
			'light'
		],// Descriptors
		1,// Level
		'1 standard action',// Activation Time
		'1 round/level',// Duration
		'none',// Saving Throw
		[
			'When lit, this tube fires a colorful, glowing projectile each round. This projectile is automatically fired each round, but the wielder may make a standard action each round to aim the projectile as a touch-based ranged weapon attack with an increment of 20 feet and maximum range of 100 feet. The first projectile is aimed as part of activating the item. These projectiles glow like a candle and deal 1d6 fire damage and 1d2 non lethal damage on a successful hit. On a critical hit the target is also blinded for 1 round. The wielder is always considered proficient with this weapon.'
		] // Description
	);
	require $startDir.'pageEnd.php';
?>