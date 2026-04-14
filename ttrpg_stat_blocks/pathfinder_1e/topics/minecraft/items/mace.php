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
		'Wind Mace',// Name
		'Evocation',// School
		7,// CL
		'weapon',// Slot
		34000,// Price
		12,// Weight
		[
			'This heavy mace is surrounded by whipping winds and its head seems to swing and strike with supernatural momentum. Unlike an ordinary heavy mace, a ii/wind mace/ii is treated as a martial weapon that deals 1d12 points of damage with a x3 critical multiplier.',
			'While falling with a ii/wind mace/ii, the wielder can make an attack against one creature adjacent to their course with the ii/wind mace/ii to deal additional damage and to slow their fall. This is also treated as a charge attack, except the wielder does not receive the bonus on their attack roll if they unintentionally fell. On a successful hit, the target takes an additional 1d6 points of bludgeoning damage for every 10 feet the wielder has fallen thus far. All other creatures with 5 feet, other than the wielder, also take 1 point of damage per 10 feet fallen. The wielder, in turn, loses most of their own momentum and is safely slowed to a halt, preventing them from taking any damage from the distance they have already fallen. They do take damage for the distance fallen after making this attack and can attempt any normal checks or saves as they otherwise could have.'
		],// Desc
		false,// Destruction
		'bb/Requirements/bb Craft Magic Arms and Armor, ii/feather fall/ii, ii/gust of wind/ii; bb/Cost/bb 17,000 gp'// Construction
	);
	require $startDir.'pageEnd.php';
?>