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
		'Providing Pitcher',
		'Conjuration',
		5,
		'none',
		5400,
		'—',
		[
			'A ii/providing pitcher/ii is able to, on command, fill with clean drinkable water as ii/create water/ii or, once per day, produce a mysterious grain. This grain can be ground into flour, mixed with water to produce dough, then baked into bread. This bread, then, is able to feed 15 creatures for 1 day.',
			'This bread can be prepared in other ways and so long as it includes the flour from this grain it retains its properties.',
			'This grain does not normally expire or rot but this pitcher is slightly intelligent and is aware of the status of all grain produced by it and if it determines that the grain is being stockpiled instead of consumed, all the grain and everything made from it will immediately rot away and the pitcher will not produce any more for 1 week.'
		],
		false,
		'bb/Requirements/bb Craft Wondrous Items, ii/create food and drink/ii; bb/Cost/bb 2,700 gp'
	);
	require $startDir.'pageEnd.php';
?>