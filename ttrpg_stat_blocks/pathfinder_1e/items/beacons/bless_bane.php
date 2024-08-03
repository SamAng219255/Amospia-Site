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
		'Beacon of Bless and Bane',
		'Enchantment',
		1,
		'none',
		4000,
		'—',
		[
			'While active, allies within a 50-foot-radius burst gain a +1 morale bonus on attack rolls and on saving throws against fear effects while enemies take a -1 penalty on such rolls. Creatures in the area can make a Will save with a DC of 11 plus the user\'s wisdom modifier to negate the effects of the beacon for 10 minutes. This affects all allies and enemies in the area as long as they remain in the area.',
			'A ii/beacon of bless and bane/ii can only be activated by a creature capable of casting both ii/bless/ii and ii/bane/ii.'
		],
		false,
		'bb/Requirements/bb Craft Wondrous Items, ii/bane/ii, ii/bless/ii; bb/Cost/bb 2,000 gp'
	);
	require $startDir.'pageEnd.php';
?>